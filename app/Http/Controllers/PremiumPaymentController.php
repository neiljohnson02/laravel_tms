<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\PremiumPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\PremiumTourPaymentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PremiumPaymentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'travel_group' => 'required|string',
            'first_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address_line1' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'card_first_name' => 'required|string',
            'card_last_name' => 'required|string',
            'date' => 'required|date',
            'signature' => 'required|file|mimes:jpg,jpeg,png'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Upload signature
        $signaturePath = $request->file('signature')->store('signatures', 'public');

        $data = $request->all();
        $data['signature'] = $signaturePath;

        $payment = PremiumPayment::create($data);

        return response()->json(['message' => 'Payment submitted successfully', 'data' => $payment]);
    }


     public function getPremiumTours()
    {
        $payment = PremiumPayment::latest()->get();
        return view('dashboard.paymentpremiumtour', compact('payment')); 
    }

     public function sendMail($id)
    {
       $tour = PremiumPayment::findOrFail($id);
       $data = [
        'travel_group'     => $tour->travel_group,
        'first_name'       => $tour->first_name,
        'email'            => $tour->email,
        'phone'            => $tour->phone,
        'address_line1'    => $tour->address_line1,
        'city'             => $tour->city,
        'state'            => $tour->state,
        'zip'              => $tour->zip,
        'amount'           => number_format($tour->amount, 2),
        'description'      => $tour->description,
        'card_first_name'  => $tour->card_first_name,
        'card_last_name'   => $tour->card_last_name,
        'date'             => Carbon::parse($tour->date)->format('M d, Y'),
        'signature_url'    => $tour->signature 
            ? asset('storage/' . $tour->signature) 
            : 'N/A',
        'message'          => 'Your premium tour payment was successful!',
    ];


    $validator = Validator::make($data, [
    'email' => 'required|email',
    ]);

    Log::info('Validator status: ' . ($validator->fails() ? 'Failed' : 'Passed'));

    if ($validator->fails()) {
    return back()->withErrors($validator)->withInput();
    }

                // Log SMTP username to confirm config is loaded (avoid logging password)
    Log::info('SMTP Username: ' . config('mail.mailers.smtp.username'));

    try {
    Mail::to($data['email'])->send(new PremiumTourPaymentMail($data));
    return back()->with('success', 'Email sent successfully to ' . $data['email']);
    } catch (\Exception $e) {
    Log::error('Mail sending error: ' . $e->getMessage());
    return back()->with('error', 'Failed to send email. Check logs.');
    }
    }

        

            // Delete Function
    public function destroy($id)
    {
    $tour = PremiumPayment::findOrFail($id);
    $tour->delete();
    return redirect()->back()->with('success', 'User deleted successfully.');
    }
}

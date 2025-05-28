<?php

namespace App\Http\Controllers;

use App\Africapayment;
use App\Mail\AfricapaymentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AfricapaymentController extends Controller
{
     public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'travel_group'      => 'required|string',
            'first_name'        => 'required|string',
            'email'             => 'required|email',
            'phone'             => 'required|string',
            'address_line1'     => 'required|string',
            'city'              => 'required|string',
            'state'             => 'required|string',
            'zip'               => 'required|string',
            'amount'            => 'required|numeric',
            'description'       => 'required|string',
            'card_first_name'   => 'required|string',
            'card_last_name'    => 'required|string',
            'date'              => 'required|date',
            'signature'         => 'required|file|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Upload signature
        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        } else {
            return response()->json(['error' => 'Signature upload failed.'], 400);
        }

        // Prepare and sanitize data
        $data = $request->except('signature');
        $data['signature'] = $signaturePath;

        try {
            $payment = Africapayment::create($data);
            return response()->json(['message' => 'Payment submitted successfully', 'data' => $payment]);
        } catch (\Exception $e) {
            Log::error('Payment creation failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to save payment.'], 500);
        }
    }

    // Get all group of tour payments
    public function getgroupofTours()
    {
        $payment = Africapayment::latest()->get();
        Log::info('payment is working');
        return view('dashboard.africapayment', compact('payment'));
    }

    // Send payment confirmation email
    public function sendMail($id)
    {
        $tour = Africapayment::findOrFail($id);

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

        $validator = Validator::make(['email' => $data['email']], [
            'email' => 'required|email',
        ]);

        Log::info('Validator status: ' . ($validator->fails() ? 'Failed' : 'Passed'));

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Log::info('SMTP Username: ' . config('mail.mailers.smtp.username'));

        try {
            Mail::to($data['email'])->send(new AfricapaymentMail($data));
            return back()->with('success', 'Email sent successfully to ' . $data['email']);
        } catch (\Exception $e) {
            Log::error('Mail sending error: ' . $e->getMessage());
            return back()->with('error', 'Failed to send email. Check logs.');
        }
    }

    // Delete a payment record
    public function destroy($id)
    {
        $tour = Africapayment::findOrFail($id);

        try {
            $tour->delete();
            return redirect()->back()->with('success', 'Payment record deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Delete failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete record.');
        }
    }

    public function index()
{
    $payment = Africapayment::all();

    // Grouping and summing by travel group
  $grouped = $payment->groupBy('travel_group')->map(function($group) {
    return [
        'total_amount' => $group->sum('amount'),
        'count' => $group->count(),
    ];
});

    return view('dashboard.africapayment', compact('payment', 'grouped'));
}

}

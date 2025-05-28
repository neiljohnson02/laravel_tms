<?php

namespace App\Http\Controllers;

use App\TrendingTour;
use Illuminate\Http\Request;
use App\Mail\TrendingTourMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class TrendingTourController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:welcomes,email',
            'departure' => 'required|date',
            'tourtype' => 'required',
            'adult' => 'required|integer',
            'children' => 'nullable|integer',
            'infant' => 'nullable|integer',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $tour = TrendingTour::create($request->all());

        return response()->json(['success' => true, 'data' => $tour]);
    }

    public function fetchAll()
    {
        $tour = TrendingTour::latest()->get();
        // dd($tour); // Remove or comment out before deploying
        return view('dashboard.trendingtourtable', compact('tour'));
    }

     public function sendMail($id)
            {
                $tour = TrendingTour::findOrFail($id);

                $data = [
                    'name' => $tour->name,
                    'email' => $tour->email,
                    'tourtype' => $tour->tourtype,
                    'departure' => $tour->departure,
                    'adult' => $tour->adult,
                    'children' => $tour->children,
                    'infant' => $tour->infant,
                    'phone' => $tour->phone,
                    'message' => 'Your tour booking was successful!',
                ];

                // Validate email
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
                    Mail::to($data['email'])->send(new TrendingTourMail($data));
                    return back()->with('success', 'Email sent successfully to ' . $data['email']);
                } catch (\Exception $e) {
                    Log::error('Mail sending error: ' . $e->getMessage());
                    return back()->with('error', 'Failed to send email. Check logs.');
                }
            }

        

            // Delete Function
            public function destroy($id)
            {
                $tour = TrendingTour::findOrFail($id);
                $tour->delete();
                return redirect()->back()->with('success', 'User deleted successfully.');
            }
            

}

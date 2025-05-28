<?php

namespace App\Http\Controllers;

use App\GroupofTour;
use App\PremiumTour;
use Illuminate\Http\Request;
use App\Mail\PremiumTourMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PremiumTourController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'departure' => 'required|date',
        'email' => 'required|email',
        'adult' => 'required|integer|min:1',
        'children' => 'nullable|integer|min:0',
        'infant' => 'nullable|integer|min:0',
        'package' => 'required|string',
        'addons' => 'nullable|array',
        'requests' => 'nullable|string',
    ]);

 $validated['addons'] = isset($validated['addons']) ? json_encode($validated['addons']) : null;
    Log::info('Premium Tour Data:', $validated); 

    $tour = PremiumTour::create($request->all());

    return response()->json([
        'success' => true,
    'messge' => 'your premium tour booking succesfully']);
}

    public function index()
    {
        $tour = PremiumTour::latest()->get();
        return view('dashboard.premiumtour', compact('tour')); 
    }



        public function static()
        {
            try {
                    
                $premiumTourCount = PremiumTour::count();

                Log::info('premiumstatic method executed successfully.');

                return view('dashboard.admin', compact('premiumTourCount'));

            } catch (\Exception $e) {
                Log::error('Error in premiumstatic method: ' . $e->getMessage());

                return view('dashboard.admin', [
                    'premiumTourCount' => 0,
                    'errorMessage' => 'Failed to load tour counts.'
                ]);
            }
        }






    public function sendMail($id)
    {
       $tour = PremiumTour::findOrFail($id);
       $data = [
        'departure' => $tour->departure,
        'email'  => $tour->email,
        'adult'   => $tour->adult,
        'children'   => $tour->children,        
        'infant'    => $tour->infant,      
        'package'   => $tour->package,    
        'addons'    => $tour->addons, 
        'requests' => $tour->request,   
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
    Mail::to($data['email'])->send(new PremiumTourMail($data));
    return back()->with('success', 'Email sent successfully to ' . $data['email']);
    } catch (\Exception $e) {
    Log::error('Mail sending error: ' . $e->getMessage());
    return back()->with('error', 'Failed to send email. Check logs.');
    }
    }

        

            // Delete Function
            public function destroy($id)
            {
                $tour = PremiumTour::findOrFail($id);
                $tour->delete();
                return redirect()->back()->with('success', 'User deleted successfully.');
            }
}


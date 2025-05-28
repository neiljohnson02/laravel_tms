<?php

namespace App\Http\Controllers;

use App\Americapackage;
use App\Mail\AmericapackageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AmericapackageController extends Controller
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

    $tour = Americapackage::create($request->all());

    return response()->json([
        'success' => true,
    'messge' => 'your premium tour booking succesfully']);
}

    public function index()
    {
        $tour = Americapackage::latest()->get();
        return view('dashboard.americapackage', compact('tour')); 
    }

    public function sendMail($id)
    {
       $tour = Americapackage::findOrFail($id);
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
    Mail::to($data['email'])->send(new AmericapackageMail($data));
    return back()->with('success', 'Email sent successfully to ' . $data['email']);
    } catch (\Exception $e) {
    Log::error('Mail sending error: ' . $e->getMessage());
    return back()->with('error', 'Failed to send email. Check logs.');
    }
    }


            public function destroy($id)
            {
                $tour = Americapackage::findOrFail($id);
                $tour->delete();
                return redirect()->back()->with('success', 'User deleted successfully.');
            }
}

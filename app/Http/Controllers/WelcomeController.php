<?php

namespace App\Http\Controllers;

use App\Welcome;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WelcomeController extends Controller
{

    public function afterLoginRedirect()
{
    $user = Auth::user();

    if ($user->email === 'gtholidays@gmail.com') {
        // Admin: redirect to dashboard with success message
        return redirect()->route('dashboard.welcome')->with('success', 'Admin logged in successfully!');
    } else {
        // Normal user: redirect somewhere without success message
        return redirect()->route('home');  // or wherever user should go
    }
}

     public function index()
    {
        $data = Welcome::all(); // Assuming you're showing this on a table
        return view('dashboard.welcome', compact('data'));
    }


            public function store(Request $request)
            {
                // Validate input
            $validator = Validator::make($request->all(), [
                    'name' => 'required|string|max:191',
                    'cityofresitense' => 'required|string|max:191',
                    'email' => 'required|email|max:191|unique:welcomes,email',
                    'phonenumber' => 'required|string|max:191',
                    'whatsapp' => 'required|string|max:191',
                    'traveldestination' => 'required|string|max:191',
                    'dateoftravel' => 'required|string|max:191',
                    'numberoftravelers' => 'required|string|max:191',
                    'vocationtype' => 'required|string|max:191',
                ]);


        if ($validator->fails()) {
        Log::warning('Validation failed', ['errors' => $validator->errors()]);
        return response()->json(['errors' => $validator->errors()], 422);
        }

            // Save to database
            $data = Welcome::create($request->all());

            // Log success
            Log::info('Data stored successfully', ['data' => $data]);

            return response()->json([
                'success' => true,
                'message' => 'Registration submitted successfully!'
            ]);

            }

                public function dashboard()
                {
                    $welcomes =  Welcome::all();
                    return view('dashboard.welcome', compact(' welcomes'));
                }

     

            public function sendMail($id)
            {
                $welcomes = Welcome::findOrFail($id);

                $data = [
                    'name' => $welcomes->name,
                    'email' => $welcomes->email,
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
                    Mail::to($data['email'])->send(new WelcomeMail($data));
                    return back()->with('success', 'Email sent successfully to ' . $data['email']);
                } catch (\Exception $e) {
                    Log::error('Mail sending error: ' . $e->getMessage());
                    return back()->with('error', 'Failed to send email. Check logs.');
                }
            }

        

            // Delete Function
            public function destroy($id)
            {
                $user = Welcome::findOrFail($id);
                $user->delete();
                return redirect()->back()->with('success', 'User deleted successfully.');
            }
            




}

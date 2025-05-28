<?php

// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Mail\Mailable;
// use App\Mail\ConfirmationMail;

// use App\grpemail;  // Make sure Grp model is imported correctly
// use Illuminate\Queue\SerializesModels;

// class ConfirmationMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $grp;

//     public function __construct(Grp $grp)
//     {
//         $this->grp = $grp;
//     }

//     public function build()
//     {
//         return $this->view('emails.welcome') // Ensure this view file exists
//             ->with([
//                 'name' => $this->grp->name,
//                 'cityofresitense' => $this->grp->cityofresitense, // Make sure field name is correct
//                 'email' => $this->grp->email,
//                 'phonenumber' => $this->grp->phonenumber,
//                 'whatsapp' => $this->grp->whatsapp,
//                 'traveldestination' => $this->grp->traveldestination,
//                 'dateoftravel' => $this->grp->dateoftravel,
//                 'numberoftravel' => $this->grp->numberoftravel,
//                 'vocationtype' => $this->grp->vocationtype,
//             ]);
//     }
// }

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use App\grpemail;
use App\navbar;

class NavbarController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function company(){
        return view('company.company');
    }
    public function groupoftour(){
        return view('groupoftour.groupoftour');
    }
    public function package(){
        return view('package.package');
    }
    public function honeymoon(){
        return view('honeymoon.honeymoon');
    }
    public function wedding(){
        return view('wedding.wedding');
    }

    public function contact(){
        return view('contact.contact');
    }

    public function dubai1(){
        return view('home.dubai1');
    }
    public function singapore1(){
        return view('home.singapore1');
    }
    public function france1(){
        return view('home.france1');
    }
    public function china1(){
        return view('home.china1');
    }
    public function usa1(){
        return view('home.usa1');
    }
    public function germany1(){
        return view('home.germany1');
    }

    // premium tour

    public function dubai2(){
        return view('premium.dubai2');
    }

    public function france2(){
        return view('premium.france2');
    }
    public function maldivs2(){
        return view('premium.maldivs2');
    }
    public function germany2(){
        return view('premium.germany2');
    }
    public function tajmahal2(){
        return view('premium.tajmahal2');
    }
    public function southafrica(){
        return view('premium.southafrica');
    }

    //might tours

    public function dubai1desert(){
        return view('dubai1desert');
    }

    public function dubai1waterpark(){
        return view('dubai1waterpark');
    }

    public function dubai1musium(){
        return view('dubai1musium');
    }

    public function dubai3(){
        return view('groupoftour.dubai3');
    }

    public function australia3(){
        return view('groupoftour.australia3');
    }

    public function tajmahal3(){
        return view('groupoftour.tajmahal3');
    }

    public function goa3(){
        return view('groupoftour.goa3');
    }

    public function paris3(){
        return view('groupoftour.paris3');
    }

    public function france3(){
        return view('groupoftour.france3');
    }

    public function usa3(){
        return view('groupoftour.usa3');
    }

    public function mountrush3(){
        return view('groupoftour.mountrush3');
    }

    public function germany3(){
        return view('groupoftour.germany3');
    }

    public function berlin3(){
        return view('groupoftour.berlin3');
    }

    public function italy3(){
        return view('groupoftour.italy3');
    }

    public function rome3(){
        return view('groupoftour.rome3');
    }

    //fully reserved groupoftour

    public function grpresdubai1(){
        return view('groupoftour.grpresdubai1');
    }

    public function grpreskerala(){
        return view('groupoftour.grpreskerala');
    }
    public function grprestajmahal(){
        return view('groupoftour.grprestajmahal');
    }
    public function grpresgoa(){
        return view('groupoftour.grpresgoa');
    }
    public function grpresindonesia(){
        return view('groupoftour.grpresindonesia');
    }

    public function grprestokyo(){
        return view('groupoftour.grprestokyo');
    }

    public function grpresbankok(){
        return view('groupoftour.grpresbankok');
    }
    
    public function grpressingapore(){
        return view('groupoftour.grpressingapore');
    }

    public function grpreskawasanfalls(){
        return view('groupoftour.grpreskawasanfalls');
    }

    public function grpresturkey(){
        return view('groupoftour.grpresturkey');
    }

    public function grpressouthkorea(){
        return view('groupoftour.grpressouthkorea');
    }

    public function grpresrussia(){
        return view('groupoftour.grpresrussia');
    }


    //honeymoon india tour

    public function hnykashmir(){
        return view('honeymoon.hnykashmir');
    }

    public function hnymanali(){
        return view('honeymoon.hnymanali');
    }

    public function hnyallepey(){
        return view('honeymoon.hnyallepey');
    }

    public function hnyooty(){
        return view('honeymoon.hnyooty');
    }

    public function hnydharamshala(){
        return view('honeymoon.hnydharamshala');
    }
    
    public function hnyshimla(){
        return view('honeymoon.hnyshimla');
    }

    public function hnyauli(){
        return view('honeymoon.hnyauli');
    }

    public function hnyandaman(){
        return view('honeymoon.hnyandaman');
    }

    public function hnylakshadweep(){
        return view('honeymoon.hnylakshadweep');
    }

    public function hydarjeeling(){
        return view('honeymoon.hydarjeeling');
    }

    public function hnygoa(){
        return view('honeymoon.hnygoa');
    }

    public function hnyladakh(){
        return view('honeymoon.hnyladakh');
    }

    //honeymoon international tour

    public function hnyintbali(){
        return view('honeymoon.hnyintbali');
    }

    public function hnyintnewzeland(){
        return view('honeymoon.hnyintnewzeland');
    }

    public function hnyintcolombo(){
        return view('honeymoon.hnyintcolombo');
    }

    public function hnymaldivs(){
        return view('honeymoon.hnyintmaldivs');
    }

    public function hnyintisland(){
        return view('honeymoon.hnyintisland');
    }

    public function hnyintcarotia(){
        return view('honeymoon.hnyintcarotia');
    }

    public function hnyintitaly(){
        return view('honeymoon.hnyintitaly');
    }

    public function hnyintgermany(){
        return view('honeymoon.hnyintgermany');
    }

    public function hnyintgreece(){
        return view('honeymoon.hnyintgermany');
    }

    public function hnyintsouthafrica(){
        return view('honeymoon.hnyintsouthafrica');
    }

    public function hnyintaustralia(){
        return view('honeymoon.hnyintaustralia');
    }

    public function hnyintargentina(){
        return view('honeymoon.hnyintargentina');
    }

    public function hnyintbrazil(){
        return view('honeymoon.hnyintbrazil');
    }

    public function hnyintbarbados(){
        return view('honeymoon.hnyintbarbados');
    }

    public function hnyintfrance(){
        return view('honeymoon.hnyintfrance');
    }

    public function hnyinturuguay(){
        return view('honeymoon.hnyinturuguay');
    }

    //packages of tour

    public function packindia(){
        return view('package.packindia');
    }

    public function packafrica(){
        return view('package.packafrica');
    }

    public function packamerica(){
        return view('package.packamerica');
    }

    public function packasia(){
        return view('package.packasia');
    }
    
    public function packeurope(){
        return view('package.packeurope');
    }


    //package india 

    public function packindia1(){
        return view('package.packindia1');
    }

    public function packindia2(){
        return view('package.packindia2');
    }

    public function packindia3(){
        return view('package.packindia3');
    }

    public function packindia4(){
        return view('package.packindia4');
    }

    public function packindia5(){
        return view('package.packindia5');
    }

    public function packindia6(){
        return view('package.packindia6');
    }

    public function packindia7(){
        return view('package.packindia7');
    }

    public function packindia8(){
        return view('package.packindia8');
    }

    public function packindia9(){
        return view('package.packindia9');
    }

    public function packindia10(){
        return view('package.packindia10');
    }

    public function packindia11(){
        return view('package.packindia11');
    }

    public function packindia12(){
        return view('package.packindia12');
    }

    public function packindia13(){
        return view('package.packindia13');
    }

    public function packindia14(){
        return view('package.packindia14');
    }

    public function packindia15(){
        return view('package.packindia15');
    }

    public function packindia16(){
        return view('package.packindia16');
    }

    public function packindia17(){
        return view('package.packindia17');
    }

    public function packindia18(){
        return view('package.packindia18');
    }

    public function packindia19(){
        return view('package.packindia19');
    }

    public function packindia20(){
        return view('package.packindia20');
    }

    // package africa

    public function packafrica1(){
        return view('package.packafrica1');
    }

    public function packafrica2(){
        return view('package.packafrica2');
    }

    public function packafrica3(){
        return view('package.packafrica3');
    }

    public function packafrica4(){
        return view('package.packafrica4');
    }

    public function packafrica5(){
        return view('package.packafrica5');
    }

    public function packafrica6(){
        return view('package.packafrica6');
    }

    public function packafrica7(){
        return view('package.packafrica7');
    }

    public function packafrica8(){
        return view('package.packafrica8');
    }

    public function packafrica9(){
        return view('package.packafrica9');
    }

    public function packafrica10(){
        return view('package.packafrica10');
    }

    public function packafrica11(){
        return view('package.packafrica11');
    }

    public function packafrica12(){
        return view('package.packafrica12');
    }

    public function packafrica13(){
        return view('package.packafrica13');
    }

    public function packafrica14(){
        return view('package.packafrica14');
    }

    public function packafrica15(){
        return view('package.packafrica15');
    }

    public function packafrica16(){
        return view('package.packafrica16');
    }

    // package america
    public function packamerica1(){
        return view('package.packamerica1');
    }

    public function packamerica2(){
        return view('package.packamerica2');
    }
    public function packamerica3(){
        return view('package.packamerica3');
    }

    public function packamerica4(){
        return view('package.packamerica4');
    }
    public function packamerica5(){
        return view('package.packamerica5');
    }
    public function packamerica6(){
        return view('package.packamerica6');
    }
    public function packamerica7(){
        return view('package.packamerica7');
    }
    public function packamerica8(){
        return view('package.packamerica8');
    }
    public function packamerica9(){
        return view('package.packamerica9');
    }
    public function packamerica10(){
        return view('package.packamerica10');
    }
    public function packamerica11(){
        return view('package.packamerica11');
    }
    public function packamerica12(){
        return view('package.packamerica12');
    }
    public function packamerica13(){
        return view('package.packamerica13');
    }
    public function packamerica14(){
        return view('package.packamerica14');
    }
    public function packamerica15(){
        return view('package.packamerica15');
    }
    public function packamerica16(){
        return view('package.packamerica16');
    }


    //package europe


    public function packeurope1(){
        return view('package.packeurope1');
    }

    public function packeurope2(){
        return view('package.packeurope2');
    }

    public function packeurope3(){
        return view('package.packeurope3');
    }
    public function packeurope4(){
        return view('package.packeurope4');
    }
    public function packeurope5(){
        return view('package.packeurope5');
    }
    public function packeurope6(){
        return view('package.packeurope6');
    }
    public function packeurope7(){
        return view('package.packeurope7');
    }
    public function packeurope8(){
        return view('package.packeurope8');
    }
    public function packeurope9(){
        return view('package.packeurope9');
    }
    public function packeurope10(){
        return view('package.packeurope10');
    }
    public function packeurope11(){
        return view('package.packeurope11');
    }
    public function packeurope12(){
        return view('package.packeurope12');
    }
    public function packeurope13(){
        return view('package.packeurope13');
    }

     public function packeurope14(){
        return view('package.packeurope14');
    }
    public function packeurope15(){
        return view('package.packeurope15');
    }

    public function packeurope16(){
        return view('package.packeurope16');
    }
    public function packeurope17(){
        return view('packeurope17');
    }
    public function packeurope18(){
        return view('package.packeurope18');
    }
    public function packeurope19(){
        return view('package.packeurope19');
    }
    public function packeurope20(){
        return view('package.packeurope20');
    }

    //   asia package
   

   public function packasia1(){
    return view('package.packasia1');
   } 

   public function packasia2(){
    return view('package.packasia2');
   }  
   public function packasia3(){
    return view('package.packasia3');
   }  

   public function packasia4(){
    return view('package.packasia4');
   }  
   public function packasia5(){
    return view('package.packasia5');
   }  
   public function packasia6(){
    return view('package.packasia6');
   }  

   public function packasia7(){
    return view('package.packasia7');
   }  
   public function packasia8(){
    return view('package.packasia8');
   }  
   public function packasia9(){
    return view('package.packasia9');
   }  
   public function packasia10(){
    return view('package.packasia10');
   }  
   public function packasia11(){
    return view('package.packasia1');
   }  

   public function packasia12(){
    return view('package.packasia12');
   }  
   public function packasia13(){
    return view('package.packasia13');
   }  
   public function packasia14(){
    return view('package.packasia14');
   }  
   public function packasia15(){
    return view('package.packasia15');
   }  

   public function packasia16(){
    return view('package.packasia16');
   }  
   public function packasia17(){
    return view('package.packasia17');
   }  
   public function packasia18(){
    return view('package.packasia18');
   }  
   public function packasia19(){
    return view('package.packasia19');
   }
   
   public function packasia20(){
    return view('package.packasia20');
    }
 
    public function packasia21(){
    return view('package.packasia1');
   }
   public function packasia22(){
    return view('package.packasia1');
   } 
    public function packasia23(){
    return view('package.packasia1');
   }  
   public function packasia24(){
    return view('package.packasia24');
   }  
    
   //contact 

   public function contact1(){
    return view('contact.contact1');
   }

   public function contact2(){
    return view('contact.contact2');
   }

   public function contact3(){
    return view('contact.contact3');
   }

   public function contact4(){
    return view('contact.contact4');
   }

   public function contact5(){
    return view('contact.contact5');
   }

   public function contact6(){
    return view('contact.contact6');
   }

   public function contact7(){
    return view('contact.contact7');
   }

   public function contact8(){
    return view('contact.contact8');
   }

   public function contact9(){
    return view('contact.contact9');
   }
   public function contact10(){
    return view('contact.contact10');
   }
   public function contact11(){
    return view('contact.contact11');
   }

   public function contact12(){
    return view('contact.contact12');
   }
//   admin dashboard
   public function admin(){
    return view('dashboard/admin');
   }
//    admin dashboard

   public function admingrp(){
    return view('dashboard/grp');
   }

   public function adminpackages(){
    return view('dashboard/packages');
   }

   public function adminhoneymoon(){
    return view('dashboard/honeymoon');
   }

   public function admincontact(){
    return view('dashboard/contact');
   }

   public function adminprofit(){
    return view('dashboard/profit');
   }

   public function adminexpense(){
    return view('dashboard/expense');
   }

   public function adminwedding(){
    return view('dashboard/wedding');
   }

   public function profitDashboard(){
    return view('dashboard/profit');
   }

    //   backendcode
    public function grptable(){
          return view ('dashboard/grptable');
      }

    
    public function addtourist(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'tourtype' => 'required|string|max:255',
        'tourname' => 'required|string|max:255',
        'prizedetails' => 'required|string|max:255',
        'day1' => 'required|string|max:255',
        'day2' => 'required|string|max:255',
        'day3' => 'required|string|max:255',
        'day4' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Check if the request contains an image file
    if ($request->hasFile('image')) {
        // Get the uploaded image file
        $image = $request->file('image');
        
        // Generate a unique name for the image based on the current timestamp
        $imageName = time() . '.' . $image->extension();
        
        // Move the image to the 'uploads' directory
        $image->move(public_path('uploads'), $imageName);

        // Create a new tourist record in the database
        $tourist = new navbar(); // Ensure you are using the correct model
        $tourist->tourtype = $request->tourtype;
        $tourist->tourname = $request->tourname;
        $tourist->prizedetails = $request->prizedetails;
        $tourist->day1 = $request->day1;
        $tourist->day2 = $request->day2;
        $tourist->day3 = $request->day3;
        $tourist->day4 = $request->day4;
        $tourist->image = $imageName;  // Save the image file name in the database

        // Save the tourist record
        $tourist->save();

        // Return a success response
        return response()->json(['res' => 'Data  added successfully'], 200);
    }

    // Return a failure response if the image wasn't uploaded
    return response()->json(['res' => 'File upload failed!'], 500);
}

//add button
public function add(){
    return view('dashboard/grp');
}


public function gettourist()
{
    $tourist = navbar::all();
    return response()->json(['tourist' => $tourist]);
}

public function gettouristData($id)
{
    $tourist = navbar::find($id);
    if (!$tourist) {
        return redirect()->back()->withErrors(['msg' => 'tourist not found']);
    }
    return view('grpedit', ['tourist' => [$tourist]]); 
}

//data deleted 
public function updatetourist(Request $request, $id) {
    // Validate input
    $request->validate([
        'tourtype' => 'required|string|max:255', 
        'tourname' => 'required|string|max:255',
        'prizedetails' => 'required|string|max:255',
        'day1' => 'required|string|max:255',
        'day2' => 'required|string|max:255',
        'day3' => 'required|string|max:255',
        'day4' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Find the student
    $tourist = navbar::find($id); // Ensure model name is capitalized
    if (!$tourist) {
        return response()->json(['result' => 'Student not found'], 404);
    }

    // Update name
    $tourist->tourtype = $request->tourtype;
    $tourist->tourname = $request->tourname;
    $tourist->prizedetails = $request->prizedetails;
    $tourist->day1 = $request->day1;
    $tourist->day2 = $request->day2;
    $tourist->day3 = $request->day3;
    $tourist->day4 = $request->day4;

    // Handle file upload
    if ($request->hasFile('image')) {
        // Optionally delete the old file
        if ($tourist->image) {
            $oldFilePath = public_path('uploads/' . $tourist->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath); // Remove old file if it exists
            }
        }

        // Handle the new file
        $image = $request->file('image');
        $imageName = time() . '.' . strtolower($image->extension()); // Ensure lowercase extension
        $image->move(public_path('uploads'), $imageName);

        $tourist->image = $imageName;
    }

    // Save changes
    $tourist->save();

    return response()->json(['result' => 'Student updated successfully']);
}


public function deletedata($id)
{
    
    $tourist = navbar::find($id);
    
    if (!$tourist) {
        return response()->json(['result' => 'Tourist not found'], 404);
    }

    
    if ($tourist->delete()) {
        
        return response()->json(['result' => 'Tourist deleted successfully']);
    } else {
    
        return response()->json(['result' => 'Error deleting tourist'], 500);
    }
}



//static query 



}



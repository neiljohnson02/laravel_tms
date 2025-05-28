<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use App\Welcome;
use App\Asiapackage;
use App\Asiapayment;
use App\GroupofTour;
use App\PremiumTour;
use App\Indiapackage;
use App\Indiapayment;
use App\TrendingTour;
use App\Africapackage;
use App\Africapayment;
use App\Europepackage;
use App\Europepayment;
use App\Http\Requests;
use App\Americapackage;
use App\Americapayment;
use App\PremiumPayment;
use App\HoneymoonPackage;
use App\HoneymoonPayment;
use App\GroupoftourPayment;
use Illuminate\Http\Request;



use App\HoneymoonInternationl;
use App\HoneymoonInternationalPayment;

class AdminController extends Controller
{
    public function dashboard(){
        try {
            $groupTourCount = GroupofTour::count();
            $premiumTourCount = PremiumTour::count();
            $honeymoonTourCount = HoneymoonPackage::count();
            $trendingTourCount = TrendingTour::count();
            $asiaTourCount = Asiapackage::count();
            $indiaTourCount = Indiapackage::count();
            $africaTourCount = Africapackage::count();
            $europeTourCount = Europepackage::count();
            $americaTourCount = Americapackage::count();
            $asiapaymentTourCount = Asiapayment::count();
            $indiapaymentTourCount = Indiapayment::count();
            $africapaymentTourCount = Africapayment::count();
            $europepaymentTourCount = Europepayment::count();
            $americapaymentTourCount = Americapayment::count();
            $premiumpaymentTourCount = PremiumPayment::count();
            $honeymoonpaymentTourCount = HoneymoonPayment::count();
            $groupoftourpaymentTourCount = GroupoftourPayment::count();

            // add more counts if needed, e.g. TrendingTour::count(), etc.

            return view('dashboard.admin', compact('groupTourCount', 'premiumTourCount', 'honeymoonTourCount', 'trendingTourCount' ,'asiaTourCount' ,'indiaTourCount' ,'africaTourCount' , 'europeTourCount','americaTourCount','asiapaymentTourCount','indiapaymentTourCount','africapaymentTourCount' ,'europepaymentTourCount' ,'americapaymentTourCount' ,'premiumpaymentTourCount' ,'honeymoonpaymentTourCount','groupoftourpaymentTourCount'));
        } catch (\Exception $e) {
            Log::error('Error fetching dashboard counts: ' . $e->getMessage());
            return view('dashboard.admin', [
                'groupTourCount' => 0,
                'premiumTourCount' => 0,
                'honeymoonTourCount' => 0,
                'trendingTourCount' => 0,
                'asiaTourCount' => 0,
                'indiaTourCount' => 0,
                'africaTourCount' => 0,
                'europeTourCount' => 0,
                'americaTourCount'=> 0,
                'errorMessage' => 'Failed to load tour counts.'
            ]);
        }
    }
    }


<?php

namespace App\Http\Controllers;
use App\Expensive; 
use App\Asiapayment;
use App\Indiapayment;
use App\Africapayment;
use App\Europepayment;
use App\Americapayment;
use App\PremiumPayment;
use App\HoneymoonPayment;
use App\GroupoftourPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\HoneymoonInternationalPayment;
use Illuminate\Support\Facades\Schema;

class ExpesiveController extends Controller
{
   public function generateSummary()
{
    $tables = [
        'africapayments'              => Africapayment::class,
        // 'americapayments'             => Americapayment::class,
        // 'indiapayments'               => Indiapayment::class,
        // 'asiapayments'                => Asiapayment::class,
        // 'europepayments'              => Europepayment::class,
        // 'groupoftourpayments'         => GroupoftourPayment::class,
        // 'honeymoonpayments'           => HoneymoonPayment::class,
        // 'honeymooninternationalpayments' => HoneymoonInternationalPayment::class,
        // 'premiumpayments'             => PremiumPayment::class,
    ];

  \Illuminate\Support\Facades\Log::info('data getting succesfully');

  foreach ($tables as $tableName => $modelClass) {
    $totalProfit = $modelClass::sum('profit');

    $totalExpenses = 25000;

    // Instantiate the model to get the table name
    $modelInstance = new $modelClass;
    if (Schema::hasColumn($modelInstance->getTable(), 'expenses')) {
        $totalExpenses = $modelClass::sum('expenses');
    } else {
        $totalExpenses = $totalProfit * 0.2;
    }

    Expensive::updateOrCreate(
        ['table_name' => $tableName],
        [
            'profit' => $totalProfit,
            'expenses' => $totalExpenses,
        ]
    );
}


    return response()->json(['message' => 'Summary generated successfully']);
}

public function showSummary()
{
    $summary = DB::table('africapayments')
        ->select(
            DB::raw('SUM(profit) as profit'),
            DB::raw('SUM(expenses) as expenses')
        )
        ->first();

    // Pass as a collection for your blade to work:
    $summaries = collect([
        (object)[
            'table_name' => 'Total',  // a label you want
            'profit' => $summary->profit,
            'expenses' => $summary->expenses
        ]
    ]);

    return view('dashboard.expense', compact('summaries'));
}





}

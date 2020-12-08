<?php

namespace App\Http\Controllers;

use App\Models\Conversion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $thisMonthStart = Carbon::now()->startOfMonth()->toDateString();
        $thisMonthEnd = Carbon::now()->endOfMonth()->toDateString();
        $lastMonthStart = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $lastMonthEnd = Carbon::now()->subMonth()->endOfMonth()->toDateString();

        return view('dashboard', [
            'earningsToday' => number_format(Conversion::whereDate('created_at', Carbon::today())->sum('payout'),2),
            'earningsYesterday' => number_format(Conversion::whereDate('created_at', Carbon::yesterday())->sum('payout'),2),
            'earningsThisMonth' => number_format(Conversion::whereBetween('created_at',[$thisMonthStart, $thisMonthEnd])->get()->sum('payout'),2),
            'earningsLastMonth' => number_format(Conversion::whereBetween('created_at',[$lastMonthStart, $lastMonthEnd])->get()->sum('payout'),2),
        ]);
    }
}

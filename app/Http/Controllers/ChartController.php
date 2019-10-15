<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use App\User;
use DB;

class ChartController extends Controller
{
    public function index()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $charts = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Users")
			      ->elementLabel("Total Users")
			      ->dimensions(450, 450)
			      ->responsive(false)
				  ->groupByMonth(date('Y'), true);
		
		$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
		$chart = Charts::database($users, 'pie', 'highcharts')
				->title("Monthly new Register Users")
				->elementLabel("Total Users")
				->dimensions(600, 400)
				->responsive(false)
				->groupByMonth(date('Y'), true);

		return view('dashboard')->withCharts($charts)
							    ->withChart($chart);
    }
}

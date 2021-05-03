<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartJsController extends Controller
{
    //
    public function index()

    {

        $year = ['2015','2016','2017','2018','2019','2020'];


        $user = [];

        foreach ($year as $key => $value) {

            $user[] = ventas::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();

        }


    	return view('chartjs')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));

    }

}

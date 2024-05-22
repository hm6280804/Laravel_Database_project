<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class farmerController extends Controller
{
    public function showFarmers(){
        $farmer = DB::table('farmers')
                        ->select('farmers.*', 'cities.city_name')
                        ->join('cities', 'farmers.city','=', 'cities.id')
                        ->get();
     //   return $farmer;
     return view('joinWork/farmerCity', compact('farmer'));
                    
    }
}

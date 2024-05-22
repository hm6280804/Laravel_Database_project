<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class stulectController extends Controller
{
    public function stuLect(){
        $students = DB::table('students')
                        ->select('name');
        $lecturers = DB::table('lecturers')
                        ->union($students)
                        ->select('name')
        //                ->toSql();
                        ->get();
        return $lecturers;
    }


    public function whenData(){
        $testi = false;
        $students = DB::table('students')
                        ->when($testi, function($query){
                            $query->where('id', '>', 2);
                        },function($query){
                            $query->where('id', '=', 1);
                        })
                        ->get();
        return $students;
    }


    public function chunkData(){
        $students = DB::table('students')
                        ->orderBy('id')
                        ->chunk(3, function($student){
                            echo "<div style='border: 1px solid red; margin-bottom:14px;'>";
                            foreach($student as $s){
                                echo $s->name . "<br>";
                            }
                            echo "</div>";
                        });
    }
}

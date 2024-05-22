<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class emplyeeController extends Controller
{
    public function showUser(){
        $users = DB::table('employees')
                        ->paginate(5);
        //                ->simplePaginate(5);
        //->select('city')
        //->distinct()
       // ->where('name','like', 'V%')
    //   ->whereBetween('id', [3,9])
       // ->whereNotBetween('id', [3,9])
       // ->whereDate('created_at', '2024-04-27')
      //  ->whereMonth('created_at',5 )
      //  ->orderBy('name')
     //   ->get();
           // ->inRandomOrder()
          //  ->first();
         // ->count();
           // ->max('age');
           // ->sum('age');
      //  return $users;
    // echo "testing";
   //  dump($users);
        // foreach($users as $user){
        //     echo $user->name . "-----" . $user->email . "------     " . $user->city . "<br>";
        // }

        return view('allusers', ['data' => $users]);
      // return $users;
    }

    public function singleUser($id){
        $user = DB::table('employees')->where('id', $id)->get();
       // return $user;
        return view('single', ['data'=> $user]);
    }

    public function addUser(Request $req){
        
        $user = DB::table('employees')
                    ->insert([
                 //   ->insertOrIgnore
                    // ->insertGetId([
                        'name' => $req->username,
                        'email' => $req->useremail,
                        'age' => $req->userage,
                        'city' => $req->usercity,
                    ]);
                //    return $user;
                   // dd($user);
                   if($user){
                    return redirect()->route("home");
                   }
                   else{
                    echo "<h1> Data not added</h1>"; 
                   }
    }

    public function updatePage(string $id){
        // $user = DB::table('employees')
        //                 ->where('id', $id)
        //                 ->get();
            $user = DB::table('employees')->find($id);
                        return view('updateuser', ['data' => $user]);
    }

    public function updateUser(Request $req, $id){
        $user = DB::table('employees')
                    ->where('id', $id)
                    ->update([
                        'name' => $req->username,
                        'email' => $req->useremail,
                        'age'   => $req->userage,
                        'city'  => $req->usercity
                    ]);
                    if($user){
                        return redirect()->route("home");
                       }
                       else{
                        echo "<h1> Data not added</h1>"; 
                       }
                    //->increment('age');
                    // ->update([
                    //     'name' => 'Muhammad Altaf'
                    // ]);
            // if($user){
            //     echo "<h3> data updated successfully</h3>";
            // }
    }

    public function deleteUser(string $id){
        $user = DB::table('employees')
                    ->where('id', $id)
                    ->delete();
                if($user){
                    echo "<h3>successfully deleted the entry at : " .$id. "</h3>";
                }
    }
}




 
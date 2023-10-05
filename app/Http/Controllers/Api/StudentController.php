<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
function studentIndex(){
    $students = Student::latest()->get();
      return response()->json($students);
    }

function studentStore(Request $request){
     
    //$students = Student::latest()->get();
$students = new Student();
$students->roll= $request->roll;
$students->name= $request->name;
$students->group= $request->group;
$students->save();


      // $studentstore::insert([
    

      //   'roll'=>$request->roll,
      //   'name'=>$request->name,
      //   'group'=>$request->group,


      // ]);
      $msg="Student added succesful";
            return response()->json( ['success'=>$msg],200);

}

}

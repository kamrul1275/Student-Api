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

  $msg="Student added succesful";
  return response()->json( ['success'=>$msg],200);

      }//end method


function studentEdit($id){
   
  $students = Student::find($id);
  return response()->json($students);
         

}//end method

function studentUpdate(Request $request, $id){
   
  $students = Student::find($id);
  $students->roll= $request->roll;
  $students->name= $request->name;
  $students->group= $request->group;
  $students->save();
  
      $msg="Student Update succesful";
      return response()->json( ['success'=>$msg],200);
    
         

}//end method

function studentDelete($id){
   
    $Studentid= Student::find($id);
    $Studentid->delete();
    $msg="Delete succesful";
    return response()->json( ['success'=>$msg],200);

}//end method

}

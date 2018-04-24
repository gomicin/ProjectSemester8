<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\user_profile;

class adminsoftdelete extends Controller
{
    public function __construct(){

        $this->middleware('auth:admin');
    }
    public function surveyorsoftdelete(){

      $surveyor = user_profile::with('user')->onlyTrashed()->get();
      //return $surveyor;
      return view('admin.softsurveyor')->with('Dsurveyor',$surveyor);
    }
    public function retrivesurveyor($id){

      $users = user_profile::where('user_id', $id)->onlyTrashed()->first();
      if(!isset($users)){
        return redirect()->route('surveyor')->with('error', 'The id does not exist');
      }

      user_profile::where('user_id',$id)->onlyTrashed()->restore();
      User::where('id',$id)->onlyTrashed()->restore();
      return redirect()->route('surveyor')->with('success', 'Restore Data Account Success');
    }
    public function deletesurveyor($id){
      $users = user_profile::where('user_id', $id)->onlyTrashed()->first();
      if(!isset($users)){
        return redirect()->route('surveyor')->with('error', 'The id does not exist');
      }

      user_profile::where('user_id',$id)->onlyTrashed()->forceDelete();
      User::where('id',$id)->forceDelete();
      
      return redirect()->route('surveyor')->with('success', 'Delete Permanent Data Account Success');
    }
}

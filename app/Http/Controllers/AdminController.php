<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\user_profile;
use Auth;


class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('admin.dashboard');
  }
  public function profile(){
    // $admin = new App\User;
     // $admin = user::select('name','role')->where('id','=',Auth::id())->first();
     $admin = user::profile()->select('fullname','picture')->get();
    // $admin = Auth::id();
    return view('testerdata.test',compact('admin'));
  }
}

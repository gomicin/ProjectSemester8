<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\user_profile;
use Storage;
use Validator;
class AdminSettingSurveyor extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      // $surveyor = new User;
      // $surveyor->where('user_id',1);
      // $surveyor->profile();
      //$surveyor = $admin::surveyor()->select('fullname','picture')->where('user_id',Auth::user()->id)->get();
      $surveyor = User::with('profile')->where('role','surveyor')->get();
      //return $surveyor;
      return view('admin.surveyor')->with('Dsurveyor',$surveyor);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //id yang digunakan adalah id tabel user
      $surveyor = user_profile::with('user')->where('user_id',$id)->first();
      //return $surveyor;
      return view('admin.detailsurveyor')->with('Dsurveyor',$surveyor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      //id yang digunakan adalah id tabel user
      $surveyor = user_profile::with('user')->where('user_id',$id)->first();
      //return $surveyor;
      return view('admin.updatesurveyor')->with('Dsurveyor',$surveyor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = Validator::make($request->all(), [
            'firstname'=>'required|alpha',
            'lastname'=>'required|alpha',
            'no_hp'=>'required|numeric',
            'email'=>'required|email',
            'address'=>'required',
            'file'=>'required|image|mimes:jpeg,bmp,png'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if(User::find($id)->picture){
          Storage::delete(User::find($id)->picture);
        }

        $picture = $request->file('file')->store('Filepicture');

        $users = user_profile::where('user_id', $id)->first();
        if(!isset($users)){
          return redirect()->route('view-surveyor')->with('error', 'The id does not exist');
        }

        $user = User::where('id',$id);
        $user->update([
          'email'=>$request->email,
          'picture'=>$picture
        ]);

        $user_profile = user_profile::where('user_id',$id);
        $user_profile->update([
          'firstname'=>$request->firstname,
          'lastname'=>$request->lastname,
          'no_hp'=>$request->no_hp,
          'address'=>$request->address
        ]);

          return redirect()->route('view-surveyor')->with('success', 'Update Data Success');

     }
    public function resetpassword($id)
    {
        $users = User::where('id', $id)->first();
        if(!isset($users)){
          return redirect()->route('view-surveyor')->with('error', 'The id does not exist');
        }

        $user = User::find($id);
        $user->update([
          'password'=>bcrypt('password')
        ]);
          return redirect()->route('view-surveyor')->with('success', 'Reset Password Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id)->first();

        if(!isset($users)){
          return redirect()->route('view-surveyor')->with('error', 'The id does not exist');
        }

        $user = User::where('id',$id)->delete();
        $user_profile = user_profile::where('user_id',$id)->delete();

        return redirect()->route('view-surveyor')->with('success', 'Delete Account Success');
    }
}

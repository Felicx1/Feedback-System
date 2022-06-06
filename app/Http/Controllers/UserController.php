<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{ 
    
    // /**
    //  * Instantiate a new controller
    //  * @return void
    //  */

    //  public function _construct()
    //  {

    //   $this->middleware('auth');

    //  }

    public function index(){
    return view('user');
    }

    public function show($id) {
        return 'user Id:' . $id;
    }

    public function noaccess() {
        return view('noaccess');
    }

    public function post(Request $req) {
        //return $req->input();
        return back()->withInput();

    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
use App\Models\administrateur;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class login extends Controller
{
    public function index(Request $request){
        return view("pages.login");
    }
    public function login(Request $request){
       $email = $request->input('email');
       $password = $request->input('password');
      $req = admin::whereEmail($email)->wherePassword($password)->whereType_admin('1')->first();
      $sous = admin::whereEmail($email)->wherePassword($password)->whereType_admin('2')->first();
      $sous_admin = administrateur::whereEmail($email)->wherePassword($password)->whereType_admin('2')->first();
       if ($req == true) {
          session_start();
          Session::put('admins', $email);
          return redirect()->route('dashboad');
       }elseif($sous == true){
         session_start();
         Session::put('sous', $email);
         admin::whereEmail(session('sous'))->update(['active' => 1]);
         return redirect()->route('Sadmin');
       }elseif($sous_admin == true){
        session_start();
        Session::put('sous_sous', $email);
        administrateur::whereEmail(session('sous_sous'))->update(['active' => 1]);
        return redirect()->route('sous_admin_transaction'); 
       }else{
            return back()->with('status', ['message' => 'Utilisateur incorrect !']);     
       }
    }

    public function logout(){
        session_start();
		session_unset();
		session_destroy();
        return redirect()->route('index');
    }
    
}
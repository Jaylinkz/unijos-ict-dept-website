<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
  public function index()
  {
    $users=User::where('role','2');
    $role=Auth::user()->role;
    if($role=='1'){
        return view('Admin.admin',compact('users'));
    }
    if($role=='2'){
        return view('Lecturer.seller');
    }
    else
    {
      return view('dashboard');
    }
  }  //
}
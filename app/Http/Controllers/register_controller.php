<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class register_controller extends Controller
{
  public function index()
  {
    return view('register');
  }

  public function store(Request $request)
  {

    $dataLogin = $request->validate([
      'username' => 'required',
      'password' => 'required',
    ]);

    $id = str_shuffle(date('YmdHis') . 'RTR');
    User::create([
      'kode_akun' => $id,
      'username' => $request->username,
      'password' => Hash::make($request->password),
      'level' => 'user',
    ]);

    return redirect()->route('login');
  }
}

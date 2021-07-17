<?php

namespace App\Http\Controllers;

use App\Models\{
  User,
  LoginLog
};

use Sinergi\BrowserDetector\{
  Browser,
  Os,
  Device,
  Language
};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
  Auth,
  Validator,
  Session
};

class AuthController extends Controller
{
  public function showFormLogin()
  {
    if (Auth::check()) {
      return redirect()->route('home');
    }
    return view('auth.login');
  }

  public function login(Request $request)
  {
    $rules = [
      'email'                 => 'required|email',
      'password'              => 'required'
    ];

    $messages = [
      'email.required'        => 'Email wajib diisi',
      'email.email'           => 'Email tidak valid',
      'password.required'     => 'Password wajib diisi'
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()){
      return redirect()->back()->withErrors($validator)->withInput($request->all);
    }

    $data = [
      'email'     => $request->email,
      'password'  => $request->password,
    ];

    Auth::attempt($data);

    if (Auth::check()) {
      if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
      } else { 
        $ip = $_SERVER['REMOTE_ADDR'];
      }

      $browser  = new Browser();
      $os       = new Os();
      $device   = new Device();
      $language = new Language();

      LoginLog::create([
        'user_id'         => Auth::user()->id,
        'ip_address'      => $ip,
        'browser'         => $browser->getName(),
        'os'              => $os->getName(),
        'device'          => $device->getName(),
        'language'        => $language->getLanguage(),
        'login_at'        => \Carbon\Carbon::now()
      ]);

      return redirect()->route('home');
    } else {
      Session::flash('error', 'Username atau password salah');
      return redirect()->route('login');
    }

  }

  public function showFormRegister()
  {
    return view('auth.register');
  }

  public function register(Request $request)
  {
    $rules = [
      'name'                  => 'required|min:3|max:35',
      'email'                 => 'required|email|unique:users,email',
      'phone'                 => 'required|numeric|digits_between:12,14',
      'job'                   => 'required|in:designer,manager,accaunting',
      'password'              => 'required|confirmed'
    ];

    $messages = [
      'name.required'         => 'Nama lengkap wajib diisi',
      'name.min'              => 'Nama lengkap minimal 3 karakter',
      'name.max'              => 'Nama lengkap maksimal 35 karakter',
      'email.required'        => 'Alamat email wajib diisi',
      'email.email'           => 'Alamat email tidak sesuai',
      'email.unique'          => 'Alamat email lengkap sudah terdaftar',
      'phone.required'        => 'Nomor HP wajib diisi',
      'phone.numeric'         => 'Nomer HP wajib berupa angka',
      'phone.digits_between'  => 'Nomer HP wajib terdiri dari 12 sampai 14 digit',
      'job.required'          => 'Pekerjaan wajib diisi',
      'job.in'                => 'Pekerjaan tidak sesuai',
      'password.required'     => 'Password wajib diisi',
      'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput($request->all);
    }

    $user = User::create([
      'name'        => $request->name,
      'email'       => $request->email,
      'phone'       => $request->phone,
      'password'    => bcrypt($request->password),
      'job'         => $request->job
    ]);

    if($user){
      Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
      return redirect()->route('login');
    } else {
      Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
      return redirect()->route('register');
    }
  }

  public function logout()
  {
    Auth::logout();
    return redirect()->route('login');
  }
}

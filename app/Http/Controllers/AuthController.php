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
use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
  Auth,
  Validator,
  Session
};

class AuthController extends Controller
{
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
      return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    $data = [
      'email'     => $request->email,
      'password'  => $request->password,
    ];

    Auth::attempt($data);

    if (Auth::guard('web')->check()) {
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

      $likes = Session::get('like');
      $userLikes = [];

      if ($likes) {
        foreach ($likes as $like) {
            if ($like['user_id'] == Auth::id()) {
                array_push($userLikes, $like['project_id']);
            }
        }
      }

      if (! $request->expectsJson()) {
        return redirect()->route('dashboard.index');
      } else {
        return response()->json([
          'message'   => 'login success',
          'data'      => ['user' => Auth::user(), 'user_likes' => $userLikes]
        ], Response::HTTP_OK);
      }

    } else {
      return response()->json(['message' => 'email or password not valid'], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

  }

  public function register(Request $request)
  {
    $rules = [
      'name'                  => 'required|min:3|max:128',
      'nickname'              => 'required|max:64|unique:users,nickname',
      'email'                 => 'required|email|unique:users,email',
      'phone'                 => 'required|numeric|digits_between:12,14',
      'password'              => 'required|confirmed'
    ];

    $messages = [
      'name.required'         => 'Nama lengkap wajib diisi',
      'name.min'              => 'Nama lengkap minimal 3 karakter',
      'name.max'              => 'Nama lengkap maksimal 128 karakter',
      'nickname.required'     => 'Nickname wajib diisi',
      'nickname.unique'       => 'Nickname sudah terdaftar',
      'nickname.max'          => 'Nickname maksimal 64 karakter',
      'email.required'        => 'Alamat email wajib diisi',
      'email.email'           => 'Alamat email tidak sesuai',
      'email.unique'          => 'Alamat email sudah terdaftar',
      'phone.required'        => 'Nomor HP wajib diisi',
      'phone.numeric'         => 'Nomer HP wajib berupa angka',
      'phone.digits_between'  => 'Nomer HP wajib terdiri dari 12 sampai 14 digit',
      'password.required'     => 'Password wajib diisi',
      'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()) {
      return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    $user = User::create([
      'name'        => $request->name,
      'email'       => $request->email,
      'nickname'    => $request->nickname,
      'phone'       => $request->phone,
      'password'    => bcrypt($request->password),
    ]);

    if($user){
      return response()->json([
        'message' => 'register success'
      ], Response::HTTP_OK);
    } else {
      return response()->json('register failed please try again', Response::HTTP_UNPROCESSABLE_ENTITY);
    }
  }

  public function logout()
  {
    Auth::logout();
    return redirect()->route('home');
  }
}

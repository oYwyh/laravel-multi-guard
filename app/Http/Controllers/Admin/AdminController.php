<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use App\Models\Admin;

class AdminController extends Controller
{
    public function check(Request $req) {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $creds = $req->only('email','password');
        if(Auth::guard('admin')->attempt($creds)) {
            Toast::title('Logged In Successfuly!')
            ->autoDismiss(5);
            return redirect()->route('admin.home');
        }else {
            Toast::danger('Invallid Credintiols :(')
            ->autoDismiss(5);
            return redirect()->route('admin.login');
        }
    }
    public function logout(Request $req) {
        Auth::guard('admin')->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        Toast::title('Logout Successfuly :)')
        ->autoDismiss(5);
        return redirect()->route('admin.login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Permit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermitController extends Controller
{
    public function index()
    {
        $title = 'Pengajuan Izin';

        $user = Auth::user();
        $izin = Permit::where('users_id', $user->id)->paginate(10);
        // $color = array('primary', 'secondary', 'warning', 'success', 'danger', 'info');
        $color = ['primary', 'secondary', 'warning', 'success', 'danger', 'info'];

        return view('layouts.izin.index', compact('title', 'izin', 'color'));
        // dd($badge->clr);
    }
}

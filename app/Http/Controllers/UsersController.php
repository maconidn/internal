<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                return $user->name . "is online. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . "<br>";
            else
                return $user->name . "is offline. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . "<br>";
        }
    }

    public function index()
    {
        $title = 'Daftar karyawan';
        $users = User::orderBy('name', 'asc')->paginate(8);
        $color = array('primary', 'secondary', 'warning', 'success', 'danger', 'info');

        return view('layouts.users.index', compact('title', 'users', 'color'));
        // dd($color);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $title = 'Profil ' . $user->name;

        return view('layouts.users.profile', compact('user', 'title'));
    }

    public function search(Request $request)
    {
        $title = 'Hasil pencarian "' . $request->cari . '"';
        $position = Position::where('name', $request->cari)->get('id');
        $users = User::where('name', $request->cari)->orWhere('name', 'like', '%' . $request->cari . '%')->paginate(10);
        $color = array('primary', 'secondary', 'warning', 'success', 'danger', 'info');

        return view('layouts.users.index', compact('title', 'users', 'color', 'position'));
        // dd($position);
    }

    private function _validation(Request $request)
        {
            $validation = $request->validate(
                [
                    'name' => 'required|max:50|min:3|',
                    'email' => 'required|max:50|min:3|unique:users,email',
                    // 'avatar' => 'required|image|mimes:png,jpeg,jpg,gif',
                ],
                [
                    'name.required' => 'Nama harus diisi',
                    'name.min' => 'Nama minimal 3 huruf',
                    'name.max' => 'Nama maximal 50 huruf',
                    'email.required' => 'Email harus diisi',
                    'email.min' => 'Email minimal 3 huruf',
                    'email.max' => 'Email maximal 50 huruf',
                    'email.unique' => 'Email sudah tersedia',
                    'avatar.required' => 'Foto tidak boleh kosong',
                    'avatar.image' => 'Harus file gambar',
                    'avatar.mimes' => 'Extensi yang disarankan png, jpeg, jpg, gif',
                ]
            );
        }

    public function create()
    {
        $title = 'Tambah karyawan';
        $btnLabel = 'Tambah';

        return view('layouts.users.create', compact('title', 'btnLabel'));
    }

    public function store(Request $request)
    {
        $this->_validation($request);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->divitions_id = 1;
        $user->positions_id = 4;
        $user->password = Hash::make('password');
        $user->save();

        $user->details()->create([
            'nik' => '123123',
            'avatar' => 'avatar-1.png',
        ]);

        // User::create([
        //     'divitions_id' => '1',
        //     'positions_id' => '4',
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make('password')
        // ]);

        return redirect()->route('user');
    }
}

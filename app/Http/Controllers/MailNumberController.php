<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Models\Divition;
use App\Models\MailNumber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailNumberController extends Controller
{
    public function index()
    {
        $title = 'Surat keluar';
        $numbers = MailNumber::paginate(10);
        $bulan = array(1 => "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
        $bln = $bulan[date('n')];

        return view('layouts.outmail.index', compact('title', 'numbers', 'bulan', 'bln'));
        // dd($numbers->users->name);
    }

    public function create()
    {
        $title = 'Tambah Nomor Surat';
        $user = Auth::user();
        $divisi = Divition::get();
        $btnLabel = 'Tambah';
        $number = new MailNumber;

        return view('layouts.outmail.create', compact('title', 'user', 'divisi', 'btnLabel', 'number'));
        // dd($user->divitions);
    }

    public function store(MailRequest $request)
    {
        MailNumber::create([
            'for' => $request->tujuan,
            'subject' => $request->perihal,
            'users_id' => $request->pembuat,
            'divitions_id' => $request->divisi
        ]);

        return redirect()->route('outmail')->with('success', 'Nomor surat ditambahkan');
        // dd($request);
    }

    public function edit($id)
    {
        $number = MailNumber::findOrFail($id);
        $user = Auth::user();
        $btnLabel = 'Perbarui';
        $bulan = array(1 => "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
        $bln = $bulan[date('n')];
        $title = 'Ubah nomor surat ' . $number->id . '/MMI/' . $number->divitions->code . '/' . $bln . '/' . $number->created_at->format('Y');

        return view('layouts.outmail.edit', compact('title', 'number', 'user', 'btnLabel'));
        // dd($number->users->name);
    }

    public function update(Request $request, $id)
    {
        $number = MailNumber::findOrFail($id);

        $number->for = $request->tujuan;
        $number->subject = $request->perihal;
        $number->update();

        return redirect()->route('outmail')->with('success', 'Nomor surat berhasil diubah');
    }

    public function destroy($id)
    {
        $number = MailNumber::findOrFail($id);

        $number->delete();

        return redirect()->route('outmail')->with('delete-success', 'Nomor surat dihapus');
    }

    public function search(Request $request)
    {
        $title = 'Hasil pencarian "' . $request->cari . '"';
        $numbers = MailNumber::where('for', $request->cari)->orWhere('for', 'like', '%' . $request->cari . '%')->paginate(10);
        $bulan = array(1 => "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
        $bln = $bulan[date('n')];

        return view('layouts.outmail.index', compact('numbers', 'bln', 'title'));
    }
}

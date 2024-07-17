<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index(){
        return view('struktur-organisasi.index', ['datas' => StrukturOrganisasi::all()]);
    }

    public function tambah(){
        return view('struktur-organisasi.tambah');
    }

    public function aksiTambah(Request $request){
        StrukturOrganisasi::create([
            'nama' => $request->input('nama'),
            'role' => $request->input('role'),
        ]);

        return redirect()->route('so.index');
    }

    public function update($id){
        return view('struktur-organisasi.update', ['data' => StrukturOrganisasi::find($id)]);
    }

    public function aksiUpdate(Request $request, $id){
        $data = StrukturOrganisasi::find($id);
        $data->update([
            'nama' => $request->input('nama'),
            'role' => $request->input('role'),
        ]);

        return redirect()->route('so.index');
    }

    public function delete($id){
        $data = StrukturOrganisasi::find($id)->delete();

        return redirect()->back();
    }

}

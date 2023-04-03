<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class absensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahBaris = 5;
        if(strlen($katakunci)) {
            $data = absensi::where('nim', 'like', "%$katakunci%")
                    ->orWhere('nama', 'like', "%$katakunci%")
                    ->orWhere('jabatan', 'like', "%$katakunci%")
                    ->paginate($jumlahBaris);
        } else {
            $data = absensi::orderBy('id', 'desc')->paginate($jumlahBaris);
        }
        return view('absensi_crud.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absensi_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FacadesSession::flash('nim', $request->nim);
        FacadesSession::flash('nama', $request->nama);
        FacadesSession::flash('jabatan', $request->jabatan);

        $request->validate([
            'nim'=>'required|numeric|unique:absensi,nim',
            'nama'=>'required',
            'jabatan'=>'required',
            
        ],[
            'nim.required'=>'NIM Wajib Diisi',
            'nim.numeric'=>'NIM Wajib Menggunakan Angka',
            'nim.unique'=>'NIM Sudah Terdaftar!',
            'nama.required'=>'Nama Wajib Diisi',
            'jabatan.required'=>'Jabatan Wajib Diisi',
        ]);

        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ];
        absensi::create($data);
        return redirect()->to('absensi')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = absensi::where('nim', $id)->first();
        return view('absensi_crud.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',

        ], [
            'nama.required' => 'Nama Wajib Diisi',
            'jabatan.required' => 'Jabatan Wajib Diisi',
        ]);

        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ];

        // absensi::where('nim', $id)->update($data);
        absensi::where('nim',$id)->update($data);
        return redirect()->to('absensi')->with('success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        absensi::where('nim', $id)->delete();
        
        // $del = absensi::findorfail($id);
        // $del->delete();
        return redirect()->to('absensi')->with('success', 'Berhasil Menghapus Data');
        // return redirect()->to('/absensi')->with('delete','Berhasil Menghapus Data');
        // @dd(return redirect()->to('/absensi')->with('delete', 'Berhasil Menghapus Data'););
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use App\Models\presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

// use App\Models\Category;
// use Illuminate\Http\Request;

class presensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Session::flash('id', $request->id);
        Session::flash('jam_masuk', $request->jam_masuk);
        Session::flash('jam_keluar', $request->jam_keluar);

        $katakunci = $request->katakunci;
        $jumlahBaris = 5;
        if (strlen($katakunci)) {
            $data2 = presensi::where('idabsensi', 'like', "%$katakunci%")
                ->orWhere('created_at', 'like', "%$katakunci%")
                ->orWhere('jam_masuk', 'like', "%$katakunci%")
                ->orWhere('jam_keluar', 'like', "%$katakunci%")
                ->paginate($jumlahBaris);
        } else {
            $data2 = presensi::orderBy('jam_masuk', 'asc')->paginate($jumlahBaris);
        }
        return view('presensi_crud.index')->with('data2', $data2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('absensi')->get();
        return view('presensi_crud.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @dd($request->nim);
        $request->validate([
            'nim' => 'required',
            'jam_masuk' => 'nullable|date_format:H:i',
            'jam_keluar' => 'nullable|date_format:H:i',
        ]);
        
        $presensi = presensi::where('idabsensi', $request->nim)
            ->whereDate('created_at', Carbon::today())
            ->first();
        
        // @dd($presensi);

        if ($presensi) {
            if ($presensi->jam_keluar) {
                return redirect()->back()->withErrors(['Anda sudah melakukan absen keluar hari ini']);
            }

            $presensi->jam_keluar = Carbon::now();
            $presensi->save();

            return redirect()->back()->withSuccess('Absen keluar berhasil');
        }
        
        $data2 = [
            'idabsensi' => $request->nim,
            'jam_masuk' => $request->jam_masuk,
        ];
        
        presensi::create($data2);
        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil disimpan!');

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
        $data2 = presensi::where('id', $id)->first();
        return view('presensi_crud.edit')->with('data2', $data2);
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
            // 'idabsensi' => 'unique',
            'jam_masuk' => 'nullable',
            'jam_keluar' => 'nullable|date_format:H:i',
        ]);

        $presensi2 = presensi::where('idabsensi', $request->nim)
            ->first();

        // @dd($presensi);

        if ($presensi2) {
            if ($presensi2->jam_keluar) {
                return redirect()->back()->withErrors(['Anda sudah melakukan absen keluar hari ini']);
            }

            $presensi2->jam_keluar = Carbon::now('Asia/Jakarta')->format('H:i')();
            $presensi2->save();

            return redirect()->back()->withSuccess('Absen keluar berhasil');
        }

        // $timeNow = Carbon::now();
        // echo $timeNow->jam_keluar();

        // @dd($request->jam_keluar);

        $data2 = [
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar,
        ];
        
        presensi::where('id', $id)->update($data2);
        return redirect()->to('presensi');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // @dd($id);
        // presensi::where('id', $id)->delete();
        

        $del = presensi::findorfail($id);
        $del->delete();
        return redirect()->to('presensi')->with('delete', 'Berhasil Menghapus Data');
    }
}

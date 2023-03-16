<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use App\Models\presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

// use App\Models\Category;
// use Illuminate\Http\Request;

class presensiController extends Controller
{

    // public static function savePresensi($nim, $tanggal, $jam_masuk, $jam_keluar)
    // {
    //     $absensi = absensi::where('nim', '=', $nim)->first();
    //     if ($absensi) {
    //         $presensi = new Presensi([
    //             'nim' => $nim,
    //             'tanggal' => $tanggal,
    //             'jam_masuk' => $jam_masuk,
    //             'jam_keluar' => $jam_keluar,
    //             'timestamp' => now(),
    //         ]);

    //         $presensi->save();

    //         return $presensi;
    //     } else {
    //         return null;
    //     }
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahBaris = 5;
        if (strlen($katakunci)) {
            $data2 = presensi::where('nim', 'like', "%$katakunci%")
                ->orWhere('tanggal', 'like', "%$katakunci%")
                ->orWhere('jam_masuk', 'like', "%$katakunci%")
                ->orWhere('jam_keluar', 'like', "%$katakunci%")
                ->paginate($jumlahBaris);
        } else {
            $data2 = presensi::orderBy('nim', 'desc')->paginate($jumlahBaris);
        }
        return view('presensi_crud.index')->with('data2', $data2);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('absensi')->get();
        // $categories = DB::table('absensi')->where('jabatan', 'SPV')->get();
        // $categories = DB::table('absensi')->where('jabatan', 'Asisten')->get();
        // $categories = DB::table('absensi')->where('jabatan', 'Calas')->get();
        return view('presensi_crud.create', compact('categories'));
        
        // return view('presensi_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $categories = DB::table('absensi')->get();
        
        $request->validate([
            'nim' => 'required|exists:absensi,id',
            'tanggal' => 'required|date',
            'jam_masuk' => 'nullable|date_format:H:i',
            'jam_keluar' => 'nullable|date_format:H:i',
        ]);

        // presensi::create($request->all());
        
        $presensi = presensi::where('nim', $request->nim)
            ->whereDate('tanggal', Carbon::today())
            ->first();

        if ($presensi) {
            if ($presensi->jam_keluar) {
                return redirect()->back()->withErrors(['Anda sudah melakukan absen keluar hari ini']);
            }

            $presensi->jam_keluar = Carbon::now();
            $presensi->save();

            return redirect()->back()->withSuccess('Absen keluar berhasil');
        }

        $data2 = [
            'nim' => $request->nim,
            'tanggal' => Carbon::today(),
            'jam_masuk' => Carbon::now(),
        ];

        presensi::create($data2);

        return redirect()->route('presensi_crud.index')->with('success', 'Presensi berhasil disimpan!');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

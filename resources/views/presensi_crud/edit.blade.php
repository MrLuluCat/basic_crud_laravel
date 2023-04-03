@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action='{{ url('presensi/'.$data2->id) }}' method='post'>
    @csrf
    @method('PUT')   

    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href=" {{ url('presensi') }} " class="btn btn-secondary mb-3">Kembali</a>
            
            <div class="form-group">
                <label for="nim">NIM</label>
                {{-- <input type="text" name="nim" id="nim" class="form-control"> --}}
                <input class="form-control" type="text" value="{{ $data2->absensi->nim }} - {{ $data2->absensi->nama }}" aria-label="Disabled input example" disabled readonly>
            </div>
            
            <div class="form-group">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="time" name="jam_masuk" id="jam_masuk" class="form-control" value="{{ $data2->jam_masuk }}">
            </div>
            
            <div class="form-group">
                <label for="jam_keluar">Jam Keluar</label>
                <input type="time" name="jam_keluar" id="jam_keluar" class="form-control" 
                value="{{ \Carbon\Carbon::now('Asia/Jakarta')->format('H:i') }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection

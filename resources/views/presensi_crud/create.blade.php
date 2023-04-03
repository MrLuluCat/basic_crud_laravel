@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action='{{ route('presensi.store') }}' method='post'>
    @csrf   

    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href=" {{ url('presensi') }} " class="btn btn-secondary mb-3">Kembali</a>

            <div class="form-group">
                <label for="nim">NIM</label>
                {{-- <input type="text" name="nim" id="nim" class="form-control"> --}}
                <select class="form-select" aria-label="Default select example" value="nim" name="nim" id="nim">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nim }} -- {{ $category->nama }} -- {{ $category->jabatan }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control">
            </div> --}}
            <div class="form-group">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="time" name="jam_masuk" id="jam_masuk" value="{{ \Carbon\Carbon::now('Asia/Jakarta')->format('H:i') }}" class="form-control">
            </div>
            {{-- <div class="form-group">
                <label for="jam_keluar">Jam Keluar</label>
                <input type="time" name="jam_keluar" id="jam_keluar" class="form-control">
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
<!-- AKHIR FORM -->
@endsection

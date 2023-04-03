@extends('layout.template')
<!-- START FORM -->
@section('konten')
    
    <form action='{{ url('absensi/'.$data->nim) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href=" {{ url('absensi') }} " class="btn btn-secondary mb-3">Kembali</a>
    <div class="mb-3 mt-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            {{-- <input type="text" class="form-control" name='nim' value="{{ $data->nim }}" id="nim"> --}}
            <input class="form-control" type="text" value="{{ $data->nim }}" aria-label="Disabled input example" disabled readonly>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
        </div>
    </div>

    {{-- Jabatan --}}
    <div class="mb-3 row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name='jabatan' value="{{ $data->jabatan }}" id="jabatan">
                <option selected value="{{ Session::get('jabatan') }}"> -- Pilih Jabatan -- </option>
                <option value="SPV">SPV</option>
                <option value="Asisten">Asisten</option>
                <option value="Calas">Calas</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row"> 
        <label for="jabatan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
        </div>
    </div>
  
</div>
</form>
<!-- AKHIR FORM -->
@endsection

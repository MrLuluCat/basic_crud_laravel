@extends('layout.template')
<!-- START FORM -->
@section('konten')
    
<form action='{{ url('absensi') }}' method='post'>
@csrf

    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href=" {{ url('absensi') }} " class="btn btn-secondary mb-3 ">Kembali</a>
            
            {{-- Nim --}}
            <div class="mb-3 row">
                <label for="nim" class="col-sm-1 col-form-label">NIM</label>
                <div class="col-sm-11">
                    <input type="text" pattern="[0-9]*" class="form-control" name='nim' value="{{ Session::get('nim') }}" id="nim">
                </div>
            </div>

            {{-- Nama --}}
            <div class="mb-3 row">
                <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}" id="nama">
                </div>
            </div>

            {{-- Jabatan --}}
            <div class="mb-3 row">
                <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
                <div class="col-sm-11">
                    <select class="form-select" aria-label="Default select example" name='jabatan' value="{{ Session::get('jabatan') }}" id="jabatan">
                        <option selected value="{{ Session::get('jabatan') }}"> -- Pilih Jabatan -- </option>
                        <option value="SPV">SPV</option>
                        <option value="Asisten">Asisten</option>
                        <option value="Calas">Calas</option>
                    </select>
                </div>
            </div>

            {{-- Simpan Button --}}
            <div class="mb-3 row"> 
                <label for="jabatan" class="col-sm-1 col-form-label"></label>
                <div class="col-sm-11">
                    <button type="submit" class="btn btn-primary"  name="submit">SIMPAN</button>
                </div>
            </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection

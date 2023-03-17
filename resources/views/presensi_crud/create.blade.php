@extends('layout.template')
<!-- START FORM -->
@section('konten')

    {{-- <form method="post" action="{{ route('presensi.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="nim" class="form-label">{{ __('NIM') }}</label>
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>

                <button type="submit" class="btn btn-primary">{{ __('Absen') }}</button>
            </form> --}}


<form action='{{ route('presensi.store') }}' method='post'>
    @csrf   

    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href=" {{ url('presensi') }} " class="btn btn-secondary mb-3">Kembali</a>
            
            {{-- <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nim' value="{{ Session::get('nim') }}" id="nim">
                </div>
            </div> --}}

            {{-- <div class="col-sm-10">
                <form action="/store" method="POST">
                    @csrf

                    <label for="category_id">Select Category:</label>
                    <select name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->nim }}">{{ $category->nama }} -- {{ $category->jabatan }}</option>
                        @endforeach
                    </select>
                </form>
            </div> --}}

            {{-- Jabatan --}}
            {{-- <div class="mb-3 row">
                <label for="category_id" class="col-sm-1 col-form-label">Presensi</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->nim }}">{{ $category->nama }} -- {{ $category->jabatan }}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}

            {{-- <div class="mb-3 row">
                    <label for="date" class="col-sm-1 col-form-label d-inline">Tanggal</label>
                    <div class="col-5">
                        <div class="input-group date" id="datepicker">
                            <input type="datetime-local" class="form-control" placeholder="Select DateTime" id="date"/>
                        </div>
                    </div>
            </div> --}}

            {{-- <div class="mb-3"> --}}
                    {{-- <label for="nim" class="form-label">{{ __('NIM') }}</label> --}}
                    {{-- <input type="text" class="form-control" id="nim" name="nim"> --}}
                    {{-- <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->nim }}">{{ $category->nama }} -- {{ $category->jabatan }}</option>
                        @endforeach
                    </select>
            </div> --}}
            
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
                <input type="time" name="jam_masuk" id="jam_masuk" class="form-control">
            </div>
            <div class="form-group">
                <label for="jam_keluar">Jam Keluar</label>
                <input type="time" name="jam_keluar" id="jam_keluar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
            {{-- Simpan Button --}}
            {{-- <div class="mb-3 row"> 
                <label for="jabatan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                </div>
            </div> --}}
             
    </div>
</form>
<!-- AKHIR FORM -->
@endsection

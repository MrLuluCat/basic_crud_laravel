@extends('mahasiswa.layout')
@section('konten')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Presensi <span class="hover-effect">C</span><span class="hover-effect-2">a</span><span class="hover-effect-3">l</span><span class="hover-effect-4">a</span><span class="hover-effect-5">s</span></h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="integer" class="form-control" name="nim" id="nim" aria-describedby="nim">
                        <div id="nim" class="form-text">nim wajib diisi.</div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="varchar" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jam_datang" class="form-label">Jam datang</label>
                        <input type="time" class="form-control" name="jam_datang" id="jam_datang">
                    </div>
                    <a href="{{ route('mahasiswa.dashboard') }}" class="btn btn-primary mb-3">Kembali</a>
                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}} --}}
    {{-- <script type="text/javascript" src="https://www.smandakebumen.sch.id/assets/js/pages/author.min.js"></script> --}}
    <!-- Tambahkan link JavaScript untuk Bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    @endsection
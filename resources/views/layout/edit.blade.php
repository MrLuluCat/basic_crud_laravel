@extends('mahasiswa.layout')
@section('isi')
    <div class="container mt-5">
        <h1 class="text-center mb-5">
            Bagian Edit Data <span class="hover-effect-7">M</span><span class="hover-effect-8">a</span><span
                class="hover-effect-9">hasiswa</span></h1>
        <h1 class="text-center mb-5">Presensi <span class="hover-effect">C</span><span class="hover-effect-2">a</span><span
                class="hover-effect-3">l</span><span class="hover-effect-4">a</span><span class="hover-effect-5">s</span></h1>

        <a href="{{ route('mahasiswa.dashboard') }}" class="btn btn-primary mb-3">Data Mahasiswa</a>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="jam_pulang" class="form-label">Jam Pulang</label>
                        <input type="time" class="form-control" name="jam_pulang" value="{{ $mahasiswa->jam_pulang }}"
                            id="jam_pulang">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Perbarui</button>
                </form>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
    {{-- <script type="text/javascript" src="https://www.smandakebumen.sch.id/assets/js/pages/author.min.js"></script> --}}
    <!-- Tambahkan link JavaScript untuk Bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        -->
    <script>
        $(document).ready(function() {
            $('#mytable').DataTables();
        });
    </script>
@endsection

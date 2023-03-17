@extends('mahasiswa.layout')
@section('konten')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.5.3/css/autoFill.dataTables.min.css">
    <div class="container mt-5">
        <h1 class="text-center mb-5">Absen <span class="hover-effect">M</span><span class="hover-effect-2">a</span><span class="hover-effect-3">h</span><span class="hover-effect-4">a</span><span class="hover-effect-5">s</span><span class="hover-effect-6">i</span><span class="hover-effect-7">s</span><span class="hover-effect-8">w</span><span class="hover-effect-9">a</span></h1>
        <p class="text-center mb-5">Tanggal: <?php echo date('d F Y'); ?></p>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Absen Baru</a>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: auto; max-width: 100%;">
                    <table class="table display" id="mytable"> 
                        <thead>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jam datang</th>
                            <th>Jam pulang</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $hasil)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $hasil->nim}}</td>
                                <td>{{ $hasil->nama}}</td>
                                <td>{{ $hasil->jam_datang}}</td>
                                <td>{{ $hasil->jam_pulang}}</td>
                                <td>
                                     <a href=""  class="btn btn-success">edit</a>
                                    <a href=""  class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                 
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/autofill/2.5.3/js/dataTables.autoFill.min.js"></script>
<script>

    $(document).ready(functio() {
        $('#mytable').DataTables();
    });

</script>
   @endsection
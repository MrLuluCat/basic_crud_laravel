@extends('layout.template')
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
     
      <!-- FORM PENCARIAN -->
      @csrf
      <div class="pb-4">
        <form class="d-flex" action="{{ url('absensi') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" 
            placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary btn-md" type="submit">Search</button>
        </form>
      </div>

      <!-- TOMBOL TAMBAH DATA -->
      <div class="pb-3">
        <a href='{{ url('presensi/create') }}' class="btn btn-primary">+ Tambah Data</a>
      </div>

      <table class="table table-striped">
          <thead>
              <tr>
                  <th class="col-md-1">No</th>
                  <th class="col-md-2">NIM - Nama</th>
                  <th class="col-md-2">Tanggal</th>
                  <th class="col-md-3">Jam Masuk</th>
                  <th class="col-md-3">Jam Keluar</th>
              </tr>
          </thead>
          <tbody>
            <?php $i = $data2->firstItem() ?>
            @foreach ($data2 as $item)
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nim }} -- {{ $item->nama }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->jam_masuk }}</td>
                <td>{{ $item->jam_keluar }}</td>
                <td>
                    <a href='{{ url('absensi/' .$item->nim. '/edit') }}' class="btn btn-warning btn-sm">Edit</a>

                      <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-danger btn-sm" name="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Delete
                    </button>

                      <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data?</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Apakah Anda Yakin Untuk Menghapus Entry Data Ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form class="d-inline" action="{{ url('absensi/'.$item->nim) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
              </tr>
              <?php $i++ ?>
            @endforeach  
          </tbody>
      </table>
      {{-- {{ $data->withQueryString()->links() }} --}}
     
</div>
<!-- AKHIR DATA -->
@endsection





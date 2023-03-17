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
                  <th class="col-md-2">NIM</th>
                  <th class="col-md-3">Nama</th>
                  <th class="col-md-2">Jam Masuk</th>
                  <th class="col-md-2">Jam Keluar</th>
                  <th class="col-md-2">Action</th>
              </tr>
          </thead>
          <tbody>
            <?php $i = $data2->firstItem() ?>
            @foreach ($data2 as $item)
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->absensi->nim }}</td>
                <td>{{ $item->absensi->nama }}</td>
                <td>{{ $item->jam_masuk }}</td>
                <td>{{ $item->jam_keluar }}</td>
                <td>
                    <a href='{{ url('presensi/' .$item->id. '/edit') }}' class="btn btn-warning btn-sm">Edit</a>

                      <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-danger btn-sm" name="submit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                      Delete
                    </button>
                   
                      <!-- Modal -->
                </td>
              </tr>
              <?php $i++ ?>
              @endforeach 
              
              
              @foreach ($data2 as $item)
                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            {{-- <form class="d-inline" action="{{ route('presensi.destroy', ['presensi' => $item->id]) }}" method="POST"> --}}
                            <form class="d-inline" action="{{ url('presensi/'.$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger d-inline">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
          </tbody>
      </table>
      {{-- {{ $data->withQueryString()->links() }} --}}
     
</div>
<!-- AKHIR DATA -->
@endsection





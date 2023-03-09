@extends('layout.template')
<!-- START DATA -->
@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <!-- FORM PENCARIAN -->@csrf
      <div class="pb-3">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
      </div>
      
      <!-- TOMBOL TAMBAH DATA -->
      <div class="pb-3">
        <a href='\views\absensi_crud\create.blade.php' class="btn btn-primary">+ Tambah Data</a>
      </div>

      <table class="table table-striped">
          <thead>
              <tr>
                  <th class="col-md-1">No</th>
                  <th class="col-md-3">NIM</th>
                  <th class="col-md-4">Nama</th>
                  <th class="col-md-2">Jurusan</th>
                  <th class="col-md-2">Aksi</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>1001</td>
                  <td>Ani</td>
                  <td>Ilmu Komputer</td>
                  <td>
                      <a href='' class="btn btn-warning btn-sm">Edit</a>
                      <a href='' class="btn btn-danger btn-sm">Del</a>
                  </td>
              </tr>
          </tbody>
      </table>
     
</div>
<!-- AKHIR DATA -->
@endsection



       
        
        
        
    
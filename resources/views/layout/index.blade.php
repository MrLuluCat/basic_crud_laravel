@extends('layout.template')
@section('konten')
    <!-- Tambahkan navbar dengan kode Bootstrap 5 -->
    <div class="mt-5">
        
        <h1 style="text-align: center; margin-bottom: 20px; color: aliceblue;">Selamat Datang di Web Absensi</h1>
        <div style="display: flex; justify-content: center; color: aliceblue;">
            <span style="color: aliceblue; font-size: 24px; font-weight: bold;">Laboratorium&nbsp;</span>
            <span style="color: aliceblue; font-size: 24px; font-weight: bold;">ICT UBL</span>
        </div>
        <p style="text-align: center; color: aliceblue;" >"Maksimalkan pengalaman IT Anda dengan fasilitas yang ada di sini" </p>
        <p class="text-center mb-5" style=" color: aliceblue;"><?php echo date('d F Y'); ?></p>
    </div>
@endsection
   
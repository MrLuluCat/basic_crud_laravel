@extends('layout.template')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="mt-5">
                <img class="d-flex justify-content-center" src="{{ asset('images\logo_labict2.png') }}" alt="logo.labict2.png" width='400px'>  
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center mt-5 pt-5">
            <div class="text-justify fs-4" style=" color: aliceblue;" > 
                <br>
                <p>
                Web ini dibuat untuk memudahkan presensi di LAB ICT Budi Luhur dengan tampilan simpel dan mudah dimengerti pengguna.
                Kami akan terus mengembangkan web ini agar dapat lebih efisien dan lebih baik lagi. saran anda sangat diperlukan, 
                Terima kasih telah menggunakan layanan kami! 
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
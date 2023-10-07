@extends('layouts.home')


@section('pageTitle')
Selamat Datang pada sistem informasi Masjid {{env('APP_NAME')}}
@endsection

@section('DynamicCss')
<!-- Specific Page Vendor CSS -->
<link href="{{asset('dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<style type="text/css">
    .border-bottom{
        border-bottom:solid 0.5px #ccc;
    }
    .card-min-heigt{
        min-height:193px;
    }
</style>
@endsection

@section('titleBar')
<div class="section-header">
    <h1>Selamat Datang pada sistem informasi Masjid {{$masjidProfile->nama_masjid}}</h1>
</div>
@endsection

@section('mainContent')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> <h4>Profile Masjid</h4> </div>
            <div class="card-body card-min-height">
                <table width="100%">
                    <tr class="border-bottom">
                        <td width="80px">Nama</td>
                        <td>{{$masjidProfile->nama_masjid}}</td>
                    </tr>
                    <tr class="border-bottom">
                        <td>Alamat </td>
                        <td>{{$masjidProfile->alamat}}</td>
                    </tr>
                    <tr class="border-bottom">
                        <td>Telepon</td>
                        <td>{{$masjidProfile->nomor_telepon}}</td>
                    </tr>
                    <tr class="border-bottom">
                        <td>Email</td>
                        <td>{{$masjidProfile->email}}</td>
                    </tr>
                </table>
                <br/>
                
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><h4>Artikel Terbaru</h4></div>
            <div class="card-body card-min-height">Ea</div>
        </div>
    </div>
</div>

@endsection

@section('DynamicScript')
<script src="{{asset('dashboard/js/Chart.min.js')}}"></script>


@endsection

@section('mainContentPopup')


@endsection
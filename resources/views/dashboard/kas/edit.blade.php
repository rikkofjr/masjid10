@extends('layouts.dashboard')
@section('pageTitle')
    Rubah data transaksi | {{$kas->nama_transaksi}} , Tanggal {{$kas->created_at->format('j F,Y')}} 
@endsection

@section('DynamicCss')
    <link rel="stylesheet" href="{{asset ('dashboard/vendor/select2/dist/css/select2.min.css')}}">
@endsection

@section('titleBar')
<div class="section-header">
    <h1>Rubah data transaksi | {{$kas->nama_transaksi}} , Tanggal {{$kas->created_at->format('j F,Y')}} </h1>
	<div class="section-header-breadcrumb">
		<a class="btn btn-icon icon-left btn-primary" href="{{ route('admin.kas.index') }}"> <i class="fas fa-arrow-left"></i> Back</a>
	</div>
</div>
@endsection

@section('mainContent')
<!--Row1-->

<!--Row2-->
<style type="text/css">
    .number-form{
        text-align:right;
    }
    .mandatory{
        color:red;
    }
</style>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Rubah ransaksi Tanggal - {{$nowMasehi}}</h4>
            </div>
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ Form::model($kas, array('route' => array('admin.kas.update', $kas->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}
                <div class="form-group">
                    <label for="jenis">Jenis Transaksi</label><small class="mandatory">*</small>
                    <select class="form-control" name="jenis" style="text-transform:Capitalize;" id="">
                        <option value="{{$kas->jenis}}" selected hidden> {{$kas->jenis}} </option>
                        <option value="penerimaan"> Penerimaan </option>
                        <option value="pengeluaran"> Pengeluaran </option>
                    </select>
                </div>

                <div class="form-group">
                    {{ Form::label('cat_transaksi_id', 'Kategory Transaksi') }}<small class="mandatory">*</small>
                    <select name="kategori" id="selectKategoritTransaksi" class="form-control select2">
                        <option value="{{$kas->cat_transaksi_id}}" hidden selected>{{$kas->kategori_transaksi->cat_transaksi}}</option>
                    </select>
                </div>
               
                <div class="form-group">
                    {{ Form::label('nama_transaksi', 'Nama Transaksi') }} <small class="mandatory">*</small>
                    {{ Form::text('nama_transaksi',$kas->nama_transaksi, array('class'=>'form-control')) }}
                    @if($errors->has('nama_transaksi'))
                        <small class="mandatory">{{ $errors->first('nama_transaksi') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('jumlah_uang', 'Jumlah Uang') }}<small class="mandatory">*</small>
                    {{ Form::text('jumlah_uang', $kas->debit, array('class'=>'form-control number-form currency')) }}
                    @if($errors->has('debit'))
                        <small class="mandatory">{{ $errors->first('debit') }}</small>
                    @endif
                </div>
                
                <div class="form-group">
                    {{ Form::label('jumlah_uang', 'Jumlah Uang') }}<small class="mandatory">*</small>
                    {{ Form::text('jumlah_uang', $kas->kredit, array('class'=>'form-control number-form currency')) }}
                    @if($errors->has('debit'))
                        <small class="mandatory">{{ $errors->first('debit') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('catatan', 'Catatan') }}
                    {{ Form::textarea('catatan', '', array('class' => 'form-control', 'style' => 'height:200px;')) }}
                </div>
                
                <br/>

                <div class="position-relative">
                    <div class="position-absolute bottom-0 start-0">
                        {{ Form::submit('Edit Data', array('class' => 'btn btn-primary')) }}
                    </div>
                    <div class="position-absolute bottom-0 start-50 translate-middle-x">
                        <button class="btn btn-danger ">
                            <i class="fas fa-trash fa-2x"></i> Hapus
                        </button>
                    </div>
                </div>

                <div class="position-relative">
                <div class="position-absolute bottom-0 start-0">ABC</div>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">BCA </div>

                </div>

                {{ Form::close() }}

                

            </div>
        </div>
	</div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kategori Transaksi</h4> 
            </div>
            <div class="card-body">
                {{ Form::open(array('route' => 'admin.kas-kategori.store'))}}
                    <div class="form-group">
                        {{ Form::label('kategori', 'Kategori') }}
                        {{ Form::text('kategori', '', array('class' => 'form-control')) }}
                    </div>
                {{ Form::submit('Tambah Data', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
@section('DynamicScript')
    <!--<script src="{{asset ('dashboard/vendor/select2/dist/js/select2.full.min.js')}}"></script>-->
    <script src="{{asset ('dashboard/vendor/select2/dist/js/select2.full.min.js')}}"></script>

    <script src="{{ asset('dashboard/js/cleave.min.js') }}"></script>
    <script>
        var cleaveC = new Cleave('.currency', {
            numeral: true,
            delimeter: '.',
            numeralThousandsGroupStyle: 'thousand'
        });
        var cleaveC = new Cleave('.currency1', {
            numeral: true,
            delimeter: '.',
            numeralThousandsGroupStyle: 'thousand'
        });
    </script>
    <script>
           
            $(document).ready(function() {
                $('#selectKategoritTransaksi').select2({
                    minimumInputLength: 2,
                    ajax: {
                        url: "{{route('admin.api.all.kategoriTransaksi')}}",
                        dataType: 'json',
                    },
                });
            });
            $(document).ready(function() {
                $('#tahun').select2();
            });
        </script>
    
@endsection
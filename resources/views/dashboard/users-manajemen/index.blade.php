@extends('layouts.dashboard')

@section('DynamicCss')
<!-- Specific Page Vendor CSS -->
<link href="{{asset('dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection

@section('mainContent')
<section class="section">

<div class="section-header">
    <h1>Users Management</h1>
      <div class="section-header-breadcrumb">
        <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New User</a>
      </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        User 
      </div>
      <div class="card-body">
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
      @endif
      <table class="table table-bordered table-striped" id="dataTable" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $key => $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                  <label class="badge badge-success">{{ $v }}</label>
                @endforeach
              @endif
            </td>
            <td>
              <a class="btn btn-info" href="{{ route('admin.users.show',$user->id) }}">Show</a>
              <a class="btn btn-primary" href="{{ route('admin.users.edit',$user->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
        </tbody>
        
        </table>

      </div>
    </div>
  </div>
</div>






</section>
@endsection

@section('DynamicScript')
		<!-- Specific Page Vendor -->
		<script src="{{asset('dashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script>
            $(function(){
                var table = $('#dataTable').DataTable({
                    processing: true,
                    //serverSide: true,  
                });
            });
          </script>
@endsection
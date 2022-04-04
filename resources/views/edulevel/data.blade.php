@extends('main')

@section('title','dashboard')
    


@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">edulevel</a></li>
                    <li class="active">data</li>
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="card">
           <div class="card-header">
              <div class="pull-left">
                <strong>data jenjang</strong>      
            </div> 
            <div class="pull-right">
                <a href="{{ url('edulevels/add') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> ADD
                </a>
            </div>
        </div> 
        <div class="card-body table-responsive">
            <table class="table bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($edulevels as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->desc }}</td>
                            <td></td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
       
    </div>

</div>
@endsection
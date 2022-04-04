@extends('main')

@section('title','dashboard')
    


@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>edulevel</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
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
        <div class="card">
           <div class="card-header">
              <div class="pull-left">
                <strong>program</strong>      
            </div> 
            <div class="pull-right">
                <a href="{{ url('programs/create') }}" class="btn btn-success btn-sm">
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
                        <th>jenjang</th>
                        <th>tahun_kelahiran</th>
                        <th>tahun_kelulusan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programs as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->edulevel->name }}</td>
                            <td>{{ $item->tahun_kelahiran }}</td>
                            <td>{{ $item->tahun_kelulusan }}</td>
                            <td class="text-center">
                               <a href="{{ url('programs/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                               </a>
                               <form action="{{ url('programs/'.$item->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm ('hapus data?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                               </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
       
    </div>

</div>
@endsection
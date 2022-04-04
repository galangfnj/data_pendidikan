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
                    <li class="active">add</li>
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
                <strong>tambah jenjang</strong>      
            </div> 
            <div class="pull-right">
                <a href="{{ url('edulevels') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-undo"></i> back
                </a>
            </div>
        </div> 
        <div class="card-body ">
           
            <div class="class row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{ url('edulevels/') }}" method="POST" >
                        @csrf
                        <div class="form-group">
                          <label>Nama jenjang</label>
                          <input type="text" name="name" class="form control" autofocus required>  
                        </div>
                          <div class="form-group">
                            <label>keterangan</label>
                            <textarea name="desc" class="form control" autofocus required></textarea>
                          </div>
                          <button type="submit" class="btn btn-success">save</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
       
    </div>

</div>
@endsection
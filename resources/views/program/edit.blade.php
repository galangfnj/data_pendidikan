@extends('main')

@section('title', 'data pendidikan')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>edit data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">edit data</a></li>
                    <li class="active">Add</li>
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
                    <strong>edit data</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('programs') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('programs') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jenjang</label>
                                <select name="edulevel_id" class="form-control @error('edulevel_id') is-invalid @enderror">
                                    <option value="">- Pilih -</option>
                                    @foreach ($edulevels as $item)
                                        <option value="{{ $item->id }}" {{ old('edulevel_id') == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('edulevel_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>tahun_kelahiran</label>
                                <input type="number" name="tahun_kelahiran" class="form-control @error('tahun_kelahiran') is-invalid @enderror" value="{{ old('tahun_kelahiran') }}">
                                @error('tahun_kelahiran')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>tahun_kelulusan</label>
                                <input type="number" name="tahun_kelulusan" class="form-control @error('tahun_kelulusan') is-invalid @enderror" value="{{ old('tahun_kelulusan') }}">
                                @error('tahun_kelulusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Info</label>
                                <textarea name="info" class="form-control @error('info') is-invalid @enderror">{{ old('info') }}</textarea>
                                @error('info')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>      

    </div>

</div>
@endsection
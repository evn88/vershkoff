@extends('layouts.admin')

@section('content')
<div class="grid container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-6 text-left"><h3>Создать альбом</h3></div>
                    <div class="col-md-6 text-right"><a href="{{ url('admin/albums')}}" class="btn btn-light">Отмена</a></div>
                </div>
                </div>

                <div class="card-body">
                    
                    {!! Form::open(['action' => 'Admin\AlbumsController@store']) !!}
                    @if(isset($test))
                    {{ $test }}
                    @endif
                    
                    @include('admin.albums.__form')
                    {!! Form::close() !!}
                    @include('errors.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="grid container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-6 text-left"><h3>Создать альбом</h3></div>
                    <div class="col-md-6 text-right"><a href="{{ url('admin/albums')}}" class="btn btn-light">Отмена</a></div>
                </div>
                </div>

                <div class="card-body">
                    @include('errors.form')
                    <!-- TODO: Создать форму -->
                    {!! Form::open(['action' => 'Admin\AlbumsController@store']) !!}
                    @if(isset($test))
                        {{ $test }}
                    @endif
                    <!-- {{ csrf_field() }} -->
                        @include('admin.albums.__form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

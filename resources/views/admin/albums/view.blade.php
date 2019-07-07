@extends('layouts.admin')

@section('content')
<div class="grid container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header">
                    <div class="row">
                            <div class="col-md-6 text-left"><h3>{{ $album->name }}</h3></div>
                            <div class="col-md-6 text-right">
                                {!! Form::open(array('url' => 'admin/albums/'.$album->id, 'method' => 'DELETE')) !!}
                                {{ Form::submit('Удалить', array('class' => 'btn btn-danger')) }}
                                {!! Form::close() !!}
                                <a href="{{ url('admin/albums/'.$album->id.'/edit')}}" class="btn btn-light">Редактировать</a>
                                <a href="{{ url('admin/albums')}}" class="btn btn-light">Назад</a>
                            </div>
                    </div>
                </div>

                <div class="card-body">
                    <p>{{$album->description}}</p>
                    Тут будут фотки
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

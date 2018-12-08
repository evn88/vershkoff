@extends('layouts.admin')

@section('content')
<div class="grid container-fluid">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3>Альбомы</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('admin.albums.create') }}" class="btn btn-primary">Cоздать альбом</a>
                        </div>
                    </div>
                </div>
            
                <div class="card-body">

                    <div class="list-group">
                        @foreach ($albums as $album)
                        <a href="{{ route('admin.albums.show', ['id'=>$album->id]) }}" class="list-group-item list-group-item-action">
                                <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" 
                                  alt="{{ $album->name }}" 
                                  class="img img-left" 
                                  height="150px">
                                <span class="text-right">
                                    <h4>
                                        {{ $album->name }}
                                        <span class="badge badge-secondary">{{ $album->status }}</span>
                                    </h4>
                                    <p class="well">{{ $album->description }}</p>
                                </span>
                            </a>               
                        @endforeach
                    </div> <!-- end list-group -->

                </div>  <!-- end card -->

            </div>
        </div>
    </div>
</div>
@endsection

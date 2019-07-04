@extends('layouts.admin')

@section('content')

<div class="grid container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="grid albums">
                @foreach ($albums as $album)
                <a href="{{ route('admin.albums.show', ['id'=>$album->id]) }}">
                    <img src="http://vershkoff.ru/storage/cache/images/000/607/IMG-5553,300.225.85.60.crop.2x.1534768508.JPG"
                    alt="{{ $album->name }}">    
                    <span>{{ $album->name }}</span>
                </a>
                @endforeach
            </div> 
        </div>
    </div>
</div>
<div id="container-btn">
        <a class="floating-button" href="{{ route('admin.albums.create') }}">
          <p class="plus">+</p>
        </a>
</div>
@endsection

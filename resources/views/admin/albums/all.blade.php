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
                            <span>Альбомы</span>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('admin.albums.create') }}" class="btn btn-primary">+ создать альбом</a>
                        </div>
                    </div>
                </div>
            
                <div class="card-body">

                    <div class="list-group">
                        <a href="{{ route('admin.albums.show',['id'=>1]) }}" class="list-group-item list-group-item-action"><img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="" class="img" height="150px"> Альбом 1</a>               
                        <a href="{{ route('admin.albums.show',['id'=>2]) }}" class="list-group-item list-group-item-action"><img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="" class="img" height="150px"> Альбом 1</a>               
                        <a href="{{ route('admin.albums.show',['id'=>3]) }}" class="list-group-item list-group-item-action"><img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="" class="img" height="150px"> Альбом 1</a>               
                    </div> <!-- end list-group -->

                </div>  <!-- end card -->

            </div>
        </div>
    </div>
</div>
@endsection

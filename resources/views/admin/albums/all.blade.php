@extends('layouts.admin')

@section('content')
<div class="grid container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Альбомы</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    тут будут альбомы {{ $albums }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

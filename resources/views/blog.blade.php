@extends('layouts.new')

@section('content')
<div class="grid blog">
    <h1>Это блог</h1>

        
        <passport-clients></passport-clients>
        <passport-authorized-clients></passport-authorized-clients>
        <passport-personal-access-tokens></passport-personal-access-tokens>

</div>
@endsection
@if (count($errors) > 0)
<div class="col-md-9">

    <!-- Form Error List -->
    <div class="alert alert-danger">
        <h4>Упс! Что-то пошло не так!</h4>
        
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

</div>
@endif
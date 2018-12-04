<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('title','Название альбома') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'required')) }}

        </div>
        <div class="form-group">
            {{ Form::label('description','Описание альбома') }}
            {{ Form::textarea('description', null, array('class' => 'form-control','rows'=>'2' ,'required')) }}
        </div>
    </div>
    <div class="col-md-3">
        {{ Form::label('status','Статус альбома') }}
        {{ Form::select('status',
        [
            'Draft'=>'Черновик',
            'Published'=>'Опубликован'
        ],
        (!empty($news->status)) ? $news->status : NULL,
        ['class'=>'form-control'])
        }}

    </div>
<div class="col-md-12">
    {{ Form::submit('Сохранить', array('class' => 'btn btn-primary')) }}
</div>
</div>
<!-- <div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            {{ Form::label('text','Новость') }}
            {{ Form::textarea('text', null, array('id'=>'ckeditor','class' => 'form-control', 'required')) }}
        </div>
    </div>
</div> -->


<!-- @section('footer')
    <script>
        CKEDITOR.replace('ckeditor', {
            customConfig: '/lib/ckeditor/ckeditor_config.js'
        });
        CKEDITOR.dtd.$removeEmpty['span'] = false;
    </script>
@endsection -->
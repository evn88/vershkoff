<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('name','Название альбома') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('description','Описание альбома') }}
            {{ Form::textarea('description', null, array('class' => 'form-control','rows'=>'2')) }}
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
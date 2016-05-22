


{!! Form::open(['route'=>'project_file_send','method'=>'post'])!!}



<div class="form-group">
    {!! Form::label('nome', 'Nome:', ['class'=>'control-label']) !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('file', 'File:', ['class'=>'control-label']) !!}
    {!! Form::file('file', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
</div>


{!! Form::close() !!}


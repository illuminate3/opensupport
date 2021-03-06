<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::hidden('creator_name',  Auth::user()->name ) !!}
</div>
<div class="form-group">
    {!!  Form::label('status','Status',array('id'=>'','class'=>'')) !!}
     {!! Form::select('status', array(
     '0' => 'Open',
     '1' => 'Close',
     '2' => 'Pending',
     '3' => 'Solved'
    )) !!}
</div>
<div class="form-group">
    {!! Form::label('Client ID', 'Client ID:') !!}
    {!! Form::text('client_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>


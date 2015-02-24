<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('street', 'Street:') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('zip_code', 'Zip code:') !!}
    {!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>


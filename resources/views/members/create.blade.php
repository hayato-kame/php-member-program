@extends('layouts.app')

@section('content')

    <h1>会員新規登録ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}

                <div class="form-group">
                    {!! Form::label('number', '会員番号:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'ユーザ名:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', '氏名:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                
                
                
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
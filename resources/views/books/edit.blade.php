@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Livro</h3>

            {!! Form::model($book,
            ['route' => ['books.update',
            'book' => $book->id],
            'class' => 'form',
            'method' => 'PUT']) !!}

            <div class="form-group">
                {!! Form::label('title','Titulo') !!}
                {!! Form::text('title',null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('subtitle','Subtitulo') !!}
                {!! Form::text('subtitle',null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price','Preço') !!}
                {!! Form::text('price',null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Salvar livro' , ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection
@extends('books.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Redaguoti knygą</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Atgal</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Kažką ne taip įvedet.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update',$book->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Book') }}:</strong>
                    <input type="text" name="Pavadinimas" value="{{ $book->Pavadinimas }}" class="form-control" placeholder="{{ __('Book') }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Author') }}:</strong>
                    <textarea class="form-control" style="height:150px" name="Autorius" placeholder="{{ __('Author') }}">{{ $book->Autorius }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Release Date') }}:</strong>
                    <input type="date" name="Isleista" value="{{ $book->Isleista }}" class="form-control">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Description') }}:</strong>
                    <textarea class="form-control" style="height:150px" name="Aprasymas" placeholder="{{ __('Description') }}">{{ $book->Aprasymas }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Pateikti</button>
            </div>
        </div>

    </form>
@endsection
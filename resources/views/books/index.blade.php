@extends('books.layout')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD projektas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}">Pridėti naują knygą</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Pavadinimas</th>
            <th>Autorius</th>
            <th>Išleista</th>
            <th>Aprašymas</th>
            <th width="280px">Veiksmai</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $book->Pavadinimas }}</td>
            <td>{{ $book->Autorius }}</td>
            <td>{{ $book->Isleista }}</td>
            <td>{{ $book->Aprasymas }}</td>
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Parodyti</a>

                    <a class="btn btn-success" href="{{ route('books.edit',$book->id) }}">Keisti</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Ištrinti</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $books->links() !!}
    @endsection
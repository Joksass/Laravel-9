<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Books</title>
</head>
<body>
    
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">{{ __('Book') }}</th>
      <th scope="col">{{ __('Author') }}</th>
      <th scope="col">{{ __('Description') }}</th>
      <th scope="col">{{ __('Release Date') }}</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <th scope="row">{{ $book->id }}</th>
      <td>{{ $book->Pavadinimas }}</td>
      <td>{{ $book->Autorius }}</td>
      <td>{{ $book->Aprasymas }}</td>
      <td>{{ $book->Isleista }}</td>
    </tr>
    @endforeach
    @if (count($books) == 0)
        <tr>
        <td colspan="5" class="text-center">{{ __('Nothing found') }}</td>
        </tr>
    @endif

  </tbody>
</table>

</body>
</html>
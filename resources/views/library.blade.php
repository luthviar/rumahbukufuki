@extends('template.template')

@section('content')
    <h1>Pilih buku :</h1>
    @foreach($books as $book)
    	<li>
    		<a href="/library/{{$book->kode}}">{{$book->judul}}</a>
    		<form action="/library/{{$book->kode}}" method="post">
    			<button type="submit" class="btn btn-primary">Delete</button>
				<input type="hidden" name="_method" value="DELETE">
				{{ csrf_field() }}
			</form>
    	</li>
    @endforeach
    <a href="/insert">Tambah Buku</a>
@endsection
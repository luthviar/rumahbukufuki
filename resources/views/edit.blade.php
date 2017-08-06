@extends('template.template')

@section('content')
	<h1>Edit Buku {{$book->judul}}</h1>
	<form action="/library/{{$book->kode}}" method="post">
		<label for="kode">Kode Buku</label>
		<input type="text" name="kode" value="{{$book->kode}}">
		<br>
		<label for="judul">Judul Buku</label>
		<input type="text" name="judul" value="{{$book->judul}}">
		<br>
		<label for="edisi">Edisi</label>
		<input type="text" name="edisi" value="{{$book->edisi}}">
		<br>
		<label for="pengarang">Pengarang</label>
		<input type="text" name="pengarang" value="{{$book->pengarang}}">
		<br>
		<label for="penerbit">Penerbit</label>
		<input type="text" name="penerbit" value="{{$book->penerbit}}">
		<br>
		<button type="submit" class="btn btn-primary">Submit</button>
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
	</form>
@endsection
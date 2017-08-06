@extends('template.template')

@section('content')
	<h1>Tambah Buku</h1>
	<form action="/library" method="post">
		<label for="kode">Kode Buku</label>
		<input type="text" name="kode" placeholder="Kode Buku" id="kode">
		<br>
		<label for="judul">Judul Buku</label>
		<input type="text" name="judul" placeholder="Judul Buku" id="judul">
		<br>
		<label for="edisi">Edisi</label>
		<input type="text" name="edisi" placeholder="Edisi" id="edisi">
		<br>
		<label for="pengarang">Pengarang</label>
		<input type="text" name="pengarang" placeholder="Pengarang" id="pengarang">
		<br>
		<label for="penerbit">Penerbit</label>
		<input type="text" name="penerbit" placeholder="Penerbit" id="penerbit">
		<br>
		<button type="submit" class="btn btn-primary">Submit</button>
		{{ csrf_field() }}
	</form>
@endsection
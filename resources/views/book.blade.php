@extends('template.template')

@section('content')
    <h1>Ini adalah buku {{$book->judul}}!!</h1>
    <p>Kode Buku : {{$book->kode}}</p>
    <p>Edisi : {{$book->edisi}}</p>
    <p>Judul : {{$book->judul}}</p>
    <p>Pengarang : {{$book->pengarang}}</p>
    <p>Penerbit : {{$book->penerbit}}</p>
    <a href="/library/{{$book->kode}}/edit">Edit</a>
@endsection
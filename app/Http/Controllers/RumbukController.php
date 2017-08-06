<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class RumbukController extends Controller
{
    public function library()
    {
    	$books = Book::all();
    	return view('library', ['books' => $books]);
    }

    public function show($kode)
    {
        $book = Book::where('kode', $kode)->first();
    	return view('book', ['book'=> $book]);
    }

    public function create()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->kode = $request->kode;
        $book->judul = $request->judul;
        $book->edisi = $request->edisi;
        $book->pengarang = $request->pengarang;
        $book->penerbit = $request->penerbit;
        $book->status = 'Tersedia';
        $book->save();
        return redirect('library'); 
    }

    public function edit($kode)
    {
        $book = Book::where('kode', $kode)->first();
        return view('edit', ['book' => $book]);
    }

    public function update(Request $request, $kode)
    {   
        $book = Book::where('kode',$kode)->first();
        $book->kode = $request->kode;
        $book->judul = $request->judul;
        $book->edisi = $request->edisi;
        $book->pengarang = $request->pengarang;
        $book->penerbit = $request->penerbit;
        $book->save();
        return redirect('library/' . $request->kode);
    }

    public function destroy($kode)
    {
        $book = Book::where('kode', $kode)->first();
        $book->delete();
        return redirect('library');
    }
}
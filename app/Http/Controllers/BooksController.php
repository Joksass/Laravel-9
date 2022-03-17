<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$books = Books::all();
        return view('books', ['books' => $books]);*/
        $books = Books::latest()->paginate(10);

        return view('books.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

            /*return view('books', [
                'books' => DB::table('books')->paginate(15)
            ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Pavadinimas' => 'required',
            'Autorius' => 'required',
            'Isleista' => 'required',
            'Aprasymas' => 'required',
        ]);

        Books::create($request->all());

        return redirect()->route('books.index')
                        ->with('success','Knyga pridėta sėkmingai.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksRequest  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        $request->validate([
            'Pavadinimas' => 'required',
            'Autorius' => 'required',
            'Isleista' => 'required',
            'Aprasymas' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
                        ->with('success','Knyga atnaujinta sėkmingai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        $book->delete();

        return redirect()->route('books.index')
                        ->with('success','Knyga sėkmingai ištrinta');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::all();
        return view('admin.book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|unique:books|max:255',
            'status' => 'required',
        ]);
        $validateData['category_id'] = $request->category_id;
        $validateData['title'] = $request->title;
        $validateData['status'] = $request->status;
        $validateData['user_id'] = auth()->user()->id;

        Book::create($validateData);

        return redirect()->route('books.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book) {
        $categories = Category::all();
        return view('admin.book.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book) {
        $validatedData = $request->validate([
            'title' => 'required|unique:books|max:255',
            'status' => 'required',
        ]);
        $validateData['category_id'] = $request->category_id;
        $validateData['title'] = $request->title;
        $validateData['status'] = $request->status;
        $validateData['user_id'] = auth()->user()->id;

        Book::where('id', $book->id)
            ->update($validateData);
        return redirect('/admin/books')->with('success', 'Book berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book) {
        Book::destroy($book->id);
        return redirect('/admin/books')->with('success', 'Book berhasil di hapus');
    }
}
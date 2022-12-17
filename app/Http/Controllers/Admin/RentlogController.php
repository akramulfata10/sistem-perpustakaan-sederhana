<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Rentlog;
use Illuminate\Http\Request;

class RentlogController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $rentlogs = Rentlog::all();
        return view('admin.peminjaman.index', compact('rentlogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $books = Book::all();
        return view('admin.peminjaman.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'book_id' => 'required',
            'waktu_pinjam' => 'required',
            'waktu_kembalikan' => 'required',
            'waktu_pasti_kembalikan' => 'required',
        ]);
        $validateData['book_id'] = $request->book_id;
        $validateData['waktu_pinjam'] = $request->waktu_pinjam;
        $validateData['waktu_kembalikan'] = $request->waktu_kembalikan;
        $validateData['waktu_pasti_kembalikan'] = $request->waktu_pasti_kembalikan;

        Rentlog::create($validateData);

        return redirect()->route('rentlog.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
     * @param \App\Models\Rentlog  $rentlog
     * @return \Illuminate\Http\Response
     */
    public function edit(Rentlog $rentlog) {
        $books = Book::all();
        return view('admin.peminjaman.edit', compact('rentlog', 'books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rentlog  $rentlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rentlog $rentlog) {
        $validatedData = $request->validate([
            'book_id' => 'required',
            'waktu_pinjam' => 'required',
            'waktu_kembalikan' => 'required',
            'waktu_pasti_kembalikan' => 'required',
        ]);
        $validateData['book_id'] = $request->book_id;
        $validateData['waktu_pinjam'] = $request->waktu_pinjam;
        $validateData['waktu_kembalikan'] = $request->waktu_kembalikan;
        $validateData['waktu_pasti_kembalikan'] = $request->waktu_pasti_kembalikan;

        Rentlog::where('id', $rentlog->id)
            ->update($validateData);

        return redirect()->route('rentlog.index')->with(['success' => 'Data Berhasil DiUpdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rentlog  $rentlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rentlog $rentlog) {
        Rentlog::destroy($rentlog->id);
        return redirect()->route('rentlog.index')->with(['success' => 'Data Berhasil Deleted!']);
    }
}
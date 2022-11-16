<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookStoreController extends Controller
{
    /**
     * Return Books
     *
     * @return [string] message
     */
    public function index()
    {
        $books = Book::all();

        return response()->json([
            'success'   => true,
            'message'   => 'Books List',
            'data'      => $books,
            'code'      => 200
        ], 200);        
    }

    /**
     * Create Book
     *
     * @param  [string] name
     * @param  [only_numbers] isbn
     * @param  [decimal] value
     * @return [string] message
     */
    public function store(BookStorePost $request)
    {
        $book = Book::create($request->all());

        return response()->json([
            'success'   => true,
            'message'   => 'Book Created',
            'data'      => $book,
            'code'      => 201
        ], 201);
    }

    /**
     * Return find Book
     *
     * @param  [integer] id
     * @return [string] message
     */
    public function show($id)
    {
        $book = Book::find($id);

        return response()->json([
            'success'   => true,
            'message'   => 'Book',
            'data'      => $book,
            'code'      => 200
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

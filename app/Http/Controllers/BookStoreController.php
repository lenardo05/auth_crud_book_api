<?php

namespace App\Http\Controllers;

use App\BookStore as Book;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookStoreRequest;

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
    public function store(BookStoreRequest $request)
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
     * Update Book
     *
     * @param  [integer] id
     * @param  [string] name
     * @param  [only_numbers] isbn
     * @param  [decimal] value
     * @return [string] message
     */
    public function update(BookStoreRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return response()->json([
            'success'   => true,
            'message'   => 'Book Updated',
            'data'      => $book,
            'code'      => 201
        ], 201);
    }

    /**
     * Delete Book
     *
     * @param  [integer] id
     * @return [string] message
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        Book::destroy($id);

        return response()->json([
            'success'   => true,
            'message'   => 'Book Deleted',
            'data'      => $book,
            'code'      => 201
        ], 201);
    }
}

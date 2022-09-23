<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function __construct()
    {

    }

    // public function index(Request $request)
    // {
    //     // @TODO implement
        
    //     return BookResource::collection();
    // }

    public function store(Request $request)
    {

        DB::beginTransaction();
        try{
            /*Store Transfer Data*/
            DB::table('payment')->insert([
                'ISBN' => $request->post('isbn'),
                'TITLE' => $request->post('title'),
                'DESCRIPTION' => $request->post('desc'),
                'PUBLISHED_YEAR' => $request->post('publis'),
                
            ]);
        
            DB::commit();

            return response()->json([
                'rc' => '00',
                'desc' => 'success',
                'msg' => 'success',
                'data' => ''
            ]);
        }
        catch(\Exception $e) {
            DB::rollback();
            return response()->json([
                'rc' => '01',
                'desc' => 'failed',
                'msg' => 'failed',
                'data' => $e->getMessage()
            ]);
        }

        // // @TODO implement
        // $book = new Book();

        // return new BookResource($book);
    }
}

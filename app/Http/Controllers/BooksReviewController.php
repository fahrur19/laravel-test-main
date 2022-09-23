<?php

namespace App\Http\Controllers;

use App\BookReview;
use App\Http\Requests\PostBookReviewRequest;
use App\Http\Resources\BookReviewResource;
use Illuminate\Http\Request;

class BooksReviewController extends Controller
{
    public function __construct()
    {

    }

    public function showData()
    {
        // @TODO implement

        $data = BookReview::from('BookReview as a')
        ->get();

        return response()->json([
            'rc' => '00',
            'desc' => 'success',
            'msg' => 'success',
            'data' => $data
        ]);

        // $bookReview = new BookReview();

        // return new BookReviewResource($bookReview);
    }

    public function showASC()
    {
        // @TODO implement

        $data = BookReview::from('BookReview as a')
        ->orderBy('a.BOOK_ID', 'ASC')
        ->get();

        return response()->json([
            'rc' => '00',
            'desc' => 'success',
            'msg' => 'success',
            'data' => $data
        ]);

        // $bookReview = new BookReview();

        // return new BookReviewResource($bookReview);
    }

    public function showbyid($id){
        if(BookReview::where('id', $id)->exists())
        {
            $data = BookReview::where('id', $id)->first();
            return response()->json([
                'rc' => '00',
                'desc' => 'success',
                'msg' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'rc' => '01',
                'desc' => 'failed',
                'msg' => 'not_found',
                'data' => ''
            ]);
        }
    }

    public function destroy($id)
    {
        $data = BookReview::where('id', $id)->delete();
    }
}

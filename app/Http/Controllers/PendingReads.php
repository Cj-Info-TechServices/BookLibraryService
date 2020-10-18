<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use Carbon\Carbon;

class PendingReads extends Controller
{


    public function index(){
        //$readBooks = array("test");
        // return a query containing the where clause created_at = 'something' and read = '1'
        $pendingRead = Book::where('Read', 0)->get();
        //echo "all books". $readBooks;
        return json_encode($pendingRead); 
    }
}

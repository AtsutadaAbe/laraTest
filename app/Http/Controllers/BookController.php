<?php

namespace App\Http\Controllers;

use App\Book;//モデルの指定
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
     public function bookIndex($aaa) {
        return view('bookList.bookIndex',compact('aaa'));
    }
    public function getBookList(Request $request)
    {
        $this->insert();
        $data = Book::all();
//    条件で絞り込む時はクエリビルダで
//    $data = Item::where('id', '>', 10)->get();
//    これでも同じ
//    $data = DB::table('items')->where('id', '>', 10)->where('price',100)->get();

        return view('item.list', ['data' => $data]);
//   そのまま値をreturnするとJSONになります。
//   return $data;
    }
    private function insert()
    {
        $item = new Book();
        $item->title = "羅生門";
        $item->name = "芥川龍之介";
        $item->price = 300;
        $item->review = "かつらを作ってた";
        $item->save();
    } 
}
//Route::get('/bookList','BookController@getBookList');

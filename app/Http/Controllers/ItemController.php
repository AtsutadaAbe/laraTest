<?php

namespace App\Http\Controllers;

use App\Item;//モデルの指定
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
     public function index($code) {
        return view('item.index',compact('code'));
    }
    public function getList(Request $request)
    {
        //$this->insert();
        $data = Item::all();
//    条件で絞り込む時はクエリビルダで
//    $data = Item::where('id', '>', 10)->get();
//    これでも同じ
//    $data = DB::table('items')->where('id', '>', 10)->where('price',100)->get();

//        return view('item.list', ['data' => $data]);
//   そのまま値をreturnするとJSONになります。
    return $data;
    }
    private function insert()
    {
        $item = new Item();
        $item->name = "テスト";
        $item->price = 100;
        $item->url = "";
        $item->save();
    } 
}
// Route::get('/item/{code}', function ($code) {
//     return view('item',compact('code'));
// });
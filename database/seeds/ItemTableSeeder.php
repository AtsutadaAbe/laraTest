<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
         ['item_code' => '1000-1000-10000', 'item_name' => '〈FAUCHON〉ブルーベリージャム', 'price' => 2052, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-20000', 'item_name' => '〈日本サーナ〉ビルベリーとカシスの濃縮果汁セット', 'price' => 4140, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-30000', 'item_name' => '発酵カシス2本セット', 'price' => 4140, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],

        ];
        DB::table('items')->insert($datas);
    }
}


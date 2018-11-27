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
         ['item_code' => '1000-1000-10000', 'item_name' => '〈FAUCHON〉ブルーベリージャム', 'price' => 2052, 'description' => '○○○○○○○', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_sub/5249/0000005249_1f.jpg', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-20000', 'item_name' => '〈日本サーナ〉ビルベリーとカシスの濃縮果汁セット', 'price' => 4140, 'description' => '○○○○○○○', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/0663/0001410663-001f.jpg', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-30000', 'item_name' => '発酵カシス2本セット', 'price' => 4140, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-40000', 'item_name' => '〈Oaks Heart〉飲むブルーベリーの酢', 'price' => 1620, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-50000', 'item_name' => '〈ての字〉国内産鰻真空パック3人前', 'price' => 7776, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-60000', 'item_name' => '〈京料理　たん熊北店〉だし入りうなぎ茶漬け', 'price' => 6480, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-70000', 'item_name' => '〈いち粒〉食塩無添加とまとジュース6本セット', 'price' => 3348, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-80000', 'item_name' => '〈ファンケル〉えんきん（1袋　1ヶ月分）', 'price' => 2160, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-90000', 'item_name' => '〈パナソニック〉目もとエステ　ピンクEH-SW50-P', 'price' => 6921, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-11000', 'item_name' => '〈めぐリズム〉蒸気でホットアイマスク　カモミールジンジャー（14枚入り）', 'price' => 1000, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         
         ['item_code' => '5000-1000-10000', 'item_name' => '網走産　砂出ししじみ', 'price' => 4514, 'description' => '○○○○○○○', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/1406/0001251406-001f.jpg', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-20000', 'item_name' => '宍道湖　産大粒大和しじみ', 'price' => 3780, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-30000', 'item_name' => '〈米子中浦〉宍道湖しじみ（大粒）個食詰合わせ', 'price' => 3240, 'description' => '○○○○○○○', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/2236/0001292236-001f.jpg', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-40000', 'item_name' => '無農薬ぶなしめじ（100ｇ）', 'price' => 340, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-50000', 'item_name' => 'まいたけ（新潟産　約700ｇ）', 'price' => 1980, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-60000', 'item_name' => '無農薬無化学肥料　えのき茸', 'price' => 340, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-70000', 'item_name' => '〈CHESCO〉チーズギフト（イルドフランス　カマンベール・ジェラールクリーミィウォッシュ・グラナ　パダーノ・ナッツ＆フルーツ・レッドチェダー　ニュージーランド　5種）', 'price' => 4320, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-80000', 'item_name' => '〈ハウスウェルネスフーズ〉ウコンの力レバープラス粒タイプ箱（10個）', 'price' => 1327, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-90000', 'item_name' => '〈DHC〉濃縮ウコン30日分', 'price' => 788, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-11000', 'item_name' => '〈カゴメ〉スルフォラファン93粒', 'price' => 4100, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
        
         ['item_code' => '4000-1000-10000', 'item_name' => '本物のいわしくん缶詰（醤油味付）', 'price' => 4104, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '4000-1000-20000', 'item_name' => '北海道産いわし丼', 'price' => 2592, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '4000-1000-30000', 'item_name' => '〈逸味　潮屋〉鰤のたたき', 'price' => 2916, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '4000-1000-40000', 'item_name' => 'はと麦（300ｇ×1袋)', 'price' => 900, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '4000-1000-50000', 'item_name' => '北海道産有機あずき（100ｇ×10袋）', 'price' => 3110, 'description' => '○○○○○○○', 'url' => '', 'body' => 'stomach', 'maker_name' => ''],
        
         ['item_code' => '3000-1000-10000', 'item_name' => '〈大正製薬〉大正グルコサミンパワープラス（30日分）', 'price' => 5400, 'description' => '○○○○○○○', 'url' => '', 'body' => 'leg', 'maker_name' => ''],
         ['item_code' => '3000-1000-20000', 'item_name' => '〈ワコール〉CW-Xパーツ（サポーター）', 'price' => 1940, 'description' => '○○○○○○○', 'url' => '', 'body' => 'leg', 'maker_name' => ''],
         ['item_code' => '3000-1000-30000', 'item_name' => '〈ミズノ〉バレーボール膝サポーター', 'price' => 1188, 'description' => '○○○○○○○', 'url' => '', 'body' => 'leg', 'maker_name' => ''],
         ['item_code' => '3000-1000-40000', 'item_name' => '〈洛中高岡屋〉おじゃみ座布団', 'price' => 5400, 'description' => '○○○○○○○', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/8531/0001178531-001f.jpg', 'body' => 'leg', 'maker_name' => ''],
         ['item_code' => '3000-1000-50000', 'item_name' => '高級金らん正座椅子', 'price' => 3240, 'description' => '○○○○○○○', 'url' => '', 'body' => 'leg', 'maker_name' => ''],
        
        ];
        DB::table('items')->insert($datas);
    }
}




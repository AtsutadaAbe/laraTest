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
         ['item_code' => '1000-1000-10000', 'item_name' => 'ブルーベリージャム', 'price' => 2052, 'description' => '完熟もぎたてのブルーベリーを丁寧に煮上げた、フォションの定番ジャム。ブルーベリーの甘酸っぱさがパンやクレープにあいます。\nブルーベリーには「アントシアニン」という成分が含まれています。アントシアニンはポリフェノールの一種で、体内ではロドプシンという視覚に関するたんぱく質の合成に関わっていて、視機能の改善や視力低下の防止、白内障予防にも効果があると言われています。またアントシアニンはブルーライトから目を守ってくれるという結果も出ています。\n品名：ジャム　原材料：ブルーベリー　内容量：３６５g　保存方法：直射日光、高温多湿を避けて保存して下さい。\n原産国名：日本\n※効果には個人差があります。', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_sub/5249/0000005249_1f.jpg', 'body' => 'head',
         'maker_name' =>'〈FAUCHON〉' ],
         ['item_code' => '1000-1000-20000', 'item_name' => '〈日本サーナ〉ビルベリーとカシスの濃縮果汁セット', 'price' => 4140, 'description' => '○○○○○○○', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/0663/0001410663-001f.jpg', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-30000', 'item_name' => '発酵カシス2本セット', 'price' => 4140, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-40000', 'item_name' => '〈Oaks Heart〉飲むブルーベリーの酢', 'price' => 1620, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-50000', 'item_name' => '〈ての字〉国内産鰻真空パック3人前', 'price' => 7776, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-60000', 'item_name' => '〈京料理　たん熊北店〉だし入りうなぎ茶漬け', 'price' => 6480, 'description' => '国産のうなぎを使用し、たん熊北店のだしを使ったお茶漬けです。だしの風味とうなぎの絶妙な調和をお楽しみください。うなぎにはビタミンAが含まれており、目の粘膜を正常に保ち、目に潤いを与えます。ドライアイを予防する働きがあります。\n※効果には個人差があります。', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/6271/0001436271-001f.jpg', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-70000', 'item_name' => '〈いち粒〉食塩無添加とまとジュース6本セット', 'price' => 3348, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-80000', 'item_name' => '〈ファンケル〉えんきん（1袋　1ヶ月分）', 'price' => 2160, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-90000', 'item_name' => '〈パナソニック〉目もとエステ　ピンクEH-SW50-P', 'price' => 6921, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         ['item_code' => '1000-1000-11000', 'item_name' => '〈めぐリズム〉蒸気でホットアイマスク　カモミールジンジャー（14枚入り）', 'price' => 1000, 'description' => '○○○○○○○', 'url' => '', 'body' => 'head', 'maker_name' => ''],
         
         ['item_code' => '5000-1000-10000', 'item_name' => '網走産　砂出ししじみ', 'price' => 4514, 'description' => '北海道網走湖で5月から10月に獲れるしじみ。極寒に耐えたしじみの旨味は格別で、プリプリの食感。「身を食べるしじみ」です。\nしじみはアミノ酸、ビタミン、ミネラルといった豊富な栄養素を含み、身体の健康増進にとても効果的な食品です。特にしじみに含まれるアミノ酸の一種のオルニチンは、肝臓の尿路回路と呼ばれるアンモニアを解毒する回路で働き、アンモニアの解毒を促進する作用があります。これにより肝臓の負担が軽減され、今まで解毒に割いていた肝臓の働きを脂質やアルコールの代謝に回すことができるようにあり、肝臓の機能が高まります。またアンモニアは身体に取って有害で、エネルギーを産出する細胞の小器官であるミトコンドリアの活動を妨げます。オルニチンはアンモニアの分解を促進することで、ミトコンドリアのエネルギー産出を助けます。オルニチンによって細胞のエネルギー産出が促進されることで、肝臓などの内臓の働きが活発になります。\n※効果には個人差があります。', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/1406/0001251406-001f.jpg', 'body' => 'stomach', 'maker_name' => ''],
         ['item_code' => '5000-1000-20000', 'item_name' => '宍道湖　産大粒大和しじみ', 'price' => 3780, 'description' => '獲れたての宍道湖産大和しじみを砂抜きし、冷凍しました。漁獲量の約5％と希少価値の高いLサイズを産地よりお届けします。味噌汁やすまし汁、パスタ、酒蒸しなどでお召し上がりください。\n特にしじみに含まれるアミノ酸の一種のオルニチンは、肝臓の尿路回路と呼ばれるアンモニアを解毒する回路で働き、アンモニアの解毒を促進する作用があります。これにより肝臓の負担が軽減され、今まで解毒に割いていた肝臓の働きを脂質やアルコールの代謝に回すことができるようにあり、肝臓の機能が高まります。またアンモニアは身体に取って有害で、エネルギーを産出する細胞の小器官であるミトコンドリアの活動を妨げます。オルニチンはアンモニアの分解を促進することで、ミトコンドリアのエネルギー産出を助けます。オルニチンによって細胞のエネルギー産出が促進されることで、肝臓などの内臓の働きが活発になります。\n※効果には個人差があります。', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/0695/0001320695-001f.jpg', 'body' => 'stomach', 'maker_name' => ''],
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
         ['item_code' => '3000-1000-40000', 'item_name' => '〈洛中高岡屋〉おじゃみ座布団', 'price' => 5400, 'description' => 'おじゃみとは、関西ではお手玉を表す言葉。4枚の布で仕立てるお手玉の手法をアレンジし、京都の職人が高度な熟練の技で座ぶとんとして今に蘇らせました。角をきっちり出しながら座り心地を考えてわたを詰めるのは、熟練の技で1つ1つ丁寧に作り上げています。高さがあるため背筋が自然と伸びて、正座でも胡坐でも長く楽に座ることが出来ます。\n※効果には個人差があります。', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/8531/0001178531-001f.jpg', 'body' => 'leg', 'maker_name' => ''],
         ['item_code' => '3000-1000-50000', 'item_name' => '高級金らん正座椅子', 'price' => 3240, 'description' => '高級金らん綿使用で重厚感があります。お出かけ時に便利なコンパクトサイズ。折りたたみ式でスペースを取りません。正座椅子は座面が上半身の体重を支える事ができて、座面の下に膝下を通す形状になっています。通常膝下を下敷きにしている正座の状態を避け、膝にかかる負担を軽減します。\n※効果には個人差があります。', 'url' => 'https://www2.takashimaya.co.jp/sto/image/product/product_image_main/4141/0001084141-001f.jpg', 'body' => 'leg', 'maker_name' => ''],
        
        ];
        DB::table('items')->insert($datas);
    }
}




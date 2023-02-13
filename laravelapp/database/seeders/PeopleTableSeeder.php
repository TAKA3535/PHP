<!-- リスト5-33　シーディング処理 P230 -->
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    // シードを作成 5-34
    public function run()
    {
        $param = [
            'name' => 'tarochan',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanakochan',
            'mail' => 'hanako@flower.jp',
            'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachikochan',
            'mail' => 'sachiko@happy.jp',
            'age' => 56,
        ];
        DB::table('people')->insert($param);
    }
}

<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $names = ["Taro","Jiro","Hana","John","Mike","Sophy","Bill","Alex","Mary","Tom"];
        $fnames = ["佐藤", "鈴木", "高橋", "田中"];
        $gnames = ["太郎", "次郎", "花子"];
        
        // for($i = 0; $i <= 9; $i++) {
        //     DB::table('members')->insert([
        //         'number' => 10 + $i,
        //         'name' => '#{names[i]}',
        //         'full_name' => '#{fnames[i % 4]} #{gnames[i % 3]}',
        //         'email' => $i . '@example.com',
        //         'birthday' => '1891-12-12',
        //         'gender' => [1, 1, 2][$i % 3],
        //         'administrator' => $i == 0,
        //     ]);
        // }
        
        
        for($i = 0; $i <= 9; $i++) {
            DB::table('members')->insert([
                'number' => 10 + $i,
                'name' => 'test name' . $i,

                'full_name' => 'test full_name' . $i,
                'email' => $i . '@example.com',
                'birthday' => '1891-12-12',
                'gender' => [1, 1, 2][$i % 3],
                'administrator' => $i == 0,
            ]);
        }
        
    }
}

<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_time = Carbon::now();
        $lists = [
            ["title" => "微整注射", "dirname" => "wzx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "眼部整形", "dirname" => "ybzx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "鼻部整形", "dirname" => "bbzx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "胸部整形", "dirname" => "xbzx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "面部轮廓", "dirname" => "mblk", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "脂肪整形", "dirname" => "zfzx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "皮肤美容", "dirname" => "pfmr", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "眉部整形", "dirname" => "mbzx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "毛发美容", "dirname" => "mfmr", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "口唇整形", "dirname" => "kczx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "牙齿整形", "dirname" => "yczx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "耳部整形", "dirname" => "ebzx", "created_at" => $date_time, "updated_at" => $date_time],
            ["title" => "私密整形", "dirname" => "smzx", "created_at" => $date_time, "updated_at" => $date_time],
        ];
        DB::table('category')->insert($lists);
    }
}

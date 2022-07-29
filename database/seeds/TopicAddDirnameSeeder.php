<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use Illuminate\Support\Facades\DB;
use Overtrue\Pinyin\Pinyin;

class TopicAddDirnameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        while ($list = DB::table('topic')->whereNull('dirname')->first()) {
            $title = DB::table('topic')->whereNull('dirname')->first();
            $dirname = $this->setUniqueName($title->title);
            //检测$dirname 有无重复
            $type = DB::table('topic')->where('dirname', $dirname)->first();
            if ($type) {
                $dirname = $this->setUniqueName($title->title, false);
                $type = DB::table('topic')->where('dirname', $dirname)->first();
                if ($type) {
                    $dirname = $this->setUniqueName($title->title, false, '+');
                }
            }
            $topic = Topic::find($title->id);
            $topic->dirname = $dirname;
            $topic->save();
        }
    }
    protected  function setUniqueName($title, $is = true, $type = '-')
    {
        $pinyin = new Pinyin();
        if ($is) {
            return $pinyin->abbr($title);
        } else {
            return $pinyin->abbr($title, $type);
        }
    }
}

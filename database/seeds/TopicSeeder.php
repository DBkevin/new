<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;
use App\Models\Commit;
use App\Models\Info;
use App\Models\Introtdtion;
use App\Models\Notice;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = DB::connection('mysql_old')->table('topic')->where('is', 1)->first();
        $listSql = [
            'title' => $list->name,
            'seotitle'=>$list->title,
            'description' => $list->description,
            'keyword' => $list->keywords,
            'picture' => $list->picture,
            'category_id' => $list->oneid,
        ];
        $cmmitSql = [
            'effect' => $list->comeffect,
            'merit' => $list->commerit,
            'defect' => $list->comdefect,
            'crowd' => $list->comcrowd,
            'risk' => $list->comrisk,
        ];
        $infoSql = [
            'site' => $list->info1,
            'methods' => $list->info3,
            'price' => $list->info2,
            'count' => $list->info4,
            'keep' => $list->info5,
            'narcosis' => $list->info6,
            'materials' => $list->info7,
            'lengthofstay' => $list->info8,
            'removethetime' => $list->info9,
        ];
        $introdtionSQL = [
            'operationtime' => $list->intoperation,
            'swellingtime' => $list->intswelling,
            'removetime' => $list->intremove,
            'price' => $list->intprice,
            'material' => $list->intmaterial
        ];
        $noteSql = [
            'plan' => $list->notpaln,
            'nurse' => $list->notnurse,
            'sideeffects' => $list->notsideeffects
        ];
        $info = new Info($infoSql);
        $note = new Notice($noteSql);
        $commit = new Commit($cmmitSql);
        $introdtion = new Introtdtion($introdtionSQL);
        $newTopic = new Topic($listSql);
        $newTopic->save();
        $newTopic->Info()->save($info);
        $newTopic->Notice()->save($note);
        $newTopic->Commit()->save($commit);
        $newTopic->Introtdtion()->save($introdtion);
        DB::connection('mysql_old')->table('topic')->where('id', $list->id)->update(['is'=>999]);
    }
}

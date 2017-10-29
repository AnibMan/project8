<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        $sf_id = App\Studyfield::where('degree','BACHELOR OF INFORMATION TECHNOLOGY (BIT)')->pluck('sf_id');
        $sub = [
            ['sf_id'=>$sf_id[0],
                'sub_name'=>'C-programming',
            ]


        ];
        DB::table('subjects')->insert($sub);
    }
}

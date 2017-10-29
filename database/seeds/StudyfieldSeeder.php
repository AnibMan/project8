<?php

use Illuminate\Database\Seeder;

class StudyfieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studyfields')->delete();

        $sf = [
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN ARCHITECTURE (B. ARCH.)'],
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN BIOMEDICAL ENGINEERING'],
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN CIVIL ENGINEERING'],
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN COMPUTER ENGINEERING'],
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN ELECTRICAL ENGINEERING'],
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN ELECTRONICS AND COMMUNICATION ENGINEERING'],
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF COMPUTER APPLICATIOIN (BCA)'],
            ['faculty'=>'Science and Technology',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF INFORMATION TECHNOLOGY (BIT)'],

        ];
        DB::table('studyfields')->insert($sf);
    }
}

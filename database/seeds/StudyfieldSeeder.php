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
                'degree'=>'BACHELOR OF INFORMATION TECHNOLOGY (BIT)'],
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
                'level'=>'Master',
                'degree'=>'MASTER OF COMPUTER APPLICATION (MCA)'],
            ['faculty'=>'Science and Technology',
                'level'=>'Master',
                'degree'=>'MASTER OF ENGINEERING IN EARTHQUAKE'],
            ['faculty'=>'Science and Technology',
                'level'=>'Master',
                'degree'=>'MASTER OF SCIENCE IN INFORMATION SYSTEM ENGINEERING'],
            ['faculty'=>'Management',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF BUSINESS ADMINISTRATION (BBA)'],
            ['faculty'=>'Management',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF BUSINESS STUDIES (BBS)'],
            ['faculty'=>'Management',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF HOSPITALITY and CATERING MANAGEMENT (BHCM)'],
            ['faculty'=>'Management',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF HOTEL MANAGEMENT (BHM)'],
            ['faculty'=>'Management',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF TRAVEL AND TOURISM STUDIES (BTTS)'],
            ['faculty'=>'Management',
                'level'=>'Master',
                'degree'=>'MASTER OF BUSINESS ADMINISTRATION (MBA)'],
            ['faculty'=>'Management',
                'level'=>'Master',
                'degree'=>'MASTER OF HOTEL AND HOSPITALITY MANAGEMENT (MHHM)'],
            ['faculty'=>'Management',
                'level'=>'Master',
                'degree'=>'MASTER OF TOURISM STUDIES (MTS)'],


            ['faculty'=>'Arts',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN LIBERAL ARTS AND SCIENCES'],
            ['faculty'=>'Arts',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN MASS COMMUNICATION and JOURNALISM (BJMC)'],
            ['faculty'=>'Arts',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN MEDIA TECHNOLOGY (BMT)'],
            ['faculty'=>'Arts',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF ARTS (BA)'],
            ['faculty'=>'Arts',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF INTERIOR DESIGN (BID)'],
            ['faculty'=>'Education',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF EDUCATION (B.ED.)'],
            ['faculty'=>'Law',
                'level'=>'Bachelor',
                'degree'=>'BA LLB'],
            ['faculty'=>'Law',
                'level'=>'Bachelor',
                'degree'=>'LL.B. (BACHELOR OF LAWS)'],
            ['faculty'=>'Medical and Allied Science',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR IN PHARMACY'],
            ['faculty'=>'Medical and Allied Science',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF HOMOEOPATHIC MEDICINE and SURGERY (BHMS)'],

            ['faculty'=>'Medical and Allied Science',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF MEDICINE &amp; BACHELOR OF SURGERY (MBBS)'],
            ['faculty'=>'Medical and Allied Science',
                'level'=>'Bachelor',
                'degree'=>'BACHELOR OF PUBLIC HEALTH (BPH)'],
        ];
        DB::table('studyfields')->insert($sf);
    }
}

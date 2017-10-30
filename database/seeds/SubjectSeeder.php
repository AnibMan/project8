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
                'semester'=>'1st',
                'sub_name'=>'BASIC ELECTRICAL SYSTEM & CIRCUIT (BESC)',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'1st',
                'sub_name'=>'FUNDAMENTALS OF INFORMATION TECHNOLOGY(FIS)',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'1st',
                'sub_name'=>'MATHEMATICS-I',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'1st',
                'sub_name'=>'TECHNICAL COMMUNICATION (ENGLISH)',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'1st',
                'sub_name'=>'COMPUTER PROGRAMMING IN C',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'1st',
                'sub_name'=>'PRINCIPLES OF MANAGEMENT',
            ],


            ['sf_id'=>$sf_id[0],
                'semester'=>'2nd',
                'sub_name'=>'MATHEMATICS-II',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'2nd',
                'sub_name'=>'ELECTRONICS DEVICES & CIRCUITS (EDC)',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'2nd',
                'sub_name'=>'DIGITAL LOGIC',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'2nd',
                'sub_name'=>'OBJECT ORIENTED PROGRAMMING IN C++',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'2nd',
                'sub_name'=>'FINANCIAL MANAGEMENT & ACCOUNTING',
            ],

            ['sf_id'=>$sf_id[0],
                'semester'=>'2nd',
                'sub_name'=>'PRINCIPLES OF MANAGEMENT',
            ],


            ['sf_id'=>$sf_id[0],
                'semester'=>'3rd',
                'sub_name'=>'SYSTEM ANALYSIS & DESIGN (SAD)',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'3rd',
                'sub_name'=>'MICROPROCESSOR & ASSEMBLY LANGUAGE',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'3rd',
                'sub_name'=>'DATA STRUCTURE & ALGORITHM (DSA)',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'3rd',
                'sub_name'=>'USER INTERFACE DESIGN (UID)',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'3rd',
                'sub_name'=>'NUMERICAL METHODS',
            ],


            ['sf_id'=>$sf_id[0],
                'semester'=>'4th',
                'sub_name'=>'COMMUNICATION SYSTEM',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'4th',
                'sub_name'=>'COMPUTER ORGANIZATION',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'4th',
                'sub_name'=>'WEB TECHNOLOGY-I',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'4th',
                'sub_name'=>'DATABASE MANAGEMENT SYSTEM',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'4th',
                'sub_name'=>'DISCRETE MATHEMATICS',
            ],
            ['sf_id'=>$sf_id[0],
                'semester'=>'4th',
                'sub_name'=>'MARKETING MANAGEMENT',
            ],


        ];
        DB::table('subjects')->insert($sub);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder {

  public function run()
  {
    DB::table('courses')->delete();

    for ($i=0; $i < 10; $i++) {
      Course::create([
        'id'   => 'id '.$i,
        'id_1'   => 'id_1'.$i,
        'id_2'   => 'id_2'.$i,
        'id_3'   => 'id_3'.$i,
        'id_4'   => 'id_4'.$i,
        'name'   => 'name'.$i,
        'author'   => 'author'.$i,
        'introduction'   => 'introduction'.$i,
        'body'   => 'body'.$i,
        'pay_type'   => 'pay_type'.$i,
        'score'   => 'score'.$i,
        'ava_dir'   => $i,
        'vid_dir'   => 'vid_dir'.$i,
          
        
      ]);
    }
  }

}
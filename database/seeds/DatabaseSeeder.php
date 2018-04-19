<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      for($i = 0; $i < 10; $i++) {

      DB::table('users')->insert([
        array('name'=>'admin','email'=>'amienkurniawan01@gmail.com','password'=>bcrypt('password'),'role'=>'admin'),
        array('name'=>'amien','email'=>'akurniawan@ce.undip.ac.id','password'=>bcrypt('password'),'role'=>'surveyor'),
        array('name'=>'amri l','email'=>'amril@ce.undip.ac.id','password'=>bcrypt('password'),'role'=>'surveyor'),
        array('name'=>'ayod','email'=>'ayod@ce.undip.ac.id','password'=>bcrypt('password'),'role'=>'surveyor'),
      ]);
      DB::table('user_profiles')->insert([
          array('fullname'=>'admin bidikmisi','no_hp'=>'085727747959','address'=>'jalan prof soedarto','user_id'=>1),
          array('fullname'=>'amien kurniawan','no_hp'=>'085727747959','address'=>'jalan prof soedarto','user_id'=>2),
          array('fullname'=>'amri lutfi','no_hp'=>'085727747959','address'=>'jalan prof soedarto','user_id'=>3),
          array('fullname'=>'ayodya purba','no_hp'=>'085727747959','address'=>'jalan prof soedarto','user_id'=>4),
        ]);
      }
    }
}

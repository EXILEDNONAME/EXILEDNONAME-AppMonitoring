<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\System\Dummy;
use Faker\Factory as Faker;

class Dummies extends Seeder
{

  public function run() {

    $faker = Faker::create('id_ID');
    for($i = 1; $i <= 50; $i++){
      $data = [
        'date_start'    => $faker->datetime,
        'date_end'      => $faker->datetime,
        'name'          => $faker->name,
        'description'   => $faker->text,
       ];
      Dummy::insert($data);
    }
  }
}

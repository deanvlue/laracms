<?php

class BreedsTableSeeder extends Seeder{
  public function run(){
    DB::table('breeds')->insert(array(
      array('id'=>1, 'name'=>'Domestico'),
      array('id'=>2, 'name'=>'Persa'),
      array('id'=>3, 'name'=>'Siames'),
      array('id'=>4, 'name'=>'Abyssysys'),
    ));
  }
}


?>

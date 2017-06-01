<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TagsTableSeeder extends Seeder
{
  private static $tags = [
    'Спорт',
    'Культура',
    'Музыка',
    'Политика',
    'Авто',
    'Экономика',
    'Технологии'
  ];
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Factory::create();
    $this->createTags($faker);

  }
  private function createTags(\Faker\Generator $faker)
  {
    $table = $this->getTable('tags');
    foreach(static::$tags as $tag){
      $table->insert([
        'name' => $tag,
        'slug' => str_slug($tag)
      ]);
    }
  }
  /**
   * @param $name
   * @return \Illuminate\Database\Query\Builder
   */
  private function getTable($name)
  {
    $table = DB::table($name);


    return $table;
  }
}
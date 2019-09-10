<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [
              'id_categories'=>1,
              'name_product'=>'nama product satu',
              'price'=>'0',
              'foto'=>'foto satu',
              'stock'=>12,
          ],
          [
            'id_categories'=>2,
            'name_product'=>'nama product dua',
            'price'=>'0',
            'foto'=>'foto dua',
            'stock'=>12,
          ],
          [

            'id_categories'=>3,
            'name_product'=>'nama product tiga',
            'price'=>'0',
            'foto'=>'foto tiga',
             'stock'=>12,
        ],
        ]);
    }
}

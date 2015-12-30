<?php

use Illuminate\Database\Seeder;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'copyright' => 'ООО “Йцукен” , г. Киев, ул. Ленина 1а, оф. 405',
            'number_1'  => '3 (097) 097 97 97',
            'number_2'  => '3 (097) 097 97 99'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'text' => 'ООО “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                      laudantium, totam rem Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                      doloremque laudantium, totam rem'
        ]);
    }
}

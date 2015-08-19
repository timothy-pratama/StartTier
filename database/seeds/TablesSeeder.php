<?php

use Illuminate\Database\Seeder;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // generate startup users
        $users = factory(\App\Pengguna::class, 'startup', 50)->make();
        foreach($users as $user)
        {
            $user->save();
        }

        // generate investor users
        $users = factory(\App\Pengguna::class, 'investor', 50)->make();
        foreach($users as $user)
        {
            $user->save();
        }
    }
}

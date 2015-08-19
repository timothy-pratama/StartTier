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
        $user_startup = factory(\App\Pengguna::class, 'startup')->make();
        $user_startup->username = 'startup';
        $user_startup->password = Hash::make('startup');
        $user_startup->save();

        $user_startup = factory(\App\Pengguna::class, 'investor')->make();
        $user_startup->username = 'investor';
        $user_startup->password = Hash::make('investor');
        $user_startup->save();

        // generate startup users
        $users = factory(\App\Pengguna::class, 'startup', 49)->make();
        foreach($users as $user)
        {
            $user->save();
        }

        // generate investor users
        $users = factory(\App\Pengguna::class, 'investor', 49)->make();
        foreach($users as $user)
        {
            $user->save();
        }
    }
}

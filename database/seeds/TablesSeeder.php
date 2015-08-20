<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startup_accounts = 50;
        $investor_accounts = 50;
        $min_komentar = 7;
        $max_komentar = 12;
        $min_project = 1;
        $max_project = 10;

        $maximum_available_id = $startup_accounts + $investor_accounts;

        // generate default startup user
        $user_startup = factory(\App\Pengguna::class, 'startup')->make();
        $user_startup->username = 'startup';
        $user_startup->password = Hash::make('startup');
        $user_startup->save();
        for($i=0; $i< mt_rand($min_komentar, $max_komentar); $i++)
        {
            $user_startup->komentars()->save(factory(\App\Komentar::class)->make());
        }
        for($i=0; $i< mt_rand($min_project, $max_project); $i++)
        {
            $user_startup->projects()->save(factory(\App\Project::class)->make());
        }

        // generate startup users
        $users = factory(\App\Pengguna::class, 'startup', $startup_accounts - 1)->make();
        foreach($users as $user)
        {
            $user->save();
            for($i = 0; $i < mt_rand($min_komentar, $max_komentar); $i++)
            {
                $user->komentars()->save(factory(\App\Komentar::class)->make());
            }
            for($i = 0; $i < mt_rand($min_project, $max_project); $i++)
            {
                $user->projects()->save(factory(\App\Project::class)->make());
            }
        }

        // generate default investor user
        $user_investor = factory(\App\Pengguna::class, 'investor')->make();
        $user_investor->username = 'investor';
        $user_investor->password = Hash::make('investor');
        $user_investor->save();
        for($i = 0; $i < mt_rand($min_komentar, $max_komentar); $i++)
        {
            $user_investor->komentars()->save(factory(\App\Komentar::class)->make());
        }

        // generate investor users
        $users = factory(\App\Pengguna::class, 'investor', $investor_accounts - 1)->make();
        foreach($users as $user)
        {
            $user->save();
            for($i = 0; $i < mt_rand($min_komentar, $max_komentar); $i++)
            {
                $user->komentars()->save(factory(\App\Komentar::class)->make());
            }
        }
    }
}

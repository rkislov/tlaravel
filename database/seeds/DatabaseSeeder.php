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
        $this->call(UsersSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);

    }
}

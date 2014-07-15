<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->username = 'Admin';
        $user->email = 'admin1@codeup.com';
        $user->password = 'password';
        $user->isAdmin = true;
        $user->save();
    }

}


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
        $user->first_name = 'Admin';
        $user->last_name = 'Codeup';
        $user->email = 'admin1@codeup.com';
        $user->password = 'password';
        $user->isAdmin = true;
        $user->title = "Awesome Painter";
        $user->mediums = 'Paint';
        $user->about_me = 'This is my about me section.';
        $user->save();
    }

}







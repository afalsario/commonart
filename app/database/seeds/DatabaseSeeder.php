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
        $this->call('ProfileTableSeeder');
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

class ProfileTableSeeder extends Seeder {

    public function run()
    {
        DB::table('profiles')->delete();

        $profile = new Profile();
        $profile->user_id = 1;
        $profile->name = "Artist";
        $profile->title = "Awesome Painter";
        $profile->mediums = 'Paint';
        $profile->about_me = 'This is my about me section.';
        $profile->save();
    }

}







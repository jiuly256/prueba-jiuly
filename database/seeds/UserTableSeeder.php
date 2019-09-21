<?php
 
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Database\Seeder;
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        User::create([
            'name'   => 'Jiuly Rojas',
            'email'      => 'jiuly256@gmail.com',
            'password'   =>  Hash::make('admin'),
            'api_token' => 'YkTFiFVHKJgHNx3eAYgYCDagiFEsgwKZJ8L2eAGk'
        ]);
    }
 
}

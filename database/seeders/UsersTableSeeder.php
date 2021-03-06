<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'         => 'Stephen Owago',
                'email'              => 'stephen@ims.co.ke',
                'phone'              => '254713218312',
                'is_approved'        => 1,
                'role_id'              => 4,
                'password'           => bcrypt('Owagostv@123'),
                'remember_token'     => null,
                'email_verified_at'        => \Carbon\Carbon::now(),
                'created_at'        => \Carbon\Carbon::now(),
                'id_number' => mt_rand(10000000,99999999),
                'region_id'=> mt_rand(1,7),
            ],
             [
                 'id'                 => 2,
                 'name'         => 'Artist',
                 'email'              => 'Artist@ims.co.ke',
                 'phone'              => '254713218311',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 3,
                 'name'         => 'Artist 1',
                 'email'              => 'Artist1@artist.com',
                 'phone'              => '254713218313',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 4,
                 'name'         => 'Artist 2',
                 'email'              => 'Artist2@ims.co.ke',
                 'phone'              => '254713218314',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 5,
                 'name'         => 'Artist 3',
                 'email'              => 'Artist3@ims.co.ke',
                 'phone'              => '254713218315',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 6,
                 'name'         => 'Artist 4',
                 'email'              => 'Artist4@ims.co.ke',
                 'phone'              => '254713218316',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 7,
                 'name'         => 'Artist 5',
                 'email'              => 'Artist5@ims.co.ke',
                 'phone'              => '254713218317',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 8,
                 'name'         => 'Artist 6',
                 'email'              => 'Artist6@ims.co.ke',
                 'phone'              => '254713218318',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 9,
                 'name'         => 'Artist 7',
                 'email'              => 'Artist7@ims.co.ke',
                 'phone'              => '254713218319',
                 'is_approved'        => 0,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 10,
                 'name'         => 'Artist 8',
                 'email'              => 'Artist8@ims.co.ke',
                 'phone'              => '254703218312',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 11,
                 'name'         => 'Artist 9',
                 'email'              => 'Artist9@ims.co.ke',
                 'phone'              => '254723218312',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 12,
                 'name'         => 'Artist 10',
                 'email'              => 'Artist10@ims.co.ke',
                 'phone'              => '254733218312',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 13,
                 'name'         => 'Artist 11',
                 'email'              => 'Artist11@ims.co.ke',
                 'phone'              => '254743218312',
                 'is_approved'        => 0,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 14,
                 'name'         => 'Artist 12',
                 'email'              => 'Artist12@ims.co.ke',
                 'phone'              => '254753218312',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 15,
                 'name'         => 'Artist 13',
                 'email'              => 'Artist13@ims.co.ke',
                 'phone'              => '254763218312',
                 'is_approved'        => 1,
                 'role_id'              => 2,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 16,
                 'name'         => 'Sports Star 1',
                 'email'              => 'sportstar1@ims.co.ke',
                 'phone'              => '154733218312',
                 'is_approved'        => 1,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 17,
                 'name'         => 'Sports Star 2',
                 'email'              => 'sportstar2@ims.co.ke',
                 'phone'              => '254443218312',
                 'is_approved'        => 0,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 18,
                 'name'         => 'Sports Star 3',
                 'email'              => 'sportstar3@ims.co.ke',
                 'phone'              => '254765328312',
                 'is_approved'        => 0,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 19,
                 'name'         => 'Sports Star 4',
                 'email'              => 'sportstar4@ims.co.ke',
                 'phone'              => '254762288312',
                 'is_approved'        => 1,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 20,
                 'name'         => 'Sports Star 5',
                 'email'              => 'sportstar5@ims.co.ke',
                 'phone'              => '254563218312',
                 'is_approved'        => 1,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 21,
                 'name'         => 'Steve Owago J',
                 'email'              => 'steveowago@gmail.com',
                 'phone'              => '254708444398',
                 'is_approved'        => 1,
                 'role_id'              => 1,
                 'password'           => bcrypt('Owagostv@123'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 22,
                 'name'         => 'Sports Star 6',
                 'email'              => 'sportstar6@ims.co.ke',
                 'phone'              => '154733268312',
                 'is_approved'        => 1,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 23,
                 'name'         => 'Sports Star 7',
                 'email'              => 'sportstar7@ims.co.ke',
                 'phone'              => '254443718312',
                 'is_approved'        => 0,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 24,
                 'name'         => 'Sports Star 3',
                 'email'              => 'sportstar8@ims.co.ke',
                 'phone'              => '254765828312',
                 'is_approved'        => 0,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 25,
                 'name'         => 'Sports Star 4',
                 'email'              => 'sportstar9@ims.co.ke',
                 'phone'              => '2547456988312',
                 'is_approved'        => 1,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
             [
                 'id'                 => 26,
                 'name'         => 'Sports Star10',
                 'email'              => 'sportstar10@ims.co.ke',
                 'phone'              => '2545676587875',
                 'is_approved'        => 1,
                 'role_id'              => 3,
                 'password'           => bcrypt('password'),
                 'remember_token'     => null,
                 'email_verified_at'        => \Carbon\Carbon::now(),
                 'created_at'        => \Carbon\Carbon::now(),
                 'id_number' => mt_rand(10000000,99999999),
                 'region_id'=> mt_rand(1,7),
             ],
            [
                'id'                 => 27,
                'name'         => 'Attendance Check',
                'email'              => 'attendance@ims.co.ke',
                'phone'              => '254708444398',
                'is_approved'        => 1,
                'role_id'              => 5,
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'email_verified_at'        => \Carbon\Carbon::now(),
                'created_at'        => \Carbon\Carbon::now(),
                'id_number' => mt_rand(10000000,99999999),
                'region_id'=> mt_rand(1,7),
            ],
        ];

        User::insert($users);
    }
}

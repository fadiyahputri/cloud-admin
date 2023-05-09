<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name'=> 'admin',
            'username'=>'admin',
            'level'=>'admin',
            'password' => Hash::make("admin")
        ]
    );
        DB::table('users')->insert([
            'name'=> 'user',
            'username'=>'user',
            'level'=>'user',
            'password' => Hash::make("user")
        ]
    );
    DB::table('guru')->insert([
        'nama' => 'admin',
        'gambar' => 'anonymous.png',
        'icon' => 'smk',
        'nip'=> 'admin',
        'matpel' => 'admin',
        'jenis_kelamin'=> 'laki-laki',
        'alamat' => 'sumur bandung',
        'user_id'=> 1
    ]
);
DB::table('guru')->insert([
    'nama' => 'user',
    'gambar' => 'anonymous.png',
    'icon' => 'smk',
    'nip'=> '123213',
    'matpel' => 'admin',
    'jenis_kelamin'=> 'laki-laki',
    'alamat' => 'sumur bandung',
    'user_id'=> 2
]
);   
 DB::table('cloud')->insert([
    'user_id' => 2,
    'folder_name' => 'user',
]
);
    }
}

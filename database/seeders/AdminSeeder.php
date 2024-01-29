<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $admin = [
        'name' => 'papon banik',
        'email' => 'papanbanik58@gmail.com',
        'password' => bcrypt('paponbanik58')
    ];
    Admin::create($admin);
}
}

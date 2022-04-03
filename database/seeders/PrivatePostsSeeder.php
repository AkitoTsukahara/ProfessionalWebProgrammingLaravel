<?php

namespace Database\Seeders;

use App\Models\PrivatePost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivatePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrivatePost::factory()->count(10)->create();
    }
}

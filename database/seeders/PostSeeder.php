<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = [
            'title' => 'image1',
            'slug' => 'ini foto 1!',
            'image' => 'image-01.jpg',
            'content' => 'Lorem ipsum dolor sit amet',
            'draft' => 0
        ];
        [
            'title' => 'image2',
            'slug' => 'ini foto 2!',
            'image' => 'image-02.jpg',
            'content' => 'Lorem ipsum dolor sit amet',
            'draft' => 0
        ];
        [
            'title' => 'image3',
            'slug' => 'ini foto 3!',
            'image' => 'image-03.jpg',
            'content' => 'Lorem ipsum dolor sit amet',
            'draft' => 0
        ];
    }
}

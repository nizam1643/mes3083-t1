<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Python for Data Science',
            'author' => 'John Doe',
            'description' => 'Dummy description',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'user_id' => 4,
        ]);

        Book::create([
            'title' => 'Python for Artificial Intelligence',
            'author' => 'John Doe',
            'description' => 'Dummy description',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'user_id' => 4,
        ]);

        Book::create([
            'title' => 'Jupyter Notebook for Data Science',
            'author' => 'John Doe',
            'description' => 'Dummy description',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'user_id' => 4,
        ]);

        Book::create([
            'title' => 'Python for Web Development',
            'author' => 'John Doe',
            'description' => 'Dummy description',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'user_id' => 5,
        ]);

        Book::create([
            'title' => 'Python for API Web Development',
            'author' => 'John Doe',
            'description' => 'Dummy description',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'user_id' => 5,
        ]);

        Book::create([
            'title' => 'Django or Flask for API Web Development',
            'author' => 'John Doe',
            'description' => 'Dummy description',
            'image' => 'https://dummyimage.com/600x400/000/fff',
            'user_id' => 5,
        ]);
    }
}

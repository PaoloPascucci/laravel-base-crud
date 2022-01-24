<?php

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('db');
        
        foreach ($movies as $movie) {
            $_movie = new Movie();
            $_movie->title = $movie['title'];
            $_movie->description = $movie['description'];
            $_movie->thumb = $movie['thumb'];
            $_movie->price = $movie['price'];
            $_movie->series = $movie['series'];
            $_movie->save();
        }
    }
}

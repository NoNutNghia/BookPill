<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(array(
            array(
                'title' => 'Toaru Majutsu no Index',
                'author' => 1,
                'delivery' => 1,
                'price' => 129000,
                'discount' => 20,
                'genre' => json_encode(array('1', '2', '3', '4')),
                'age' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Norwegian Wood',
                'author' => 2,
                'delivery' => 2,
                'price' => 230000,
                'discount' => 5,
                'genre' => json_encode(array('5', '6')),
                'age' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Andersen Fairy Tales',
                'author' => 3,
                'delivery' => 2,
                'price' => 400000,
                'discount' => 0,
                'genre' => json_encode(array('7', '8')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Twenty Thousand Leagues Under the Seas',
                'author' => 4,
                'delivery' => 1,
                'price' => 319000,
                'discount' => 4,
                'genre' => json_encode(array('3', '9', '10')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Grimms\' Fairy Tales',
                'author' => 5,
                'delivery' => 2,
                'price' => 372000,
                'discount' => 7,
                'genre' => json_encode(array('7', '8')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'War and Peace',
                'author' => 6,
                'delivery' => 1,
                'price' => 290000,
                'discount' => 12,
                'genre' => json_encode(array('11', '12')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Crime and Punishment',
                'author' => 7,
                'delivery' => 2,
                'price' => 222000,
                'discount' => 22,
                'genre' => json_encode(array('6', '11', '12', '13')),
                'age' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Love Poem',
                'author' => 8,
                'delivery' => 2,
                'price' => 190000,
                'discount' => 3,
                'genre' => json_encode(array('5', '14')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Les Misérables',
                'author' => 9,
                'delivery' => 2,
                'price' => 500000,
                'discount' => 5,
                'genre' => json_encode(array('11', '15')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Naruto: The tests of the Ninja.',
                'author' => 10,
                'delivery' => 1,
                'price' => 30000,
                'discount' => 6,
                'genre' => json_encode(array('2', '3', '16')),
                'age' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'League of Legends: Realms of Runeterra',
                'author' => 11,
                'delivery' => 1,
                'price' => 900000,
                'discount' => 0,
                'genre' => json_encode(array('3', '17', '18', '19')),
                'age' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Final Fantasy XV: The Dawn of the Future',
                'author' => 12,
                'delivery' => 1,
                'price' => 1200000,
                'discount' => 20,
                'genre' => json_encode(array('1', '3', '11', '17')),
                'age' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'From The New World',
                'author' => 13,
                'delivery' => 2,
                'price' => 320000,
                'discount' => 16,
                'genre' => json_encode(array('1', '3', '11', '20', '21')),
                'age' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Death Note',
                'author' => 14,
                'delivery' => 2,
                'price' => 120000,
                'discount' => 7,
                'genre' => json_encode(array('10', '16', '22', '23', '24')),
                'age' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Kotlin for Android Developers',
                'author' => 15,
                'delivery' => 1,
                'price' => 400000,
                'discount' => 18,
                'genre' => json_encode(array('25', '26', '27')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Calculus 1',
                'author' => 16,
                'delivery' => 1,
                'price' => 150000,
                'discount' => 0,
                'genre' => json_encode(array('27', '28')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Linear Algebra',
                'author' => 17,
                'delivery' => 1,
                'price' => 150000,
                'discount' => 0,
                'genre' => json_encode(array('27', '28', '29')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'A Course in Probability Theory',
                'author' => 18,
                'delivery' => 1,
                'price' => 200000,
                'discount' => 0,
                'genre' => json_encode(array('27', '28', '29')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'Quantum Physics for Beginners',
                'author' => 19,
                'delivery' => 2,
                'price' => 400000,
                'discount' => 5,
                'genre' => json_encode(array('29', '30', '31', '32')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'title' => 'The Elegant Universe',
                'author' => 20,
                'delivery' => 2,
                'price' => 320000,
                'discount' => 10,
                'genre' => json_encode(array('27', '29', '32')),
                'age' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                        'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
//            array(
//                'title' => '',
//                'author' => ,
//                'delivery' => ,
//                'price' => ,
//                'discount' => ,
//                'genre' => json_encode(array()),
//                'age' => ,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ),
        ));
    }
}

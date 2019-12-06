<?php

use Illuminate\Database\Seeder;

class KeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $binaryFile = 'http://localhost/cv_jae/public/images/java.png';

        DB::table('keahlians')->insert([

            [

                'title' => "Java",

                'gambar' => $binaryFile,

                'content' => "Java adalah bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon genggam. Bahasa ini awalnya dibuat oleh James Gosling saat masih bergabung di Sun Microsystems saat ini merupakan bagian dari Oracle dan dirilis tahun 1995. Bahasa ini banyak mengadopsi sintaksis yang terdapat pada C dan C++ namun dengan sintaksis model objek yang lebih sederhana serta dukungan rutin-rutin aras bawah yang minimal."

            ]

        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sony Tri Prasetyo',
        //     'email' => 'Sony@gmail.com',
        //     'password' => bcrypt('hijau')
        // ]);

        // User::create([
        //     'name' => 'Isti Jabath',
        //     'email' => 'Isti@gmail.com',
        //     'password' => bcrypt('aksararasa')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        Category::create([
            'name' => 'Environment',
            'slug' => 'environment'
        ]);

        Category::create([
            'name' => 'Academic',
            'slug' => 'academic'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Biodegradable Material',
        //     'slug' => 'judul-satu',
        //     'excerpt' => 'Bahan biodegradable merujuk pada bahan yang dapat terurai secara alami oleh mikroorganisme, seperti bakteri dan jamur, menjadi komponen yang lebih sederhana di alam tanpa meninggalkan jejak polusi jangka panjang.',
        //     'body' => "Bahan biodegradable merujuk pada bahan yang dapat terurai secara alami oleh mikroorganisme, seperti bakteri dan jamur, menjadi komponen yang lebih sederhana di alam tanpa meninggalkan jejak polusi jangka panjang. Bahan-bahan biodegradable umumnya terbuat dari sumber-sumber alami seperti tanaman, hewan, atau mikroba, dan sering kali didaur ulang dari limbah organik.</p><p>Salah satu keuntungan utama dari bahan biodegradable adalah kemampuannya untuk meminimalkan dampak negatif terhadap lingkungan. Ketika bahan biodegradable dibuang ke lingkungan, proses biodegradasi alami dimulai, di mana mikroorganisme secara alami memecah bahan tersebut menjadi senyawa yang lebih sederhana seperti air, karbon dioksida, dan biomassa. Dalam proses ini, tidak ada limbah berbahaya atau zat kimia beracun yang tertinggal, sehingga mengurangi risiko polusi tanah dan air.</p><p>Salah satu keuntungan utama dari bahan biodegradable adalah kemampuannya untuk meminimalkan dampak negatif terhadap lingkungan. Ketika bahan biodegradable dibuang ke lingkungan, proses biodegradasi alami dimulai, di mana mikroorganisme secara alami memecah bahan tersebut menjadi senyawa yang lebih sederhana seperti air, karbon dioksida, dan biomassa. Dalam proses ini, tidak ada limbah berbahaya atau zat kimia beracun yang tertinggal, sehingga mengurangi risiko polusi tanah dan air.</p>",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Laravel',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Laravel: Mempercepat Pengembangan Aplikasi Web dengan Lebih Mudah dan Efisien',
        //     'body' => "<p>Laravel telah menjadi salah satu kerangka kerja pengembangan aplikasi web paling populer di dunia. Dengan fitur-fitur canggihnya dan pendekatan yang ramah pengembang, Laravel membantu mempercepat dan menyederhanakan proses pembuatan aplikasi web yang kompleks. Artikel ini akan membahas beberapa keunggulan dan fitur utama yang membuat Laravel menjadi pilihan utama bagi para pengembang.</p><p>Salah satu keunggulan Laravel adalah penggunaannya yang sangat intuitif. Dengan menggunakan sintaksis yang ekspresif dan mudah dipahami, pengembang dapat dengan cepat memahami kode Laravel dan mengembangkan aplikasi web yang efisien. Selain itu, Laravel menyediakan arsitektur yang terstruktur dengan pola desain MVC (Model-View-Controller) yang memisahkan logika bisnis dari tampilan. Hal ini memungkinkan pengembang untuk bekerja secara terorganisir dan memudahkan dalam pemeliharaan dan perubahan kode di masa depan.</p><p>Laravel juga dilengkapi dengan banyak fitur bawaan yang siap digunakan. Salah satu fitur utama adalah ORM (Object-Relational Mapping) yang disebut Eloquent. Dengan Eloquent, pengembang dapat berinteraksi dengan basis data menggunakan sintaksis PHP yang sederhana, tanpa perlu menulis kueri SQL secara langsung. Eloquent memudahkan pengembang dalam mengakses dan memanipulasi data dengan cepat dan efisien.</p>",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Eco-friendly Wrapper',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Pembungkus Makanan Ramah Lingkungan: Mendorong Perubahan Menuju Keberlanjutan',
        //     'body' => "<p>Dalam era di mana kepedulian terhadap lingkungan semakin meningkat, pembungkus makanan ramah lingkungan telah menjadi fokus utama dalam upaya mengurangi dampak negatif yang ditimbulkan oleh limbah plastik. Pembungkus makanan ramah lingkungan adalah solusi yang inovatif dan bertanggung jawab untuk menggantikan penggunaan bahan-bahan pembungkus sekali pakai yang sulit terurai.</p><p>Salah satu jenis pembungkus makanan ramah lingkungan yang populer adalah yang terbuat dari bahan-bahan alami dan dapat terurai secara alami. Contohnya adalah pembungkus yang terbuat dari bahan serat tanaman seperti bambu, daun pisang, atau rumput laut. Bahan-bahan ini secara alami terurai dalam waktu yang relatif singkat dan tidak meninggalkan jejak polusi jangka panjang di lingkungan.</p><p>Selain itu, pembungkus makanan ramah lingkungan juga dapat terbuat dari bahan daur ulang. Misalnya, kertas daur ulang atau kertas kraft yang digunakan sebagai pembungkus makanan. Penggunaan bahan-bahan daur ulang membantu mengurangi penebangan pohon dan meminimalkan limbah kertas yang tidak terpakai.</p>",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Tata Cara Penulisan Skripsi Yang Baik dan Benar',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Skripsi adalah tugas akhir yang umum disusun oleh mahasiswa sebagai syarat kelulusan menjadi seorang sarjana strata',
        //     'body' => "<p>Skripsi adalah tugas akhir yang umum disusun oleh mahasiswa sebagai syarat kelulusan menjadi seorang sarjana strata 1. Skripsi adalah karya ilmiah yang disusun menurut kaidah keilmuan dan ditulis berdasarkan kaidah Bahasa Indonesia, di bawah pengawasan atau pengarahan dosen pembimbing, untuk memenuhi kriteria-kriteria kualitas yang telah ditetapkan sesuai keilmuannya masing-masing.</p><p>Penulisan skripsi adalah ajang pengaplikasian kemampuan seorang mahasiswa terhadap apa yang dipelajarinya selama menempuh bangku kuliah. Untuk itu skripsi penting adanya, dan tak jarang mahasiswa yang mengalami kesulitan untuk mengerjakan dan memenuhi standarnya.</p><p>Pada dasarnya, tata cara penulisan skripsi secara umum terbagi menjadi tiga bagian yakni bagian pertama yang berisi awalan, bagian kedua berisi isi skripsi, dan bagian ketiga yang berisi akhiran skripsi.Beginilah panduan tata cara penulisan skripsi yang baik dan benar.</p>",
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}

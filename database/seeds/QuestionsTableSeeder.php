<?php

use Illuminate\Database\Seeder;
use App\Models\Pertanyaan;
use App\Models\Jawaban;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $question1 = Pertanyaan::create([
            'deskripsi' => 'Tag apa yang digunakan untuk membuat teks tebal dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<strong>', 'benar' => true, 'id_pertanyaan' => $question1->id]);
        Jawaban::create(['deskripsi' => '<i>', 'benar' => false, 'id_pertanyaan' => $question1->id]);
        Jawaban::create(['deskripsi' => '<u>', 'benar' => false, 'id_pertanyaan' => $question1->id]);

        $question2 = Pertanyaan::create([
            'deskripsi' => 'Apa fungsi dari komentar dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Untuk menampilkan teks tambahan di halaman web', 'benar' => false, 'id_pertanyaan' => $question2->id]);
        Jawaban::create(['deskripsi' => 'Untuk menonaktifkan kode HTML sementara', 'benar' => true, 'id_pertanyaan' => $question2->id]);
        Jawaban::create(['deskripsi' => 'Untuk mengubah warna teks', 'benar' => false, 'id_pertanyaan' => $question2->id]);

        $question3 = Pertanyaan::create([
            'deskripsi' => 'Tag <h1> hingga <h6> digunakan untuk apa dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Untuk membuat link', 'benar' => false, 'id_pertanyaan' => $question3->id]);
        Jawaban::create(['deskripsi' => 'Untuk menandai paragraf', 'benar' => false, 'id_pertanyaan' => $question3->id]);
        Jawaban::create(['deskripsi' => 'Untuk membuat judul dan subjudul', 'benar' => true, 'id_pertanyaan' => $question3->id]);

        $question4 = Pertanyaan::create([
            'deskripsi' => 'Apa perbedaan antara <title> dan <header> dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<title> digunakan untuk judul artikel, <header> untuk menandai teks penting', 'benar' => false, 'id_pertanyaan' => $question4->id]);
        Jawaban::create(['deskripsi' => '<title> digunakan untuk judul di browser, <header> untuk bagian kepala web', 'benar' => true, 'id_pertanyaan' => $question4->id]);
        Jawaban::create(['deskripsi' => '<title> digunakan untuk menambah komentar, <header> untuk judul', 'benar' => false, 'id_pertanyaan' => $question4->id]);

        $question5 = Pertanyaan::create([
            'deskripsi' => 'Manakah dari berikut ini yang bukan merupakan tag untuk formatting teks di HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<b>', 'benar' => false, 'id_pertanyaan' => $question5->id]);
        Jawaban::create(['deskripsi' => '<italic>', 'benar' => true, 'id_pertanyaan' => $question5->id]);
        Jawaban::create(['deskripsi' => '<mark>', 'benar' => false, 'id_pertanyaan' => $question5->id]);

        $question6 = Pertanyaan::create([
            'deskripsi' => 'Apa itu hyperlink dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Elemen yang menampilkan gambar', 'benar' => false, 'id_pertanyaan' => $question6->id]);
        Jawaban::create(['deskripsi' => 'Elemen yang menghubungkan halaman web satu dengan yang lain', 'benar' => true, 'id_pertanyaan' => $question6->id]);
        Jawaban::create(['deskripsi' => 'Elemen yang menyimpan data', 'benar' => false, 'id_pertanyaan' => $question6->id]);

        $question7 = Pertanyaan::create([
            'deskripsi' => 'Tag apa yang digunakan untuk menambahkan gambar dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<figure>', 'benar' => false, 'id_pertanyaan' => $question7->id]);
        Jawaban::create(['deskripsi' => '<picture>', 'benar' => false, 'id_pertanyaan' => $question7->id]);
        Jawaban::create(['deskripsi' => '<img>', 'benar' => true, 'id_pertanyaan' => $question7->id]);

        $question8 = Pertanyaan::create([
            'deskripsi' => 'Apa tujuan dari penggunaan tag <mark> dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Untuk membuat teks miring', 'benar' => false, 'id_pertanyaan' => $question8->id]);
        Jawaban::create(['deskripsi' => 'Untuk menyorot teks penting dengan latar belakang warna', 'benar' => true, 'id_pertanyaan' => $question8->id]);
        Jawaban::create(['deskripsi' => 'Untuk menambahkan tautan', 'benar' => false, 'id_pertanyaan' => $question8->id]);

        $question9 = Pertanyaan::create([
            'deskripsi' => 'Tag apa yang digunakan untuk membuat hyperlink dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<div>', 'benar' => false, 'id_pertanyaan' => $question9->id]);
        Jawaban::create(['deskripsi' => '<link>', 'benar' => false, 'id_pertanyaan' => $question9->id]);
        Jawaban::create(['deskripsi' => '<a>', 'benar' => true, 'id_pertanyaan' => $question9->id]);

        $question10 = Pertanyaan::create([
            'deskripsi' => 'Apa fungsi atribut href dalam tag <a>?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Mengatur ukuran teks', 'benar' => false, 'id_pertanyaan' => $question10->id]);
        Jawaban::create(['deskripsi' => 'Menentukan alamat URL tujuan dari link', 'benar' => true, 'id_pertanyaan' => $question10->id]);
        Jawaban::create(['deskripsi' => 'Menyisipkan gambar', 'benar' => false, 'id_pertanyaan' => $question10->id]);

        $question11 = Pertanyaan::create([
            'deskripsi' => 'Apa fungsi atribut target="_blank" dalam tag <a>?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Membuka link di halaman saat ini', 'benar' => false, 'id_pertanyaan' => $question11->id]);
        Jawaban::create(['deskripsi' => 'Membuka link di tab atau jendela baru', 'benar' => true, 'id_pertanyaan' => $question11->id]);
        Jawaban::create(['deskripsi' => 'Mengubah warna link', 'benar' => false, 'id_pertanyaan' => $question11->id]);

        $question12 = Pertanyaan::create([
            'deskripsi' => 'Atribut apa yang digunakan untuk menentukan sumber gambar dalam tag <img>?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'src', 'benar' => true, 'id_pertanyaan' => $question12->id]);
        Jawaban::create(['deskripsi' => 'alt', 'benar' => false, 'id_pertanyaan' => $question12->id]);
        Jawaban::create(['deskripsi' => 'href', 'benar' => false, 'id_pertanyaan' => $question12->id]);

        $question13 = Pertanyaan::create([
            'deskripsi' => 'Format gambar mana yang tidak didukung untuk ditampilkan di HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'PSD', 'benar' => true, 'id_pertanyaan' => $question13->id]);
        Jawaban::create(['deskripsi' => 'PNG', 'benar' => false, 'id_pertanyaan' => $question13->id]);
        Jawaban::create(['deskripsi' => 'JPEG', 'benar' => false, 'id_pertanyaan' => $question13->id]);

        $question14 = Pertanyaan::create([
            'deskripsi' => 'Apa fungsi dari atribut alt dalam tag <img>?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Menentukan ukuran gambar', 'benar' => false, 'id_pertanyaan' => $question14->id]);
        Jawaban::create(['deskripsi' => 'Menampilkan teks alternatif jika gambar tidak dapat dimuat', 'benar' => true, 'id_pertanyaan' => $question14->id]);
        Jawaban::create(['deskripsi' => 'Menentukan posisi gambar', 'benar' => false, 'id_pertanyaan' => $question14->id]);

        $question15 = Pertanyaan::create([
            'deskripsi' => 'Apa tag HTML yang digunakan untuk membuat ordered list?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<ul>', 'benar' => false, 'id_pertanyaan' => $question15->id]);
        Jawaban::create(['deskripsi' => '<dl>', 'benar' => false, 'id_pertanyaan' => $question15->id]);
        Jawaban::create(['deskripsi' => '<ol>', 'benar' => true, 'id_pertanyaan' => $question15->id]);

        $question16 = Pertanyaan::create([
            'deskripsi' => 'Apa perbedaan antara ordered list dan unordered list dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Ordered list menggunakan simbol, unordered list menggunakan angka', 'benar' => false, 'id_pertanyaan' => $question16->id]);
        Jawaban::create(['deskripsi' => 'Ordered list menggunakan angka atau huruf, unordered list menggunakan simbol', 'benar' => true, 'id_pertanyaan' => $question16->id]);
        Jawaban::create(['deskripsi' => 'Ordered list hanya menggunakan huruf, unordered list hanya menggunakan angka', 'benar' => false, 'id_pertanyaan' => $question16->id]);

        $question17 = Pertanyaan::create([
            'deskripsi' => 'Bagaimana cara membuat nested list dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Dengan menempatkan tag <ol> atau <ul> di luar tag <li>', 'benar' => false, 'id_pertanyaan' => $question17->id]);
        Jawaban::create(['deskripsi' => 'Dengan menggunakan atribut nested="true" dalam tag <ul>', 'benar' => false, 'id_pertanyaan' => $question17->id]);
        Jawaban::create(['deskripsi' => 'Dengan menempatkan tag <ol> atau <ul> di dalam tag <li>', 'benar' => true, 'id_pertanyaan' => $question17->id]);

        $question18 = Pertanyaan::create([
            'deskripsi' => 'Tag HTML apa yang digunakan untuk membuat form?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<fieldset>', 'benar' => false, 'id_pertanyaan' => $question18->id]);
        Jawaban::create(['deskripsi' => '<input>', 'benar' => false, 'id_pertanyaan' => $question18->id]);
        Jawaban::create(['deskripsi' => '<form>', 'benar' => true, 'id_pertanyaan' => $question18->id]);

        $question19 = Pertanyaan::create([
            'deskripsi' => 'Atribut apa yang digunakan dalam tag <form> untuk menentukan metode pengiriman data?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'action', 'benar' => false, 'id_pertanyaan' => $question19->id]);
        Jawaban::create(['deskripsi' => 'method', 'benar' => true, 'id_pertanyaan' => $question19->id]);
        Jawaban::create(['deskripsi' => 'enctype', 'benar' => false, 'id_pertanyaan' => $question19->id]);

        $question20 = Pertanyaan::create([
            'deskripsi' => 'Apa perbedaan utama antara elemen input dengan tipe radio dan checkbox dalam HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Radio untuk memilih hanya satu opsi, checkbox untuk memilih lebih dari satu', 'benar' => true, 'id_pertanyaan' => $question20->id]);
        Jawaban::create(['deskripsi' => 'Radio untuk memilih lebih dari satu opsi, checkbox untuk memilih hanya satu', 'benar' => false, 'id_pertanyaan' => $question20->id]);
        Jawaban::create(['deskripsi' => 'Radio dan checkbox tidak memiliki perbedaan fungsi', 'benar' => false, 'id_pertanyaan' => $question20->id]);

        $question21 = Pertanyaan::create([
            'deskripsi' => 'Tag HTML apa yang digunakan untuk menampilkan video?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => '<audio>', 'benar' => false, 'id_pertanyaan' => $question21->id]);
        Jawaban::create(['deskripsi' => '<media>', 'benar' => false, 'id_pertanyaan' => $question21->id]);
        Jawaban::create(['deskripsi' => '<video>', 'benar' => true, 'id_pertanyaan' => $question21->id]);

        $question22 = Pertanyaan::create([
            'deskripsi' => 'Atribut mana yang digunakan untuk membuat video diputar otomatis?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'autoplay', 'benar' => true, 'id_pertanyaan' => $question22->id]);
        Jawaban::create(['deskripsi' => 'loop', 'benar' => false, 'id_pertanyaan' => $question22->id]);
        Jawaban::create(['deskripsi' => 'controls', 'benar' => false, 'id_pertanyaan' => $question22->id]);

        $question23 = Pertanyaan::create([
            'deskripsi' => 'Apa kepanjangan dari CSS dalam konteks web development?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Cascading Simple Sheets', 'benar' => false, 'id_pertanyaan' => $question23->id]);
        Jawaban::create(['deskripsi' => 'Cascading Style Sheets', 'benar' => true, 'id_pertanyaan' => $question23->id]);
        Jawaban::create(['deskripsi' => 'Complex Style Syntax', 'benar' => false, 'id_pertanyaan' => $question23->id]);

        $question24 = Pertanyaan::create([
            'deskripsi' => 'Apa fungsi utama dari CSS dalam pengembangan web?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Mengelola database', 'benar' => false, 'id_pertanyaan' => $question24->id]);
        Jawaban::create(['deskripsi' => 'Menulis logika pemrograman', 'benar' => false, 'id_pertanyaan' => $question24->id]);
        Jawaban::create(['deskripsi' => 'Mengatur tampilan dan tata letak halaman web', 'benar' => true, 'id_pertanyaan' => $question24->id]);

        $question25 = Pertanyaan::create([
            'deskripsi' => 'Bagaimana cara menambahkan CSS secara internal dalam dokumen HTML?',
            'skor' => 4,
        ]);

        Jawaban::create(['deskripsi' => 'Menggunakan tag <link> di dalam <body>', 'benar' => false, 'id_pertanyaan' => $question25->id]);
        Jawaban::create(['deskripsi' => 'Menggunakan tag <style> di dalam <head>', 'benar' => true, 'id_pertanyaan' => $question25->id]);
        Jawaban::create(['deskripsi' => 'Menambahkan atribut style pada setiap tag HTML', 'benar' => false, 'id_pertanyaan' => $question25->id]);

    }
}

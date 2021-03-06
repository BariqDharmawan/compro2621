<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OurPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(3),
            'harga_lama' => $this->faker->numberBetween(50000, 150000),
            'harga_baru' => $this->faker->numberBetween(10000, 49000),
            'deskripsi' => '<p>Benefit yang didapat</p><ul><li>Materi Pilihan</li><li>Tryout berkala</li><li>Kunci Jawaban & Pembahasan</li><li>Manajemen Waktu</li><li>Analisa waktu pengerjaan</li><li>Event tryout</li><li>Sistem CAT dan Realtime</li><li>Akses belajar praktis & fleksibel</li><li>Grafik dan Statistik Hasil Tryout</li><li>Rangking Nasional/Provinsi/Kota/Kabupaten</li></ul>'
        ];
    }
}

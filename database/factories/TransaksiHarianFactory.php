<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiHarianFactory extends Factory
{
    public function definition(): array
    {
        $kios = [
            'Kios Bu Sari',
            'Kios Pak Budi',
            'Kios Nasi Padang',
            'Kios Mie Ayam',
            'Stand Minuman',
        ];

        return [
            'tanggal_transaksi' => $this->faker->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
            'nama_kios'         => $this->faker->randomElement($kios),
            'total_pemasukan'   => $this->faker->numberBetween(100000, 2000000),
            'total_pengeluaran' => $this->faker->numberBetween(50000, 1000000),
            'keterangan'        => $this->faker->sentence(8),
        ];
    }
}
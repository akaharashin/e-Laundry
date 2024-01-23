<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);

        Paket::create([
            'nama' => 'Paket A',
            'desc' => 'Paket A ini adalah paket untuk jasa cuci saja, tidak termasuk setrika',
            'harga' => 15000 ,
            'service1' => 'Estimasi 2-3 hari',
            'service2' => 'Pelayanan Super Cepat',
            'service3' => 'Dijamin bersih dan wangi',
        ]);
        Paket::create([
            'nama' => 'Paket B',
            'desc' => 'Berbeda dengan paket A, Paket B ini untuk jasa cuci include dengan setrika',
            'harga' => 20000,
            'service1' => 'Estimasi 3-5 Hari',
            'service2' => 'Include setrika',
            'service3' => 'Dijamin wangi dan rapi',
        ]);
        Paket::create([
            'nama' => 'Paket C',
            'desc' => 'Ini adalah paket cuci untuk barang berat seperti Karpet, Selimut, Bedcover dll.',
            'harga' => 30000 ,
            'service1' => 'Estimasi 2-3 hari',
            'service2' => 'Inlcude Delivery',
            'service3' => 'Inlude Pewangi',
        ]);

        Customer::create([
            'idCustomer' => 'laravel01',
            'nama' => 'laravel',
            'alamat' => 'asdsadsgslg'
        ]);
        Customer::create([
            'idCustomer' => 'laravel02',
            'nama' => 'laravel2',
            'alamat' => 'asdsadsgslg'
        ]);
    }
}

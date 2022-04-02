<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminWallet;
use Illuminate\Support\Facades\DB;
class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_wallets')->truncate();
        AdminWallet::create([
            'wallet_address' => '12345678',
            'qrcode_link' => 'LINK',
           
        ]);
        AdminWallet::create([
            'wallet_address' => '12345678',
            'qrcode_link' => 'LINK',
           
        ]);
        AdminWallet::create([
            'wallet_address' => '12345678',
            'qrcode_link' => 'LINK',
           
        ]);

    }
}

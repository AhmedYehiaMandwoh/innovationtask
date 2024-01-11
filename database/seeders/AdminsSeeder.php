<?php
namespace Database\Seeders;
use Hash;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('admins')->truncate();
        Schema::enableForeignKeyConstraints();

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' =>  Hash::make(123456)
        ]);
    }
}

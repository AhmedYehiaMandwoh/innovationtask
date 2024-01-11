<?php
namespace Database\Seeders;
use Hash;
use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('languages')->truncate();
        Schema::enableForeignKeyConstraints();

        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'language' => 'Arabic',
                'sign' => 'ar',
       
            ),
            1 => 
            array (
                'language' => 'English',
                'sign' => 'en',
            ),
        ));
    
    }
}

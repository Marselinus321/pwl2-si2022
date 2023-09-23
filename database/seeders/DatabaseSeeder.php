<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Send the application's database .
     * 
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User:s:factory(10)->create();
        $this->call([
            CampTableSeeder::class,
            CampBenefitTableSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}
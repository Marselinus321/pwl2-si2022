<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use App\Models\Camp;
 
class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title'      => 'Gila belajar',
                'slug'       => 'gila-belajar',
                'price'      => 200,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'      => 'Baru mulai',
                'slug'       => 'baru-mulai',
                'price'      => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]


        ];
        // 1st method: // insert one by one through looping
        // foreach($camps as $key => $camps){
        //    Camp::create($camps);
        //}


        // 2nd method: // insert rows/bulk
        Camp::insert($camps);
 
    }
}



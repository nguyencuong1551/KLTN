<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i<20; $i++)
        {
            DB::table('products')->insert([
                'name' => 'Màn hình máy tính 27 inch Dell',
                'image' => 'https://www.anphatpc.com.vn/media/product/250_22258_dell_ultrasharp_4k_up3216q_1.jpg',
                'image1' => 'http://gialong.com.vn/wp-content/uploads/2018/07/dell-ultrasharp-u2718q-27-3d-model-max-obj-mtl.jpg',
                'image2' => 'https://www.anphatpc.com.vn/media/product/23915_download_1_e1501852513904.png',
                'image3' => 'https://www.anphatpc.com.vn/media/product/17307_m__n_h__nh_dell_p2715q_4k_ultra_hd.jpg',
                'description' => Str::random(10),
                'unit_price' => '80',
                'promotion_price' => '60',
                'id_category' => '21',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}

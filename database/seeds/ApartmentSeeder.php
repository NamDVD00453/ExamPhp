<?php

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     *
    $table->string('name');

    $table->string('address');

    $table->string('price');

    $table->string('generalInfo');

    $table->string('detail');

    $table->string('url');

    $table->string('status');
     */
    public function run()
    {
        //
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '837 Giai Phong - Ha Noi',
            'price' => '14000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://file1.batdongsan.com.vn/thumb745x510.452231.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '233 Giai Phong - Ha Noi',
            'price' => '35000000',
            'generalInfo' => 'Business Premises',
            'detail' => 'Face to street, no furniture.',
            'url' => 'https://file4.batdongsan.com.vn/resize/745x510/2018/05/10/20180510153145-2225_wm.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => 'ngo 78 - Giai Phong - Ha Noi',
            'price' => '15000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://cdn.muaban.net/cdn/images/thumb-detail/201711/24/627/ee4c8f20d2cd48749b996b3caa557bd5.jpg',
            'status' => 'RENTED',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '309 Dinh Cong - Ha Noi',
            'price' => '25000000',
            'generalInfo' => 'Office',
            'detail' => 'In the alley, no furniture.',
            'url' => 'https://timnhaviet.vn/images/lands/2017/06/08/large/13494-cho-thue-van-phong-chinh-chu-tai-tang-3-toa-nha-309-duong-giai-phong-4.jpg',
            'status' => 'NOT AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '837 Giai Phong - Ha Noi',
            'price' => '14000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://file1.batdongsan.com.vn/thumb745x510.452231.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '233 Giai Phong - Ha Noi',
            'price' => '35000000',
            'generalInfo' => 'Business Premises',
            'detail' => 'Face to street, no furniture.',
            'url' => 'https://file4.batdongsan.com.vn/resize/745x510/2018/05/10/20180510153145-2225_wm.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => 'ngo 78 - Giai Phong - Ha Noi',
            'price' => '15000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://cdn.muaban.net/cdn/images/thumb-detail/201711/24/627/ee4c8f20d2cd48749b996b3caa557bd5.jpg',
            'status' => 'RENTED',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '309 Dinh Cong - Ha Noi',
            'price' => '25000000',
            'generalInfo' => 'Office',
            'detail' => 'In the alley, no furniture.',
            'url' => 'https://timnhaviet.vn/images/lands/2017/06/08/large/13494-cho-thue-van-phong-chinh-chu-tai-tang-3-toa-nha-309-duong-giai-phong-4.jpg',
            'status' => 'NOT AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '837 Giai Phong - Ha Noi',
            'price' => '14000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://file1.batdongsan.com.vn/thumb745x510.452231.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '233 Giai Phong - Ha Noi',
            'price' => '35000000',
            'generalInfo' => 'Business Premises',
            'detail' => 'Face to street, no furniture.',
            'url' => 'https://file4.batdongsan.com.vn/resize/745x510/2018/05/10/20180510153145-2225_wm.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => 'ngo 78 - Giai Phong - Ha Noi',
            'price' => '15000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://cdn.muaban.net/cdn/images/thumb-detail/201711/24/627/ee4c8f20d2cd48749b996b3caa557bd5.jpg',
            'status' => 'RENTED',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '309 Dinh Cong - Ha Noi',
            'price' => '25000000',
            'generalInfo' => 'Office',
            'detail' => 'In the alley, no furniture.',
            'url' => 'https://timnhaviet.vn/images/lands/2017/06/08/large/13494-cho-thue-van-phong-chinh-chu-tai-tang-3-toa-nha-309-duong-giai-phong-4.jpg',
            'status' => 'NOT AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '837 Giai Phong - Ha Noi',
            'price' => '14000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://file1.batdongsan.com.vn/thumb745x510.452231.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '233 Giai Phong - Ha Noi',
            'price' => '35000000',
            'generalInfo' => 'Business Premises',
            'detail' => 'Face to street, no furniture.',
            'url' => 'https://file4.batdongsan.com.vn/resize/745x510/2018/05/10/20180510153145-2225_wm.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => 'ngo 78 - Giai Phong - Ha Noi',
            'price' => '15000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://cdn.muaban.net/cdn/images/thumb-detail/201711/24/627/ee4c8f20d2cd48749b996b3caa557bd5.jpg',
            'status' => 'RENTED',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '309 Dinh Cong - Ha Noi',
            'price' => '25000000',
            'generalInfo' => 'Office',
            'detail' => 'In the alley, no furniture.',
            'url' => 'https://timnhaviet.vn/images/lands/2017/06/08/large/13494-cho-thue-van-phong-chinh-chu-tai-tang-3-toa-nha-309-duong-giai-phong-4.jpg',
            'status' => 'NOT AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '837 Giai Phong - Ha Noi',
            'price' => '14000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://file1.batdongsan.com.vn/thumb745x510.452231.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '233 Giai Phong - Ha Noi',
            'price' => '35000000',
            'generalInfo' => 'Business Premises',
            'detail' => 'Face to street, no furniture.',
            'url' => 'https://file4.batdongsan.com.vn/resize/745x510/2018/05/10/20180510153145-2225_wm.jpg',
            'status' => 'AVAILABLE',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => 'ngo 78 - Giai Phong - Ha Noi',
            'price' => '15000000',
            'generalInfo' => 'General Apartment',
            'detail' => 'Face to street, full furniture.',
            'url' => 'https://cdn.muaban.net/cdn/images/thumb-detail/201711/24/627/ee4c8f20d2cd48749b996b3caa557bd5.jpg',
            'status' => 'RENTED',
        ]);
        DB::table('apartments')->insert([
            'name' => 'Home 1',
            'address' => '309 Dinh Cong - Ha Noi',
            'price' => '25000000',
            'generalInfo' => 'Office',
            'detail' => 'In the alley, no furniture.',
            'url' => 'https://timnhaviet.vn/images/lands/2017/06/08/large/13494-cho-thue-van-phong-chinh-chu-tai-tang-3-toa-nha-309-duong-giai-phong-4.jpg',
            'status' => 'NOT AVAILABLE',
        ]);

    }
}

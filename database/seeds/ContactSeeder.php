<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::insert([
       'title' => 'Dịch vụ chưa ổn',
       'desc' => 'Dịch vụ bên phòng gym hơi đắt 20k chai nước lọc',
       'name' => 'Nguyễn Hữu Tiến',
       'email' => 'tien@gmail.com',
       'phone' => '0392148888',
   		]);
   		Contact::insert([
       'title' => 'Nhân viên phục vụ',
       'desc' => 'Nhân viên Hoành phục vụ nhiệt tình!!',
       'name' => 'Nguyễn Long',
       'email' => 'long@gmail.com',
       'phone' => '0392144441',
   		]);
   		Contact::insert([
       'title' => 'HL viên',
       'desc' => 'Huấn luyện viên nhiệt tình với các học viên. Cảm ơn phòng gym em đã giảm cân',
       'name' => 'Trần Văn Long',
       'email' => 'longtv@gmail.com',
       'phone' => '0392144123',
   		]);
    }
}

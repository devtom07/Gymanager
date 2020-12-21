<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user
        DB::table('permissions')->insert([
         'name' => 'Xem tài khoản',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm tài khoản',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa tài khoản',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa tài khoản',
            'guard_name' => 'web'
        ]);
        //phan-quyen
        DB::table('permissions')->insert([
            'name' => 'Xem quyền',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm quyền',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa quyền',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa quyền',
            'guard_name' => 'web'
        ]);
        //staff
        DB::table('permissions')->insert([
            'name' => 'Xem nhân viên',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm nhân viên',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa nhân viên ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa nhân viên',
            'guard_name' => 'web'
        ]);
        //customer
        DB::table('permissions')->insert([
            'name' => 'Xem tài khoản khách hàng',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm tài khoản khách hàng',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa tài khoản khách hàng',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa tài khoản khách hàng',
            'guard_name' => 'web'
        ]);
        //Position
        DB::table('permissions')->insert([
            'name' => 'Xem chức vụ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm chức vụ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa chức vụ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa chức vụ',
            'guard_name' => 'web'
        ]);
        //work_shirk
        DB::table('permissions')->insert([
            'name' => 'Xem ca làm việc',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm ca làm việc',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa ca làm việc',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa ca làm việc',
            'guard_name' => 'web'
        ]);
        //work_shirk_staff
        DB::table('permissions')->insert([
            'name' => 'Xem ca làm việc nhân viên',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm ca làm việc nhân viên',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa ca làm việc nhân viên',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa ca làm việc nhân viên',
            'guard_name' => 'web'
        ]);
        //customer
        DB::table('permissions')->insert([
            'name' => 'Xem khách hàng',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm khách hàng',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa khách hàng',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa khách hàng',
            'guard_name' => 'web'
        ]);
        //PtProgram
        DB::table('permissions')->insert([
            'name' => 'Xem chương trình PT',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm chương trình PT',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa chương trình PT',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa chương trình PT',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem lịch dạy',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thông tin PT',
            'guard_name' => 'web'
        ]);
        //PtProgram
        DB::table('permissions')->insert([
            'name' => 'Xem pt',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Đăng ký pt',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Lịch dạy pt',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xếp lịch học',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Cập nhật lịch học',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thông tin PT',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa lịch học',
            'guard_name' => 'web'
        ]);
        //Dich-vu
        DB::table('permissions')->insert([
            'name' => 'Xem dịch vụ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm dịch vụ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa dịch vụ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa dịch vụ',
            'guard_name' => 'web'
        ]);
        //ca-tap
        DB::table('permissions')->insert([
            'name' => 'Xem ca tập',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm  ca tập',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa  ca tập',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa  ca tập',
            'guard_name' => 'web'
        ]);
       //goi-cuoc
        DB::table('permissions')->insert([
            'name' => 'Xem gói cước',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm gói cước',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa gói cước',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa gói cước',
            'guard_name' => 'web'
        ]);
        //doanh-thu
        DB::table('permissions')->insert([
            'name' => 'Xem doanh thu',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm doanh thu',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa doanh thu',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa doanh thu',
            'guard_name' => 'web'
        ]);
        //danh mục sản phẩm
        DB::table('permissions')->insert([
            'name' => 'Xem danh mục sản phẩm',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm danh mục sản phẩm',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa danh mục sản phẩm',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa danh mục sản phẩm',
            'guard_name' => 'web'
        ]);
        //sản phẩm
        DB::table('permissions')->insert([
            'name' => 'Xem sản phẩm',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm sản phẩm',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa sản phẩm',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa sản phẩm',
            'guard_name' => 'web'
        ]);
        //lien-he
        DB::table('permissions')->insert([
            'name' => 'Xem thông tin liên hệ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm thông tin liên hệ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Chi tiết thông tin liên hệ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa thông tin liên hệ',
            'guard_name' => 'web'
        ]);
        //bai-viet
        DB::table('permissions')->insert([
            'name' => 'Xem bài viết',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm bài viết',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa bài viết',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa bài viết',
            'guard_name' => 'web'
        ]);
        //danh-muc-bai-viet
        DB::table('permissions')->insert([
            'name' => 'Xem danh mục bài viết',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm danh mục bài viết',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa danh mục bài viết',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa danh mục bài viết',
            'guard_name' => 'web'
        ]);
        //Thông-tin-đăng ký
        DB::table('permissions')->insert([
            'name' => 'Xem thông tin đăng ký',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm thông tin đăng ký',
            'guard_name' => 'web'
        ]);

    }
}

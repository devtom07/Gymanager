<?php

use Illuminate\Database\Seeder;
use App\Models\NewMember;

class NewMemberSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		NewMember::create([
			'name_member' => 'Nguyễn Hữu Tiến',
			'phone' => '0392148888',
			'service' => '2',
			'email' => 'tien@gmail.com',
			'content' => 'muốn tập đẹp bụng',
			'status' => '1'
		]);
		NewMember::create([
			'name_member' => 'Nguyễn Văn Thiên',
			'phone' => '0392141201',
			'service' => '1',
			'email' => 'thien@gmail.com',
			'content' => 'muốn tập bụng 6 múi',
			'status' => '0'
		]);
		NewMember::create([
			'name_member' => 'Nguyễn Tiền',
			'phone' => '0392151202',
			'service' => '1',
			'email' => 'tien1@gmail.com',
			'content' => 'muốn tập chân thon',
			'status' => '0'
		]);
	}
}
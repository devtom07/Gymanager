<?php

namespace App\Models;

use App\Models\WorkSift;

use Illuminate\Database\Eloquent\Model;

class WorkSiftStaff extends Model
{
    //
	protected $table = 'work_sift_staffs';
	protected $primaryKey = 'id';
	public function workSift(){
		return $this->belongsTo(WorkSift::class, 'work_sift_id' ,'id');
	} 
}

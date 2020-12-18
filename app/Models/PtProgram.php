<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PtProgram extends Model
{
    protected $table = 'ptprograms';
    protected $fillable = [
        'customer_id', 'day_contract', 'number_sessions', 'total',
        'money_paid', 'start_date', 'status', 'pt_id', 'contract_code',
        'time', 'pay', 'bank_account', 'still_owe', 'end_date', 'package_id',
        'schedule'
    ];

    public function training()
    {
        return $this->belongsToMany(Trainings::class, 'ptprogram_trainings', 'id_ptprogram', 'id_training');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function pt()
    {
        return $this->belongsTo(Staff::class, 'pt_id', 'id');
    }
}

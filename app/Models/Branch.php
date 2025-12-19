<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class Branch extends Model
{
    protected $fillable = ['province_id', 'name', 'district', 'incharge_name', 'designation', 'phone'];
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;

class Province extends Model
{
    public function branches() { return $this->hasMany(Branch::class); }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;

class Status extends Model
{
    protected $table = 'statuses';
    protected $guarded = false;
    
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}

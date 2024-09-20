<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Status;

class Lead extends Model
{
    use SoftDeletes;

    protected $table = 'leads';
    protected $guarded = false;
    
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disapprove extends Model
{
    use HasFactory;

    protected $fillable = ['reason_id', 'reason', 'artist_id','action_by'];
}

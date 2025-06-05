<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taa extends Model
{
    /** @use HasFactory<\Database\Factories\TaaFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

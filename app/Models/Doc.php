<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;

    protected $table = 'docs';
    protected $primaryKey = 'docs_id';
    public $timestamps = false;

    protected $fillable = [
        'docs_hash',
        'docs_name',
        'docs_type_id',
        'docs_status_id',
        'access_id',
        'priority_id',
        'abstract',
        'parent_docs_id',
        'deadline'
    ];
}

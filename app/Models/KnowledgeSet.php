<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeSet extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $connection = 'mysql';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
    ];
}

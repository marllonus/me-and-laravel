<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeCollection extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'description',
        'code',
        'knowledge_set_id',
    ];
}

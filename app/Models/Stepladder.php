<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Step;

class Stepladder extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
	    'material',
	    'color',
	    'max_weight',
    ];

    public function steps()
    {
	    return $this->hasMany(Step::class);
    }
}

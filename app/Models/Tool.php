<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Strings\ToolStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Tool extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'status',
	'created_at',
	'updated_at',
    ];
    protected $appends = [
	'status_name'
    ];

    protected $casts = [
	    'status' => ToolStatus::class,
    ];

    public function statusName(): Attribute
    {
	    return new Attribute(
		    get: fn() => $this->status->name
	    );
    }
}

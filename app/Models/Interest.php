<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'data'];

    protected $casts = [
        'data' => 'array'
    ];

    //
    public function user () : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

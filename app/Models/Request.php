<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme',
        'text',
        'file_url',
        'user_id'
    ];

    public function dateFormat (\DateTimeInterface $date) {
        return $date->format('H:i:s d.m');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientOffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'email',
        'from',
        'to',
        'original_filepath',
        'status',
        'template_filepath',
        'translate_filepath',
        'word_count',
        'price',
        'tariff',
        'translator_name',
        'user_comment',
        'translator_comment'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferalMail extends Model
{
    protected $table = 'referal_mail';

    protected $fillable = [
        'email', 'refer_by', 'created_at'
    ];
}
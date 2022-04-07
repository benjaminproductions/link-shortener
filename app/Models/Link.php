<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'shortened_link',
        'original_link',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'uploader_ip_address',
    ];
}

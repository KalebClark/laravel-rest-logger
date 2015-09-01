<?php

//namespace App;
namespace KalebClark\RestLogger;

use Illuminate\Database\Eloquent\Model;

class RestLoggerModel extends Model
{
    //
    protected $table = "rest-logger";
    protected $fillable = Array(
        'ip_address',
        'method',
        'root',
        'url',
        'full_url',
        'path',
        'is_ajax',
        'is_secure',
        'has_file',
        'has_cookie',
        'has_json'
    );
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalTari extends Model
{
    use HasFactory;
    protected $table = 'jadwal_tari';
    protected $guarded =['id'];
}

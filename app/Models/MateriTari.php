<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriTari extends Model
{
    use HasFactory;
    protected $table = 'materi_tari';
    protected $guarded =['id'];
}

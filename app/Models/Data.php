<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'tabel_data';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public function getRouteKeyName()
    {
        return 'kode_aduan';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'list';
    protected $fillable = ['judul', 'pengarang', 'kategory', 'tahun_terbit', 'penerbit'];
}

?>

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
  use HasFactory;

  protected $table = 'daftar'; // mendevinisikan nama table
  protected $primaryKey = 'kode_daftar'; // mendevinisikan primary key
  public $incrementing = false; // auto pada primaryKey incremment false

  // fillable mendevinisikan field mana saja yang dapat kita isikan
  protected $guarded = [];
}

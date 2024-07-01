<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yearbook extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_yearbook';
    public $incrementing = true;
    protected $fillable = ['nama', 'category_id', 'angkatan', 'motto'];
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id_categories');
    }
}

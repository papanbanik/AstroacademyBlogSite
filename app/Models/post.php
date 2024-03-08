<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'thumbnail',
        'category_id',
        'status',
    ];
    protected $table ='posts';


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

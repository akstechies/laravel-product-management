<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        'name',
        'image',
    ];

    public function deleteOldImage()
    {
        if($this->image){
            Storage::delete('/public/admin/images/category/'.$this->image);
        }
    }
}

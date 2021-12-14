<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sheet;

class Thumbnail extends Model
{
    use HasFactory;

    protected $table= "thumbnails";

    protected $fillable = ["filename"];

    public function sheet()
    {
        return $this->belongsTo(Sheet::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'name', 
        'nim', 
        'major', 
        'class',
        'course_id'
    ];

    // relasi ke model course Course (1 student memiliki 1 course/1 to 1)
    public function course(){
        return $this->belongsTo(Course::class);
    }

}

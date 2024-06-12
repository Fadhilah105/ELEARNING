<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    // mendefinisikan field yang boleh diisi
    protected $fillable = [
        'name',
        'nim',
        'major',
        'class',
        'course_id'
];

/**
 * Laravel relationship:
 * 1. one to one:
 * - hasOne() : digunakan pada model yang tidak memiliki foreign key
 * - belongsTo
 */

// relasi ke model course (1 student hanya memiliki 1 course/ 1 to 1)
public function Course(){
    return $this->belongsTo(Course::class);
}


}

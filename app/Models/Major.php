<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Major extends Model
{
    use HasFactory;
    protected $table = 'majors';
    protected $fillable = [
        'name',
    ];

    public function course()
    {
        return $this->hasMany(Course::class);
    }

}

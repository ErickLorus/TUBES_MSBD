<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Student extends Model
{
    use HasFactory;

    protected $table = "student";
    protected $fillable = [];

    public function getCreatedAtAtribute(){
        return Carbon::parse($this->attributes['tgl_lahir'])
                ->translatedFormat('d F Y');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $fillable = ['title'];
    public $timestamps = FALSE;

    public function Staffs()
    {
        return $this->belongsToMany(Staff::class, 'department_staff');
    }
}

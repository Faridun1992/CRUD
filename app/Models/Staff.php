<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staffs";
    public $timestamps = false;

    protected $fillable = [
                          'name',
                          'surname',
                          'patronymic',
                          'gender',
                          'salary',
                          'gender_id'
                          ];
    public function Departments()
    {
        return $this->belongsToMany(Department::class, 'department_staff');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}

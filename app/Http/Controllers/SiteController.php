<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use App\Models\Staff;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $departments = Department::with('staffs')->get();
        $staff = Staff::all();

        return view('index', compact('staff', 'departments'))->with('title', 'Главная страница');
    }
}

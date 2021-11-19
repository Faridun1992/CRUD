<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Department;
use App\Models\Gender;
use App\Models\Staff;

class StaffController extends Controller
{

    public function index()
    {
        $staff = Staff::with('departments', 'gender')->latest('id')->get();

        return view('staff', compact('staff'))->with('title', 'Сотрудники');
    }

    public function create()
    {
        $genders = Gender::all();
        $departments = Department::all();
        return view('staff_add', compact('departments', 'genders'))
                    ->with('title', 'добавить нового сотрудника');
    }


    public function store(StaffRequest $request)
    {
        Staff::create($request->validated())->departments()->sync($request->list);

        return redirect()->route('staff.index')
       					 ->with('status', 'Новый сотрудник успешно добавлен');
    }


    public function edit(Staff $staff)
    {

        $departments = Department::with('staffs')->get();
        $genders = Gender::with('staff')->get();
        return view('staff_edit', compact('staff', 'departments', 'genders'))
            ->with('title', 'Редактирование '.$staff->name);
    }

    public function update(StaffRequest $request, Staff $staff)
    {

        $staff->update($request->validated());
        $staff->Departments()->sync($request->list);

        return redirect()->route('staff.index')
       					->with('status', "Сотрудник $staff->name успешно редактирован");
    }

    public function destroy(Staff $staff)
    {

        $staff->Departments()->detach();

        return ($staff->delete()) ? redirect()->route('staff.index')
            ->with('status', "Сотрудник $staff->name успешно удален")
            : redirect()->back()->with('status', 'не получилось удалить');

    }
}

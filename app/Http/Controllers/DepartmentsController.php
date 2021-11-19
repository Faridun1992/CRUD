<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentsRequest;
use App\Models\Department;

class DepartmentsController extends Controller
{

    public function index()
    {
        $departments = Department::with('staffs')->latest('id')->get();

        return view('departments', compact('departments'))->with('title', 'Отделы');
    }


    public function create()
    {
        return view('departments_add')->with('title', 'Добавить новый отдел');
    }


    public function store(DepartmentsRequest $request)
    {
        Department::create($request->validated());
        return redirect()->route('departments.index')->with('status', 'Новый отдел  успешно добавлен');

    }


    public function edit(Department $department)
    {
        return view('departments_edit', compact('department'))
            ->with('title', "Редактирование - $department->title");
    }


    public function update(DepartmentsRequest $request, Department $department)
    {
        $department->update($request->validated());
        return redirect()->route('departments.index')
            ->with('status', "$department->title успешно редактирован");
    }


    public function destroy(Department $department)
    {
        if ($department->staffs->count() == 0) {
            $department->delete();
            return redirect()->route('departments.index')->with('status', "$department->title успешно удален");
        } else
            return redirect()->route('departments.index')
                ->with('status', "В данном отделе есть сотрудники, нельзя удалить");


    }
}

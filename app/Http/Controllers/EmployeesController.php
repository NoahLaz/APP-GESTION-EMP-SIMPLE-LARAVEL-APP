<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employe::all();

        return view('employees.index')->with(
            [
                'employees' => $employees,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'registration_number' => 'required|numeric',
            'fullname' => 'required',
            'email' => 'required|email',
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
        ]);
        Employe::create($request->except('_token'));

        return redirect()->route('employees.index')->with([
            'success' => 'Employee added successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employe::where('id', $id)->first();
        return view('employees.show')->with([
            'employee' => $employee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employe::where('id', $id)->first();
        return view('employees.edit')->with([
            'employee' => $employee,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employe::where('id', $id)->first();

        $this->validate($request, [
            'registration_number' => 'required|numeric',
            'fullname' => 'required',
            'email' => 'required|email',
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
        ]);
        $employee->update($request->except('_token', '_method'));

        return redirect()->route('employees.index')->with([
            'success' => 'Employee updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employe::destroy($id);

        return redirect()->route('employees.index')->with([
            'success' => 'Employee Deleted',
        ]);
    }

    public function vacationRequest($id)
    {
        $employee = Employe::where('id', $id)->first();

        return view('employees.vacation-request')->with([
            'employee' => $employee,
        ]);
    }

    public function certificateRequest($id)
    {
        $employee = Employe::where('id', $id)->first();

        return view('employees.certificate-request')->with([
            'employee' => $employee,
        ]);
    }
}

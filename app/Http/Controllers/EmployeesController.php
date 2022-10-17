<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public $employees;

    public function __construct()
    {

        $employees = Array(
            "0" => Array(
                "First Name" => "Tim",
                "Last Name" => "Cook",
                "Company" => "Apple"
            ),
            "1" => Array(
                "First Name" => "Satya",
                "Last Name" => "Nadella",
                "Company" => "Microsoft"
            ),
            "2" => Array(
                "First Name" => "Hopefully",
                "Last Name" => "You",
                "Company" => "Drovox"
            )
        );

        $this->employees = $employees;

    }

    /************************  to get all employees  ****************************/

    public function getEmployees()
    {
        $employees = $this->employees;

        return view('employees', compact('employees'));

    }

    /************************  to get employee based id  ****************************/

    public function getEmployeeById($id)
    {
        $employees = $this->employees;

        foreach ($employees as $index => $employ) {

            if ($index == $id) {
                return view('employeesBasedId', compact('employ'));
            }

            elseif ($index != $id){

                return 'Sorry you have no employee by this id ';
            }
        }
    }

}

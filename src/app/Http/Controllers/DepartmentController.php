<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DepartmentService;

class DepartmentController extends Controller
{
    //
    public function getDepartments(){

        // DepartmentServiceをインスタンス化
        $service = new DepartmentService;

        $department = DepartmentService::getDepartmentList();

        return $department;

    }

}

<?php
namespace App\Repository;

use App\Http\Department;

class DepartmentRepository
{
    public static function getDepartment(){

        $departments = Department::from('departments')
                        ->select('departmens.*')
                        ->orderBy('departments.id', 'ASC');

        return $departments;

    }
}
?>

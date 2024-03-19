<?php
namespace App\Services;

use App\Repositories\DepartmentRepository;

class DepartmentService
{
    public function getDepartmentList(){

        $departments = DepartmentRepository::getDepartmentList()->get();

        return $departments;

    }
}

?>

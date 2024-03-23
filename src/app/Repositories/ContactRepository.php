<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Contact;
use App\Repositories\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface{

    /**
     * @inheritDoc
     */
    public function storeContact(int $department_id, string $name, string $email, string $content, int $age, int $gender)
    {
        return Contact::create(
            [
                'department_id' => $department_id,
                'name' => $name,
                'email' => $email,
                'content' => $content,
                'age' => $age,
                'gender' => $gender,
            ]);
    }

    /**
     * @inheritDoc
     */
    public function getContactsAll()
    {
        return Contact::select('department_id', 'name', 'email', 'content')->get();
    }

    /**
     * @inheritDoc
     */
    public function getDepartmentsName()
    {
        return Department::select('department_id', 'name')->get();
    }

}
?>

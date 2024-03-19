<?php
namespace App\Services;

use App\Repositories\ContactRepository;
use App\Services\ContactServiceInterface;


class ContactService implements ContactServiceInterface{

    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
    {
        
    }
}
// class contactService
// {
//     public function getContactList(){

//         $contacts = contactRepository::findAllContact()->get();
//         return $contacts;
//     }

// }
?>


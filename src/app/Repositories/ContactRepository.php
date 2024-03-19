<?php
namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{
    public static function findAllContact(){

        $contact = Contact::from('contacts')
                    ->select('contacts.*')
                    ->orderBy('contacts.id', 'ASC');

        return $contact;
    }

}

?>

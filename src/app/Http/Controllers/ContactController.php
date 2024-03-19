<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactService;

class ContactController extends Controller
{

    
    /**
     * お問い合わせ内容を一覧取得するメソッド
     */
    public function index(){
        $contact =

        return view('createContact');
    }


    /**
     * getContacts
     * お問い合わせ情報を一覧取得する
     */
    public function getContacts(){

        $service = new ContactService;

        $contacts = ContactService::getContactList();

        return $contacts;
    }


}

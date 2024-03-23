<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\ContactServiceInterface;

class ContactController extends Controller
{

    protected $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * お問い合わせ内容を一覧取得するメソッド
     */
    public function index(){
        $contact = $this->contactService->getContacts();
        return response()->view('contacts.index', $contact);
        // return view('createContact');
    }

    /**
     * お問い合わせ画面を作成するメソッド
     *
     * @param
     */
    public function createContactDisplay(){
        $departments = $this->contactService->getDepartments();
    }



}

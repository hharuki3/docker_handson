<?php
declare(strict_types=1);

namespace App\Services;

/**
 * interface ContactServiceInterface
 * 問い合わせ情報を扱うServiceInterface
 */
interface ContactServiceInterface{

    /**
     * お問い合わせを新規作成する
     * @param int $department_id 部署ID
     * @param string $name ユーザー名
     * @param string $email メールアドレス
     * @param string $content お問い合わせ内容
     * @param int $age 年齢
     * @param int $gender 性別
     * @return Contact 作成したお問い合わせ
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact;

    /**
     * お問い合わせ一覧を取得する
     */
    public function getContacts();

    /**
     * 部署情報を取得する
     */
    public function getDepartments();


}


?>

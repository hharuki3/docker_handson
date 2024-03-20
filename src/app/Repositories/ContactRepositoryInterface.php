<?php
declare(strict_types=1);

namespace App\Repositories;
use App\Models\Contact;

/**
 * interface ContactRepositoryInterface
 * 問い合わせ情報を扱うRepositoryInterface
 */
interface ContactRepositoryInterface{

    /**
     * お問い合わせを登録する
     * @param int $department_id 部署ID
     * @param string $name ユーザー名
     * @param string $email メールアドレス
     * @param string $content お問い合わせ内容
     * @param int $age 年齢
     * @param int $gender 性別
     * @return Contact 作成したお問い合わせ
     */
    public function storeContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact;

    /**
     * お問い合わせ内容一覧を取得する
     */
    public function getContactsAll();


    /**
     * 部署名と部署IDを取得する
     */
    public function getDepartmentsName();
}

?>

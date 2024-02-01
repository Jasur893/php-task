<?php

class Auth
{
    public static $pdo;

    public string $login;
    public string $ism;
    public string $parol;

    public static function userReg(string $login, string $ism, string $parol)
    {
        $query = "SELECT * FROM users WHERE login=?";
        $deliver = self::$pdo->prepare($query);
        $result = $deliver->execute([$login]);
        $user = $deliver->fetch(PDO::FETCH_ASSOC);

        if($user['login'] === $login){
            echo 'Bu login avvaldan bor!';
            die();
        } else {
            $parol = password_hash($parol , CRYPT_BLOWFISH);
            $query = "INSERT INTO users(login, ism, parol) VALUES (?,?,?)";
            $delivr = self::$pdo->prepare($query);
            $result = $delivr->execute([$login, $ism, $parol]);
            return $delivr->errorInfo()[0] === '23000';
        }
    }

    public static function userAuth(string $login, string $parol)
    {
        session_start();
        $query = "SELECT * FROM users WHERE login=?";
        $deliver = self::$pdo->prepare($query);
        $result = $deliver->execute([$login]);
        $user = $deliver->fetch(PDO::FETCH_ASSOC);
        if (password_verify($parol, $user['parol']) and $login === $user['login']) {
            $_SESSION['login'] = $user['login'];
        }
    }

    public static function userLogout()
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
            header("Location: /");
        }
    }
}

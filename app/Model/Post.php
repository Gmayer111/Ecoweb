<?php

namespace App;

class Post {

    private $id;

    private $username;

    private $mail;

    private $password;

    private $language;


    public function getUsername(): string
    {
        return $this->username;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    
}
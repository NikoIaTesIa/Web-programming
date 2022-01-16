<?php

class LoginForm
{
    protected $login;
    protected $password;
    protected $errors = [];

    protected $users = [
        [
            'login' => 'ivan',
            'password' => '123456'
        ],
        [
            'login' => 'maxim',
            'password' => 'qwerty'
        ]
    ];
    protected $authUser;

    public function __construct(array $attributes)
    {
        if (!isset($attributes['login']) || strlen($attributes['login']) === 0) {
            $this->login = null;
        } else {
            $this->login = $attributes['login'];
        }

        if (!isset($attributes['password']) || strlen($attributes['password']) === 0) {
            $this->password = null;
        } else {
            $this->password = $attributes['password'];
        }
    }

    public function validate()
    {
        $this->errors = [];

        if ($this->login === null) {
            $this->errors[] = [
                'field' => 'login',
                'message' => 'Заполните логин'
            ];
        }

        if ($this->password === null) {
            $this->errors[] = [
                'field' => 'password',
                'message' => 'Заполните пароль'
            ];
        }

        return count($this->errors) === 0;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function login()
    {
        $this->errors = [];

        foreach ($this->users as $user) {
            if ($this->login === $user['login'] && $this->password === $user['password']) {
                $this->authUser = $user;
                return true;
            }
        }

        $this->errors[] = [
            'field' => 'login',
            'message' => 'Неверный логин или пароль'
        ];

        return false;
    }

    public function getAuthUser()
    {
        return $this->authUser;
    }
}
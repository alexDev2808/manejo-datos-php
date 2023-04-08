<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase {
    public function test_email() {
        $email = Validate::email("alexis.tenorio.hernandez@gmail.com");
        $this->assertTrue($email);
    }

    public function test_url()
    {
        $url = Validate::url("https://github.com");
        $this->assertTrue($url);
    }

    public function test_password()
    {
        $password = Validate::password("Contrasena1234.");
        $this->assertTrue($password);
    }
}
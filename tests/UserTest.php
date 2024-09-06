<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase 
{
    public function testReturnsFullName() {
        require 'User.php';

        $user = new User();


        $user->first_name = 'Teresa';
        $user->surname = 'Green';

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault() {
        $user = new User;
        
        $this->assertEquals('', $user->getFullName());
    }
    /**
     * La etiqueta @test funciona para ejecutar código con funciones sin nombre test al principio
     */
    public function UserHasFirstName() {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals('Teresa', $user->getFullName());
    }
}
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase 
{
    public function testReturnsFullName() {

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
     * La etiqueta @ test funciona para ejecutar código con funciones sin nombre test al principio
     * La etiqueta @ test será deprecada en versión 12
     */
    public function testUserHasFirstName() {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals('Teresa', $user->getFullName());
    }
}
<?php

class FirstTest extends \PHPUnit\Framework\TestCase
{

	/**
     * @test
     */
    public function searchingformatchedpassword()
    {
        require __DIR__.'/../../app/models/User.php';

        $user = new User;

        $this->assertEquals("password matched", $user->verifyPassword('anika','SAlsAbil'));
      //  $this->assertEquals("password not matched", $user->verifyPassword('anika','12345'));
        
    }
}
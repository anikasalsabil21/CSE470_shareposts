<?php

class SecondTest extends \PHPUnit\Framework\TestCase
{

	/**
     * @test
     */
    public function searchingformatchedpassword()
    {
        require __DIR__.'/../../app/models/User.php';

        $user = new User;

        $this->assertEquals("email found", $user->findUserWithEmail("anika.salsabil97@gmail.com"));
        $this->assertEquals("email not found", $user->findUserWithEmail("anika.salsabil@gmail.com"));
       $this->assertEquals("email found", $user->findUserWithEmail("anika.salsabil@gmail.com")); //this test will fail
        
    }
}
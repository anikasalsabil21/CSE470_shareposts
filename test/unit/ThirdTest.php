<?php

class ThirdTest extends \PHPUnit\Framework\TestCase
{

	/**
     * @test
     */
    public function searchingformatchedpassword()
    {
        require __DIR__.'/../../app/models/User.php';

        $user = new User;

        
        $this->assertEquals("Adrita Rahman", $user->getUserById(2));
        $this->assertEquals("No User Found", $user->getUserById(15));
        
    }
}
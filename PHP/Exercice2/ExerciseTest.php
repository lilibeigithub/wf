<?php
use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testSalting()
    {
        $password = 'azertyqwertyq';
        $salt = 'salt';
        
        require 'exercise.php';
        
        $this->assertEquals('azertysaltqwertyq', $saltedPassword);
    }
}


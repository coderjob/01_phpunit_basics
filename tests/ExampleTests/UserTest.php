<?php

namespace ExampleTests;

use PHPUnit_Framework_TestCase;
use Example\User;

class UserTest extends PHPUnit_Framework_TestCase
{

    protected $user;

    public function setUp()
    {
        $this->user = new User("Marcelo", "Jacobus");
    }

    /**
     * @test
     */
    public function defineEObtemONome()
    {
        $this->assertEquals("Marcelo", $this->user->getName());
    }

    /**
     * @test
     */
    public function defineEobtemOSobrenome()
    {
       $this->assertEquals("Jacobus", $this->user->getLastName());
    }

    /**
     * @test
     */
    public function nomeCompoletoEhAConcatenacaoDoNomeESobrenome()
    {
        $user = $this->user;
        $expected = "Marcelo Jacobus";
        $actual = $user->getCompleteName();

        $this->assertEquals($expected, $actual);

        $user = new User("Jon", "Doe");
        $expected = "Jon Doe";
        $actual = $user->getCompleteName();

        $this->assertEquals($expected, $actual);
    }
}

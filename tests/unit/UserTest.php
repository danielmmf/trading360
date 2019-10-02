<?php 
class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function _testSomeFeature()
    {

        $test ="teste";
        $usuario = new \App\User;
        $usuario->save();
        die("morreu aquu");

    }
}
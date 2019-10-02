<?php 
class MessageServiceTest extends \Codeception\Test\Unit
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
    public function testDeveEnviarMsg()
    {
        $grupo =  new App\Group;
        $grupo->name = "grupo de teste";
        $grupo->save();
        //$grupos =  App\Group::all();
       // print_r($grupos);
        $user =  new App\Classes\User;
        $user->name = "user de teste";

        $user->email = "user de teste";
        $user->user_token = md5($user->email);
        $user->group_id = $grupo->id;
        $user->wallet = 100;
        $user->logado = 0;
        $user->save();

        $user2 =  new App\Classes\User;
        $user2->name = "user2 de teste2";
        $user2->email = "user2 de teste2";
        $user2->user_token = md5($user2->email);
        $user2->group_id = $grupo->id;
        $user2->logado = 0;
        $user2->wallet = 500;
        $user2->save();

        $user3 =  new App\Classes\User;
        $user3->name = "user3 de teste2";
        $user3->email = "user3 de teste2";
        $user3->user_token = md5($user3->email);
        $user3->group_id = $grupo->id;
        $user3->logado = 0;
        $user3->wallet = 500;
        $user3->save();



        $user->send_message(0, 'Mensagem pro sistema');
        $user->send_message($user2->id, 'Vsf');
        $user->send_message($user2->id, 'Vsf2');
        $user->send_message($user3->id, 'Pro terceiro cara');


        $this->assertTrue(2 == count($user2->list_messages()));
        $this->assertTrue(1 == count($user3->list_messages()));
        $this->assertTrue(1 == count($user->list_system_messages()));


    }
}

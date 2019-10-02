<?php 
class BenAmigosTest extends \Codeception\Test\Unit
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
    public function testDeveAdicionarUmAmigoNaMinhaLista()
    {
        $benamigo = new \App\Classes\BenAmigo;


        $grupo = new App\Group;
        $grupo->name = "grupo de teste";
        $grupo->save();
        //$grupos =  App\Group::all();
       // print_r($grupos);
        $user = new App\User;
        $user->name = "user de teste";

        $user->email = "user de teste";
        $user->user_token = md5($user->email);
        $user->group_id = $grupo->id;
        $user->wallet = 100;
        $user->logado = 0;
        $user->save();

        $user2 = new App\User;
        $user2->name = "user2 de teste2";
        $user2->email = "user2 de teste2";
        $user2->user_token = md5($user2->email);
        $user2->group_id = $grupo->id;
        $user2->logado = 0;
        $user2->wallet = 500;
        $user2->save();

        $user3 = new App\User;
        $user3->name = "user3 de teste2";
        $user3->email = "user3 de teste2";
        $user3->user_token = md5($user3->email);
        $user3->group_id = $grupo->id;
        $user3->logado = 0;
        $user3->wallet = 500;
        $user3->save();

        $benamigo->conectar_benamigos($user->user_token,$user2->user_token);

        $total_amigos = $benamigo->listar_amigos($user->user_token);

        $this->assertEquals(1,count($total_amigos));

        $benamigo->conectar_benamigos($user->user_token,$user3->user_token);
        $total_amigos = $benamigo->listar_amigos($user->user_token);
        $this->assertEquals(2,count($total_amigos));
        $total_amigos_2 = $benamigo->listar_amigos($user2->user_token);

        $this->assertEquals(1,count($total_amigos_2));
        
        $total_amigos_3 = $benamigo->listar_amigos($user3->user_token);
     
        $this->assertEquals(1,count($total_amigos_3));
    }


   
}
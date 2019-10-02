<?php


class AppWalletTest extends \Codeception\Test\Unit
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
    public function testDeveTransferirValorSeHouverSaldo()
    {

        $grupo =  new App\Group;
        $grupo->name = "grupo de teste";
        $grupo->save();
        //$grupos =  App\Group::all();
       // print_r($grupos);
        $user =  new App\User;
        $user->name = "user de teste";

        $user->email = "user de teste";
        $user->user_token = md5($user->email);
        $user->group_id = $grupo->id;
        $user->wallet = 100;
        $user->logado = 0;
        $user->save();

        $user2 =  new App\User;
        $user2->name = "user2 de teste2";
        $user2->email = "user2 de teste2";
        $user2->user_token = md5($user2->email);
        $user2->group_id = $grupo->id;
        $user2->logado = 0;
        $user2->wallet = 500;
        $user2->save();

        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->transfere($user->id , $user2->id , 90);


        $this->assertTrue($retorno[0]==1);

        $sender = \App\User::find($user->id);
        $receiver = \App\User::find($user2->id);
        $this->assertEquals($sender->wallet , 10);
        $this->assertEquals($receiver->wallet , 590);


    }

    public function testNaoDeveTransferirValorSeSaldoInsuficiente()
    {

        $grupo =  new App\Group;
        $grupo->name = "grupo de teste";
        $grupo->save();
        $grupos =  App\Group::all();
       // print_r($grupos);
        $user =  new App\User;
        $user->name = "user de teste";
        $user->email = "user de teste";
        $user->user_token = md5($user->email);
        $user->group_id = $grupo->id;
        $user->logado = 0;
        $user->wallet = 100;
        $user->save();

        $user2 =  new App\User;
        $user2->name = "user2 de teste2";
        $user2->email = "user2 de teste2";
        $user2->group_id = $grupo->id;
        $user2->user_token = md5($user2->email);
        $user2->wallet = 500;
        $user2->logado = 0;
        $user2->save();

        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->transfere($user->id , $user2->id , 190);


        $this->assertTrue($retorno[0]==0);

        $sender = \App\User::find($user->id);
        $receiver = \App\User::find($user2->id);
        $this->assertEquals($sender->wallet , 100);
        $this->assertEquals($receiver->wallet , 500);
    }

    public function testDevePagarValorSeTiverSaldoDisponivel()
    {

        $grupo =  new App\Group;
        $grupo->name = "grupo de teste";
        $grupo->save();
        $grupos =  App\Group::all();
       // print_r($grupos);
        $user =  new App\User;
        $user->name = "user de teste";
        $user->email = "user de teste";
        $user->user_token = md5($user->email);
        $user->group_id = $grupo->id;
        $user->logado = 0;
        $user->wallet = 100;
        $user->save();

        $loja =  new App\Shop;
        $loja->name = "loja de teste";
       
        $loja->total = 100;
        $loja->save();

        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->pagar($user->id , $loja->id , 90);


        $this->assertTrue($retorno[0]==1);

        $sender = \App\User::find($user->id);
        $receiver = \App\Shop::find($loja->id);
        $this->assertEquals($sender->wallet , 10);
        $this->assertEquals($receiver->total , 190);
    }

     public function testNaoDevePagarValorSeNaoHouverSaldo()
    {

        $grupo =  new App\Group;
        $grupo->name = "grupo de teste";
        $grupo->save();
        $grupos =  App\Group::all();
       // print_r($grupos);
        $user =  new App\User;
        $user->name = "user de teste";
        $user->email = "user de teste";
        $user->user_token = md5($user->email);
        $user->group_id = $grupo->id;
        $user->logado = 0;
        $user->wallet = 100;
        $user->save();

        $loja =  new App\Shop;
        $loja->name = "loja de teste";
       
        $loja->total = 100;
        $loja->save();

        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->pagar($user->id , $loja->id , 190);


        $this->assertTrue($retorno[0]==0);

        $sender = \App\User::find($user->id);
        $receiver = \App\Shop::find($loja->id);
        $this->assertEquals($sender->wallet , 100);
        $this->assertEquals($receiver->total , 100);
    }
}
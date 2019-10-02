<?php 
class PaymentLogsTest extends \Codeception\Test\Unit
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
    public function testDeveGuardarUmPagamento()
    {
        $pagamento =  new \App\Payment;
        $pagamento->name = "teste";
        $pagamento->shop = 1;
        $pagamento->user = 1;
        $pagamento->type = 1;
        $pagamento->total = 10;
        $pagamento->tid =  time();
        $pagamento->save();

        $pagamentos =  App\Payment::all();

        $total = 0;
        foreach ($pagamentos as  $pagamento) {
            $total+=$pagamento->total;
        }
        $this->assertEquals($total , 10);

        $pagamento =  new \App\Payment;
        $pagamento->name = "teste";
        $pagamento->total = 10;
        $pagamento->shop = 1;
        $pagamento->user = 1;
        $pagamento->tid =  time();
        $pagamento->type = 1;
        $pagamento->save();

        $pagamentos =  App\Payment::all();

        $total = 0;
        foreach ($pagamentos as  $pagamento) {
            $total+=$pagamento->total;
        }
        $this->assertEquals($total , 20);
        
    }

     // tests
    public function testDeveGuardarPagamentoDeUmaLoja()
    {
        $pagamento =  new \App\Payment;
        $pagamento->name = "teste";
        $pagamento->shop = 1;
        $pagamento->total = 10;
        $pagamento->user = 1;
        $pagamento->tid =  time();
        $pagamento->type = 1;
        $pagamento->save();

        $pagamentos =  App\Payment::all();

        $total = 0;
        foreach ($pagamentos as  $pagamento) {
            $total+=$pagamento->total;
        }
        $this->assertEquals($total , 10);

        $pagamento =  new \App\Payment;
        $pagamento->name = "teste";
        $pagamento->shop = 2;
        $pagamento->total = 10;
        $pagamento->user = 1;
        $pagamento->tid =  time();
        $pagamento->type = 1;
        $pagamento->save();

        $pagamentos =  App\Payment::all();

        $total = 0;
        foreach ($pagamentos as  $pagamento) {
            $total+=$pagamento->total;
        }
        $this->assertEquals($total , 20);

        $pagamentos_loja_1 = \App\Payment::where('shop',1)->get();

        $total_loja_1 = 0;
        foreach ($pagamentos_loja_1 as  $pagamento) {
            $total_loja_1+=$pagamento->total;
        }

        $this->assertEquals($total_loja_1 , 10);
        
    }
}
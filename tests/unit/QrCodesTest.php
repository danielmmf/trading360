<?php 
class QrCodesTest extends \Codeception\Test\Unit
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
    public function testDeveCriaroQrCorretoEmCimaDaNotaFiscal()
    {
        $qr = new \App\Classes\QrCode;
        echo $qr->gerar(1,2);
    }


    public function testDeveValidarOQrCriadoNaSecretariaDaFazenda()
    {
        $qr = new \App\Classes\QrCode;
        echo $qr->gerar(1,2);
    }
}
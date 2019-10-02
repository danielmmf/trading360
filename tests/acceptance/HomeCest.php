<?php


class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryVerificandoOTexto(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('benjamin');
        $I->dontSee('Vogel');
    }

    public function tryVerificandoPaginaDoPwa(AcceptanceTester $I)
    {
        $I->amOnPage('/pwa');
      //  $I->dontSee('benjamin');
        $I->see('Faça seu login com o facebook');

        $I->amOnPage('/client/qrunidade');
      //  $I->dontSee('benjamin');
        $I->see('Aponte para o Qr code da comanda');
        //$I->see('Meus Pedidos :: Padaria Benjamin :: SP @Brasil');

        //background-color
    }

    public function tryVerificandoPaginaDeQrUnidade(AcceptanceTester $I)
    {
       
        
        $I->amOnPage('/client/qrunidade');
      //  $I->dontSee('benjamin');
        $I->see('Aponte para o Qr code da comanda');
        //$I->see('Meus Pedidos :: Padaria Benjamin :: SP @Brasil');

        //background-color
    }

     public function tryVerificandoPaginaDeCardapio(AcceptanceTester $I)
    {
       
        
        $I->amOnPage('/client/cardapio/600/123');
      //  $I->dontSee('benjamin');
        $I->see('Unidades');

    }
}

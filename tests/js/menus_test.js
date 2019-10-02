
Feature('Menus');

Scenario('testando os textos da pagina de login', (I) => {
	I.amOnPage('/');
  	I.see('Capriatti');
I.amOnPage('/admin');
  	I.see('Roletas');
  	I.see('Produtos');
  	I.see('Meus Indicadores');
  	I.see('Treinamentos');
});

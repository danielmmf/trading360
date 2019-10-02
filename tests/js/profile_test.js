
Feature('Profile');

Scenario('testando os textos da pagina de usuario', (I) => {
	I.amOnPage('/admin#!/app/profile');
  	I.see('Editar');
});

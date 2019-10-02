todoList.pagamento = <?php echo $pagamento; ?>;

todoList.loja = {};

$.get( "https://benjamin-a-padaria.firebaseio.com/unidades/"+todoList.pagamento.id+".json", function( data ) {
  console.log( data );
  todoList.loja = data;
  $("#endereco_loja").html(data.endereco);
  $("#nome_loja").html(data.nome);
});





todoList.tipos_pagamentos = [];
todoList.tipos_pagamentos[1] = "cartao";
console.log("carregando js da home, esta em resources/views/smart_admin/js/home.js.php");

var pagamentos = <?php echo \App\Payment::all()->toJson(); ?>;
todoList.pagamentos = pagamentos;
var total = 0;
for (var i = pagamentos.length - 1; i >= 0; i--) {
	total=parseFloat(total)+parseFloat(pagamentos[i].total);
}

todoList.total_pagamentos = total;
todoList.tipos_pagamentos = [];
todoList.tipos_pagamentos[1] = "cartao";

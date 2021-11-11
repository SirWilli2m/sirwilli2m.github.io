<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/style-ap.css">
	<script src="js/api.js" type="module" defer></script>
</head>
<body>
	<!-- ENDERECO START -->
    <main class="container">
        <h1 class="title">Checkout</h1>
        <div class="row">
            <div class="inputbox">
                <input type="text" id="nome" required>
                <label for="nome">Nome</label>
            </div>
            <div class="inputbox">
                <input type="text" id="email"  required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="inputbox">
                <input type="text" id="cep"  required>
                <label for="cep">CEP</label>
            </div>
            <div class="inputbox">
                <input type="text" id="endereco"  required>
                <label for="endereco">Endereço</label>
            </div>
            <div class="inputbox">
                <input type="text" id="numero"  required>
                <label for="numero">Número</label>
            </div>
        </div>
        <div class="row">
            <div class="inputbox">
                <input type="text" id="bairro"  required>
                <label for="bairro">Bairro</label>
            </div>
            <div class="inputbox">
                <input type="text" id="cidade"  required>
                <label for="cidade">Cidade</label>
            </div>
            <div class="inputbox">
                <input type="text" id="estado"  required>
                <label for="estado">Estado</label>
            </div>
        </div>
	<!-- ENDEROCO END -->
	
	<!-- PAYMENT METHOD START -->
	<div class="inputbox">
        <input type="number" id="credit-card"  required>
        <label>Número do Cartão</label>
    </div>
		<div class="inputbox">
        <input type="text" id="credit-card-name"  required>
        <label>Nome do Titular do Cartão</label>
    </div>
		<div class="inputbox">
        <input type="number" id="cpf"  required>
        <label>Número do CPF</label>
    </div>
	<!-- PAYMENT METHOD END -->
	<div class="row">
        <button>Comprar</button>
    </div>
</main>
</body>
</html>
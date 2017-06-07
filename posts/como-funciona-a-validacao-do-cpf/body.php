<p>
	<?php echo $post['excerpt']; ?>
</p>
<h2 class="h3-size">Introdução</h2>
<p>
	Existem diversas situações em que precisamos validar números de CPF para garantir a
	integridade dos dados informados por usuários ou até mesmo aplicações de terceiros.
	Mas afinal, o que define se um número de CPF é válido ou não? A seguir veremos as
	regras de validação do CPF e como aplicá-las a uma função de validação escrita em PHP.
</p>
<h2 class="h3-size">Regra de validação do CPF</h2>
<p>
	Um número de CPF válido tem o formato <code>999.999.999-99</code>: 11 dígitos sequenciais
	de 0 à 9, sendo os dois últimos utilizados como dígitos verificadores. Os separadores
	(pontos e traço) servem apenas como máscara do número e são desprezados para fins
	de validação.
</p>
<p>
	Vamos tomar o número de CPF <code>111.222.333-45</code> como exemplo para ilustrar as
	próximas etapas da validação. Este número de CPF é composto por 11 dígitos de 0 à 9,
	portanto resta apenas conferir se seus dígitos verificadores são de fato <strong>4</strong>
	e <strong>5</strong>. Para tanto, vamos calcular seus dígitos verificadores com base em
	seus 9 primeiros dígitos.
</p>
<h2 class="h3-size">Cálculo do primeiro dígito verificador</h2>
<p>
	Para calcularmos o primero dígito verificador A de um número de CPF, devemos primeiramente
	multiplicar cada um de seus <strong>9 primeiros dígitos</strong>
	por uma sequência de números <strong>decrescentes</strong> começando em <strong>10</strong>
	e somar os resultados de todas estas multiplicações. Aplicando este cálculo ao nosso
	número de CPF de exemplo, temos:
</p>
<pre>
	<code>
A = (1 * 10) + (1 * 9) + (1 * 8) + (2 * 7) + (2 * 6) + (2 * 5) + (3 * 4) + (3 * 3) + (3 * 2)
A = 10 + 9 + 8 + 14 + 12 + 10 + 12 + 9 + 6
A = 90
	</code>
</pre>
<p>
	Em seguida devemos dividir o resultado obtido com este somatório por <strong>11</strong>,
	logo:
</p>
<pre>
	<code>
A = 90 % 11
A = 8 // Com resto 2
	</code>
</pre>
<p>
	A parte que nos interessa nesta divisão é o <strong>resto</strong> obtido. Se
	este resto for <strong>menor do que 2</strong>, o primeiro dígito verificador será
	<strong>0</strong>. Caso contrário, o primeiro dígito verificador será
	<strong>11 menos o resto obtido</strong>. Logo, o primeiro dígito verificador do nosso
	número de CPF de exemplo é <strong>9</strong>, pois:
</p>
<pre>
	<code>
A = 11 - 2
A = 9
	</code>
</pre>
<p>
	Neste ponto já sabemos que o nosso número de CPF de exemplo é composto pelos dígitos
	<code>111.222.333-9?</code>. Resta apenas calcularmos o segundo dígito verificador.
</p>
<h2 class="h3-size">Cálculo do segundo dígito verificador</h2>
<p>
	Para calcularmos o segundo dígito verificador B de um número de CPF, devemos primeiramente
	multiplicar cada um de seus <strong>10 primeiros dígitos</strong> (sendo o décimo dígito o 
	o primeiro dígito verificador calculado na etapa anterior) por uma sequência
	de números <strong>decrescentes</strong> começando em <strong>11</strong> e somar
	os resultados de todas estas multiplicações. Aplicando este cálculo ao nosso número de CPF de
	exemplo, temos:
</p>
<pre>
	<code>
B = (1 * 11) + (1 * 10) + (1 * 9) + (2 * 8) + (2 * 7) + (2 * 6) + (3 * 5) + (3 * 4) + (3 * 3) + (9 * 2)
B = 11 + 10 + 9 + 16 + 14 + 12 + 15 + 12 + 9 + 18
B = 126
	</code>
</pre>
<p>
	Em seguida devemos novamente dividir o resultado obtido com este somatório por
	<strong>11</strong>, logo:
</p>
<pre>
	<code>
B = 126 % 11
B = 11 // Com resto 5
	</code>
</pre>
<p>
	Novamente avaliamos o <code>resto</code> obtido por esta divisão. Se este
	resto for <strong>menor do que 2</strong>, o segundo dígito verificador será
	<strong>0</strong>. Caso contrário, o segundo dígito verificador será
	<strong>11 menos o resto obtido</strong>. Logo, o segundo dígito verificador do
	nosso número de CPF de exemplo é <strong>6</strong>, pois:
</p>
<pre>
	<code>
B = 11 - 5
B = 6
	</code>
</pre>
<p>
	Pronto! Temos os dois dígitos verificadores do nosso número de CPF de exemplo.
	A partir disso concluímos que o nosso CPF de exemplo <code>111.222.333-45</code> é
	<strong>inválido</strong>, pois seus dígitos verificadores são <strong>9</strong> e
	<strong>6</strong>, conforme calculamos e não 4 e 5.
</p>
<p>
	Abaixo segue uma função em PHP responsável por realizar todos os cálculos vistos
	acima. A função retorna <code>true</code>, se o parâmetro passado for um número de
	CPF válido (com ou sem os separadores), ou <code>false</code>, caso contrário.
</p>
<p>
	<strong>ATENÇÃO</strong>: Números de CPF com todos os dígitos iguais, como
	por exemplo <code>111.111.111-11</code>, <code>222.222.222-22</code>, etc,
	apesar de passarem pelos testes de validação, são considerados inválidos.
</p>
<pre>
	<code>
&lt;?php
function is_valid_cpf($cpf) {
	// Remove todos os caracteres inválidos
	$cpf = preg_replace('/[^0-9]/', '', $cpf);

	// Verifica se o CPF informado contém 11 caracteres
	if (strlen($cpf) == 11) {
		// Verifica se os dígitos que compõem o CPF são todos iguais
		for ($i = 0; $i <= 9; $i++) {
			if ($cpf == implode('', array_fill(0, 11, $i))) {
				return false;
			}
		}

		// Calcula os dois dígitos verificadores do CPF
		$check_digits = substr($cpf, -2);
		$cpf = substr($cpf, 0, 9);
		for ($i = 0; $i <= 1; $i++) {
			$check_digit = 0;
			for ($j = 0; $j <= 8 + $i; $j++) {
				$check_digit += intval($cpf[$j]) * (10 + $i - $j);
			}
			$check_digit = ($check_digit % 11) < 2 ? 0 : 11 - ($check_digit % 11);
			$cpf .= strval($check_digit);
		}

		// Retorna o resultado da igualdade entre o CPF informado e o CPF calculado
		return substr($cpf, -2) == $check_digits;
	}
	return false;
}
?&gt;
	</code>
</pre>
<h2 class="h3-size">Conclusão</h2>
<p>
	Conhecer as regras de validação de números de CPF pode ser bastante útil na
	hora de desenvolver extensões de bibliotecas de validação de dados, visto que o
	CPF é uma sequência numérica relevante apenas no Brasil.
</p>
<h2 class="h3-size">Saiba mais</h2>
<p>
	<ul id="related-links" class="block-list">
		<li><a href="https://pt.wikipedia.org/wiki/D%C3%ADgito_verificador" target="_blank">Dígito verificador</a></li>
		<li><a href="http://www.somatematica.com.br/faq/cpf.php" target="_blank">Cálculo do dígito verificador do CPF</a></li>
		<li><a href="https://www.geradordecpf.org/" target="_blank">Gerador de números de CPF</a></li>
	</ul>
</p>
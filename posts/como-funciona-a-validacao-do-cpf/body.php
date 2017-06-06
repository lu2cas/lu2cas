<p>
	<?php echo $post['excerpt']; ?>
</p>
<h2 class="h3-size">Introdução</h2>
<p>
	Existem diversas situações em precisamos validar números de CPF para garantir a
	integridade dos dados informados. Mas afinal, o que define se um número de CPF é
	válido ou não? A seguir veremos as regras de validação do CPF e como aplicá-las a
	uma função de validação escrita em PHP.
</p>
<h2 class="h3-size">Regra de validação do CPF</h2>
<p>
	O número de CPF segue o formato <code>999.999.999-99</code>: 11 dígitos sequenciais
	de 0 à 9, sendo os dois últimos utilizados como dígitos verificadores. Os separadores
	(pontos e traço) servem apenas como máscara do número e são desprezados para fins
	de validação.
</p>
<p>
	Vamos tomar o CPF <code>111.222.333-45</code> como exemplo para as próximas etapas
	da validação. Este CPF é composto por 11 dígitos de 0 à 9, portanto resta apenas
	conferir se seus dígitos verificadores são de fato <strong>4</strong> e <strong>5</strong>.
</p>
<h2 class="h3-size">Cálculo do primeiro dígito verificador</h2>
<p>
	Para calcularmos o primero dígito verificador A de um CPF, devemos primeiramente
	realizar o somatório das multiplicações de cada um dos <strong>9 primeiros dígitos</strong>
	do CPF em questão por números <strong>decrescentes</strong> a partir de <strong>10</strong>.
	Aplicando este cálculo ao nosso CPF de exemplo, temos:
</p>
<pre>
	<code>
A = (1 * 10) + (1 * 9) + (1 * 8) + (2 * 7) + (2 * 6) + (2 * 5) + (3 * 4) + (3 * 3) + (3 * 2)
A = 10 + 9 + 8 + 14 + 12 + 10 + 12 + 9 + 6
A = 90
	</code>
</pre>
<p>
	Em seguida devemos realizar a <strong>divisão inteira</strong> do resultado obtido por
	<strong>11</strong>, logo:
</p>
<pre>
	<code>
A = A % 11
A = 90 % 11
A = 8 // Com resto 2
	</code>
</pre>
<p>
	A parte que nos interessa aqui é o <strong>resto</strong> desta divisão inteira. Se
	o resto for <strong>menor do que 2</strong>, o primeiro dígito verificador será
	<strong>0</strong>. Caso contrário, o primeiro dígito verificador será <strong>11 menos o resto</strong>.
	Logo, o primeiro dígito verificador do nosso CPF de exemplo é <strong>9</strong>, pois:
</p>
<pre>
	<code>
A = 11 - 2
A = 9
	</code>
</pre>
<p>
	Neste ponto já sabemos que o nosso CPF de exemplo é composto pelos dígitos
	<code>111.222.333-9?</code>. Resta apenas o último dígito.
</p>
<h2 class="h3-size">Cálculo do segundo dígito verificador</h2>
<p>
	Para calcularmos o segundo dígito verificador B de um CPF, devemos primeiramente
	realizar o somatório das multiplicações de cada um dos <strong>9 primeiros dígitos</strong>
	do CPF em questão, <strong>mais o primeiro dígito verificador calculado anteriormente</strong>,
	por números <strong>decrescentes</strong> a partir de <strong>11</strong>. Aplicando
	este cálculo ao nosso CPF de exemplo, temos:
</p>
<pre>
	<code>
B = (1 * 11) + (1 * 10) + (1 * 9) + (2 * 8) + (2 * 7) + (2 * 6) + (3 * 5) + (3 * 4) + (3 * 3) + (9 * 2)
B = 11 + 10 + 9 + 16 + 14 + 12 + 15 + 12 + 9 + 18
B = 126
	</code>
</pre>
<p>
	Em seguida devemos realizar a <strong>divisão inteira</strong> do resultado
	obtido por <strong>11</strong>, logo:
</p>
<pre>
	<code>
B = B % 11
B = 126 % 11
B = 11 // Com resto 5
	</code>
</pre>
<p>
	Verificamos o <strong>resto</strong> da divisão da mesma forma como fizemos
	no cálculo do primeiro dígito. Se o resto for <strong>menor do que 2</strong>,
	o segundo dígito verificador será <strong>0</strong>. Caso contrário, o segundo
	dígito verificador será <strong>11 menos o resto</strong>. Logo, o segundo dígito
	verificador do nosso CPF de exemplo é <strong>6</strong>, pois:
</p>
<pre>
	<code>
B = 11 - 5
B = 6
	</code>
</pre>
<p>
	Pronto! Com isso concluímos que o nosso CPF de exemplo <code>111.222.333-45</code>
	é <strong>inválido</strong>, pois seus dígitos verificadores são <strong>9</strong> e
	<strong>6</strong>, formando o número de CPF <code>111.222.333-96</code>.
</p>
<p>
	Abaixo segue uma função escrita em PHP responsável por realizar os cálculos vistos
	acima. A função retorna <code>true</code>, se o parâmetro passadp for um CPF válido,
	ou <code>false</code>, caso contrário.
</p>
<p>
	<strong>ATENÇÃO</strong>: Números de CPF com todos os algarismos iguais, como
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
	Conhecer as regras de validação do CPF pode ser bastante útil na hora de desenvolver extensões de bibliotecas 
	de validação de dados, visto que o CPF é uma sequência numérica que representa um documento que só tem validade
	no Brasil.
</p>
<h2 class="h3-size">Saiba mais</h2>
<ul id="related-links" class="block-list">
	<li><a href="https://pt.wikipedia.org/wiki/D%C3%ADgito_verificador" target="_blank">Cálculo de dígito verificador</a></li>
</ul>
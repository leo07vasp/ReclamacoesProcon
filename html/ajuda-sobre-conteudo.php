<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Ajuda Sobre o Conteúdo - Reclamações Procon</title>
	<meta name="keywords" content="">
	<meta name="description" content="Página não encontrada.">
	<meta name="revisit-after" content="7 days">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Group VOID">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
	<meta property="og:image" content="imagens/logo-reclamacoes-procon-facebook.png">
	<link rel="stylesheet" href="css/layout-inicio.css">
	<link href="http://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
	<script src="<?php echo $raiz; ?>js/jquery.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="js/mediaqueries-min.js"></script><![endif]-->
	<script src="js/ios-bug-min.js"></script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-16951438-4']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
</head>
<body class="resultados">
	<header>
		<div class="wrap">
			<a class="logo" href="/">Reclamações Procon</a>
		</div>
	</header>
	<form action="/" class="wrap">
		<label for="busca">Pesquise o nome da empresa</label>
		<input type="text" name="pesquisa" id="busca" placeholder="PESQUISE O NOME DA EMPRESA" autocomplete="off" required>
		<button type="submit">BUSCAR</button>
	</form>
	<article class="conteudo ajuda">
		<h1>Ajuda sobre o conteúdo</h1>
		<nav>
			<ul>
				<li><a href="#quemsomos">Quem somos</a></li>
				<li><a href="#oprojeto">O projeto Reclamações Procon</a></li>
				<li><a href="#tecnologias">Tecnologias utilizadas</a></li>
				<li><a href="#interface">Interface</a></li>
				<li><a href="#filtros">Filtros</a></li>
				<li><a href="#informacoesvisuais">Informações visuais</a></li>
				<li><a href="#bomba">Entenda a bomba</a></li>
				<li><a href="#oquesaodados">O que são Dados Abertos</a></li>
				<li><a href="#fontededados">Fonte de dados</a></li>
				<li><a href="#reclamacoes">Reclamações fundamentadas</a></li>
			</ul>
		</nav>
		<section>
			<h2 id="quemsomos">Quem somos</h2>
			<p>Somos um grupo de estudantes, programadores e designers, do curso da Especialização em Padrões Web da Universidade Tecnológica Federal do Paraná, campus Londrina.</p>

			<p>Nos unimos com o intuito de utilizar os diversos padrões e técnicas estudadas, e assim proporcionar acessibilidade e uma melhor experiência de visualização de dados por nossos usuários, buscando alcançar todo tipo de dispositivo ou tecnologia utilizada por eles.</p>

			<p>A motivação para  desenvolver o projeto surgiu em uma reunião após um dia normal de aula para participarmos de um concurso de dados abertos, neste projeto decidimos aplicar os conhecimentos adquiridos como uma forma de fixação do conteúdo e obter de experiência no uso de tecnologias inovadoras.</p>

			<p>Os colaboradores do projeto são os seguintes: <a href="http://twitter.com/lhvolso">@lhvolso</a>, <a href="http://twitter.com/limaadriano">@limaadriano</a>, <a href="http://twitter.com/thiagotakeshi">@thiagotakeshi</a>, <a href="http://twitter.com/marcoshuss">@marcoshuss</a>, <a href="http://twitter.com/dnlvichi">@dnlvichi</a>, e também como orientador e coordenador do curso <a href="http://twitter.com/thiagotpc">@thiagotpc</a>.</p>
		</section>

		<section>
			<h2 id="oprojeto">O projeto Reclamações Procon</h2>
			<p>Para que conseguíssemos atingir nosso objetivo de um site acessível desenvolvemos nossos códigos seguindo as recomendações do  <a href="www.w3c.org"><abbr title="World Wide Web Consortium">W3C</abbr></a>, assim como realizar as boas práticas de de estruturação de documentos de hipertexto.</p>

			<h3 id="tecnologias">Tecnologias utilizadas</h3>
			<p>Nos gráficos de pizza e circulares foram utilizadas a tecnologia de <strong>canvas</strong>, obtendo assim flexibilidade, dinâmicidade em sua composição, proporcionando uma boa visualização com pouca transferência de dados, e baixa demanda de processamento.</p>

			<p>Neste projeto foi utilizada a metodologia "<a href="http://tableless.com.br/mobile-first-a-arte-de-pensar-com-foco/">Mobile First</a>", visando facilitar a experiência de uso nos mais diversos dispositivos móveis, notebooks e/ou desktops.</p>
			<p>Utilizamos várias tecnologias da <a href="http://www.soyuz.com.br/blog/open-web-platform/">Open Web Plataform:</a></p>
			<ul>
				<li>HTML5: Padrões da W3C (focando-se principalmente nos novos elementos trazendo mais semântica ao conteúdo, como: header, footer, article, section, nav, etc.);</li>

				<li>Padrões do grupo WCAG para acessibilidade;</li>

				<li>CSS3: Pseudo-elementos, Media-queries, e novas propriedades como: border-radius, box-shadow, font-face, transform, etc;</li>
				<li>Canvas para os gráficos circulares (utilizando javascript nativo com uso de polyfill para Internet Explorer versão 8);</li>
				<li>PHP versão 5.4</li>
				<li>Javascript e jQuery</li>
			</ul>

			<h3 id="interface">Interface</h3>
			<p>Mediante a imensidão de dados disponibilizados pelo Procon buscamos proporcionar a maior <strong>simplicidade</strong> possível no seu acesso em nosso site/projeto, para que deste modo mesmo pessoas com pouca afinidade tecnológica possa usufruir de todo o potencial dos dados disponíveis. Para isso focamos na ferramenta de busca utilizando um sistema de relevância do termo buscado para trazer a informação mais relevante para o usuário.</p>

			<h3 id="filtros">Filtros</h3>
			<p>As reclamações das empresas podem ser filtradas pelo <strong>sexo</strong> dos consumidores (masculino e feminino) e pelo <strong>estado de atendimento</strong> das reclamações pelo fornecedor (atendidas e não atendidas), basta clicar sobre o gráfico ou sobre o texto para ativar o filtro, note que a porcentagem selecionada irá alterar-se para 100% representando que o total de reclamações e as outras informações dispostas nos outros gráficos são correspondentes a esta porcentagem selecionada.</p>

			<p>Para remover um filtro selecionado basta clicar no “X Remover este filtro” que se encontra logo abaixo do total de reclamações.</p>

			<h3 id="informacoesvisuais">Informações visuais</h3>
			<p>Foi utilizado um modelo de <strong>infográficos</strong> para as páginas com as informações sobre as empresas para proporcionar um fácil entendimento dos dados. Os gráficos e as informações foram construídas de forma a ser acessível com bom entendimento mesmo utilizando tecnologias assistivas como leitores de telas.</p>

			<h3 id="bomba">Entendendo a bomba</h3>
			<p>A bomba foi criada para melhor expressar o dado de tempo médio demorado pelas empresas para resolver uma determinada reclamação classificando em uma escala de notas iniciando com a letra "A" para menos demorado até a letra "E" para muito demorado.</p>
			<table>
				<tr>
					<th>Nota</th>
					<th>Média de Dias</th>
				</tr>
				<tr>
					<td>A</td>
					<td>menor que 65 dias.</td>
				</tr>
				<tr>
					<td>B</td>
					<td>entre 65 e 120 dias.</td>
				</tr>
				<tr>
					<td>C</td>
					<td>entre 120 e 165 dias</td>
				</tr>
				<tr>
					<td>D</td>
					<td>entre 165 e 250 dias</td>
				</tr>
				<tr>
					<td>E</td>
					<td>mais que 250 dias.</td>
				</tr>
			</table>
		</section>

		<section>
			<h2 id="oquesaodados"> O que são Dados Abertos</h2>
			<p>Segundo a <a href="http://opendefinition.org/">definição da Open Knowledge Foundation (em inglês)</a>:</p>
			<p><strong>"Dados são abertos quando qualquer pessoa pode livremente usá-los, reutilizá-los e redistribuí-los, estando sujeito a, no máximo, a exigência de creditar a sua autoria e compartilhar pela mesma licença."</strong></p>
			<p>Os dados abertos também são pautados pelas <a href="http://eaves.ca/2009/09/30/three-law-of-open-government-data/">Três Leis de Dados Abertos Governamentais (em inglês)</a> criadas pelo especialista em políticas públicas e ativista dos dados abertos <a href="http://eaves.ca/about/">David Eaves</a> e os <a href="http://www.opengovdata.org/home/8principles">Oito Princípios de Dados Abertos Governamentais (em inglês)</a> criados por um grupo de trabalho de 30 pessoas da Califórnia. O grupo também afirmou que a conformidade com esses princípios precisa ser verificável e uma pessoa deve ser designada como contato responsável pelos dados.</p>
			<p>As Três Leis e Oito Princípios dos Dados Abertos Governamentais traduzidas você encontra no <a href="http://dados.gov.br/dados-abertos">Portal Brasileiro de Dados Abertos</a></p>
		</section>

		<section>
			<h2 id="fontededados"> Fonte dos Dados </h2>
			<p>A base de dados consultados neste projeto são <strong>Dados Abertos</strong> do Cadastro Nacional de Reclamações Fundamentadas de 2011 realizado pelos 25 Procons estaduais e 220 Procons municipais, que por sua vez estão integradas através do Sistema Nacional de Informações de Defesa do Consumidor, o Sindec.</p>

			<p>Fonte: <a href="http://dados.gov.br/dataset/cadastro-nacional-de-reclamacoes-fundamentadas-procons-sindec/resource/af898782-aba3-4274-9cec-ebc8500d7814">Dicionário de Dados do Cadastro Nacional de Reclamções Fundamentadas</a>, <a href="http://dados.gov.br/dataset/cadastro-nacional-de-reclamacoes-fundamentadas-procons-sindec/resource/513ef068-2209-4fa9-9f77-d2874cc16b23">Relatório analítico do Cadastro em 2011</a>.</p>

			<h3 id="reclamacoes">Reclamação Fundamentada</h3>
			<p>No Sindec são registradas como <strong>reclamações</strong> a demanda do consumidor que necessita de uma audiência em busca de uma resolução mediante complexidade da demanda quanto pela postura adotada pelo fornecedor(do serviço ou produto) no enfrentamento do conflito.</p>

			<p>A reclamação se configura como <strong>fundamentada</strong> quando houver argumentos que comprovem a existência do consumidor e do fornecedor, a relação de consumo entre eles, sua verossimilhança e que não tenha sido prontamente solucionada pelo fornecedor.</p>

			<p>Definição completa: <a href="http://dados.gov.br/dataset/cadastro-nacional-de-reclamacoes-fundamentadas-procons-sindec/resource/bb9e832c-7f0b-4a97-a1b6-1de679d4a7d4"> F.A.Q. do Cadastro Nacional de Reclamações Fundamentadas;</a></p>
		</section>
	</article>
</body>
</html>
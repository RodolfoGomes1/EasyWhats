<?php

		if(isset($_POST['criausuario'])){
			
			$valor = $_POST['nome'];
			$Pais = $_POST['select'];
						
			$valor = str_replace(".", "", $valor);
			$valor = str_replace(",", "", $valor);
			$valor = str_replace("-", "", $valor);
			$valor = str_replace("/", "", $valor);
			$valor = str_replace("(", "", $valor);
			$valor = str_replace(")", "", $valor);
			$valor = str_replace(" ", "", $valor);
			$valor = str_replace("+", "", $valor);
			
			//echo $valor;
				
				$nome= "https://api.whatsapp.com/send?phone=$Pais".$valor;
				
				header("Location:$nome");
				//echo https://api.whatsapp.com/send?phone=556299649977
				
			}
			
			if(isset($_POST['inter'])){
				
				$nome= "https://api.whatsapp.com/send?phone=".$_POST['nome_1'];
				
				header("Location:$nome");
				//echo https://api.whatsapp.com/send?phone=556299649977
				
			}



?>



<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv=”content-type” content="text/html;" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="keywords" content="whatsapp, easywhats, agenda, sem contato, sem adicionar ao contatos, adicionar" />
		<meta http-equiv="Cache-Control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<title>Easy whats</title>
		<meta name="description" content="Inicie Conversas pelo WhatsApp sem precisar adicionar o numero em seus cotados do celular, acesse o EasyWhats e desfrute dessa nova experencia.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="imagex/png" href="./img/escudo.png">
		<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
		<link href="css/estilo_000.css" rel="stylesheet"/>
		
		<!----- fontes --->
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Coming+Soon&display=swap" rel="stylesheet">
		
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-QN63RPTSYM"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-QN63RPTSYM');
        </script>
   
	</head>

	<body>
		<div class="outracoisa">
			<div class="container_" >
				<div class="row">
					<h2 class="lbl_titulo">Bem vindo ao Easy Whats </h2>
				</div>
				<div class="text-center produtos">
					<form action="" method="post">
						<div class="div2 mx-auto">
							<div class="form-group">
								<label for="" class="lbl_form">Pais de Destino </label> <br>
								<select name = "select" class="slt_form" >
									<option value="93">+93 Afeganistão</option>
									<option value="27">+27 África do Sul</option>
									<option value="355">+355 Albânia</option>
									<option value="49">+49 Alemanha</option>
									<option value="376">+376 Andorra</option>
									<option value="244">+244 Angola</option>
									<option value="1">+1 Anguila</option>
									<option value="1">+1 Antígua e Barbuda</option>
									<option value="966">+966 Arábia Saudita</option>
									<option value="213">+213 Argélia</option>
									<option value="54">+54 Argentina</option>
									<option value="374">+374 Armênia</option>
									<option value="297">+297 Aruba</option>
									<option value="247">+247 Ascensão</option>
									<option value="61">+61 Austrália</option>
									<option value="43">+43 Áustria</option>
									<option value="994">+994 Azerbaijão</option>
									<option value="1">+1 Bahamas</option>
									<option value="880">+880 Bangladexe</option>
									<option value="1">+1 Barbados</option>
									<option value="973">+973 Barém</option>
									<option value="32">+32 Bélgica</option>
									<option value="501">+501 Belize</option>
									<option value="229">+229 Benim</option>
									<option value="1">+1 Bermudas</option>
									<option value="375">+375 Bielorrússia</option>
									<option value="591">+591 Bolívia</option>
									<option value="599">+599 Bonaire</option>
									<option value="387">+387 Bósnia e Herzegovina</option>
									<option value="267">+267 Botsuana</option>
									<option value="55" selected>+55 Brasil</option>
									<option value="673">+673 Brunei</option>
									<option value="359">+359 Bulgária</option>
									<option value="226">+226 Burquina Fasso</option>
									<option value="257">+257 Burundi</option>
									<option value="975">+975 Butão</option>
									<option value="238">+238 Cabo Verde</option>
									<option value="237">+237 Camarões</option>
									<option value="855">+855 Camboja</option>
									<option value="1">+1 Canadá</option>
									<option value="974">+974 Catar</option>
									<option value="7">+7 Cazaquistão</option>
									<option value="235">+235 Chade</option>
									<option value="56">+56 Chile</option>
									<option value="86">+86 China</option>
									<option value="357">+357 Chipre</option>
									<option value="57">+57 Colômbia</option>
									<option value="269">+269 Comores</option>
									<option value="242">+242 Congo-Brazavile</option>
									<option value="243">+243 Congo-Quinxassa</option>
									<option value="850">+850 Coreia do Norte</option>
									<option value="82">+82 Coreia do Sul</option>
									<option value="225">+225 Costa do Marfim</option>
									<option value="506">+506 Costa Rica</option>
									<option value="385">+385 Croácia</option>
									<option value="53">+53 Cuba</option>
									<option value="599">+599 Curaçao</option>
									<option value="45">+45 Dinamarca</option>
									<option value="253">+253 Djibuti</option>
									<option value="1">+1 Dominica</option>
									<option value="20">+20 Egipto</option>
									<option value="503">+503 El Salvador</option>
									<option value="971">+971 Emirados Árabes Unidos</option>
									<option value="593">+593 Equador</option>
									<option value="291">+291 Eritreia</option>
									<option value="421">+421 Eslováquia</option>
									<option value="386">+386 Eslovénia</option>
									<option value="34">+34 Espanha</option>
									<option value="268">+268 Essuatíni</option>
									<option value="691">+691 Estados Federados da Micronésia</option>
									<option value="1">+1 Estados Unidos</option>
									<option value="372">+372 Estónia</option>
									<option value="251">+251 Etiópia</option>
									<option value="679">+679 Fiji</option>
									<option value="63">+63 Filipinas</option>
									<option value="358">+358 Finlândia</option>
									<option value="33">+33 França</option>
									<option value="241">+241 Gabão</option>
									<option value="220">+220 Gâmbia</option>
									<option value="233">+233 Gana</option>
									<option value="995">+995 Geórgia</option>
									<option value="350">+350 Gibraltar</option>
									<option value="1">+1 Granada</option>
									<option value="30">+30 Grécia</option>
									<option value="299">+299 Groenlândia</option>
									<option value="590">+590 Guadalupe</option>
									<option value="1">+1 Guam</option>
									<option value="502">+502 Guatemala</option>
									<option value="592">+592 Guiana</option>
									<option value="594">+594 Guiana Francesa</option>
									<option value="224">+224 Guiné</option>
									<option value="240">+240 Guiné Equatorial</option>
									<option value="245">+245 Guiné-Bissau</option>
									<option value="509">+509 Haiti</option>
									<option value="504">+504 Honduras</option>
									<option value="852">+852 Hong Kong</option>
									<option value="36">+36 Hungria</option>
									<option value="967">+967 Iêmen</option>
									<option value="61">+61 Ilha Christmas</option>
									<option value="672">+672 Ilha Norfolque</option>
									<option value="1">+1 Ilhas Caimã</option>
									<option value="61">+61 Ilhas Cocos</option>
									<option value="682">+682 Ilhas Cook</option>
									<option value="298">+298 Ilhas Féroe</option>
									<option value="500">+500 Ilhas Geórgia do Sul e Sandwich do Sul</option>
									<option value="500">+500 Ilhas Malvinas</option>
									<option value="1">+1 Ilhas Marianas do Norte</option>
									<option value="692">+692 Ilhas Marshall</option>
									<option value="64">+64 Ilhas Pitcairn</option>
									<option value="677">+677 Ilhas Salomão</option>
									<option value="1">+1 Ilhas Virgens Americanas</option>
									<option value="1">+1 Ilhas Virgens Britânicas</option>
									<option value="91">+91 Índia</option>
									<option value="62">+62 Indonésia</option>
									<option value="98">+98 Irã</option>
									<option value="964">+964 Iraque</option>
									<option value="353">+353 Irlanda</option>
									<option value="354">+354 Islândia</option>
									<option value="972">+972 Israel</option>
									<option value="39">+39 Itália</option>
									<option value="1">+1 Jamaica</option>
									<option value="81">+81 Japão</option>
									<option value="962">+962 Jordânia</option>
									<option value="383">+383 Kosovo</option>
									<option value="965">+965 Kuwait</option>
									<option value="856">+856 Laos</option>
									<option value="266">+266 Lesoto</option>
									<option value="371">+371 Letônia</option>
									<option value="961">+961 Líbano</option>
									<option value="231">+231 Libéria</option>
									<option value="218">+218 Líbia</option>
									<option value="423">+423 Liechtenstein</option>
									<option value="370">+370 Lituânia</option>
									<option value="352">+352 Luxemburgo</option>
									<option value="853">+853 Macau</option>
									<option value="389">+389 Macedônia do Norte</option>
									<option value="261">+261 Madagascar</option>
									<option value="262">+262 Maiote</option>
									<option value="60">+60 Malásia</option>
									<option value="265">+265 Maláui</option>
									<option value="960">+960 Maldivas</option>
									<option value="223">+223 Mali</option>
									<option value="356">+356 Malta</option>
									<option value="212">+212 Marrocos</option>
									<option value="596">+596 Martinica</option>
									<option value="230">+230 Maurícia</option>
									<option value="222">+222 Mauritânia</option>
									<option value="52">+52 México</option>
									<option value="95">+95 Mianmar</option>
									<option value="258">+258 Moçambique</option>
									<option value="373">+373 Moldávia</option>
									<option value="377">+377 Mônaco</option>
									<option value="976">+976 Mongólia</option>
									<option value="1">+1 Monserrate</option>
									<option value="382">+382 Montenegro</option>
									<option value="264">+264 Namíbia</option>
									<option value="674">+674 Nauru</option>
									<option value="977">+977 Nepal</option>
									<option value="505">+505 Nicarágua</option>
									<option value="227">+227 Níger</option>
									<option value="234">+234 Nigéria</option>
									<option value="683">+683 Niue</option>
									<option value="47">+47 Noruega</option>
									<option value="687">+687 Nova Caledônia</option>
									<option value="64">+64 Nova Zelândia</option>
									<option value="968">+968 Omã</option>
									<option value="Código">+Código País</option>
									<option value="31">+31 Países Baixos</option>
									<option value="680">+680 Palau</option>
									<option value="970">+970 Palestina</option>
									<option value="507">+507 Panamá</option>
									<option value="675">+675 Papua-Nova Guiné</option>
									<option value="92">+92 Paquistão</option>
									<option value="595">+595 Paraguai</option>
									<option value="51">+51 Peru</option>
									<option value="689">+689 Polinésia Francesa</option>
									<option value="48">+48 Polônia</option>
									<option value="1">+1 Porto Rico</option>
									<option value="351">+351 Portugal</option>
									<option value="254">+254 Quênia</option>
									<option value="996">+996 Quirguistão</option>
									<option value="686">+686 Quiribáti</option>
									<option value="44">+44 Reino Unido</option>
									<option value="236">+236 República Centro-Africana</option>
									<option value="1">+1 República Dominicana</option>
									<option value="262">+262 Reunião</option>
									<option value="40">+40 Romênia</option>
									<option value="250">+250 Ruanda</option>
									<option value="7">+7 Rússia</option>
									<option value="212">+212 Saara Ocidental</option>
									<option value="599">+599 Saba</option>
									<option value="685">+685 Samoa</option>
									<option value="1">+1 Samoa Americana</option>
									<option value="290">+290 Santa Helena</option>
									<option value="1">+1 Santa Lúcia</option>
									<option value="599">+599 Santo Eustáquio</option>
									<option value="590">+590 São Bartolomeu</option>
									<option value="1">+1 São Cristóvão e Neves</option>
									<option value="378">+378 São Marinho</option>
									<option value="1">+1 São Martinho</option>
									<option value="590">+590 São Martinho</option>
									<option value="508">+508 São Pedro e Miquelão</option>
									<option value="239">+239 São Tomé e Príncipe</option>
									<option value="1">+1 São Vicente e Granadinas</option>
									<option value="248">+248 Seicheles</option>
									<option value="221">+221 Senegal</option>
									<option value="94">+94 Seri Lanca</option>
									<option value="232">+232 Serra Leoa</option>
									<option value="381">+381 Sérvia</option>
									<option value="65">+65 Singapura</option>
									<option value="963">+963 Síria</option>
									<option value="252">+252 Somália</option>
									<option value="249">+249 Sudão</option>
									<option value="211">+211 Sudão do Sul</option>
									<option value="46">+46 Suécia</option>
									<option value="41">+41 Suíça</option>
									<option value="597">+597 Suriname</option>
									<option value="66">+66 Tailândia</option>
									<option value="886">+886 Taiwan</option>
									<option value="992">+992 Tajiquistão</option>
									<option value="255">+255 Tanzânia</option>
									<option value="420">+420 Tchéquia</option>
									<option value="672">+672 Território Antártico Australiano</option>
									<option value="246">+246 Território Britânico do Oceano Índico</option>
									<option value="670">+670 Timor-Leste</option>
									<option value="228">+228 Togo</option>
									<option value="676">+676 Tonga</option>
									<option value="690">+690 Toquelau</option>
									<option value="1">+1 Trindade e Tobago</option>
									<option value="290">+290 Tristão da Cunha</option>
									<option value="216">+216 Tunísia</option>
									<option value="1">+1 Turcas e Caicos</option>
									<option value="993">+993 Turcomenistão</option>
									<option value="90">+90 Turquia</option>
									<option value="688">+688 Tuvalu</option>
									<option value="380">+380 Ucrânia</option>
									<option value="256">+256 Uganda</option>
									<option value="598">+598 Uruguai</option>
									<option value="998">+998 Uzbequistão</option>
									<option value="678">+678 Vanuatu</option>
									<option value="379">+379 Vaticano</option>
									<option value="58">+58 Venezuela</option>
									<option value="84">+84 Vietnã</option>
									<option value="681">+681 Wallis e Futuna</option>
									<option value="260">+260 Zâmbia</option>
									<option value="263">+263 Zimbábue</option>
								</select> <br>
								<label for="" class="lbl_form">Número do Telefone </label><br>
								<input type="text" class="Txt_form" name="nome" ><br>
							</div>
							<div class="form-group">
								<input type="submit" name="criausuario" value="Conversar" class="btn">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>       				
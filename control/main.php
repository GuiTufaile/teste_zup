<?php
/* ---TESTE ZUP Jr ---
Guilherme Tufaile
+55 17 99180-6003

*/
//Recebendo a informação 
if(isset($_POST['info']) AND $_POST['info'] != ""){ // Verifica se há informação
	$info = trim($_POST['info']); //Remove os espaços antes e depois da str
	$info = strtoupper($info); //Transforma para maiusculo
	$count = str_word_count($info, 0); //Conta quantas strings contém separado por espaço

	if(strpos($info," ") == TRUE){//É coordenadas e direção 
		if($count == 3){//Verifica se há apenas 3 parâmetros
			explode(" ",$info);			
			if(1 == 1/*is_numeric($info[0]) == TRUE && is_numeric($info[1]) == TRUE && !is_numeric($info[2]) == TRUE*/){ //Verifica se os 2 primeiros parâmetros são numericos e o terceiro não
				$x = var_dump($info[0]); //define a coordenada de X
				$y = var_dump($info[1]); //define a coordenada de Y
				$i = 2; //define a posição da terceira informação (direção)
				$direcao = verificaDirecao($info[$i],$i); //Define a direção inicial
				$coord = 1; //Define que a coordenada (informação 1) foi recebida

				echo $coord." ".$direcao." x=".$x." y=".$y;
			}else{ //Parâmetros de coordenadas (x e y) Inválido
				echo "Parâmetros de coordenadas (x e y) Inválido";
				return 0;
			}
				
		}else{//Se possuir mais ou menos parâmetros na primeira informação, desconsidere
			echo "Se possuir mais ou menos parâmetros na primeira informação, desconsidere";
			return 0;
		}		
	}else if($count > 0 && $coord = 1){//É instrução de movimentos e não contém espaço
		$i=0; 
		for($i=0; $i>str_split($info);$i++){
			if($i == 0 && $info[$i] == "M"){
				movimento($direcao, $y, $x);			
			}else{
				$direcaoAtual = verificaDirecao($info[$i],$i); 			
				if($direcaoAtual !== "erro"){//Se for direção
					if($info[$i] == "M"){//se for para andar 1 ponto

					}
				}else{//se for caractere inválido

				}
			}
		}

	}else{//Se não for comando válido, desconsidere
		echo "Se não for comando válido, desconsidere";
		return 0;
	}
}else{//Se não houver informação via post
	echo "Se não houver informação via post";
	return 0;
}

function verificaDirecao($info,$i)
{
	//Define a direção
	if($info[$i] == "N"){
		$direcao = "N";
	}else if($info[$i] == "S"){
		$direcao = "S";
	}else if($info[$i] == "W" || $info[$i] == "O"){
		$direcao = "W";
	}else if($info[$i] == "L" || $info[$i] == "E"){
		$direcao = "E";
	}else{//Terceiro Parâmetro Inválido
		return "erro";
	}
    return $direcao;
}

function movimento($direcao, $y, $x)
switch ($direcao){
		case "N":
			$y += 1;
			break;
		case "S":
			$y -= 1;
			break;
		case "E":
			$x += 1;
			break;
		case "W":
			$x -= 1;
			break;
}
?>
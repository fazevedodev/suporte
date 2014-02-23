<?php
	/**
	 * isCpfValid
	 *
	 * Esta funÃ§Ã£o testa se um cpf Ã© valido ou nÃ£o. 
	 *
	 * @author	Raoni Botelho Sporteman <raonibs@gmail.com>
	 * @version	1.0 Debugada em 26/09/2011 no PHP 5.3.8
	 * @param	string		$cpf			Guarda o cpf como ele foi digitado pelo cliente
	 * @param	array		$num			Guarda apenas os nÃºmeros do cpf
	 * @param	boolean		$isCpfValid		Guarda o retorno da funÃ§Ã£o
	 * @param	int			$multiplica 	Auxilia no Calculo dos DÃ­gitos verificadores
	 * @param	int			$soma			Auxilia no Calculo dos DÃ­gitos verificadores
	 * @param	int			$resto			Auxilia no Calculo dos DÃ­gitos verificadores
	 * @param	int			$dg				DÃ­gito verificador
	 * @return	boolean						"true" se o cpf Ã© vÃ¡lido ou "false" caso o contrÃ¡rio
	 *
	 */
	 
	 function isCpfValid($cpf)
	 	{
			//Etapa 1: Cria um array com apenas os digitos numÃ©ricos, isso permite receber o cpf em diferentes formatos como "000.000.000-00", "00000000000", "000 000 000 00" etc...
			$j=0;
			for($i=0; $i<(strlen($cpf)); $i++)
				{
					if(is_numeric($cpf[$i]))
						{
							$num[$j]=$cpf[$i];
							$j++;
						}
				}
			//Etapa 2: Conta os dÃ­gitos, um cpf vÃ¡lido possui 11 dÃ­gitos numÃ©ricos.
			if(count($num)!=11)
				{
					$isCpfValid=false;
				}
			//Etapa 3: CombinaÃ§Ãµes como 00000000000 e 22222222222 embora nÃ£o sejam cpfs reais resultariam em cpfs vÃ¡lidos apÃ³s o calculo dos dÃ­gitos verificares e por isso precisam ser filtradas nesta parte.
			else
				{
					for($i=0; $i<10; $i++)
						{
							if ($num[0]==$i && $num[1]==$i && $num[2]==$i && $num[3]==$i && $num[4]==$i && $num[5]==$i && $num[6]==$i && $num[7]==$i && $num[8]==$i)
								{
									$isCpfValid=false;
									break;
								}
						}
				}
			//Etapa 4: Calcula e compara o primeiro dÃ­gito verificador.
			if(!isset($isCpfValid))
				{
					$j=10;
					for($i=0; $i<9; $i++)
						{
							$multiplica[$i]=$num[$i]*$j;
							$j--;
						}
					$soma = array_sum($multiplica);	
					$resto = $soma%11;			
					if($resto<2)
						{
							$dg=0;
						}
					else
						{
							$dg=11-$resto;
						}
					if($dg!=$num[9])
						{
							$isCpfValid=false;
						}
				}
			//Etapa 5: Calcula e compara o segundo dÃ­gito verificador.
			if(!isset($isCpfValid))
				{
					$j=11;
					for($i=0; $i<10; $i++)
						{
							$multiplica[$i]=$num[$i]*$j;
							$j--;
						}
					$soma = array_sum($multiplica);
					$resto = $soma%11;
					if($resto<2)
						{
							$dg=0;
						}
					else
						{
							$dg=11-$resto;
						}
					if($dg!=$num[10])
						{
							$isCpfValid=false;
						}
					else
						{
							$isCpfValid=true;
						}
				}
			//Trecho usado para depurar erros.
			/*
			if($isCpfValid==true)
				{
					echo "<font color=\"GREEN\">Cpf Ã© VÃ¡lido</font>";
				}
			if($isCpfValid==false)
				{
					echo "<font color=\"RED\">Cpf InvÃ¡lido</font>";
				}
			*/
			//Etapa 6: Retorna o Resultado em um valor booleano.
			return $isCpfValid;					
		}
?>
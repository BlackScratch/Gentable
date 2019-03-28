<?php
$min1= 0;
		$min2 = 5;
 
	  // Количество картинок для публикации
	  $iCount = 24;

	  //интвервал для разнесения по минутам
	  $iInt1=2;
	  $iInt2=6;
  	  $intHor = $intHor+1;
  	  $intStartMin = rand($min1, $min2);
		$intMinuteToDraw=$inRndNow;
	  // ЦИКЛ ДЛЯ ПЕРВОГО ЧАСА
	  for($i = 0; $i < $iCount/2; $i++)
	 	{
		$inRndNow=rand($iInt1, $iInt2);
  		
  	
   		//Используем встроенную функцию, по генерации случайных чисел в    заданном диапазоне
    	echo $accToDraw.'|'.'Пост'.'|'.'Путь до картинки'.'|'.$spintax->process($opis_str[0]).'|'.$intHor.':'.$intMinuteToDraw.':'.rand(10,59).'|'.'Тут комментарий'.'|'.'Фулл'.'|'.'Гео'.'|'.'Комменты'.'|'.'Ответы'.'<br/>';
    	$intMinuteToDraw = $intMinuteToDraw + $inRndNow;
  		} 


  		$intstrNum++;
 		echo "конец первого цикла для аккаунта <br/>";
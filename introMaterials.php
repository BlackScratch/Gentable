<?php
//Данный файл идет до цикла формирования аккаунтов
//ВХОДНЫЕ ДАННЫЕ
include 'spintax.php'; //подключаем модуль спинтакс
$spintax = new Spintax();// создаем класс спинтакс
 //час для старта
  $intHor = 20;
  //вводим диапазон минут к ним будут прибавляться другие значения.
  $min1= 0;
  $min2 = 5;
 
  // Количество картинок для публикации
  $iCount = 24;

  //интвервал для разнесения по минутам
  $iInt1=2;
  $iInt2=6;

  // Генерируем стартовую точку отправления
  $intStartMin = rand($min1, $min2);
  //Вводим количество аккаунтов
  $intAccCol = 10;
  //Открываем текстовые списки
  $input = file_get_contents("accs.txt");
  $accounts_str = explode("\n", $input); 
  $intstrNum = 0;

  //Подключаем список описания
  $input2 = file_get_contents("opis.txt");
	$opis_str = explode("\n", $input2);
 $intNumOfOpis = count($opis_str);
 	echo "Стартовая минута у нас будет  $intStartMin <br/>" ;
	$intstrNum = 0;
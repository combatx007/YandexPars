<?php
require_once('auth.php');
require_once('simple_html_dom.php'); //здесь подключаю библиотеку simplhtmldom
$html = file_get_html('http://www.yandex.ru/'); // парсим главную яндекса
$text=$html->find('.b-news__tabs,.b-news__news'); //при помощи метода find отбираем текст и данных классов
$e=implode(" ",$text); //объединяем в строку
file_put_contents("parse.txt","$e"); //сохраняем в файл parse.txt
echo $e; //выводим полученные блоки
$image=$html->find('img[width]'); //парсим картинки
echo "Три картинки с главной яндекса:<br>";
$k=0;
foreach ($image as $img) //поочередно выводим каждую картинку одна под другой
{
	$k++;
	echo "Картинка яндекса $k : <br>";
	echo "$img<br>";
}
?>
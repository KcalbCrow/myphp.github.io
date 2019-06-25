
<meta charset="utf-8"> 
<?php
error_reporting( E_ERROR );   	
if (isset($_POST['name1']))			{$name1			= $_POST['name1'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['tel1']))			{$tel1			= $_POST['tel1'];		if ($tel1 == '')	{unset($tel1);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}

if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
$address="iremphon29@gmail.com";
$note_text="Тема : $urok \r\nИмя : $name1 \r\n Телефон : $tel1\r\n Дополнительная информация : $text";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$name1</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро перезвонят на номер <b> $tel1</b>.</p>";
}

?>
<?php 
// First homework Нумерация книг
$books = array("451° по Фаренгейту","Шантарам",
"1984","Мастер и Маргарита",
"Три товарища","Портрет Дориана Грея",
"Вино из одуванчиков","Цветы для Элджернона",
"Над пропастью во ржи","Маленький
принц",     "Анна Каренина","Сто лет одиночества",     "Тень горы", "Атлант
расправил плечи");  
$bookslength = count($books);
echo ("<ol>");
for ($i = 0; $i < $bookslength; $i++){
 echo ("<li> $books[$i] </li>");
}
echo ("</ol>");	

echo ("</br></br></br></br>");
//Second Homework Вывод книга-писатель

$booksAuthor = array(
	"Рей Брэдбери" => "451° по Фаренгейту",
	"Грегори Дэвид Робертс" => "Шантарам",
	"Джордж Оруэлл" => "1984",
	"Михаил Афанасьевич Булгаков" => "Мастер и Маргарита",
	"Три товарища" => "Эрих Мария Ремарк",
	"Оскар Уайльд" => "Портрет Дориана Грея",
	"Рей Брэдбери" => "Вино из одуванчиков",
	"Даниел Киз" => "Цветы для Элджернона",
	"Джером Д. Сэлинджер" => "Над пропастью во ржи",
	"Антуан де Сент-Экзюпери" => "Маленький принц",
	"Лев Толстой" => "Анна Каренина",
	"Габриэль Гарсиа Маркес" => "Сто лет одиночества",
	"Грегори Дэвид Робертс	" => "Тень горы",
	"Айн Рэнд" => "Атлант расправил плечи",
);
	echo ("<ol>");
		foreach ($booksAuthor as $author => $book) {
		echo("<li><strong>$author:</strong><br>$book</li>");
	}
	echo ("</ol>");	

	echo ("</br></br></br></br>");
// Третье домашнее задание, дни недели

	function hiday($name,$day){
 	if($day < 6 && $day>=0){
 			echo("Привет $name! Хорошего и продуктивного рабочего дня!");
 		}
 		elseif ($day>5 && $day<8) {
 			echo ("Привет $name! Желаю вам хорошо отдохнуть в этот день!");
 		}
 		else {
 			echo("Насколько мне известно,$name, такого дня нет");
 		}
	}
echo ("Рабочий день: <br>");
hiday(Евгений, 1);

echo ("<br>Выходной день: <br>");
hiday(John, 7);

echo ("<br>Рабочий день: <br>");
hiday(Bob, 8);
echo $_GET['color'];
?>
	
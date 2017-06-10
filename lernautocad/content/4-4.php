<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="ru">
<link rel="stylesheet" type="text/css" href="css\1.css">
  <title>Выполнить задания для самопроверки</title>
 </head>
<body >
<div class="side">
      <ul class="menu">
        <li><a href="../index.php">Главная страница</a></li>
        <li class="menu__list"><a href="#">Построение простых графических примитивов</a>
          <ul class="menu__drop">
            <li><a href="1.php">Понятие графических примитивов</a></li>
            <li><a href="4.php">Построение точек</a></li>
            <li><a href="4-1.php">Построение отрезков</a></li>
            <li><a href="4-2.php">Построение прямых</a></li>
            <li><a href="4-3.php">Построение прямоугольников</a></li>
            <li><a href="2.php">Построение многоугольников</a></li>
            <li><a href="3.php">Построение окружностей</a></li>
            <li><a href="3-1.php">Построение дуг</a></li>
            <li><a href="3-2.php">Построение эллипсов</a></li>
            <li><a href="3-3.php">Задание 1</a></li>
            <li><a href="4-4.php">Задание 2</a></li>
            <li><a href="10.php">Тест по теме &quot;Постраение простых примитивов&quot;</a></li>
          </ul></li>
        <li class="menu__list"><a href="#">Построение сложных примитивов</a>
          <ul class="menu__drop">
            <li><a href="5.php">Построение сплайнов</a></li>
                      <li><a href="5-1.php">Построение полилиний</a></li>
                      <li><a href="5-2.php">Построение мультилиний</a></li>
                      <li><a href="11.php">Тест по теме &quot;Построение сложных примитивов&quot;</a></li>
          </ul>
        </li>
        <li class="menu__list"><a href="#">Редактирование и изменение объектов</a>
          <ul class="menu__drop">
           <li><a href="6.php">Удаление объектов. Отмена действий</a></li>
                      <li><a href="9.php">Назначение команд редактирования</a></li>
                      <li><a href="7.php">Копирование</a></li>
                      <li><a href="7-1.php">Перемещение</a></li>
                      <li><a href="7-2.php">Поворот</a></li>
                      <li><a href="7-3.php">Зеркальное отображение</a></li>           
                      <li><a href="8.php">Создание массивов</a></li>
                      <li><a href="8-1.php">Масштабирование</a></li>
                      <li><a href="8-2.php">Обрезка</a></li>
                      <li><a href="8-3.php">Фаска</a></li>
                      <li><a href="8-4.php">Сопряжение</a></li>
                      <li><a href="7-4.php">Задания</a></li>
                      <li><a href="12.php">Тест по теме &quot;Редактирование и изменению обьектов&quot;</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="l1"><img src="images\autocad-u150-fr.png"></div>
<div id="head"><p>Электронное учебное пособие по программе AutoCAD</p></div>

<content><div><p id="u254753">&nbsp;</p>
    <p align="center"> <b>Построение простых графических примитивов</b></p>
     <p align="center"><b>(точек, отрезков, прямых, прямоугольников)</b></p>
     <p>&nbsp;</p>
      <p align="center"><b>Выполнить задания для самопроверки</b></p>
     <p>&nbsp;</p>
     <p>1. Вычертить отрезок длиной 180 <img src="images\u217241-a-grad.png"></p>
     <p>&nbsp;</p>
<p>Поделить отрезок на 3 равных сегмента <img src="images\image009.png"></p>
     <p>&nbsp;</p>
     <p>2. Соединить отрезками следующие точки:</p>
     <p>(50,30),(70,80),(100,90),(120,40),(160,30),</p>
     <p>(160,20),(70,20),(70,30),(60,30),(60,20), (50,30).</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p align="center"><img src="images\image010.png"></p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>3. Построить следующую фигуру по указанным размерам. Используйте при построении методы задания абсолютных прямоугольных координат, относительных прямоугольных координат, <u>абсолютных полярных координат</u>.</p>
     <p>Задание абсолютных полярных координат производится путем ввода числового значения расстояния и угла <img src="images\11.jpg"> в плоскости XY, разделенных символом “◄”. Угол задается&nbsp; в градусах против часовой стрелки. Значение 0 соответствует положительному направлению по оси ОХ.</p>
     <p>Пример: Расстояние=50 мм; угол <img src="images\12.jpg">.</p>
     <p>Ввод координат в командную строку будет выглядеть так: 50◄30.</p>
     <p>&nbsp;</p>
     <p align="center"><img src="images\13.jpg"></p>
           <p><br><br> Результат выполнения задания должен выглядеть вот так:</p>
           <br><br> <p align="center"><img src="images\14.jpg"></p>
     <br><br>
     <center><a href="3-2.php">◄ Предыдущая</a>&nbsp;&nbsp;&nbsp;<a href="10.php"> Следующая ►</a></center>
      <p>&nbsp;</p></div></content>
</body>
</html>
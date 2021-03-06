<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="ru">
<link rel="stylesheet" type="text/css" href="css\1.css">
  <title>Построение Прямоугольника</title>
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
      <p align="center"><b>Построение простых графических примитивов</b></p>
     <p align="center">(точек, отрезков, прямых, прямоугольников)</p>
     <p>&nbsp;</p>
       <p align="center"><b>Построение Прямоугольника</b></p>
     <p>&nbsp;</p>
     <p><b>Прямоугольник </b>можно построить с помощью команды <b>Отрезок</b>, поочередно указав координаты каждого из четырех углов, а можно воспользоваться командой <b>Прямоугольник</b>.</p>
     <p>Команда&nbsp; <b>ПРЯМОУГОЛЬНИК</b>&nbsp; вызывается:</p>
     <p>1) из меню<b> Рисование ► Прямоугольник</b></p>
     <p>2) щелчок по пиктограмме&nbsp;<img src="images\10.jpg">&nbsp; панели инструментов <b>Рисование</b></p>
     <p>3) ввод команды в командную строку <b>Прямоугольник</b> и нажать клавишу <b>Enter</b></p>
     <p>&nbsp;</p>
     <p>1. Введите команду <b>Прямоугольник</b>. В командной строке появится запрос: <b>Первый угол или [Фаска Уровень Сопряжение Высота Ширина]</b>: .</p>
     <p>2. По умолчанию предлагается задать координаты двух диагонально противоположных углов. Постройте прямоугольник наиболее простым, предлагаемым по умолчанию способом — по двум противоположным углам.</p>
     <p>3. Введите координату левого нижнего угла фигуры, например <b>200,50</b>, и нажмите клавишу <b>Enter</b>. Программа попросит ввести координаты второго, диагонально противоположного угла.</p>
     <p>4. Введите координаты правого верхнего угла, например, 600,100, и нажмите клавишу <b>Enter</b>.</p>
     <p>5. Прямоугольник с размерами <b>400</b> на <b>50</b> мм построен.</p>
     <p>&nbsp;</p>
     <p>&nbsp;Для построения <b>Прямоугольника</b> можно также воспользоваться ключами на соответствующий запрос в командной строке, например ключ <b>Размеры</b> – используется для построения прямоугольника по значению длины и ширины прямоугольника.</p>
     <p>Следует заметить, координаты углов прямоугольника удобно указывать и мышью. Но для этого следует включить систему привязок.</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <center><a href="4-2.php">◄ Предыдущая</a>&nbsp;&nbsp;&nbsp;<a href="2.php"> Следующая ►</a></center>s
      <p>&nbsp;</p></div></content>
</body>
</html>

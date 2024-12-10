<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
addTodoList("Belajar MySql");
addTodoList("Belajar Laravel");

showTodoList();

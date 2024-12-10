<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
addTodoList("Belajar MySql");
addTodoList("Belajar Laravel");

showTodoList();

viewRemoveTodoList();

showTodoList();
<?php

/**
* Menambah todo ke list
 */
function addTodoList (strring $todo)
{
    global $todoList;

    $number = sizeof ($todoList) + 1;

    $todoList[$number] = $todo;
}
<?php

function ada_ada_saja( ) {
    return "teksi ini berasal dari fungsi: ".__FUNCTION__;
}

echo "teks ini berada di baris :".__LINE__."<br>";
echo "Alamat lengkap file ini adalah :".__FILE__."<br>";
echo "File ini berada di folder:".__DIR__."<br>";
echo ada_ada_saja()."<br>";
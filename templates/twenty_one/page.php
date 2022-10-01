<?php

$Route->route("form", function () {
    return view("form.php");
});
$data = $Route
    ->select("contacts")
    ->where("id", 1)
    ->where("id", 2)
    ->get();
echo var_dump($data);

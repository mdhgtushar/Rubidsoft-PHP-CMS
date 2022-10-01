<?php
$getModule->check("teachers");


$getModule->route("", function () {
  global $getModule;
  $rows = [
    "id" => "ID",
    "name" => "Full Name",
    "email" => "Email",
    "title1" => "Title 1",
    "title2" => "Title 2",
    "education" => "Education",
    "phone" => "Phone",
    "address" => "Address",
  ];
  $getModule->index("teachers", $rows);
});


$getModule->route("add", function () {
  global $getModule;
  $rows = [
    ["name", "text", "Full Name"],
    ["email", "email", "Email"],
    ["title1", "text", "Title 1"],
    ["title2", "text", "Title 2"],
    ["education", "text", "Education"],
    ["phone", "phone", "Phone"],
    ["address", "text", "Address"],
  ];
  $getModule->add("teachers", $rows);
});

$getModule->route("edit", function () {
  global $getModule;
  $rows = [
    ["name", "text", "Full Name"],
    ["email", "email", "Email"],
    ["title1", "text", "Title 1"],
    ["title2", "text", "Title 2"],
    ["education", "text", "Education"],
    ["phone", "phone", "Phone"],
    ["address", "text", "Address"],
  ];
  $getModule->edit("teachers", $rows);
});

<?php

$getModule->check("contacts");

$getModule->route("", function () {
  global $getModule;
  $rows = [
    "id" => "ID",
    "name" => "Full Name",
    "email" => "Email",
    "subject" => "Subject",
    "description" => "Message",
  ];
  $getModule->index("contacts", $rows);
});

$getModule->route("add", function () {
  global $getModule;
  $rows = [
    ["name", "text", "Full Name"],
    ["email", "email", "Email"],
    ["subject", "text", "Subject"],
    ["description", "textarea", "Message"],
  ];
  $getModule->add("contacts", $rows);
});

$getModule->route("edit", function () {
  global $getModule;
  $rows = [
    ["name", "text", "Full Name"],
    ["email", "email", "Email"],
    ["subject", "text", "Subject"],
    ["description", "textarea", "Message"],
  ];
  $getModule->edit("contacts", $rows);
});

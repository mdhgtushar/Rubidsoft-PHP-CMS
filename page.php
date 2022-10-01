<?php
include_once("init.php");
function page_body($page)
{
   $client_template = "templates/" . get_settings("client_template");
   if ($page) {
      //$page_body = explode("," , $page["body"]);
      $page_id = $page["id"];
      $page_body = sql_select_data("page_blocks", "page_id='$page_id' AND theme_name='$client_template'");
      foreach ($page_body as $body) {
         include($client_template . "/blocks/" . $body["block_name"] . ".php");
      }
   }
}

class Page
{
   public $query;
   public $dataarr = [];
   function route($route, $callback)
   {
      global $params;
      function view($file)
      {
         global $init;
         include($init->frontend_template("view/" . $file));
      }
      if (isset($params[0]) && $params[0] == $route)
         $callback();
   }
   public function select($table)
   {
      $this->query .=  "Select * from " . $table;
      return $this;
   }
   public function where($name, $value)
   {
      $this->query .= " where $name = '$value'";
      return $this;
   }
   public function get()
   {

      include("admin/models/connect.php");
      $data = mysqli_query($connect, $this->query);
      if ($data) {
         if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_assoc($data))
               $this->dataarr[] = $row;
         }
      }

      return $this->dataarr;
   }
}

$Route = new Page();

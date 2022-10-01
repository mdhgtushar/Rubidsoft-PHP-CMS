<?php
if(isset($_POST['update'])){
    $set = " ";
    foreach($footer_block[0]["fields"] as $data){
        $dataSet = $_POST[$data];
        if(sql_select_data("site_setup", "title='$data'")){
            sql_update_data("site_setup", "body='$dataSet'", "title='$data'");
        }else{
            sql_insert_data("site_setup", "body,title", "'$dataSet','$data'");
        }
    }
}

?>
        <form class="container max-w-2xl mx-auto shadow-md md:w-3/4 m-4 p-10" method="post" action="">
<?php foreach($footer_block[0]["fields"] as $data){?>
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
        <?php echo $data?>
        </label>
      </div>
      <div class="md:w-2/3">
        <input name="<?php echo $data?>" value="<?php echo get_site_setting($data);?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
      </div>
    </div>
    <hr>
    <br>
<?php }?>



    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button type="submit"  name="update" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
          SUBMIT
        </button>
      </div>
    </div>
  </form>
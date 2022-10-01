<div class="p-5">
    <div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label inline-block mb-2 text-gray-700 text-xl">Page Title</label>
            <input
                type="text"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="exampleFormControlInput2"
                placeholder="Enter Page Title"
                value="<?php echo  $page["title"];?>"
            />
        </div>
    </div>
</div>



<section class="mb-20 text-gray-700 px-4">


  <div class="grid md:grid-cols-2 gap-12">
    <div class="mb-0 md:mb-0">
    <h3 class="text-2xl text-gray-700 font-bold mb-6 ml-3">Pages Blocks</h3>

<ol class="border-l-2 border-purple-600 ml-4">
  <?php 
  $page_id = $page["id"];
  $page_body = sql_select_data("page_blocks", "page_id='$page_id' AND theme_name='$client_template'");
  $content_block_array = [];
  if(isset($content_block))
  foreach($content_block as $key => $content){
    array_push($content_block_array, $content["title"]);
  }
  if($page_body)
  foreach($page_body as $key => $block){
    

    ?>
  <li>
    
  <div class="md:flex flex-start">
      <div class="bg-purple-600 w-6 h-6 flex items-center text-white justify-center rounded-full -ml-3">
        <?php echo $key+1?>
      </div>
      
    </div>
<div class="bg-<?php echo in_array($block, $content_block_array) ? "gray" : "red"?>-600 dark:bg-gray-800 ml-4">
    <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg bg-indigo-800 dark:bg-black">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path>
                                </svg>
                </span>
                <p class="ml-3 font-medium text-white truncate">
                    <span class="md:hidden">
                        This site use cookies!
                    </span>
                    <span class="hidden md:inline">
                    <?php echo $block["title"];?> || <?php echo $block["block_name"];?>
                    </span>
                </p>
            </div>
            
            <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto mr-2">
            <?php 
  $block_name = $block['block_name'];
  $client_template_setup = get_settings("client_template");
  $lists = sql_select_data("widgeds", "block_name='$block_name' AND theme_name='$client_template_setup'");
  if($lists){
  ?>
<!-- sm -->
<select class="select select-bordered select-sm w-full max-w-xs">
 <?php
  foreach($lists as $list){
  ?>
  <option><?php echo $list["title"];?></option>
  <?php }?>
</select>
<?php }?>
            </div>
            <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
            <form method="post">
          <input type="hidden" value="<?php echo $block["id"];?>" name="blockTitle">
        <?php if(in_array($block["block_name"], $page_body)){?>
        <input type="submit" name="hide" value="<?php echo in_array($block, $content_block_array) ? "Hide" : "Delete"?>" class="cursor-pointer inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" >
          <?php }else{ ?>
        <input type="submit" value="Show" name="show" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">
            <?php }?> 
        <input type="submit" name="delete" value="Delete" class="cursor-pointer inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" >

          </form>
            </div>
            <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
            <a href="#" onclick="loadDoc()" class="inline-block px-4 py-1.5 bg-white text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">
                    Edit
                </a>
            </div>
        </div>
    </div>
</div>

  </li>
  <?php }?>
</ol>

  
<div class="flex flex-wrap items-center gap-4 shadow-md p-3">
  <h3>Add New Block</h3>
  <?php foreach($content_block_array as $block){?>
    <form action="" method="post">
      <input type="hidden" name="block_name" value="<?php echo $block;?>">
    <button type="submit" name="submit_block" class="btn gap-2 bg-gray-600">
    <?php echo $block;?>
  <div class="badge">+</div>
</button>
  </form>
    <?php }?>
</div>
    </div>
    <div class="mb-0">
      
    <h3 class="text-2xl text-gray-700 font-bold mb-6 ml-3">Pages Blocks</h3>
<div class="right-0 shadow-md bg-white p-3">
  
<div class="flex flex-wrap items-center gap-4">
  <?php foreach($content_block_array as $block){?>
    <span class="px-4 py-2  text-base text-black-600  bg-gray-200 ">
        <?php echo $block;?>
    </span>
    <?php }?>
</div>

  <div id="pageBlockEdit">
  </div>
</div>
  </div>
</section>


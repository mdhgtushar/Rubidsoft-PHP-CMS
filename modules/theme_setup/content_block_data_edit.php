<div class="mx-auto px-4 sm:px-8">
  <a href="../">
<button class="flex items-center px-6 py-2  transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2304 1792" class="mr-4" xmlns="http://www.w3.org/2000/svg">
        <path d="M1728 448l-384 704h768zm-1280 0l-384 704h768zm821-192q-14 40-45.5 71.5t-71.5 45.5v1291h608q14 0 23 9t9 23v64q0 14-9 23t-23 9h-1344q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h608v-1291q-40-14-71.5-45.5t-45.5-71.5h-491q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h491q21-57 70-92.5t111-35.5 111 35.5 70 92.5h491q14 0 23 9t9 23v64q0 14-9 23t-23 9h-491zm-181 16q33 0 56.5-23.5t23.5-56.5-23.5-56.5-56.5-23.5-56.5 23.5-23.5 56.5 23.5 56.5 56.5 23.5zm1088 880q0 73-46.5 131t-117.5 91-144.5 49.5-139.5 16.5-139.5-16.5-144.5-49.5-117.5-91-46.5-131q0-11 35-81t92-174.5 107-195.5 102-184 56-100q18-33 56-33t56 33q4 7 56 100t102 184 107 195.5 92 174.5 35 81zm-1280 0q0 73-46.5 131t-117.5 91-144.5 49.5-139.5 16.5-139.5-16.5-144.5-49.5-117.5-91-46.5-131q0-11 35-81t92-174.5 107-195.5 102-184 56-100q18-33 56-33t56 33q4 7 56 100t102 184 107 195.5 92 174.5 35 81z">
        </path>
    </svg>
    View List
</button></a>
        </div>

<br><br>

        <form class="container max-w-2xl mx-auto shadow-md md:w-3/4 m-4 p-10" method="post" action="">


        <?php foreach($rows as $row){?>
<?php
              $block_name = $row[0];
              $widged_id = $params[6];
              $data = sql_select_data_first($dataTable, "field_name='$block_name' AND widged_id=$widged_id");
  if(!$data) $data = ["body" => ""]
              ?>
        
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 px-4" for="inline-full-name">
                <?php echo $row[2]?>
                </label>
              </div>
              <?php if($row[1] == "textarea"){?>
              <div class="md:w-2/3">
  <textarea name="<?php echo $block_name?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="<?php echo $row[0]?>"><?php echo $data[$row[0]];?></textarea>
  </div> <?php }else{?>
              <div class="md:w-2/3">

              
                <input name="<?php echo $block_name?>" value="<?php echo $data["body"];?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
              </div>
            <?php }?>
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
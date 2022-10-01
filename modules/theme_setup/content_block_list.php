<br>
<?php
if(isset($params[4])){
  include("content_block_data.php");
  exit;
}
?>
<div class="px-8 mx-auto ">

<table class="table p-4 bg-white w-full shadow rounded-lg">
    <thead>
        <tr>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                #
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Block Name
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Total Create
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                action
            </th>
        </tr>
    </thead>
    <tbody>
  <?php 
  
  foreach($content_block as $key => $block){?>
        <tr class="text-gray-700">
            <td class="border-b-2 p-4 dark:border-dark-5">
                1
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                <?php echo $block["title"]?>
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                -
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
            <a class="inline-block px-3 py-1 border-2 border-blue-400 text-blue-400 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="content/<?php echo $key?>">Enter</a>
            </td>
        </tr>
    <?php }?>
    </tbody>
</table>

</div>
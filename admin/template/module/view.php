<?php if (isset($_POST["delete"])) {
    $id = $_POST['id'];
    sql_delete_data($dataTable, "id=$id");
}


if (isset($where)) {
    $datas = sql_select_data($dataTable, $where);
} else {
    $datas = $DBSelect->table($dataTable)->get();
}
?>
<?php
?>
<div class="mx-auto px-4 sm:px-8">
    <a href="<?php echo $addUrl ?>">
        <button class="flex items-center px-6 py-2  transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2304 1792" class="mr-4" xmlns="http://www.w3.org/2000/svg">
                <path d="M1728 448l-384 704h768zm-1280 0l-384 704h768zm821-192q-14 40-45.5 71.5t-71.5 45.5v1291h608q14 0 23 9t9 23v64q0 14-9 23t-23 9h-1344q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h608v-1291q-40-14-71.5-45.5t-45.5-71.5h-491q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h491q21-57 70-92.5t111-35.5 111 35.5 70 92.5h491q14 0 23 9t9 23v64q0 14-9 23t-23 9h-491zm-181 16q33 0 56.5-23.5t23.5-56.5-23.5-56.5-56.5-23.5-56.5 23.5-23.5 56.5 23.5 56.5 56.5 23.5zm1088 880q0 73-46.5 131t-117.5 91-144.5 49.5-139.5 16.5-139.5-16.5-144.5-49.5-117.5-91-46.5-131q0-11 35-81t92-174.5 107-195.5 102-184 56-100q18-33 56-33t56 33q4 7 56 100t102 184 107 195.5 92 174.5 35 81zm-1280 0q0 73-46.5 131t-117.5 91-144.5 49.5-139.5 16.5-139.5-16.5-144.5-49.5-117.5-91-46.5-131q0-11 35-81t92-174.5 107-195.5 102-184 56-100q18-33 56-33t56 33q4 7 56 100t102 184 107 195.5 92 174.5 35 81z">
                </path>
            </svg>
            Create data
        </button></a>
</div>

<?php if ($datas) { ?>
    <div class="mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Users
                </h2>
                <div class="text-end">
                    <form class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                        <div class=" relative ">
                            <input type="text" id="&quot;form-subscribe-Filter" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="name" />
                        </div>
                        <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                            Filter
                        </button>
                    </form>
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <?php foreach ($rows as $key => $row) { ?>
                                    <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                        <?php echo $row; ?>
                                    </th>
                                <?php } ?>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($datas as $post) { ?>

                                <tr>
                                    <?php foreach ($rows as $key => $row) { ?>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <?php echo $post[$key]; ?>
                                            </p>
                                        </td>
                                    <?php } ?>



                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-48">
                                        <?php if ($deleteAble) {
                                            if (isset($_GET['deleteId'])) {
                                                $id = $_GET['deleteId'];
                                                sql_delete_data($dataTable, "id='$id'");
                                            }
                                        ?>
                                            <label for="my-modal<?php echo $post['id']; ?>" class="cursor-pointer modal-button inline-block px-3 py-1 border-2 border-red-400 text-red-400 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Delete</label>
                                        <?php } ?>
                                        <?php if ($editAble) { ?>
                                            <a class="inline-block px-3 py-1 border-2 border-blue-400 text-blue-400 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="<?php echo $editUrl; ?>/<?php echo $post['id']; ?>">Edit</a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                <!-- Put this part before </body> tag -->
                                <input type="checkbox" id="my-modal<?php echo $post['id']; ?>" class="modal-toggle" />
                                <div class="modal">
                                    <div class="modal-box">
                                        <h3 class="font-bold text-lg text-red-400">Are You Sure? You Want To Delete? [id = <?php echo $post['id']; ?>]</h3>
                                        <p class="py-4">
                                            please click Confirm delete button for permanent delete
                                        </p>
                                        <div class="modal-action">
                                            <label for="my-modal<?php echo $post['id']; ?>" class="btn">Cancel</label>

                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                                <input type="submit" name="delete" class="btn bg-red-400" value="Confirm Delete!">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>


                        </tbody>
                    </table>



                    <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                        <div class="flex items-center">
                            <button type="button" class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                1
                            </button>
                            <button type="button" class="w-full p-4 border text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>

    <br>
    <div class="mx-auto px-4 sm:px-8">
        <div class="bg-yellow-200 border-yellow-600 text-yellow-600 border-l-4 p-4" role="alert">
            <p class="font-bold">
                No Data Found
            </p>
            <p>
                Please Create One
            </p>
        </div>

    </div>
<?php } ?>
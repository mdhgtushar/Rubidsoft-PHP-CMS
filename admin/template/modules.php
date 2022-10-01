<style type="text/css">
	.appbox {
		width: 33.33%;
		margin: 0;
		float: left;
	}

	.app {
		width: 99%;
		height: auto;
	}

	.hire {
		color: #000 !important;
	}
</style>
<section>



	<div class="border-bottom">
		<div class="titletext">
			<h2>Modules List</h2>
			<h3>You Can Activate and Deactivate the module</h3>
		</div>
	</div>



	<div style="overflow: hidden;">


		<?php
		if (isset($_GET['action'])) {
			$action = $_GET['action'];
			if ($action == "install") {
				install_dbtbl_setup();
			} else {
				uninstall_dbtbl_setup();
			}
		}
		foreach ($dataArray as $data) {
			$moduleURI = $data["module_menu"]["moduleURI"];
			$install = $DBSelect->sql_select_data_first("modules", "name='$moduleURI' AND status=1");
		?>
			<div class="appbox">
				<div class="app">
					<div class="border-bottom">
						<div class="titletext">
							<h3>Addon Module</h3>
						</div>
					</div>

					<div class="appdesc">
						<br>
						<h4><?php echo $data["module_config"]["name"]; ?></h4>
						<p><?php echo $data["module_config"]["description"]; ?></p>
						<br>


						<form action="" method="post">
							<?php if (!$install) { ?>

								<input type="hidden" name="moduleName" value="<?php echo $data["module_menu"]["moduleURI"]; ?>">
								<input type="submit" value="Activate" name="activate" class="cursor-pointer hover:border-blue-500 hover:text-blue-500 hover:bg-blue-100 hover:to-blue-100 w-full font-thin uppercase text-black-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-gray-100 border-r-4 border-gray-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-black-500">
							<?php } else { ?>
								<input type="hidden" name="moduleName" value="<?php echo $data["module_menu"]["moduleURI"]; ?>">
								<input type="submit" value="Deactivate" name="deactivate" class="cursor-pointer w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500">
							<?php } ?>
						</form>



						<br>
					</div>
				</div>
			</div>
		<?php } ?>





	</div>












</section>
</body>

</html>
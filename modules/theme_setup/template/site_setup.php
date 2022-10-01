<style type="text/css">
.home{color: #000!important;}
.app{height: auto;width: 32%;}
</style>
<section>

<section id="project-profile">
	
<div class="border-bottom">
<div class="titletext">
<h2>Frontend Templates</h2>
<h3>This is demo frontend template. Only one can active at one time</h3>
</div>
<div class="titlebutton">
<a href="hireme.php" class="button">Hire me</a>
</div>
</div>

<div class="allapps border-bottom" style="padding: 0">
<?php foreach($client_template_list as $cl_temps){
	if($client_template == "templates/".$cl_temps){
		$activeted = true;
	}else{
		$activeted = false;
	}
	?>
<div class="app">
<div class="appicon">
	<img src="<?php echo $init->client_template($cl_temps."/screenshot.jpg") ;?>">
</div>
<div class="appdesc">
<h3><?php echo $cl_temps;?></h3>
<p>Template</p>
</div>
<?php if($activeted){?>
<div class="flex items-center justify-between gap-4">
                        <button type="button" class="w-1/2 font-thin uppercase text-blue-500 flex items-center p-3 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-l-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-l-4 border-blue-500">
                            Site Settings
                        </button>
                        <a type="button" href="<?php echo $site_url;?>" target="blank"class="w-1/2 font-thin uppercase text-blue-500 flex items-center p-3 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-l-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-l-4 border-blue-500">
                            View Site
</a>
                    </div>
<?php }else{ ?>
<form action="" method="post">
<input type="hidden" name="templatename" value="<?php echo $cl_temps;?>">
<input type="submit" value="Activate" name="activate" 
	class="cursor-pointer w-full font-thin uppercase text-black flex items-center p-3 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-gray-100 border-l-4 border-gray-500 dark:from-gray-700 dark:to-gray-800 border-l-4 border-gray-500"
	>
</form>
<?php }?>
<br>
</div>
<?php }?>
</div>
</section>











</section>
</body>
</html>
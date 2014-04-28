<?php
	$wage = array(
		"marketdept"=>array(
			array(1,"Mr.gao","manager",5000),
			array(2,"Miss.luo","member",3000),
			array(3,"Miss.feng","memeber",2400),
		),
		"productdept"=>array(
			array(1,"Mr.li","manager",5000),
			array(1,"Mr.tao",5000),
			array(1,"Mr.wu","manager",5000),
		),
		"moneydept"=>array(

		)
	);

	foreach($wage as $sector =>$table) {
		echo '<table border="1" width="600" align="center">';
		echo '<caption><h2>'.$sector.'10月份工资表</h2></caption>';
		


		echo '</table><br>';

	}
?>

<?php
	$wage = array(
		"marketdept"=>array(
			array(1,"Mr.gao","manager",5000),
			array(2,"Miss.luo","member",3000),
			array(3,"Miss.feng","memeber",2400),
		),
		"productdept"=>array(
			array(1,"Mr.li","manager",5000),
			array(2,"Mr.tao","member",2800),
			array(3,"wu","member",4000),
		),
		"moneydept"=>array(
			array(1,"Mr.lin","manager",58000),
			array(2,"Mr.li","member",51000),
			array(3,"Mr.linux","member",55000),
		)
	);

	foreach($wage as $sector =>$table) {
		echo '<table border="1" width="600" align="center">';
		echo '<caption><h2>'.$sector.'10月份工资表</h2></caption>';
		echo '<tr bgcolor="#dddddd">';		
		echo '<th>编号</th><th>姓名</th><th>职务</th><th>工资</th>';
		echo '</tr>';
		foreach($table as $row){
			echo '<tr>';
			foreach($row as $col){
				echo '<td>'.$col.'</td>';
			}
			echo '</tr>';
		}
		echo '</table><br>';

	}
?>

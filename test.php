<?php
/*	
function table($rows,$cols){
		echo '<table border="1" width="800" align="center">';
		echo '<caption>表格</caption>';
		
		
		for($j=0;$j<$rows;$j++){
			echo '<tr border="1 bgcolor="red"></tr>';
			for($i=0;$i<$cols;$i++){
			echo '<td>'.($i+1).'</td>';
			}
		}
		echo '</table>';
	}



table(10,5);
*/

function demo($sex){
	$age=30;
	echo "高老师很帅，是".$sex;
}

demo("男");

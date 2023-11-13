<tr>
			<td><?php echo $result['subjectName']; ?></td>
			<td><?php echo $result['fca']; ?></td>
			<td><?php echo $result['sca']; ?></td>
			<td><?php echo $result['exams']; ?></td>
			<td><?php  $total = $result['fca']+$result['sca']+$result['exams'];
			echo $total; ?></td>
			<td></td>
			<td><?php 
				switch ($total) {
					case $total >= 70:
						$grade = "a";
						break;
				case $total < 70:
						$grade = "b";
						break;
				case $total <= 60:
						$grade = "c";
						break;

				case $total <= 59:
						$grade = "d";
						break;
					case $total <= 39:
						$grade = "f";
						break;
					
					default:
						$grade = " ";
						break;
				}
				echo $grade;
			 ?></td>
			<td></td>
			<td></td>
		</tr>
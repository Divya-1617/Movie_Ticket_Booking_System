 <?php
		// Fetch the next row of a result set as an associative array
		$i=0;
		while ($res = $query->fetch_assoc()) {
			echo "<tr>";
			echo" <td >".++$i."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['no']."</td>";
			echo "<td>".$res['seating']."</td>";
			echo "<td>".$res['location']."</td>";	
			echo "<td>".$res['popcorn']."</td>";
			echo "<td>".$res['soda']."</td>";
                             
				echo "</tr>";	
		}
		?>
        </table>
      </div>
</div>
    <div align="center">
      <p>&nbsp;</p>
      <button type="button" class="btn btn-dark" onClick="myFunction()">Print Report</button>
</div>
</body>
</html>

<script type="text/javascript">
function myFunction() {
    var divToPrint = document.getElementById('rpt');
    var popupWin = window.open('', '_blank');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()"><center><br><div style="color: #FFFFFF;font-family:Apple Chancery, cursive;text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #999999 0px 0px 20px, #999999 0px 0px 30px, #FF2D95 0px 0px 40px, #FF2D95 0px 0px 50px, #999999 0px 0px 75px;font-style:italic;color: #FFFFFF;"><h1 align="center"><u>User Report</u></h1></div><h3><u>All Feedback Report</u></h3>' + divToPrint.innerHTML + '</center></body></html>');
    popupWin.document.close();
}
</script>

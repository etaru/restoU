<!--Room view-->
<?php include("../header.php"); ?>

<main>
	<div class="row" class="section">
    	<div class="col s5 offset-s1">

      		<h5><b>ROOMS</b></h5>
      		<div class="divider"></div>

      		<table class="striped">
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Lunch</th>
                        <th>Diner</th>
        			</tr>
        		</thead>

        		<tbody>
        			<?php foreach ($rooms as $room) {
        				print "<tr> <td>" .  $room["name"] . "</td>";
        				print "<td>" .  $room["statusNoon"] . "</td>";
                        print "<td>" .  $room["statusEvening"] . "</td> </tr>";
        			}?>
        		</tbody>
        	</table>

</main>

<?php include("../footer.php"); ?>
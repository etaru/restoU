<!--Room view-->
<?php include("../header.php"); ?>

<main>
	<div class="row" class="container">
    	<div class="col s5 offset-s1">

      		<h5><b>ROOMS</b></h5>
      		<div class="divider"></div>

      		<table class="striped">
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Lunch</th>
        			</tr>
        		</thead>

        		<tbody>
        			<?php foreach ($rooms as $room) {
        				print "<tr> <td>" .  $room["name"] . "</td>";
        				print "<td>" .  $room["statusNoon"] . "</td></tr>";
        			}?>
        		</tbody>
        	</table>

        </div>

    </div>

</main>

<?php include("../footer.php"); ?>
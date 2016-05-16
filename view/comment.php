<!--Comment view-->
<?php include("../header.php"); ?>

<main>

	<div>

		<div class="collection">
		        <table class="table table-stripped">

		        <tr>
		            <th>USER</th>
		            <th>COMMENT</th></tr>

				<?php 
				//Use the return of the Model comment for each comments 
				foreach($comments as $comment)
				{
		    		echo "<tr>
		    			<td>",$comment['comment'],"</td>
		    		  	</tr>";
		    	}  
		    	?>

		    	</table>
		    	</div>


				<?php
					//If the user is connected, he can add his comment about the candy BUT ONLY ONE comment CAN BE WRITTEN
					if (isset($_COOKIE['connected']))
					{
						
						$user = $_COOKIE['connected'];
				    	echo 
				    	"<div id='opButton'>
					    	<form class= 'navbar-form navbar-left' action='../controller/comment.php' method='POST'>
					            <input type='hidden' value='addComment' name='action'>
					            <input type='hidden' value=",$meal," name='meal'>
					            <input type='hidden' value=",$user," name='user'>
					            <input type='text' name='comment' id='comment' class='form-control' placeholder='Comment here...'>
					            <button type='submit' class='btn btn-default' >Add your comment</button>
					   		</form>
					    </div>";
				    }
				?>

		</div>

</main>

<?php include("../footer.php"); ?>
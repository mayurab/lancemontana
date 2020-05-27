<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Lance Montana</title>
  <link rel="stylesheet" href="./styles.css">
  <script  src="./scripts.js"></script>
</head>

<body>

	<!-- Sticky Header with Menu toggle button -->
	<input type="checkbox" id="menu-toggle" />
	<div class="menu-icon"><span class="site-heading">LM</span>
		<label for="menu-toggle">
			<img src="./images/menu.png" style="float:left;margin-left:20px;max-width:25px;">
		</label>
		<a href="tel:0411370174">
			<img src="./images/phone.png" style="float:right;margin-right:20px;max-width:25px;">
		</a>
	</div>
	
	<!-- Menu items -->
	<div class="slideout-sidebar">
	  <ul>
	    <li><a href="index.php">Link 1</a></li>
	    <li><a href="index.php">Link 2</a></li>
	    <li><a href="index.php">Link 3</a></li>
	    <li><a href="index.php">Link 4</a></li>
	    <li><a href="index.php">Link 5</a></li>
	  </ul>
	</div>
	
	<!-- Page Content -->
	<div class="content-container" >

		<!-- Display form element content -->
		<?php if (isset($_POST["month"])) { ?>
		<div style="background:#cdcdcd;padding:10px;margin-top:40px">
			<h3>Posted data</h3>
			<?php 
				echo "<p>Month => ".$_POST["month"]."</p>";
				echo "<p>Year => ".$_POST["year"]."</p>";
			?>
		</div>
	  	<?php } ?>
  	
		<div class="content">
			
			<!-- First Para -->
	    	<h1>Content</h1>
	    	<h2>Bold, Italic and Link elements</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Amet nisl suscipit adipiscing bibendum est ultricies integer. Adipiscing diam donec adipiscing tristique risus nec. A lacus vestibulum sed arcu non odio. Auctor eu augue ut lectus arcu bibendum at. Facilisis gravida neque convallis a. Purus semper eget duis at tellus at. Faucibus et molestie ac feugiat sed lectus.</p>

			<!-- List Numerical -->
		    <h2>List</h2>
		    <ul>
			    <li>List item 1</li>
			    <li>List item 2</li>
		    	<li>List item 3</li>
			    <li>List item 4</li>
		    </ul>
		    
		    <!-- List Alpha -->
		    <h2>Alphabetical List</h2>
		    <ol type="a">
			    <li>List item 1</li>
			    <li>List item 2</li>
			    <li>List item 3</li>
			    <li>List item 4</li>
			    
		    </ol>

		    <!-- Image blocks -->
		    <img src="./images/placeholder.png" class="cols-3">
		    <img src="./images/placeholder.png" class="cols-3">
	    	<img src="./images/placeholder.png" class="cols-3">
		    

		    <!-- Form -->
	    	<h2>Post Form</h2>
	    	<div>
	    		<form action="" method="post">

	    		    <!-- Months - Can be created using PHP Array and loop as well -->
	    		    <div class="cols-3">
		    		    <label class="control-label">Month</label>
			    		<select name="month" id="month" class="control-field">
					    	<option value="January">Jan</option>
					    	<option value="February">Feb</option>
					    	<option value="March">Mar</option>
					    	<option value="April">Apr</option>
					    	<option value="May">May</option>
					    	<option value="June">Jun</option>
					    	<option value="July">Jul</option>
					    	<option value="August">Aug</option>
					    	<option value="September">Sept</option>
					    	<option value="October">Oct</option>
					    	<option value="November">Nov</option>
					    	<option value="December">Dec</option>
					    </select>
				    </div>
				    
				    <!-- year -->
				    <div class="cols-3">
				    	<label class="control-label">Year</label>
					    <select name="year" id=year" class="control-field">
					    	<?php
						    	$start_year = date("Y"); $end_year = date("Y") - 200;
						    	for($i = $start_year; $i >= $end_year; $i--) { echo "<option value=".$i.">".$i."</option>"; } 
					    	?>
					    </select>
				    </div>
				    
				    <div class="cols-3">
				    	<input type="submit" value="Send Data" class="control-field btn">
				    </div>
				    
		    	</form>
    		</div>
  		
  		</div>

	</div>
<div class="footer"><p class="copyright">&copy;2018 Lance Montana</p></div>	
	
</body>

</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
	<title>
		
	<?php echo $title_for_layout; ?>
		
	</title>
	<?php
	
	/*for default whole page layout*/
	echo $html->css('main');
	
	/*for jQuery flash*/
	echo $javascript->link('jQuery/Datepicker/jquery-1.3.2.min');
	
	/*for typeface*/
	echo $javascript->link('typeface/typeface-0.15');
	echo $javascript->link('typeface/tahoma_regular.typeface');
	
	echo $scripts_for_layout;
		
	?>
</head>
<body bgcolor="#ffffff">
<div class="wrapper">
  <!-- Start Border-->
  <div id="border">
    <!-- Start Header -->
    <div class="header">
    	<div style="float:left; font-size:24px; font-color:black; font-weight:bold; padding: 60px 0px 0px 24px;">
    		Boss Lee
    	</div>
    	<div style="float:left; padding: 42px 0px 0px 6px;">
    		<?php
    		echo $html->image('main/Bentley.jpg', array('style' => 'width:84px; border: 0px;'));
    		?>
    	</div>
    	<br/><br/>
		<p>
			<span style="font-size: 60px; border-collapse: collapse; font-family: Stencil; color: white;">
				American&nbsp;Web&nbsp;Link
			</span>
		</p>
    </div>
    <!-- End Header -->
   <!-- Start Right Column -->
    <div id="rightcolumn">
      <!-- Start Main Content -->
      <div class="maincontent">
        <center>
        	<b><font color="red"><?php $session->flash(); ?></font></b>
        </center>
        <div class="content-top"></div>
        <div class="content-mid">

		  <?php echo $content_for_layout; ?>

				</div>
        <div class="content-bottom"></div>
      </div>
      <!-- End Main Content -->
    </div>
    <!-- End Right Column -->
  </div>
  <!-- End Border -->
  <!-- Start Footer -->
  <div id="footer">
  	<font size="2" color="white"><b>Copyright &copy; 2010 American Web Link All Rights Reserved.&nbsp;&nbsp;</b></font>
  </div>
  <!-- End Footer -->
</div>
</body>
</html>
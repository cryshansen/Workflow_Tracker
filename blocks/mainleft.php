<div class="mainleft">
	<div class="innerleft">
		<?
			if(isset($_SESSION['username'])){
				include('time.php');
				include('getprojectreport.php');
			
			}else{
			?>
				<p>Welcome to the blueBug Tracking System. You can update hours to projects currently open, update invoices and send invoices out! </p>
			<?
			}
		?>
	</div>
</div>

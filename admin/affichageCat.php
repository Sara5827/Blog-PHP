<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>
<?php 
  // include 'headerBlog.php';
  require('connexion.php'); 
?>

<?php 
            $id_article = $_GET['id_article'];
            $target = "uploads/";
            $query = ("SELECT * FROM article WHERE id_article = $id_article");
            $image_show= $conn->prepare($query);
            $image_show->execute();
            $record =$image_show->fetch(PDO::FETCH_ASSOC);
              // print_r($record);
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content ">
	<?php
		include('includes/nav.php');
	?>
       <div id="main container m-4">
			<div class="inner">
              <h1>Generic Page</h1>
              <span class="image main p-4"><img src="<?php echo $target.$record['img'];?>" alt=""  height="400px"/></span>
              <p class="p-4"><?php echo $record['contenu'];?></p>
              <div class="mb-1 text-muted p-4"><?php echo $record['date1'];?></div>
			</div>
         </div>
	</div>


<!-- ************************************Slider************************************ -->
<!-- *********************************************************************************** -->

  <!-- <?php  include 'slider.php'?> -->
    

 <!-- ************************************Commentaire************************************ -->
<!-- *********************************************************************************** -->

  <section class="d-flex container">
	<form method="POST" action="commentaire.php" class="w-50">
			<div class="input-group flex-nowrap bg-light text-dark">
			<input type="text" class="form-control m-2" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="name">
			</div>
			<div class="form-group">
			<textarea class="form-control m-2" id="exampleFormControlTextarea1" rows="4" name="commentaire"></textarea>
			</div>
			<input type="text" class="d-none" value="<?=  $id_article  ?>" name="idar">
			<div class="text-center">
			<button type="submit" class="btn btn-primary w-50" name="com">commenter</button>
			</div>
	</form>

    <form method="GET" action="supprimerCom.php" class="w-50 card ml-4 border-0">
     <div class="comment even thread-even depth-1" id="comment-193899">
		<article itemprop="comment" itemscope="" itemtype="https://schema.org/Comment">
			<header class="comment-header">
			<?php 
		$target = "uploads/";
		$query = ("SELECT * FROM commentaire where id_article = $id_article");
		$image_show= $conn-> prepare($query);
		$image_show->execute();
		while($record =$image_show->fetch(PDO::FETCH_ASSOC)):
		// print_r($record);
		?>	
				<div class="card-header m-1 d-flex flex-row justify-content-between">
					<div class="mt-2 d-flex flex-row" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
						<img alt="" src="https://www.recia.fr/wp-content/uploads/2018/10/default-avatar-300x300.png" class="rounded-circle" srcset="https://secure.gravatar.com/avatar/6885f038010769d8700177d7393d6ab1?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
						<div class="d-flex flex-column justify-content-around m-2">
							<div class="m-1">
								<span class="font-weight-bold"><?php echo $record['nickname'];?></span> 
								<span class="says">says</span>	
							</div>
							<div class="comment-content m-1" itemprop="text">
							<p><?php echo $record['contenue'];?></p>
							</div>
						</div>	
					</div>
					<div class="mt-4">
							<input type="text" class="d-none" class="m-4" value="<?=  $id_article  ?>" name="idart">
							<a href="supprimerCom.php?supp=<?= $record['id_commentaire'];?>&id_article=<?=  $id_article  ?>" name="supp"><i class="fa fa-trash-alt"></i></a>
					</div>
				</div>		
		</article>
		</div>
		<?php endwhile;?>	
    </form>
  </section>


<!--**************************************************************************************** -->
<!-- *************************************************************************************** -->

<!--*********************************Afichage de commentaire******************************* -->
<!-- *************************************************************************************** -->




 </div>
</div>

        
			

		<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
	<?php
		include('includes/footer.php');
	?>
</html>

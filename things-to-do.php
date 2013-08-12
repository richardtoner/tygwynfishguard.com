<?php include("partials/head.php"); ?>
			<!-- Start page-specific content -->
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Unfinished business!</strong> This page needs some time and love.
			</div>
			<h2>Things to Do</h2>
			<div class="row-fluid">
				<ul id="gallery-images" class="thumbnails">
					<li class="span4">
						<a href="assets/welsh_tourism_board/surfer_at_whitesands.jpg" class="thumbnail">
							<img src="assets/welsh_tourism_board/surfer_at_whitesands.jpg"/>
						</a>
					</li>
					<li class="span4">
						<a href="assets/welsh_tourism_board/st_davids_cathedral.jpg" class="thumbnail">
							<img src="assets/welsh_tourism_board/st_davids_cathedral.jpg"/>
						</a>
					</li>
					<li class="span4">
						<a href="assets/welsh_tourism_board/whitesands_bay.jpg" class="thumbnail">
							<img src="assets/welsh_tourism_board/whitesands_bay.jpg"/>
						</a>
					</li>
				</ul>
			</div>
			<?php include("partials/blueimp-gallery.html"); ?>
			<!-- End page-specific content -->
<?php include("partials/foot.php"); ?>

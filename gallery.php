<?php
// Page-specific meta data variables
$page_title = "Gallery | Ty Gwyn | Holiday Cottage in West Wales";
$meta_description = "Get a closer look at the stunning Ty Gwyn Holiday Cottage with our gallery of pictures.";
$meta_keywords = "3 bedrooms, garden, kitchen, living room, woodburner, sky tv, ty gwyn, fishguard, pembrokeshire, west wales, wales, accommodation, self-catered, holiday cottage, holiday rentals";
include("partials/head.php"); 
?>
			<!-- Start page-specific content -->
			<h2>Gallery</h2>
			<p class="lead">Welcome to our gallery! To get a closer look at the images just click on any one of them to open the full-screen view mode.</p>
			<div id="gallery-images" class="row-fluid">
				<div class="row-fluid">
					<div class="span4 gallery-image">
						<a href="assets/cottage/outside.jpg" title="Ty Gwyn is Welsh for 'White House', so it's no surprise what colour the house is!">
							<img alt="The front of Ty Gwyn holiday cottage" class="img-rounded" src="assets/cottage/thumbs/outside.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/lounge.jpg" title="The cosy lounge is a great place to relax with plenty of sofa space for the whole family.">
							<img alt="The lounge of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/lounge.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/lounge_2.jpg" title="The large plasma screen in the lounge with Sky subscription.">
							<img alt="View of the TV in the lounge of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/lounge_2.jpg"/>
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4 gallery-image">
						<a href="assets/cottage/woodburner.jpg" title="The woodburner in the lounge is perfect for keeping warm in the colder Winter months.">
							<img alt="The woodburner in the lounge of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/woodburner.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/kitchen.jpg" title="The kitchen is fully equipped with an electric oven, gas hob, fridge/freezer, double sink, washing machine, microwave and toaster.">
							<img alt="The kitchen of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/kitchen.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/kitchen_2.jpg" title="The kitchen also possesses a large traditional farmhouse table and chairs with seating for six people.">
							<img alt="The traditional farmhouse table in the kitchen of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/kitchen_2.jpg"/>
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4 gallery-image">
						<a href="assets/cottage/bedroom_1.jpg" title="The main bedroom.">
							<img alt="The main bedroom of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/bedroom_1.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/bedroom_2.jpg" title="The second double bedroom.">
							<img alt="The second double bedroom of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/bedroom_2.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/bathroom.jpg" title="The main family bathroom with a power shower and tub.">
							<img alt="The bathroom of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/bathroom.jpg"/>
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4 gallery-image">
						<a href="assets/cottage/bedroom_3_above.jpg" title="The view from the top of the crogloft in the twin room.">
							<img alt="The upper level of the crogloft in Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/bedroom_3_above.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/bedroom_3_below.jpg" title="The view from below when looking up at the crogloft in the twin room.">
							<img alt="The lower level of the crogloft in Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/bedroom_3_below.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/garden_overview.jpg" title="The garden in the spring time - a safe and secluded sun trap.">
							<img alt="The garden of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/garden_overview.jpg"/>
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4 gallery-image">
						<a href="assets/cottage/garden_blossom_tree.jpg" title="You can't really beat sitting on the decking area with some BBQ food in the summer.">
							<img alt="The blossom tree in the garden of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/garden_blossom_tree.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/patio_log_store.jpg" title="The garden has a total of 2 tables and 8 chairs so plenty of places to sit and enjoy the sun!">
							<img alt="The log store on the patio of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/patio_log_store.jpg"/>
						</a>
					</div>
					<div class="span4 gallery-image">
						<a href="assets/cottage/garden_back.jpg" title="Looking up at the cottage from the bottom of the garden.">
							<img alt="The bottom of the garden of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/garden_back.jpg"/>
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4 gallery-image">
						<a href="assets/cottage/back_porch.jpg" title="The utility room possesses a second fridge/freezer (useful for drinks)!">
							<img alt="The utility room of Ty Gwyn" class="img-rounded" src="assets/cottage/thumbs/back_porch.jpg"/>
						</a>
					</div>
				</div>
			</div>
			<?php include("partials/blueimp-gallery.html"); ?>
			<!-- End page-specific content -->
<?php include("partials/foot.php"); ?>

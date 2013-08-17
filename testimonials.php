<?php include("partials/head.php"); ?>
			<!-- Start page-specific content -->
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Unfinished business!</strong> This page needs some time and love.
			</div>
			<?php
			$testimonials = array(
				array("comments"=>"We’ve had a really lovely time here! Everything you need is in this house!","author"=>"The M family, Romford, Essex"),
				array("comments"=>"A great base for discovering this wonderful part of the country","author"=>"The T family, Cornwall"),
				array("comments"=>"Had a lovely time. The house is a ‘home away from home’. Peaceful surroundings.","author"=>"The P, K and C families, Southampton"),
				array("comments"=>"Beautiful cottage. Lovely clean house. Stunning holiday.","author"=>"The Jones family"),
				array("comments"=>"Lovely clean cottage. Garden very appealing. Unfortunately it rained, but we would come again.","author"=>"The Richardson family"),
				array("comments"=>"Beautiful cottage. Had a lovely time. Great base for exploring the area.","author"=>"The Foster family, Lancashire"),
				array("comments"=>"All of the above. Very clean home and welcoming.","author"=>"The Jones’s, Swansea"),
				array("comments"=>"A cosy and well equipped nest for a lovely relaxing break!","author"=>"Louise and David, Trowbridge, Wilts"),
				array("comments"=>"Had a lovely time, very comfortable and good location for exploring Pembrokeshire.","author"=>"The W family, Bradford on Avon, Wilts"),
				array("comments"=>"Lovely cottage, we will be making a return visit.","author"=>"M and T, Pemblebury, Trelogan"),
				array("comments"=>"What a find! We have been coming to Pembrokeshire for years but this is the best cottage yet. Will definitely be returning.","author"=>"The Jones family, Port Talbot"),
				array("comments"=>"Absolutely wonderful cottage. Everything was just perfect. Good base to go exploring different places. Will definitely be back. Very, very impressed with everything – amazing!","author"=>"C and D, Cwmbran, Gwent"),
				array("comments"=>"This is the second time for us to stay in Ty Gwyn over the last six months. Can’t wait for the 3rd! We love it!","author"=>"The Jones family, Port Talbot"),
				array("comments"=>"Your cottage is beautiful.  We had a lovely time and did plenty of walking.","author"=>"The Davies’s, South Wales"),
				array("comments"=>"Really enjoyed our stay – felt at home from the moment we arrived – thank you!","author"=>"The B family, St Helens, Merseyside."),
				array("comments"=>"Lovely cottage, good location. Weather was good so a great stay.","author"=>"The R family, Hounslow, Middlesex"),
				array("comments"=>"We have had a great stay. Well equipped cottage and did loads of walking.","author"=>"The Powells, Risca, Gwent"),
				array("comments"=>"We really love your cottage and we were surprised when we got here because the website doesn’t do it justice. We had everything we need and more. I know a lot of thought went into preparing the cottage to make us feel welcome. Thank you for a lovely stay.","author"=>"K, S, E and R – Buxton, Derbyshire"),
				array("comments"=>"This is a fab cottage!! Thanks so much!","author"=>"The Jones family, Cardiff"),
				array("comments"=>"I have really enjoyed our stay here. We have had a lovely time and everything was perfect. Thank you very much.","author"=>"AH, Cardiff"),
				array("comments"=>"Gorgeous cottage, very well equipped. Lovely coastal walks and plenty to do in the sea. We’ve had a fantastic time!","author"=>"V and A, Manchester. J an A, London"),
				array("comments"=>"Had a lovely holiday and plenty of walking. The cottage is still lovely.","author"=>"The Davies family"),
				array("comments"=>"Cottage is beautiful. Had some lovely walks and enjoyed relaxing in the big back garden. 10 out of 10.","author"=>"The Davies family, Caerphilly"),
				array("comments"=>"Our first visit to Pembrokeshire. From this lovely cottage we did a lot! Swimming, cycling, walking, coasteering, boat trip, wildlife etc etc. Every day an outdoor adventure and lovely evenings, with cosy Ty Gwyn to come back to.","author"=>"The Jackson and Wheatle families, Kendal, Cumbria"),
			);
			foreach ($testimonials as $testimonial):
			?>
			<blockquote>
				<p><?=$testimonial['comments']?></p>
				<small><?=$testimonial['author']?></small>
			</blockquote>
			<?php
			endforeach;
			?>
			
			
			<!-- End page-specific content -->
<?php include("partials/foot.php"); ?>

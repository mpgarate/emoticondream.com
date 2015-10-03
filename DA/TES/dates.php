<?php
	function printDate($date, $class, $title, $content, $place="auto"){ 
		echo "<div class='date-holder " . $class . " col-6 col-sm-2 col-lg-2'>";
		echo "<a href='#'
			title='" . $title . "'
			data-placement='" . $place . "'
			data-content='" . $content . "'>
			" . $date . "
		</a></div>";
	}
?>
<div class="row dates dates-1">
	<div class="hidden-sm col-1"></div>
	<?php printDate("08-12-77","y-77","August 12, 1977","Space shuttle Enterprise makes 1st atmospheric flight"); ?>
	<?php printDate("12-31-62","y-62","December 31, 1862","The Day The USS Monitor Was Lost At Sea"); ?>
	<?php printDate("05-06-56","y-56","May 6, 1856","Sigmund Freud’s Birthday"); ?>
	<?php printDate("01-10-92","y-92","January 10, 1892","Short Story The Yellow Wallpaper Published"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1952","Michael Cunningham Birthday"); ?>
	<div class="hidden-sm col-1"></div>
</div> <!-- .row .dates-1 -->
<div class="row dates dates-2">
	<div class="hidden-sm col-1"></div>
	<?php printDate("12-31-62","y-62","December 31, 1862","The Night the Emancipation Proclamation took effect"); ?>
	<?php printDate("05-06-56","y-56","May 6, 1856","Sigmund Freud’s Birthday"); ?>
	<?php printDate("01-10-92","y-92","January 10, 1892","Short Story The Yellow Wallpaper Published"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1952","Michael Cunningham Birthday"); ?>
	<?php printDate("08-12-77","y-77","August 12, 1877","The Phonograph invented"); ?>
	<div class="hidden-sm col-1"></div>
</div> <!-- .row .dates-2 -->
<div class="hidden-sm row dates dates-3">
	<div class="hidden-sm col-1"></div>
	<?php printDate("05-06-56","y-56","May 6, 1856","Sigmund Freud’s Birthday"); ?>
	<?php printDate("01-10-92","y-92","January 10, 1892","Short Story The Yellow Wallpaper Published"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1952","Michael Cunningham Birthday"); ?>
	<?php printDate("08-12-77","y-77","August 12, 1977","Space shuttle Enterprise makes 1st atmospheric flight"); ?>
	<?php printDate("12-31-62","y-62","December 31, 1862","The Day The USS Monitor Was Lost At Sea"); ?>
	<div class="hidden-sm col-1"></div>
</div> <!-- .row .dates-3 -->
<div class="hidden-sm row dates dates-4">
	<div class="hidden-sm col-1"></div>
	<?php printDate("01-10-92","y-92","January 10, 1892","Short Story The Yellow Wallpaper Published"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1952","Michael Cunningham Birthday"); ?>
	<?php printDate("08-12-77","y-77","August 12, 1877","The Phonograph invented"); ?>
	<?php printDate("12-31-62","y-62","December 31, 1862","The Night the Emancipation Proclamation took effect"); ?>
	<?php printDate("05-06-56","y-56","May 6, 1856","Sigmund Freud’s Birthday"); ?>
	<div class="col-1"></div>
</div> <!-- .row .dates-4 -->
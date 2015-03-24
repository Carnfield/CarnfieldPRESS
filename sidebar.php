<!-- One Column Margin -->
<div class="one columns"></div>
<!-- Sidebar -->
<div class="three columns">
	<div id="sidebar">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
	<p>There are no sidebar widgets activated, please add some!</p>
	<?php endif; ?>
	</div>
</div>
<!-- /sidebar -->
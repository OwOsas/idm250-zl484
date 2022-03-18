<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/idm250-zl484/">
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" value="" name="s" id="s">
		<input type="hidden" name="post_type[]" value="<?php if (isset($postType)) {
															echo $postType;
														} ?>">
		<input type="submit" id="searchsubmit" value="Search">
	</div>
</form>
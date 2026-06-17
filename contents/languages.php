<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

?>
	
			<div id="languages" class="rightPart">
			
				<?php
				
					foreach ( $languages as $language ) {

						?>
						
				<form method="post" class="rowElement" action="">
					<input type="hidden" name="language"
						value="<?php echo $language ?>"/>
					<input type="image" src="flags/<?php echo $language ?>Flag.gif"
						style="width:32px;height:32px;" alt="<?php echo $language ?>"
						value="submit"
						onmouseout="this.style.opacity=1;this.filter='alpha(opacity=100)'"
						onmouseover="this.style.opacity=0.6;this.filter='alpha(opacity=60)'"
						/>
				</form>
						
						<?php
				
					}
				
				?>
			
			</div>
			
<?php

?>

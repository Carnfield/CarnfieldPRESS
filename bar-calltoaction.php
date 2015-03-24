<? global $options; foreach ($options as $value) { if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } } ?>
<?php switch ($cp_calltoaction_toggle) { case "Call to Action Enabled":?>
<div class="calltoaction content">
	<div class="row">
        <div class="twelve columns">
        <p>
		<?php if ($cp_calltoaction_text) { ?>
        <? echo $cp_calltoaction_text; ?>
        <? } else { ?>
        Please enter your call to action text in the theme options under homeapge.
        <? } ?>

		<a href="
		<?php if ($cp_calltoaction_button_url) { ?>
        <? echo $cp_calltoaction_button_url; ?>
        <? } else { ?>
        #
        <? } ?>
        " class="cta-button">
		
		<?php if ($cp_calltoaction_button_text) { ?>
        <? echo $cp_calltoaction_button_text; ?>
        <? } else { ?>
        Contact Now
        <? } ?>
        </a></p>
		</div>
	</div>
</div>
<?php break; ?>
<?php case "Call to Action Disabled":?>
<?php break; ?>	        
<?php }?>

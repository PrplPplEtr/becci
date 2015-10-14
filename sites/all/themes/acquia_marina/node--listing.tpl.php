<?php
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php //print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $variables['address'][0]['value']; ?></a></h2>
  <?php endif; ?>
  <?php //print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
    ?>
    
    <div class="listing_head">
	    <div class="listing_mainimage">
	    	<?php if($variables['field_sold']['und'][0]['value']): ?>
	    	<div class="listing_sold"></div>
	    	<?php endif; ?>
	    	<?php print render($content['field_gallery']); ?>
	    </div>
	    <div class="listing_head_data">
	    	<div class="listing_address"><?php print $variables['field_address'][0]['value'];?></div>
	    	<div class="listing_location"><?php print $variables['field_city'][0]['taxonomy_term']->name; if(!empty($variables['field_borough'])){print ' - '.$variables['field_borough'][0]['taxonomy_term']->name;};?></div>
	    	<div class="listing_price"><?php print render($content['field_price'][0]);?></div>
	    	<div class="listing_description"><?php print $variables['body'][0]['value'];?></div>
		</div>
    </div>
    <div class="listing_galleryimages">
    	<?php foreach($content['field_gallery'] as $key=>$value){
	    	if(is_int($key)){
	    		//print '<div class="listing_galleryimage">'.render($content['field_gallery'][$key]).'</div>';
	    	}
    	} ?>
    </div>
  </div>

	    <div class="listing_specs_hold">
	    	<div class="listing_specs_col">
		    	
		    	<?php foreach($variables['primary_specification_fields'] as $key){
			    	print '<div class="listing_'.$key.'">'.render($content['field_'.$key]).'</div>';
			    	//print render($value);
		    	} ?>
	    	</div>
	    	<div class="listing_specs_col">
		    	
		    	<?php foreach($variables['secondary_specification_fields'] as $key){
			    	print '<div class="listing_'.$key.'">'.render($content['field_'.$key]).'</div>';
			    	//print render($value);
		    	} ?>
	    	</div>
	    </div>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</div>
<?php
 //print '<pre>';
  //dpm($variables);
 //print '</pre>';
?>
<?php
if($teaser):
?>
<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
<?php //print render($content);?>
<?php //dpm($content);?>

    <div class="complex_teaser_head">
	    <div class="complex_mainimage">
	    	<?php print render($content['field_gallery'][0]); ?>
	    </div>
	    
	    <div class="complex_teaser_head_data">
	    	<?php print render($content['links']); ?>
	    	<?php print render($content['field_listing_type']); ?>
	    	<?php print render($content['field_construction_material']); ?>
	    	<?php print render($content['field_management_company']); ?>
	    </div>
	    	<?php print render($content['body']); ?>
    </div>
<?php else: ?>
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
	    <div class="complex_mainimage">
	    	<?php print render($content['field_gallery']); ?>
	    </div>
	    <div class="listing_head_data">
	    	<div class="listing_address"><?php print $variables['field_address'][0]['value'];?></div>
	    	<div class="listing_location"><?php print $variables['field_city'][0]['taxonomy_term']->name; if(!empty($variables['field_borough'])){print ' - '.$variables['field_borough'][0]['taxonomy_term']->name;};?></div>
	    	<?php if($variables['body']):?>
	    	<div class="listing_description"><?php print $variables['body'][0]['value'];?></div>
	    	<?php endif;?>
		</div>
    </div>
  </div>

	    <div class="listing_specs_hold">
	    	<div class="listing_specs_col">
		    	
		    	<?php foreach($variables['secondary_specification_fields'] as $key){
			    	print '<div class="listing_'.$key.'">'.render($content['field_'.$key]).'</div>';
			    	//print render($value);
		    	} ?>
	    	</div>
	    	<div class="listing_specs_col">
		    	
		    	<?php if($variables['listings_view']){print $variables['listings_view'];};?>
	    	</div>
	    </div>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</div>
<?php endif; ?>
<?php
 //print '<pre>';
  //dpm($variables);
 //print '</pre>';
?>
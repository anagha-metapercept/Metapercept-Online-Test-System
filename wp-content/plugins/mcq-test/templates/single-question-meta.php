<?php
/*
* @Author 		PickPlugins
* Copyright: 	2015 PickPlugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


$classified_maker_listing_for = get_post_meta(get_the_ID(), 'classified_maker_listing_for', true);
$classified_maker_ads_city = get_post_meta(get_the_ID(), 'classified_maker_ads_city', true);
$classified_maker_ads_country = get_post_meta(get_the_ID(), 'classified_maker_ads_country', true);
$classified_maker_ads_company = get_post_meta(get_the_ID(), 'classified_maker_ads_company', true);
$classified_maker_ads_owner_type = get_post_meta(get_the_ID(), 'classified_maker_ads_owner_type', true);

$author = get_the_author();


?>
<div class="question-meta"  itemprop="QuestionMeta" itemscope itemtype="http://schema.org/QuestionMeta">

	<div class="meta question_category"> <?php	
		$category = get_the_terms(get_the_ID(), 'question_cat');
		if(!empty($category[0]->name)){
			echo '<a href="'.get_term_link($category[0]->term_id).'"><i class="fa fa-folder-open-o" aria-hidden="true"></i> '.$category[0]->name.'</a>';
		} ?> 
    </div> 


	<div class="meta question_date">
    	<a itemprop="datePublished" content="<?php echo get_the_date(); ?>" href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo get_the_date(); ?></a>
    </div>    


</div>

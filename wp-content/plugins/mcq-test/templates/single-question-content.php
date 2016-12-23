<?php
/*
* @Author 		pluginbazar
* Copyright: 	2015 pluginbazar
*/
 
 
	$html = '';
	
	$html .= '<div class="list-single-question">'; 
			
			$arr_option = array();
			$arr_option[] = array( 'key' => 'question_option_1', 'value' => get_post_meta( get_the_ID(), 'question_option_1', true ) );
			$arr_option[] = array( 'key' => 'question_option_2', 'value' => get_post_meta( get_the_ID(), 'question_option_2', true ) );
			$arr_option[] = array( 'key' => 'question_option_3', 'value' => get_post_meta( get_the_ID(), 'question_option_3', true ) );
			$arr_option[] = array( 'key' => 'question_option_4', 'value' => get_post_meta( get_the_ID(), 'question_option_4', true ) );
			shuffle($arr_option);
			
			$correct_opt_number	= get_post_meta( get_the_ID(), 'question_correct_ans', true );
			$correct_opt_number	= 'question_option_'.$correct_opt_number[0];
			
			foreach( $arr_option as $sl => $option_value ) {
				
				if( $option_value['key'] == $correct_opt_number )
				$html .= '
				<span class="list-mcq-option s_16 correct_answer"><i class="fa fa-square-o" aria-hidden="true"></i> '.$option_value['value'].'</span><br>';
				else	
				$html .= '
				<span class="list-mcq-option s_16"><i class="fa fa-square-o" aria-hidden="true"></i> '.$option_value['value'].'</span><br>';
			
			}
			
			$html .= '</div>'; // single_question
			
			
			
	echo $html;
	
?>
	
	<div class="single_question_button">
	
		<div class="question_btn_inline btn_view_correct"><?php echo get_option('mcq_txt_correct_answer', 'Correct Answer'); ?></div>
		<!-- <div class="question_btn_inline btn_report_question">Report This</div> -->

	</div>
	
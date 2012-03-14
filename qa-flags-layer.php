<?php

	class qa_html_theme_layer extends qa_html_theme_base {

		// theme replacement functions

		function post_meta($post, $class, $prefix=null, $separator='<BR/>')
		{
			if(qa_opt('flags_enable') && ((qa_opt('flags_enable_q') && $post['raw']['basetype'] == 'Q') || (qa_opt('flags_enable_a') && $post['raw']['basetype'] == 'A') || (qa_opt('flags_enable_c') && $post['raw']['basetype'] == 'C'))) {
				if (isset($post['who']['data'])) {
					$uid = $post['raw']['userid'];
					$flag = qa_flag_html($uid,QA_HTML_THEME_LAYER_URLTOROOT);
					if($flag)
						$post['who']['data'] .= $flag;
				}
				if (isset($post['who_2']['data']) && qa_opt('flags_enable_other')) {
					qa_error_log($post);
					$uid = $post['raw']['lastuserid'];
					$flag = qa_flag_html($uid,QA_HTML_THEME_LAYER_URLTOROOT);
					if($flag)
						$post['who_2']['data'] .= $flag;
				}
			}
			qa_html_theme_base::post_meta($post, $class, $prefix, $separator);
			
		}		
	}


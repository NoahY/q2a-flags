<?php

	class qa_html_theme_layer extends qa_html_theme_base {

		// modify field for account page
		
		function doctype() {
			if(isset($this->content['flags_plugin_field'])) {
				$this->content['form']['fields'][qa_opt('flags_field')] = $this->content['flags_plugin_field'];
			}
			if($this->request == 'account' && isset($this->content['form_profile']['fields'][qa_opt('flags_field')])) {
				$qa_flag_array = qa_flag_array();
				foreach($qa_flag_array as $i => $v) {
					$flag_select[$i] = qa_lang('flags/'.$i);
				}
				$field = array(
					'label' => $this->content['form_profile']['fields'][qa_opt('flags_field')]['label'],
					'type' => 'select',
					'tags' => $this->content['form_profile']['fields'][qa_opt('flags_field')]['tags'],
					'error' => $this->content['form_profile']['fields'][qa_opt('flags_field')]['error'],
					'value' => $this->content['form_profile']['fields'][qa_opt('flags_field')]['value'],
					'options' => $flag_select,
				);
				$this->content['form_profile']['fields'][qa_opt('flags_field')] = $field;
			}
			qa_html_theme_base::doctype();
		}

		/* 
		 * The below function can serve as an example for other functions.  The line that gets the img tag is:
		 * 
		 * $flag = qa_flag_html($uid,$size,QA_HTML_THEME_LAYER_URLTOROOT);
		 * 
		 * Just pass the userid and flag size (one of 16,24,32,48) to the function as required, leaving the third option as it is.
		*/

		function post_meta($post, $class, $prefix=null, $separator='<BR/>')
		{
			if(qa_opt('flags_enable') && ((qa_opt('flags_enable_q') && $post['raw']['basetype'] == 'Q') || (qa_opt('flags_enable_a') && $post['raw']['basetype'] == 'A') || (qa_opt('flags_enable_c') && $post['raw']['basetype'] == 'C'))) {
				
				$size = qa_opt('flags_size');
				
				if (isset($post['who']['data'])) {
					$uid = $post['raw']['userid'];
					$flag = qa_flag_html($uid,$size,QA_HTML_THEME_LAYER_URLTOROOT);
					if($flag)
						$post['who']['data'] .= $flag;
				}
				if (isset($post['who_2']['data']) && $uid != $post['raw']['lastuserid'] && qa_opt('flags_enable_other')) {
					$uid = $post['raw']['lastuserid'];
					$flag = qa_flag_html($uid,$size,QA_HTML_THEME_LAYER_URLTOROOT);
					if($flag)
						$post['who_2']['data'] .= $flag;
				}
			}
			qa_html_theme_base::post_meta($post, $class, $prefix, $separator);
		}		
	}


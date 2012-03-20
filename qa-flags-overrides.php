<?php
	function qa_get_request_content() {
		$qacontent = qa_get_request_content_base();
		if(qa_opt('flags_enable')) {
			$requestlower=strtolower(qa_request());
			if($requestlower && $requestlower === 'register' && qa_opt('flags_register')) {

				$qa_flag_array = qa_flag_array();
				foreach($qa_flag_array as $i => $v) {
					$flag_select[$i] = qa_lang('flags/'.$i);
				}
				$field = array(
					'label' => qa_opt('flags_field'),
					'type' => 'select',
					'tags' => 'NAME="'.qa_opt('flags_field').'" ID="'.qa_opt('flags_field').'"',
					'value' => qa_post_text(qa_opt('flags_field')),
					'options' => $flag_select,
					'error' => qa_html(@$errors[qa_opt('flags_field')]),
				);
				$qacontent['flags_plugin_field'] = $field;
			}
		}
		return $qacontent;
	}
	
	function qa_create_new_user($email, $password, $handle, $level=QA_USER_LEVEL_BASIC, $confirmed=false) {
		$userid = qa_create_new_user_base($email, $password, $handle, $level, $confirmed);
		
		if(qa_post_text(qa_opt('flags_field'))) {
			qa_db_query_sub(
				"INSERT INTO ^userprofile (userid,title,content) VALUES (#,$,$)",
				$userid,qa_opt('flags_field'),qa_post_text(qa_opt('flags_field'))
			);
		}
		return $userid;
	}

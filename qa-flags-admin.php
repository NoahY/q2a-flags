<?php
	class qa_flags_admin {
		
		function allow_template($template)
		{
			return ($template!='admin');
		}


	function option_default($option) {
		
		switch($option) {
		    case 'flags_size':
				return 16;
		    default:
				return null;
		}
		
	}

		function admin_form(&$qa_content)
		{

			// Process form input

			$ok = null;

			if (qa_clicked('flags_save')) {
				qa_opt('flags_enable',(bool)qa_post_text('flags_enable'));
				qa_opt('flags_enable_q',(bool)qa_post_text('flags_enable_q'));
				qa_opt('flags_enable_a',(bool)qa_post_text('flags_enable_a'));
				qa_opt('flags_enable_c',(bool)qa_post_text('flags_enable_c'));
				qa_opt('flags_enable_other',(bool)qa_post_text('flags_enable_other'));
				qa_opt('flags_size',(int)qa_post_text('flags_size'));

				$ok = qa_lang('admin/options_saved');
			}
				
						
			// Create the form for display

				
			$fields = array();
			
			$fields[] = array(
				'label' => 'Enable Flags',
				'tags' => 'NAME="flags_enable"',
				'value' => qa_opt('flags_enable'),
				'type' => 'checkbox',
			);
			
			$fields[] = array(
				'label' => 'Flag size',
				'tags' => 'NAME="flags_size"',
				'value' => qa_opt('flags_size'),
				'type' => 'number',
			);

			$fields[] = array(
				'label' => 'Enable Flags for questions',
				'tags' => 'NAME="flags_enable_q"',
				'value' => qa_opt('flags_enable_q'),
				'type' => 'checkbox',
			);
	 

			$fields[] = array(
				'label' => 'Enable Flags for answers',
				'tags' => 'NAME="flags_enable_a"',
				'value' => qa_opt('flags_enable_a'),
				'type' => 'checkbox',
			);
	 

			$fields[] = array(
				'label' => 'Enable Flags for comments',
				'tags' => 'NAME="flags_enable_c"',
				'value' => qa_opt('flags_enable_c'),
				'type' => 'checkbox',
			);
	 

			$fields[] = array(
				'label' => 'Enable Flags for second meta user',
				'tags' => 'NAME="flags_enable_other"',
				'value' => qa_opt('flags_enable_other'),
				'type' => 'checkbox',
			);
	 
			return array(           
				'ok' => ($ok && !isset($error)) ? $ok : null,
					
				'fields' => $fields,
			 
				'buttons' => array(
					array(
						'label' => qa_lang_html('main/save_button'),
						'tags' => 'NAME="flags_save"',
					),
				),
			);
		}
	}


<?php
	class qa_flags_admin {
		
		function allow_template($template)
		{
			return ($template!='admin');
		}

		function admin_form(&$qa_content)
		{

			// Process form input

			$ok = null;

			if (qa_clicked('flags_save')) {
				qa_opt('flags_enable',(bool)qa_post_text('flags_enable'));

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


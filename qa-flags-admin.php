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
		    case 'flags_field':
				return 'Country';
		    default:
				return null;
		}
		
	}

		function admin_form(&$qa_content)
		{

			// Process form input

			$which = function_exists('xprofile_insert_field')?'Buddypress':(!QA_FINAL_EXTERNAL_USERS?'Q2A':false);
			$error = $which?null:'Your setup doesn\'t allow this plugin to work as designed.';
			
			if ($which) {
				
				$ok = $which?'Using '.$which.' database':null;
				

				if (qa_clicked('flags_save') || qa_clicked('flags_create')) {
					qa_opt('flags_enable',(bool)qa_post_text('flags_enable'));
					qa_opt('flags_enable_q',(bool)qa_post_text('flags_enable_q'));
					qa_opt('flags_enable_a',(bool)qa_post_text('flags_enable_a'));
					qa_opt('flags_enable_c',(bool)qa_post_text('flags_enable_c'));
					qa_opt('flags_enable_other',(bool)qa_post_text('flags_enable_other'));
					
					qa_opt('flags_size',(int)qa_post_text('flags_size'));
					qa_opt('flags_field',qa_post_text('flags_field'));
					
					qa_opt('flags_register',(bool)qa_post_text('flags_register'));
					qa_opt('flags_register_required',(bool)qa_post_text('flags_register_required'));

					$ok = qa_lang('admin/options_saved');
				}
				if (qa_clicked('flags_create')) {
					if($which == 'Buddypress') { // buddypress
						$field = xprofile_get_field_id_from_name( qa_opt('flags_field') );
						if($field)
							xprofile_delete_field($field);
						$field = xprofile_insert_field(
							array(
								'field_group_id' => 1,
								'field_id' => 0,
								'type' => 'selectbox',
								'name' => qa_opt('flags_field'),
								'is_required' => 0,
								'can_delete' => 1,
								'order_by' => 'default',
								'option_order' => 0,
							)
						);
						if($field) {
							$counter = 0;
							$qa_flag_array = qa_flag_array();
							global $bp;
							global $wpdb;
							$wpdb->query( $wpdb->prepare( "DELETE FROM {$bp->profile->table_name_fields} WHERE parent_id=%d", $field) );
							foreach($qa_flag_array as $i => $v) {
								if ( !$wpdb->query( $wpdb->prepare( "INSERT INTO {$bp->profile->table_name_fields} (group_id, parent_id, type, name, description, is_required, option_order, is_default_option) VALUES (%d, %d, 'option', %s, '', 0, %d, %d)", 1, $field, $i, ++$counter, 0) ) )
									$error = 'field created, error populating';
							}
							$ok = "'".qa_opt('flags_field')."' field populated.";
						}
						else 
							$error = "problem creating '".qa_opt('flags_field')."' field.";
					}
					else if($which){

						require_once QA_INCLUDE_DIR.'qa-db-admin.php';
						require_once QA_INCLUDE_DIR.'qa-util-string.php';
						
					//	Perform appropriate database action

						qa_db_query_sub("DELETE FROM ^userfields WHERE title=$",qa_opt('flags_field'));			
						
						$position=qa_db_read_one_value(qa_db_query_sub('SELECT 1+COALESCE(MAX(position), 0) FROM ^userfields'));

						qa_db_query_sub(
							'INSERT INTO ^userfields (title, content, flags, position) VALUES ($, $, #, #)',
							qa_opt('flags_field'),qa_opt('flags_field'),0,$position
						);			


						$ok = "'".qa_opt('flags_field')."' profile field created";
					}
				}
					
							
				// Create the form for display

					
				$fields = array();
				
				$fields[] = array(
					'label' => 'Enable Flags',
					'tags' => 'NAME="flags_enable"',
					'value' => qa_opt('flags_enable'),
					'type' => 'checkbox',
					'error' => $error,
				);

				$size = array(16=>16,24=>24,32=>32,48=>48);
				
				$fields[] = array(
					'label' => 'Flag size',
					'tags' => 'NAME="flags_size"',
					'value' => $size[qa_opt('flags_size')],
					'type' => 'select',
					'options' => $size,
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

				$fields[] = array(
					'type' => 'blank',
				);

				$fields[] = array(
					'label' => 'Enable country field on registration form',
					'tags' => 'NAME="flags_register"',
					'value' => qa_opt('flags_register'),
					'type' => 'checkbox',
				);

				$fields[] = array(
					'label' => 'Require country selection on registration form',
					'tags' => 'NAME="flags_register_required"',
					'value' => qa_opt('flags_register_required'),
					'type' => 'checkbox',
				);

				$fields[] = array(
					'type' => 'blank',
				);

				$fields[] = array(
					'label' => 'User profile field name for country',
					'note' => "if you change this, you have to create the new field (and delete the old one if you've created it).  The button below can try to create the field for you.",
					'tags' => 'NAME="flags_field"',
					'value' => qa_opt('flags_field'),
				);

				$buttons = array(
					array(
						'label' => qa_lang_html('main/save_button'),
						'note' => '<br/>',
						'tags' => 'NAME="flags_save"',
					),
					array(
						'label' => 'Create '.$which.' Field',
						'note' => '<br/><font size="2"><i>This will add a select field '.($which=='Buddypress'?'and options ':'').'to your database</i></font>',
						'tags' => 'NAME="flags_create"',
					),
				);
			}
			return array(           
				'ok' => ($ok && !isset($error)) ? $ok : null,
					
				'fields' => $fields,
			 
				'buttons' => $buttons,
			);
		}
	}


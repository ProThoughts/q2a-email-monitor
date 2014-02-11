<?php

	/*
	*Define the admin page form.
	*
	*
	*
	*/
	
	class mail_monitor_admin_form {
		function option_default($option){
			if ($option=='mail_monitor_mail_server')
				return '';
			if ($option=='mail_monitor_mail_port')
				return '';
			if ($option=='mail_monitor_mail_username')
				return '';
			if ($option=='mail_monitor_mail_password')
				return '';
			if ($option=='mail_monitor_mail_ssl')
				return false;
		}
		
		function admin_form(&$qa_content) {
			$saved=false;

			if (qa_clicked('mail_monitor_save_button')) {
				  qa_opt('mail_monitor_mail_server', qa_post_text('mail_monitor_mail_server_field'));
				  qa_opt('mail_monitor_mail_port', (int) qa_post_text('mail_monitor_mail_port_field'));

				  qa_opt('mail_monitor_mail_username', qa_post_text('mail_monitor_mail_username_field'));
				  qa_opt('mail_monitor_mail_password', qa_post_text('mail_monitor_mail_password_field'));

				  qa_opt('mail_monitor_mail_ssl', (bool) qa_post_text('mail_monitor_mail_ssl_field'));
				  
				  $saved=true;
			}

			return array(
			  'ok' => $saved ? 'Mail monitor settings saved' : null,

			  'fields' => array(
					array(
					  'label' => 'Mail IMAP Server',
					  'type' => 'text',
					  'value' => qa_opt('mail_monitor_mail_server'),
					  'tags' => 'name="mail_monitor_mail_server_field"',
					),

					array(
					  'label' => 'Port for IMAP Server (XXX for non-SSL, YYY for SSL)',
					  'type' => 'number',
					  'value' => qa_opt('mail_monitor_mail_port'),
					  'tags' => 'name="mail_monitor_mail_port_field"',
					),

					array(
					  'label' => 'IMAP Username',
					  'type' => 'text',
					  'value' => qa_opt('mail_monitor_mail_username'),
					  'tags' => 'name="mail_monitor_mail_username_field"',
					),

					array(
					  'label' => 'IMAP Password',
					  'type' => 'password',
					  'value' => qa_opt('mail_monitor_mail_password'),
					  'tags' => 'name="mail_monitor_mail_password_field"',
					),

					array(
					  'label' => 'IMAP SSL',
					  'type' => 'checkbox',
					  'value' => qa_opt('mail_monitor_mail_ssl'),
					  'tags' => 'name="mail_monitor_mail_ssl_field"',
					),
				),

				'buttons' => array(
					array(
					  'label' => 'Save Changes',
					  'tags' => 'name="ldap_login_save_button"',
					),
				),
			);
		}
	}
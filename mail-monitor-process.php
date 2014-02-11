<?php

	/*
	*This script acts as the interface between
	*the Email Process and the cron job.
	*Also acts as an interface between the email
	*process and q2a.
	*
	*
	*/
	require_once QA_INCLUDE_DIR."qa-base.php";
	
	
	function getServerAttributes(){
		$server = qa_opt('mail_monitor_mail_server');
		$port = qa_opt('mail_monitor_mail_server');
		$ssl = qa_opt('mail_monitor_mail_ssl');
		$username = qa_opt('mail_monitor_mail_username');
		$password = qa_opt('mail_monitor_mail_password');
		
		return array($server, $port, $ssl, $username, $password);
	}
	
	function mail_monitor_cronjob() {
	
		$serverInfo = getServerAttributes();
		emailProcess($serverInfo[0], $serverInfo[3], $serverInfo[4]);
	}
	
	function emailProcess($server, $username, $password) {
		$conn = imap_open ($server, $username, $password);
	}
	
	function performAction() {
	
	}
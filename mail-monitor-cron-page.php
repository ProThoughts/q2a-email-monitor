<?php

	/*
	* Page that a cron job calls in order to have the code
	* Regularly check the email service.
	*/

	class mail_monitor_cron_page {
	
		var $directory;
		var $urltoroot;
		
		function load_module($directory, $urltoroot)
		{
			$this->directory=$directory;
			$this->urltoroot=$urltoroot;
		}
		
		function match_request($request)
		{
			return ($request=='mail-monitor-cron');
		}
		
		function process_request($request)
		{
			if($request=='mail-monitor-cron')
			{
				require_once $this->directory.'mail-monitor-process.php';
				mail_monitor_cronjob();
			}	
		}
	}
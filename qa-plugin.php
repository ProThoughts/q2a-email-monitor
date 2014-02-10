<?php

/*
	Plugin Name: Q2A-Email-Monitor
	Plugin URI: http://eberta.github.io/q2a-email-monitor
	Plugin Description: Allows actions to happen based on email sent to the monitored account.
	Plugin Version: 0.1
	Plugin Date: 2014-02-10
	Plugin Author: eberta
	Plugin Author URI: https://github.com/eberta
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: https://raw.github.com/eberta/q2a-email-monitor/master/qa-plugin.php
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}
<?php
/*
 * Plugin Name: Reproduce Composer utility issue with Jetpack autoloader
 */

require_once __DIR__ . '/vendor/autoload.php';

$action_scheduler_path = \Composer\InstalledVersions::getInstallPath( 'woocommerce/action-scheduler' );

require_once $action_scheduler_path . '/action-scheduler.php';

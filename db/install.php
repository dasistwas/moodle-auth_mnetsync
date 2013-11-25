<?php

function xmldb_auth_mnetsync_install() {
    global $CFG, $DB;

    $app = array(
            'name'              => 'moodle_cfs',
            'display_name'      => 'Moodle (CFS)',
            'xmlrpc_server_url' => '/mnet/xmlrpc/server.php',
            'sso_jump_url'      => '/auth/mnetsync/jump.php',
            'sso_land_url'      => '/auth/mnetsync/land.php');

    $DB->insert_record('mnet_application', $app);
}

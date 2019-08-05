<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );

class WWS_Admin_Ajax {

    public function __construct() {

        add_action( "wp_ajax_wws_edit_multi_support_person", array( $this, 'edit_multi_support_person' ) );
        add_action( "wp_ajax_nopriv_wws_edit_multi_support_person", array( $this, 'edit_multi_support_person' ) );

        add_action( "wp_ajax_wws_add_multi_support_person", array( $this, 'add_multi_support_person' ) );
        add_action( "wp_ajax_nopriv_wws_add_multi_support_person", array( $this, 'add_multi_support_person' ) );

    }


    public function edit_multi_support_person() {

        if ( ! isset( $_GET['action'] ) && ! $_GET['action'] == 'wws_edit_multi_support_person' ) {
            return;
        }

        $field = new Wecreativez_Core_Field;

        $person_id  = $_GET['person_id'];
        $setting    = get_option( 'sk_wws_multi_account', array() );

        require_once WWS_ABSPATH . 'views/admin/multiperson-support/admin-edit-multiperson-support.php';

        wp_die();
    }


    public function add_multi_support_person() {

        if ( ! isset( $_GET['action'] ) && ! $_GET['action'] == 'wws_add_multi_support_person' ) {
            return;
        }

        $field = new Wecreativez_Core_Field;

        require_once WWS_ABSPATH . 'views/admin/multiperson-support/admin-add-multiperson-support.php';

        wp_die();
    }

}  // end of WWS_Admin_Ajax class

$wws_admin_ajax = new WWS_Admin_Ajax;
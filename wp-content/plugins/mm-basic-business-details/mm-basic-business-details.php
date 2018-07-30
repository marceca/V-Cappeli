<?php
/*
Plugin Name:  Basic Business Details Plugin
Description:  Basic details about your business
Version:      1.0.0
Author:       Michael Marceca
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/


/** Step 2 (from text above). */
add_action( 'admin_menu', 'basic_business_details' );

/** Step 1. */
function basic_business_details() {
	add_theme_page( 'Basic Business Details', 'Basic Business Details', 'manage_options', 'Basic-Business-Details', 'basic_business_plugin' );
}

/** Step 3. */
function basic_business_plugin() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    
    wp_register_style( 'mm-basic-business-details', plugins_url('css/mm-basic-business-details.css',__FILE__ ) );
    wp_enqueue_style( 'mm-basic-business-details' );

    // variables for the field and option names 
    $phone_number = 'basic_info_phone_number';
    $address = 'basic_info_address';
    $sunday = 'basic_info_sunday';
    $monday = 'basic_info_monday';
    $tuesday = 'basic_info_tuesday';
    $wednesday = 'basic_info_wednesday';
    $thursday = 'basic_info_thursday';
    $friday = 'basic_info_friday';
    $saturday = 'basic_info_saturday';

    $hidden_field_information = 'mt_submit_hidden';

    $data_field_phone_number = 'basic_info_phone_number';
    $data_field_address = 'basic_info_address';
    $data_field_sunday = 'basic_info_sunday';
    $data_field_monday = 'basic_info_monday';
    $data_field_tuesday = 'basic_info_tuesday';
    $data_field_wednesday = 'basic_info_wednesday';
    $data_field_thursday = 'basic_info_thursday';
    $data_field_friday = 'basic_info_friday';
    $data_field_saturday = 'basic_info_saturday';

    // Read in existing option value from database
    $opt_val_phone_number = get_option( $phone_number );
    $opt_val_address = get_option( $address );
    $opt_val_sunday = get_option( $sunday );
    $opt_val_monday = get_option( $monday );
    $opt_val_tuesday = get_option( $tuesday );
    $opt_val_wednesday = get_option( $wednesday );
    $opt_val_thursday = get_option( $thursday );
    $opt_val_friday = get_option( $friday );
    $opt_val_saturday = get_option( $friday );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if( isset($_POST[ $hidden_field_information ]) && $_POST[ $hidden_field_information ] == 'Y' ) {
        // Read their posted value
        $opt_val_phone_number = $_POST[ $data_field_phone_number ];
        $opt_val_address = $_POST[ $data_field_address ];
        $opt_val_sunday = $_POST[ $data_field_sunday ];
        $opt_val_monday = $_POST[ $data_field_monday ];
        $opt_val_tuesday = $_POST[ $data_field_tuesday ];
        $opt_val_wednesday = $_POST[ $data_field_wednesday ];
        $opt_val_thursday = $_POST[ $data_field_thursday ];
        $opt_val_friday = $_POST[ $data_field_friday ];
        $opt_val_saturday = $_POST[ $data_field_saturday ];

        // Save the posted value in the database
        update_option( $phone_number, $opt_val_phone_number );
        update_option( $address, $opt_val_address );
        update_option( $sunday, $opt_val_sunday );
        update_option( $monday, $opt_val_monday );
        update_option( $tuesday, $opt_val_tuesday );
        update_option( $wednesday, $opt_val_wednesday );
        update_option( $thursday, $opt_val_thursday );
        update_option( $friday, $opt_val_friday );
        update_option( $saturday, $opt_val_saturday );

        // Put a "settings saved" message on the screen

?>
<div class="updated"><p><strong><?php _e('settings saved.', 'basic-business-details' ); ?></strong></p></div>
<?php

    }

    // Now display the settings editing screen

    echo '<div class="wrap wrapper">';

    // header

    echo "<h2>" . __( 'Basic Business Details', 'basic-business-details' ) . "</h2>";

    // settings form
    
    ?>

<form name="form1" method="post" action="">
<input type="hidden" name="<?php echo $hidden_field_information; ?>" value="Y">

<p><?php _e("<h2>Phone Number:</h2>", 'phone-number' ); ?> 
<input type="text" name="<?php echo $data_field_phone_number; ?>" value="<?php echo $opt_val_phone_number; ?>" size="40">
</p><hr />

<p><?php _e("<h2>Address:</h2>", 'address' ); ?> 
<input type="text" name="<?php echo $data_field_address; ?>" value="<?php echo $opt_val_address; ?>" size="40">
</p><hr />

<h2>Hours:</h2>
<div class="basic-business-hours-table">
    <p><?php _e("Sunday:", 'sunday' ); ?> 
    <input type="text" name="<?php echo $data_field_sunday; ?>" value="<?php echo $opt_val_sunday; ?>" size="20">
    </p>

    <p><?php _e("Monday:", 'monday' ); ?> 
    <input type="text" name="<?php echo $data_field_monday; ?>" value="<?php echo $opt_val_monday; ?>" size="20">
    </p>

    <p><?php _e("Tuesday:", 'tuesday' ); ?> 
    <input type="text" name="<?php echo $data_field_tuesday; ?>" value="<?php echo $opt_val_tuesday; ?>" size="20">
    </p>

    <p><?php _e("Wednesday:", 'wednesday' ); ?> 
    <input type="text" name="<?php echo $data_field_wednesday; ?>" value="<?php echo $opt_val_wednesday; ?>" size="20">
    </p>

    <p><?php _e("Thursday:", 'thursday' ); ?> 
    <input type="text" name="<?php echo $data_field_thursday; ?>" value="<?php echo $opt_val_thursday; ?>" size="20">
    </p>

    <p><?php _e("Friday:", 'friday' ); ?> 
    <input type="text" name="<?php echo $data_field_friday; ?>" value="<?php echo $opt_val_friday; ?>" size="20">
    </p>

    <p><?php _e("Saturday:", 'saturday' ); ?> 
    <input type="text" name="<?php echo $data_field_saturday; ?>" value="<?php echo $opt_val_saturday; ?>" size="20">
    </p><hr />

    <p class="submit">
    <input type="submit" name="Submit" class="button-primary float-left" value="<?php esc_attr_e('Save Changes') ?>" />
    </p>
</div>
</form>
</div>

<?php
}

add_shortcode( 'basic_business_details_shortcode', 'basic_business_details_shortcode' );
function basic_business_details_shortcode() { ?>
    <div class="wrapper">
        <h1 class="basic_information_main_header">Vist V Capelli</h1>
        </br>
        <div>
            <h2 class="basic_information_header"><span>Address:</span> <?php $address_sc = get_option('basic_info_address');  echo $address_sc; ?></h2></br>
            <h2 class="basic_information_header"><span>Phone Number:</span> <?php $phone_number_sc = get_option('basic_info_phone_number');  echo $phone_number_sc;?></h2></br>
            <h2 class="basic_information_header"><span>Hours</span> </h2>
            <div class="basic_information_sub_header">Sunday: <?php $sunday_sc = get_option('basic_info_sunday');  echo $sunday_sc;?></div>
            <div class="basic_information_sub_header">Monday: <?php $monday_sc = get_option('basic_info_monday');  echo $monday_sc;?></div>
            <div class="basic_information_sub_header">Tuesday: <?php $tuesday_sc = get_option('basic_info_tuesday');  echo $tuesday_sc;?></div>
            <div class="basic_information_sub_header">Wednesday: <?php $wednesday_sc = get_option('basic_info_wednesday');  echo $wednesday_sc;?></div>
            <div class="basic_information_sub_header">Thursday: <?php $thursday_sc = get_option('basic_info_thursday');  echo $thursday_sc;?></div>
            <div class="basic_information_sub_header">Friday: <?php $friday_sc = get_option('basic_info_friday');  echo $friday_sc;?></div>
            <div class="basic_information_sub_header">Satruday: <?php $saturday_sc = get_option('basic_info_saturday');  echo $saturday_sc;?></div>
        </div>
    </div>

<?php
}
?>
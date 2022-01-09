<?php

add_action( 'admin_init', 'yasr_multi_form_init' );

function yasr_multi_form_init() {
    register_setting(
        'yasr_multi_form', // A settings group name. Must exist prior to the register_setting call. This must match the group name in settings_fields()
        'yasr_multi_form_data' //The name of an option to sanitize and save.
    );

    add_settings_section( 'yasr_section_id', 'Gestione Multi Set', 'yasr_section_callback', 'yasr_settings_page' );
    add_settings_field( 'yasr_field_name_id', 'Nome Set', 'yasr_nome_callback', 'yasr_settings_page', 'yasr_section_id' );
}

function yasr_section_callback() {
    echo "Descrizione sezione";
}

function yasr_nome_callback() {
    $option = get_option( 'yasr_multi_form_data' );
    $name   = esc_attr( $option['name'] );
    echo "<input type='text' name='yasr_multi_form_data[name]' value='' />";
}

/* Settings Page Content */
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( __( 'You do not have sufficient permissions to access this page.', 'yasr' ) );
    }
    ?>
    <div class="wrap">
        <h2>Settings API Demo</h2>

        <form action="options.php" method="post">
            <?php
            settings_fields( 'yasr_multi_form' );
            do_settings_sections( 'yasr_settings_page' );
            submit_button( 'Salva' );
            ?>
        </form>
    </div>

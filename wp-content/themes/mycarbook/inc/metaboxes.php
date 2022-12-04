<?php

function carbook_add_metabox() {
    add_meta_box('car_metabox', esc_html('Car Settings'), 'carbook_car_metabox_html', 'car', 'normal', 'high');
}

add_action('add_meta_boxes', 'carbook_add_metabox');

function carbook_car_metabox_html($post) {
    $per_hour_rate = get_post_meta($post->ID, 'per_hour_rate', true);
    
    $per_day_rate = get_post_meta($post->ID, 'per_day_rate', true);
    $per_month_rate = get_post_meta($post->ID, 'per_month_rate', true);
    $fuel_surcharges = get_post_meta($post->ID, 'fuel_surcharges', true);
    
    $car_mileage = get_post_meta($post->ID, 'car_mileage', true);
    $car_transmission = get_post_meta($post->ID, 'car_transmission', true);
    $car_seats = get_post_meta($post->ID, 'car_seats', true);
    $car_luggage = get_post_meta($post->ID, 'car_luggage', true);
    $car_fuel = get_post_meta($post->ID, 'car_fuel', true);
    
    wp_nonce_field('ajfakjsdfjasdjf', '_carmetabox');
    ?>
    <p>
        <label for="per_hour_rate"><?php echo esc_html('Per hour rate')?></label>
        <input type="text" name="per_hour_rate" id="per_hour_rate" value="<?php echo esc_attr($per_hour_rate); ?>">
    </p>
    <p>
        <label for="per_day_rate"><?php echo esc_html('Per day rate')?></label>
        <input type="text" name="per_day_rate" id="per_day_rate" value="<?php echo esc_attr($per_day_rate); ?>">
    </p>
    <p>
        <label for="per_month_rate"><?php echo esc_html('Per month rate')?></label>
        <input type="text" name="per_month_rate" id="per_month_rate" value="<?php echo esc_attr($per_month_rate); ?>">
    </p>
    <p>
        <label for="fuel_surcharges"><?php echo esc_html('Fuel surcharges')?></label>
        <input type="text" name="fuel_surcharges" id="fuel_surcharges" value="<?php echo esc_attr($fuel_surcharges); ?>">
    </p>
    <p>
        <label for="car_mileage"><?php echo esc_html('Car Mileage')?></label>
        <input type="text" name="car_mileage" id="car_mileage" value="<?php echo esc_attr($car_mileage); ?>">
    </p>
    <p>
        <label for="car_transmission"><?php echo esc_html('Car Transmission')?></label>
        <select name="car_transmission" id="car_transmission">
            <option value="">Select Transmission</option>
            <option value="manual" <?php if($car_transmission == 'manual') { echo 'selected';} ?> >Manual</option>
            <option value="automatic" <?php if($car_transmission == 'automatic') { echo 'selected';} ?>>Automatic</option>
        </select>
    </p>
    <p>
        <label for="car_seats"><?php echo esc_html('Car Seats')?></label>
        <select name="car_seats" id="car_seats">
            <option value="">Select Seats</option>
            <option value="2" <?php if($car_seats == '2') { echo 'selected';} ?> >2</option>
            <option value="4" <?php if($car_seats == '4') { echo 'selected';} ?>>4</option>
            <option value="5" <?php if($car_seats == '5') { echo 'selected';} ?>>5</option>
            <option value="6" <?php if($car_seats == '6') { echo 'selected';} ?>>6</option>
            <option value="7" <?php if($car_seats == '7') { echo 'selected';} ?>>7</option>
        </select>
    </p>
    <p>
        <label for="car_luggage"><?php echo esc_html('Car Luggage')?></label>
        <select name="car_luggage" id="car_luggage">
            <option value="">Select Luggage</option>
            <option value="1" <?php if($car_luggage == '1') { echo 'selected';} ?> >1</option>
            <option value="2" <?php if($car_luggage == '2') { echo 'selected';} ?> >2</option>
            <option value="4" <?php if($car_luggage == '4') { echo 'selected';} ?>>4</option>
            <option value="5" <?php if($car_luggage == '5') { echo 'selected';} ?>>5</option>
            <option value="6" <?php if($car_luggage == '6') { echo 'selected';} ?>>6</option>
            <option value="7" <?php if($car_luggage == '7') { echo 'selected';} ?>>7</option>
        </select>
    </p>
    <p>
        <label for="car_fuel"><?php echo esc_html('Car Fuel')?></label>
        <select name="car_fuel" id="car_fuel">
            <option value="">Select Fuel</option>
            <option value="petrol" <?php if($car_fuel == 'petrol') { echo 'selected';} ?> >Petrol</option>
            <option value="diesel" <?php if($car_fuel == 'diesel') { echo 'selected';} ?> >Diesel</option>
            <option value="methane" <?php if($car_fuel == 'methane') { echo 'selected';} ?>>Methane</option>
            <option value="motor_spirit" <?php if($car_fuel == 'motor_spirit') { echo 'selected';} ?>>Motor spirit</option>
        </select>
    </p>
    <p>
		<input type="hidden" name="car_features[airconditions]" value="">
		<label><input type="checkbox" name="car_features[airconditions]" value="1" <?php checked( get_post_meta($post->ID, 'airconditions', 1), 1 )?> /> Airconditions</label>
		<input type="hidden" name="car_features[child_seat]" value="">
		<label><input type="checkbox" name="car_features[child_seat]" value="1" <?php checked( get_post_meta($post->ID, 'child_seat', 1), 1 )?> /> Child seat</label>
		<input type="hidden" name="car_features[GPS]" value="">
        <label><input type="checkbox" name="car_features[GPS]" value="1" <?php checked( get_post_meta($post->ID, 'GPS', 1), 1 )?> /> GPS</label>
		<input type="hidden" name="car_features[luggage]" value="">
        <label><input type="checkbox" name="car_features[luggage]" value="1" <?php checked( get_post_meta($post->ID, 'luggage', 1), 1 )?> /> Luggage</label>
		<input type="hidden" name="car_features[music]" value="">
        <label><input type="checkbox" name="car_features[music]" value="1" <?php checked( get_post_meta($post->ID, 'music', 1), 1 )?> /> Music</label>
		<input type="hidden" name="car_features[seat_belt]" value="">
        <label><input type="checkbox" name="car_features[seat_belt]" value="1" <?php checked( get_post_meta($post->ID, 'seat_belt', 1), 1 )?> /> Seat Belt</label>
		<input type="hidden" name="car_features[sleeping_bed]" value="">
        <label><input type="checkbox" name="car_features[sleeping_bed]" value="1" <?php checked( get_post_meta($post->ID, 'sleeping_bed', 1), 1 )?> /> Sleeping Bed</label>
		<input type="hidden" name="car_features[water]" value="">
        <label><input type="checkbox" name="car_features[water]" value="1" <?php checked( get_post_meta($post->ID, 'water', 1), 1 )?> /> Water</label>
		<input type="hidden" name="car_features[bluetooth]" value="">
        <label><input type="checkbox" name="car_features[bluetooth]" value="1" <?php checked( get_post_meta($post->ID, 'bluetooth', 1), 1 )?> /> Bluetooth</label>
		<input type="hidden" name="car_features[onboard_computer]" value="">
        <label><input type="checkbox" name="car_features[onboard_computer]" value="1" <?php checked( get_post_meta($post->ID, 'onboard_computer', 1), 1 )?> /> Onboard computer</label>
		
        <input type="hidden" name="car_features[audio_input]" value="">
        <label><input type="checkbox" name="car_features[audio_input]" value="1" <?php checked( get_post_meta($post->ID, 'audio_input', 1), 1 )?> /> Audio input</label>
		<input type="hidden" name="car_features[long_term_trips]" value="">
        <label><input type="checkbox" name="car_features[long_term_trips]" value="1" <?php checked( get_post_meta($post->ID, 'long_term_trips', 1), 1 )?> /> Long Term Trips</label>
		<input type="hidden" name="car_features[car_kit]" value="">
        <label><input type="checkbox" name="car_features[car_kit]" value="1" <?php checked( get_post_meta($post->ID, 'car_kit', 1), 1 )?> />Car Kit</label>
		<input type="hidden" name="car_features[remote_central_locking]" value="">
        <label><input type="checkbox" name="car_features[remote_central_locking]" value="1" <?php checked( get_post_meta($post->ID, 'remote_central_locking', 1), 1 )?> />Remote central locking</label>
		<input type="hidden" name="car_features[climate_control]" value="">
        <label><input type="checkbox" name="car_features[climate_control]" value="1" <?php checked( get_post_meta($post->ID, 'climate_control', 1), 1 )?> />Climate control</label>
		
	</p>
    <?php
}

function carbook_save_metabox($post_id, $post) {
    if(!isset($_POST['_carmetabox']) || !wp_verify_nonce($_POST['_carmetabox'], 'ajfakjsdfjasdjf')) {
        return $post_id;
    }
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    };
    if($post->post_type != 'car') {
        return $post_id;
    }

    $post_type = get_post_type_object($post->post_type);
    if(!current_user_can($post_type->cap->edit_post, $post_id)){
        return $post_id;
    }

   
    if(isset($_POST['per_hour_rate'])) {
        update_post_meta($post_id, 'per_hour_rate', sanitize_text_field($_POST['per_hour_rate']) );
    } else {
        delete_post_meta($post_id, 'per_hour_rate');
    }
    if(isset($_POST['per_day_rate'])) {
        update_post_meta($post_id, 'per_day_rate', sanitize_text_field($_POST['per_day_rate']) );
    } else {
        delete_post_meta($post_id, 'per_day_rate');
    }
    if(isset($_POST['per_month_rate'])) {
        update_post_meta($post_id, 'per_month_rate', sanitize_text_field($_POST['per_month_rate']) );
    } else {
        delete_post_meta($post_id, 'per_month_rate');
    }
    if(isset($_POST['fuel_surcharges'])) {
        update_post_meta($post_id, 'fuel_surcharges', sanitize_text_field($_POST['fuel_surcharges']) );
    } else {
        delete_post_meta($post_id, 'fuel_surcharges');
    }

    if(isset($_POST['car_mileage'])) {
        update_post_meta($post_id, 'car_mileage', sanitize_text_field($_POST['car_mileage']) );
    } else {
        delete_post_meta($post_id, 'car_mileage');
    }
    
    if(isset($_POST['car_transmission'])) {
        update_post_meta($post_id, 'car_transmission', sanitize_text_field($_POST['car_transmission']) );
    } else {
        delete_post_meta($post_id, 'car_transmission');
    }
    if(isset($_POST['car_seats'])) {
        update_post_meta($post_id, 'car_seats', sanitize_text_field($_POST['car_seats']) );
    } else {
        delete_post_meta($post_id, 'car_seats');
    }
    if(isset($_POST['car_luggage'])) {
        update_post_meta($post_id, 'car_luggage', sanitize_text_field($_POST['car_luggage']) );
    } else {
        delete_post_meta($post_id, 'car_luggage');
    }
    if(isset($_POST['car_fuel'])) {
        update_post_meta($post_id, 'car_fuel', sanitize_text_field($_POST['car_fuel']) );
    } else {
        delete_post_meta($post_id, 'car_fuel');
    }
    $_POST['car_features'] = array_map( 'sanitize_text_field', $_POST['car_features'] );
	foreach( $_POST['car_features'] as $key => $value ){
		if( empty($value) ){
			delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
	}

    return $post_id;
}

add_action( 'save_post', 'carbook_save_metabox', 10, 2);


?>
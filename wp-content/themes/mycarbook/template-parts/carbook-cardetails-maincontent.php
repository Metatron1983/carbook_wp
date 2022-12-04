<?php 
$cur_terms = get_the_terms( get_the_ID(), 'brand' );

$airconditions_val = get_post_meta(get_the_ID(), 'airconditions', 1);
$airconditions = get_checked_class($airconditions_val);

$child_seat_val = get_post_meta(get_the_ID(), 'child_seat', 1);
$child_seat = get_checked_class($child_seat_val);

$GPS_val = get_post_meta(get_the_ID(), 'GPS', 1);
$GPS = get_checked_class($GPS_val);

$luggage_val = get_post_meta(get_the_ID(), 'luggage', 1);
$luggage = get_checked_class($luggage_val);

$music_val = get_post_meta(get_the_ID(), 'music', 1);
$music = get_checked_class($music_val);

$seat_belt_val = get_post_meta(get_the_ID(), 'seat_belt', 1);
$seat_belt = get_checked_class($seat_belt_val);

$sleeping_bed_val = get_post_meta(get_the_ID(), 'sleeping_bed', 1);
$sleeping_bed = get_checked_class($sleeping_bed_val);

$water_val = get_post_meta(get_the_ID(), 'water', 1);
$water = get_checked_class($water_val);

$bluetooth_val = get_post_meta(get_the_ID(), 'bluetooth', 1);
$bluetooth = get_checked_class($bluetooth_val);

$onboard_computer_val = get_post_meta(get_the_ID(), 'onboard_computer', 1);
$onboard_computer = get_checked_class($onboard_computer_val);

$audio_input_val = get_post_meta(get_the_ID(), 'audio_input', 1);
$audio_input = get_checked_class($audio_input_val);

$long_term_trips_val = get_post_meta(get_the_ID(), 'long_term_trips', 1);
$long_term_trips = get_checked_class($long_term_trips_val);

$car_kit_val = get_post_meta(get_the_ID(), 'car_kit', 1);
$car_kit = get_checked_class($car_kit_val);

$remote_central_locking_val = get_post_meta(get_the_ID(), 'remote_central_locking', 1);
$remote_central_locking = get_checked_class($remote_central_locking_val);

$climate_control_val = get_post_meta(get_the_ID(), 'climate_control', 1);
$climate_control = get_checked_class($climate_control_val);


function get_checked_class($post_meta_val){
    $result = [
        'span'=>"ion-ios-checkmark",
        'li' => 'check'
    ];
    if($post_meta_val === "") {
        $result['span'] = "ion-ios-close";
        $result['li'] = "remove";
    }
    return $result;
}
?>
<section class="ftco-section ftco-car-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="car-details">
      				<div class="img rounded" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url( get_the_ID(), 'full' )); ?>);"></div>
      				<div class="text text-center">
      					<span class="subheading"><?php echo esc_html($cur_terms[0]->name) ?></span>
      					<h2><?php esc_html(the_title()) ?></h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Mileage
		                	<span><?php echo esc_html(get_post_meta(get_the_ID(), 'car_mileage', true)) ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Transmission
		                	<span style="text-transform: capitalize"><?php echo esc_html(get_post_meta(get_the_ID(), 'car_transmission', true)) ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Seats
		                	<span><?php echo esc_html(get_post_meta(get_the_ID(), 'car_seats', true))?> Adults</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Luggage
		                	<span><?php echo esc_html(get_post_meta(get_the_ID(), 'car_luggage', true))?> Bags</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Fuel
		                	<span style="text-transform: capitalize"><?php echo esc_html(get_post_meta(get_the_ID(), 'car_fuel', true))?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="<?php echo esc_attr($airconditions['li']) ?>"><span class="<?php echo esc_attr($airconditions['span']) ?>"></span>Airconditions</li>
						    				<li class="<?php echo esc_attr($child_seat['li']) ?>"><span class="<?php echo esc_attr($child_seat['span']) ?>"></span>Child Seat</li>
						    				<li class="<?php echo esc_attr($GPS['li']) ?>"><span class="<?php echo esc_attr($GPS['span']) ?>"></span>GPS</li>
						    				<li class="<?php echo esc_attr($luggage['li']) ?>"><span class="<?php echo esc_attr($luggage['span']) ?>"></span>Luggage</li>
						    				<li class="<?php echo esc_attr($music['li']) ?>"><span class="<?php echo esc_attr($music['span']) ?>"></span>Music</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="<?php echo esc_attr($seat_belt['li']) ?>"><span class="<?php echo esc_attr($seat_belt['span']) ?>"></span>Seat Belt</li>
						    				<li class="<?php echo esc_attr($sleeping_bed['li']) ?>"><span class="<?php echo esc_attr($sleeping_bed['span']) ?>"></span>Sleeping Bed</li>
						    				<li class="<?php echo esc_attr($water['li']) ?>"><span class="<?php echo esc_attr($water['span']) ?>"></span>Water</li>
						    				<li class="<?php echo esc_attr($bluetooth['li']) ?>"><span class="<?php echo esc_attr($bluetooth['span']) ?>"></span>Bluetooth</li>
						    				<li class="<?php echo esc_attr($onboard_computer['li']) ?>"><span class="<?php echo esc_attr($onboard_computer['span']) ?>"></span>Onboard computer</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="<?php echo esc_attr($audio_input['li']) ?>"><span class="<?php echo esc_attr($audio_input['span']) ?>"></span>Audio input</li>
						    				<li class="<?php echo esc_attr($long_term_trips['li']) ?>"><span class="<?php echo esc_attr($long_term_trips['span']) ?>"></span>Long Term Trips</li>
						    				<li class="<?php echo esc_attr($car_kit['li']) ?>"><span class="<?php echo esc_attr($car_kit['span']) ?>"></span>Car Kit</li>
						    				<li class="<?php echo esc_attr($remote_central_locking['li']) ?>"><span class="<?php echo esc_attr($remote_central_locking['span']) ?>"></span>Remote central locking</li>
						    				<li class="<?php echo esc_attr($climate_control['li']) ?>"><span class="<?php echo esc_attr($climate_control['span']) ?>"></span>Climate control</li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p><?php echo get_the_content() ?></p>
						    </div>

						    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
						      <div class="row">
							   		<div class="col-md-7">
							   			<h3 class="head">23 Reviews</h3>
							   			<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
									   	<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
									   	<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
							   		</div>
							   		<div class="col-md-5">
							   			<div class="rating-wrap">
								   			<h3 class="head">Give a Review</h3>
								   			<div class="wrap">
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(98%)
								   					</span>
								   					<span>20 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(85%)
								   					</span>
								   					<span>10 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(70%)
								   					</span>
								   					<span>5 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(10%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(0%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   		</div>
								   		</div>
							   		</div>
							   	</div>
						    </div>
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>
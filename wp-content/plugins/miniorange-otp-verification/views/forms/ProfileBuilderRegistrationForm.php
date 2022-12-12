<?php

use OTP\Helper\MoMessages;

echo' 	<div class="mo_otp_form" id="'.get_mo_class($handler).'"><input type="checkbox" '.esc_attr($disabled).' id="pb_default" class="app_enable" name="mo_customer_validation_pb_default_enable" value="1" data-toggle="pb_default_options"
			'.esc_attr($pb_enabled).' /><strong>'. esc_attr($form_name) .'</strong>';

	echo'	<div class="mo_registration_help_desc" '.esc_attr($pb_hidden).' id="pb_default_options">
				<b>'. mo_( "Choose between Phone or Email Verification" ).'</b>
				<p>
					<input type="radio" '.esc_attr($disabled).' id="pb_phone" class="app_enable" data-toggle="pb_phone_options" name="mo_customer_validation_pb_enable_type" value="'.esc_attr($pb_reg_type_phone).'"
						'.(esc_attr($pb_enable_type) == esc_attr($pb_reg_type_phone) ? "checked" : "" ).'/>
						<strong>'. mo_( "Enable Phone Verification" ).' <i>'.  mo_( "( Requires Hobbyist Version )" ) . '</i></strong>
				</p>
				<div '.(esc_attr($pb_enable_type) != esc_attr($pb_reg_type_phone) ? "hidden" :"").' id="pb_phone_options" class="pb_form mo_registration_help_desc" >
					<ol>
						<li><a href="'.esc_url($pb_fields).'"  target="_blank">'. mo_( "Click Here" ).'</a> '. mo_( " to see your list of fields" ).'</li>
						<li>'. mo_( "Choose a phone field from the Field Dropdown" ).'</li>
						<li>'. mo_( "Keep track of the Meta Name of the phone field as you will need it later on." ).'</li>
						<li>'. mo_( "Make sure to mark the phone field as required." ).'</li>
						<li>'. mo_( "Enter the meta name of your phone field" ).': <input class="mo_registration_table_textbox" id="mo_customer_validation_pb_phone_field_key" name="mo_customer_validation_pb_phone_field_key" type="text" value="'.esc_attr($pb_phone_key).'"></li>
					</ol>
				</div>
				<p>
					<input type="radio" '.esc_attr($disabled).' id="pb_email" class="app_enable" name="mo_customer_validation_pb_enable_type" value="'.esc_attr($pb_reg_type_email).'"
						'.(esc_attr($pb_enable_type) == esc_attr($pb_reg_type_email)? "checked" : "" ).'/>
						<strong>'. mo_( "Enable Email Verification" ).'</strong>
				</p>
				<p>
					<input type="radio" '.esc_attr($disabled).' id="pb_both" class="app_enable" name="mo_customer_validation_pb_enable_type" data-toggle="pb_both_options"
						value="'.esc_attr($pb_reg_type_both).'" '.(esc_attr($pb_enable_type) == esc_attr($pb_reg_type_both)? "checked" : "" ).'/>
						<strong>'. mo_( "Let the user choose" ).'</strong>';
							mo_draw_tooltip(
							    MoMessages::showMessage(MoMessages::INFO_HEADER),MoMessages::showMessage(MoMessages::ENABLE_BOTH_BODY)
                            );
echo '			</p>
				<div '.(esc_attr($pb_enable_type) != esc_attr($pb_reg_type_both) ? "hidden" :"").' id="pb_both_options" class="pb_form mo_registration_help_desc" >
					<ol>
						<li><a href="'.esc_url($pb_fields).'"  target="_blank">'. mo_( "Click Here" ).'</a> '. mo_( " to see your list of fields" ).'</li>
						<li>'. mo_( "Choose a phone field from the Field Dropdown" ).'</li>
						<li>'. mo_( "Keep track of the Meta Name of the phone field as you will need it later on." ).'</li>
						<li>'. mo_( "Make sure to mark the phone field as required." ).'</li>
						<li>'. mo_( "Enter the meta name of your phone field" ).': <input class="mo_registration_table_textbox" id="mo_customer_validation_pb_phone_field_key1" name="mo_customer_validation_pb_phone_field_key" type="text" value="'.esc_attr($pb_phone_key).'"></li>
					</ol>
				</div>
			</div>';

echo' 	</div>';
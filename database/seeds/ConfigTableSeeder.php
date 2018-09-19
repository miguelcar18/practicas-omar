<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('config')->delete();
        
        \DB::table('config')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'logo',
                'value' => '59482b252e231.png',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'session_lifetime',
                'value' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'reset_token_lifetime',
                'value' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'lock_screen_timeout',
                'value' => '1',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'throttle_attempt',
                'value' => '5',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'throttle_lockout_period',
                'value' => '2',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'login',
                'value' => '1',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'enable_user_registration',
                'value' => '1',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'enable_forgot_password',
                'value' => '1',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'recaptcha_key',
                'value' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'recaptcha_secret',
                'value' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'enable_two_factor_auth',
                'value' => '0',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'two_factor_auth_type',
                'value' => '1',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'enable_lock_screen',
                'value' => '0',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'enable_throttle',
                'value' => '0',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'enable_password_strength_meter',
                'value' => '0',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'enable_email_verification',
                'value' => '0',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'enable_admin_approval',
                'value' => '0',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'enable_tnc',
                'value' => '0',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'enable_remember_me',
                'value' => '0',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'session_expire_browser_close',
                'value' => '1',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'enable_recaptcha',
                'value' => '0',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'company_name',
                'value' => 'Hispano Soluciones',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'contact_person',
                'value' => 'Admin',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'email',
                'value' => 'secretadmin@gmail.com',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'phone',
                'value' => '0412123457',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'address_1',
                'value' => '',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'address_2',
                'value' => '',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'city',
                'value' => '',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'state',
                'value' => '',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'zipcode',
                'value' => '02125',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'country_id',
                'value' => '248',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'application_name',
                'value' => 'Larafy Your Project',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'timezone_id',
                'value' => '266',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'default_language',
                'value' => 'en',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'direction',
                'value' => 'ltr',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'date_format',
                'value' => 'd-m-Y',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'allowed_upload_file',
                'value' => '',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'notification_position',
                'value' => 'toast-top-left',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'error_display',
                'value' => '0',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'multilingual',
                'value' => '1',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'chat_refresh_duration',
                'value' => '60',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'under_maintenance_message',
                'value' => 'The system is under maitnenance.',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'time_format',
                'value' => '1',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'enable_ip_filter',
                'value' => '1',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'enable_activity_log',
                'value' => '1',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'enable_email_template',
                'value' => '1',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'enable_to_do',
                'value' => '0',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'enable_message',
                'value' => '0',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'enable_backup',
                'value' => '1',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'enable_custom_field',
                'value' => '0',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'enable_group_chat',
                'value' => '0',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'enable_chat_refresh',
                'value' => '0',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'maintenance_mode',
                'value' => '0',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'enable_oauth',
                'value' => '0',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'facebook_client_id',
                'value' => '',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'facebook_client_secret',
                'value' => '',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'facebook_redirect',
                'value' => '',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'twitter_client_id',
                'value' => '',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'twitter_client_secret',
                'value' => '',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'twitter_redirect',
                'value' => '',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'google_client_id',
                'value' => '',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'google_client_secret',
                'value' => '',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'google_redirect',
                'value' => '',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'github_client_id',
                'value' => '',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'github_client_secret',
                'value' => '',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'github_redirect',
                'value' => '',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'enable_social_login',
                'value' => '0',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'enable_facebook_login',
                'value' => '0',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'enable_twitter_login',
                'value' => '0',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'enable_google_login',
                'value' => '0',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'enable_github_login',
                'value' => '0',
            ),
        ));
        
        
    }
}
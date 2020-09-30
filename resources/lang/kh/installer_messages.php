<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => config('app.name', 'zCart') . ' អ្នកដំឡើង',
    'next' => 'ជំហាន​បន្ទាប់',
    'back' => 'មុន',
    'finish' => 'ដំឡើង',
    'forms' => [
        'errorTitle' => 'កំហុសដូចខាងក្រោមកើតឡើង:',
    ],
    'wait' => 'សូមរង់ចាំ, ការដំឡើងអាចចំណាយពេលពីរបីនាទី.',

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'សូមស្វាគមន៍',
        'title'   => config('app.name', 'zCart') . ' អ្នកដំឡើង',
        'message' => 'អ្នកជំនួយការតំឡើងនិងតំឡើងងាយស្រួល.',
        'next'    => 'ពិនិត្យតម្រូវការ',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'ជំហានទី ១ | តម្រូវការម៉ាស៊ីនមេ',
        'title' => 'តម្រូវការម៉ាស៊ីនមេ',
        'next'    => 'ពិនិត្យសិទ្ធិ',
        'required' => 'ត្រូវកំណត់តម្រូវការម៉ាស៊ីនមេទាំងអស់ដើម្បីបន្ត',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'ជំហានទី ២ | ការអនុញ្ញាត',
        'title' => 'ការអនុញ្ញាត',
        'next' => 'កំណត់រចនាសម្ព័ន្ធបរិស្ថាន',
        'required' => 'កំណត់ការអនុញ្ញាតតាមតម្រូវការដើម្បីបន្ត. អានឯកសារសម្រាប់ជំនួយ.',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'ជំហានទី ៣ | ការកំណត់បរិស្ថាន',
            'title' => 'ការកំណត់បរិស្ថាន',
            'desc' => 'សូមជ្រើសរើសវិធីដែលអ្នកចង់តំឡើងកម្មវិធី <code>.env</code> ឯកសារ.',
            'wizard-button' => 'ការរៀបចំអ្នកជំនួយការសំណុំបែបបទ',
            'classic-button' => 'កម្មវិធីនិពន្ធអត្ថបទបុរាណ',
        ],
        'wizard' => [
            'templateTitle' => 'ជំហានទី ៣ | ការកំណត់បរិស្ថាន | អ្នកជំនួយការណែនាំ',
            'title' => 'ណែនាំ <code>.env</code> អ្នកជំនួយការ',
            'tabs' => [
                'environment' => 'បរិស្ថាន',
                'database' => 'មូលដ្ឋានទិន្នន័យ',
                'application' => 'ពាក្យសុំ'
            ],
            'form' => [
                'name_required' => 'ទាមទារឈ្មោះបរិស្ថាន.',
                'app_name_label' => 'ឈ្មោះកម្មវិធី',
                'app_name_placeholder' => 'ឈ្មោះកម្មវិធី',
                'app_environment_label' => 'បរិស្ថានកម្មវិធី',
                'app_environment_label_local' => 'ក្នុងស្រុក',
                'app_environment_label_developement' => 'ការអភិវឌ្ឍន៍',
                'app_environment_label_qa' => 'សំណួរ & ចម្លើយ',
                'app_environment_label_production' => 'ផលិតផល',
                'app_environment_label_other' => 'ផ្សេងទៀត',
                'app_environment_placeholder_other' => 'ចូលបរិដ្ឋានរបស់អ្នក...',
                'app_debug_label' => 'កម្មវិធីបំបាត់កំហុស',
                'app_debug_label_true' => 'ពិត',
                'app_debug_label_false' => 'មិនពិត',
                'app_log_level_label' => 'កំរិតកំណត់កម្មវិធី',
                'app_log_level_label_debug' => 'បំបាត់កំហុស',
                'app_log_level_label_info' => 'ព័ត៌មាន',
                'app_log_level_label_notice' => 'សម្គាល់ឃើញ',
                'app_log_level_label_warning' => 'ការព្រមាន',
                'app_log_level_label_error' => 'កំហុស',
                'app_log_level_label_critical' => 'សំខាន់',
                'app_log_level_label_alert' => 'ដាស់តឿន',
                'app_log_level_label_emergency' => 'បន្ទាន់',
                'app_url_label' => 'កម្មវិធី Url',
                'app_url_placeholder' => 'កម្មវិធី Url',
                'db_connection_failed' => 'មិនអាចភ្ជាប់ទៅឃ្លាំងទិន្នន័យ. ពិនិត្យការកំណត់រចនាសម្ព័ន្ធ.',
                'db_connection_label' => 'ការភ្ជាប់មូលដ្ឋានទិន្នន័យ',
                'db_connection_label_mysql' => 'mySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'pgSQL',
                'db_connection_label_sqlsrv' => 'SQLsrv',
                'db_host_label' => 'ម៉ាស៊ីនមូលដ្ឋានទិន្នន័យ',
                'db_host_placeholder' => 'ម៉ាស៊ីនមូលដ្ឋានទិន្នន័យ',
                'db_port_label' => 'កំពង់ផែមូលដ្ឋានទិន្នន័យ',
                'db_port_placeholder' => 'កំពង់ផែមូលដ្ឋានទិន្នន័យ',
                'db_name_label' => 'ឈ្មោះមូលដ្ឋានទិន្នន័យ',
                'db_name_placeholder' => 'ឈ្មោះមូលដ្ឋានទិន្នន័យ',
                'db_username_label' => 'ឈ្មោះអ្នកប្រើមូលដ្ឋានទិន្នន័យ',
                'db_username_placeholder' => 'ឈ្មោះអ្នកប្រើមូលដ្ឋានទិន្នន័យ',
                'db_password_label' => 'ពាក្យសម្ងាត់មូលដ្ឋានទិន្នន័យ',
                'db_password_placeholder' => 'ពាក្យសម្ងាត់មូលដ្ឋានទិន្នន័យ',

                'app_tabs' => [
                    'more_info' => 'ព័​ត៍​មាន​បន្ថែម',
                    'broadcasting_title' => 'ការផ្សាយ, ឃ្លាំងសម្ងាត់, វគ្គ, និង ជួរ',
                    'broadcasting_label' => 'កម្មវិធីបញ្ជាផ្សព្វផ្សាយ',
                    'broadcasting_placeholder' => 'កម្មវិធីបញ្ជាផ្សព្វផ្សាយ',
                    'cache_label' => 'ឃ្លាំងសម្ងាត់កម្មវិធីបញ្ជា',
                    'cache_placeholder' => 'ឃ្លាំងសម្ងាត់កម្មវិធីបញ្ជា',
                    'session_label' => 'កម្មវិធីបញ្ជាសម័យ',
                    'session_placeholder' => 'កម្មវិធីបញ្ជាសម័យ',
                    'queue_label' => 'ជួរកម្មវិធីបញ្ជា',
                    'queue_placeholder' => 'ជួរកម្មវិធីបញ្ជា',
                    'redis_label' => 'Redis កម្មវិធីបញ្ជា',
                    'redis_host' => 'Redis ម្ចាស់ផ្ទះ',
                    'redis_password' => 'Redis ពាក្យសម្ងាត់',
                    'redis_port' => 'Redis កំពង់ផែ',

                    'mail_label' => 'សំបុត្រ',
                    'mail_driver_label' => 'សំបុត្រ អ្នកបើកបរ',
                    'mail_driver_placeholder' => 'សំបុត្រ អ្នកបើកបរ',
                    'mail_host_label' => 'សំបុត្រ ម៉ាស៊ីន',
                    'mail_host_placeholder' => 'សំបុត្រ ម៉ាស៊ីន',
                    'mail_port_label' => 'សំបុត្រ កំពង់ផែ',
                    'mail_port_placeholder' => 'សំបុត្រ កំពង់ផែ',
                    'mail_username_label' => 'សំបុត្រ ឈ្មោះ​អ្នកប្រើប្រាស់',
                    'mail_username_placeholder' => 'សំបុត្រ ឈ្មោះ​អ្នកប្រើប្រាស់',
                    'mail_password_label' => 'សំបុត្រ ពាក្យសម្ងាត់',
                    'mail_password_placeholder' => 'សំបុត្រ ពាក្យសម្ងាត់',
                    'mail_encryption_label' => 'សំបុត្រ ការអ៊ិនគ្រីប',
                    'mail_encryption_placeholder' => 'សំបុត្រ ការអ៊ិនគ្រីប',

                    'pusher_label' => 'អ្នករុញ',
                    'pusher_app_id_label' => 'អ្នករុញ កម្មវិធី Id',
                    'pusher_app_id_palceholder' => 'អ្នករុញ កម្មវិធី Id',
                    'pusher_app_key_label' => 'អ្នករុញ កម្មវិធី កូនសោ',
                    'pusher_app_key_palceholder' => 'អ្នករុញ កម្មវិធី កូនសោ',
                    'pusher_app_secret_label' => 'អ្នករុញ កម្មវិធី អាថ៌កំបាំង',
                    'pusher_app_secret_palceholder' => 'អ្នករុញ កម្មវិធី អាថ៌កំបាំង',
                ],
                'buttons' => [
                    'setup_database' => 'រៀបចំ មូលដ្ឋានទិន្នន័យ',
                    'setup_application' => 'រៀបចំ ពាក្យសុំ',
                    'install' => 'ដំឡើង',
                ],
            ],
        ],
        'classic' => [
            'backup' => 'ដើម្បីចៀសវាងការរញ៉េរញ៉ៃសូមចំលងហើយរក្សាទុកការតំរែតំរង់លំនាំដើមនៅកន្លែងផ្សេងទៀតមុនពេលអ្នកធ្វើការផ្លាស់ប្តូរ.',
            'templateTitle' => 'ជំហានទី ៣ | ការកំណត់បរិស្ថាន | កម្មវិធីនិពន្ធបុរាណ',
            'title' => 'កម្មវិធីនិពន្ធឯកសារបរិស្ថាន',
            'save' => 'រក្សាទុកការកំណត់រចនាសម្ព័ន្ធ',
            'back' => 'ប្រើអ្នកជំនួយការទម្រង់',
            'install' => 'ដំឡើង',
            'required' => 'ដោះស្រាយបញ្ហាដើម្បីបន្ត.',
        ],
        'success' => 'របស់អ្នក .env ឯកសារ ការកំណត់ត្រូវបានរក្សាទុក.',
        'errors' => 'មិនអាចរក្សាទុកឯកសារ .env ឯកសារ, សូមបង្កើតវាដោយដៃ.',
    ],

    'verify' => [
        'verify_purchase' => 'ផ្ទៀងផ្ទាត់ការទិញ',
        'submit' => 'ដាក់ស្នើ',
        'form' => [
            'email_address_label' => 'អាស័យ​ដ្ឋាន​អ៊ី​ម៉េ​ល',
            'email_address_placeholder' => 'អាស័យ​ដ្ឋាន​អ៊ី​ម៉េ​ល',
            'purchase_code_label' => 'លេខកូដទិញ',
            'purchase_code_placeholder' => 'លេខកូដទិញ ឬ លេខកូដអាជ្ញាប័ណ្',
            'root_url_label' => 'ឫស Url',
            'root_url_placeholder' => 'ឫស URL (ដោយគ្មាន/ នៅ​ចុង​បញ្ចប់)',
        ],
    ],

    'install' => 'ដំឡើង',
    'verified' => 'អាជ្ញាប័ណ្ណត្រូវបានផ្ទៀងផ្ទាត់ដោយជោគជ័យ.',
    'verification_failed' => 'ការផ្ទៀងផ្ទាត់អាជ្ញាប័ណ្ណបានបរាជ័យ!',

    /**
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => config('app.name', 'zCart') . ' បានដំឡើងដោយជោគជ័យតំឡើង ',
    ],

    /**
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'ជំហានចុងក្រោយ',
        'templateTitle' => 'ជំហានចុងក្រោយ',
        'finished' => 'កម្មវិធីត្រូវបានដំឡើងដោយជោគជ័យ.',
        'migration' => 'ការធ្វើចំណាកស្រុកនិងលទ្ធផលកុងសូលគ្រាប់ពូជ:',
        'console' => 'លទ្ធផលកុងសូលលទ្ធផល:',
        'log' => 'ធាតុកំណត់ហេតុតំឡើង:',
        'env' => 'ចុងក្រោយ .env ឯកសារ:',
        'exit' => 'ចុចត្រង់នេះដើម្បីចូល',
        'import_demo_data' => 'នាំចូលទិន្នន័យសាកល្បង',
    ],

    /**
     *
     * Update specific translations
     *
     */
    'updater' => [
        /**
         *
         * Shared translations.
         *
         */
        'title' => config('app.name', 'zCart') . ' អ្នកធ្វើបច្ចុប្បន្នភាព',

        /**
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'សូមស្វាគមន៍ចំពោះអ្នកធ្វើបច្ចុប្បន្នភាព',
            'message' => 'សូមស្វាគមន៍មកកាន់អ្នកជំនួយការធ្វើបច្ចុប្បន្នភាព.',
        ],

        /**
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'ទិដ្ឋភាពទូទៅ',
            'message' => 'មានការធ្វើបច្ចុប្បន្នភាពចំនួន ១.|មាន :number បច្ចុប្បន្នភាព.',
            'install_updates' => "ដំឡើងបច្ចុប្បន្នភាព"
        ],

        /**
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'ចប់ហើយ',
            'finished' => 'មូលដ្ឋានទិន្នន័យរបស់កម្មវិធីត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ.',
            'exit' => 'ចុចត្រង់នេះដើម្បីចាកចេញ',
        ],

        'log' => [
            'success_message' => config('app.name', 'zCart') . ' បានដំឡើងដោយជោគជ័យនៅលើ ',
        ],
    ],
];

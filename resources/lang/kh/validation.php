<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'នេះ :attribute ត្រូវតែទទួលយក.',
    'active_url'           => '
នេះ :attribute 
មិនត្រឹមត្រូវ URL.',
    'after'                => 'នេះ :attribute គុណលក្ខណៈត្រូវតែជាកាលបរិច្ឆេទបន្ទាប់ពី :date.',
    'after_or_equal'       => 'នេះ :attribute ត្រូវតែជាកាលបរិច្ឆេទបន្ទាប់ពីឬស្មើនឹង :date.',
    'alpha'                => 'នេះ :attribute អាចមានតែអក្សរ.',
    'alpha_dash'           => 'នេះ :attribute អាចមានតែអក្សរ, លេខ, និងសញ្ញាដាច់ ៗ.',
    'alpha_num'            => 'នេះ :attribute អាចមានតែអក្សរនិងលេខប៉ុណ្ណោះ.',
    'array'                => 'នេះ :attribute ត្រូវតែជាអារេមួយ.',
    'before'               => 'នេះ :attribute ត្រូវតែជាកាលបរិច្ឆេទមុន :date.',
    'before_or_equal'      => 'នេះ :attribute ត្រូវតែជាកាលបរិច្ឆេទមុនឬស្មើនឹង :date.',
    'between'              => [
        'numeric' => 'នេះ :attributeត្រូវតែនៅចន្លោះ :min និង :max.',
        'file'    => 'នេះ :attribute ត្រូវតែនៅចន្លោះ :min និង :max គីឡូបៃ.',
        'string'  => 'នេះ :attribute ត្រូវតែនៅចន្លោះ :min និង :max តួអក្សរ.',
        'array'   => 'នេះ :attribute ត្រូវតែមានរវាង :min និង :max របស់របរ.',
    ],
    'boolean'              => 'នេះ :attribute វាលត្រូវតែពិតឬមិនពិត.',
    'confirmed'            => 'នេះ :attribute ការបញ្ជាក់មិនត្រូវគ្នា.',
    'date'                 => 'នេះ :attributeមិនមែនជាកាលបរិច្ឆេទត្រឹមត្រូវទេ.',
    'date_format'          => 'នេះ :attribute មិនត្រូវនឹងទ្រង់ទ្រាយ :format.',
    'different'            => 'នេះ :attribute និង :other ត្រូវតែខុសគ្នា.',
    'digits'               => 'នេះ :attribute ត្រូវ​តែ​ជា :digits ខ្ទង់.',
    'digits_between'       => 'នេះ :attribute ត្រូវតែនៅចន្លោះ :min និង :max ខ្ទង់.',
    'dimensions'           => 'នេះ :attribute មានទំហំរូបភាពមិនត្រឹមត្រូវ.',
    'distinct'             => 'នេះ :attribute វាលមានតម្លៃជាន់គ្នា.',
    'email'                => 'នេះ :attribute ត្រូវតែជាអាសយដ្ឋានអ៊ីមែលត្រឹមត្រូវ.',
    'exists'               => 'នេះ បានជ្រើសរើស :attributeមិនត្រឹមត្រូវ.',
    'file'                 => 'នេះ :attribute ត្រូវតែជាឯកសារ.',
    'filled'               => 'នេះ :attribute វាលត្រូវតែមានតម្លៃ.',
    'image'                => 'នេះ :attribute ត្រូវតែជារូបភាព.',
    'in'                   => 'នេះ បានជ្រើសរើស :attributeមិនត្រឹមត្រូវ.',
    'in_array'             => 'នេះ :attribute វាលមិនមាននៅក្នុង :other.',
    'integer'              => 'នេះ :attribute ត្រូវតែជាចំនួនគត់.',
    'ip'                   => 'នេះ :attribute ត្រូវតែមានសុពលភាព IP អាសយដ្ឋាន.',
    'ipv4'                 => 'នេះ :attribute ត្រូវតែមានសុពលភាព IPv4 អាសយដ្ឋាន.',
    'ipv6'                 => 'នេះ :attribute ត្រូវតែមានសុពលភាព IPv6 អាសយដ្ឋាន.',
    'json'                 => 'នេះ :attribute ត្រូវតែមានសុពលភាព JSON ខ្សែអក្សរ.',
    'max'                  => [
        'numeric' => 'នេះ :attribute មិនអាចធំជាងនេះ :max.',
        'file'    => 'នេះ :attribute មិនអាចធំជាងនេះ :max គីឡូបៃ.',
        'string'  => 'នេះ :attribute មិនអាចធំជាងនេះ :max តួអក្សរ.',
        'array'   => 'នេះ :attribute ប្រហែលជាមិនមានច្រើនជាងនេះទេ :max របស់របរ.',
    ],
    'mimes'                => 'នេះ :attribute ត្រូវតែជាប្រភេទឯកសារ: :values.',
    'mimetypes'            => 'នេះ :attribute ត្រូវតែជាប្រភេទឯកសារ: :values.',
    'min'                  => [
        'numeric' => 'នេះ :attribute ត្រូវតែយ៉ាងហោចណាស់ :min.',
        'file'    => 'នេះ :attribute ត្រូវតែយ៉ាងហោចណាស់ :min គីឡូបៃ.',
        'string'  => 'នេះ :attribute ត្រូវតែយ៉ាងហោចណាស់ :min តួអក្សរ.',
        'array'   => 'នេះ :attribute ត្រូវមានយ៉ាងហោចណាស់ :min របស់របរ.',
    ],
    'not_in'               => 'នេះ បានជ្រើសរើស :attribute មិនត្រឹមត្រូវ.',
    'numeric'              => 'នេះ :attribute ត្រូវតែជាលេខ.',
    'present'              => 'នេះ :attribute វាលត្រូវតែមាន.',
    'regex'                => 'នេះ :attribute ្្រង់ទ្រាយមិនត្រឹមត្រូវ.',
    'required'             => 'នេះ :attribute វាលត្រូវបានទាមទារ.',
    'required_if'          => 'នេះ :attribute វាលត្រូវបានទាមទារពេលណា :other គឺ :value.',
    'required_unless'      => 'នេះ :attribute វាលត្រូវបានទាមទារលើកលែងតែ :other គឺនៅក្នុង :values.',
    'required_with'        => 'នេះ :attribute វាលត្រូវបានទាមទារពេលណា :values មានវត្តមាន.',
    'required_with_all'    => 'នេះ :attribute វាលត្រូវបានទាមទារពេលណា :valuesមានវត្តមាន.',
    'required_without'     => 'នេះ :attribute វាលត្រូវបានទាមទារពេលណា :values មិនមានវត្តមានទេ.',
    'required_without_all' => 'នេះ :attribute វាលត្រូវបានទាមទារនៅពេលដែលគ្មាន :values មានវត្តមាន.',
    'same'                 => 'នេះ :attribute និង :other ត្រូវតែផ្គូផ្គង.',
    'size'                 => [
        'numeric' => 'នេះ :attribute ត្រូវ​តែ​ជា :size.',
        'file'    => 'នេះ :attribute :size ត្រូវ​តែ​ជា គីឡូបៃ.',
        'string'  => 'នេះ :attribute ត្រូវ​តែ​ជា :size តួអក្សរ.',
        'array'   => 'នេះ :attribute ត្រូវតែមាន :size របស់របរ.',
    ],
    'string'               => 'នេះ :attribute ត្រូវតែជាខ្សែអក្សរ.',
    'timezone'             => 'នេះ :attribute ត្រូវតែជាតំបន់ដែលមានសុពលភាព.',
    'unique'               => 'នេះ :attribute ត្រូវបានគេយកទៅហើយ.',
    'uploaded'             => 'នេះ :attribute បានបរាជ័យក្នុងការផ្ទុកឡើង.',
    'url'                  => 'នេះ :attribute ទ្រង់ទ្រាយមិនត្រឹមត្រូវ.',

    // Custom app validations
    // 'full_name_required'            => 'ឈ្មោះរបស់អ្នកត្រូវបានទាមទារ',
    'composite_unique'              => 'នេះ :attribute :value already exists.',
    'register_email_unique'         => 'អាសយដ្ឋានអ៊ីមែលនេះមានគណនីរួចហើយ. សូមព្យាយាមអ្វីផ្សេង.',
    'role_type_required'            => 'ជ្រើសរើសប្រភេទតួនាទី.',
    'attribute_id_required'         => 'ជ្រើសរើសគុណលក្ខណៈ.',
    'attribute_type_id_required'    => 'ជ្រើសរើសប្រភេទគុណលក្ខណៈ.',
    'attribute_code_required'       => 'ទាមទារលេខកូដគុណលក្ខណៈ.',
    'attribute_value_required'      => 'វាលតម្លៃគុណលក្ខណៈត្រូវបានទាមទារ.',
    'category_list_required'        => 'ជ្រើសរើសយ៉ាងហោចណាស់មួយប្រភេទ.',
    'manufacturer_required'         => 'វាលអ្នកផលិតត្រូវបានទាមទារ.',
    'origin_required'               => 'ទាមទារវាលដើម.',
    'offer_start_required'          => 'នៅពេលអ្នកមានតំលៃផ្តល់ជូន, កាលបរិច្ឆេទចាប់ផ្តើមការផ្តល់ជូនត្រូវបានទាមទារ.',
    'offer_start_after'             => ' ពេលវេលាចាប់ផ្តើមនៃការផ្សព្វផ្សាយមិនអាចជាពេលវេលាកន្លងមកទេ.',
    'offer_end_required'            => 'នៅពេលអ្នកមានតំលៃផ្តល់ជូន, កាលបរិច្ឆេទបញ្ចប់ការផ្តល់ជូនត្រូវបានទាមទារ.',
    'offer_end_after'               => ' ពេលវេលាបញ្ចប់ការផ្តល់ជូនត្រូវតែជាពេលវេលាបន្ទាប់ពីការចាប់ផ្តើមផ្តល់ជូន.',
    'variants_required'             => 'វ៉ារ្យ៉ង់ទាមទារ',
    'sku-unique'                    => 'នេះ sku :value ត្រូវបានគេយកទៅហើយ. សាកល្បងថ្មី.',
    'sku-distinct'                  => 'វ៉ារ្យង់ :attribute មានស្ទួន sku តម្លៃ.',
    'offer_price-numeric'           => ' មិនមែនជាតម្លៃត្រឹមត្រូវទេ. តម្លៃផ្តល់ជូនត្រូវតែជាលេខ.',
    'email_template_id_required'    => 'ទាមទារគំរូអ៊ីមែល.',
    // 'merchant_have_shop'            => 'ឈ្មួញនេះមានហាងមួយ.',
    'brand_logo_max'                => 'ស្លាកសញ្ញាម៉ាកប្រហែលជាមិនធំជាង :max គីឡូបៃ.',
    'brand_logo_mimes'              => 'ស្លាកសញ្ញាយីហោត្រូវតែជាប្រភេទឯកសារ: :values.',
    'uploaded'                      => 'ទំហំឯកសារបានលើសចំនួនកំណត់ផ្ទុកអតិបរមានៅលើម៉ាស៊ីនមេរបស់អ្នក. សូមពិនិត្យមើលឯកសារ php.ini ឯកសារ.',
    'avatar_required'               => 'ជ្រើសរើសរូបតំណាង.',
    'subject_required_without'      => 'ប្រធានបទចាំបាច់ប្រសិនបើអ្នកមិនប្រើគំរូ.',
    'message_required_without'      => 'សារចាំបាច់ប្រសិនបើអ្នកមិនប្រើគំរូ.',
    'template_id_required_without_all'=> 'ជ្រើសរើសគំរូរឺតែងសារថ្មី.',
    'customer_required'             => 'ជ្រើសរើសអតិថិជន.',
    'reply_required_without' => 'ការឆ្លើយតបត្រូវបានទាមទារ.',
    'template_id_required_without'=> 'ជ្រើសរើសគម្រូត្រូវបានទាមទារនៅពេលដែលជំនួសដោយគំរូ.',
    'shipping_zone_tax_id_required' => 'ជ្រើសរើសទម្រង់ពន្ធសម្រាប់តំបន់',
    'shipping_zone_country_ids_required' => 'ជ្រើសរើសយ៉ាងហោចណាស់ប្រទេសមួយ',
    'rest_of_the_world_composite_unique' => 'តំបន់ដឹកជញ្ជូនពិភពលោកនៅសល់មានរួចហើយ.',
    'something_went_wrong' => 'មានអ្វីមួយមិនត្រឹមត្រូវ. .',
    'shipping_rate_required_unless' => '្្តល់អត្រាដឹកជញ្ជូន ឬជ្រើសរើស \'Free shipping\' ជម្រើស',
    'shipping_range_minimum_min' => 'ជួរអប្បបរមាមិនអាចជាតម្លៃអវិជ្ជមាន',
    'shipping_range_maximum_min' => 'ជួរអតិបរមាមិនអាចតូចជាងតម្លៃអប្បបរមាទេ',
    'csv_mimes'                => 'នេះ :attribute ត្រូវតែជាប្រភេទឯកសារ csv.',
    'import_data_required' => 'សំណុំទិន្នន័យមិនត្រឹមត្រូវក្នុងការនាំចូល. សូមពិនិត្យទិន្នន័យរបស់អ្នកហើយព្យាយាមម្តងទៀត.',
    'do_action_required'    => 'អ្នកមិនបានផ្តល់ព័ត៌មានបញ្ចូលទេ.',
    'do_action_invalid'    => 'ពាក្យគន្លឹះដែលបានផ្តល់ឱ្/ការបញ្ចូលមិនត្រឹមត្រូវ.',
    'recaptcha'=>'សូមធានាថាអ្នកជាមនុស្ស!',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'ទំនៀមទម្លាប់-សារ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    'upload_rows' => 'អ្នកអាចផ្ទុកឡើងអតិបរមា :rows កំណត់ត្រាក្នុងមួយបាច់.',
    'csv_upload_invalid_data' => 'ជួរខ្លះមានទិន្នន័យមិនត្រឹមត្រូវដែលមិនអាចដំណើរការបាន. 
សូមពិនិត្យទិន្នន័យរបស់អ្នកហើយព្យាយាមម្តងទៀត.',
];

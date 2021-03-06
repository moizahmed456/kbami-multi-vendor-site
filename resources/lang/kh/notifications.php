<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notifications Email Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the Notification library to build
    | the Notification emails. You are free to change them to anything
    | you want to customize your views to better match your platform.
    | Supported colors are blue, green, and red.
    |
    */

    // Auth Notifications
    'password_updated' => [
        'subject' => 'របស់អ្នក :marketplace ពាក្យសម្ងាត់ត្រូវបានធ្វើឱ្យទាន់សម័យដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :user!',
        'message' => 'ពាក្យសម្ងាត់ចូលគណនីរបស់អ្នកត្រូវបានផ្លាស់ប្តូរដោយជោគជ័យ! ប្រសិនបើអ្នកមិនបានធ្វើការផ្លាស់ប្តូរនេះទេ, សូមទាក់ទងមកយើងខ្ញុំ asap! ចុចប៊ូតុងខាងក្រោមដើម្បីចូលទៅទំព័រប្រវត្តិរូបរបស់អ្នក.',
        'button_text' => 'ទស្សនាប្រវត្តិរូបរបស់អ្នក',
    ],

    // Billing Notifications
    'invoice_created' => [
        'subject' => ':marketplace វិក័យប័ត្រថ្លៃសេវាកម្មប្រចាំខែ',
        'greeting' => 'សួស្តី :merchant!',
        'message' => 'សូមអរគុណសម្រាប់ការគាំទ្ររបស់អ្នក. យើងបានភ្ជាប់ច្បាប់ចម្លងនៃវិក័យប័ត្ររបស់អ្នកសម្រាប់កំណត់ត្រារបស់អ្នក. សូមប្រាប់ឱ្យយើងដឹងប្រសិនបើអ្នកមានសំណួរឬកង្វល់ណាមួយ!',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    // Customer Notifications
    'customer_registered' => [
        'subject' => 'សូមស្វាគមន៍​មកកាន់ :marketplace ទីផ្សារ!',
        'greeting' => 'អបអរសាទរ :customer!',
        'message' => 'គណនីរបស់អ្នកត្រូវបានបង្កើតដោយជោគជ័យ! ចុចប៊ូតុងខាងក្រោមដើម្បីបញ្ជាក់អាសយដ្ឋានអ៊ីមែលរបស់អ្នក.',
        'button_text' => 'បញ្ជាក់ខ្ញុំ',
    ],

    'customer_updated' => [
        'subject' => 'ព័ត៌មានគណនីត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :customer!',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាគណនីរបស់អ្នកត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'button_text' => 'ទស្សនាប្រវត្តិរូបរបស់អ្នក',
    ],

    'customer_password_reset' => [
        'subject' => 'កំណត់ការជូនដំណឹងពាក្យសម្ងាត់ឡើងវិញ',
        'greeting' => 'សួស្តី!',
        'message' => 'អ្នកកំពុងទទួលអ៊ីមែលនេះពីព្រោះយើងបានទទួលសំណើកំណត់លេខសម្ងាត់សម្រាប់គណនីរបស់អ្នក. ប្រសិនបើអ្នកមិនបានស្នើសុំកំណត់ពាក្យសម្ងាត់ឡើងវិញទេ, គ្រាន់តែមិនអើពើការជូនដំណឹងនេះហើយមិនមានទៀតទេ button_text គឺ​តំរូវ​អោយ​មាន.',
        'button_text' => 'កំណត់ពាក្យសម្ងាត់ឡើងវិញ',
    ],

    // Dispute Notifications
    'dispute_acknowledgement' => [
        'subject' => '[Order ID: :order_id] ជម្លោះត្រូវបានដាក់ស្នើដោយជោគជ័យ',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បី ឲ្យ អ្នកដឹងថាយើងបានទទួលជម្លោះរបស់អ្នកសម្រាប់ឯកសារនេះ បញ្ជាទិញ ID: :order_id, ក្រុមគាំទ្ររបស់យើងនឹងត្រលប់មកអ្នកវិញតាមដែលអាចធ្វើទៅបាន.',
        'button_text' => 'មើលជម្លោះ',
    ],

    'dispute_created' => [
        'subject' => 'ជម្លោះថ្មីសម្រាប់ការបញ្ជាទិញ ID: :order_id',
        'greeting' => 'សួស្តី :merchant!',
        'message' => 'អ្នកបានទទួលជម្លោះថ្មីសម្រាប់ការបញ្ជាទិញ ID: :order_id. សូមពិនិត្យមើលនិងដោះស្រាយបញ្ហាជាមួយអតិថិជន.',
        'button_text' => 'មើលជម្លោះ',
    ],

    'dispute_updated' => [
        'subject' => '[Order ID: :order_id] ស្ថានភាពវិវាទត្រូវបានធ្វើបច្ចុប្បន្នភាព!',
        'greeting' => 'សួស្តី :customer!',
        'message' => 'ជម្លោះសម្រាប់បទបញ្ជា ID :order_id បានធ្វើបច្ចុប្បន្នភាពសារនេះពីអ្នកលក់ ":reply". សូមពិនិត្យមើលនៅខាងក្រោមហើយទាក់ទងមកយើងប្រសិនបើអ្នកត្រូវការជំនួយណាមួយ.',
        'button_text' => 'មើលជម្លោះ',
    ],

    'dispute_appealed' => [
        'subject' => '[Order ID: :order_id] ជម្លោះបានប្តឹងឧទ្ធរណ៍!',
        'greeting' => 'សួស្តី!',
        'message' => 'ជម្លោះសម្រាប់បទបញ្ជា ID :order_id ត្រូវបានប្តឹងឧទ្ធរណ៍ជាមួយសារនេះ ":reply". សូមពិនិត្យមើលព័ត៌មានលម្អិតខាងក្រោម.',
        'button_text' => 'មើលជម្លោះ',
    ],

    'appealed_dispute_replied' => [
        'subject' => '[Order ID: :order_id] ការឆ្លើយតបថ្មីសម្រាប់ជម្លោះដែលបានប្តឹងឧទ្ធរណ៍!',
        'greeting' => 'សួស្តី!',
        'message' => 'ជម្លោះសម្រាប់បទបញ្ជា ID :order_id ត្រូវបានឆ្លើយតបជាមួយសារនេះ: </br></br> ":reply"',
        'button_text' => 'មើលជម្លោះ',
    ],

    // Inventory
    'low_inventory_notification' => [
        'subject' => 'ការជូនដំណឹងសារពើភ័ណ្ឌទាប!',
        'greeting' => 'សួស្តី!',
        'message' => 'ទំនិញសារពើភ័ណ្ឌមួយរឺច្រើនរបស់អ្នកចុះទាប. វាដល់ពេលត្រូវបន្ថែមសារពើភ័ណ្ឌបន្ថែមទៀតដើម្បីរក្សាទំនិញឱ្យនៅលើទីផ្សារ.',
        'button_text' => 'ធ្វើបច្ចុប្បន្នភាពសារពើភ័ណ្',
    ],

    'inventory_bulk_upload_procceed_notice' => [
        'subject' => 'សំណើនាំចូលសារពើភ័ណ្ឌភាគច្រើនរបស់អ្នកត្រូវបានដំណើរការ.',
        'greeting' => 'សួស្តី!',
        'message' => 'យើងរីករាយដែលបានប្រាប់អ្នកអោយដឹងថាសំណើនៃការនាំចូលស្តុកច្រើនរបស់អ្នកត្រូវបានដំណើរការ. ចំនួនជួរដេកសរុបដែលបាននាំចូលដោយជោគជ័យទៅក្នុងវេទិកា :success, ចំនួនជួរដេកបានបរាជ័យ :failed ',
        'failed' => 'សូមស្វែងរកឯកសារភ្ជាប់សម្រាប់ជួរដេកដែលបរាជ័យ.',
        'button_text' => 'មើលសារពើភ័ណ្ឌ',
    ],

    // Message Notifications
    'new_message' => [
        'subject' => ':subject',
        'greeting' => 'សួស្តី :receiver',
        'message' => ':message',
        'button_text' => 'មើលសារនៅលើគេហទំព័រ',
    ],

    'message_replied' => [
        'subject' => ':user បានឆ្លើយតប :subject',
        'greeting' => 'សួស្តី :receiver',
        'message' => ':reply',
        'button_text' => 'មើលសារនៅលើគេហទំព័រ',
    ],

    // Order Notifications
    'order_created' => [
        'subject' => '[Order ID: :order] ការបញ្ជាទិញរបស់អ្នកត្រូវបានដាក់ដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'សូមអរគុណចំពោះការជ្រើសរើសពួកយើង! ការបញ្ជាទិញរបស់អ្នក [Order ID :order] ត្រូវបានដាក់ដោយជោគជ័យ. យើងនឹងប្រាប់អ្នកអំពីស្ថានភាពនៃការបញ្ជាទិញ.',
        'button_text' => 'ទស្សនាហាង',
    ],

    'merchant_order_created_notification' => [
        'subject' => 'ការ​កុ​ម្ម​ង់​ថ្មី [Order ID: :order] ត្រូវបានគេដាក់នៅលើហាងរបស់អ្នក!',
        'greeting' => 'សួស្តី :merchant',
        'message' => 'ការ​កុ​ម្ម​ង់​ថ្មី [Order ID :order] ត្រូវបានគេដាក់. សូមពិនិត្យមើលការបញ្ជាទិញលំអិតនិងបំពេញការបញ្ជាទិញ asap.',
        'button_text' => 'បំពេញការបញ្ជាទិញ',
    ],

    'order_updated' => [
        'subject' => '[Order ID: :order] ស្ថានភាពការបញ្ជាទិញរបស់អ្នកត្រូវបានធ្វើបច្ចុប្បន្នភាព!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាការបញ្ជាទិញរបស់អ្នក [Order ID :order] ត្រូវបានធ្វើឱ្យទាន់សម័យ. សូមមើលព័ត៌មានលំអិតខាងក្រោម. អ្នកក៏អាចពិនិត្យមើលការបញ្ជាទិញរបស់អ្នកពីផ្ទាំងព័ត៌មានរបស់អ្នកផងដែរ.',
        'button_text' => 'ទស្សនាហាង',
    ],

    'order_fulfilled' => [
        'subject' => '[Order ID: :order] ការបញ្ជាទិញរបស់អ្នកនៅលើផ្លូវរបស់អ្នក!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាការបញ្ជាទិញរបស់អ្នក [Order ID :order] ត្រូវបានដឹកជញ្ជូន. វានៅតាមផ្លូវរបស់អ្នក. សូមមើលព័ត៌មានលំអិតខាងក្រោម. អ្នកក៏អាចពិនិត្យមើលការបញ្ជាទិញរបស់អ្នកពីផ្ទាំងព័ត៌មានរបស់អ្នកផងដែរ.',
        'button_text' => 'ទស្សនាហាង',
    ],

    'order_paid' => [
        'subject' => '[Order ID: :order] ការបញ្ជាទិញរបស់អ្នកត្រូវបានទូទាត់ដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាការបញ្ជាទិញរបស់អ្នក [Order ID :order] ត្រូវបានបង់ដោយជោគជ័យ. វានៅតាមផ្លូវរបស់អ្នក. សូមមើលព័ត៌មានលំអិតខាងក្រោម. អ្នកក៏អាចពិនិត្យមើលការបញ្ជាទិញរបស់អ្នកពីផ្ទាំងព័ត៌មានរបស់អ្នកផងដែរ.',
        'button_text' => 'ទស្សនាហាង',
    ],

    'order_payment_failed' => [
        'subject' => '[Order ID: :order] ការទូទាត់បានបរាជ័យ!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាការបញ្ជាទិញរបស់អ្នក [Order ID :order] ការទូទាត់ត្រូវបានបរាជ័យ. សូមមើលព័ត៌មានលំអិតខាងក្រោម. អ្នកក៏អាចពិនិត្យមើលការបញ្ជាទិញរបស់អ្នកពីផ្ទាំងព័ត៌មានរបស់អ្នកផងដែរ.',
        'button_text' => 'ទស្សនាហាង',
    ],

    // Refund Notifications
    'refund_initiated' => [
        'subject' => '[Order ID: :order] ការសងប្រាក់វិញត្រូវបានផ្តួចផ្តើមឡើង!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះជាការជូនដំណឹងដើម្បី ឲ្យ អ្នកដឹងថាយើងបានចាប់ផ្តើមស្នើសុំសំណងសម្រាប់ការបញ្ជាទិញរបស់អ្នក :order. ម្នាក់ក្នុងក្រុមរបស់យើងនឹងពិនិត្យមើលសំណើរនេះឆាប់ៗ. យើងនឹងប្រាប់អ្នកអំពីស្ថានភាពនៃសំណើ.',
    ],

    'refund_approved' => [
        'subject' => '[Order ID: :order] សំណើសងប្រាក់វិញត្រូវបានអនុម័ត!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះជាការជូនដំណឹងដើម្បី ឲ្យ អ្នកដឹងថាយើងបានយល់ព្រមលើសំណើសងប្រាក់វិញសម្រាប់ការបញ្ជាទិញរបស់អ្នក :order. ចំនួនទឹកប្រាក់សងវិញគឺ :amount. យើងបានផ្ញើប្រាក់ទៅវិធីសាស្ត្រទូទាត់របស់អ្នក, វាអាចចំណាយពេលពីរបីថ្ងៃដើម្បីដំណើរការគណនីរបស់អ្នក. ទាក់ទងអ្នកផ្តល់សេវាបង់ប្រាក់របស់អ្នកប្រសិនបើអ្នកមិនបានឃើញប្រាក់ដែលមានឥទ្ធិពលក្នុងរយៈពេលពីរបីថ្ងៃ.',
    ],

    'refund_declined' => [
        'subject' => '[Order ID: :order] សំណើសងប្រាក់វិញត្រូវបានបដិសេធ!',
        'greeting' => 'សួស្តី :customer',
        'message' => 'នេះជាការជូនដំណឹងដើម្បី ឲ្យ អ្នកដឹងថាសំណើសងប្រាក់វិញត្រូវបានបដិសេធសម្រាប់ការបញ្ជាទិញរបស់អ្នក :order. ប្រសិនបើអ្នកមិនពេញចិត្តនឹងដំណោះស្រាយរបស់អ្នកជំនួញទេ, អ្នកអាចទាក់ទងពាណិជ្ជករដោយផ្ទាល់ពីវេទិកាឬសូម្បីតែអ្នកអាចប្តឹងឧទ្ធរណ៍លើជម្លោះនេះ :marketplace. យើងនឹងឈានទៅរកការដោះស្រាយបញ្ហា.',
    ],

    // Shop Notifications
    'shop_created' => [
        'subject' => 'ហាងរបស់អ្នកបានត្រៀមរួចរាល់!',
        'greeting' => 'អបអរសាទរ :merchant!',
        'message' => 'ហាងរបស់អ្នក :shop_name ត្រូវបានបង្កើតដោយជោគជ័យ! ចុចប៊ូតុងខាងក្រោមដើម្បីចូលទៅក្នុងផ្ទាំងគ្រប់គ្រងហាង.',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    'shop_updated' => [
        'subject' => 'ព័ត៌មានហាងត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :merchant!',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីអោយអ្នកដឹងថាហាងរបស់អ្នក :shop_name ត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    'shop_config_updated' => [
        'subject' => 'ការតំឡើងហាងត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :merchant!',
        'message' => 'ការកំណត់រចនាសម្ព័ន្ធហាងរបស់អ្នកត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ! ចុចប៊ូតុងខាងក្រោមដើម្បីចូលទៅក្នុងផ្ទាំងគ្រប់គ្រងហាង.',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    'shop_down_for_maintainace' => [
        'subject' => 'ហាងរបស់អ្នកធ្លាក់ចុះហើយ!',
        'greeting' => 'សួស្តី :merchant!',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីអោយអ្នកដឹងថាហាងរបស់អ្នក :shop_name គឺធ្លាក់ចុះ! គ្មានអតិថិជនណាម្នាក់អាចមកហាងរបស់អ្នកបានទេរហូតដល់វារស់ឡើងវិញ.',
        'button_text' => 'ចូលទៅកាន់ទំព័រកំណត់រចនាសម្ព័ន្ធ',
    ],

    'shop_is_live' => [
        'subject' => 'ហាងរបស់អ្នកត្រលប់ទៅ LIVE វិញ!',
        'greeting' => 'សួស្តី :merchant',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីអោយអ្នកដឹងថាហាងរបស់អ្នក :shop_name ត្រលប់ទៅ LIVE ដោយជោគជ័យ!',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    'shop_deleted' => [
        'subject' => 'ហាងរបស់អ្នកត្រូវបានយកចេញពី :marketplace!',
        'greeting' => 'សួស្តីអ្នកជំនួញ!',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីអោយអ្នកដឹងថាហាងរបស់អ្នកត្រូវបានលុបចេញពីកន្លែងសម្គាល់របស់យើង!យើង​នឹង​នឹក​អ្នក.',
    ],

    // System Notifications
    'system_is_down' => [
        'subject' => 'ទីផ្សាររបស់អ្នក៖ ទីផ្សារធ្លាក់ចុះឥឡូវនេះ!',
        'greeting' => 'សួស្តី :user!',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាទីផ្សាររបស់អ្នក :marketplace គឺធ្លាក់ចុះ! គ្មានអតិថិជនណាម្នាក់អាចមកផ្សាររបស់អ្នកបានទេរហូតដល់វាត្រលប់ទៅរស់នៅផ្ទាល់ម្តងទៀត.',
        'button_text' => 'ចូលទៅកាន់ទំព័រកំណត់រចនាសម្ព័ន្ធ',
    ],

    'system_is_live' => [
        'subject' => 'ទីផ្សាររបស់អ្នកៈទីផ្សារត្រលប់ទៅ LIVE!',
        'greeting' => 'សួស្តី :user!',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាទីផ្សាររបស់អ្នក :marketplace បានត្រលប់ទៅរស់នៅដោយជោគជ័យ!',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    'system_info_updated' => [
        'subject' => ':marketplace - ព័ត៌មានទីផ្សារត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :user!',
        'message' => 'នេះគឺជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាទីផ្សាររបស់អ្នក :marketplace ត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    'system_config_updated' => [
        'subject' => ':marketplace - ការកំណត់រចនាសម្ព័ន្ធទីផ្សារត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :user!',
        'message' => 'ការកំណត់រចនាសម្ព័ន្ធទីផ្សាររបស់អ្នក :marketplace ត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ! ចុចប៊ូតុងខាងក្រោមដើម្បីចូលទៅក្នុងផ្ទាំងគ្រប់គ្រង.',
        'button_text' => 'មើលការកំណត់',
    ],

    'new_contact_us_message' => [
        'subject' => 'សារថ្មីតាមរយៈទំនាក់ទំនងមកយើងខ្ញុំ: :subject',
        'greeting' => 'សួស្តី!',
        'message_footer_with_phone' => 'អ្នកអាចឆ្លើយតបអ៊ីមែលនេះឬទាក់ទងដោយផ្ទាល់ទៅទូរស័ព្ទនេះ :phone',
        'message_footer' => 'អ្នកអាចឆ្លើយតបអ៊ីមែលនេះដោយផ្ទាល់.',
    ],

    // Ticket Notifications
    'ticket_acknowledgement' => [
        'subject' => '[Ticket ID: :ticket_id] :subject',
        'greeting' => 'សួស្តី :user',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីអោយអ្នកដឹងថាយើងបានទទួលសំបុត្ររបស់អ្នកហើយ :ticket_id successfully! ក្រុមគាំទ្ររបស់យើងនឹងត្រលប់មកអ្នកវិញតាមដែលអាចធ្វើទៅបាន.',
        'button_text' => 'មើលសំបុត្រ',
    ],

    'ticket_created' => [
        'subject' => 'សំបុត្រគាំទ្រថ្មី [Ticket ID: :ticket_id] :subject',
        'greeting' => 'សួស្តី!',
        'message' => '
អ្នកបានទទួលសំបុត្រគាំទ្រថ្មី ID :ticket_id, អ្នកផ្ញើ :sender ពីអ្នកលក់ :vendor. ពិនិត្យនិងធានាសំបុត្រដើម្បីគាំទ្រក្រុម.',
        'button_text' => 'មើលសំបុត្រ',
    ],

    'ticket_assigned' => [
        'subject' => 'សំបុត្រមួយគ្រាន់តែបញ្ជាក់ដល់អ្នក [Ticket ID: :ticket_id] :subject',
        'greeting' => 'សួស្តី :user',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងសំបុត្រនោះ [Ticket ID: :ticket_id] :subject just assinged to you. Review and reply the ticket to as soon as possible.',
        'button_text' => 'ឆ្លើយសំបុត្',
    ],

    'ticket_replied' => [
        'subject' => ':user បានឆ្លើយតបសំបុត្រ [Ticket ID: :ticket_id] :subject',
        'greeting' => 'សួស្តី :user',
        'message' => ':reply',
        'button_text' => 'មើលសំបុត្រ',
    ],

    'ticket_updated' => [
        'subject' => 'សំបុត្រ​មួយ [Ticket ID: :ticket_id] :subject ត្រូវបានធ្វើឱ្យទាន់សម័យ!',
        'greeting' => 'សួស្តី :user!',
        'message' => 'សំបុត្រការគាំទ្រមួយរបស់អ្នក ID #:ticket_id :subject ត្រូវបានធ្វើឱ្យទាន់សម័យ. សូមទំនាក់ទំនងមកយើងប្រសិនបើអ្នកត្រូវការជំនួយណាមួយ.',
        'button_text' => 'មើលសំបុត្រ',
    ],

    // User Notifications
    'user_created' => [
        'subject' => ':admin បានបន្ថែមអ្នកទៅក្នុងឯកសារ :marketplace ទីផ្សារ!',
        'greeting' => 'អបអរសាទរ :user!',
        'message' => 'អ្នកត្រូវបានបន្ថែមទៅក្នុងឯកសារ :marketplace ដោយ :admin! ចុចប៊ូតុងខាងក្រោមដើម្បីចូលគណនីរបស់អ្នក. ប្រើពាក្យសម្ងាត់បណ្ដោះអាសន្នសម្រាប់ការចូលដំបូង.',
        'alert' => 'កុំភ្លេចប្តូរលេខសំងាត់បន្ទាប់ពីចូល.',
        'button_text' => 'ទស្សនាប្រវត្តិរូបរបស់អ្នក',
    ],
    'user_updated' => [
        'subject' => 'ព័ត៌មានគណនីត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'greeting' => 'សួស្តី :user!',
        'message' => 'នេះជាការជូនដំណឹងដើម្បីឱ្យអ្នកដឹងថាគណនីរបស់អ្នកត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!',
        'button_text' => 'ទស្សនាប្រវត្តិរូបរបស់អ្នក',
    ],

    // Vendor Notifications
    'verdor_registered' => [
        'subject' => 'អ្នកលក់ថ្មីទើបតែចុះឈ្មោះ!',
        'greeting' => 'អបអរសាទរ!',
        'message' => 'ទីផ្សាររបស់អ្នក :marketplace ទើបតែមានហាងថ្មីដែលមានឈ្មោះហាង <strong>:shop_name</strong> ហើយអាសយដ្ឋានអ៊ីមែលរបស់ពាណិជ្ជករគឺ :merchant_email',
        'button_text' => 'ទៅកាន់ផ្ទាំងគ្រប់គ្រង',
    ],

    // User/Merchant Notification
    'email_verification' => [
        'subject' => 'ផ្ទៀងផ្ទាត់របស់អ្នក :marketplace គណនី!',
        'greeting' => 'អបអរសាទរ :user!',
        'message' => 'គណនីរបស់អ្នកត្រូវបានបង្កើតដោយជោគជ័យ! ចុចប៊ូតុងខាងក្រោមដើម្បីបញ្ជាក់អាសយដ្ឋានអ៊ីមែលរបស់អ្នក.',
        'button_text' => 'ផ្ទៀងផ្ទាត់អ៊ីមែលរបស់ខ្ញុំ',
    ],

    // Version 1.2.6
    'dispute_solved' => [
        'subject' => 'វិវាទ [Order ID: :order_id] ត្រូវបានសម្គាល់ជាដំណោះស្រាយ!',
        'greeting' => 'សួស្តី :customer!',
        'message' => 'ជម្លោះសម្រាប់ការបញ្ជាទិញ ID: :order_id ត្រូវបានសម្គាល់ជាដំណោះស្រាយ. អរគុណដែលបាននៅជាមួយពួកយើង.',
        'button_text' => 'មើលជម្លោះ',
    ],
];
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

    'accepted' => 'يجب قبول الحقل :attribute.',
    'accepted_if' => 'يجب قبول الحقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'الحقل :attribute يجب أن يكون عنوان URL صالحًا.',
    'after' => 'الحقل :attribute يجب أن يكون تاريخًا بعد :date.',
    'after_or_equal' => 'الحقل :attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
    'alpha' => 'الحقل :attribute يجب أن يحتوي على أحرف فقط.',
    'alpha_dash' => 'الحقل :attribute يجب أن يحتوي على أحرف، أرقام، شرطات وشرطات سفلية فقط.',
    'alpha_num' => 'الحقل :attribute يجب أن يحتوي على أحرف وأرقام فقط.',
    'array' => 'الحقل :attribute يجب أن يكون مصفوفة.',
    'ascii' => 'الحقل :attribute يجب أن يحتوي فقط على حروف وأرقام ورموز أحادية البايت.',
    'before' => 'الحقل :attribute يجب أن يكون تاريخًا قبل :date.',
    'before_or_equal' => 'الحقل :attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
    'between' => [
        'array' => 'الحقل :attribute يجب أن يحتوي بين :min و :max عنصرًا.',
        'file' => 'الحقل :attribute يجب أن يكون بين :min و :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون بين :min و :max.',
        'string' => 'الحقل :attribute يجب أن يكون بين :min و :max حرفًا.',
    ],
    'boolean' => 'الحقل :attribute يجب أن يكون صحيحًا أو خطأ.',
    'can' => 'الحقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد الحقل :attribute لا يتطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'الحقل :attribute يجب أن يكون تاريخًا صالحًا.',
    'date_equals' => 'الحقل :attribute يجب أن يكون تاريخًا مساويًا ل :date.',
    'date_format' => 'الحقل :attribute يجب أن يتطابق مع الصيغة :format.',
    'decimal' => 'الحقل :attribute يجب أن يحتوي على :decimal منازل عشرية.',
    'declined' => 'يجب رفض الحقل :attribute.',
    'declined_if' => 'يجب رفض الحقل :attribute عندما يكون :other هو :value.',
    'different' => 'الحقل :attribute و :other يجب أن يكونا مختلفين.',
    'digits' => 'الحقل :attribute يجب أن يكون :digits رقمًا.',
    'digits_between' => 'الحقل :attribute يجب أن يكون بين :min و :max رقمًا.',
    'dimensions' => 'الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'الحقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'الحقل :attribute يجب ألا ينتهي بواحد من التالي: :values.',
    'doesnt_start_with' => 'الحقل :attribute يجب ألا يبدأ بواحد من التالي: :values.',
    'email' => 'الحقل :attribute يجب أن يكون عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'الحقل :attribute يجب أن ينتهي بواحد من التالي: :values.',
    'enum' => ':attribute المحدد غير صالح.',
    'exists' => ':attribute المحدد غير صالح.',
    'extensions' => 'الحقل :attribute يجب أن يحتوي على واحدة من الامتدادات التالية: :values.',
    'file' => 'الحقل :attribute يجب أن يكون ملفًا.',
    'filled' => 'الحقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على أكثر من :value عنصرًا.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على :value عنصرًا أو أكثر.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value حرفًا.',
    ],
    'hex_color' => 'الحقل :attribute يجب أن يكون لونًا سداسيًا صالحًا.',
    'image' => 'الحقل :attribute يجب أن يكون صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'الحقل :attribute يجب أن يوجد في :other.',
    'integer' => 'الحقل :attribute يجب أن يكون عددًا صحيحًا.',
    'ip' => 'الحقل :attribute يجب أن يكون عنوان IP صالحًا.',
    'ipv4' => 'الحقل :attribute يجب أن يكون عنوان IPv4 صالحًا.',
    'ipv6' => 'الحقل :attribute يجب أن يكون عنوان IPv6 صالحًا.',
    'json' => 'الحقل :attribute يجب أن يكون نص JSON صالحًا.',
    'lowercase' => 'الحقل :attribute يجب أن يكون بأحرف صغيرة.',
    'lt' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على أقل من :value عنصرًا.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أقل من :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :value عنصرًا.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value حرفًا.',
    ],
    'mac_address' => 'الحقل :attribute يجب أن يكون عنوان MAC صالحًا.',
    'max' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max عنصرًا.',
        'file' => 'الحقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'الحقل :attribute يجب ألا يكون أكبر من :max حرفًا.',
    ],
    'max_digits' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max رقمًا.',
    'mimes' => 'الحقل :attribute يجب أن يكون ملفًا من نوع: :values.',
    'mimetypes' => 'الحقل :attribute يجب أن يكون ملفًا من نوع: :values.',
    'min' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على الأقل :min عنصرًا.',
        'file' => 'الحقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون على الأقل :min.',
        'string' => 'الحقل :attribute يجب أن يكون على الأقل :min حرفًا.',
    ],
    'min_digits' => 'الحقل :attribute يجب أن يحتوي على الأقل :min رقمًا.',
    'missing' => 'الحقل :attribute يجب أن يكون مفقودًا.',
    'missing_if' => 'الحقل :attribute يجب أن يكون مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'الحقل :attribute يجب أن يكون مفقودًا إلا إذا كان :other هو :value.',
    'missing_with' => 'الحقل :attribute يجب أن يكون مفقودًا عندما يكون :values حاضرًا.',
    'missing_with_all' => 'الحقل :attribute يجب أن يكون مفقودًا عندما تكون :values حاضرة.',
    'multiple_of' => 'الحقل :attribute يجب أن يكون من مضاعفات :value.',
    'not_in' => ':attribute المحدد غير صالح.',
    'not_regex' => 'صيغة الحقل :attribute غير صالحة.',
    'numeric' => 'الحقل :attribute يجب أن يكون رقمًا.',
    'password' => [
        'letters' => 'الحقل :attribute يجب أن يحتوي على حرف واحد على الأقل.',
        'mixed' => 'الحقل :attribute يجب أن يحتوي على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'الحقل :attribute يجب أن يحتوي على رقم واحد على الأقل.',
        'symbols' => 'الحقل :attribute يجب أن يحتوي على رمز واحد على الأقل.',
        'uncompromised' => ':attribute المحدد ظهر في تسرب بيانات. يرجى اختيار :attribute  مختلف.',
    ],
    'present' => 'الحقل :attribute يجب أن يكون موجودًا.',
    'present_if' => 'الحقل :attribute يجب أن يكون موجودًا عندما يكون :other هو :value.',
    'present_unless' => 'الحقل :attribute يجب أن يكون موجودًا ما لم يكن :other في :value.',
    'present_with' => 'الحقل :attribute يجب أن يكون موجودًا عندما يكون :values حاضرًا.',
    'present_with_all' => 'الحقل :attribute يجب أن يكون موجودًا عندما تكون :values حاضرة.',
    'prohibited' => 'الحقل :attribute ممنوع.',
    'prohibited_if' => 'الحقل :attribute ممنوع عندما يكون :other هو :value.',
    'prohibited_unless' => 'الحقل :attribute ممنوع إلا إذا كان :other في :values.',
    'prohibits' => 'الحقل :attribute يمنع :other من الوجود.',
    'regex' => 'صيغة الحقل :attribute غير صالحة.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'الحقل :attribute يجب أن يحتوي على مدخلات ل: :values.',
    'required_if' => 'الحقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عندما يكون :other مقبولًا.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'الحقل :attribute مطلوب عندما يكون :values حاضرًا.',
    'required_with_all' => 'الحقل :attribute مطلوب عندما تكون :values حاضرة.',
    'required_without' => 'الحقل :attribute مطلوب عندما لا تكون :values حاضرة.',
    'required_without_all' => 'الحقل :attribute مطلوب عندما لا تكون أي من :values حاضرة.',
    'same' => 'الحقل :attribute يجب أن يتطابق مع :other.',
    'size' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على :size عنصرًا.',
        'file' => 'الحقل :attribute يجب أن يكون :size كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون :size.',
        'string' => 'الحقل :attribute يجب أن يكون :size حرفًا.',
    ],
    'starts_with' => 'الحقل :attribute يجب أن يبدأ بأحد القيم التالية: :values.',
    'string' => 'الحقل :attribute يجب أن يكون نصًا.',
    'timezone' => 'الحقل :attribute يجب أن يكون منطقة زمنية صالحة.',
    'unique' => 'تم اختيار :attribute من قبل.',
    'uploaded' => 'فشل في رفع :attribute.',
    'uppercase' => 'الحقل :attribute يجب أن يكون بأحرف كبيرة.',
    'url' => 'الحقل :attribute يجب أن يكون عنوان URL صالحًا.',
    'ulid' => 'الحقل :attribute يجب أن يكون ULID صالحًا.',
    'uuid' => 'الحقل :attribute يجب أن يكون UUID صالحًا.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'price' => 'السعر',
'discount' => 'الخصم',
'stock' => 'المخزون',
'color' => 'اللون',
'name' => 'الاسم',
'size' => 'الحجم',
'description' => 'الوصف',
'additonal_information' => 'معلومات إضافية',
// 'seller_id' => 'معرّف البائع',
// 'category_id' => 'معرّف الفئة',
'category_id' => 'الفئة',

    ],

];

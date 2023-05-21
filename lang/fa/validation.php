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

    "accepted"         => ":attribute باید پذیرفته شده باشد.",
    "active_url"       => "آدرس :attribute معتبر نیست",
    "after"            => ":attribute باید تاریخی بعد از :date باشد.",
    "alpha"            => ":attribute باید شامل حروف الفبا باشد.",
    "alpha_dash"       => ":attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.",
    "alpha_num"        => ":attribute باید شامل حروف الفبا و عدد باشد.",
    "array"            => ":attribute باید شامل آرایه باشد.",
    "before"           => ":attribute باید تاریخی قبل از :date باشد.",
    "between"          => [
        "numeric" => ":attribute باید بین :min و :max باشد.",
        "file"    => ":attribute باید بین :min و :max کیلوبایت باشد.",
        "string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
        "array"   => ":attribute باید بین :min و :max آیتم باشد.",
    ],
    "boolean"          => "فیلد :attribute فقط میتواند صحیح و یا غلط باشد",
    "confirmed"        => ":attribute با تاییدیه مطابقت ندارد.",
    "date"             => ":attribute یک تاریخ معتبر نیست.",
    "date_format"      => ":attribute با الگوی :format مطاقبت ندارد.",
    "different"        => ":attribute و :other باید متفاوت باشند.",
    "digits"           => ":attribute باید :digits رقم باشد.",
    "digits_between"   => ":attribute باید بین :min و :max رقم باشد.",
    "email"            => "فرمت :attribute معتبر نیست.",
    "exists"           => ":attribute انتخاب شده، معتبر نیست.",
    "filled"           => "فیلد :attribute الزامی است",
    "image"            => ":attribute باید تصویر باشد.",
    "in"               => ":attribute انتخاب شده، معتبر نیست.",
    "integer"          => ":attribute باید نوع داده ای عددی (integer) باشد.",
    "ip"               => ":attribute باید IP آدرس معتبر باشد.",
    "max"              => [
        "numeric" => ":attribute نباید بزرگتر از :max باشد.",
        "file"    => ":attribute نباید بزرگتر از :max کیلوبایت باشد.",
        "string"  => ":attribute نباید بیشتر از :max کاراکتر باشد.",
        "array"   => ":attribute نباید بیشتر از :max آیتم باشد.",
    ],
    "mimes"            => ":attribute باید یکی از فرمت های :values باشد.",
    "min"              => [
        "numeric" => ":attribute نباید کوچکتر از :min باشد.",
        "file"    => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
        "string"  => ":attribute نباید کمتر از :min کاراکتر باشد.",
        "array"   => ":attribute نباید کمتر از :min آیتم باشد.",
    ],
    "not_in"           => ":attribute انتخاب شده، معتبر نیست.",
    "numeric"          => ":attribute باید شامل عدد باشد.",
    "regex"            => ":attribute یک فرمت معتبر نیست",
    "required"         => "فیلد :attribute الزامی است",
    "required_if"      => "فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.",
    "required_with"    => ":attribute الزامی است زمانی که :values موجود است.",
    "required_with_all" => ":attribute الزامی است زمانی که :values موجود است.",
    "required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "required_without_all" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "same"             => ":attribute و :other باید مانند هم باشند.",
    "size"             => [
        "numeric" => ":attribute باید برابر با :size باشد.",
        "file"    => ":attribute باید برابر با :size کیلوبایت باشد.",
        "string"  => ":attribute باید برابر با :size کاراکتر باشد.",
        "array"   => ":attribute باسد شامل :size آیتم باشد.",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => "فیلد :attribute باید یک منطقه صحیح باشد.",
    "unique"           => ":attribute قبلا انتخاب شده است.",
    "url"              => "فرمت آدرس :attribute اشتباه است.",
    'uuid' => 'گزینه :attribute باید یک UUID صحیح باشد',
    'mobile' => 'تلفن همراه وارد شده معتبر نمی باشد.',
    'mobile_exists' => 'تلفن همراه وارد شده معتبر نبوده و یا قبلآ در سایت ثبت نام شده است، در صورت فراموشی کلمه عبور از بخش مربوطه اقدام فرمایید.',
    'nationalcode' => 'کد ملی معتبر نمی باشد.',
    'username' => 'نام کاربری می بایست تنها شامل حروف انگلیسی، اعداد و Underline باشد.',
    'username_exists' => 'نام کاربری معتبر نبوده و یا اشتراک دیگری با نام کاربری مورد نظر موجود می باشد.',
    'insecure_password' => 'کلمه عبور وارد شده ایمن نیست، لطفاً کلمه عبوری با طول حداقل 7 حرف تشکیل شده از حروف کوچک و بزرگ انگلیسی و اعداد انتخاب نمایید.',
    'insecure_common_password' => 'کلمه عبور وارد شده :password جزء کلمه عبور های پرمصرف و ناایمن می باشد، لطفآ کلمه عبوری ایمن انتخاب نمایید.',
    'email_exists' => 'ایمیل معتبر نبوده و یا اشتراک دیگری با ایمیل مورد نظر موجود می باشد.',
    'email_is_disposable' => 'ایمیل معتبر نبوده و یا اشتراک دیگری با ایمیل مورد نظر موجود می باشد.',
    'nationalcode_exists' => 'کد ملی معتبر نمی باشد و یا فرد دیگری با کد ملی مورد نظر موجود می باشد.',
    'persian_alphabet_error' => ':attribute باید تنها از حروف فارسی تشکیل شده باشد.',
    'latin_alphabet_error' => ':attribute نباید از حروف فارسی تشکیل شده باشد.',
    'login_failed_title' => 'ورود ناموفق !',
    'login_failed_message' => 'اطلاعات وارد شده معتبر نمی باشد، در صورت فراموشی کلمه عبور به بخش مربوطه مراجعه فرمایید.',
    'captcha' => 'عبارت وارد شده کپچا معتبر نمی باشد.',
    'captcha_api' => 'عبارت امنیتی وارد شده معتبر نمی باشد.',
    'version_number' => 'عبارت وارد شده یک نسخه مجاز نمی باشد.',
    'phone' => 'نلفن وارد شده معتبر نمی باشد.',

    'lt' => [
        'numeric' => 'مقدار ":attribute" باید کمتر از مقدار ":value" باشد.',
    ],

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
        'g-recaptcha-response' => [
            'required' => 'لطفاً با پاسخ صحیح به کپچا درخواست خود را تایید نمایید.',
            'captcha' => 'کد اعتبارسنجی کپچا معتبر نمی باشد، لطفاً صفحه را رفرش نمایید.',
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
    'attributes' => [
        "name" => "نام",
        "firstname" => "نام",
        "firstname_latin" => "نام لاتین",
        "lastname" => "نام خانوادگی",
        "lastname_latin" => "نام خانوادگی لاتین",
        "nickname" => "نام مستعار",
        "birthday" => "تاریخ تولد",
        "username" => "نام کاربری",
        "email" => "پست الکترونیکی",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "family" => "نام خانوادگی",
        "password" => "کلمه عبور",
        "repassword" => "تکرار کلمه عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "country" => "کشور",
        "address" => "نشانی",
        "phone" => "تلفن",
        "mobile" => "تلفن همراه",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "size" => "اندازه",
		"file" => "فایل",
		"new_password" => "کلمه عبور جدید",
		"new_repassword" => "تکرار کلمه عبور جدید",
		"fullname" => "نام کامل"
    ],
];

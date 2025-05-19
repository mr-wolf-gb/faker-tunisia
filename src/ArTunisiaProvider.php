<?php

namespace FakerTunisia;

/**
 * Provider for Tunisian (ar_TN) fake data
 * Generates data in Arabic script
 */
class ArTunisiaProvider extends BaseTunisiaProvider
{
    // Person data
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
    ];
    
    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
    ];
    
    // Arabic script names
    protected static $firstNameMale = [
        'أحمد', 'محمد', 'مهدي', 'عزيز', 'فراس', 'أمين', 'كريم', 'أيمن', 'بسام',
        'يوسف', 'سامي', 'علي', 'أيوب', 'ياسين', 'إسكندر', 'حمزة', 'آدم', 'منصف',
        'خليل', 'ريان', 'حسام', 'مروان', 'بلال', 'سليم', 'حلمي', 'أسامة', 
        'وسيم', 'قيس', 'طه', 'عادل', 'غيث', 'زياد', 'آزر', 'إبراهيم', 'رؤوف',
        'طاهر', 'هاني', 'ميدو', 'فارس', 'صبري', 'عمر', 'نسيم', 'بشير', 'خالد',
        'حمدي', 'معتز', 'أشرف', 'سفيان', 'جهاد', 'كمال', 'رامي', 'نزار', 'عماد',
        'نور الدين', 'حسان', 'هشام', 'نبيل', 'وليد', 'خليفة', 'صالح', 'غسان'
    ];
    
    protected static $firstNameFemale = [
        'آية', 'مريم', 'غادة', 'إيمان', 'رانيا', 'سيرين', 'سارة', 'ملاك', 'أماني', 'دعاء',
        'وفاء', 'سلمى', 'يسر', 'فاطمة', 'سارة', 'نور', 'أريج', 'إيناس', 'خولة', 'حياة',
        'غفران', 'هبة', 'مال', 'نسرين', 'فرح', 'سارة', 'رحاب', 'سيرين',
        'إيمان', 'إسراء', 'خلود', 'عائشة', 'أميرة', 'أسماء', 'شيماء', 'درة',
        'آية', 'فريال', 'هيفاء', 'إشراق', 'جيهان', 'خديجة', 'لينا', 'منال',
        'ندى', 'ألفة', 'رحمة', 'سحر', 'تسنيم', 'ياسمين', 'زينب', 'وصال',
        'زهرة', 'أمينة', 'هدا', 'ليلا', 'نادين', 'ليليا',
    ];
    
    protected static $lastName = [
        'طرابلسي', 'غربي', 'حمامي', 'محمد', 'دريدي', 'عياري', 'شريف', 'ساسي','بكاري',
        'الله', 'عمار', 'بن علي', 'خلف الله', 'لكحل', 'عبدلي', 'شابي', 'شعيبي',
        'شبلي', 'فرحاني', 'جلاصي', 'مرزوقي', 'مثلوثي', 'يعقوبي', 'وسلاتي', 'بن زمال',
        'بن عبد الله', 'بن عبد الجليل', 'بن عبد العزيز', 'بن عبد الرحمن', 'تويتي',
        'ذوادي', 'جلاصي', 'بكوش', 'بهلول', 'باجي', 'بلهوان', 'بلوعر',
        'بن عبد الله', 'بن عبد الجليل', 'أباهنيني', 'عيوني', 'بوزيان', 'دريدي',
        'منصور', 'مبروك', 'منصوري', 'مسمودي', 'محجوب', 'مسعودي', 'ماهر',
        'ماجري', 'ميلاد', 'ميساوي', 'مبارك', 'مباركي', 'مخلوف', 'مرزوقي'
    ];
    
    // Address data
    protected static $streetNameFormats = [
        'شارع {{streetName}}',
        'نهج {{streetName}}',
        'جادة {{streetName}}',
        'ساحة {{streetName}}',
    ];
    
    protected static $addressFormats = [
        "{{streetName}} {{buildingNumber}}\n{{postcode}} {{city}}\nتونس",
    ];
    
    protected static $streetName = [
        'قرطاج', 'تونس', 'الحرية', 'الحبيب بورقيبة', 'باريس',
        'فرنسا', 'الجمهورية', 'محمد الخامس', 'ابن خلدون', 'فرحات حشاد',
        'الهادي شاكر', 'الاستقلال', 'الطاهر صفر', 'علي بلهوان', 'باب سويقة',
        'باب جديد', 'باب بحر', 'باب سعدون', 'باب الخضراء', 'باب منارة',
        'الجزيرة', 'الحلفاوين', 'العمران', 'المنزه', 'المنار',
        'البرتقال', 'الياسمين', 'النخيل', 'المدينة', 'القصبة'
    ];
    
    protected static $city = [
        'تونس', 'صفاقس', 'سوسة', 'القيروان', 'بنزرت', 'قابس', 'أريانة', 'قفصة',
        'المنستير', 'بن عروس', 'القصرين', 'مدنين', 'نابل', 'تطاوين', 'باجة',
        'الكاف', 'المهدية', 'سيدي بوزيد', 'جندوبة', 'توزر', 'سليانة', 'زغوان',
        'قبلي', 'منوبة', 'المرسى', 'الحمامات', 'جربة', 'جرجيس', 'دوز',
        'طبربة', 'منزل بورقيبة', 'ماطر', 'قربة', 'حمام الأنف', 'حمام سوسة'
    ];
    
    protected static $governorate = [
        'تونس', 'أريانة', 'بن عروس', 'منوبة', 'نابل', 'زغوان', 'بنزرت',
        'باجة', 'جندوبة', 'الكاف', 'سليانة', 'القيروان', 'القصرين', 'سيدي بوزيد',
        'سوسة', 'المنستير', 'المهدية', 'صفاقس', 'قابس', 'مدنين', 'تطاوين',
        'قفصة', 'توزر', 'قبلي'
    ];
    
    // Phone data - same format but with Arabic numerals
    protected static $mobileFormats = [
        '+216 2# ## ## ##', // Ooredoo
        '+216 4# ## ## ##', // Elissa (TT's MVNO)
        '+216 5# ## ## ##', // Orange
        '+216 9# ## ## ##', // Tunisie Telecom
    ];
    
    protected static $landlineFormats = [
        '+216 71 ## ## ##', // Tunis, Ariana, Ben Arous, Manouba
        '+216 70 ## ## ##', // Tunis, Ariana, Ben Arous, Manouba
        '+216 79 ## ## ##', // Tunis, Ariana, Ben Arous, Manouba
        '+216 72 ## ## ##', // Bizerte, Nabeul, Zaghouan
        '+216 73 ## ## ##', // Sousse, Monastir, Mahdia
        '+216 74 ## ## ##', // Sfax
        '+216 75 ## ## ##', // Gabès, Médenine, Tataouine, Kébili
        '+216 76 ## ## ##', // Gafsa, Tozeur, Sidi Bouzid
        '+216 77 ## ## ##', // Kairouan, Kasserine
        '+216 78 ## ## ##', // Béja, Jendouba, Kef, Siliana
    ];
    
    // Company data
    protected static $companyFormats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} و {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{city}} {{companySuffix}}',
        '{{companyPrefix}} {{city}} {{companySuffix}}',
        '{{city}} {{companyIndustry}} {{companySuffix}}',
        '{{companyIndustry}} تونس {{companySuffix}}',
    ];
    
    protected static $companySuffix = [
        'ش.ذ.م.م', 'ش.خ', 'ش.ت.ض', 'ش.ت.ب', 'ش.ذ.م.م.و', 'و أولاده', 'و شركاه'
    ];
    
    protected static $companyPrefix = [
        'شركة', 'مؤسسة', 'مجموعة', 'شركة', 'مؤسسات'
    ];
    
    protected static $companyIndustry = [
        'المعلوماتية', 'النسيج', 'الاستشارات', 'التصدير والتوريد', 'الخدمات',
        'التكنولوجيا', 'الإعلام', 'الاتصالات', 'البناء', 'الغذائية',
        'النقل', 'السياحة', 'الإلكترونيات', 'الميكانيكا', 'الزراعة'
    ];
    
    /**
     * Constructor
     */
    public function __construct($generator)
    {
        parent::__construct($generator);
        $this->defaultLocale = 'ar_TN';
    }
    
    /**
     * Return a Tunisian male first name
     *
     * @return string
     */
    public function firstNameMale()
    {
        return static::randomElement(static::$firstNameMale);
    }
    
    /**
     * Return a Tunisian female first name
     *
     * @return string
     */
    public function firstNameFemale()
    {
        return static::randomElement(static::$firstNameFemale);
    }
    
    /**
     * Return a Tunisian last name
     *
     * @return string
     */
    public function lastName()
    {
        return static::randomElement(static::$lastName);
    }
    
    /**
     * Return a Tunisian street name
     *
     * @return string
     */
    public function streetName()
    {
        $format = static::randomElement(static::$streetNameFormats);
        return str_replace('{{streetName}}', static::randomElement(static::$streetName), $format);
    }
    
    /**
     * Return a Tunisian building number
     *
     * @return string
     */
    public function buildingNumber()
    {
        return static::numberBetween(1, 999);
    }

    
    /**
     * Return a Tunisian postal code (4 digits)
     *
     * @return string
     */
    public function postcode()
    {
        return static::numberBetween(1000, 9999);
    }
    
    /**
     * Return a Tunisian city
     *
     * @return string
     */
    public function city()
    {
        return static::randomElement(static::$city);
    }
    
    /**
     * Return a Tunisian governorate
     *
     * @return string
     */
    public function governorate()
    {
        return static::randomElement(static::$governorate);
    }
    
    /**
     * Return a Tunisian mobile phone number
     *
     * @return string
     */
    public function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
    
    /**
     * Return a Tunisian landline phone number
     *
     * @return string
     */
    public function landlineNumber()
    {
        return static::numerify(static::randomElement(static::$landlineFormats));
    }
    
    /**
     * Return a Tunisian phone number (mobile or landline)
     * Direct method without locale mixing
     *
     * @return string
     */
    public function phoneNumberDirect()
    {
        $format = static::randomElement(array_merge(static::$mobileFormats, static::$landlineFormats));
        return static::numerify($format);
    }
    
    /**
     * Return a Tunisian company name format
     *
     * @return string
     */
    public function companyFormat()
    {
        return static::randomElement(static::$companyFormats);
    }
    
    /**
     * Return a Tunisian company suffix
     *
     * @return string
     */
    public function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }
    
    /**
     * Return a Tunisian company prefix
     *
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
    
    /**
     * Return a Tunisian company industry
     *
     * @return string
     */
    public function companyIndustry()
    {
        return static::randomElement(static::$companyIndustry);
    }
    
    /**
     * Return a Tunisian address format
     *
     * @return string
     */
    public function addressFormat()
    {
        return static::randomElement(static::$addressFormats);
    }
    
}

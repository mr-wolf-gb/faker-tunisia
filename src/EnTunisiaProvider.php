<?php

namespace FakerTunisia;

/**
 * Provider for Tunisian (en_TN) fake data
 * Generates Arabic data using the English alphabet and formats
 */
class EnTunisiaProvider extends BaseTunisiaProvider
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
    ];
    
    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
    ];
    
    protected static $firstNameMale = [
        'Ahmed', 'Mohamed', 'Mehdi', 'Aziz', 'Firas', 'Amine', 'Karim', 'Aymen', 'Bassem',
        'Youssef', 'Sami', 'Ali', 'Ayoub', 'Yassine', 'Skander', 'Hamza', 'Adam', 'Moncef',
        'Khalil', 'Rayen', 'Houssem', 'Marouen', 'Bilel', 'Slim', 'Helmi', 'Oussama',
        'Wassim', 'Kais', 'Taha', 'Adel', 'Ghaith', 'Zied', 'Azer', 'Ibrahim', 'Raouf',
        'Taher', 'Hani', 'Midou', 'Fares', 'Sabry', 'Omar', 'Nassim', 'Bechir','Khaled',
        'Hamdi', 'Motaz', 'Achraf', 'Sofien', 'Jihed', 'Kamel', 'Rami', 'Nizar', 'Imed',
        'Noureddine', 'Hassan', 'Hicham', 'Nabil', 'Walid', 'Khalifa', 'Salah', 'Ghassen'
    ];
    
    protected static $firstNameFemale = [
        'Aya', 'Mariem', 'Ghada', 'Emna', 'Rania', 'Cyrine', 'Sarra', 'Malek', 'Amani', 'Doua',
        'Wafa', 'Salma', 'Yosr', 'Fatma', 'Sarah', 'Nour', 'Erij', 'Ines', 'Khaoula', 'Hayet',
        'Ghofrane', 'Hiba', 'Lilia', 'Nesrine', 'Farah', 'Sara', 'Rihab', 'Syrine',
        'Imen', 'Esra', 'Khouloud', 'Aicha', 'Amira', 'Asma', 'Chaima', 'Dorra',
        'Eya', 'Feriel', 'Haifa', 'Ichrak', 'Jihene', 'Khadija', 'Lina', 'Manel',
        'Nada', 'Olfa', 'Rahma', 'Sahar', 'Tasnime', 'Yasmine', 'Zeineb', 'Wissal',
        'Zahra', 'Amina', 'Fatima', 'Houda', 'Layla', 'Nadine'
    ];
    
    protected static $lastName = [
        'Trabelsi', 'Gharbi', 'Hammami', 'Mohamed', 'Dridi', 'Ayari', 'Cherif', 'Sassi', 'Baccari',
        'Ben Abd Allah', 'Ammar', 'Ben Ali', 'Khalfallah', 'Lakhal', 'Abdelli', 'Chabbi', 'Chaibi',
        'Chebli', 'Farhani', 'Jelassi', 'Marzougui', 'Mathlouthi', 'Yaakoubi', 'Oueslati', 'Ben Zammel',
        'Dhaouadi', 'Jlassi', 'Baccouche', 'Bahloul', 'Beji', 'Belhouane', 'Belouaer', 'Touiti',
        'Ben Abdallah', 'Ben Abdeljelil', 'Abahnini', 'Ayouni', 'Bouzaiene', 'Dridi', 'Rakrouki',
        'Mansour', 'Mabrouk', 'Mansouri', 'Masmoudi', 'Mahjoub', 'Messaoudi', 'Maher', 'Ben Araf',
        'Mejri', 'Miled', 'Missaoui', 'Mbarek', 'Mbarki', 'Makhlouf', 'Marzouki', 'Helali'
    ];
    
    // Address data - English format
    protected static $streetNameFormats = [
        '{{streetName}} Street',
        '{{streetName}} Avenue',
        '{{streetName}} Boulevard',
        '{{streetName}} Square',
        '{{streetName}} Road',
    ];
    
    protected static $addressFormats = [
        "{{buildingNumber}} {{streetName}}\n{{city}}, {{postcode}}\nTunisia",
    ];
    
    // Street names adapted to English format
    protected static $streetName = [
        'Carthage', 'Tunis', 'Liberty', 'Habib Bourguiba', 'Paris',
        'France', 'Republic', 'Mohamed V', 'Ibn Khaldoun', 'Farhat Hached',
        'Hedi Chaker', 'Independence', 'Tahar Sfar', 'Ali Belhouane', 'Bab Souika',
        'Bab Jedid', 'Bab Bhar', 'Bab Saadoun', 'Bab El Khadra', 'Bab Menara',
        'El Jazira', 'El Halfaouine', 'El Omrane', 'El Menzah', 'El Manar',
        'Orange', 'Jasmine', 'Palm', 'Medina', 'Kasbah'
    ];
    
    protected static $city = [
        'Tunis', 'Sfax', 'Sousse', 'Kairouan', 'Bizerte', 'Gabes', 'Ariana', 'Gafsa',
        'Monastir', 'Ben Arous', 'Kasserine', 'Medenine', 'Nabeul', 'Tataouine', 'Beja',
        'Kef', 'Mahdia', 'Sidi Bouzid', 'Jendouba', 'Tozeur', 'Siliana', 'Zaghouan',
        'Kebili', 'Manouba', 'La Marsa', 'Hammamet', 'Djerba', 'Zarzis', 'Douz',
        'Tebourba', 'Menzel Bourguiba', 'Mateur', 'Korba', 'Hammam-Lif', 'Hammam Sousse'
    ];
    
    protected static $governorate = [
        'Tunis', 'Ariana', 'Ben Arous', 'Manouba', 'Nabeul', 'Zaghouan', 'Bizerte',
        'Beja', 'Jendouba', 'Kef', 'Siliana', 'Kairouan', 'Kasserine', 'Sidi Bouzid',
        'Sousse', 'Monastir', 'Mahdia', 'Sfax', 'Gabes', 'Medenine', 'Tataouine',
        'Gafsa', 'Tozeur', 'Kebili'
    ];
    
    // Phone data - same format
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
        '+216 75 ## ## ##', // Gabes, Medenine, Tataouine, Kebili
        '+216 76 ## ## ##', // Gafsa, Tozeur, Sidi Bouzid
        '+216 77 ## ## ##', // Kairouan, Kasserine
        '+216 78 ## ## ##', // Beja, Jendouba, Kef, Siliana
    ];
    
    // Company data - English format
    protected static $companyFormats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{city}} {{companySuffix}}',
        '{{city}} {{companyIndustry}} {{companySuffix}}',
        '{{companyIndustry}} of Tunisia {{companySuffix}}',
    ];
    
    protected static $companySuffix = [
        'LLC', 'Inc.', 'Ltd.', 'Co.', '& Sons', 'Group', 'Holdings'
    ];
    
    protected static $companyPrefix = [
        'Company', 'Enterprise', 'Group', 'Corporation', 'Establishments'
    ];
    
    protected static $companyIndustry = [
        'IT', 'Textile', 'Consulting', 'Import-Export', 'Services',
        'Technologies', 'Media', 'Communication', 'Construction', 'Food',
        'Transport', 'Tourism', 'Electronics', 'Mechanical', 'Agricultural'
    ];
    
    /**
     * Constructor
     */
    public function __construct($generator)
    {
        parent::__construct($generator);
        $this->defaultLocale = 'en_TN';
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

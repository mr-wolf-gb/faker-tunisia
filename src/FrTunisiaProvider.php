<?php

namespace FakerTunisia;

/**
 * Provider for Tunisian (fr_TN) fake data
 * Generates Arabic data using the French alphabet
 */
class FrTunisiaProvider extends BaseTunisiaProvider
{
    // Person data
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
    
    // Address data
    protected static $streetNameFormats = [
        'Rue {{streetName}}',
        'Avenue {{streetName}}',
        'Boulevard {{streetName}}',
        'Place {{streetName}}',
    ];
    
    protected static $addressFormats = [
        "{{streetName}} {{buildingNumber}}\n{{postcode}} {{city}}\nTunisie",
    ];
    
    protected static $streetName = [
        'de Carthage', 'de Tunis', 'de la Liberté', 'Habib Bourguiba', 'de Paris',
        'de France', 'de la République', 'Mohamed V', 'Ibn Khaldoun', 'Farhat Hached',
        'Hédi Chaker', 'de l\'Indépendance', 'Tahar Sfar', 'Ali Belhouane', 'Bab Souika',
        'Bab Jedid', 'Bab Bhar', 'Bab Saadoun', 'Bab El Khadra', 'Bab Menara',
        'El Jazira', 'El Halfaouine', 'El Omrane', 'El Menzah', 'El Manar',
        'des Orangers', 'des Jasmins', 'des Palmiers', 'de la Médina', 'de la Kasbah'
    ];
    
    protected static $city = [
        'Tunis', 'Sfax', 'Sousse', 'Kairouan', 'Bizerte', 'Gabès', 'Ariana', 'Gafsa',
        'Monastir', 'Ben Arous', 'Kasserine', 'Médenine', 'Nabeul', 'Tataouine', 'Béja',
        'Kef', 'Mahdia', 'Sidi Bouzid', 'Jendouba', 'Tozeur', 'Siliana', 'Zaghouan',
        'Kébili', 'Manouba', 'La Marsa', 'Hammamet', 'Djerba', 'Zarzis', 'Douz',
        'Tebourba', 'Menzel Bourguiba', 'Mateur', 'Korba', 'Hammam-Lif', 'Hammam Sousse'
    ];
    
    protected static $governorate = [
        'Tunis', 'Ariana', 'Ben Arous', 'Manouba', 'Nabeul', 'Zaghouan', 'Bizerte',
        'Béja', 'Jendouba', 'Kef', 'Siliana', 'Kairouan', 'Kasserine', 'Sidi Bouzid',
        'Sousse', 'Monastir', 'Mahdia', 'Sfax', 'Gabès', 'Médenine', 'Tataouine',
        'Gafsa', 'Tozeur', 'Kébili'
    ];
    
    // Phone data
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
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{city}} {{companySuffix}}',
        '{{companyPrefix}} de {{city}} {{companySuffix}}',
        '{{city}} {{companyIndustry}} {{companySuffix}}',
        '{{companyIndustry}} de Tunisie {{companySuffix}}',
    ];
    
    protected static $companySuffix = [
        'SARL', 'SA', 'SNC', 'SCS', 'SUARL', '& Fils', 'et Cie'
    ];
    
    protected static $companyPrefix = [
        'Société', 'Entreprise', 'Groupe', 'Compagnie', 'Établissements'
    ];
    
    protected static $companyIndustry = [
        'Informatique', 'Textile', 'Consulting', 'Import-Export', 'Services',
        'Technologies', 'Média', 'Communication', 'Bâtiment', 'Alimentation',
        'Transport', 'Tourisme', 'Électronique', 'Mécanique', 'Agricole'
    ];
    
    /**
     * Constructor
     */
    public function __construct($generator)
    {
        parent::__construct($generator);
        $this->defaultLocale = 'fr_TN';
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

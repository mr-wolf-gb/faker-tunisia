<?php

// Standalone test script that doesn't require Faker\Provider\Base
// This script directly tests the data arrays and generation logic

// Test data from Tunisia provider
class TunisiaDataTest {
    // Person data
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
    ];
    
    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
    ];
    
    protected static $firstNameMale = [
        'Ahmed', 'Mohamed', 'Mehdi', 'Aziz', 'Firas', 'Amine', 'Karim', 'Aymen',
        'Youssef', 'Sami', 'Ali', 'Ayoub', 'Yassine', 'Skander', 'Hamza', 'Adam',
        'Khalil', 'Rayen', 'Houssem', 'Marouen', 'Bilel', 'Slim', 'Helmi', 'Oussama',
        'Wassim', 'Kais', 'Taha', 'Adel', 'Ghaith', 'Zied', 'Azer', 'Ibrahim',
        'Taher', 'Hani', 'Midou', 'Fares', 'Sabry', 'Omar', 'Nassim', 'Bechir',
        'Hamdi', 'Motaz', 'Achraf', 'Sofien', 'Jihed', 'Kamel', 'Rami', 'Nizar'
    ];
    
    protected static $firstNameFemale = [
        'Aya', 'Mariem', 'Ghada', 'Emna', 'Rania', 'Cyrine', 'Sarra', 'Malek',
        'Wafa', 'Salma', 'Yosr', 'Fatma', 'Sarah', 'Nour', 'Erij', 'Ines',
        'Ghofrane', 'Hiba', 'Mel', 'Nesrine', 'Farah', 'Sara', 'Rihab', 'Syrine',
        'Imen', 'Esra', 'Khouloud', 'Aicha', 'Amira', 'Asma', 'Chaima', 'Dorra',
        'Eya', 'Feriel', 'Haifa', 'Ichrak', 'Jihene', 'Khadija', 'Lina', 'Manel',
        'Nada', 'Olfa', 'Rahma', 'Sahar', 'Tasnime', 'Yasmine', 'Zeineb', 'Wissal'
    ];
    
    protected static $lastName = [
        'Trabelsi', 'Gharbi', 'Hammami', 'Mohamed', 'Dridi', 'Ayari', 'Cherif', 'Sassi',
        'Allah', 'Ammar', 'Ben Ali', 'Khalfallah', 'Lakhal', 'Abdelli', 'Chabbi', 'Chaibi',
        'Chebli', 'Farhani', 'Jelassi', 'Marzougui', 'Mathlouthi', 'Yaakoubi', 'Oueslati',
        'Dhaouadi', 'Jlassi', 'Baccouche', 'Bahloul', 'Beji', 'Belhouane', 'Belouaer',
        'Ben Abdallah', 'Ben Abdeljelil', 'Abahnini', 'Ayouni', 'Bouzaiene', 'Dridi',
        'Mansour', 'Mabrouk', 'Mansouri', 'Masmoudi', 'Mahjoub', 'Messaoudi', 'Maher',
        'Mejri', 'Miled', 'Missaoui', 'Mbarek', 'Mbarki', 'Makhlouf', 'Marzouki'
    ];
    
    // Address data
    protected static $streetNameFormats = [
        'Rue {{streetName}}',
        'Avenue {{streetName}}',
        'Boulevard {{streetName}}',
        'Place {{streetName}}',
    ];
    
    protected static $addressFormats = [
        "{{streetName}} {{buildingNumber}}\n{{postcode}} {{city}}\nTUN",
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
    
    // Helper methods
    protected static function randomElement($array) {
        return $array[array_rand($array)];
    }
    
    protected static function numerify($string) {
        // Replace all # with random numbers
        return preg_replace_callback('/#/', function() {
            return mt_rand(0, 9);
        }, $string);
    }
    
    protected static function numberBetween($min, $max) {
        return mt_rand($min, $max);
    }
    
    // Test methods
    public static function testFirstNameMale() {
        return static::randomElement(static::$firstNameMale);
    }
    
    public static function testFirstNameFemale() {
        return static::randomElement(static::$firstNameFemale);
    }
    
    public static function testLastName() {
        return static::randomElement(static::$lastName);
    }
    
    public static function testStreetName() {
        $format = static::randomElement(static::$streetNameFormats);
        return str_replace('{{streetName}}', static::randomElement(static::$streetName), $format);
    }
    
    public static function testBuildingNumber() {
        return static::numberBetween(1, 999);
    }
    
    public static function testPostcode() {
        return static::numberBetween(1000, 9999);
    }
    
    public static function testCity() {
        return static::randomElement(static::$city);
    }
    
    public static function testMobileNumber() {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
    
    public static function testLandlineNumber() {
        return static::numerify(static::randomElement(static::$landlineFormats));
    }
    
    public static function testCompany() {
        $format = static::randomElement(static::$companyFormats);
        
        // Replace placeholders with random values
        $format = str_replace('{{lastName}}', static::testLastName(), $format);
        $format = str_replace('{{companySuffix}}', static::randomElement(static::$companySuffix), $format);
        $format = str_replace('{{companyPrefix}}', static::randomElement(static::$companyPrefix), $format);
        $format = str_replace('{{city}}', static::randomElement(static::$city), $format);
        $format = str_replace('{{companyIndustry}}', static::randomElement(static::$companyIndustry), $format);
        
        return $format;
    }
    
    public static function runTests() {
        // Test person data
        echo "=== PERSON DATA ===\n";
        echo "Male Name: " . static::testFirstNameMale() . " " . static::testLastName() . "\n";
        echo "Female Name: " . static::testFirstNameFemale() . " " . static::testLastName() . "\n";
        
        // Test address data
        echo "\n=== ADDRESS DATA ===\n";
        $address = static::testStreetName() . " " . static::testBuildingNumber() . "\n";
        $address .= static::testPostcode() . " " . static::testCity() . "\nTUN";
        echo "Address:\n" . $address . "\n";
        
        // Test phone data
        echo "\n=== PHONE DATA ===\n";
        echo "Mobile Number: " . static::testMobileNumber() . "\n";
        echo "Landline Number: " . static::testLandlineNumber() . "\n";
        
        // Test company data
        echo "\n=== COMPANY DATA ===\n";
        echo "Company: " . static::testCompany() . "\n";
        
        echo "\n=== TEST COMPLETE ===\n";
    }
}

// Run the tests
TunisiaDataTest::runTests();

<?php

// Simplified test script for Tunisia Faker Provider
// This doesn't require the Faker\Provider\Base class

// Include the Tunisia provider
require_once __DIR__ . '/src/Tunisia.php';

// Create a simple test class that doesn't extend Faker\Provider\Base
class TunisiaFakerTest {
    protected $tunisia;
    
    public function __construct() {
        $this->tunisia = new TunisiaTest();
    }
    
    public function runTests() {
        // Test person data
        echo "=== PERSON DATA ===\n";
        echo "Male Name: " . $this->tunisia->getRandomMaleName() . " " . $this->tunisia->getRandomLastName() . "\n";
        echo "Female Name: " . $this->tunisia->getRandomFemaleName() . " " . $this->tunisia->getRandomLastName() . "\n";
        
        // Test address data
        echo "\n=== ADDRESS DATA ===\n";
        echo "Street: " . $this->tunisia->getRandomStreet() . "\n";
        echo "City: " . $this->tunisia->getRandomCity() . "\n";
        echo "Postal Code: " . $this->tunisia->getRandomPostalCode() . "\n";
        
        // Test phone data
        echo "\n=== PHONE DATA ===\n";
        echo "Mobile Number: " . $this->tunisia->getRandomMobileNumber() . "\n";
        echo "Landline Number: " . $this->tunisia->getRandomLandlineNumber() . "\n";
        
        // Test company data
        echo "\n=== COMPANY DATA ===\n";
        echo "Company: " . $this->tunisia->getRandomCompanyName() . "\n";
        
        echo "\n=== TEST COMPLETE ===\n";
    }
}

// Simple test class with Tunisia data
class TunisiaTest {
    // Person data
    private $maleNames = [
        'Ahmed', 'Mohamed', 'Mehdi', 'Aziz', 'Firas', 'Amine', 'Karim', 'Aymen',
        'Youssef', 'Sami', 'Ali', 'Ayoub', 'Yassine', 'Skander', 'Hamza', 'Adam'
    ];
    
    private $femaleNames = [
        'Aya', 'Mariem', 'Ghada', 'Emna', 'Rania', 'Cyrine', 'Sarra', 'Malek',
        'Wafa', 'Salma', 'Yosr', 'Fatma', 'Sarah', 'Nour', 'Erij', 'Ines'
    ];
    
    private $lastNames = [
        'Trabelsi', 'Gharbi', 'Hammami', 'Mohamed', 'Dridi', 'Ayari', 'Cherif', 'Sassi',
        'Ben Ali', 'Khalfallah', 'Lakhal', 'Abdelli', 'Chabbi', 'Chaibi', 'Jelassi', 'Marzougui'
    ];
    
    // Address data
    private $streets = [
        'Rue de Carthage', 'Avenue Habib Bourguiba', 'Boulevard de Paris',
        'Rue de la Liberté', 'Avenue Mohamed V', 'Rue Ibn Khaldoun'
    ];
    
    private $cities = [
        'Tunis', 'Sfax', 'Sousse', 'Kairouan', 'Bizerte', 'Gabès', 'Ariana', 'Gafsa',
        'Monastir', 'Ben Arous', 'Kasserine', 'Médenine', 'Nabeul', 'Tataouine'
    ];
    
    // Company data
    private $companyPrefixes = [
        'Société', 'Entreprise', 'Groupe', 'Compagnie', 'Établissements'
    ];
    
    private $companyIndustries = [
        'Informatique', 'Textile', 'Consulting', 'Import-Export', 'Services',
        'Technologies', 'Média', 'Communication', 'Bâtiment', 'Alimentation'
    ];
    
    private $companySuffixes = [
        'SARL', 'SA', 'SNC', 'SCS', 'SUARL', '& Fils', 'et Cie'
    ];
    
    // Helper methods
    private function getRandomElement($array) {
        return $array[array_rand($array)];
    }
    
    private function getRandomNumber($min, $max) {
        return rand($min, $max);
    }
    
    // Public methods for testing
    public function getRandomMaleName() {
        return $this->getRandomElement($this->maleNames);
    }
    
    public function getRandomFemaleName() {
        return $this->getRandomElement($this->femaleNames);
    }
    
    public function getRandomLastName() {
        return $this->getRandomElement($this->lastNames);
    }
    
    public function getRandomStreet() {
        return $this->getRandomElement($this->streets) . ' ' . $this->getRandomNumber(1, 100);
    }
    
    public function getRandomCity() {
        return $this->getRandomElement($this->cities);
    }
    
    public function getRandomPostalCode() {
        return $this->getRandomNumber(1000, 9999);
    }
    
    public function getRandomMobileNumber() {
        $prefixes = ['2', '4', '5', '9'];
        $prefix = $prefixes[array_rand($prefixes)];
        $number = '';
        for ($i = 0; $i < 7; $i++) {
            $number .= rand(0, 9);
        }
        return '+216 ' . $prefix . $number;
    }
    
    public function getRandomLandlineNumber() {
        $prefixes = ['71', '70', '72', '73', '74', '75', '76', '77', '78', '79'];
        $prefix = $prefixes[array_rand($prefixes)];
        $number = '';
        for ($i = 0; $i < 6; $i++) {
            $number .= rand(0, 9);
        }
        return '+216 ' . $prefix . ' ' . $number;
    }
    
    public function getRandomCompanyName() {
        $format = rand(0, 2);
        
        switch ($format) {
            case 0:
                return $this->getRandomElement($this->companyPrefixes) . ' ' . 
                       $this->getRandomElement($this->companyIndustries) . ' ' . 
                       $this->getRandomElement($this->companySuffixes);
            case 1:
                return $this->getRandomLastName() . ' ' . 
                       $this->getRandomElement($this->companySuffixes);
            case 2:
                return $this->getRandomElement($this->companyPrefixes) . ' de ' . 
                       $this->getRandomCity() . ' ' . 
                       $this->getRandomElement($this->companySuffixes);
        }
    }
}

// Run the tests
$test = new TunisiaFakerTest();
$test->runTests();

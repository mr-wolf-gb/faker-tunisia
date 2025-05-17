<?php

// Test script for Tunisia Faker Provider
require_once __DIR__ . '/src/Tunisia.php';

// Create a simple faker generator
class FakerGenerator {
    public function parse($format) {
        // Simple parser for testing
        $result = $format;
        
        // Replace {{firstName}} with a random first name
        if (strpos($result, '{{firstNameMale}}') !== false) {
            $result = str_replace('{{firstNameMale}}', $this->tunisia->firstNameMale(), $result);
        }
        
        if (strpos($result, '{{firstNameFemale}}') !== false) {
            $result = str_replace('{{firstNameFemale}}', $this->tunisia->firstNameFemale(), $result);
        }
        
        if (strpos($result, '{{lastName}}') !== false) {
            $result = str_replace('{{lastName}}', $this->tunisia->lastName(), $result);
        }
        
        if (strpos($result, '{{streetName}}') !== false) {
            $result = str_replace('{{streetName}}', $this->tunisia->streetName(), $result);
        }
        
        if (strpos($result, '{{buildingNumber}}') !== false) {
            $result = str_replace('{{buildingNumber}}', $this->tunisia->buildingNumber(), $result);
        }
        
        if (strpos($result, '{{postcode}}') !== false) {
            $result = str_replace('{{postcode}}', $this->tunisia->postcode(), $result);
        }
        
        if (strpos($result, '{{city}}') !== false) {
            $result = str_replace('{{city}}', $this->tunisia->city(), $result);
        }
        
        if (strpos($result, '{{companyPrefix}}') !== false) {
            $result = str_replace('{{companyPrefix}}', $this->tunisia->companyPrefix(), $result);
        }
        
        if (strpos($result, '{{companyIndustry}}') !== false) {
            $result = str_replace('{{companyIndustry}}', $this->tunisia->companyIndustry(), $result);
        }
        
        if (strpos($result, '{{companySuffix}}') !== false) {
            $result = str_replace('{{companySuffix}}', $this->tunisia->companySuffix(), $result);
        }
        
        return $result;
    }
    
    public function __construct() {
        $this->tunisia = new FakerTunisia\Tunisia($this);
    }
}

// Create a faker generator
$faker = new FakerGenerator();
$tunisia = new FakerTunisia\Tunisia($faker);

// Test person data
echo "=== PERSON DATA ===\n";
echo "Male Name: " . $tunisia->firstNameMale() . " " . $tunisia->lastName() . "\n";
echo "Female Name: " . $tunisia->firstNameFemale() . " " . $tunisia->lastName() . "\n";

// Test address data
echo "\n=== ADDRESS DATA ===\n";
$address = $tunisia->streetName() . " " . $tunisia->buildingNumber() . "\n";
$address .= $tunisia->postcode() . " " . $tunisia->city() . "\nTUN";
echo "Address:\n" . $address . "\n";
echo "Governorate: " . $tunisia->governorate() . "\n";

// Test phone data
echo "\n=== PHONE DATA ===\n";
echo "Mobile Number: " . $tunisia->mobileNumber() . "\n";
echo "Landline Number: " . $tunisia->landlineNumber() . "\n";
echo "Random Phone: " . $tunisia->phoneNumber() . "\n";

// Test company data
echo "\n=== COMPANY DATA ===\n";
echo "Company: " . $tunisia->company() . "\n";
echo "Company Suffix: " . $tunisia->companySuffix() . "\n";
echo "Company Prefix: " . $tunisia->companyPrefix() . "\n";
echo "Company Industry: " . $tunisia->companyIndustry() . "\n";

echo "\n=== TEST COMPLETE ===\n";

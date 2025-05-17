<?php

// Test script for Tunisia Faker Provider with FakerPHP integration
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/Tunisia.php';

// Create a Faker generator
$faker = new Faker\Generator();
$faker->addProvider(new FakerTunisia\Tunisia($faker));

// Test person data
echo "=== PERSON DATA ===\n";
echo "Male Name: " . $faker->firstNameMale() . " " . $faker->lastName() . "\n";
echo "Female Name: " . $faker->firstNameFemale() . " " . $faker->lastName() . "\n";

// Test address data
echo "\n=== ADDRESS DATA ===\n";
echo "Street: " . $faker->streetName() . " " . $faker->buildingNumber() . "\n";
echo "City: " . $faker->city() . "\n";
echo "Postal Code: " . $faker->postcode() . "\n";
echo "Governorate: " . $faker->governorate() . "\n";

// Test phone data
echo "\n=== PHONE DATA ===\n";
echo "Mobile Number: " . $faker->mobileNumber() . "\n";
echo "Landline Number: " . $faker->landlineNumber() . "\n";
echo "Random Phone: " . $faker->phoneNumber() . "\n";

// Test company data
echo "\n=== COMPANY DATA ===\n";
echo "Company: " . $faker->company() . "\n";
echo "Company Suffix: " . $faker->companySuffix() . "\n";
echo "Company Prefix: " . $faker->companyPrefix() . "\n";
echo "Company Industry: " . $faker->companyIndustry() . "\n";

echo "\n=== TEST COMPLETE ===\n";

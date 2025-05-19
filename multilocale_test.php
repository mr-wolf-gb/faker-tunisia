<?php

// Test script for multi-locale Tunisia Faker Provider
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/BaseTunisiaProvider.php';
require_once __DIR__ . '/src/FrTunisiaProvider.php';
require_once __DIR__ . '/src/EnTunisiaProvider.php';
require_once __DIR__ . '/src/ArTunisiaProvider.php';
require_once __DIR__ . '/src/TunisiaFakerFactory.php';

echo "=== MULTI-LOCALE TUNISIA FAKER VALIDATION ===\n\n";

// Test French locale (fr_TN)
echo "=== FRENCH LOCALE (fr_TN) ===\n";
$faker = FakerTunisia\TunisiaFakerFactory::create('fr_TN');
echo "Male Name: " . $faker->firstNameMale() . " " . $faker->lastName() . "\n";
echo "Female Name: " . $faker->firstNameFemale() . " " . $faker->lastName() . "\n";
echo "Address: " . str_replace("\n", ", ", $faker->address()) . "\n";
echo "Phone: " . $faker->phoneNumber() . "\n";
echo "Company: " . $faker->company() . "\n\n";

// Test English locale (en_TN)
echo "=== ENGLISH LOCALE (en_TN) ===\n";
$faker = FakerTunisia\TunisiaFakerFactory::create('en_TN');
echo "Male Name: " . $faker->firstNameMale() . " " . $faker->lastName() . "\n";
echo "Female Name: " . $faker->firstNameFemale() . " " . $faker->lastName() . "\n";
echo "Address: " . str_replace("\n", ", ", $faker->address()) . "\n";
echo "Phone: " . $faker->phoneNumber() . "\n";
echo "Company: " . $faker->company() . "\n\n";

// Test Arabic locale (ar_TN)
echo "=== ARABIC LOCALE (ar_TN) ===\n";
$faker = FakerTunisia\TunisiaFakerFactory::create('ar_TN');
echo "Male Name: " . $faker->firstNameMale() . " " . $faker->lastName() . "\n";
echo "Female Name: " . $faker->firstNameFemale() . " " . $faker->lastName() . "\n";
echo "Address: " . str_replace("\n", ", ", $faker->address()) . "\n";
echo "Phone: " . $faker->phoneNumber() . "\n";
echo "Company: " . $faker->company() . "\n\n";

// Test locale mixing
echo "=== LOCALE MIXING ===\n";
$faker = FakerTunisia\TunisiaFakerFactory::create('fr_TN');
$faker->setLocale('ar_TN', 'names');
$faker->setLocale('en_TN', 'addresses');

echo "Mixed Locale Example:\n";
echo "Name (ar_TN): " . $faker->name() . "\n";
echo "Address (en_TN): " . str_replace("\n", ", ", $faker->address()) . "\n";
echo "Phone (fr_TN): " . $faker->phoneNumber() . "\n";
echo "Company (fr_TN): " . $faker->company() . "\n\n";

echo "=== TEST COMPLETE ===\n";

?>
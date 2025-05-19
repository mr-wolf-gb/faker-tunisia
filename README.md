# Tunisia Faker Provider (Multi-Locale)

A custom Faker provider for generating Tunisian data in multiple locales (fr_TN, en_TN, ar_TN) for Laravel.

## Overview

This package provides a custom Faker provider for generating realistic Tunisian data in three locales:

-   **fr_TN**: French transliteration (Arabic data using the French alphabet)
-   **en_TN**: English format (Same names as fr_TN but with English address formats)
-   **ar_TN**: Arabic script (Native Arabic script for all data)

The provider includes generators for:

-   Person names (male and female first names, last names)
-   Addresses (streets, cities, postal codes, governorates)
-   Phone numbers (mobile and landline)
-   Company names and details

## Installation

You can install the package via composer:

```bash
composer require mr-wolf-gb/faker-tunisia
```

## Usage

### Basic Usage with Specific Locale

```php
// Create a Faker generator with specific locale
$faker = \FakerTunisia\TunisiaFakerFactory::create('fr_TN'); // French transliteration
// OR
$faker = \FakerTunisia\TunisiaFakerFactory::create('en_TN'); // English format
// OR
$faker = \FakerTunisia\TunisiaFakerFactory::create('ar_TN'); // Arabic script

// Generate data in the selected locale
$name = $faker->name;
$address = $faker->address;
$phone = $faker->phoneNumber;
$company = $faker->company;
```

### Mixing Locales

One of the key features of this package is the ability to mix locales for different components:

```php
// Start with a base locale
$faker = \FakerTunisia\TunisiaFakerFactory::create('fr_TN');

// Set specific locales for different components
$faker->setLocale('ar_TN', 'names');      // Use Arabic script for names
$faker->setLocale('en_TN', 'addresses');  // Use English format for addresses

// Generate mixed locale data
$name = $faker->name;           // Arabic script
$address = $faker->address;     // English format
$phone = $faker->phoneNumber;   // French format (default)
$company = $faker->company;     // French format (default)
```

Available components for mixing:

-   `names`: Person names
-   `addresses`: Addresses and locations
-   `phones`: Phone numbers
-   `companies`: Company names and details

### Available Formatters

#### Person Data

-   `firstNameMale()` - Generate a male first name
-   `firstNameFemale()` - Generate a female first name
-   `lastName()` - Generate a last name
-   `name($gender = null)` - Generate a full name

#### Address Data

-   `streetName()` - Generate a street name
-   `buildingNumber()` - Generate a building number
-   `postcode()` - Generate a postal code (4 digits)
-   `city()` - Generate a city name
-   `governorate()` - Generate a governorate name
-   `address()` - Generate a complete address

#### Phone Data

-   `mobileNumber()` - Generate a mobile phone number
-   `landlineNumber()` - Generate a landline phone number
-   `phoneNumber()` - Generate either a mobile or landline number

#### Company Data

-   `company()` - Generate a company name
-   `companySuffix()` - Generate a company suffix
-   `companyPrefix()` - Generate a company prefix
-   `companyIndustry()` - Generate a company industry

## Laravel Integration

The package automatically registers with Laravel through its service provider. Once installed, you can use it in your Laravel application:

```php
// In a Laravel controller or service
public function example()
{
    // Default locale (fr_TN)
    $faker = app('Faker');

    // Or specify a locale
    $faker = \FakerTunisia\TunisiaFakerFactory::create('ar_TN');

    // Mix locales if needed
    $faker->setLocale('en_TN', 'addresses');

    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'company' => $faker->company,
    ];
}
```

```php
// In Factory
class UserFactory extends Factory
{
    public function definition(): array
    {
        $faker = \FakerTunisia\TunisiaFakerFactory::create('ar_TN');

        return [
            'name' => $faker->name,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'company' => $faker->company,
        ];
    }
}
```

You can also set the default locale in your Laravel configuration:

```php
// config/app.php
'faker_locale' => 'ar_TN',
```

## Examples

### French Locale (fr_TN)

```
Male Name: Marouen Bahloul
Female Name: Syrine Marzougui
Address: Place Ibn Khaldoun 537, 6589 Monastir, Tunisie
Phone: +216 54 01 03 02
Company: Groupe de Bizerte SA
```

### English Locale (en_TN)

```
Male Name: Nizar Mathlouthi
Female Name: Asma Ben Ali
Address: 454 Paris Boulevard, Zarzis, 1242, Tunisia
Phone: +216 78 03 01 02
Company: Hammami & Makhlouf Inc.
```

### Arabic Locale (ar_TN)

```
Male Name: مهدي ساسي
Female Name: غفران ماهر
Address: نهج الياسمين 787, الكاف, تونس
Phone: +216 21 01 02 03
Company: قربة التكنولوجيا ش.خ
```

### Mixed Locales

```
Name (ar_TN): غيث طرابلسي
Address (en_TN): 922 Rue de la République, Bizerte, 6845, Tunisia
Phone (fr_TN): +216 73 02 01 03
Company (fr_TN): Transport de Tunisie SCS
```

## License

MIT

## Credits

-   Contributors: [Manus AI Agent](https://manus.im/)
-   Research and data collection: Based on authentic Tunisian sources

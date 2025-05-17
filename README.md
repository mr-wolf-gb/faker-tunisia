# Tunisia Faker Provider (fr_TN)

A custom Faker provider for generating Tunisian data in the French alphabet (fr_TN locale) for Laravel.

## Overview

This package provides a custom Faker provider for generating realistic Tunisian data using the French alphabet. It's designed to work with Laravel 12 and FakerPHP, and includes generators for:

- Person names (male and female first names, last names)
- Addresses (streets, cities, postal codes, governorates)
- Phone numbers (mobile and landline)
- Company names and details

All data is transliterated from Arabic to the French alphabet following Tunisian conventions.

## Installation

You can install the package via composer:

```bash
composer require mr-wolf-gb/faker-tunisia
```

## Usage

### Basic Usage

```php
// Create a Faker generator with fr_TN locale
$faker = \Faker\Factory::create('fr_TN');

// Generate Tunisian data
$name = $faker->name;
$address = $faker->address;
$phone = $faker->phoneNumber;
$company = $faker->company;
```

### Available Formatters

#### Person Data

- `firstNameMale()` - Generate a male first name
- `firstNameFemale()` - Generate a female first name
- `lastName()` - Generate a last name

#### Address Data

- `streetName()` - Generate a street name
- `buildingNumber()` - Generate a building number
- `postcode()` - Generate a postal code (4 digits)
- `city()` - Generate a city name
- `governorate()` - Generate a governorate name
- `address()` - Generate a complete address

#### Phone Data

- `mobileNumber()` - Generate a mobile phone number
- `landlineNumber()` - Generate a landline phone number
- `phoneNumber()` - Generate either a mobile or landline number

#### Company Data

- `company()` - Generate a company name
- `companySuffix()` - Generate a company suffix (SARL, SA, etc.)
- `companyPrefix()` - Generate a company prefix (Société, etc.)
- `companyIndustry()` - Generate a company industry

## Laravel Integration

The package automatically registers with Laravel through its service provider. Once installed, you can use it in your Laravel application:

```php
// In a Laravel controller or service
public function example()
{
    $faker = \Faker\Factory::create('fr_TN');

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
        $faker = \Faker\Factory::create('fr_TN');
        $faker->addProvider(new FakerTunisia\Tunisia($faker));
        return [
            'name' => $faker->name,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'company' => $faker->company,
        ];
    }
}
```

## Data Sources

The provider uses authentic Tunisian data sources for:

- Common Tunisian first and last names
- Tunisian address formats and city names
- Tunisian phone number formats
- Tunisian company naming conventions
- Arabic to French transliteration rules specific to Tunisia

## License

MIT

## Credits

- Contributors: [Manus AI Agent](https://manus.im/)
- Research and data collection: Based on authentic Tunisian sources

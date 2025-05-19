<?php

namespace FakerTunisia;

/**
 * Factory for creating Tunisian Faker instances with different locales
 */
class TunisiaFakerFactory
{
    /**
     * Create a new Faker instance with the specified locale
     *
     * @param string $locale The locale to use (fr_TN, en_TN, ar_TN)
     * @return \Faker\Generator
     */
    public static function create($locale = 'fr_TN')
    {
        $faker = new \Faker\Generator();
        
        switch ($locale) {
            case 'fr_TN':
            case 'fr':
                $faker->addProvider(new FrTunisiaProvider($faker));
                break;
            case 'en_TN':
            case 'en':
                $faker->addProvider(new EnTunisiaProvider($faker));
                break;
            case 'ar_TN':
            case 'ar':
                $faker->addProvider(new ArTunisiaProvider($faker));
                break;
            default:
                $faker->addProvider(new FrTunisiaProvider($faker));
        }
        
        return $faker;
    }
}

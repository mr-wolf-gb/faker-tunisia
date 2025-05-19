<?php

namespace FakerTunisia;

use Faker\Provider\Base;

/**
 * Base Provider for Tunisian fake data
 * Abstract class that handles locale selection and mixing
 */
abstract class BaseTunisiaProvider extends Base
{
    // Locale configuration
    protected $localeConfig = [];
    protected $defaultLocale = 'fr_TN';
    
    // Available locales
    protected $availableLocales = ['fr_TN', 'en_TN', 'ar_TN'];
    
    // Components that can have different locales
    protected $components = ['names', 'addresses', 'phones', 'companies'];
    
    /**
     * Set locale for a specific component or all components
     *
     * @param string $locale The locale to set (fr_TN, en_TN, ar_TN)
     * @param string|null $component The component to set the locale for (names, addresses, phones, companies)
     * @return $this
     */
    public function setLocale($locale, $component = null)
    {
        if (!in_array($locale, $this->availableLocales)) {
            throw new \InvalidArgumentException(sprintf(
                'Locale "%s" is not supported. Available locales: %s',
                $locale,
                implode(', ', $this->availableLocales)
            ));
        }
        
        if ($component === null) {
            // Set locale for all components
            foreach ($this->components as $comp) {
                $this->localeConfig[$comp] = $locale;
            }
        } elseif (in_array($component, $this->components)) {
            // Set locale for specific component
            $this->localeConfig[$component] = $locale;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Component "%s" is not supported. Available components: %s',
                $component,
                implode(', ', $this->components)
            ));
        }
        
        return $this;
    }
    
    /**
     * Get the locale for a specific component
     *
     * @param string $component The component to get the locale for
     * @return string The locale
     */
    public function getLocaleForComponent($component)
    {
        if (!in_array($component, $this->components)) {
            throw new \InvalidArgumentException(sprintf(
                'Component "%s" is not supported. Available components: %s',
                $component,
                implode(', ', $this->components)
            ));
        }
        
        return isset($this->localeConfig[$component]) 
            ? $this->localeConfig[$component] 
            : $this->defaultLocale;
    }
    
    /**
     * Get the provider for a specific locale
     *
     * @param string $locale The locale to get the provider for
     * @return BaseTunisiaProvider The provider
     */
    protected function getProviderForLocale($locale)
    {
        switch ($locale) {
            case 'fr_TN':
                return new FrTunisiaProvider($this->generator);
            case 'en_TN':
                return new EnTunisiaProvider($this->generator);
            case 'ar_TN':
                return new ArTunisiaProvider($this->generator);
            default:
                return new FrTunisiaProvider($this->generator);
        }
    }
    
    /**
     * Return a Tunisian name based on the locale configuration
     *
     * @param string|null $gender 'male', 'female' or null for any
     * @return string
     */
    public function name($gender = null)
    {
        $locale = $this->getLocaleForComponent('names');
        $provider = $this->getProviderForLocale($locale);
        
        if ($gender === 'male') {
            return $provider->firstNameMale() . ' ' . $provider->lastName();
        } elseif ($gender === 'female') {
            return $provider->firstNameFemale() . ' ' . $provider->lastName();
        }
        
        return $provider->firstName() . ' ' . $provider->lastName();
    }
    
    /**
     * Return a Tunisian first name based on the locale configuration
     *
     * @return string
     */
    public function firstName()
    {
        $locale = $this->getLocaleForComponent('names');
        $provider = $this->getProviderForLocale($locale);
        
        return static::randomElement([
            $provider->firstNameMale(),
            $provider->firstNameFemale()
        ]);
    }
    
    /**
     * Return a Tunisian address based on the locale configuration
     *
     * @return string
     */
    public function address()
    {
        $locale = $this->getLocaleForComponent('addresses');
        $provider = $this->getProviderForLocale($locale);
        
        $format = $provider->addressFormat();
        
        return $this->generator->parse($format);
    }
    
    /**
     * Return a Tunisian company name based on the locale configuration
     *
     * @return string
     */
    public function company()
    {
        $locale = $this->getLocaleForComponent('companies');
        $provider = $this->getProviderForLocale($locale);
        
        $format = $provider->companyFormat();
        
        return $this->generator->parse($format);
    }
    
    /**
     * Return a Tunisian phone number based on the locale configuration
     *
     * @return string
     */
    public function phoneNumber()
    {
        $locale = $this->getLocaleForComponent('phones');
        $provider = $this->getProviderForLocale($locale);
        
        return $provider->phoneNumberDirect();
    }
    
    // Abstract methods that must be implemented by locale-specific providers
    
    /**
     * Return a male first name
     *
     * @return string
     */
    abstract public function firstNameMale();
    
    /**
     * Return a female first name
     *
     * @return string
     */
    abstract public function firstNameFemale();
    
    /**
     * Return a last name
     *
     * @return string
     */
    abstract public function lastName();
    
    /**
     * Return a street name
     *
     * @return string
     */
    abstract public function streetName();
    
    /**
     * Return a building number
     *
     * @return string
     */
    abstract public function buildingNumber();
    
    /**
     * Return a postal code
     *
     * @return string
     */
    abstract public function postcode();
    
    /**
     * Return a city name
     *
     * @return string
     */
    abstract public function city();
    
    /**
     * Return a governorate name
     *
     * @return string
     */
    abstract public function governorate();
    
    /**
     * Return a mobile phone number
     *
     * @return string
     */
    abstract public function mobileNumber();
    
    /**
     * Return a landline phone number
     *
     * @return string
     */
    abstract public function landlineNumber();
    
    /**
     * Return a phone number directly (without locale mixing)
     *
     * @return string
     */
    abstract public function phoneNumberDirect();
    
    /**
     * Return a company suffix
     *
     * @return string
     */
    abstract public function companySuffix();
    
    /**
     * Return a company prefix
     *
     * @return string
     */
    abstract public function companyPrefix();
    
    /**
     * Return a company industry
     *
     * @return string
     */
    abstract public function companyIndustry();
    
    /**
     * Return an address format
     *
     * @return string
     */
    abstract public function addressFormat();
    
    /**
     * Return a company format
     *
     * @return string
     */
    abstract public function companyFormat();
}

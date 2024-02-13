# country
[![Latest Stable Version](https://poser.pugx.org/delboy1978uk/country/v/stable)](https://packagist.org/packages/delboy1978uk/country) [![Total Downloads](https://poser.pugx.org/delboy1978uk/country/downloads)](https://packagist.org/packages/delboy1978uk/country) [![Latest Unstable Version](https://poser.pugx.org/delboy1978uk/country/v/unstable)](https://packagist.org/packages/delboy1978uk/country) [![License](https://poser.pugx.org/delboy1978uk/country/license)](https://packagist.org/packages/delboy1978uk/country)<br />
![build status](https://github.com/delboy1978uk/country/actions/workflows/master.yml/badge.svg) [![Code Coverage](https://scrutinizer-ci.com/g/delboy1978uk/country/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/country/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/delboy1978uk/country/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/country/?branch=master) <br />
A countries and flags library in PHP. 
## installation
Install via composer into your project:
```
composer require delboy1978uk/country
```
## usage
#### factory
You can call `CountryFactory::generate($code)` to create a country object 
```php
public static function generate(string $id): Country;
```
#### entity
```php
public function __toString();
public function getFlag(): string;
public function getId(): string;
public function getIso(): string;
public function getName(): string;
public function getNumCode(): int;
public function setFlag(string $flag): void;
public function setId(string $id): void
public function setIso(string $iso): void;
public function setName(string $name): void;
public function setNumCode(int $numCode): void;
public function toArray(): array;
```
#### trait
You can `use HasCountryTrait` to add a country to your object (also works with doctrine)
```php
public function getCountry(): Country;
public function setCountry(Country $country): void;
```
#### flag image helper
You can call `Flag::render($country, $size)`, where size can be one of `tiny, small, medium, or large`.
```php
 public static function render(Country $country, $size)
 ```

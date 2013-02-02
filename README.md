# Special Agent

Special Agent is a [FuelPHP](http://fuelphp.com/) package which uses [php-mobile-detect](https://github.com/serbanghita/Mobile-Detect) to determine whether a device is mobile or not - this is largely to negate the use of Browscap, which has proven to be entirely unreliable as of late.

# What it does

This package does two things.

* Firstly, it overwrites the default `Agent::is_mobiledevice()` method to use php-mobile-detect.
* Secondly, it adds two other methods:
	* `Agent::is_mobile()` - merely shorthand for `Agent::is_mobiledevice()`
	* `Agent::is_tablet()` - an alias for php-mobile-detect's isTablet() method

# Usage

```sh
git clone --recursive git://github.com/joshmcmillan/special_agent fuel/packages/special_agent
```

After doing that, ensure you're always loading it in your config.php file, like so:

```php
'always_load' => array(

	'packages' => array(

		'special_agent'

	)

)
```

And you're done. Easy as cheese.
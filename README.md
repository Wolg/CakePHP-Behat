# Behat Shell

Shell for testing CakePHP Application using Behat

## Installation

- Unzip or clone this plugin into your app/Plugin/Behat folder.
- Add the plugin to your app/Config/bootstrap.php using `CakePlugin::load('Behat')`
- Run `Console/cake Behat.behat install` to install plugin
- Set your application root url into app/Config/behat.yml
- Make behat executable `chmod +x Console/behat`
- Run `Console/behat -dl` to be sure that everything properly loaded

## Usage

will be filled soon

## Requirements

* PHP version: PHP 5.3+
* CakePHP version: 2.x
* PHPUnit

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Added some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request
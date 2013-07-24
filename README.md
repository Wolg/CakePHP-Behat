# Behat Shell

Shell for testing CakePHP Application using Behat

## Installation

Behat Shell is installed use Composer.

Ensure `require` is present in `composer.json`. This will install the plugin to `Plugin/Behat`. You should also add either `behat/mink-goutte-driver` or `behat/mink-selenium2-driver` to your requirements, depending on which one you plan to use with Behat Shell.

```
{
    "require": {
        "wolg/behat": "*",
        "phpunit/phpunit": "*",
        "cakephp/cakephp": "2.*",
        "behat/behat": "2.4.*@stable"
    }
}
```

- Add the plugin to your app/Config/bootstrap.php using `CakePlugin::load('Behat')`
- Run `Console/cake Behat.behat install` to install plugin
- Set your application root url into app/Config/behat.yml
- Run `Console/behat -dl` to be sure that everything properly loaded


### But I don't use Composer?

That's fine, the process is laregly the same. However, instead of downloading Behat Shell using composer, you'll need to unzip or clone this plugin into your app/Plugin/Behat folder. After that, follow the rest of the steps outlined in the previous section. Don't worry about dependencies, we'll download those for you.

## Requirements

* PHP version: PHP 5.3+
* CakePHP version: 2.x
* PHPUnit

## Further Reading

* [Quick Intro to Behat](http://docs.behat.org/quick_intro.html) - Read Quick Intro Guide.
* [Practical BDD with Behat and Mink](http://www.slideshare.net/jmikola1/pratical-bdd-with-behat-and-mink) - An introduction into behavior-driven development with Behat and Mink.
* [Behat Documentation](http://docs.behat.org/index.html) - Read Behat2 Documentation Guides.
* [Behat by example](https://speakerdeck.com/everzet/behat-by-example) - Check presentation from the creator.
* [Mink Documentation](http://mink.behat.org/) - Read about Mink and Web acceptance testing.

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Added some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

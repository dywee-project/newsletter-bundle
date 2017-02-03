# newsletter-bundle

this README is currently in progress. Thank you for your understanding...

Designed to work fine with the DyweeCoreBundle providing great administration features

##Installing

just run
```bash
$ composer require dywee/newsletter-bundle
```

add the bundle to the kernel
```php
new Dywee\NewsletterBundle\DyweeNewsletterBundle(),
```

add the routing informations
```yml
dywee_newsletter:
    resource: "@DyweeNewsletterBundle/Controller"
    type: annotation
    prefix:   /
```

no more configuration needed

Symfony Standard Edition
========================

**WARNING**: This distribution does not support Symfony 4. See the
[Installing & Setting up the Symfony Framework][15] page to find a replacement
that fits you best.

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev env) - Adds code generation
    capabilities

  * [**WebServerBundle**][14] (in dev env) - Adds commands for running applications
    using the PHP built-in web server

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

# Coupon
# Requirements
   * **PHP** 7.1.16
   * **insyallation de symfony3** : 
 https://symfony.com/doc/3.3/setup.html
 # Vendor 
   * **tappez cette commande** " composer require " dans votre terminal et pour database-name: coupon les autres champs tappez juste entrer entrer
   * **Vérification** dans votre app/config verifiez le fichier parametres.yml( pas parametres.yml.dist)  et verifiez que le nom de la base de données est coupon
 # Base de données 
   * **Attention** assurez vous que la base de données s'appelle coupon dans votre phpmyadmin et dans votre base de données exporter le fichier coupon.sql  
 # Tester
   * **Lien** http://localhost/Coupon-master/web/app_dev.php/payment
   * **Coupon** Faites entrer le coupon hanaa2020 dans le champ coupon et puis cliquer sur le vide ( coupon valide ) ,réessayez avec hanaa2019 et un autre coupon de votre choix et vous allez découvrir le résultat.
   Quand le coupon est valide et vous cliquez sur OK vous pourrez cliquez sur start et passer le paiement , sinon le bouton est disabled.

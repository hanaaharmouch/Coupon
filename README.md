

# Coupon
# Requirements
   * **Installez le wampServer et PHP** 7.1.16
   * **installation de composer** :
    https://getcomposer.org/download/ 
     * **Redémarrez la machine** assurez vous que les variables d'environnement existe sinon ajouter C:\wamp64\bin\php\php7.1.16 a PATH
 # Vendor 
   * **Placez le projet que vous avez téléchargé dans c:/wamp/www** :
   * **ouvrez le projet dans votre éditeur et installez de symfony3.4.35** :
    https://symfony.com/doc/3.4/setup.html // la commande : php -r "file_put_contents('symfony', file_get_contents('https://symfony.com/installer'));"

   * **tappez cette commande** " composer require " dans votre terminal et pour database-name: coupon les autres champs tappez juste entrer entrer
   * **Probablement vous allez rencontrer un problème de out of memory, allez à Php7 dans votre wamp/bin et dans les fichiers php.ini php.ini.developement et php.ini.production changez memory_limit = 128 MO en memory_limit = -1 voyez les images dans mon dernier email** 
   * **Après avoir changé toutes les memory_limit tappez cette commande :** 
   php -d memory_limit=-1 c:\composer\composer.phar update
   * **Vérification** dans votre app/config verifiez le fichier parametres.yml( pas parametres.yml.dist)  et verifiez que le nom de la base de données est coupon sinon changez le nom à "coupon"
 # Base de données 
   * **Attention** assurez vous que la base de données s'appelle coupon dans votre phpmyadmin et dans votre base de données importez le fichier coupon.sql  
 # Tester
   * **Lien** http://localhost/Coupon-master/web/app_dev.php/payment
   * **Coupon** Faites entrer le coupon hanaa2020 dans le champ coupon et puis cliquer sur le vide ( coupon valide ) ,réessayez avec hanaa2019 et un autre coupon de votre choix et vous allez découvrir le résultat.
   Quand le coupon est valide et vous cliquez sur OK vous pourrez cliquez sur start et passer le paiement , sinon le bouton est disabled.

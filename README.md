

# Coupon
# Requirements
   * **PHP** 7.1.16
   * **insyallation de symfony3.4.35** :
    https://symfony.com/doc/3.4/setup.html
   * **insyallation de symfony3.4.35** :
    https://getcomposer.org/download/ 
 # Vendor 
   * **tappez cette commande** " composer require " dans votre terminal et pour database-name: coupon les autres champs tappez juste entrer entrer
   * **Vérification** dans votre app/config verifiez le fichier parametres.yml( pas parametres.yml.dist)  et verifiez que le nom de la base de données est coupon
 # Base de données 
   * **Attention** assurez vous que la base de données s'appelle coupon dans votre phpmyadmin et dans votre base de données exporter le fichier coupon.sql  
 # Tester
   * **Lien** http://localhost/Coupon-master/web/app_dev.php/payment
   * **Coupon** Faites entrer le coupon hanaa2020 dans le champ coupon et puis cliquer sur le vide ( coupon valide ) ,réessayez avec hanaa2019 et un autre coupon de votre choix et vous allez découvrir le résultat.
   Quand le coupon est valide et vous cliquez sur OK vous pourrez cliquez sur start et passer le paiement , sinon le bouton est disabled.

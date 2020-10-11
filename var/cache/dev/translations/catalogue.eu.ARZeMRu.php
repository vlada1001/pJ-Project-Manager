<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Autentifikazio-errorea gertatu da.',
    'Authentication credentials could not be found.' => 'Ez dira aurkitu autentifikazio-kredentzialak.',
    'Authentication request could not be processed due to a system problem.' => 'Ezin izan da autentifikazio-eskaera prozesatu, sistema-arazo bat gertatu da eta.',
    'Invalid credentials.' => 'Kredentzialak okerrak dira.',
    'Cookie has already been used by someone else.' => 'Dagoeneko beste pertsona batek erabili du cookiea.',
    'Not privileged to request the resource.' => 'Ez duzu baliabidea eskatzeko aukerarik.',
    'Invalid CSRF token.' => 'CSRF tokena okerra da.',
    'No authentication provider found to support the authentication token.' => 'Ez da aurkitu autentifikazio-tokena eutsi dezakeen autentifikazio-hornitzailerik.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ez dago saiorik erabilgarri, iraungi egin da edo cookieak ez daude gaituta.',
    'No token could be found.' => 'Ez da tokenik aurkitu.',
    'Username could not be found.' => 'Ez da erabiltzaile-izena aurkitu.',
    'Account has expired.' => 'Kontua iraungi da.',
    'Credentials have expired.' => 'Kredentzialak iraungi dira.',
    'Account is disabled.' => 'Kontua desgaituta dago.',
    'Account is locked.' => 'Kontua blokeatuta dago.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Aurrekoa',
    'label_next' => 'Hurrengoa',
    'filter_searchword' => 'Bilatu...',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Uneta šifra nije dobra.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Korisnik sa unetom email adresom ne postoji.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Symfony is great' => 'Symfony je sjajan',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;

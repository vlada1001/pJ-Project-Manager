<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('be', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Памылка аўтэнтыфікацыі.',
    'Authentication credentials could not be found.' => 'Дадзеныя аўтэнтыфікацыі не знойдзены.',
    'Authentication request could not be processed due to a system problem.' => 'Запыт аўтэнтыфікацыі не можа быць апрацаваны ў сувязі з праблемай у сістэме.',
    'Invalid credentials.' => 'Несапраўдныя дадзеныя аўтэнтыфікацыі.',
    'Cookie has already been used by someone else.' => 'Нехта іншы ўжо выкарыстаў гэтыя кукі (cookie).',
    'Not privileged to request the resource.' => 'Адсутнічаюць правы на запыт гэтага рэсурсу.',
    'Invalid CSRF token.' => 'Несапраўдны CSRF-токен.',
    'No authentication provider found to support the authentication token.' => 'Не знойдзен правайдар аўтэнтыфікацыі, які можа падтрымліваць гэты токен аўтэнтыфікацыі.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія не даступна, яе час скончыўся, або кукі (cookies) выключаны.',
    'No token could be found.' => 'Токен не знойдзен.',
    'Username could not be found.' => 'Імя карыстальніка не знойдзена.',
    'Account has expired.' => 'Скончыўся тэрмін дзеяння акаўнта.',
    'Credentials have expired.' => 'Скончыўся тэрмін дзеяння дадзеных аўтэнтыфікацыі.',
    'Account is disabled.' => 'Акаўнт адключан.',
    'Account is locked.' => 'Акаўнт заблакіраван.',
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

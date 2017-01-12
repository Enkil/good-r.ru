<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);

mb_internal_encoding("UTF-8");

$app['title'] = 'Бизнес решения';
$app['description'] = 'Бизнес решения - когда работа в удовольствие!';
$app['domain'] = "http://".$_SERVER['SERVER_NAME'];
$app['googleSiteVerification'] = '';
$app['yandexVerification'] = '';
$app['yandexMetrika'] = '';
$app['googleAnalytics'] = '';
$app['CallbackkillerID'] = 'db3dfbb7507b941c9997e273df320129';
$app['facebookPixel'] = '';

$settings['sypexGeoApiKey'] = 'Agxqu';

$settings['smsRecipietns'] = '79267542575';
$settings['smsRuApiKey'] = '6F82B7B5-59C6-8209-6146-8F47FA2BC60A';
$settings['smsMessage'] = " ";

$settings['EmailRecipients'] = ['timohin.i@gmail.com',''];
$settings['EmailReplyTo'] = ['office@good-r.ru'];
$settings['EmailFrom'] = "office@good-r.ru";
$settings['EmailSubject'] = "Новая заявка с сайта ". $_SERVER['SERVER_NAME'] ."";
$settings['EmailSMTPHosts'] = '';
$settings['EmailSMTPUser'] = '';
$settings['EmailSMTPPassword'] = '';
$settings['EmailSMTPSecure'] = 'tls';
$settings['EmailSMTPPort'] = 587;

$settings['fileForRequests'] = 'requests.csv';

$settings['googleSpreedSheetsAppName'] = '';
$settings['googleSpreedSheetsClientId'] = '';
$settings['googleSpreedSheetsClientEmail'] = '';
$settings['googleSpreedSheetsClientSecrets'] = '';
$settings['googleSpreedSheetsP12'] = '';

$settings['googleSpreedSheetsScope'] = 'https://spreadsheets.google.com/feeds';
$settings['googleSpreedSheetsSpreedSheetID'] = '';
$settings['googleSpreedSheetsWorkSheetID'] = '';



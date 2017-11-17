<?php
 require("vendor/autoload.php");

 use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'rahul23.auth0.com',
  'client_id' => 'oBO09bgSHoX5CZcHwGlTgxXcRprOC2JP',
  'client_secret' => 'nTJiNSdcjHRruMW0-njMk7zeBgv7CGifstLI9fFWCDzNRKYMYjk0exJJGPYiQL0t',
  'redirect_uri' => 'http://myphpnotes.com/singleSignOnTest/callback.php',
  'audience' => 'https://rahul23.auth0.com/userinfo',
  'scope' => 'openid profile',
  'persist_id_token' => true,
  'persist_access_token' => true,
  'persist_refresh_token' => true,
]);

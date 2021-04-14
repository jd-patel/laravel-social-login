# Laravel Login with Google, Facebook and Twitter 

## Demo with Laravel 8x

Simpely download the repository to your local machine.

Create Database laravel-login and import [Database](https://github.com/jd-patel/laravel-social-login/sql/laravel-login.sql).

## Create your Client ID & Client Secret using below URL.
- Google - [http://console.developers.google.com](http://console.developers.google.com)
- Facebook - [https://developers.facebook.com/apps](https://developers.facebook.com/apps)
- Twitter - [https://developer.twitter.com/en](https://developer.twitter.com/en)


Change the Client_ID, Client_Secret, Redirect URL in the "config/Service.php" file

<pre><code>
'google' => [
    'client_id' => 'GOOGLE_CLIENT_ID',
    'client_secret' => 'GOOGLE_CLIENT_SECRET',
    'redirect' => 'CALLBACK_URL_GOOGLE', //https://domainname.com/auth/google/callback
],

'facebook' => [
    'client_id' => 'FACEBOOK_CLIENT_ID',
    'client_secret' => 'FACEBOOK_CLIENT_SECRET',
    'redirect' => 'CALLBACK_URL_FACEBOOK', //https://domainname.com/auth/facebook/callback
],

'twitter' => [
    'client_id' => 'TWITTER_CLIENT_ID',
    'client_secret' => 'TWITTER_CLIENT_SECRET',
    'redirect' => 'CALLBACK_URL_TWITTER', //https://domainname.com/auth/twitter/callback
],
</code></pre>

Happy Coding!!!
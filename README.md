<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Defact

This app is a forum-and-thread-based app that centers around providing users with the best
truth-revealing experience. Say goodbye to myths, welcome facts with open arms, all possible
thanks to its own community. If you have any doubts, drop them in this app, you'll have your
answer, not just one though, a lot of different-yet-insightful takes from those around you.

## Features

* Auth
* Threads
* Vote on myth/fact
* Ask your doubts

## Dev Notes

### Getting started

```
git clone https://github.com/erunesu-nyan/defact.git 
cd defact
cp .env.example .env
composer install
php artisan key:generate
npm install && npm run dev
php artisan migrate
php artisan serve
```

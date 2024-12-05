<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Backend API - Laravel

This project is the backend implementation of a technical test for a Full Stack Developer role. The backend is built with **Laravel** and provides a RESTful API with authentication using an API Key. It serves a list of locations as requested by the frontend.

---
![alt text](image.png)
## Features

- Implements a RESTful API endpoint to fetch a list of locations.
- Secure API Key authentication for all API requests.
- Returns location details including:
  - Code (ID)
  - Name
  - Image URL
  - Creation Date
- Includes clear error handling and validation for invalid or missing API Keys.
- Follows Laravel best practices for routing, controllers, and resource management.
- Optional integration with static analysis tools like **PHPStan** or **Psalm**.

---

## Requirements

- PHP 8.1 or higher
- Composer
- Laravel Framework
- A web server (e.g., Apache, Nginx, or Laravel's built-in server)

---

## Installation and Setup

1. Clone the repository:
2.php artisan serve

# location-api

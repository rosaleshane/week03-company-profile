# ALYSSUM — Fine Jewelry

**Where Elegance Blooms.**

A responsive jewelry company profile website developed using Laravel for the ITST 302 Client-Server Architecture Week 3 activity.

## Project Overview

ALYSSUM is a fine jewelry brand concept inspired by Allison's vision of creating elegant and meaningful jewelry. The website introduces the brand, showcases its jewelry-related services, and provides a contact page for potential customers.

## Features

- Responsive homepage featuring jewelry imagery and collections
- About page introducing Allison and the brand's story
- Services page showcasing six jewelry-related services
- Contact page with a UI-only contact form
- Shared navigation bar and footer
- Consistent Blush Rose color palette
- Laravel MVC architecture using a dedicated controller and Blade templates

## Technologies Used

- PHP 8.2
- Laravel 12
- Blade Templates
- HTML5
- CSS3
- Composer
- Git and GitHub

## MVC Structure

**Model:** Laravel's default project structure is retained. No custom database model is required for this company profile.

**View:** Blade templates located in `resources/views/`.

**Controller:** `CompanyController.php` handles the four website pages.

**Routes:** Defined in `routes/web.php`.

## Website Pages

| Page | Description |
|---|---|
| Home | Introduces ALYSSUM and its featured collections |
| About | Presents Allison's inspiration and brand vision |
| Services | Displays six jewelry-related services |
| Contact | Provides contact information and a UI-only form |

## Installation

1. Clone the repository.
2. Open the project folder.
3. Run `composer install`.
4. Copy `.env.example` to `.env`.
5. Run `php artisan key:generate`.
6. Start the development server using `php artisan serve`.
7. Visit `http://127.0.0.1:8000`.

## Project Information

**Course:** ITST 302 — Client-Server Architecture  
**Activity:** Week 3 — Laravel MVC Company Profile  
**Developer:** Shaeena Marie Andrea R. Cordova  
**Section:** BSIT 3A  
**Brand Concept:** ALYSSUM Fine Jewelry  
**Founder (Brand Concept):** Allison

## Reflection

This activity helped me understand how Laravel uses
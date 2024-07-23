
## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

## Travel Agency API


This project is a Laravel API application developed for a travel agency. It provides a set of endpoints to manage and retrieve travel and tour information, designed with robust authentication and role-based access control.

You can also read it in a separate Google Docs format if you prefer from [here]( https://docs.google.com/document/d/1IqsnOB6sjoSEcgmjqHPhb58Ym-82x5jKDDxvTWeQsL0/edit?usp=sharing.
) .
- All thanks to Mr. Povilas Korop for this course.


## Project Overview
The Travel Agency API includes the following features:

## Models and Relationships
- Users: Managed with roles and permissions.
- Roles: Define different access levels such as admin and editor.
- Travels: Represents travel destinations with details such as name, description, and duration.
- Tours: Specific date ranges and pricing for each travel destination.
## Endpoints
- Admin Endpoints (Private):
   - Create new users.
   - Create new travels.
   - Create new tours for a travel.
   - Update travels.

- Public Endpoints (No authentication required):
   -List of paginated travels (only public travels are returned).
   -List of paginated tours by travel slug, with filtering options (price range, date range) and sorting by price and starting date.
## Authentication
   - Utilizes Laravel Sanctum for authentication.
   - Roles and permissions control access to various CRUD operations.
   - Admin users also have the editor role.
## Pricing
Tours prices are stored as integers (e.g., €999 is stored as 99900) and formatted on the frontend.
## Additional Features
- UUIDs: Used as primary keys for enhanced security and uniqueness.
- Virtual Fields: Computed fields like number of nights derived from the number of days.
- Code Quality: Utilized Laravel Pint for code formatting and maintaining a consistent code style.
- Documentation: Generated using Scribe. Accessible at http://travel-api.test/docs.
- Automated Tests: Implemented feature tests with every feature to ensure reliability and correctness.
## Tools and Packages Used
- Laravel Pint: For code formatting and ensuring clean, consistent code.
- Scribe: For generating API documentation.
- Laravel Sanctum: For authentication.
- PHP-CS-Fixer: Ensuring code style and quality.
- Larastan: For static analysis and improving code quality.
## Getting Started :
- Clone the repository.
- Install dependencies via Composer.
- Configure the .env file.
- Run migrations and seed the database.
- Serve the application using php artisan serve.


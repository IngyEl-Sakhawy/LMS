# Learning Management System (LMS)

This project is a basic Learning Management System (LMS) built with Laravel. The application includes user registration, course management, and a contact form that sends an email to an admin.

<div align="center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Ag7a5rOMHX8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

## Features

### User Registration and Authentication

- Users can register with their name, email, and password.
- After registration, users are redirected to a dashboard.
- Login functionality for existing users.
- Only authenticated users can access the course management features.

### Course Management

- Create, read, update, and delete (CRUD) operations for courses.
- Each course has a title, description, start date, and end date.
- Course management is restricted to authenticated users.

### Contact Form

- A contact form with fields for name, email, and message.
- On form submission, an email with the form details is sent to a specified admin email.

## Requirements

- PHP 7.3 or higher
- Composer
- Laravel 8 or higher
- MySQL or any other database supported by Laravel

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/IngyEl-Sakhawy/LMS.git
    cd your-repository
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install && npm run dev
    ```

3. Copy `.env.example` to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```

4. Generate an application key:
    ```bash
    php artisan key:generate
    ```

5. Set up your database and run migrations:
    ```bash
    php artisan migrate
    ```

6. Seed the database with initial data (if applicable):
    ```bash
    php artisan db:seed
    ```

7. Serve the application:
    ```bash
    php artisan serve
    ```

## Usage

- Register a new user or log in with existing credentials.
- Manage courses through the dashboard.
- Use the contact form to send messages to the admin.

## Contact

For issues, questions, or suggestions, please open an issue on the [GitHub repository](https://github.com/IngyEl-Sakhawy/LMS.git/issues).

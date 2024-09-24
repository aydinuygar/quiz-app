# Quiz App

This application allows users to take quizzes and receive instant feedback on their answers. The app provides an intuitive interface to create, manage, and participate in quizzes.

## Features

- Create and manage quizzes
- Answer multiple-choice questions
- View quiz results immediately
- User-friendly interface

## Technologies

- **Laravel**: Back-end framework for the web application.
- **Bootstrap**: CSS framework for responsive design.
- **JavaScript**: For dynamic features.

## Laravel Packages and Features Used

- **Laravel UI**: For authentication and front-end scaffolding.
- **Eloquent ORM**: For database interactions.
- **Blade Templates**: For the front-end views.
- **Migrations**: To handle database schema changes.
- **Middleware**: To handle user access control and quiz management.
- **Validation**: To validate user inputs and quiz submissions.

## Installation

1. **Clone the repository:**
   bash
   git clone https://github.com/aydinuygar/quiz-app.git
2. **Install dependencies:**
   bash
   cd quiz-app
   composer install
   npm install
3. **Create the .env file:**
   bash
   cp .env.example .env
4. **Set up the database and run migrations:**
   bash
   php artisan migrate
5. **Start the application:**
   bash
   php artisan serve

## Usage

- Create a quiz from the admin panel.
- Users can select a quiz, answer questions, and submit their results.
- Results are displayed immediately after quiz submission.

## Contributors

- Uygar AYDIN

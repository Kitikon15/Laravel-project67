# Laravel Project67

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel Project67

Laravel Project67 is a complete web application built with Laravel Framework, featuring user authentication and post management system. This project demonstrates modern web development practices with a beautiful Thai language interface.

### 🌟 Key Features

- **🔐 User Authentication System**
  - Beautiful login page with email/password authentication
  - Session management with remember me functionality
  - Secure logout system
  - User-specific navigation

- **📝 Post Management**
  - Create, view, and manage posts
  - Rich text content support
  - User attribution for posts
  - Pagination for post listings

- **🎨 Modern UI/UX**
  - Responsive design with Bootstrap 4
  - Thai language interface
  - Beautiful gradient designs
  - Font Awesome icons
  - Mobile-friendly layout

- **🛡️ Security Features**
  - CSRF protection
  - Authentication middleware
  - Input validation
  - Password hashing

### 🚀 Technology Stack

- **Backend:** Laravel Framework v12, PHP 8.2+
- **Frontend:** Bootstrap 4, Font Awesome, Custom CSS
- **Database:** SQLite (development)
- **Authentication:** Laravel's built-in Auth system
- **Templating:** Blade templates

## 📋 Installation

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm (optional, for frontend assets)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd laravel-project67
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   php artisan migrate:fresh --seed
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

6. **Access the application**
   - Open your browser and navigate to `http://127.0.0.1:8000`

## 🔑 Test Users

The application comes with pre-seeded test users:

| Email | Password | Role |
|-------|----------|------|
| test@example.com | password123 | Test User |
| admin@example.com | admin123 | Admin User |
| demo@example.com | demo123 | Demo User |

## 📚 Usage

### Authentication
1. Visit `/login` to access the login page
2. Use any of the test accounts above
3. Navigate through the application using the top navigation

### Post Management
1. **View Posts:** Visit `/message` to see all posts
2. **Create Posts:** Click "สร้างโพสต์" (requires authentication)
3. **Navigation:** Use the responsive navigation bar

### Key Routes
- `/` - Home page with project overview
- `/login` - Authentication page
- `/message` - Post listings with pagination
- `/create` - Create new post (authenticated users only)
- `/logout` - Logout (POST request)

## 🏗️ Project Structure

```
laravel-project67/
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php      # Authentication logic
│   │   └── PostController.php      # Post management
│   └── Models/
│       ├── Post.php               # Post model
│       └── User.php               # User model
├── resources/views/
│   ├── welcome_simple.blade.php   # Home page
│   ├── login.blade.php           # Login form
│   ├── create.blade.php          # Post creation
│   └── message.blade.php         # Post listings
├── routes/
│   └── web.php                   # Application routes
├── database/
│   ├── migrations/               # Database migrations
│   └── seeders/                  # Database seeders
└── index.html                    # Project documentation
```

## 🛠️ Development

### Available Commands

```bash
# Clear caches
php artisan route:clear
php artisan config:clear
php artisan view:clear

# Database operations
php artisan migrate
php artisan db:seed
php artisan migrate:fresh --seed

# Development server
php artisan serve
```

## 📖 Documentation

Comprehensive Thai language documentation is available in the `index.html` file, which includes:
- Project overview and features
- System architecture
- Installation guide
- Database structure
- Usage instructions

## 🤝 Contributing

This is a learning project. Feel free to fork, modify, and improve!

## 📄 License

This project is built on the Laravel framework, which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## Screenshots

### Home Page
Beautiful landing page with navigation and feature overview.

### Login System
Secure authentication with beautiful Thai language interface.

### Post Management
Create and manage posts with user attribution and pagination.

---

**Built with ❤️ using Laravel Framework**
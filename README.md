# Laravel CRUD API Project

This is a simple **Laravel Student CRUD API** project that demonstrates how to perform Create, Read, Update, and Delete operations using Laravel and MySQL.

---

## 🚀 Features

* Add new student records
* View all students
* Update existing student details
* Delete a student
* API tested with Postman

---

## 🛠️ Tech Stack

* **Laravel 12**
* **PHP 8**
* **MySQL**
* **Postman**

---

## 📂 API Endpoints

| Method | Endpoint       | Description            |
| ------ | -------------- | ---------------------- |
| GET    | /students      | Get all students       |
| POST   | /students      | Add new student        |
| GET    | /students/{id} | Get a single student   |
| PUT    | /students/{id} | Update student details |
| DELETE | /students/{id} | Delete a student       |

---

## ⚙️ Installation Guide

```bash
# Clone this repository
git clone https://github.com/YOUR-USERNAME/laravel-crud-api-project.git

# Go into the project directory
cd laravel-crud-api-project

# Install dependencies
composer install

# Copy .env file
cp .env.example .env

# Generate app key
php artisan key:generate
```

---

## 💾 Database Setup

```bash
# Create a new database in MySQL
# Update your .env file with database name, username, and password
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=

# Run migrations
php artisan migrate
```

---

## ▶️ Run the Project

```bash
php artisan serve
```

Then open:
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## ✨ Author

**Huzaifa Nadeem**
💻 Student CRUD API Project made with ❤️ using Laravel

GitHub: [https://github.com/huzaifa-kamboh]

---

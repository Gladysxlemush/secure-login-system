# 🔐 Secure Login System

A secure user authentication system built with **PHP**, **MySQL**, and **Docker**, featuring registration with password hashing, session-based login, and access control.  
Ideal for demonstrating full-stack skills in secure web development and user authentication best practices.

---

## ✨ Features

- Secure user **registration** with hashed passwords  
- **Login system** with session-based authentication  
- **Access control** to restrict protected pages  
- Clean and simple **UI** for ease of use  
- Runs in **Docker** for consistent local development  

---

## 🧰 Technologies Used

- **PHP** for server-side logic  
- **MySQL** as the backend database  
- **Docker & Docker Compose** for containerized setup  
- **phpMyAdmin** for database visualization and management  
- **Bootstrap** for front-end styling  

---
## 🧠 What I Learned
- Hashing and verifying passwords using password_hash() and password_verify() in PHP

- Implementing secure session handling and user authentication

- Using Docker and phpMyAdmin for efficient local development

- Creating access control logic for protected resources

  ---

## 🚧 Future Improvements
- Add CSRF token protection

- Implement email verification and password reset flow

- Add two-factor authentication (2FA)

- Role-based access control system

  ---
  ## 📁 Project Structure

```bash
secure-login-system/
├── docker-compose.yml         # Docker configuration
├── php/                       # PHP application code
│   ├── index.php              # Home page
│   ├── login.php              # Login page
│   ├── register.php           # Registration form
│   ├── dashboard.php          # Protected dashboard
│   ├── logout.php             # Logout logic
├── sql/                       # Database schema
│   └── init.sql               # SQL script for user table
└── README.md                  # Project documentation



## ⚙️ Installation & Usage

```bash
# Clone the repository
git clone https://github.com/gladysxlemush/secure-login-system.git

# Navigate into the project
cd secure-login-system

# Start the application
docker-compose up -d


Visit http://localhost:8080 to access the app

Register a new account

Log in to view the protected dashboard


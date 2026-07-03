# 🛒 Bazar Hisab – Smart Shopping & Expense Tracker

[![PHP](https://img.shields.io/badge/PHP-7.4+-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)](https://mysql.com)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow.svg)](https://developer.mozilla.org)
[![Voice](https://img.shields.io/badge/Voice-SpeechRecognition-brightgreen.svg)](https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition)
[![Security](https://img.shields.io/badge/Security-Aware-red.svg)](https://owasp.org)

**Bazar Hisab** is a full-stack MVC web application built from scratch using pure PHP, MySQL, AJAX, and Vanilla JavaScript. It is designed to help Bangladeshi families manage shopping lists, track monthly expenses, and reduce food waste—with a unique **Bangla/Banglish Voice Command** feature that sets it apart from typical expense trackers.

🔊 *"Ami 2 kg aloo, 1 dozen dim, ar 2 litre tel kinbo"* – Just speak, and it's added!

---

## ✨ Key Features

- **🎤 Intelligent Voice Command** – Uses Web Speech API with a custom Bangla/Banglish parser to extract item names and quantities from unstructured speech.
- **📊 Smart Expense Tracking** – Automatically logs expenses when items are marked as "Bought". View category-wise summaries and monthly trends.
- **📄 One-Click PDF/Print Reports** – Generate professional, print-ready expense reports directly from the browser using CSS print media queries.
- **⏳ Expiry Alerts** – Proactive 3-day expiry warnings to minimize household food waste.
- **🔒 Security-First Design** – Implements bcrypt hashing, Prepared Statements (SQL Injection prevention), and XSS protection via `htmlspecialchars()`.
- **⚡ Real-Time AJAX** – CRUD operations (Add, Edit, Delete, Buy) without page reloads, providing a seamless Single-Page-Application-like experience.

---

## 🧰 Technologies Used

| Category | Technologies |
| :--- | :--- |
| **Backend** | Pure PHP 7.4+, MySQLi (Prepared Statements) |
| **Frontend** | HTML5, CSS3, Vanilla JavaScript, AJAX (XMLHttpRequest), JSON |
| **Architecture** | Custom MVC (Model-View-Controller) |
| **Database** | MySQL (phpMyAdmin) with Foreign Key constraints |
| **APIs** | Web Speech API (Voice Recognition), JSON |
| **Security** | bcrypt, Session Management, SQL Injection Prevention, XSS Protection |

---

## 📁 Project Structure (MVC)

```text
bazar-hisab/
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       ├── script.js      # CRUD AJAX
│       ├── voice.js       # Speech Recognition
│       └── lang.js        # Language Switcher (if any)
├── config/
│   ├── database.php       # DB Connection
│   └── lang.php           # Translation Array (Bangla/English)
├── controllers/
│   ├── AuthController.php
│   ├── DashboardController.php
│   ├── ListController.php
│   ├── ExpenseController.php
│   ├── LanguageController.php
│   └── VoiceController.php # Bangla/Banglish parser
├── models/
│   ├── UserModel.php
│   ├── ListModel.php
│   └── ExpenseModel.php
├── views/
│   ├── auth/              # Login / Register
│   ├── partials/          # Header / Footer
│   ├── dashboard.php
│   ├── list.php
│   └── expenses.php
├── index.php              # Main Router
└── .htaccess              # URL Rewriting


## 🗄️ Database Tables (SQL Schema)

```sql
CREATE TABLE users (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE shopping_list (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    item_name VARCHAR(100) NOT NULL,
    quantity VARCHAR(50),
    category VARCHAR(50),
    status ENUM('pending', 'bought') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE expenses (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    item_id INT(11) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    shop_name VARCHAR(100),
    expiry_date DATE,
    bought_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES shopping_list(id) ON DELETE CASCADE
);

## 📬 Let's Connect

Found this interesting? I'd love to hear your feedback or discuss potential collaborations.  
Feel free to reach out!
[LinkedIn](https://www.linkedin.com/in/udaydey/)

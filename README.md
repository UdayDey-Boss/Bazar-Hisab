# 🛒 Bazar Hisab - Smart Shopping & Expense Tracker

[![PHP](https://img.shields.io/badge/PHP-7.4+-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)](https://mysql.com)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow.svg)](https://developer.mozilla.org)
[![Voice](https://img.shields.io/badge/Voice-SpeechRecognition-brightgreen.svg)](https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition)

**Bazar Hisab** is a fully functional MVC web application built with pure PHP, MySQL, AJAX, and Vanilla JavaScript. It is designed specifically for Bangladeshi families to manage shopping lists, track monthly expenses, receive expiry alerts, and **add items to the list using Bangla voice commands**—a unique feature not found in any standard expense tracker.

🔊 *"Ami Alu, Dim, Tel ar Chal kinbo!"* – Just speak, and it adds to your list!

---

## ✨ Unique Features (Why this project stands out in 2026)

- **🎤 Bangla Voice Recognition**: Integrated Google's Web Speech API to allow users to dictate their shopping list in their native language.
- **🌐 Multi-Language Support**: Full Bangla and English translation system built using PHP arrays and Cookies (no external libraries).
- **⚡ Real-Time AJAX**: Add, delete, and buy items instantly without refreshing the page.
- **📊 Automated Expense Tracking**: When an item is marked as "Bought", the expense is automatically logged into the database.
- **⏳ Expiry Warning System**: Users receive alerts when items are about to expire, helping reduce food waste.
- **🔒 Secure Authentication**: Password hashing (`password_hash`), Session management, and "Remember Me" (Cookies).

---

## 🧰 Technologies Used

- **Backend**: PHP (Native), MySQLi
- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Architecture**: Custom MVC (Model-View-Controller)
- **Database**: MySQL (phpMyAdmin)
- **APIs**: Web Speech API (Voice Recognition), XMLHttpRequest (AJAX), JSON

---

## 📁 Project Structure

```text
bazar-hisab/
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       ├── script.js      (CRUD AJAX)
│       ├── voice.js       (Speech Recognition)
│       └── lang.js        (Language Switcher)
├── config/
│   ├── database.php       (DB Connection)
│   └── lang.php           (Translation Array)
├── controllers/
│   ├── AuthController.php
│   ├── DashboardController.php
│   ├── ListController.php
│   ├── ExpenseController.php
│   ├── LanguageController.php
│   └── VoiceController.php (Parses spoken text)
├── models/
│   ├── UserModel.php
│   ├── ListModel.php
│   └── ExpenseModel.php
├── views/
│   ├── auth/              (Login/Register)
│   ├── partials/          (Header)
│   ├── dashboard.php
│   ├── list.php
│   └── expenses.php
├── index.php              (Main Router)
└── .htaccess              (URL Rewriting)

## 📬 Let's Connect

Found this interesting? I'd love to hear your feedback or discuss potential collaborations.  
Feel free to reach out!
[LinkedIn](https://www.linkedin.com/in/udaydey/)

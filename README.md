# Project Name

    Oceans Echo

## About

> This project is a web application designed to educate users about marine conservation through interactive quizzes and resources. It features a user-friendly interface, dynamic content, quizzes, and a possibility to donate to marine life through external websites.

---

## Table of Contents

1. [Features](#features)
2. [Technologies Used](#technologies-used)
3. [Setup Instructions](#setup-instructions)
4. [Configuration](#configuration)
5. [Running the Project](#running-the-project)

---

## Features

-   **Interactive Quizzes**: Users can take quizzes to test their knowledge about marine life and conservation.
-   **Responsive Design**: The application is fully responsive and works seamlessly on desktop, tablet, and mobile devices.
-   **Dynamic Content**: Content is fetched dynamically from external APIs or a database.
-   **User-Friendly Interface**: Clean and intuitive UI/UX design for easy navigation.
-   **Educational Resources**: Access to articles, videos, and other resources about marine conservation.

---

## Technologies Used

-   **Frontend**: HTML, CSS, Tailwind CSS, JavaScript
-   **Backend**: Laravel, PHP
-   **Database**: MySQL
-   **Version Control**: Git, GitHub
-   **Other Tools**: Composer, npm

---

## Setup Instructions

Follow these steps to set up the project locally on your machine.

### Prerequisites

-   [PHP](https://www.php.net/downloads) (version 8.0 or higher)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/) (version 16 or higher)
-   [MySQL](https://dev.mysql.com/downloads/) or any other database of your choice
-   [Git](https://git-scm.com/)

### Running the Project

You need to run:

''npm install''

this will download the node modules for you

```bash
git clone https://github.com/osh-een/laravelblog.git
cd laravelblog

## Before starting <br>
Create a database <br>
```

mysql -u root -p
CREATE DATABASE laravelblog;
exit;

```

Setup your database credentials in the .env file <br>
```

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}

```

Migrate the tables
```

php artisan key:generate

```
php artisan migrate
```

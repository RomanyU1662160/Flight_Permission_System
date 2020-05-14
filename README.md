---
typora-root-url: public\assets
---

<p align="center"><img src="./public/assets/logo.png" width="400" height="300"></p>

# About

The flight permission system is an online to automate and facilitate the process of requesting and issuing flight permissions is discussed. Due to my previous experience work at the Egyptian Civil Aviation Authority, I am fully aware that there is a desperate need for such a system as they are fully relying on paperwork. Therefore, the stakeholder of the system is the Egyptian Civil Aviation Authority. I have benefited from my previous working experience with them to create a selected group to define the system requirements and contribute to the system testing.

## **Prerequisites**

The following dependences must be installed on your local development environment to run the application.

1.  Composer
2.  PHP 7.3
3.  Node.js

## **Installation**

The following step by step series will help you to install the dependencies and get a development

environment running.

1. **Clone the repository to your local machine.**

    ```php
    git clone  https://github.com/RomanyU1662160/Flight_Permission_System.git
    ```

2. **In your command run the following commands** _make sure you are in the reposiotry direcotry_

```php+HTML
composer install
```

```
php artisan key:generate
```

```javascript
npm install
```

3. **Rename the .env_example file in your root folder to .env and add your DB name and credentials**

    ```php+HTML
    DB_DATABASE= your database name
    DB_USERNAME= DB  username
    DB_PASSWORD= DB  password
    ```

4) **You <u>Must</u> Add the Algolia API credentials to get the filter searching working**

    ```php
    ALGOLIA_APP_ID=  Your Algolia app id
    ALGOLIA_SECRET=  Your Algolia  admin secret key
    ```

```php
MIX_ALGOLIA_APP_ID= Your Algolia app id
MIX_ALGOLIA_SEARCH= Your Algolia  search only secret key
```

5. **Seeding the DB**

```php
php artisan migrate --seed
```

## System Functionality

## 1- CRUD functions

## 2- Authentication

-   Login/Register System
-   Guests are authenticated to access the home page only.

## 3- Authorization

-   Only Admins are authorized to access the Admin dashboard.
-   Logged user authorized to update his own details only, not other users’ details.

## 4 -Search

-   **Filter Searching :** Search for anything in the home page using Algolia.
-   **Specific Searching** : Search for specific Projects ,Teams or User.

## 5- Accessibility

-   HTML attributes

*   Validation

    All forms in the application are validated and a validation errors are displayed in a red color.

*   Responsive working on mobiles

    The application has been tested on mobiles using the Chrome dev tools. Using the Bootstrap library makes the application responsive on various screen sizes.

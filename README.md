# Simple Web Development Environment

A beginner-friendly web development environment that helps you build websites using HTML, CSS, PHP, and MySQL. This project uses Docker to create a consistent development environment that works the same way on any computer.

## What's Included?

- **Web Server**: Apache to serve your web pages
- **Database**: MySQL to store your data
- **PHP**: To make your pages dynamic
- **Clean URLs**: No `.html` or `.php` in your website addresses
- **Modern Structure**: Industry-standard file organization

## Understanding Web Technologies

### Frontend vs Backend
The web is divided into two main parts:

- **Frontend** (What users see):
  - HTML: The structure of your pages (like a skeleton)
  - CSS: The styling and design (like clothing and makeup)
  - JavaScript: Interactive features (like movement and behavior)

- **Backend** (Behind the scenes):
  - PHP: Processes data and generates pages
  - MySQL: Stores and manages data
  - Apache: Serves your website to visitors

### Technologies Explained

#### HTML (HyperText Markup Language)
- The basic building block of web pages
- Creates the structure of your content
- Example:
  ```html
  <h1>This is a heading</h1>
  <p>This is a paragraph.</p>
  ```

#### CSS (Cascading Style Sheets)
- Makes your pages look beautiful
- Controls colors, layout, spacing, and more
- Example:
  ```css
  h1 {
      color: blue;
      font-size: 24px;
  }
  ```

#### PHP (PHP Hypertext Preprocessor)
- Makes your pages dynamic
- Processes forms and user input
- Connects to databases
- Example:
  ```php
  <?php
  $name = "John";
  echo "Hello, " . $name;
  ?>
  ```

#### MySQL (Database)
- Stores and organizes data
- Like a giant spreadsheet
- Optional: You can build a site without it
- Example use: storing user accounts, blog posts, or product information

### Using This Project Without a Database

If you don't need a database, you can:

1. Remove the database service from `docker-compose.yml`:
   ```yaml
   services:
     webserver:
       build: 
         context: .
         dockerfile: Dockerfile
       ports:
         - "80:80"
       volumes:
         - ./www:/var/www/html:delegated
   ```

2. Skip any PHP files that connect to the database
3. Focus on HTML, CSS, and basic PHP features

## Getting Started

### Prerequisites

1. Install [Docker Desktop](https://www.docker.com/products/docker-desktop/)
2. That's it! Everything else is included.

### Starting the Project

1. Open your terminal/command prompt
2. Navigate to the project folder
3. Run this command:
   ```bash
   docker-compose up -d
   ```
4. Open your browser and visit: http://localhost

## Project Structure 📁

```
www/
├── public/              # Your website files go here
│   ├── assets/         # Static files
│   │   ├── css/       # CSS stylesheets
│   │   ├── js/        # JavaScript files
│   │   └── images/    # Images
│   ├── index.html     # Homepage
│   ├── about.html     # About page
│   ├── contact.php   # Contact page with an example form
│   └── example.php    # Example PHP page
└── src/               # PHP code (when you're ready)
    ├── config/        # Settings
    ├── includes/      # Reusable PHP code
    └── templates/     # Page templates
```

### Understanding the Structure

- **public**: Everything in this folder is accessible on your website
  - Put your HTML files here
  - CSS, JavaScript, and images go in the `assets` folder
  - This keeps your website organized

- **src**: Contains PHP files (for when you're ready to add dynamic features)
  - These files are private and secure
  - Visitors can't access this folder

## Creating Pages

### HTML Pages
1. Create a new `.html` file in the `public` folder
2. Link to it without the `.html` extension
   - File: `public/about.html`
   - Link: `<a href="/about">About</a>`

### PHP Pages (When You're Ready)
1. Create a new `.php` file in the `public` folder
2. Use this template to start:
   ```php
   <?php
   require_once dirname(__DIR__) . '/src/config/config.php';
   require_once TEMPLATES_DIR . '/header.php';
   ?>

   <div class="container">
       <h1>Your Content Here</h1>
   </div>

   <?php require_once TEMPLATES_DIR . '/footer.php'; ?>
   ```

## Adding Features 🛠️

### CSS Styling
1. Add your CSS to `public/assets/css/style.css`
2. It's already linked in all pages

### JavaScript
1. Add your JavaScript to `public/assets/js/main.js`
2. It's already linked in all pages

### Images
1. Put your images in `public/assets/images/`
2. Use them like this: `<img src="/assets/images/your-image.jpg">`

### Database (MySQL)
- **Host**: localhost
- **Port**: 3306
- **Database**: myapp
- **Username**: user
- **Password**: userpassword

## Common Tasks 📋

### Starting the Server
```bash
docker-compose up -d
```

### Stopping the Server
```bash
docker-compose down
```

### Viewing Errors
```bash
docker-compose logs webserver
```

## Next Steps

1. **Start Simple**
   - Modify the HTML files in `public/`
   - Update the styles in `style.css`

2. **Add Features Gradually**
   - Try the `example.php` page to see PHP in action
   - Create your own PHP pages when ready

3. **Learn More**
   - HTML: [MDN Web Docs](https://developer.mozilla.org/en-US/docs/Learn/HTML)
   - CSS: [CSS Tutorial](https://www.w3schools.com/css/)
   - PHP: [PHP Tutorial](https://www.php.net/manual/en/tutorial.php)

## Need Help?

- Check the example files included in the project
- Each file includes comments explaining how it works
- The structure tries to follow best practices while keeping things simple

## Security Notes

- Never put sensitive information in the `public` folder
- Use the `src` folder for PHP files with sensitive data
- Careful with the database!

## Deployment Options

### Simple Hosting (Static Sites)
If you're only using HTML and CSS:
1. Use services like:
   - GitHub Pages (free)
   - Netlify (free tier available)
   - Vercel (free tier available)
2. Just upload your files from the `public` folder

### PHP Hosting
If you're using PHP:
1. Use web hosts that support PHP:
   - Shared hosting providers (Bluehost, HostGator)
   - Digital Ocean (more advanced)
2. Upload all files except `docker-compose.yml` and `Dockerfile`
3. Update database settings in `src/config/config.php`

### Things to Remember When Deploying
1. Never upload sensitive information
2. Update database credentials for production
3. Test thoroughly before going live
4. Consider using HTTPS (many hosts provide free SSL)
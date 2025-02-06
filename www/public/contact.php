<?php

$success = false;
$error = false;

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $message = $_POST['message'] ?? '';
    $success = true; // For demonstration
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $success ? 'Message Sent' : 'Contact' ?> - Web Development Starter Kit</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact" class="active">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php if ($success): ?>
            <!-- Success Message -->
            <section class="hero">
                <div class="container">
                    <h1>Thank You!</h1>
                    <p class="lead">Your message has been received.</p>
                </div>
            </section>

            <section class="container">
                <div style="text-align: center; padding: 2rem;">
                    <p>We'll get back to you as soon as possible.</p>
                    <a href="/" class="button primary" style="margin-top: 1rem;">Return Home</a>
                </div>
            </section>
        <?php else: ?>
            <!-- Contact Form -->
            <section class="hero">
                <div class="container">
                    <h1>Get in Touch</h1>
                    <p class="lead">This is an example of a contact page with a form. Notice this is built with PHP.</p>
                </div>
            </section>
            <section class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>Project Repository</h2>
                        <p>This project is open source! Visit the GitHub repository to:</p>
                        <ul class="contact-list">
                            <li>📦 Download the code. You've done this. </li>
                            <li>⭐ Give the project a star!</li>
                        </ul>
                        <a href="https://github.com/ebrown-32/Web-Dev-Starter-Kit" class="button primary" style="margin-top: 2rem;">
                            Visit GitHub Repository
                        </a>
                    </div>

                    <div class="contact-form">
                        <h2>Example Form</h2>
                        <form class="form" method="POST">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" class="form-control" required 
                                    placeholder="Questions, suggestions, or just want to say hi?"></textarea>
                            </div>

                            <button type="submit" class="button primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>

    <footer>
        <div class="container">
            <p>This resource was put together by <a href="https://elibrown.info/" class="footer-link">Eli Brown</a>. You don't have to keep this 😎</p>
            <p class="motto">Have fun!</p>
        </div>
    </footer>
    <script src="/assets/js/main.js"></script>
</body>
</html> 
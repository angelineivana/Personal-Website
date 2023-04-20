<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="styleContact.css">
</head>

<body>
    <button id="top">
        <a class="fa-solid fa-arrow-up" href="#"></a>
    </button>
    <section id="contactForm" class="contactForm">
        <div class="successMessage <?php echo isset($_GET['msg']) ? 'show' : '' ?>">
            <p>
                <?php echo isset($_GET['msg']) ? $_GET['msg'] : '' ?>
            </p>
        </div>

        <div class="contact-form-overlay"></div>
        <iframe id="background-frame"></iframe>
        <form action="submit.php" method="POST" onsubmit="return handleFormSubmit();">
            <div id="exit-button">x</div>

            <h1>Contact Me</h1>

            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Enter your name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required><br><br>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Enter the subject of your message"
                required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Enter your message" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
        <div class="successMessage <?php echo isset($_GET['msg']) ? 'show' : '' ?>">
            <p>
                <?php echo $_GET['msg']; ?>
            </p>
        </div>
    </section>
    <script>
        window.addEventListener('load', function () {
            document.body.style.opacity = 1;
        });
        document.addEventListener("DOMContentLoaded", function () {
            var prevPageUrl = document.referrer;
            document.getElementById("background-frame").src = prevPageUrl;
        });
        const exitButton = document.getElementById('exit-button');
        const contactForm = document.getElementById('contactForm');
        exitButton.addEventListener('click', () => {
            contactForm.style.display = 'none';
            window.location.replace('home.html');
        });          

        const form = document.querySelector('form');
        form.addEventListener('submit', (event) => {
            contactForm.style.display = 'none';
            window.location.replace(document.referrer);
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>Aetherix</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Add this line to link the script.js file -->
    <script src="script.js" defer></script>
    <script src="additional-script.js" defer></script>
    <script src="script2.js" defer></script>
</head>
<body>
    <div class="navbar-container">
        <div class="navbar">
            <div class="logo">Aetherix.</div>
                <div class="nav-links">
                    <a href="#about">About</a>
                    <a href="#products">Products</a>
                    <!-- <a href="#contact">Contact Us</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="typing-animation" id="companyName"></div>

    <div class="container">
        <!-- About Section -->
        <section id="about" data-text="About Us">
            <h4>About Aetherix.</h4>
            <p>Aetherix. was founded in January of 2024 by five college Sophomores. Our purpose has always been and will always be to offer high-quality software solutions and applications to our clients and customers for an affordable market price while ensuring complete transparency and exceptional attention to user privacy. User privacy is one thing we think about and care about along every step in the development process. Our services include desktop applications, websites, web apps, and UI UX designs. Reach out to us to get started on your path to a digital future.</p>
        </section>

        <!-- Founders Section -->
        <section id="founders" data-text="Founders">
            <h4>Founders</h4>
            <p>Meet the brains behind Aetherix.</p>
            <div class="card-container">
                <div class="card">
                    <img src="photos/akash.jpg" alt="Akash">
                    <h3>Akash</h3>
                    <p>Web Developer</p>
                </div>

                <div class="card">
                    <img src="photos/ashik.jpg" alt="Ashik">
                    <h3>Ashik</h3>
                    <p>UI/UX Designer</p>
                </div>
                
                <div class="card">
                    <img src="photos/siva.jpg" alt="Sivaperumal">
                    <h3>Sivaperumal</h3>
                    <p>Full Stack Developer</p>
                </div>

                <div class="card">
                    <img src="photos/praveen kumar.jpg" alt="Praveen">
                    <h3>Praveen</h3>
                    <p>Front-End Developer</p>
                </div>

                <div class="card">
                    <img src="photos/dinesh.jpg" alt="Dinesh">
                    <h3>Dinesh</h3>
                    <p>Full Stack Developer</p>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" data-text="Products">
            <h4>Products</h4>
            <p>Checkout some products developed by Aetherix.</p>
            <div class="card-container">
                <div class="card">
                    <h3>AURCM Attendance Website (CSE only)</h3>
                    <a href="https://attendance.autmdu.in/" target="_blank">Attendance Website</a>
                </div>

                <div class="card">
                    <h3>AURCM Materials & CGPA Website</h3>
                    <a href="https://materials.autmdu.in/" target="_blank">Materials & CGPA Website</a>
                </div>

                <div class="card clickable-card" id="product3" onclick="openPopup()">
                    <h3>Garments Software</h3>
                    <p>Click to view description</p>
                </div>
            </div>
        </section>
        <div class="popup" id="popupCard">
            <div class="popup-content">
            <span class="close" onclick="closePopup()" ontouchstart="closePopup()">&times;</span>
                <h2>Garments Software</h2>
                <p>We designed a .exe software for a garment production house which keeps track of the process involved in the production. It keeps track of the process completion and displays it to the head of the teams, helping in moving on to the next process. We have developed the software , keeping in our minds the simple user-experience, user privacy and security</p>
            </div>
        </div>

    </div>


<footer>
    <p>&copy; 2024 Aetherix.</p>
</footer>

</body>
</html>

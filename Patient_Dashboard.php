<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mental Health Resources</title>
    <link rel="icon" href="Img/fav.png" type="img/x-icon">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f7f6;
    color: #333;
    font-size: 16px;
    line-height: 1.6;
}

header {
    background-color: #4CAF50;
    padding: 20px 0;
    color: white;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

header h1 {
    font-size: 30px;
    font-weight: bold;
}

header nav ul {
    margin-left: 20px;
    list-style: none;
    display: flex;
}

header nav ul li {
    margin-left: 20px;
}

header nav ul li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    padding: 10px 15px;
    transition: background-color 0.3s ease;
}

header nav ul li a:hover {
    background-color: #45a049;
    border-radius: 5px;
}

header nav ul li a.active {
    background-color: #45a049;
    border-radius: 5px;
}

main {
    padding: 50px 0;
}

section {
    margin-bottom: 40px;
}

h2, h3 {
    text-align: center;
    margin-bottom: 20px;
}

p {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.container {
    width: 80%;
    margin: 0 auto;
}

.intro h2 {
    font-size: 30px;
    margin-bottom: 20px;
    text-align: center;
}

.intro p {
    font-size: 16px;
    line-height: 1.5;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.activities h3,
.resources h3,
.testimonials h3 {
    font-size: 26px;
    margin-bottom: 20px;
    text-align: center;
}

.activity-filters {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.filter-button {
    padding: 12px 24px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.filter-button:hover {
    background-color: #efea58;
    color: #000000;
}

.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.card {
    background-color: rgb(197, 214, 232);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.card h4 {
    font-size: 20px;
    margin-bottom: 10px;
}

.card p {
    font-size: 14px;
    margin-bottom: 20px;
}

.card button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.card button:hover {
    background-color: #39b23f;
}

.testimonial-container {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    scroll-snap-type: x mandatory;
    padding: 20px 0;
}


.resource-list ul {
    list-style: none;
}

.resource-list ul li {
    margin: 10px 0;
}

.resource-list ul li a {
    text-decoration: none;
    color: #4CAF50;
    font-size: 16px;
}

footer {
    background-color: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
}

footer p {
    font-size: 14px;
}

.testimonials {
    flex: 0 0 300px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    scroll-snap-align: center;    
}

.testimonial {
    margin-bottom: 20px;
}

.testimonial p {
    font-style: italic;
    color: #555;
}

.testimonial h4 {
    font-weight: bold;
    color: #4CAF50;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
}

.close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    float: right;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
}

/* Contact Section Styling */
.contact {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.contact h3 {
    font-size: 28px;
    margin-bottom: 15px; 
    text-align: center;
    font-weight: bold;
}

.contact form {
    gap: 10px;
    max-width: 600px;
    margin: 0 auto;
}

.contact label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
}

.contact input,
.contact textarea {
    padding: 10px; /* Reduced padding */
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

.contact input:focus,
.contact textarea:focus {
    border-color: #4CAF50;
    outline: none;
}

.contact button {
    padding: 12px;
    background-color: #4CAF50;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
    margin-top: 10px;
}

.contact button:hover {
    background-color: #45a049;
}

.contact textarea {
    resize: vertical;
    min-height: 100px;
}

#backToTop {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    display: none;
}

#backToTop:hover {
    background-color: #39b23f;
}

/* Media Queries for responsiveness */
@media (max-width: 768px) {
    .contact {
        padding: 20px;
    }

    .contact form {
        gap: 8px; /* Reduced gap on smaller screens */
    }

    .contact input,
    .contact textarea {
        padding: 12px; /* Slightly increased padding for better input size */
    }

    .contact button {
        padding: 10px; /* Adjust button padding */
    }
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Mental Health Support</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Activities</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="intro">
            <div class="container">
                <h2>Welcome to Mental Health Support</h2>
                <p>Here, we offer various activities and resources that can help improve your mental wellbeing. Explore the options below:</p>
            </div>
        </section>

        <section class="activities">
            <div class="container">
                <div class="activity-filters">
                    <a href="Book_Display.html">
                        <button class="filter-button">Read a Book</button>
                    </a>
                    
                    <a href="Course_page.html" rel="noopener noreferrer">
                        <button class="filter-button">Get a Course</button>
                    </a>
                    
                    <a href="Contract_therapist.html" rel="noopener noreferrer">
                        <button class="filter-button">Contact a Therapist</button>
                    </a>
                </div>
                <h3>Recommended Activities</h3>
                <div class="card-container">
                    <div class="card">
                        <h4>Mindfulness Meditation</h4>
                        <p>Take a few moments to practice mindfulness and meditation. Helps with stress and anxiety.</p>
                        <button onclick="openModal('Mindfulness Meditation')">Start Now</button>
                    </div>
                    <div class="card">
                        <h4>Breathing Exercises</h4>
                        <p>Learn deep breathing techniques to calm your mind and reduce stress.</p>
                        <button onclick="openModal('Breathing Exercises')">Start Now</button>
                    </div>
                    <div class="card">
                        <h4>Journaling</h4>
                        <p>Express your thoughts and emotions by journaling, which can promote mental clarity.</p>
                        <button onclick="openModal('Journaling')">Start Now</button>
                    </div>
                    <div class="card">
                        <h4>Positive Affirmations</h4>
                        <p>Use positive affirmations to shift your mindset and boost self-esteem.</p>
                        <button onclick="openModal('Positive Affirmations')">Start Now</button>
                    </div>
                </div>
            </div>
        </section>

<section id="testimonials">
            <div class="container">
                <h3>User Testimonials</h3>
                <div class="testimonial-container">
                    <div class="testimonial">
                        <h4>Jane D.</h4>
                        <p>"Practicing mindfulness has helped me reduce my stress levels and focus better at work."</p>
                    </div>
                    <div class="testimonial">
                        <h4>John M.</h4>
                        <p>"I feel more energized and positive after incorporating affirmations into my daily routine."</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="resources">
            <div class="container">
                <h3>Helpful Resources</h3>
                <div class="resource-list">
                    <ul>
                        <li><a href="#">Therapist Directory</a></li>
                        <li><a href="#">Online Therapy Platforms</a></li>
                        <li><a href="#">Self-Help Books</a></li>
                        <li><a href="#">Hotlines and Support Groups</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <h3>Contact Us</h3>
                <form>
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name"><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"><br><br>
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message"></textarea><br><br>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
    </main>
    
        <!-- Back-to-Top Button -->
        <button id="backToTop" onclick="scrollToTop()">&#8679;</button>

 <!-- Modal -->
 <div id="activityModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 id="modalTitle"></h2>
        <p>Learn more about this activity and start practicing it to improve your mental health.</p>
        <button>Start Now</button>
    </div>
</div>

<script>
    // Back-to-Top Button
    const backToTopButton = document.getElementById('backToTop');

    window.onscroll = function () {
        if (window.scrollY > 200) {
            backToTopButton.style.display = 'flex';
        } else {
            backToTopButton.style.display = 'none';
        }
    };

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Modal Logic
    function openModal(activity) {
        document.getElementById("modalTitle").innerText = activity;
        document.getElementById("activityModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("activityModal").style.display = "none";
    }
</script>
</body>
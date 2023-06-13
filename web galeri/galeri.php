<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak maka redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Galeri Seni</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <header>
        <h1 align="center">Galeri Seni</h1>
        <nav>
            <ul>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#comments">Comments</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="Biodata.html">Get to Know Us?</a></li>
                <li><a href="Page Upload file.php">Upload</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

    </header>
    <section id="gallery">
        <h2 align="center">Gallery</h2>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="Mona Lisa.webp" alt="Mona Lisa" />
                <h3>Mona Lisa</h3>
                <p>Artist: Leonardo da Vinci</p>
            </div>
            <div class="gallery-item">
                <img src="The Starry Night.webp" alt="The Starry Night" />
                <h3>The Starry Night</h3>
                <p>Artist: Vincent Van Gogh</p>
            </div>
            <div class="gallery-item">
                <img src="The Blue Rider.webp" alt="The Blue Rider" />
                <h3>The Blue Rider</h3>
                <p>Artist: Wassily Kandinsky</p>
            </div>
            <div class="gallery-item">
                <img src="Self-Portrait with Thorn Necklace and Hummingbird.jpg" alt="Self-Portrait with Thorn Necklace and Hummingbird" />
                <h3>Self-Portrait with Thorn Necklace and Hummingbird</h3>
                <p>Artist: Frida Kahlo</p>
            </div>
            <div class="gallery-item">
                <img src="The Scream.webp" alt="The Scream" />
                <h3>The Scream</h3>
                <p>Artist: Edvard Munch</p>
            </div>
            <div class="gallery-item">
                <img src="The Weeping Woman.jpg" alt="The Weeping Woman" />
                <h3>The Weeping Woman</h3>
                <p>Artist: Pablo Picasso</p>
            </div>
            <div class="gallery-item">
                <img src="The Girl With The Pearl Earring.jpg" alt="The Girl With The Pearl Earring" />
                <h3>The Girl With The Pearl Earring</h3>
                <p>Artist: Johannes Vermeer</p>
            </div>
            <div class="gallery-item">
                <img src="The last Supper.jpg" alt="The last Supper" />
                <h3>The last Supper</h3>
                <p>Artist: Leonardo da Vinci</p>
            </div>
            <div class="gallery-item">
                <img src="The School of Athens.jpg" alt="The School of Athens" />
                <h3>The School of Athens</h3>
                <p>Artist: Raphael</p>
            </div>
            <div class="gallery-item">
                <img src="The Night Watch.jpg" alt="The Night Watch" />
                <h3>The Night Watch</h3>
                <p>Artist: Rembrandt</p>
            </div>
            <div class="gallery-item">
                <img src="Café Terrace at Night.jpg" alt="Café Terrace at Night" />
                <h3>Café Terrace at Night</h3>
                <p>Artist: Vincent van Gogh</p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <section id="comments">
                <h4>Comments</h4>

                <div class="komentar">
                    <form>
                        <label for="name">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="name" name="name" required> <br>
                        <label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="email" id="email" name="email" required> <br>
                        <label for="comment">Comment:</label>
                        <textarea id="comment" name="comment" rows="4" required></textarea>
                        <button type="submit">Post Comment</button>
                    </form>
                    <br>
                    <div id="comment-list">
            </section>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section id="contact">
            <h2 align="center">Contact Us</h2>
            <div class="kontak">
                <div class="sosial-media">
                    <h3>Karenina Salale</h3>
                    <a href="https://instagram.com/chen.30?igshid=ZDdkNTZiNTM=" target="_blank">
                        <img src="instagram.png" alt="instagram" width="40" />
                    </a>
                    <a href="mailto:kareninasalale@gmail.com" target="_blank">
                        <img src="gmail.png" alt="gmail" width="40" />
                    </a>
                </div>
                <div class="sosial-media">
                    <h3>Natasha Najoan</h3>
                    <a href="https://www.instagram.com/natasha_najoan" target="_blank">
                        <img src="instagram.png" alt="google logo" width="40" />
                    </a>
                    <a href="mailto:natashanajoan@gmail.com" target="_blank">
                        <img src="gmail.png" alt="gmail" width="40" />
                    </a>
                </div>
                <div class="sosial-media">
                    <h3>Putri Sarah Ginting</h3>
                    <a href="https://www.instagram.com/sarginta/" target="_blank">
                        <img src="instagram.png" alt="instagram" width="40" />
                    </a>
                    <a href="mailto:putrisarahginting25@gmail.com" target="_blank">
                        <img src="gmail.png" alt="gmail" width="40" />
                    </a>
                </div>
                <div class="sosial-media">
                    <h3>Chelsea Petrus</h3>
                    <a href="https://www.instagram.com/chelseaapetrus" target="_blank">
                        <img src="instagram.png" alt="instagram" width="40" />
                    </a>
                    <a href="mailto:chelseapetrus22@gmail.com" target="_blank">
                        <img src="gmail.png" alt="gmail" width="40" />
                    </a>
        </section>
        <br>
        <br>
        <br>
        <br>

        <title>WhatsApp Floating</title>
        <style>
            .whatsapp-container {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 9999;
            }

            .whatsapp-container a {
                display: block;
                background-color: #25d366;
                color: #fff;
                font-size: 20px;
                font-weight: bold;
                text-align: center;
                padding: 10px;
                border-radius: 50%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
                transition: transform 0.2s ease-in-out;
            }

            .whatsapp-container a:hover {
                transform: scale(1.1);
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            }
        </style>

        <div class="whatsapp-container">
            <a href="https://wa.me/6289529420547" target="_blank">Chat via WhatsApp</a>
        </div>

        <footer>
            <p>&copy;Pengembangan Web Unsrat 2023</p>
        </footer>

</body>

</html>
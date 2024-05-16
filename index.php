<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudana Film</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
</head>
<style>
    :root{
    --text-color: #fff;
    --bg-color: #ff2400;
    --second-bg-color: #22282f;
    --main-color: #fff;
    --other-color: #c3cad5;

    --h1-font: 4.5rem;
    --h2-font: 2.9rem;
    --p-font: 1rem
}
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #141414;
    color: #black;
}

header {
    background-color: #000;
    padding: 15px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #e50914;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
}

.search-container {
    position: relative;
}

#searchInput {
    padding: 5px 10px 5px 30px;
    border: none;
    border-radius: 3px;
    font-size: 1rem;
    background-color: #333;
    color: #fff;
}

#searchIcon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #000;
    cursor: pointer;
}

/* .film-card {
    width: 300px;
    background-color: #222;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 20px;
    color: #fff;
} */

.film-card img {
    width: 100%;
    height: auto;
}

.film-info {
    padding: 15px;
}

.film-title {
    font-size: 1.2rem;
    margin-bottom: 8px;
}

.film-description {
    font-size: 0.9rem;
    color: #bbb;
    margin-bottom: 10px;
}

.film-meta {
    display: flex;
    justify-content: space-between;
    font-size: 0.8rem;
    color: #888;
}

#moviesContainer {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 80px; /* Adjusting for fixed header */
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: ##e50914;
    margin: 0px;
    padding: 0px;
}

.container1 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    position: relative;
    padding-top: 40px; /* Menambahkan jarak dari atas */
}



.card {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    margin: 15px;
    max-width: 300px;
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;
    top: -70px;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
}

.card-image img {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    width: 100%;
    height: auto;
}

.card-content {
    padding: 20px;
    text-align: center;
}

.card-content h3 {
    color: #333;
    font-size: 1.5em;
    margin: 15px 0 10px;
}

.card-content p {
    color: #777;
    font-size: 1em;
    margin: 0 0 20px;
}

.card-content button {
    background-color: #e50914;
    border: none;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
    font-size: 1em;
    padding: 10px 20px;
    transition: background-color 0.3s;
}

.card-content button:hover {
    background-color: #e64a19;
}
.a-btn{
    display: inline-block;
    padding: 11px 26px;
    background: transparent;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    transition: all .50s ease;
    text-decoration: none;
}
.a-btn:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: 0 0 20px var(--main-color);
    transform: scale(1.1);
}

.footer {
    flex-direction: column-reverse;
    color: #fff;
}
.footer p {
    text-align: center;
    margin-top: 2rem;
}
span{
    color: var(--main-color);
}
.Judul {
    font-size: 1.2rem;
    font-weight: bold;
    margin-left: 35px;
    color: #000;
    background: #fff;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); /* Bayangan dengan offset horizontal 2px, offset vertikal 2px, blur radius 5px, dan opasitas 20% */
    padding: 10px; /* Ruang di antara teks dan tepi kotak */
    display: inline-block;
    border-radius: 5px;
    position: relative;
    top: -70px;

/* gambar netflix */
.hero-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: left;
    padding: 20px;
}

.hero-content {
    max-width: 600px;
}

h1 {
    font-size: 3em;
    margin: 0 0 20px;
}

.buttons {
    margin: 20px 0;
}

.play-button,
.add-button {
    background-color: #e50914;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1em;
    margin-right: 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.play-button:hover,
.add-button:hover {
    background-color: #f40612;
}

.add-button {
    background-color: rgba(109, 109, 110, 0.7);
}

.add-button:hover {
    background-color: rgba(109, 109, 110, 1);
}

p {
    font-size: 1.2em;
    line-height: 1.5;
}
/* Mengatur ukuran gambar */
/* img {
    width: 1500px; /* Ubah sesuai kebutuhan */
    /* height: 600px; Biarkan tinggi otomatis menyesuaikan proporsi gambar */ */
  }  
</style>
</head>
<body>
    <br>
    <br>

</style>
<body>
    <header>
        <div class="container">
            <div class="logo">Sudana<span>Flix</span></div>
            <nav>
                <ul>
                    <li><a href="movies.php" class="a-btn">Movies</a></li>
                    <li><a href="mylist.php" class="a-btn">My List</a></li>
                </ul>
            </nav>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <i class="fas fa-search" id="searchIcon"></i>
            </div>
        </div>
    </header>
    <div class="hero-section">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>LIVING WITH LEOPARDS</h1>
                <div class="buttons">
                    <button class="play-button">▶ Putar</button>
                    <a href="mylist.php"class="a-btn">+ Daftar Saya</a>
                </div>
                <p>Kru film mengikuti dua anak macan tutul saat mereka melakukan perjalanan nan menakjubkan dari bayi hingga dewasa dalam film dokumenter alam dari dekat dan personal ini.</p>
            </div>
        </div>
        <img src="Harimau 1.png" alt="Leopard" class="hero-image">
    </div>
    <div class="Judul">Rekomendasi Film Minggu Ini</div>
    <div class="container1">
        <div class="card">
            <div class="card-image">
                <img src="https://amc-theatres-res.cloudinary.com/v1579117618/amc-cdn/production/2/movies/3500/3499/Poster/p_800x1200_Spider-Man_En_0802517.jpg" alt="Film 1">
            </div>
            
            <div class="card-content">
                <h3>Spider Man</h3>
                <p>Spider-Man: Franchise film populer tentang Peter Parker, seorang remaja yang mendapat kekuatan super setelah digigit laba-laba.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.coverwhiz.com/uploads/movies/jurassic-park.jpg" alt="Film 2">
            </div>
            <div class="card-content">
                <h3>Jurassic Park</h3>
                <p>Ceritanya berpusat di sekitar sebuah taman hiburan yang dibangun di sebuah pulau yang diisi dengan dinosaurus kloning.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://m.media-amazon.com/images/M/MV5BMmUyMTM0YmEtZDRiYy00NzVhLTgwMTctNmI1YjYxY2U2MDFmXkEyXkFqcGdeQXVyODY2MjUxMTM@._V1_FMjpg_UX1000_.jpg" alt="Film 3">
            </div>
            <div class="card-content">
                <h3>Avengers</h3>
                <p>Ini adalah film superhero epik yang menggabungkan aksi yang spektakuler dengan momen emosional yang mendalam.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://image.tmdb.org/t/p/original/qtuV5LLPX6QirHhWGV69W8GE1ui.jpg" alt="Film 4">
            </div>
            <div class="card-content">
                <h3>Queen Of Tears</h3>
                <p>drama yang menggambarkan perjalanan emosional seorang wanita yang menghadapi berbagai tantangan dalam hidupnya.</p>
                <button>Read More</button>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright @ 2024 by Sudanawijaya | ALL Rights Reserved.</p>
        </div>
    </footer>
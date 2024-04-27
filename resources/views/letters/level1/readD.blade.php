<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/read.css') }}">
    <script src="https://kit.fontawesome.com/564566b361.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="Header">
        <a id="kembaliButton" href="bacaC.html">
            <img src="/assets/Vector.png" width="17.86" height="28.31" style="position: relative; bottom: 3px;" alt="Kembali ke Halaman Sebelumnya">
        </a>
        <img src="/assets/Rectangle 51.png" width="280" height="22">
        </div>    

        <div class="Text">
            <p>Membaca Alphabet</p>
        </div>

        <div class="Objek">
            <button class="card" data-letter="A" onclick="playAudio('/assets/d.mp3')"> 
            <img src="/assets/Group 12.png" width="240" height="250" alt="Huruf A">
            </button>
        </div>

        <div class="search-box">
            <form>
                <button id="record-button" type="button"><i id="mic-icon" class="fas fa-microphone"></i></button>
                <input type="" placeholder="huruf apa itu?......">
            </form>
        </div>
        
        <div class="Next">
            <button><a href="/level1/selamat">Lanjut!!!</a></button>
        </div>
    </div>
        <script src="{{ asset('js/read.js') }}"></script>
</body>
</html>

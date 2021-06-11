<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="halamanpiano.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Piano</title>
</head>

<body class="bground">
    <a href="index.php" class="tombol-aktif animasi biru">Home</a>
    <h2  style="font-family: 'Pacifico', cursive; text-align: center; color: black; font-size: 50px; margin-top: 5px;"><b>Piano</b></h2><center>
    <div class="piano kotak dshadow">
        <div data-note="C" class="key white"></div>
        <div data-note="Db" class="key black"></div>
        <div data-note="D" class="key white"></div>
        <div data-note="Eb" class="key black"></div>
        <div data-note="E" class="key white"></div>
        <div data-note="F" class="key white"></div>
        <div data-note="Gb" class="key black"></div>
        <div data-note="G" class="key white"></div>
        <div data-note="Ab" class="key black"></div>
        <div data-note="A" class="key white"></div>
        <div data-note="Bb" class="key black"></div>
        <div data-note="B" class="key white"></div>
        <div data-note="C'" class="key white"></div>
        <div data-note="Db'" class="key black"></div>
        <div data-note="D'" class="key white"></div>
        <div data-note="Eb'" class="key black"></div>
        <div data-note="E'" class="key white"></div>
    </div>
    <audio id="C" src="notes/C4.mp3"></audio>
    <audio id="Db" src="notes/Db4.mp3"></audio>
    <audio id="D" src="notes/D4.mp3"></audio>
    <audio id="Eb" src="notes/Eb4.mp3"></audio>
    <audio id="E" src="notes/E4.mp3"></audio>
    <audio id="F" src="notes/F4.mp3"></audio>
    <audio id="Gb" src="notes/Gb4.mp3"></audio>
    <audio id="G" src="notes/G4.mp3"></audio>
    <audio id="Ab" src="notes/Ab4.mp3"></audio>
    <audio id="A" src="notes/A4.mp3"></audio>
    <audio id="Bb" src="notes/Bb4.mp3"></audio>
    <audio id="B" src="notes/B4.mp3"></audio>
    <audio id="C'" src="notes/C5.mp3"></audio>
    <audio id="Db'" src="notes/Db5.mp3"></audio>
    <audio id="D'" src="notes/D5.mp3"></audio>
    <audio id="Eb'" src="notes/Eb5.mp3"></audio>
    <audio id="E'" src="notes/E5.mp3"></audio>
    
    <script src="piano.js" defer></script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 21+ Salman Alfarizi</title>
    <link rel="icon" type="image/png" href="7.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Warna Tema Cowok: Dark Blue, Silver/Grey, Electric Blue, Black */
            --primary-color: #0d47a1;
            /* Dark Blue */
            --secondary-color: #cfd8dc;
            /* Light Grey/Silver */
            --accent-color: #00bcd4;
            /* Electric Blue/Cyan - Warna neon utama */
            --background-start: #212529;
            /* Dark Grey/Black */
            --background-end: #000000;
            /* Pure Black */
            --secondary-balloon: #3680ae61;
            /* Gelap Kebiruan untuk Balon */
            --flame-color: #ff9e00;
            /* Warna Api */
        }

        body {
            background: linear-gradient(135deg, var(--background-start) 0%, var(--background-end) 100%);
            font-family: 'Poppins', sans-serif;
            color: var(--secondary-color);
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 20px 0;
        }

        .birthday-card {
            background-color: rgba(33, 37, 41, 0.95);
            border-radius: 20px;
            border: 2px solid var(--accent-color);
            box-shadow: 0 0 50px rgba(0, 188, 212, 0.5), 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 40px;
            margin: 20px auto;
            position: relative;
            z-index: 150;
            max-width: 90%;
        }

        .birthday-title {
            color: var(--accent-color);
            font-weight: 900;
            text-shadow: 0 0 5px var(--accent-color), 0 0 10px var(--primary-color);
            animation: pulse 1.5s infinite alternate;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                text-shadow: 0 0 5px var(--accent-color);
            }

            100% {
                transform: scale(1.05);
                text-shadow: 0 0 10px var(--accent-color);
            }
        }

        /* Gaya Kue */
        .cake {
            width: 220px;
            height: 180px;
            margin: 20px auto;
            position: relative;
        }

        .layer-1,
        .layer-2,
        .layer-3 {
            background: #444;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 10px 10px 5px 5px;
        }

        .layer-1 {
            width: 180px;
            height: 40px;
            bottom: 0;
        }

        .layer-2 {
            width: 140px;
            height: 40px;
            bottom: 40px;
        }

        .layer-3 {
            width: 100px;
            height: 40px;
            bottom: 80px;
        }

        .frosting {
            position: absolute;
            width: 100%;
            height: 10px;
            background: transparent;
            top: -2px;
            border-radius: 5px;
            box-shadow: 0 0 5px var(--accent-color), 0 0 10px var(--accent-color);
        }

        .candle {
            width: 6px;
            height: 30px;
            background: #f7f7f7;
            position: absolute;
            bottom: 120px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 3px;
            z-index: 10;
        }

        .flame {
            width: 8px;
            height: 15px;
            background: linear-gradient(to top, var(--flame-color), #ffd166);
            border-radius: 50% 50% 20% 20%;
            position: absolute;
            bottom: 150px;
            left: 50%;
            transform: translateX(-50%);
            animation: flicker-new 0.3s infinite alternate;
            box-shadow: 0 0 5px var(--flame-color), 0 0 15px rgba(255, 158, 0, 0.8);
            z-index: 11;
        }

        @keyframes flicker-new {
            0% {
                transform: scale(1) translateX(-50%) rotate(0deg);
                box-shadow: 0 0 3px var(--flame-color), 0 0 6px rgba(255, 158, 0, 0.4);
            }

            100% {
                transform: scale(1.05) translateX(-50%) rotate(0deg);
                box-shadow: 0 0 6px var(--flame-color), 0 0 18px rgba(255, 158, 0, 0.9);
            }
        }

        /* Foto Bertaburan */
        .photo {
            width: 100px;
            height: 100px;
            /* DIUBAH MENJADI LINGKARAN */
            border-radius: 50%;
            /* ----------------------------- */
            object-fit: cover;
            border: 4px solid var(--accent-color);
            box-shadow: 0 0 15px rgba(0, 188, 212, 0.5);
            position: absolute;
            z-index: 50;
            transition: transform 0.3s, box-shadow 0.3s;
            filter: grayscale(20%);
            pointer-events: none;
        }

        .photo:hover {
            transform: scale(1.2) rotate(3deg);
            box-shadow: 0 0 30px var(--accent-color);
            filter: grayscale(0%);
            pointer-events: auto;
        }

        @keyframes float1 {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -50px) rotate(5deg);
            }

            66% {
                transform: translate(-20px, 20px) rotate(-3deg);
            }
        }

        @keyframes float2 {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(-40px, -30px) rotate(-5deg);
            }

            66% {
                transform: translate(10px, 40px) rotate(3deg);
            }
        }

        @keyframes float3 {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(20px, 60px) rotate(7deg);
            }

            66% {
                transform: translate(-30px, -20px) rotate(-7deg);
            }
        }

        .message {
            background-color: #343a40;
            border: 1px solid var(--accent-color);
            padding: 15px;
            margin: 20px 0 10px;
            border-radius: 8px;
            color: var(--secondary-color);
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center !important;
        }

        .btn-birthday {
            background-color: var(--accent-color);
            border: none;
            color: var(--background-end);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 700;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 188, 212, 0.5);
            font-size: 1.1rem;
        }

        .btn-birthday:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 7px 18px rgba(0, 188, 212, 0.7);
        }

        /* Balon */
        .balloon {
            position: absolute;
            width: 80px;
            height: 100px;
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            opacity: 0.8;
            z-index: 1;
            transform: rotate(0deg);
            animation: float-up 15s infinite linear;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }

        .balloon::after {
            content: '';
            position: absolute;
            width: 1px;
            height: 20px;
            background: var(--secondary-color);
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
        }

        @keyframes float-up {
            0% {
                transform: translateY(0);
                opacity: 0.8;
            }

            50% {
                transform: translateY(-30px);
                opacity: 0.9;
            }

            100% {
                transform: translateY(0);
                opacity: 0.8;
            }
        }

        /* Confetti */
        .confetti {
            position: fixed;
            width: 8px;
            height: 8px;
            background-color: var(--accent-color);
            opacity: 0;
            z-index: 999;
            animation: fall-loop 10s linear infinite;
        }

        .confetti.square {
            border-radius: 0;
        }

        .confetti.star {
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            width: 15px;
            height: 15px;
        }

        @keyframes fall-loop {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translateY(100vh) rotate(720deg);
                opacity: 0.5;
            }
        }

        /* Keyframe untuk ledakan tombol */
        @keyframes fall {
            0% {
                transform: translate(0, 0) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translate(calc(var(--rand-x) * 1px),
                        calc(var(--rand-y) * 1px)) rotate(720deg);
                opacity: 0;
            }
        }

        /* -------------------------------------- */
        /* MEDIA QUERIES UNTUK RESPONSIVITAS HP */
        /* -------------------------------------- */

        /* Media Query untuk Tablet/Smartphone Besar (768px ke bawah) */
        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }

            .birthday-title {
                font-size: 1.8rem;
            }

            .cake {
                width: 180px;
                height: 150px;
            }

            .photo {
                width: 70px;
                height: 70px;
                display: none;
            }

            /* Tampilkan 3 foto pertama dan atur ulang posisi mereka */
            .photo:nth-child(1),
            .photo:nth-child(2),
            .photo:nth-child(3) {
                display: block;
                z-index: 10;
            }

            .photo:nth-child(1) {
                top: 5%;
                left: 10px !important;
            }

            .photo:nth-child(2) {
                top: 5%;
                right: 10px !important;
            }

            .photo:nth-child(3) {
                bottom: 5%;
                left: 10px !important;
            }


            .btn-birthday {
                font-size: 0.9rem;
                padding: 10px 15px;
            }

            .balloon {
                width: 50px;
                height: 65px;
            }
        }

        /* Media Query Khusus untuk Handphone Kecil (576px ke bawah) */
        @media (max-width: 576px) {
            .birthday-card {
                padding: 20px 15px;
                margin: 15px auto;
            }

            .birthday-title {
                font-size: 1.5rem !important;
            }

            .cake {
                width: 160px;
                height: 130px;
            }

            .message p {
                font-size: 0.8rem !important;
            }

            .btn-birthday {
                font-size: 0.85rem !important;
                padding: 8px 12px !important;
            }

            .photo {
                width: 60px;
                height: 60px;
            }

            .balloon {
                width: 40px;
                height: 55px;
                opacity: 0.5;
            }

            /* Sembunyikan lebih banyak balon di layar yang sangat kecil */
            .balloon:nth-child(n+5) {
                display: none !important;
            }

            /* Posisikan 3 foto yang terlihat di area yang paling aman di luar kartu */
            .photo:nth-child(1) {
                top: 5px !important;
                left: 5px !important;
            }

            .photo:nth-child(2) {
                top: 5px !important;
                right: 5px !important;
            }

            .photo:nth-child(3) {
                bottom: 5px !important;
                left: 5px !important;
            }
        }
    </style>
</head>

<body>
    <div id="photo-container"></div>

    <div id="confetti-container"></div>

    <div class="balloon balloon-1" style="background-color: var(--secondary-balloon); left: 10%; top: 10%; animation-delay: 0s;"></div>
    <div class="balloon balloon-3" style="background-color: var(--secondary-color); left: 5%; top: 30%; animation-delay: 6s;"></div>
    <div class="balloon balloon-5" style="background-color: var(--primary-color); left: 20%; top: 50%; animation-delay: 12s;"></div>
    <div class="balloon balloon-7" style="background-color: var(--secondary-balloon); left: 15%; top: 70%; animation-delay: 2s;"></div>
    <div class="balloon balloon-9" style="background-color: var(--primary-color); left: 90%; top: 80%; animation-delay: 14s;"></div>


    <div class="balloon balloon-2" style="background-color: var(--accent-color); left: 80%; top: 20%; animation-delay: 3s;"></div>
    <div class="balloon balloon-4" style="background-color: var(--secondary-color); left: 85%; top: 40%; animation-delay: 9s;"></div>
    <div class="balloon balloon-6" style="background-color: var(--accent-color); left: 75%; top: 60%; animation-delay: 15s;"></div>
    <div class="balloon balloon-8" style="background-color: var(--primary-color); left: 90%; top: 80%; animation-delay: 5s;"></div>
    <div class="balloon balloon-10" style="background-color: var(--primary-color); left: 20%; top: 50%; animation-delay: 7s;"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="birthday-card text-center">
                    <h1 class="birthday-title display-4 mb-4">21+ BROOooo</h1>
                    <h2 class="mb-3" style="color: var(--secondary-color); font-weight: 400;">TAUN MUKAK MERANTO KE KAMBOJA!</h2>

                    <div class="cake mb-4">
                        <div class="cake-layer layer-1">
                            <div class="frosting"></div>
                        </div>
                        <div class="cake-layer layer-2">
                            <div class="frosting"></div>
                        </div>
                        <div class="cake-layer layer-3">
                            <div class="frosting"></div>
                        </div>
                        <div class="candle"></div>
                        <div class="flame"></div>
                    </div>

                    <div class="message text-center">
                        <p style="color: var(--accent-color); font-weight: 700; margin-bottom: 5px;">LEVEL UP!</p>
                        <p style="font-size: 0.95rem; margin-bottom: 10px; line-height: 1.3;">TAK PANDE BERKATA KATA!</p>
                        <p style="font-size: 0.95rem; margin-bottom: 10px; line-height: 1.3;">YANG PENTING INGAT TUHAN KOK UDAH JAYA LANGIT, LAUT DAN UDARA!!🥳🥳</p>
                        <p class="mb-0" style="font-weight: 700; color: #fff;"> Berkurang Jatah Hidup! 💥🥳</p>
                    </div>

                    <button class="btn btn-birthday mt-3" onclick="showMorePhotos()">
                        (KLIK!)
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Daftar URL foto (HARAP GANTI DENGAN URL FOTO ASLI ANDA)
        const photoUrls = [
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
        ];

        const confettiColors = ['#0d47a1', '#00bcd4', '#ffffff', '#ff9e00'];
        const confettiShapes = ['square', 'star'];

        // --- FUNGSI CONFETTI OTOMATIS BERULANG ---
        function createConfettiLoop() {
            const container = document.getElementById('confetti-container');
            const numConfetti = 50;

            for (let i = 0; i < numConfetti; i++) {
                const confetti = document.createElement('div');
                const shape = confettiShapes[Math.floor(Math.random() * confettiShapes.length)];

                confetti.className = `confetti ${shape}`;
                confetti.style.left = `${Math.random() * 100}%`;
                confetti.style.backgroundColor = confettiColors[Math.floor(Math.random() * confettiColors.length)];

                const duration = Math.random() * 8 + 5;
                const delay = Math.random() * -10;

                confetti.style.animationDuration = `${duration}s`;
                confetti.style.animationDelay = `${delay}s`;

                container.appendChild(confetti);
            }
        }
        // ------------------------------------------

        // Fungsi untuk membuat efek foto bertaburan di luar kartu
        function createFloatingPhotos(urls) {
            const container = document.getElementById('photo-container');
            const card = document.querySelector('.birthday-card');

            setTimeout(() => {
                const cardRect = card.getBoundingClientRect();
                const isMobile = window.innerWidth <= 768;
                const photoSize = isMobile ? (window.innerWidth <= 576 ? 60 : 70) : 100;

                urls.forEach((url, index) => {
                    const img = document.createElement('img');
                    img.src = url;
                    img.className = 'photo';
                    img.alt = `Photo ${index + 1}`;

                    let randomX, randomY;
                    let attempts = 0;

                    do {
                        randomX = Math.random() * (window.innerWidth - photoSize - 20) + 10;
                        randomY = Math.random() * (window.innerHeight - photoSize - 20) + 10;
                        attempts++;
                        if (attempts > 100) break;
                    } while (
                        randomX + photoSize > cardRect.left &&
                        randomX < cardRect.right &&
                        randomY + photoSize > cardRect.top &&
                        randomY < cardRect.bottom
                    );

                    if (isMobile && index > 2) {
                        img.style.display = 'none';
                    }

                    const randomRotation = Math.random() * 20 - 10;

                    img.style.left = `${randomX}px`;
                    img.style.top = `${randomY}px`;
                    img.style.transform = `rotate(${randomRotation}deg)`;

                    img.style.animation = `float${index % 3 + 1} 15s infinite ease-in-out`;

                    container.appendChild(img);
                });
            }, 50);
        }

        // Fungsi untuk menampilkan ledakan confetti saat tombol diklik
        function showMorePhotos() {
            const button = document.querySelector('.btn-birthday');
            if (button.disabled) return;

            // Buat ledakan confetti 
            for (let i = 0; i < 70; i++) {
                const confetti = document.createElement('div');
                const shape = confettiShapes[Math.floor(Math.random() * confettiShapes.length)];

                confetti.className = `confetti ${shape}`;

                const card = document.querySelector('.birthday-card');
                const cardRect = card.getBoundingClientRect();

                const randX = Math.random() * 500 - 250;
                const randY = Math.random() * 500 - 550;

                confetti.style.left = `${cardRect.left + cardRect.width / 2 + (Math.random() * 10 - 5)}px`;
                confetti.style.top = `${cardRect.top + cardRect.height / 2 + (Math.random() * 10 - 5)}px`;

                confetti.style.setProperty('--rand-x', randX);
                confetti.style.setProperty('--rand-y', randY);

                confetti.style.backgroundColor = confettiColors[Math.floor(Math.random() * confettiColors.length)];

                confetti.style.animation = `fall ${Math.random() * 2 + 3}s cubic-bezier(.2,.6,.8,.4) forwards`;
                confetti.style.animationDelay = `${Math.random() * 0.5}s`;
                document.body.appendChild(confetti);

                setTimeout(() => {
                    confetti.remove();
                }, 3500);
            }

            // Tambahkan foto baru
            const newPhotos = [
                '4.jpg',
                '5.jpg',
                '6.jpg'
            ];

            const container = document.getElementById('photo-container');
            const card = document.querySelector('.birthday-card');
            const cardRect = card.getBoundingClientRect();
            const isMobile = window.innerWidth <= 768;
            const photoSize = isMobile ? (window.innerWidth <= 576 ? 60 : 70) : 100;

            newPhotos.forEach((url, index) => {

                // Di ponsel, hanya 3 foto awal yang diperlihatkan.
                if (isMobile) {
                    return;
                }

                const img = document.createElement('img');
                img.src = url;
                img.className = 'photo';
                img.alt = `New Photo ${index + 1}`;

                let randomX, randomY;
                let attempts = 0;
                do {
                    randomX = Math.random() * (window.innerWidth - photoSize - 20) + 10;
                    randomY = Math.random() * (window.innerHeight - photoSize - 20) + 10;
                    attempts++;
                    if (attempts > 100) break;
                } while (
                    randomX + photoSize > cardRect.left &&
                    randomX < cardRect.right &&
                    randomY + photoSize > cardRect.top &&
                    randomY < cardRect.bottom
                );

                img.style.left = `${randomX}px`;
                img.style.top = `${randomY}px`;

                img.style.opacity = '0';
                img.style.transform = 'scale(0) rotate(0deg)';

                container.appendChild(img);

                setTimeout(() => {
                    img.style.transition = 'all 0.5s ease-out';
                    img.style.opacity = '1';
                    img.style.transform = `scale(1) rotate(${Math.random() * 20 - 10}deg)`;

                    setTimeout(() => {
                        img.style.animation = `float${(index + 1) % 3 + 1} 15s infinite ease-in-out`;
                    }, 500);
                }, 100 * index);
            });

            button.innerHTML = 'MOMEN TERTAMBAH! 🔥';
            button.disabled = true;

            alert('HAPPY BIRTHDAY! Semoga harimu gokil! 🎉');
        }

        // Jalankan saat halaman dimuat
        window.onload = function() {
            createFloatingPhotos(photoUrls);
            createConfettiLoop();
        };

        // Atur ulang posisi foto saat ukuran window berubah 
        window.onresize = function() {
            const photos = document.querySelectorAll('.photo');
            const card = document.querySelector('.birthday-card');
            const cardRect = card.getBoundingClientRect();
            const isMobile = window.innerWidth <= 768;
            const photoSize = isMobile ? (window.innerWidth <= 576 ? 60 : 70) : 100;

            photos.forEach((photo, index) => {
                let randomX, randomY;
                let attempts = 0;

                if (isMobile && index > 2) {
                    photo.style.display = 'none';
                    return;
                } else if (!isMobile) {
                    photo.style.display = 'block';
                }

                do {
                    randomX = Math.random() * (window.innerWidth - photoSize - 20) + 10;
                    randomY = Math.random() * (window.innerHeight - photoSize - 20) + 10;
                    attempts++;
                    if (attempts > 100) break;
                } while (
                    randomX + photoSize > cardRect.left &&
                    randomX < cardRect.right &&
                    randomY + photoSize > cardRect.top &&
                    randomY < cardRect.bottom
                );

                // Jika di mobile (index 0, 1, 2) biarkan CSS media query yang menentukan posisi finalnya.
                if (!isMobile) {
                    photo.style.left = `${randomX}px`;
                    photo.style.top = `${randomY}px`;
                }

            });
        };
    </script>
</body>

</html>
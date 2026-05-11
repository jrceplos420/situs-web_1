<?php
$wisata = [
    [
        "nama" => "Bukit Gedong",
        "deskripsi" => "Pantai Kuta Lombok terkenal dengan pasir putihnya yang unik seperti butiran merica dan air laut yang jernih berwarna biru. Tempat ini sangat cocok untuk bersantai, berenang, hingga menikmati sunset yang indah. Selain itu, kawasan ini juga sudah dilengkapi berbagai fasilitas wisata seperti penginapan, restoran, dan area kuliner khas Lombok.",
        "gambar" => "https://source.unsplash.com/400x250/?beach"
    ],
    [
        "nama" => "Bukit Anak Dara",
        "deskripsi" => "Gili Trawangan adalah pulau kecil yang menjadi destinasi favorit wisatawan lokal maupun mancanegara. Keindahan bawah lautnya sangat memukau dengan terumbu karang dan ikan berwarna-warni. Aktivitas populer di sini meliputi snorkeling, diving, bersepeda mengelilingi pulau, serta menikmati suasana malam yang hidup dengan berbagai kafe dan hiburan.",
        "gambar" => "https://source.unsplash.com/400x250/?island"
    ],

    // Fokus Gunung Rinjani (ditambah beberapa variasi)
    [
        "nama" => "Gunung Rinjani",
        "deskripsi" => "Gunung Rinjani merupakan gunung tertinggi kedua di Indonesia dengan ketinggian mencapai 3.726 mdpl. Gunung ini menawarkan pengalaman pendakian yang menantang dengan panorama luar biasa, mulai dari hutan tropis, padang savana, hingga pemandangan Danau Segara Anak di kawahnya. Rinjani juga memiliki nilai spiritual bagi masyarakat setempat.",
        "gambar" => "https://source.unsplash.com/400x250/?mountain"
    ],
    [
        "nama" => "Danau Segara Anak",
        "deskripsi" => "Danau Segara Anak terletak di dalam kaldera Gunung Rinjani dan menjadi daya tarik utama para pendaki. Airnya yang berwarna biru kehijauan memberikan pemandangan yang sangat menenangkan. Selain itu, terdapat sumber air panas alami di sekitar danau yang sering dimanfaatkan untuk relaksasi setelah perjalanan panjang.",
        "gambar" => "https://source.unsplash.com/400x250/?lake,mountain"
    ],
    [
        "nama" => "Puncak Rinjani",
        "deskripsi" => "Puncak Gunung Rinjani adalah tujuan utama para pendaki yang ingin menikmati sunrise terbaik di Indonesia. Dari puncak ini, pengunjung dapat melihat panorama Pulau Lombok, Bali, hingga Sumbawa. Perjalanan menuju puncak membutuhkan stamina dan persiapan matang, namun keindahan yang ditawarkan sangat sepadan.",
        "gambar" => "https://source.unsplash.com/400x250/?mountain,peak"
    ],
    [
        "nama" => "Bukit Pergasingan",
        "deskripsi" => "Bukit Pergasingan adalah alternatif wisata bagi yang ingin menikmati keindahan Rinjani tanpa harus mendaki gunung tinggi. Dari atas bukit, pengunjung dapat melihat hamparan sawah berwarna-warni dan latar belakang Gunung Rinjani yang megah. Tempat ini juga populer untuk camping dan fotografi.",
        "gambar" => "https://source.unsplash.com/400x250/?hill,landscape"
    ],
    [
        "nama" => "Air Terjun Tiu Kelep",
        "deskripsi" => "Air Terjun Tiu Kelep berada di kawasan kaki Gunung Rinjani dan terkenal dengan aliran airnya yang deras serta suasana alam yang masih sangat asri. Untuk mencapai lokasi ini, pengunjung harus berjalan kaki melewati hutan tropis dan sungai kecil, memberikan pengalaman petualangan yang seru.",
        "gambar" => "https://source.unsplash.com/400x250/?waterfall"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Wisata Lombok</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #e0f7ff;
            color: #033e5b;
        }

        header {
            background: #b3ecff;
            text-align: center;
            padding: 30px;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 30px;
        }

        .card {
            background: #ffffff;
            width: 300px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card h2 {
            margin: 10px;
            color: #0077b6;
        }

        .card p {
            margin: 10px;
            font-size: 14px;
            text-align: justify;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #b3ecff;
        }
    </style>
</head>
<body>

<header>
    <h1>Wisata Lombok</h1>
    <p>Eksplorasi keindahan alam Lombok & Gunung Rinjani</p>
</header>

<div class="container">
    <?php foreach ($wisata as $item): ?>
        <div class="card">
            <img src="<?= htmlspecialchars($item['gambar']); ?>" alt="<?= htmlspecialchars($item['nama']); ?>">
            <h2><?= htmlspecialchars($item['nama']); ?></h2>
            <p><?= htmlspecialchars($item['deskripsi']); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<footer>
    <p>© 2026 Wisata Lombok</p>
</footer>

</body>
</html>
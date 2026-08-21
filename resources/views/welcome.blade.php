<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AutoPrime Sales - Temukan kendaraan impian dengan penawaran terbaik.">
    <title>AutoPrime Sales — Kendaraan Impian Anda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    <header class="site-header" id="home">
        <div class="container nav-wrap">
            <a href="#home" class="brand"><span class="brand-mark">A</span><span>Auto<span class="brand-accent">Prime</span></span></a>
            <nav class="desktop-nav" aria-label="Navigasi utama">
                <a href="#home">Beranda</a><a href="#about">Tentang Kami</a><a href="#products">Produk</a><a href="#promo">Promo</a><a href="#contact">Kontak</a>
            </nav>
            <a class="nav-cta" href="https://wa.me/6281234567890" target="_blank" rel="noreferrer">Konsultasi Gratis <span>↗</span></a>
            <button class="menu-toggle" aria-label="Buka menu">☰</button>
        </div>
        <div class="mobile-nav"><a href="#home">Beranda</a><a href="#about">Tentang Kami</a><a href="#products">Produk</a><a href="#promo">Promo</a><a href="#contact">Kontak</a></div>
    </header>

    <main>
        <section class="hero section-pad">
            <div class="hero-glow"></div>
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow"><span class="eyebrow-dot"></span> SALES KENDARAAN TERPERCAYA</p>
                    <h1>Mulai Perjalanan<br><em>Terbaikmu.</em></h1>
                    <p class="hero-text">Temukan kendaraan yang sesuai dengan gaya hidup dan kebutuhanmu. Kami siap membantu dari konsultasi hingga kendaraan tiba di garasi.</p>
                    <div class="hero-actions"><a class="button button-primary" href="#products">Jelajahi Produk <span>→</span></a><a class="text-link" href="#about">Kenapa AutoPrime? <span>↗</span></a></div>
                    <div class="hero-stats"><div><strong>500<span>+</span></strong><small>Unit Terjual</small></div><div><strong>4.9<span>★</span></strong><small>Rating Pelanggan</small></div><div><strong>8<span> Thn</span></strong><small>Pengalaman</small></div></div>
                </div>
                <div class="hero-visual">
                    <div class="hero-orb"></div><div class="hero-card hero-card-top"><span class="status-dot"></span> Unit pilihan untukmu</div>
                    <div class="car-art"><div class="car-roof"></div><div class="car-window"></div><div class="car-body"></div><div class="wheel wheel-left"></div><div class="wheel wheel-right"></div><div class="light"></div></div>
                    <div class="hero-card hero-card-bottom"><span class="card-icon">✓</span><div><b>Harga terbaik</b><small>Penawaran transparan</small></div></div>
                </div>
            </div>
        </section>

        <section class="trust-strip"><div class="container trust-inner"><span>Partner resmi dan terpercaya</span><div class="logo-row"><b>HONDA</b><b>BYD</b><b>YAMAHA</b><b>VESPA</b></div></div></section>

        <section class="section-pad about-section" id="about"><div class="container about-grid"><div class="about-image"><div class="image-note"><strong>01</strong><span>Partner perjalananmu</span></div></div><div class="section-copy"><p class="eyebrow">TENTANG KAMI</p><h2>Lebih dari sekadar<br><span>kendaraan.</span></h2><p>AutoPrime hadir untuk membuat proses memiliki kendaraan terasa lebih mudah, personal, dan menyenangkan. Kami percaya setiap perjalanan dimulai dari pilihan yang tepat.</p><p>Dengan konsultasi yang jujur dan layanan yang hangat, kami membantu menemukan kendaraan yang benar-benar cocok untukmu.</p><a class="text-link dark-link" href="#contact">Kenali kami lebih dekat <span>↗</span></a></div></div></section>

        <section class="section-pad products-section" id="products"><div class="container"><div class="section-heading"><div><p class="eyebrow">PILIHAN KENDARAAN</p><h2>Temukan yang <span>cocok.</span></h2></div><a class="text-link dark-link" href="#contact">Lihat semua produk <span>↗</span></a></div><div class="product-grid">
            <article class="product-card featured"><div class="product-image honda"><span class="product-tag">Paling diminati</span><div class="vehicle-shape scooter"></div></div><div class="product-info"><div><span class="product-category">MOTOR HONDA</span><h3>Honda PCX 160</h3></div><div class="price">Mulai <b>Rp 32,6 jt</b></div><a class="product-link" href="#contact">Detail produk <span>→</span></a></div></article>
            <article class="product-card"><div class="product-image byd"><span class="product-tag electric">Electric</span><div class="vehicle-shape suv"></div></div><div class="product-info"><div><span class="product-category">MOBIL BYD</span><h3>BYD Atto 3</h3></div><div class="price">Mulai <b>Rp 465 jt</b></div><a class="product-link" href="#contact">Detail produk <span>→</span></a></div></article>
            <article class="product-card"><div class="product-image yamaha"><div class="vehicle-shape bike"></div></div><div class="product-info"><div><span class="product-category">MOTOR YAMAHA</span><h3>Yamaha NMAX Turbo</h3></div><div class="price">Mulai <b>Rp 37,4 jt</b></div><a class="product-link" href="#contact">Detail produk <span>→</span></a></div></article>
            <article class="product-card"><div class="product-image vespa"><div class="vehicle-shape classic"></div></div><div class="product-info"><div><span class="product-category">VESPA</span><h3>Vespa Primavera</h3></div><div class="price">Mulai <b>Rp 52,2 jt</b></div><a class="product-link" href="#contact">Detail produk <span>→</span></a></div></article>
        </div></div></section>

        <section class="promo-section section-pad" id="promo"><div class="container promo-box"><div><p class="eyebrow light">PROMO BULAN INI</p><h2>Waktunya upgrade<br><em>perjalananmu.</em></h2><p>Dapatkan program spesial dan penawaran eksklusif untuk pembelian kendaraan pilihanmu.</p><a class="button button-light" href="#contact">Tanya Promo Sekarang <span>→</span></a></div><div class="promo-badge"><span>UP TO</span><strong>50<span>%</span></strong><small>DP RINGAN</small></div></div></section>

        <section class="section-pad testimonials"><div class="container"><div class="section-heading"><div><p class="eyebrow">CERITA MEREKA</p><h2>Dipilih dengan hati,<br><span>dirasakan sendiri.</span></h2></div></div><div class="testimonial-grid"><blockquote><div class="stars">★★★★★</div><p>“Prosesnya cepat dan sangat dibantu dari awal. Saya jadi lebih yakin memilih kendaraan yang benar-benar sesuai kebutuhan keluarga.”</p><footer><span class="avatar">RA</span><span><b>Raka Aditya</b><small>Pemilik Honda PCX</small></span></footer></blockquote><blockquote><div class="stars">★★★★★</div><p>“Sales-nya responsif, informasinya jelas, tidak ada yang ditutup-tutupi. Pengalaman beli mobil pertama jadi menyenangkan.”</p><footer><span class="avatar avatar-alt">NS</span><span><b>Nadia Salsabila</b><small>Pemilik BYD Atto 3</small></span></footer></blockquote></div></div></section>

        <section class="faq-section section-pad"><div class="container faq-grid"><div><p class="eyebrow">FAQ</p><h2>Punya pertanyaan?<br><span>Kami bantu jawab.</span></h2><p class="faq-intro">Temukan jawaban dari pertanyaan yang sering ditanyakan pelanggan kami.</p><a class="text-link dark-link" href="#contact">Tanya langsung <span>↗</span></a></div><div class="faq-list"><details open><summary>Bagaimana cara konsultasi dengan sales? <span>−</span></summary><p>Hubungi kami melalui WhatsApp dan ceritakan kebutuhanmu. Tim kami akan membantu memberikan rekomendasi terbaik.</p></details><details><summary>Apakah bisa test drive? <span>+</span></summary><p>Silakan hubungi kami untuk mengatur jadwal test drive sesuai ketersediaan unit.</p></details><details><summary>Apa saja metode pembayarannya? <span>+</span></summary><p>Kami menyediakan pilihan pembayaran tunai, kredit, dan program pembiayaan yang fleksibel.</p></details><details><summary>Berapa lama proses pengiriman unit? <span>+</span></summary><p>Estimasi pengiriman bergantung pada stok dan lokasi. Sales kami akan memberikan informasi terbaru.</p></details></div></div></section>

        <section class="contact-section section-pad" id="contact"><div class="container contact-box"><div><p class="eyebrow light">MARI TERHUBUNG</p><h2>Siap menemukan<br><em>kendaraanmu?</em></h2><p>Jangan ragu untuk mulai berkonsultasi. Kami siap membantu menjawab semua kebutuhanmu.</p></div><div class="contact-actions"><a class="contact-item" href="https://wa.me/6281234567890" target="_blank" rel="noreferrer"><span class="contact-icon">◔</span><span><small>WhatsApp</small><b>+62 812 3456 7890</b></span><span>↗</span></a><a class="contact-item" href="mailto:hello@autoprime.id"><span class="contact-icon">@</span><span><small>Email</small><b>hello@autoprime.id</b></span><span>↗</span></a></div></div></section>
    </main>
    <footer class="site-footer"><div class="container footer-top"><a href="#home" class="brand"><span class="brand-mark">A</span><span>Auto<span class="brand-accent">Prime</span></span></a><p>Partner perjalanan terbaikmu.</p><div class="footer-links"><a href="#about">Tentang Kami</a><a href="#products">Produk</a><a href="#promo">Promo</a><a href="#contact">Kontak</a></div></div><div class="container footer-bottom"><span>© 2025 AutoPrime Sales. Lorem ipsum dolor sit amet.</span><span>Instagram &nbsp; · &nbsp; TikTok</span></div></footer>
    <a class="whatsapp-float" href="https://wa.me/6281234567890" target="_blank" rel="noreferrer" aria-label="Chat via WhatsApp">◔<span>Chat dengan kami</span></a>
    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>

<?php
declare(strict_types=1);

$serverConfig = [
  'waNumber' => getenv('ARKA_WA_NUMBER') ?: '6281110000298',
  'deadline' => getenv('ARKA_DEADLINE') ?: '2026-10-31T23:59:00+07:00',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>Arka Institute | LoA 3 Hari, Legal, Tanpa Was-was</title>
  <meta name="description" content="Publikasi jurnal ilmiah untuk dosen, peneliti, dan mahasiswa. Percepatan LoA 3 hari, review 1x24 jam, legalitas resmi, bayar bertahap.">
  <meta name="theme-color" content="#FF6B35">
  <meta property="og:title" content="Arka Institute | LoA 3 Hari, Legal, Tanpa Was-was">
  <meta property="og:description" content="2.900+ naskah sudah ditangani. Konsultasikan naskah Anda sekarang.">
  <meta property="og:type" content="website">
  <link rel="icon" type="image/png" href="assets/favicon.png?v=2">
  <link rel="apple-touch-icon" href="assets/favicon.png?v=2">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS & Iconify -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            arka: {
              primary: '#FF6B35',
              'primary-light': '#FF8A5B',
              'primary-dark': '#E55A24',
              secondary: '#4ECDC4',
              accent: '#FFE66D',
              ink: '#1E293B',
              dark: '#1E293B'
            }
          },
          fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] }
        }
      }
    };
  </script>
  <script>window.ARKA_SERVER_CONFIG = <?= json_encode($serverConfig, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;</script>

  <!-- META PIXEL: tempel kode pixel Anda di sini, lalu ganti YOUR_PIXEL_ID.
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init','YOUR_PIXEL_ID');fbq('track','PageView');
  </script>
  -->

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css?v=3.1">
</head>
<body class="bg-[#EFF4FB] font-sans text-slate-800 selection:bg-[#FFC62A] selection:text-[#0E2A6B]">

  <!-- Sprite Ikon -->
  <?php include __DIR__ . '/components/icons.php'; ?>

  <!-- App Wrapper -->
  <div class="app mx-auto max-w-[560px]" id="top">
    <!-- Navbar & Promo -->
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <!-- 1. Hero -->
    <?php include __DIR__ . '/components/hero.php'; ?>

    <!-- 2. Layanan (Desain 2) -->
    <?php include __DIR__ . '/components/layanan.php'; ?>

    <!-- 3. Urgensi Countdown & Slot -->
    <?php include __DIR__ . '/components/urgensi.php'; ?>

    <!-- 4. Statistik -->
    <?php include __DIR__ . '/components/stats.php'; ?>

    <!-- 5. Paket Populer -->
    <?php include __DIR__ . '/components/paket.php'; ?>

    <!-- 6. Katalog Jurnal -->
    <?php include __DIR__ . '/components/katalog.php'; ?>

    <!-- 7. Alur Penerbitan -->
    <?php include __DIR__ . '/components/alur.php'; ?>

    <!-- 8. Testimonial -->
    <?php include __DIR__ . '/components/testimoni.php'; ?>

    <!-- 9. Legalitas -->
    <?php include __DIR__ . '/components/legalitas.php'; ?>

    <!-- 10. FAQ -->
    <?php include __DIR__ . '/components/faq.php'; ?>

    <!-- 11. Final CTA -->
    <?php include __DIR__ . '/components/cta.php'; ?>

    <!-- Footer -->
    <?php include __DIR__ . '/components/footer.php'; ?>

    <!-- Floating Dock Action -->
    <?php include __DIR__ . '/components/dock.php'; ?>
  </div>

  <!-- Modal Voucher Diskon -->
  <?php include __DIR__ . '/components/modal-voucher.php'; ?>

  <!-- Client-side Logic Scripts -->
  <script src="assets/js/main.js?v=2.1"></script>
</body>
</html>
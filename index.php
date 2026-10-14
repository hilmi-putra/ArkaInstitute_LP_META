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
<meta name="theme-color" content="#D1A14F">
<meta property="og:title" content="Arka Institute | LoA 3 Hari, Legal, Tanpa Was-was">
<meta property="og:description" content="2.900+ naskah sudah ditangani. Konsultasikan naskah Anda sekarang.">
<meta property="og:type" content="website">
<link rel="icon" type="image/png" href="assets/favicon.png?v=2">
<link rel="apple-touch-icon" href="assets/favicon.png?v=2">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: { arka: { ink: '#0E2A6B', sky: '#1FB5E6', blue: '#1565F5', yellow: '#FFC62A' } },
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

<style>
:root{
  --tinta:#0E2A6B;
  --langit:#1FB5E6;
  --biru:#1565F5;
  --ungu:#5B3DF5;
  --oranye:#F36F0B;
  --oranye-gelap:#D95D00;
  --kuning:#FFC62A;
  --hijau:#19B36B;
  --teks:#14213D;
  --redup:#5B6785;
  --garis:#DCE5F4;
  --latar:#EFF4FB;
  --putih:#fff;
}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{font-family:'Plus Jakarta Sans',system-ui,-apple-system,'Segoe UI',Roboto,sans-serif;background:#DDE5F3;color:var(--teks);line-height:1.5;-webkit-font-smoothing:antialiased}
a{color:inherit;text-decoration:none}
button,input,select{font:inherit;color:inherit}
svg{display:block}
.ico{width:1em;height:1em;stroke:currentColor;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
:focus-visible{outline:3px solid var(--kuning);outline-offset:2px}

.app{max-width:560px;margin:0 auto;background:var(--latar);min-height:100vh;position:relative;overflow-x:clip;box-shadow:0 0 70px rgba(14,42,107,.18);padding-bottom:calc(92px + env(safe-area-inset-bottom,0px))}

/* ---------- Promo strip ---------- */
.promo{background:var(--kuning);color:#2A1D00;display:flex;align-items:center;gap:10px;padding:10px 12px 10px 16px;padding-top:calc(10px + env(safe-area-inset-top,0px))}
.promo[hidden]{display:none}
.promo p{flex:1;font-weight:800;font-size:.8rem;line-height:1.25;letter-spacing:.01em}
.promo p small{display:block;font-weight:600;font-size:.7rem;opacity:.8}
.promo a{width:34px;height:34px;border-radius:50%;background:#fff;display:grid;place-items:center;flex:none;box-shadow:0 2px 6px rgba(0,0,0,.18)}
.promo a .ico{font-size:17px;stroke-width:2.6}

/* ---------- Header ---------- */
.top{background:#1FA8DE;display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 16px}
.brand{display:flex;align-items:center;gap:10px;color:#fff}
.menu-btn{width:38px;height:38px;border-radius:10px;background:rgba(255,255,255,.22);display:grid;place-items:center;border:0;color:#fff;font-size:20px}
.logo{display:flex;align-items:center;gap:8px}
.logo-mark{width:34px;height:34px;border-radius:10px;background:var(--kuning);color:var(--tinta);display:grid;place-items:center;font-weight:800;font-size:1.15rem}
.logo-text{line-height:1.05;font-weight:800;font-size:1.1rem;letter-spacing:-.01em}
.logo-text span{display:block;font-weight:600;font-size:.68rem;opacity:.9;letter-spacing:.02em}
.pill-btn{background:rgba(255,255,255,.25);padding:5px;border-radius:999px}
.pill-btn a{display:block;background:#fff;color:var(--tinta);font-weight:700;font-size:.85rem;padding:11px 18px;border-radius:999px;white-space:nowrap}

/* ---------- Hero ---------- */
.hero{position:relative;background:linear-gradient(165deg,#1FB5E6 0%,#1565F5 52%,#5B3DF5 100%);color:#fff;padding:22px 16px 84px;overflow:hidden}
.hero::before,.hero::after{content:"";position:absolute;border-radius:50%;background:rgba(255,255,255,.1);pointer-events:none}
.hero::before{width:300px;height:300px;right:-120px;top:-70px}
.hero::after{width:240px;height:240px;left:-110px;bottom:20px;background:rgba(255,255,255,.07)}
.hero-grid{position:relative;z-index:1;display:grid;grid-template-columns:1.12fr .88fr;gap:4px;align-items:center}
.hero h1{font-size:clamp(1.5rem,6.6vw,2rem);line-height:1.16;font-weight:800;letter-spacing:-.02em}
.hero-art{position:relative}
.hero-art svg{width:100%;height:auto;overflow:visible}
.hero-sub{position:relative;z-index:1;margin-top:12px;font-weight:600;font-size:.98rem;line-height:1.45;max-width:30em}
.lead{position:relative;z-index:1;margin-top:18px;display:flex;align-items:center;background:#fff;border-radius:999px;padding:5px;box-shadow:0 10px 26px rgba(8,28,92,.28)}
.lead .cc{padding:0 4px 0 18px;font-weight:700;color:var(--tinta)}
.lead input{flex:1;min-width:0;border:0;background:transparent;padding:12px 8px 12px 4px;font-weight:600;font-size:1rem;color:var(--tinta)}
.lead input::placeholder{color:#97A3BD;font-weight:500}
.lead input:focus-visible{outline:0}
.lead:focus-within{box-shadow:0 0 0 3px var(--kuning),0 10px 26px rgba(8,28,92,.28)}
.btn-or{display:flex;align-items:center;gap:6px;background:var(--oranye);color:#fff;border:0;border-radius:999px;font-weight:800;font-size:.95rem;padding:13px 18px;cursor:pointer;white-space:nowrap;transition:background .2s,transform .15s}
.btn-or:hover{background:var(--oranye-gelap)}
.btn-or:active{transform:scale(.97)}
.btn-or .ico{font-size:16px;stroke-width:2.6}
.lead-msg{position:relative;z-index:1;margin:10px 6px 0;font-size:.82rem;font-weight:600;color:#FFE9A8;min-height:1.2em}
.lead-msg.err{color:#FFD4D4}
.chips{position:relative;z-index:1;display:flex;flex-wrap:wrap;gap:8px;margin-top:10px;list-style:none}
.chips li{display:flex;align-items:center;gap:6px;background:rgba(255,255,255,.18);border:1px solid rgba(255,255,255,.28);padding:6px 11px 6px 9px;border-radius:999px;font-size:.78rem;font-weight:700}
.chips .ico{font-size:14px;stroke-width:3;color:var(--kuning)}

/* entrance tunggal untuk ilustrasi hero */
.pop{transform-box:fill-box;transform-origin:center;animation:pop .7s cubic-bezier(.2,1.4,.4,1) both}
.pop.d1{animation-delay:.25s}.pop.d2{animation-delay:.45s}.pop.d3{animation-delay:.65s}
@keyframes pop{from{opacity:0;transform:scale(.6)}to{opacity:1;transform:scale(1)}}

/* ---------- Kartu layanan (menimpa hero) ---------- */
.svc{position:relative;z-index:2;margin:-58px 14px 0;background:#fff;border-radius:26px;padding:20px 14px 16px;box-shadow:0 12px 34px rgba(14,42,107,.14)}
.svc h2{font-size:1.02rem;font-weight:800;padding:0 4px 14px;letter-spacing:-.01em}
.svc-row{display:grid;grid-template-columns:repeat(5,1fr);gap:4px}
.svc-item{display:flex;flex-direction:column;align-items:center;gap:7px;text-align:center;font-size:.7rem;font-weight:700;line-height:1.25;color:var(--teks);padding:2px 0}
.svc-ico{position:relative;width:54px;height:54px;border-radius:50%;display:grid;place-items:center;font-size:25px}
.svc-ico .tag{position:absolute;bottom:-5px;left:50%;transform:translateX(-50%);background:#EF3E5B;color:#fff;font-size:.58rem;font-weight:800;padding:2px 7px;border-radius:999px;border:2px solid #fff;white-space:nowrap}
.c1{background:#E6EEFF;color:var(--biru)}
.c2{background:#E3F8F4;color:#0E9F86}
.c3{background:#FFF1D6;color:#D98400}
.c4{background:#FDE7EE;color:#D6336C}
.c5{background:#EDE8FF;color:var(--ungu)}

/* ---------- Urgensi ---------- */
.urg{margin:16px 14px 0;border-radius:22px;background:linear-gradient(135deg,#FF8A1F,#F0471B);color:#fff;padding:16px;box-shadow:0 10px 24px rgba(240,71,27,.28)}
.urg[hidden]{display:none}
.urg-head{display:flex;gap:12px;align-items:center}
.urg-head .ico{font-size:30px;flex:none;stroke-width:2.2}
.urg-head h3{font-size:1rem;font-weight:800;line-height:1.25}
.urg-head p{font-size:.8rem;font-weight:600;opacity:.95}
.cd{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin-top:14px}
.cd div{background:rgba(255,255,255,.2);border-radius:14px;padding:9px 0 7px;text-align:center}
.cd b{display:block;font-size:1.45rem;line-height:1.1;font-weight:800;font-variant-numeric:tabular-nums}
.cd span{font-size:.68rem;font-weight:600;opacity:.92}
.slot{margin-top:14px}
.slot[hidden]{display:none}
.slot-top{display:flex;justify-content:space-between;font-size:.8rem;font-weight:700;margin-bottom:6px}
.bar{height:10px;border-radius:99px;background:rgba(255,255,255,.28);overflow:hidden}
.bar i{display:block;height:100%;width:0;background:var(--kuning);border-radius:99px;transition:width 1.2s cubic-bezier(.2,.8,.2,1)}
.urg .btn-or{margin-top:14px;width:100%;justify-content:center;background:#fff;color:var(--oranye-gelap)}
.urg .btn-or:hover{background:#FFF4E6}

/* ---------- Statistik ---------- */
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin:16px 14px 0}
.stat{background:#fff;border-radius:16px;padding:12px 4px 10px;text-align:center;box-shadow:0 3px 10px rgba(14,42,107,.06)}
.stat b{display:block;font-size:1.15rem;font-weight:800;color:var(--biru);letter-spacing:-.02em}
.stat span{display:block;font-size:.66rem;font-weight:600;color:var(--redup);line-height:1.25;margin-top:2px}

/* ---------- Seksi umum ---------- */
.sec{padding:30px 0 0}
.sec-h{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:0 16px;flex-wrap:wrap}
.sec-h h2{font-size:1.22rem;font-weight:800;letter-spacing:-.02em;display:flex;align-items:center;gap:8px}
.sec-h h2 .ico{color:var(--kuning);fill:var(--kuning);font-size:24px;stroke-width:1.5}
.sec-p{padding:6px 16px 0;color:var(--redup);font-size:.9rem;font-weight:500}
.sel{position:relative}
.sel select{appearance:none;-webkit-appearance:none;background:#fff;border:2px solid var(--garis);border-radius:14px;padding:10px 38px 10px 14px;font-weight:700;font-size:.95rem;cursor:pointer}
.sel .ico{position:absolute;right:12px;top:50%;transform:translateY(-50%);pointer-events:none;font-size:18px}

/* ---------- Paket populer ---------- */
.rail{display:flex;gap:12px;overflow-x:auto;scroll-snap-type:x mandatory;padding:16px 16px 6px;scrollbar-width:none}
.rail::-webkit-scrollbar{display:none}
.pkg{flex:0 0 78%;scroll-snap-align:start;border-radius:22px;padding:16px;display:flex;flex-direction:column;gap:10px;border:1px solid rgba(21,101,245,.12)}
.pkg:nth-child(3n+1){background:linear-gradient(160deg,#D6E8FF,#EAF3FF)}
.pkg:nth-child(3n+2){background:linear-gradient(160deg,#D9F5EE,#EDFAF6)}
.pkg:nth-child(3n){background:linear-gradient(160deg,#FFE9C9,#FFF5E5)}
.pkg-tag{align-self:flex-start;display:flex;align-items:center;gap:7px;background:var(--ungu);color:#fff;font-weight:700;font-size:.78rem;padding:7px 12px;border-radius:999px}
.pkg-tag .ico{font-size:15px}
.pkg h3{font-size:1.08rem;font-weight:800;line-height:1.25;letter-spacing:-.01em}
.pkg p{font-size:.86rem;color:#33415F;font-weight:500}
.pkg ul{list-style:none;display:grid;gap:6px;margin-top:2px}
.pkg li{display:flex;gap:8px;align-items:flex-start;font-size:.84rem;font-weight:600}
.pkg li .ico{font-size:16px;color:var(--hijau);stroke-width:3;margin-top:2px;flex:none}
.pkg .link{margin-top:auto;padding-top:6px;display:flex;align-items:center;gap:6px;font-weight:800;color:var(--biru);font-size:.9rem}
.pkg .link .ico{font-size:16px;stroke-width:2.6}

/* ---------- Katalog jurnal ---------- */
.filters{display:flex;gap:8px;overflow-x:auto;padding:14px 16px 4px;scrollbar-width:none}
.filters::-webkit-scrollbar{display:none}
.filters button{flex:none;border:2px solid var(--garis);background:#fff;border-radius:999px;padding:8px 14px;font-weight:700;font-size:.82rem;cursor:pointer;transition:background .2s,color .2s,border-color .2s}
.filters button[aria-pressed="true"]{background:var(--biru);border-color:var(--biru);color:#fff}
.catalog{display:grid;grid-template-columns:1fr 1fr;gap:12px;padding:14px 16px 0}
.jr{background:#fff;border-radius:20px;padding:10px 10px 12px;box-shadow:0 4px 14px rgba(14,42,107,.08);display:flex;flex-direction:column;gap:9px}
.jr[hidden]{display:none}
.cover{position:relative;aspect-ratio:3/3.7;border-radius:12px;overflow:hidden;color:#fff;padding:12px 11px;display:flex;flex-direction:column;justify-content:space-between;box-shadow:inset 0 0 0 1px rgba(255,255,255,.15)}
.cover::before{content:"";position:absolute;inset:0;background:repeating-linear-gradient(135deg,rgba(255,255,255,.06) 0 10px,transparent 10px 20px)}
.cover::after{content:"";position:absolute;width:120%;aspect-ratio:1;border-radius:50%;background:rgba(255,255,255,.1);right:-62%;bottom:-48%}
.cover small{position:relative;z-index:1;font-size:.6rem;font-weight:600;opacity:.88;line-height:1.2}
.cover strong{position:relative;z-index:1;font-size:1.15rem;line-height:1.05;font-weight:800;letter-spacing:-.02em;word-break:break-word}
.cover .bar2{position:relative;z-index:1;height:4px;width:34px;border-radius:9px;background:var(--kuning);margin-top:8px}
.jr-meta{padding:0 2px}
.jr-meta b{display:block;font-size:.95rem;font-weight:800;letter-spacing:-.01em}
.jr-meta span{font-size:.74rem;color:var(--redup);font-weight:600}
.jr .btn-line{display:flex;align-items:center;justify-content:center;gap:6px;border:2px solid var(--biru);color:var(--biru);border-radius:12px;font-weight:800;font-size:.8rem;padding:9px 6px;transition:background .2s,color .2s}
.jr .btn-line:hover{background:var(--biru);color:#fff}
.jr .btn-line .ico{font-size:15px}
.cat-note{margin:14px 16px 0;background:#fff;border:2px dashed var(--garis);border-radius:16px;padding:12px 14px;font-size:.86rem;font-weight:600;color:var(--redup)}
.cat-note a{color:var(--biru);font-weight:800}

/* ---------- Alur ---------- */
.flow{margin:16px 14px 0;background:var(--tinta);color:#fff;border-radius:26px;padding:22px 18px 18px;position:relative;overflow:hidden}
.flow::after{content:"";position:absolute;width:220px;height:220px;border-radius:50%;background:rgba(31,181,230,.18);right:-80px;top:-80px}
.flow h2{position:relative;z-index:1;font-size:1.2rem;font-weight:800;letter-spacing:-.02em}
.flow>p{position:relative;z-index:1;font-size:.86rem;opacity:.85;margin-top:4px;font-weight:500}
.steps{position:relative;z-index:1;list-style:none;margin-top:18px;display:grid;gap:0}
.steps li{position:relative;display:grid;grid-template-columns:40px 1fr;gap:14px;padding-bottom:18px}
.steps li:last-child{padding-bottom:0}
.steps li::before{content:"";position:absolute;left:19px;top:40px;bottom:0;width:2px;background:linear-gradient(var(--langit),rgba(31,181,230,.15))}
.steps li:last-child::before{display:none}
.steps .n{width:40px;height:40px;border-radius:50%;background:var(--kuning);color:var(--tinta);display:grid;place-items:center;font-weight:800}
.steps h3{font-size:1rem;font-weight:800}
.steps p{font-size:.84rem;opacity:.85;font-weight:500;margin-top:1px}
.steps .time{display:inline-block;margin-top:6px;background:rgba(255,255,255,.14);padding:3px 10px;border-radius:999px;font-size:.72rem;font-weight:700}
.sop{position:relative;z-index:1;margin-top:18px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:16px;padding:12px 14px;display:flex;align-items:center;gap:12px;font-size:.84rem;font-weight:600}
.sop span{flex:1}
.sop a{background:var(--kuning);color:var(--tinta);font-weight:800;padding:9px 12px;border-radius:12px;font-size:.78rem;white-space:nowrap}

/* ---------- Legalitas ---------- */
.legal{margin:16px 14px 0;background:#fff;border-radius:26px;padding:20px 18px;box-shadow:0 8px 26px rgba(14,42,107,.1);display:grid;gap:14px}
.legal-top{display:flex;gap:14px;align-items:center}
.shield{flex:none;width:60px;height:60px;border-radius:18px;background:linear-gradient(135deg,#19B36B,#0E9F86);color:#fff;display:grid;place-items:center;font-size:32px}
.legal h2{font-size:1.15rem;font-weight:800;letter-spacing:-.02em;line-height:1.25}
.legal p{font-size:.86rem;color:var(--redup);font-weight:500}
.nib{background:var(--latar);border-radius:16px;padding:12px 14px;display:grid;gap:2px}
.nib small{font-size:.72rem;color:var(--redup);font-weight:600}
.nib b{font-size:1.25rem;font-weight:800;letter-spacing:.04em;color:var(--tinta);font-variant-numeric:tabular-nums}
.legal-list{list-style:none;display:grid;gap:9px}
.legal-list li{display:flex;gap:10px;font-size:.88rem;font-weight:600;align-items:flex-start}
.legal-list .ico{font-size:18px;color:var(--hijau);stroke-width:3;flex:none;margin-top:1px}

/* ---------- FAQ ---------- */
.faq{display:grid;gap:10px;padding:16px 14px 0}
.faq details{background:#fff;border-radius:18px;box-shadow:0 3px 10px rgba(14,42,107,.06);overflow:hidden}
.faq summary{list-style:none;display:flex;align-items:center;justify-content:space-between;gap:12px;padding:16px;font-weight:700;font-size:.93rem;cursor:pointer}
.faq summary::-webkit-details-marker{display:none}
.faq summary .ico{font-size:20px;color:var(--biru);transition:transform .25s;flex:none}
.faq details[open] summary .ico{transform:rotate(180deg)}
.faq details>div{padding:0 16px 16px;font-size:.88rem;color:#3A4864;font-weight:500}

/* ---------- CTA akhir ---------- */
.final{margin:30px 14px 0;border-radius:28px;padding:26px 20px;background:linear-gradient(160deg,#1565F5,#5B3DF5);color:#fff;text-align:center;position:relative;overflow:hidden}
.final::before{content:"";position:absolute;width:240px;height:240px;border-radius:50%;background:rgba(255,255,255,.1);left:-90px;top:-100px}
.final h2{position:relative;font-size:1.4rem;font-weight:800;line-height:1.2;letter-spacing:-.02em}
.final p{position:relative;margin-top:8px;font-size:.92rem;font-weight:500;opacity:.92}
.final .btn-wa{position:relative;margin-top:18px}
.btn-wa{display:inline-flex;align-items:center;justify-content:center;gap:9px;background:var(--hijau);color:#fff;font-weight:800;font-size:1rem;border-radius:999px;padding:15px 24px;box-shadow:0 8px 20px rgba(25,179,107,.4);transition:transform .15s,background .2s}
.btn-wa:hover{background:#12A05F}
.btn-wa:active{transform:scale(.97)}
.btn-wa .ico{font-size:22px}
.final small{position:relative;display:block;margin-top:12px;font-size:.78rem;opacity:.85;font-weight:600}

/* ---------- Footer ---------- */
footer{padding:26px 20px 10px;text-align:center;color:var(--redup);font-size:.78rem;font-weight:500}
footer b{color:var(--teks)}
footer .row{display:flex;justify-content:center;align-items:center;gap:6px;margin-top:4px}
footer .ico{font-size:14px}

/* ---------- Dock bawah ---------- */
.dock{position:fixed;left:50%;bottom:0;width:min(100%,560px);transform:translate(-50%,120%);transition:transform .35s cubic-bezier(.2,.8,.2,1);z-index:50;background:#fff;border-radius:22px 22px 0 0;padding:12px 14px calc(12px + env(safe-area-inset-bottom,0px));display:flex;align-items:center;gap:12px;box-shadow:0 -8px 28px rgba(14,42,107,.18)}
.dock.show{transform:translate(-50%,0)}
.dock-t{flex:1;min-width:0;line-height:1.25}
.dock-t b{display:block;font-size:.9rem;font-weight:800}
.dock-t span{font-size:.74rem;color:var(--redup);font-weight:600}
.dock .btn-wa{padding:12px 16px;font-size:.88rem;box-shadow:none;white-space:nowrap}
.dock .btn-wa .ico{font-size:19px}

/* ---------- Atribut hidden yang harus menang ---------- */
.cd[hidden],.code[hidden],.sec[hidden],.mini-cd[hidden]{display:none}

/* ---------- Tiket diskon ---------- */
.ticket{margin-top:14px;background:#fff;color:var(--teks);border-radius:16px;display:flex;align-items:stretch;overflow:hidden;box-shadow:0 6px 16px rgba(120,30,0,.22)}
.ticket[hidden]{display:none}
.ticket-l{flex:none;width:104px;background:var(--kuning);color:#2A1D00;display:grid;place-items:center;text-align:center;padding:12px 6px}
.ticket-l small{display:block;font-size:.72rem;font-weight:700}
.ticket-l b{display:block;font-size:1.8rem;line-height:1;font-weight:800;letter-spacing:-.03em}
.ticket-r{flex:1;min-width:0;padding:10px 12px;border-left:2px dashed #F2C9A0;display:flex;flex-direction:column;gap:7px;justify-content:center}
.ticket-r span{font-size:.74rem;font-weight:600;color:var(--redup);line-height:1.3}
.code{display:flex;align-items:center;justify-content:space-between;gap:8px;background:var(--latar);border-radius:10px;padding:5px 5px 5px 12px}
.code b{font-weight:800;letter-spacing:.08em;color:var(--tinta);font-size:.95rem}
.code button{border:0;background:var(--biru);color:#fff;font-weight:700;font-size:.74rem;padding:8px 13px;border-radius:8px;cursor:pointer;min-width:66px}

/* ---------- Testimonial ---------- */
.tcard{flex:0 0 84%;scroll-snap-align:start;background:#fff;border-radius:22px;padding:16px;box-shadow:0 4px 14px rgba(14,42,107,.08);display:flex;flex-direction:column;gap:12px}
.tcard .contoh{align-self:flex-start;background:#FFF1D6;color:#9A5B00;font-size:.7rem;font-weight:800;padding:4px 10px;border-radius:999px}
.stars{display:flex;gap:2px;color:#FFB400}
.stars .ico{font-size:17px;fill:currentColor;stroke-width:1.2}
.tcard q{quotes:"\201C" "\201D";font-size:.92rem;font-weight:500;line-height:1.55;color:#2A3752}
.tshot{width:100%;border-radius:14px;border:1px solid var(--garis);display:block}
.tjr{align-self:flex-start;background:#E3F8F4;color:#0E7F6C;font-size:.76rem;font-weight:700;padding:5px 11px 5px 9px;border-radius:999px;display:flex;gap:6px;align-items:center}
.tjr .ico{font-size:14px;stroke-width:3}
.twho{display:flex;gap:10px;align-items:center;margin-top:auto}
.av{width:42px;height:42px;border-radius:50%;display:grid;place-items:center;color:#fff;font-weight:800;font-size:.9rem;flex:none}
.twho b{display:block;font-size:.92rem;font-weight:800;line-height:1.2}
.twho span{font-size:.76rem;color:var(--redup);font-weight:600}

/* ---------- Pop up diskon ---------- */
.modal{position:fixed;inset:0;z-index:100;display:flex;align-items:flex-end;justify-content:center;background:rgba(10,24,64,.62);opacity:0;visibility:hidden;transition:opacity .25s,visibility .25s}
.modal.show{opacity:1;visibility:visible}
.sheet{position:relative;width:min(100%,460px);background:#fff;border-radius:28px 28px 0 0;padding:26px 20px calc(18px + env(safe-area-inset-bottom,0px));text-align:center;max-height:94vh;overflow-y:auto;transform:translateY(40px);transition:transform .35s cubic-bezier(.2,.9,.3,1)}
.modal.show .sheet{transform:none}
@media (min-width:600px){.modal{align-items:center}.sheet{border-radius:28px}}
.x{position:absolute;top:12px;right:12px;width:40px;height:40px;border-radius:50%;border:0;background:var(--latar);display:grid;place-items:center;cursor:pointer;font-size:20px;color:var(--teks)}
.sheet .badge{width:92px;height:92px;margin:0 auto 12px;border-radius:50%;background:linear-gradient(135deg,#FFD84D,#FF9A1F);color:#2A1D00;display:grid;place-items:center;line-height:1;box-shadow:0 10px 22px rgba(255,154,31,.45)}
.sheet .badge small{display:block;font-size:.72rem;font-weight:700;margin-bottom:2px}
.sheet .badge b{display:block;font-size:1.85rem;font-weight:800;letter-spacing:-.03em}
.sheet h2{font-size:1.32rem;font-weight:800;line-height:1.2;letter-spacing:-.02em;padding:0 8px}
.sheet p{font-size:.88rem;color:var(--redup);font-weight:500;margin-top:6px}
.mini-cd{display:flex;justify-content:center;gap:8px;margin:16px 0 2px}
.mini-cd div{min-width:60px;background:var(--tinta);color:#fff;border-radius:12px;padding:8px 0 6px}
.mini-cd b{display:block;font-size:1.3rem;line-height:1.1;font-weight:800;font-variant-numeric:tabular-nums}
.mini-cd span{font-size:.66rem;font-weight:600;opacity:.85}
.sheet .lead{box-shadow:none;border:2px solid var(--garis);margin-top:14px}
.sheet .lead:focus-within{box-shadow:0 0 0 3px var(--kuning);border-color:var(--kuning)}
.sheet .lead-msg{color:var(--redup);text-align:left;margin-top:8px}
.sheet .lead-msg.err{color:#D62B4B}
.later{background:none;border:0;color:var(--redup);font-weight:700;font-size:.84rem;margin-top:4px;padding:10px;cursor:pointer;text-decoration:underline}
.sheet p.fine{font-size:.72rem;margin-top:2px}

@media (max-width:370px){
  .svc-row{gap:2px}
  .svc-ico{width:48px;height:48px;font-size:22px}
  .svc-item{font-size:.64rem}
  .btn-or{padding:12px 14px;font-size:.88rem}
  .dock-t span{display:none}
}
@media (prefers-reduced-motion:reduce){
  *{animation:none!important;transition:none!important;scroll-behavior:auto!important}
}

/* ---------- Arka visual system ---------- */
:root{
  --tinta:#111111;
  --langit:#D1A14F;
  --biru:#D1A14F;
  --ungu:#8B6A2F;
  --oranye:#D1A14F;
  --oranye-gelap:#A77A2E;
  --kuning:#E7C77E;
  --hijau:#1D6B4F;
  --teks:#171717;
  --redup:#6D6A64;
  --garis:#E7E3DB;
  --latar:#F5F4F0;
  --putih:#FFFFFF;
}
body{background:#E8E6E1;color:var(--teks);font-family:'Plus Jakarta Sans',sans-serif}
.app{max-width:1180px!important;background:#F9F8F5;box-shadow:0 0 60px rgba(17,17,17,.12);padding-bottom:calc(80px + env(safe-area-inset-bottom,0px))}
.promo{background:var(--tinta);color:#fff;padding:9px 24px}
.promo a{color:var(--tinta)}
.top{position:sticky;top:0;z-index:40;background:rgba(249,248,245,.94);backdrop-filter:blur(16px);padding:17px clamp(18px,4vw,56px);border-bottom:1px solid var(--garis)}
.brand{color:var(--tinta)}
.menu-btn{display:none;background:var(--tinta);color:#fff}
.logo{gap:0}.logo-mark{display:none}.logo-text{display:block;width:184px;height:34px;background:url('assets/favicon ai.png') left center/contain no-repeat;font-size:0}.logo-text span{display:none}
.pill-btn{background:var(--tinta);padding:0;border-radius:999px}.pill-btn a{background:var(--tinta);color:#fff;padding:11px 18px}
.hero{background:#F9F8F5;color:var(--tinta);padding:clamp(38px,7vw,92px) clamp(18px,7vw,92px) clamp(76px,9vw,112px);overflow:hidden}
.hero::before,.hero::after{background:#EEE7D8;opacity:.7}
.hero::before{width:360px;height:360px;right:-160px;top:-180px}.hero::after{width:260px;height:260px;left:-180px;bottom:-150px}
.hero-grid{grid-template-columns:minmax(0,1.06fr) minmax(260px,.94fr);gap:clamp(28px,6vw,90px);max-width:980px;margin:0 auto;align-items:center}
.hero h1{font-size:clamp(2.45rem,6vw,5.4rem);line-height:1.02;letter-spacing:-.055em;max-width:8ch}
.hero-art{order:2;display:flex;justify-content:center}.hero-art img{width:100%;max-width:420px;aspect-ratio:1/1.12;object-fit:contain;background:#fff;border-radius:28px;box-shadow:20px 20px 0 #E8D4A7;transform:rotate(2deg)}
.hero-sub{color:#5B5954;max-width:600px;margin:24px auto 0;position:relative;z-index:1;font-size:1rem}
.lead{max-width:600px;margin:22px auto 0;border:1px solid var(--garis);box-shadow:0 10px 30px rgba(17,17,17,.08)}
.lead .cc,.lead input{color:var(--tinta)}.lead input::placeholder{color:#9B978E}
.btn-or{background:var(--tinta);border-radius:12px}.btn-or:hover{background:#37342E}.lead-msg{color:#756D5D}.lead-msg.err{color:#A22626}
.chips{max-width:600px;margin:14px auto 0}.chips li{background:#EFE9DD;border-color:#E7D9BC;color:#544A39}.chips .ico{color:#A77A2E}
.pop.d1,.pop.d2,.pop.d3{animation:none}
.svc{margin:-50px auto 0;max-width:980px;border:1px solid var(--garis);border-radius:22px;padding:24px;box-shadow:0 20px 40px rgba(17,17,17,.08)}
.svc h2{font-size:1.2rem}.svc-row{grid-template-columns:repeat(5,1fr);gap:10px}.svc-item{font-size:.78rem}.svc-ico{background:#F0E7D5;color:var(--tinta);width:52px;height:52px}.svc-ico .tag{background:var(--tinta)}.c1,.c2,.c3,.c4,.c5{background:#F0E7D5;color:var(--tinta)}
.urg{max-width:980px;margin:22px auto 0;border-radius:20px;background:var(--tinta);box-shadow:none}.urg .btn-or{background:#fff;color:var(--tinta)}
.stats{max-width:980px;margin:24px auto 0;padding:0 18px;gap:1px;background:var(--tinta);border-radius:16px;overflow:hidden}.stat{border-radius:0;box-shadow:none;background:#fff;padding:18px 8px}.stat b{color:var(--tinta)}.stat span{color:var(--redup)}
.sec{max-width:980px;margin:0 auto;padding-top:74px}.sec-h,.sec-p{padding-left:18px;padding-right:18px}.sec-h h2{font-size:clamp(1.5rem,3vw,2.5rem);letter-spacing:-.04em}.sec-h h2 .ico{color:var(--langit);fill:var(--langit)}.sec-p{color:var(--redup);max-width:650px}
.sel select{border-color:var(--garis);border-radius:10px}.rail{padding:22px 18px 8px}.pkg{flex-basis:330px;border:1px solid var(--garis);border-radius:18px;background:#fff!important;box-shadow:0 10px 24px rgba(17,17,17,.05)}.pkg-tag{background:#F0E7D5;color:var(--tinta)}.pkg .link{color:var(--tinta)}.pkg li .ico{color:var(--hijau)}
.filters{padding:20px 18px 4px}.filters button{border-color:var(--garis);color:var(--tinta);background:#fff;border-radius:10px}.filters button[aria-pressed="true"]{background:var(--tinta);border-color:var(--tinta)}
.catalog{grid-template-columns:repeat(3,minmax(0,1fr));gap:18px;padding:18px}.jr{border:1px solid var(--garis);border-radius:18px;padding:10px;box-shadow:0 10px 24px rgba(17,17,17,.05)}.cover{aspect-ratio:4/5;padding:0;background:#EEE!important}.cover::before,.cover::after{display:none}.cover img{width:100%;height:100%;object-fit:cover}.cover small,.cover strong,.cover .bar2{display:none}.jr-meta b{color:var(--tinta)}.jr .btn-line{border-color:var(--tinta);color:var(--tinta);border-radius:10px}.jr .btn-line:hover{background:var(--tinta)}.cat-note{background:#fff;border-color:var(--garis);color:var(--redup)}.cat-note a{color:var(--tinta)}
.flow{background:#fff;color:#171717;border:1px solid var(--garis);border-radius:20px;box-shadow:0 14px 30px rgba(17,17,17,.06)}.flow::after{display:none}.flow>p{color:#6D6A64;opacity:1}.steps li::before{background:#CFA14F}.steps .n{background:#CFA14F;color:#171717}.steps p{color:#5B5954;opacity:1}.steps .time{background:#F4E9D4;color:#73531E}.sop{background:#F8F5EE;border-color:#E5D5B6;color:#332A1B}.sop a{background:#CFA14F;color:#171717}
.legal{border:1px solid var(--garis);border-radius:20px;box-shadow:none}.shield{background:var(--tinta)}.nib{background:#F0E7D5}.nib b{color:var(--tinta)}.legal-list .ico{color:var(--hijau)}
.faq details{border:1px solid var(--garis);box-shadow:none;border-radius:14px}.faq summary .ico{color:var(--tinta)}
.final{background:var(--tinta);border-radius:20px}.final::before{background:#3B3325}.btn-wa{background:var(--langit);color:var(--tinta);box-shadow:none}.btn-wa:hover{background:#E1BC6C}.final small{color:#EDE9E1}
footer{color:var(--redup)}footer b{color:var(--tinta)}
.dock{width:min(100%,980px);background:#fff;border:1px solid var(--garis);box-shadow:0 -8px 28px rgba(17,17,17,.12)}
.ticket-l{background:var(--langit);color:var(--tinta)}.code button{background:var(--tinta)}
.tcard{border:1px solid var(--garis);box-shadow:none}.tcard .contoh{background:#F0E7D5;color:#755622}.tjr{background:#E7F0EB;color:#1D6B4F}
.modal{background:rgba(17,17,17,.72);align-items:center}.sheet{border:3px solid #111;border-radius:18px;background:#A8F06D;padding:12px;box-shadow:10px 10px 0 rgba(0,0,0,.28)}.modal.show .sheet{transform:none}.x{z-index:2;background:#F2F4E7;color:var(--tinta);top:10px;right:10px}.promo-art{position:relative;min-height:210px;overflow:hidden;border-radius:10px;background:#183D08;color:#A8F06D;text-align:left;padding:92px 18px 12px;isolation:isolate}.promo-art::before{content:"";position:absolute;inset:10px -10px -8px 14px;z-index:-1;background:#F2F0DC;transform:rotate(-5deg);opacity:.96;background-image:linear-gradient(#D8D6C5 1px,transparent 1px),linear-gradient(90deg,#D8D6C5 1px,transparent 1px);background-size:16px 16px}.promo-art::after{content:"";position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;background:linear-gradient(120deg,transparent 0 78%,rgba(168,240,109,.12) 78% 80%,transparent 80%)}.promo-note{position:absolute;z-index:1;top:10px;left:18px;width:142px;padding:12px 10px 13px;background:#F0F56A;color:#173D08;box-shadow:5px 5px 0 rgba(0,0,0,.18);transform:rotate(-4deg);font-size:.6rem}.promo-note::before{content:"";position:absolute;top:-12px;left:44px;width:54px;height:17px;border:2px solid #222;border-bottom:0;border-radius:50%;transform:rotate(-7deg)}.promo-note b{display:block;font-size:.85rem;line-height:1;margin-bottom:9px}.promo-note span{display:block;border-radius:50%;background:#B7F56E;padding:13px 6px;text-align:center;font-weight:800;line-height:1.05}.promo-tab{position:absolute;right:0;top:44px;border-radius:0 7px 7px 0;padding:9px 7px;writing-mode:vertical-rl;font-size:.57rem;font-weight:800}.promo-tab.welcome{background:#2B5C17;color:#D7F3B4}.promo-tab.claim{top:91px;background:#F0F56A;color:#173D08}.promo-tab.info{top:139px;background:#78C8D6;color:#173D08}.promo-art strong{display:block;font-family:Georgia,serif;font-size:clamp(2.5rem,12vw,4rem);line-height:.78;letter-spacing:-.07em}.promo-art em{display:inline-block;margin:8px 0 0 58%;padding:3px 7px;background:#F0F56A;color:#173D08;font-style:normal;font-size:.85rem;font-weight:900;transform:rotate(-4deg)}.sheet .badge{width:60px;height:60px;margin:10px auto 8px;background:#111;color:#A8F06D;box-shadow:none}.sheet .badge small{font-size:.55rem}.sheet .badge b{font-size:1.2rem}.sheet h2{font-size:1.1rem;color:#173D08}.sheet p{color:#315621}.mini-cd{margin:12px 0 2px}.mini-cd div{background:#173D08}.sheet .lead{background:#fff;border-color:#173D08;margin-top:12px}.sheet .lead .cc,.sheet .lead input{color:#173D08}.sheet .btn-or{background:#173D08;color:#fff}.sheet .lead-msg{color:#315621}.later{color:#315621}.sheet p.fine{color:#315621}
.modal .sheet{transform:translateY(0)!important}
iconify-icon{display:inline-block;vertical-align:middle;line-height:1}
.flow{background:#F7F4ED;padding:18px 14px 14px}.steps{gap:12px}.steps li{display:grid;grid-template-columns:34px 1fr;gap:10px;background:#fff;border:1px solid #E7E1D5;border-radius:12px;padding:14px;box-shadow:0 6px 14px rgba(17,17,17,.05)}.steps li::before{display:none}.steps li:last-child{padding-bottom:14px}.steps .n{width:30px;height:30px;font-size:.85rem}.steps h3{font-size:.95rem}.steps p{font-size:.78rem}.steps .time{font-size:.68rem}.steps li:nth-child(2){margin-left:8px}.steps li:nth-child(3){margin-left:16px}.steps li:nth-child(4){margin-left:8px}.sop{margin-top:16px}
@media (max-width:700px){
  .top{padding:13px 16px}.menu-btn{display:grid}.logo-text{width:164px;height:30px}.pill-btn a{padding:10px 13px;font-size:.78rem}
  .hero{padding-top:38px}.hero-grid{display:flex;flex-direction:column;gap:28px}.hero h1{font-size:clamp(2.5rem,13vw,4rem);max-width:9ch}.hero-art{order:-1;width:100%;justify-content:flex-end}.hero-art img{width:72%;max-width:300px;box-shadow:12px 12px 0 #E8D4A7}.hero-sub{margin-top:20px}.lead{border-radius:16px;padding:5px;align-items:stretch}.lead .cc{padding-left:12px;display:flex;align-items:center}.lead input{width:1px;min-width:0}.btn-or{padding:12px 13px;font-size:.8rem}.sheet{width:min(100% - 20px,390px);padding:10px}.promo-art{min-height:190px;padding-top:82px}.promo-note{transform:scale(.9) rotate(-4deg);transform-origin:top left}.promo-art strong{font-size:clamp(2.35rem,12vw,3.5rem)}
  .svc{margin:-40px 14px 0;padding:18px 10px}.svc-row{grid-template-columns:repeat(5,1fr);gap:0}.svc-item{font-size:.62rem}.svc-ico{width:42px;height:42px;font-size:20px}.svc-ico .tag{font-size:.48rem;padding:2px 5px}.urg{margin-left:14px;margin-right:14px}.stats{margin-left:14px;margin-right:14px;padding:0}.stat{padding:13px 3px}.stat b{font-size:.95rem}.stat span{font-size:.58rem}.catalog{grid-template-columns:repeat(2,minmax(0,1fr));gap:12px;padding:14px}.pkg{flex-basis:86%}.tcard{flex-basis:84%}.rail{scroll-snap-type:none}.pkg,.tcard{scroll-snap-align:none}.sec{padding-top:54px}.sec-h{row-gap:12px}.sec-h h2{font-size:1.45rem}.sel select{min-height:42px}.final{margin-left:14px;margin-right:14px}.flow{margin-left:14px;margin-right:14px}.legal{margin-left:14px;margin-right:14px}
}
@media (min-width:701px){.hero-sub,.lead,.lead-msg,.chips{margin-left:calc((100% - 980px)/2);margin-right:calc((100% - 980px)/2)}}
</style>
</head>
<body class="bg-slate-200 font-sans text-slate-900 selection:bg-yellow-200">

<!-- Sprite ikon -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <symbol id="i-book" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5z"/><path d="M20 17v4H6.5A2.5 2.5 0 0 1 4 18.5"/><path d="M9 8h7M9 12h5"/></symbol>
  <symbol id="i-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/><path d="m8.5 11 2 2 3.5-4"/></symbol>
  <symbol id="i-bolt" viewBox="0 0 24 24"><path d="M13 2 4 14h7l-1 8 9-12h-7z"/></symbol>
  <symbol id="i-card" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20M6 15h4"/></symbol>
  <symbol id="i-grid" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="2"/><rect x="14" y="3" width="7" height="7" rx="2"/><rect x="3" y="14" width="7" height="7" rx="2"/><rect x="14" y="14" width="7" height="7" rx="2"/></symbol>
  <symbol id="i-check" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></symbol>
  <symbol id="i-shield" viewBox="0 0 24 24"><path d="M12 3 4 6v6c0 5 3.4 8.2 8 9 4.6-.8 8-4 8-9V6z"/><path d="m9 12 2 2 4-4"/></symbol>
  <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
  <symbol id="i-file" viewBox="0 0 24 24"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5"/><path d="m9 14 2 2 4-4"/></symbol>
  <symbol id="i-arrow" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></symbol>
  <symbol id="i-chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></symbol>
  <symbol id="i-star" viewBox="0 0 24 24"><path d="m12 2.5 2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.4 6.1 20.5l1.2-6.5L2.5 9.4l6.6-.9z"/></symbol>
  <symbol id="i-pin" viewBox="0 0 24 24"><path d="M12 21s7-6.2 7-11a7 7 0 1 0-14 0c0 4.8 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></symbol>
  <symbol id="i-cap" viewBox="0 0 24 24"><path d="m2 9 10-5 10 5-10 5z"/><path d="M6 11.5V16c0 1.4 2.7 3 6 3s6-1.6 6-3v-4.5"/></symbol>
  <symbol id="i-wa" viewBox="0 0 24 24"><path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.4L3 21l2.2-5.2A8.5 8.5 0 1 1 21 11.5z"/><path d="M9 8.5c.4 2.6 2.4 4.6 5 5.2l1.4-1.4-2-1-1 .8c-.8-.4-1.5-1.1-1.9-1.9l.8-1z"/></symbol>
  <symbol id="i-x" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></symbol>
  <symbol id="i-alarm" viewBox="0 0 24 24"><circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 1.5M4 4 2 6M20 4l2 2"/></symbol>
</svg>

<div class="app mx-auto max-w-[560px]" id="top">

  <!-- Strip promo (isi dari CONFIG di bawah) -->
  <div class="promo" id="promo" hidden>
    <p id="promoText"></p>
    <a href="#urgensi" aria-label="Lihat detail kuota"><iconify-icon icon="lucide:arrow-right" class="ico" aria-hidden="true"></iconify-icon></a>
  </div>

  <!-- Header -->
  <header class="top">
    <div class="brand">
      <div class="logo">
        <div class="logo-text" role="img" aria-label="Arka Institute"></div>
      </div>
    </div>
    <div class="pill-btn"><a href="#" data-voucher data-wa="Halo Arka Institute, saya ingin konsultasi publikasi jurnal.">Konsultasi</a></div>
  </header>

  <!-- Hero -->
  <section class="hero" id="hero">
    <div class="hero-grid">
      <h1>LoA 3 Hari. Legal. Tanpa Was-was.</h1>
      <div class="hero-art" aria-hidden="true"><img src="assets/journal/educenter.webp" alt="Cover jurnal Educenter"></div>
    </div>

    <p class="hero-sub">2.900+ naskah sudah ditangani, kini giliran naskah Anda. Bayar bertahap, naskah aman, proses transparan.</p>

    <form class="lead" id="leadForm" novalidate>
      <span class="cc">+62</span>
      <input id="waInput" type="tel" inputmode="numeric" autocomplete="tel-national" placeholder="812 3456 7890" aria-label="Nomor WhatsApp Anda">
      <button class="btn-or" type="submit">Konsultasi <iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></button>
    </form>
    <p class="lead-msg" id="leadMsg" role="status">Isi nomor WhatsApp Anda, lalu lanjut chat dengan admin.</p>

    <ul class="chips">
      <li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Legalitas resmi (NIB)</li>
      <li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Review 1x24 jam</li>
      <li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Bayar bertahap</li>
    </ul>
  </section>

  <!-- Layanan -->
  <section class="svc" id="layanan" aria-labelledby="svcH">
    <h2 id="svcH">Semua kebutuhan publikasi ada di Arka</h2>
    <div class="svc-row">
      <a class="svc-item" href="#katalog"><span class="svc-ico c1"><iconify-icon icon="lucide:book-open" class="ico" aria-hidden="true"></iconify-icon></span>Pengelolaan Jurnal</a>
      <a class="svc-item" href="#alur"><span class="svc-ico c2"><iconify-icon icon="lucide:search-check" class="ico" aria-hidden="true"></iconify-icon></span>Review &amp; Similarity</a>
      <a class="svc-item" href="#alur"><span class="svc-ico c3"><iconify-icon icon="lucide:zap" class="ico" aria-hidden="true"></iconify-icon><span class="tag">3 Hari</span></span>Percepatan LoA</a>
      <a class="svc-item" href="#faq"><span class="svc-ico c4"><iconify-icon icon="lucide:credit-card" class="ico" aria-hidden="true"></iconify-icon></span>Bayar Bertahap</a>
      <a class="svc-item" href="#katalog"><span class="svc-ico c5"><iconify-icon icon="lucide:layout-grid" class="ico" aria-hidden="true"></iconify-icon></span>Katalog Jurnal</a>
    </div>
  </section>

  <!-- Urgensi (diatur lewat CONFIG) -->
  <section class="urg" id="urgensi" hidden aria-label="Batas pendaftaran">
    <div class="urg-head">
      <iconify-icon icon="lucide:alarm-clock" class="ico" aria-hidden="true"></iconify-icon>
      <div>
        <h3 id="urgTitle">Pendaftaran batch ini segera ditutup</h3>
        <p id="urgSub">Naskah yang masuk lebih awal diproses lebih dulu.</p>
      </div>
    </div>
    <div class="cd" aria-live="off">
      <div><b id="cdD">00</b><span>Hari</span></div>
      <div><b id="cdH">00</b><span>Jam</span></div>
      <div><b id="cdM">00</b><span>Menit</span></div>
      <div><b id="cdS">00</b><span>Detik</span></div>
    </div>
    <div class="ticket" id="ticket" hidden>
      <div class="ticket-l"><div><small>Diskon</small><b id="tkBesar">10%</b></div></div>
      <div class="ticket-r"><span id="tkSyarat"></span>
        <div class="code"><b id="tkKode">KODE</b><button type="button" id="tkSalin">Salin</button></div>
      </div>
    </div>
    <div class="slot" id="slot" hidden>
      <div class="slot-top"><span>Kuota review terpakai</span><span id="slotTxt"></span></div>
      <div class="bar"><i id="slotBar"></i></div>
    </div>
    <a class="btn-or" href="#" data-voucher data-wa="Halo Arka Institute, saya ingin mengamankan slot publikasi untuk batch ini.">Amankan Slot Saya <iconify-icon icon="lucide:arrow-up-right" class="ico" aria-hidden="true"></iconify-icon></a>
  </section>

  <!-- Statistik -->
  <section class="stats" aria-label="Angka Arka Institute">
    <div class="stat"><b>2.900+</b><span>Naskah ditangani</span></div>
    <div class="stat"><b>3 Hari</b><span>Percepatan LoA</span></div>
    <div class="stat"><b>100%</b><span>Legalitas tertelusuri</span></div>
    <div class="stat"><b>15+</b><span>Kampus mitra</span></div>
  </section>

  <!-- Paket populer -->
  <section class="sec" id="paket">
    <div class="sec-h">
      <h2><iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>Layanan populer untuk</h2>
      <label class="sel">
        <select id="segSel" aria-label="Pilih profil Anda">
          <option value="dosen">Dosen</option>
          <option value="peneliti">Peneliti</option>
          <option value="mahasiswa">Mahasiswa</option>
        </select>
        <iconify-icon icon="lucide:chevron-down" class="ico" aria-hidden="true"></iconify-icon>
      </label>
    </div>
    <div class="rail" id="pkgRail"></div>
  </section>

  <!-- Katalog jurnal -->
  <section class="sec" id="katalog">
    <div class="sec-h"><h2>Katalog jurnal Arka Institute</h2></div>
    <p class="sec-p">Pilih jurnal sesuai bidang naskah Anda. Ragu memilih? Admin bantu cocokkan.</p>
    <div class="filters" id="filters" role="group" aria-label="Filter bidang jurnal"></div>
    <div class="catalog" id="catalog"></div>
    <p class="cat-note">Tidak menemukan bidang naskah Anda? <a href="#" data-wa="Halo Arka Institute, saya ingin tahu jurnal yang cocok untuk naskah saya.">Tanya admin untuk rekomendasi jurnal</a></p>
  </section>

  <!-- Alur -->
  <section class="sec" id="alur">
    <div class="flow">
      <h2>Dari draf mentah hingga terbit resmi</h2>
      <p>Proses transparan di setiap tahap, dengan pendampingan sampai DOI aktif.</p>
      <ol class="steps">
        <li><span class="n">1</span><div><h3>Kirim naskah</h3><p>Kirim naskah dan lakukan konsultasi awal. Kami bantu pilihkan jurnal yang cocok.</p></div></li>
        <li><span class="n">2</span><div><h3>Review &amp; similarity</h3><p>Pemeriksaan kelayakan naskah, format, dan tingkat kemiripan (Turnitin).</p><span class="time">Review 1x24 jam</span></div></li>
        <li><span class="n">3</span><div><h3>Editorial &amp; LoA</h3><p>Proses editorial berjalan, lalu LoA diterbitkan.</p><span class="time">Percepatan LoA 3 hari</span></div></li>
        <li><span class="n">4</span><div><h3>Publish &amp; DOI</h3><p>Artikel terbit di jurnal resmi dan DOI aktif untuk dikutip.</p></div></li>
      </ol>
      <div class="sop">
        <span>Butuh SOP lengkap penerbitan dan format naskah?</span>
        <a href="#" id="sopLink" data-wa="Halo Arka Institute, saya ingin meminta SOP penerbitan dan format naskah.">Minta SOP</a>
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="sec" id="testimoni">
    <div class="sec-h"><h2>Kata mereka yang sudah terbit</h2></div>
    <p class="sec-p">Cerita dari dosen, peneliti, dan mahasiswa yang naskahnya kami dampingi.</p>
    <div class="rail" id="testiRail"></div>
  </section>

  <!-- Legalitas -->
  <section class="sec" id="legalitas">
    <div class="legal">
      <div class="legal-top">
        <div class="shield"><iconify-icon icon="lucide:shield-check" class="ico" aria-hidden="true"></iconify-icon></div>
        <div>
          <h2>Legalitas resmi, bisa Anda periksa sendiri</h2>
          <p>Jangan ragu menelusuri sebelum menyerahkan naskah.</p>
        </div>
      </div>
      <div class="nib"><small>Nomor Induk Berusaha (NIB)</small><b>1103220012668</b></div>
      <ul class="legal-list">
        <li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>NIB dapat ditelusuri melalui sistem OSS pemerintah.</li>
        <li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Alamat kantor jelas: Jatinangor, Sumedang.</li>
        <li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Sistem pembayaran bertahap, jadi Anda tidak membayar penuh di awal.</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="sec" id="faq">
    <div class="sec-h"><h2>Pertanyaan umum</h2></div>
    <div class="faq">
      <details>
        <summary>Apakah Arka Institute memiliki legalitas resmi?<iconify-icon icon="lucide:chevron-down" class="ico" aria-hidden="true"></iconify-icon></summary>
        <div>Ya. Arka Institute terdaftar dengan NIB 1103220012668 yang dapat Anda telusuri melalui sistem OSS pemerintah. Kami mendorong Anda memeriksanya sebelum mengirim naskah.</div>
      </details>
      <details>
        <summary>Bagaimana sistem pembayarannya?<iconify-icon icon="lucide:chevron-down" class="ico" aria-hidden="true"></iconify-icon></summary>
        <div>Pembayaran dilakukan bertahap sesuai tahapan proses, bukan sekaligus di awal. Rincian skema dan biaya disampaikan admin saat konsultasi, sebelum Anda memutuskan lanjut.</div>
      </details>
      <details>
        <summary>Berapa lama proses mendapatkan LoA?<iconify-icon icon="lucide:chevron-down" class="ico" aria-hidden="true"></iconify-icon></summary>
        <div>Targetnya percepatan LoA dalam 3 hari setelah naskah memenuhi syarat. Review awal berjalan 1x24 jam. Kecepatan sebenarnya bergantung pada kesiapan naskah dan hasil review.</div>
      </details>
      <details>
        <summary>Apakah ada jaminan artikel pasti terbit?<iconify-icon icon="lucide:chevron-down" class="ico" aria-hidden="true"></iconify-icon></summary>
        <div>Keputusan akhir tetap pada proses review editorial, jadi tidak ada pihak jujur yang bisa menjanjikan 100%. Yang kami lakukan: memeriksa kelayakan sejak awal, memilihkan jurnal yang sesuai, dan mendampingi revisi.</div>
      </details>
      <details>
        <summary>Apa saja layanan tambahan yang tersedia?<iconify-icon icon="lucide:chevron-down" class="ico" aria-hidden="true"></iconify-icon></summary>
        <div>Selain pengelolaan jurnal, tersedia pemeriksaan similarity (Turnitin) dan pendampingan naskah. Tanyakan ke admin untuk layanan lain yang sesuai kebutuhan Anda.</div>
      </details>
    </div>
  </section>

  <!-- CTA akhir -->
  <section class="final">
    <h2>Naskah Anda pantas terbit di jurnal bereputasi</h2>
    <p>Ceritakan naskah Anda ke admin. Konsultasi dulu, putuskan belakangan.</p>
    <a class="btn-wa" href="#" data-voucher data-wa="Halo Arka Institute, saya ingin konsultasi naskah saya."><iconify-icon icon="lucide:message-circle" class="ico" aria-hidden="true"></iconify-icon>Chat Admin via WhatsApp</a>
    <small id="finalMini">Bayar bertahap • Legalitas resmi • Review 1x24 jam</small>
  </section>

  <footer>
    <b>Arka Institute</b>
    <div class="row"><iconify-icon icon="lucide:map-pin" class="ico" aria-hidden="true"></iconify-icon>Jatinangor, Sumedang</div>
    <div style="margin-top:4px">NIB 1103220012668</div>
    <div style="margin-top:10px">&copy; 2026 Arka Institute. Hak cipta dilindungi.</div>
  </footer>

  <!-- Dock bawah -->
  <div class="dock" id="dock">
    <div class="dock-t"><b>Naskah siap terbit?</b><span>Konsultasi dulu, tanpa komitmen</span></div>
    <a class="btn-wa" href="#" data-voucher data-wa="Halo Arka Institute, saya ingin konsultasi naskah saya."><iconify-icon icon="lucide:message-circle" class="ico" aria-hidden="true"></iconify-icon>Chat Admin</a>
  </div>
</div>

<!-- Pop up diskon -->
<div class="modal" id="modal" role="dialog" aria-modal="true" aria-labelledby="mTitle" aria-hidden="true">
  <div class="sheet">
    <div class="promo-art" aria-hidden="true">
      <div class="promo-note"><b>KEY POUCH</b><span>YOUR NEXT<br>CHAPTER<br>STARTS HERE</span></div>
      <span class="promo-tab welcome">Welcome</span>
      <span class="promo-tab claim">Claim</span>
      <span class="promo-tab info">Info</span>
      <strong>WAH, ADA<br>PROMO NIH!</strong>
      <em>ARKA INSTITUTE</em>
    </div>
    <button class="x" type="button" id="mClose" aria-label="Tutup pop up"><iconify-icon icon="lucide:x" class="ico" aria-hidden="true"></iconify-icon></button>
    <div class="badge"><div><small>Diskon</small><b id="mBesar">10%</b></div></div>
    <h2 id="mTitle">Tunggu dulu, ada diskon untuk naskah Anda</h2>
    <p id="mSub">Isi nomor WhatsApp Anda untuk klaim diskon sebelum waktunya habis.</p>
    <div class="mini-cd" id="miniCd" aria-live="off">
      <div><b id="mD">00</b><span>Hari</span></div>
      <div><b id="mH">00</b><span>Jam</span></div>
      <div><b id="mM">00</b><span>Menit</span></div>
      <div><b id="mS">00</b><span>Detik</span></div>
    </div>
    <form class="lead" id="popForm" novalidate>
      <span class="cc">+62</span>
      <input id="popInput" type="tel" inputmode="numeric" autocomplete="tel-national" placeholder="812 3456 7890" aria-label="Nomor WhatsApp Anda">
      <button class="btn-or" type="submit">Klaim <iconify-icon icon="lucide:arrow-up-right" class="ico" aria-hidden="true"></iconify-icon></button>
    </form>
    <p class="lead-msg" id="popMsg" role="status">Anda akan diarahkan ke WhatsApp admin untuk klaim diskon.</p>
    <button class="later" type="button" id="mLater">Nanti saja</button>
    <p class="fine" id="mFine"></p>
  </div>
</div>

<script>
/* =====================================================
   KONFIGURASI: SESUAIKAN SEBELUM TAYANG
   ===================================================== */
var CONFIG = {
  // Nomor WhatsApp admin, format internasional tanpa + dan tanpa spasi. Contoh: "6281234567890"
  waNumber: (window.ARKA_SERVER_CONFIG && window.ARKA_SERVER_CONFIG.waNumber) || "6281110000298",

  // URUGENSI: isi hanya jika batas/kuota ini benar-benar berlaku.
  // Kosongkan deadline ("") untuk menyembunyikan strip promo dan kotak hitung mundur.
  deadline: (window.ARKA_SERVER_CONFIG && window.ARKA_SERVER_CONFIG.deadline) || "2026-10-31T23:59:00+07:00",
  promoText: "KUOTA REVIEW BATCH OKTOBER",
  promoSub: "Daftar sebelum 31 Oktober 2026",
  urgTitle: "Pendaftaran batch Oktober segera ditutup",
  urgSub: "Naskah yang masuk lebih awal diproses lebih dulu.",

  // DISKON: isi sesuai penawaran yang benar-benar Anda berikan. aktif:false untuk mematikan.
  // Diskon dan pop up otomatis hilang saat batas waktu (deadline) lewat.
  diskon: {
    aktif: true,
    besar: "10%",        // tampil sebagai "Diskon 10%"
    kode: "ARKA10",      // kode voucher; kosongkan ("") jika tanpa kode
    syarat: "Berlaku untuk pendaftaran sebelum batas waktu. Ketentuan lengkap dijelaskan admin.",
    popup: true,         // false = tanpa pop up
    popupDelayDetik: 0   // popup tampil setiap refresh
  },

  // Kuota (opsional). Isi angka nyata atau biarkan null untuk menyembunyikan bar kuota.
  slotsTotal: null,
  slotsLeft: null,

  // Tautan SOP PDF (opsional). Jika diisi, tombol "Minta SOP" membuka PDF langsung.
  sopUrl: ""
};

/* Data jurnal: nama dan bidang diambil dari katalog di LP lama. Mohon dicek ulang. */
var JURNAL = [
  {n:"Educumer", b:"Pendidikan", c:["#C2410C","#7C2D12"], i:"assets/journal/educenter.webp"},
  {n:"Cassie", b:"Sosial & Humaniora", c:["#B91C1C","#7F1D1D"], i:"assets/journal/cessie.webp"},
  {n:"Keynesia", b:"Ekonomi & Bisnis", c:["#1E3A8A","#0F1F4D"], i:"assets/journal/keynesia.webp"},
  {n:"Hexatech", b:"Teknologi", c:["#1D4ED8","#1E1B8A"], i:"assets/journal/hexatech.webp"},
  {n:"Co-Creation", b:"Ekonomi & Bisnis", c:["#0F766E","#134E4A"], i:"assets/journal/cocreation.webp"},
  {n:"Nautical", b:"Teknologi", c:["#0369A1","#082F49"], i:"assets/journal/nautical.webp"},
  {n:"Florone", b:"Kesehatan & Sains", c:["#15803D","#14532D"], i:"assets/journal/florona.webp"},
  {n:"Historia", b:"Sosial & Humaniora", c:["#4D7C0F","#365314"], i:"assets/journal/histeria.webp"},
  {n:"Ecopus / WoS", b:"Internasional", c:["#D97706","#92400E"], i:"assets/journal/scopus.webp"}
];

/* TESTIMONI: ganti dengan testimoni ASLI pelanggan (nama dan izin tampil dari yang bersangkutan).
   Entri contoh:true otomatis diberi label "Contoh tampilan". Hapus properti contoh setelah diganti.
   Bisa juga memakai tangkapan layar chat: tambahkan  gambar:"foto/testimoni1.jpg"  */
var TESTIMONI = [
  {contoh:true, nama:"Nama Pelanggan", peran:"Dosen \u2022 Nama Kampus", jurnal:"Educumer", bintang:5, warna:"#1565F5",
   teks:"Tulis kutipan asli di sini. Contoh gaya: prosesnya jelas dari awal, admin responsif, dan LoA keluar sesuai target."},
  {contoh:true, nama:"Nama Pelanggan", peran:"Peneliti \u2022 Nama Institusi", jurnal:"Keynesia", bintang:5, warna:"#0E9F86",
   teks:"Tulis kutipan asli di sini. Ceritakan hal spesifik yang paling membantu, misalnya pendampingan revisi."},
  {contoh:true, nama:"Nama Pelanggan", peran:"Mahasiswa \u2022 Nama Kampus", jurnal:"Hexatech", bintang:5, warna:"#D6336C",
   teks:"Tulis kutipan asli di sini. Contoh gaya: pembayaran bertahap sangat membantu, dan alurnya mudah diikuti."}
];

var SEGMEN = {
  dosen:[
    {tag:"Kenaikan pangkat", t:"Percepatan LoA 3 hari", d:"Naskah dikawal dari review sampai LoA agar target administrasi Anda tidak molor.", l:["Review awal 1x24 jam","Pendampingan revisi"]},
    {tag:"Jurnal terverifikasi", t:"Pilih jurnal yang tepat", d:"Cocokkan naskah dengan cakupan jurnal di katalog Arka sebelum submit.", l:["Rekomendasi jurnal sesuai bidang","Format naskah disesuaikan"]},
    {tag:"Aman dari plagiasi", t:"Cek similarity Turnitin", d:"Ketahui tingkat kemiripan naskah lebih dulu, sebelum masuk proses editorial.", l:["Laporan similarity","Saran perbaikan"]}
  ],
  peneliti:[
    {tag:"Riset layak terbit", t:"Pengelolaan jurnal langsung", d:"Naskah ditangani dari draf sampai terbit resmi dengan DOI aktif.", l:["Alur transparan 4 tahap","Publish dan DOI"]},
    {tag:"Jalur internasional", t:"Ecopus / WoS", d:"Tersedia jalur jurnal internasional di katalog. Tanyakan kecocokan naskah Anda.", l:["Konsultasi kecocokan naskah","Pendampingan revisi"]},
    {tag:"Reputasi terjaga", t:"Legalitas bisa diperiksa", d:"NIB resmi dan alamat kantor jelas, sehingga Anda tenang menyerahkan naskah.", l:["NIB 1103220012668","Pembayaran bertahap"]}
  ],
  mahasiswa:[
    {tag:"Syarat lulus", t:"LoA dalam 3 hari", d:"Butuh LoA untuk syarat kelulusan? Kami bantu percepat prosesnya.", l:["Target percepatan 3 hari","Pendampingan format naskah"]},
    {tag:"Ramah kantong", t:"Bayar bertahap", d:"Biaya tidak harus dibayar penuh di awal. Skema dijelaskan admin saat konsultasi.", l:["Rincian biaya transparan","Tanpa komitmen saat konsultasi"]},
    {tag:"Bingung mulai dari mana", t:"Konsultasi naskah", d:"Ceritakan topik dan tahap naskah Anda, kami arahkan langkah berikutnya.", l:["Pilih jurnal yang cocok","Panduan SOP penerbitan"]}
  ]
};

/* ---------- Util ---------- */
var $ = function(s,r){return (r||document).querySelector(s)};
var $$ = function(s,r){return Array.prototype.slice.call((r||document).querySelectorAll(s))};
function pad(n){return n<10?"0"+n:""+n}
function esc(s){return String(s).replace(/[&<>"]/g,function(c){return {"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;"}[c]})}
function track(ev,data){ try{ if(window.fbq) fbq('track',ev,data||{}); }catch(e){} }
function waLink(msg){
  return "https://wa.me/"+CONFIG.waNumber+"?text="+encodeURIComponent(msg);
}
function waReady(){ return !/X/i.test(CONFIG.waNumber); }
function bindWA(root){
  $$("[data-wa]",root).forEach(function(a){
    a.href = waLink(a.getAttribute("data-wa") + (a.hasAttribute("data-voucher") ? voucherText() : ""));
    if(a.dataset.bound) return; a.dataset.bound = 1;
    a.setAttribute("target","_blank"); a.setAttribute("rel","noopener");
    a.addEventListener("click",function(e){
      if(!waReady()){ e.preventDefault(); alert("Nomor WhatsApp belum diatur. Edit CONFIG.waNumber di bagian script."); return; }
      track("Contact");
    });
  });
}

/* ---------- Diskon, urgensi, hitung mundur ---------- */
var DK = CONFIG.diskon || {};
var DL = CONFIG.deadline ? new Date(CONFIG.deadline).getTime() : NaN;
var timerAktif = !isNaN(DL) && DL > Date.now();
/* Diskon otomatis mati bila batas waktu sudah lewat */
var diskonAktif = !!DK.aktif && (!CONFIG.deadline || timerAktif);

function voucherText(){
  return (diskonAktif && DK.kode) ? " Saya ingin memakai kode voucher " + DK.kode + "." : "";
}

function salin(t, done){
  function fallback(){
    var a = document.createElement("textarea");
    a.value = t; a.setAttribute("readonly", "");
    a.style.position = "fixed"; a.style.opacity = "0";
    document.body.appendChild(a); a.select();
    try{ if(document.execCommand("copy")) done(); }catch(e){}
    document.body.removeChild(a);
  }
  if(navigator.clipboard && navigator.clipboard.writeText){
    navigator.clipboard.writeText(t).then(done, fallback);
  } else { fallback(); }
}

(function(){
  var promo = $("#promo"), urg = $("#urgensi");
  if(!timerAktif && !diskonAktif) return;

  urg.hidden = false;
  $("#urgTitle").textContent = CONFIG.urgTitle;
  $("#urgSub").textContent = CONFIG.urgSub;
  if(!timerAktif) $(".cd", urg).hidden = true;

  /* Strip promo di paling atas */
  var baris1 = diskonAktif ? "DISKON " + DK.besar + " UNTUK PENDAFTARAN BATCH INI" : CONFIG.promoText;
  var baris2 = diskonAktif ? CONFIG.promoText + (CONFIG.promoSub ? " \u2022 " + CONFIG.promoSub : "") : CONFIG.promoSub;
  promo.hidden = false;
  $("#promoText").innerHTML = esc(baris1) + (baris2 ? "<small>" + esc(baris2) + "</small>" : "");

  /* Tiket diskon */
  if(diskonAktif){
    $("#ticket").hidden = false;
    $("#tkBesar").textContent = DK.besar;
    $("#tkSyarat").textContent = DK.syarat || "";
    if(DK.kode){
      $("#tkKode").textContent = DK.kode;
      $("#tkSalin").addEventListener("click", function(){
        var b = this;
        salin(DK.kode, function(){ b.textContent = "Tersalin"; setTimeout(function(){ b.textContent = "Salin"; }, 1800); });
      });
    } else {
      $(".code", urg).hidden = true;
    }
    var chips = $(".chips");
    if(chips){
      var li = document.createElement("li");
      li.innerHTML = '<iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Diskon ' + esc(DK.besar) + ' batch ini';
      chips.insertBefore(li, chips.firstChild);
    }
  } else {
    $("#ticket").hidden = true;
  }

  /* Bar kuota (opsional) */
  if(CONFIG.slotsTotal && CONFIG.slotsLeft != null){
    var used = CONFIG.slotsTotal - CONFIG.slotsLeft;
    $("#slot").hidden = false;
    $("#slotTxt").textContent = "Sisa " + CONFIG.slotsLeft + " dari " + CONFIG.slotsTotal + " slot";
    setTimeout(function(){ $("#slotBar").style.width = Math.max(4, Math.min(100, used / CONFIG.slotsTotal * 100)) + "%"; }, 300);
  }

  /* Hitung mundur: satu batas waktu yang sama untuk semua pengunjung */
  if(!timerAktif) return;
  var ids = ["cdD","cdH","cdM","cdS","mD","mH","mM","mS"];
  function tick(){
    var r = DL - Date.now();
    if(r <= 0){
      promo.hidden = true; urg.hidden = true; diskonAktif = false;
      closeModal(); clearInterval(t); return;
    }
    var s = Math.floor(r / 1000);
    var v = [pad(Math.floor(s / 86400)), pad(Math.floor(s % 86400 / 3600)), pad(Math.floor(s % 3600 / 60)), pad(s % 60)];
    for(var i = 0; i < 4; i++){
      var a = document.getElementById(ids[i]), b = document.getElementById(ids[i + 4]);
      if(a) a.textContent = v[i];
      if(b) b.textContent = v[i];
    }
  }
  tick();
  var t = setInterval(tick, 1000);
})();

/* ---------- Pop up diskon ---------- */
var lastFocus = null;
function openModal(){
  var m = document.getElementById("modal");
  if(!diskonAktif || !m || m.classList.contains("show")) return;
  lastFocus = document.activeElement;
  m.classList.add("show");
  m.setAttribute("aria-hidden", "false");
  document.body.style.overflow = "hidden";
  setTimeout(function(){ var i = document.getElementById("popInput"); if(i) i.focus({preventScroll:true}); }, 350);
  track("ViewContent", {content_name:"popup_diskon"});
}
function closeModal(){
  var m = document.getElementById("modal");
  if(!m || !m.classList.contains("show")) return;
  m.classList.remove("show");
  m.setAttribute("aria-hidden", "true");
  document.body.style.overflow = "";
  if(lastFocus && lastFocus.focus) lastFocus.focus({preventScroll:true});
}

(function(){
  var m = document.getElementById("modal");
  if(!m) return;
  if(!diskonAktif || DK.popup === false){ m.parentNode.removeChild(m); return; }

  document.getElementById("mBesar").textContent = DK.besar;
  document.getElementById("mFine").textContent = DK.syarat || "";
  document.getElementById("mSub").textContent = timerAktif
    ? "Isi nomor WhatsApp Anda untuk klaim diskon sebelum waktunya habis."
    : "Isi nomor WhatsApp Anda untuk klaim diskon ini.";
  if(!timerAktif) document.getElementById("miniCd").hidden = true;

  document.getElementById("mClose").addEventListener("click", closeModal);
  document.getElementById("mLater").addEventListener("click", closeModal);
  m.addEventListener("click", function(e){ if(e.target === m) closeModal(); });
  document.addEventListener("keydown", function(e){ if(e.key === "Escape") closeModal(); });

  var fired = false, timer;
  function fire(){
    if(fired) return;
    var ae = document.activeElement;
    if(ae && ae.id === "waInput"){ timer = setTimeout(fire, 6000); return; } /* jangan ganggu yang sedang mengetik */
    fired = true; clearTimeout(timer); openModal();
  }
  timer = setTimeout(fire, Math.max(0, Number(DK.popupDelayDetik) || 0) * 1000);
  document.addEventListener("mouseout", function(e){ if(!e.relatedTarget && e.clientY <= 0) fire(); }); /* desktop: kursor keluar lewat atas */
})();

/* ---------- Form nomor WhatsApp (hero dan pop up) ---------- */
function setupLead(fid, iid, mid, defaultMsg, buildText, tutupModal){
  var form = document.getElementById(fid), input = document.getElementById(iid), msg = document.getElementById(mid);
  if(!form) return;
  function norm(v){
    var d = v.replace(/\D/g, "");
    if(d.indexOf("62") === 0) d = d.slice(2);
    if(d.indexOf("0") === 0) d = d.slice(1);
    return d;
  }
  input.addEventListener("input", function(){ msg.className = "lead-msg"; msg.textContent = defaultMsg; });
  form.addEventListener("submit", function(e){
    e.preventDefault();
    var n = norm(input.value);
    if(n.length < 9 || n.length > 13 || n.charAt(0) !== "8"){
      msg.className = "lead-msg err";
      msg.textContent = "Nomor belum sesuai. Contoh: 812 3456 7890 (tanpa 0 di depan).";
      input.focus(); return;
    }
    if(!waReady()){ alert("Nomor WhatsApp admin belum diatur. Edit CONFIG.waNumber di bagian script."); return; }
    track("Lead", tutupModal ? {content_name:"popup_diskon"} : {});
    msg.className = "lead-msg"; msg.textContent = "Membuka WhatsApp admin...";
    window.open(waLink(buildText(n)), "_blank", "noopener");
    if(tutupModal) setTimeout(closeModal, 600);
  });
}
setupLead("leadForm", "waInput", "leadMsg", "Isi nomor WhatsApp Anda, lalu lanjut chat dengan admin.", function(n){
  return "Halo Arka Institute, saya ingin konsultasi publikasi jurnal." + voucherText() + " Nomor WhatsApp saya +62" + n + ".";
}, false);
setupLead("popForm", "popInput", "popMsg", "Anda akan diarahkan ke WhatsApp admin untuk klaim diskon.", function(n){
  return "Halo Arka Institute, saya ingin klaim diskon " + DK.besar + " untuk publikasi jurnal." + voucherText() + " Nomor WhatsApp saya +62" + n + ".";
}, true);

/* ---------- Testimonial ---------- */
(function(){
  var rail = $("#testiRail"), sec = $("#testimoni");
  var items = TESTIMONI.filter(function(t){ return t && (t.teks || t.gambar); });
  if(!items.length){ sec.hidden = true; return; }
  rail.innerHTML = items.map(function(t){
    var ini = (t.nama || "?").split(/\s+/).slice(0, 2).map(function(w){ return w.charAt(0); }).join("").toUpperCase();
    var n = t.bintang || 5, stars = "";
    for(var i = 0; i < n; i++) stars += '<iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>';
    return '<article class="tcard">' +
      (t.contoh ? '<span class="contoh">Contoh tampilan, ganti dengan testimoni asli</span>' : '') +
      '<div class="stars" role="img" aria-label="Penilaian ' + n + ' dari 5">' + stars + '</div>' +
      (t.gambar ? '<img class="tshot" src="' + esc(t.gambar) + '" alt="Tangkapan layar testimoni dari ' + esc(t.nama || "pelanggan") + '" loading="lazy">' : '') +
      (t.teks ? '<q>' + esc(t.teks) + '</q>' : '') +
      (t.jurnal ? '<span class="tjr"><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Terbit di ' + esc(t.jurnal) + '</span>' : '') +
      '<div class="twho"><span class="av" style="background:' + esc(t.warna || "#1565F5") + '">' + esc(ini) + '</span>' +
      '<div><b>' + esc(t.nama || "") + '</b><span>' + esc(t.peran || "") + '</span></div></div>' +
    '</article>';
  }).join("");
})();

/* ---------- Layanan populer per profil ---------- */
(function(){
  var rail = $("#pkgRail"), sel = $("#segSel");
  function render(){
    var key = sel.value;
    rail.innerHTML = SEGMEN[key].map(function(p){
      return '<article class="pkg">'+
        '<span class="pkg-tag"><iconify-icon icon="lucide:graduation-cap" class="ico" aria-hidden="true"></iconify-icon>'+esc(p.tag)+'</span>'+ 
        '<h3>'+esc(p.t)+'</h3><p>'+esc(p.d)+'</p>'+
        '<ul>'+p.l.map(function(x){return '<li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>'+esc(x)+'</li>'}).join("")+'</ul>'+ 
        '<a class="link" href="#" data-wa="Halo Arka Institute, saya '+esc(key)+' dan tertarik dengan layanan: '+esc(p.t)+'.">Konsultasikan <iconify-icon icon="lucide:arrow-up-right" class="ico" aria-hidden="true"></iconify-icon></a>'+ 
      '</article>';
    }).join("");
    rail.scrollLeft = 0;
    bindWA(rail);
  }
  sel.addEventListener("change",render);
  render();
})();

/* ---------- Katalog jurnal + filter ---------- */
(function(){
  var cat = $("#catalog"), fil = $("#filters");
  var bidang = ["Semua"].concat(JURNAL.map(function(j){return j.b}).filter(function(v,i,a){return a.indexOf(v)===i}));
  fil.innerHTML = bidang.map(function(b,i){
    return '<button type="button" aria-pressed="'+(i===0)+'" data-f="'+esc(b)+'">'+esc(b)+'</button>';
  }).join("");
  cat.innerHTML = JURNAL.map(function(j){
    return '<article class="jr" data-b="'+esc(j.b)+'">'+
      '<div class="cover">'+
        '<img src="'+esc(j.i)+'" alt="Sampul jurnal '+esc(j.n)+'" loading="lazy">'+
      '</div>'+
      '<div class="jr-meta"><b>'+esc(j.n)+'</b><span>'+esc(j.b)+'</span></div>'+
      '<a class="btn-line" href="#" data-wa="Halo Arka Institute, saya tertarik menerbitkan naskah di jurnal '+esc(j.n)+'. Bisa dibantu cek kecocokannya?"><iconify-icon icon="lucide:message-circle" class="ico" aria-hidden="true"></iconify-icon>Cek kecocokan</a>'+ 
    '</article>';
  }).join("");
  bindWA(cat);
  fil.addEventListener("click",function(e){
    var b = e.target.closest("button"); if(!b) return;
    $$("button",fil).forEach(function(x){x.setAttribute("aria-pressed", x===b)});
    var f = b.getAttribute("data-f");
    $$(".jr",cat).forEach(function(c){ c.hidden = !(f==="Semua" || c.getAttribute("data-b")===f); });
  });
})();

/* ---------- SOP ---------- */
(function(){
  var a = $("#sopLink");
  if(CONFIG.sopUrl){ a.removeAttribute("data-wa"); a.href = CONFIG.sopUrl; a.target="_blank"; a.rel="noopener"; a.textContent="Unduh SOP"; }
})();

/* ---------- Dock bawah: muncul setelah scroll ---------- */
(function(){
  var dock = $("#dock"), hero = $("#hero");
  function check(){
    var past = hero.getBoundingClientRect().bottom < 40;
    dock.classList.toggle("show", past);
  }
  window.addEventListener("scroll",check,{passive:true}); check();
})();

bindWA(document);
</script>
</body>
</html>

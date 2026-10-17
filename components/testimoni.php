<?php
$testiImages = [
  'testi ai.png',
  'testi ai-1.png',
  'testi ai-2.png',
  'testi ai-3.png',
  'testi ai-4.png',
  'testi ai-5.png',
  'testi ai-6.png',
  'testi ai-7.png',
  'testi ai-8.png',
  'testi ai-9.png',
  'testi ai-10.png',
  'testi ai-11.png'
];
?>
<!-- Testimonial -->
<section class="sec" id="testimoni">
  <div class="sec-h">
    <h2>Kata mereka yang sudah terbit</h2>
  </div>
  <p class="sec-p">Bukti asli kepuasan dosen, peneliti, dan mahasiswa yang naskahnya kami dampingi hingga LoA & terbit.</p>

  <div class="testi-rail-wrapper">
    <div class="rail testi-cards-rail" id="testiRail">
      <?php foreach ($testiImages as $idx => $img): ?>
        <article class="testi-card">
          <div class="testi-card-badge">
            <span class="testi-verified">
              <iconify-icon icon="lucide:badge-check" class="ico" aria-hidden="true"></iconify-icon> Terverifikasi
            </span>
            <div class="stars" role="img" aria-label="Penilaian 5 dari 5">
              <iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>
              <iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>
              <iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>
              <iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>
              <iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>
            </div>
          </div>
          
          <div class="testi-img-box" onclick="openTestiLightbox('assets/testi/<?= rawurlencode($img) ?>')">
            <img 
              class="testi-img" 
              src="assets/testi/<?= rawurlencode($img) ?>" 
              alt="Bukti testimoni client Arka Institute <?= $idx + 1 ?>" 
              loading="lazy"
            >
            <div class="testi-zoom-hint">
              <iconify-icon icon="lucide:zoom-in" class="ico" aria-hidden="true"></iconify-icon>
              <span>Perbesar</span>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    
    <div class="testi-nav-hint">
      <iconify-icon icon="lucide:move-horizontal" class="ico" aria-hidden="true"></iconify-icon>
      <span>Geser untuk melihat testimoni lainnya (<?= count($testiImages) ?> bukti)</span>
    </div>
  </div>
</section>

<!-- Lightbox Modal untuk melihat testimoni resolusi penuh -->
<div id="testiLightbox" class="testi-lightbox" onclick="closeTestiLightbox(event)">
  <div class="testi-lightbox-dialog">
    <button type="button" class="testi-lightbox-close" onclick="closeTestiLightbox()" aria-label="Tutup">
      <iconify-icon icon="lucide:x" class="ico" aria-hidden="true"></iconify-icon>
    </button>
    <img id="testiLightboxImg" src="" alt="Testimoni Client Arka Institute">
  </div>
</div>

<style>
.testi-cards-rail {
  display: flex;
  gap: 14px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  padding: 12px 16px 18px;
  -webkit-overflow-scrolling: touch;
}
.testi-card {
  flex: 0 0 260px;
  max-width: 78vw;
  scroll-snap-align: start;
  background: #ffffff;
  border: 1px solid #E2E8F0;
  border-radius: 20px;
  padding: 12px;
  box-shadow: 0 8px 20px rgba(14, 42, 107, 0.06);
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.testi-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(14, 42, 107, 0.12);
}
.testi-card-badge {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  padding: 2px 4px;
}
.testi-verified {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.72rem;
  font-weight: 700;
  color: #0E7F6C;
  background: #E3F8F4;
  padding: 3px 8px;
  border-radius: 999px;
}
.testi-img-box {
  position: relative;
  width: 100%;
  border-radius: 14px;
  overflow: hidden;
  background: #111827;
  cursor: pointer;
}
.testi-img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 14px;
  transition: transform 0.3s ease;
}
.testi-img-box:hover .testi-img {
  transform: scale(1.02);
}
.testi-zoom-hint {
  position: absolute;
  bottom: 10px;
  right: 10px;
  background: rgba(17, 24, 39, 0.78);
  backdrop-filter: blur(4px);
  color: #ffffff;
  font-size: 0.68rem;
  font-weight: 600;
  padding: 4px 10px;
  border-radius: 999px;
  display: flex;
  align-items: center;
  gap: 5px;
  pointer-events: none;
  opacity: 0.9;
}
.testi-nav-hint {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  font-size: 0.75rem;
  color: #64748B;
  font-weight: 600;
  margin-top: 4px;
}
.testi-lightbox {
  position: fixed;
  inset: 0;
  background: rgba(15, 23, 42, 0.88);
  backdrop-filter: blur(6px);
  z-index: 9999;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 16px;
}
.testi-lightbox.active {
  display: flex;
}
.testi-lightbox-dialog {
  position: relative;
  max-width: 480px;
  width: 100%;
  max-height: 90vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.testi-lightbox-dialog img {
  max-width: 100%;
  max-height: 85vh;
  object-fit: contain;
  border-radius: 16px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}
.testi-lightbox-close {
  position: absolute;
  top: -14px;
  right: -14px;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #ffffff;
  border: none;
  color: #1E293B;
  font-size: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(0,0,0,0.25);
  z-index: 10;
}
</style>

<script>
function openTestiLightbox(src) {
  var lb = document.getElementById('testiLightbox');
  var img = document.getElementById('testiLightboxImg');
  if (lb && img) {
    img.src = src;
    lb.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}
function closeTestiLightbox(e) {
  if (!e || e.target.id === 'testiLightbox' || e.target.closest('.testi-lightbox-close')) {
    var lb = document.getElementById('testiLightbox');
    if (lb) {
      lb.classList.remove('active');
      document.body.style.overflow = '';
    }
  }
}
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeTestiLightbox();
});
</script>

<!-- Pop up diskon voucher -->
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
    <button class="x" type="button" id="mClose" aria-label="Tutup pop up"><iconify-icon icon="lucide:x" class="ico"
        aria-hidden="true"></iconify-icon></button>
    <div class="badge">
      <div><small>Diskon</small><b id="mBesar">10%</b></div>
    </div>
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
      <input id="popInput" type="tel" inputmode="numeric" autocomplete="tel-national" placeholder="812 3456 7890"
        aria-label="Nomor WhatsApp Anda">
      <button class="btn-or" type="submit">Klaim <iconify-icon icon="lucide:arrow-up-right" class="ico"
          aria-hidden="true"></iconify-icon></button>
    </form>
    <p class="lead-msg" id="popMsg" role="status">Anda akan diarahkan ke WhatsApp admin untuk klaim diskon.</p>
    <button class="later" type="button" id="mLater">Nanti saja</button>
    <p class="fine" id="mFine"></p>
  </div>
</div>

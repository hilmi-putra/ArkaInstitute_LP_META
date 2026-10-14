<!-- Urgensi (diatur lewat CONFIG di assets/js/main.js) -->
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
    <div class="ticket-l">
      <div><small>Diskon</small><b id="tkBesar">10%</b></div>
    </div>
    <div class="ticket-r"><span id="tkSyarat"></span>
      <div class="code"><b id="tkKode">KODE</b><button type="button" id="tkSalin">Salin</button></div>
    </div>
  </div>
  <div class="slot" id="slot" hidden>
    <div class="slot-top"><span>Kuota review terpakai</span><span id="slotTxt"></span></div>
    <div class="bar"><i id="slotBar"></i></div>
  </div>
  <a class="btn-or" href="#" data-voucher
    data-wa="Halo Arka Institute, saya ingin mengamankan slot publikasi untuk batch ini.">Amankan Slot Saya
    <iconify-icon icon="lucide:arrow-up-right" class="ico" aria-hidden="true"></iconify-icon></a>
</section>

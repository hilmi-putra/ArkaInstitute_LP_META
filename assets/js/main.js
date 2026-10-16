/* =====================================================
   KONFIGURASI: SESUAIKAN SEBELUM TAYANG
   ===================================================== */
var CONFIG = {
  // Nomor WhatsApp admin, format internasional tanpa + dan tanpa spasi. Contoh: "6281234567890"
  waNumber: (window.ARKA_SERVER_CONFIG && window.ARKA_SERVER_CONFIG.waNumber) || "6281110000298",

  // URGENSI: "daily" untuk hitung mundur harian (selalu 1 hari & reset setiap hari).
  // Kosongkan deadline ("") untuk menyembunyikan strip promo dan kotak hitung mundur.
  deadline: (window.ARKA_SERVER_CONFIG && window.ARKA_SERVER_CONFIG.deadline) || "daily",
  promoText: "KUOTA REVIEW BATCH HARI INI",
  promoSub: "Slot terbatas, daftar hari ini untuk amankan kuota",
  urgTitle: "Pendaftaran batch ini segera ditutup",
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
  { n: "Educumer", b: "Pendidikan", c: ["#C2410C", "#7C2D12"], i: "assets/journal/educenter.webp" },
  { n: "Cassie", b: "Sosial & Humaniora", c: ["#B91C1C", "#7F1D1D"], i: "assets/journal/cessie.webp" },
  { n: "Keynesia", b: "Ekonomi & Bisnis", c: ["#1E3A8A", "#0F1F4D"], i: "assets/journal/keynesia.webp" },
  { n: "Hexatech", b: "Teknologi", c: ["#1D4ED8", "#1E1B8A"], i: "assets/journal/hexatech.webp" },
  { n: "Co-Creation", b: "Ekonomi & Bisnis", c: ["#0F766E", "#134E4A"], i: "assets/journal/cocreation.webp" },
  { n: "Nautical", b: "Teknologi", c: ["#0369A1", "#082F49"], i: "assets/journal/nautical.webp" },
  { n: "Florone", b: "Kesehatan & Sains", c: ["#15803D", "#14532D"], i: "assets/journal/florona.webp" },
  { n: "Historia", b: "Sosial & Humaniora", c: ["#4D7C0F", "#365314"], i: "assets/journal/histeria.webp" },
  { n: "Scopus / WoS", b: "Internasional", c: ["#D97706", "#92400E"], i: "assets/journal/scopus.webp" }
];

/* TESTIMONI: ganti dengan testimoni ASLI pelanggan (nama dan izin tampil dari yang bersangkutan).
   Entri contoh:true otomatis diberi label "Contoh tampilan". Hapus properti contoh setelah diganti.
   Bisa juga memakai tangkapan layar chat: tambahkan  gambar:"foto/testimoni1.jpg"  */
var TESTIMONI = [
  {
    contoh: true, nama: "Nama Pelanggan", peran: "Dosen \u2022 Nama Kampus", jurnal: "Educumer", bintang: 5, warna: "#FF6B35",
    teks: "Tulis kutipan asli di sini. Contoh gaya: prosesnya jelas dari awal, admin responsif, dan LoA keluar sesuai target."
  },
  {
    contoh: true, nama: "Nama Pelanggan", peran: "Peneliti \u2022 Nama Institusi", jurnal: "Keynesia", bintang: 5, warna: "#4ECDC4",
    teks: "Tulis kutipan asli di sini. Ceritakan hal spesifik yang paling membantu, misalnya pendampingan revisi."
  },
  {
    contoh: true, nama: "Nama Pelanggan", peran: "Mahasiswa \u2022 Nama Kampus", jurnal: "Hexatech", bintang: 5, warna: "#FF8A5B",
    teks: "Tulis kutipan asli di sini. Contoh gaya: pembayaran bertahap sangat membantu, dan alurnya mudah diikuti."
  }
];

var SEGMEN = {
  dosen: [
    { tag: "Kenaikan pangkat", t: "Percepatan LoA 3 hari", d: "Naskah dikawal dari review sampai LoA agar target administrasi Anda tidak molor.", l: ["Review awal 1x24 jam", "Pendampingan revisi"] },
    { tag: "Jurnal terverifikasi", t: "Pilih jurnal yang tepat", d: "Cocokkan naskah dengan cakupan jurnal di katalog Arka sebelum submit.", l: ["Rekomendasi jurnal sesuai bidang", "Format naskah disesuaikan"] },
    { tag: "Aman dari plagiasi", t: "Cek similarity Turnitin", d: "Ketahui tingkat kemiripan naskah lebih dulu, sebelum masuk proses editorial.", l: ["Laporan similarity", "Saran perbaikan"] }
  ],
  peneliti: [
    { tag: "Riset layak terbit", t: "Pengelolaan jurnal langsung", d: "Naskah ditangani dari draf sampai terbit resmi dengan DOI aktif.", l: ["Alur transparan 4 tahap", "Publish dan DOI"] },
    { tag: "Jalur internasional", t: "Scopus / WoS", d: "Tersedia jalur jurnal internasional di katalog. Tanyakan kecocokan naskah Anda.", l: ["Konsultasi kecocokan naskah", "Pendampingan revisi"] },
    { tag: "Reputasi terjaga", t: "Legalitas bisa diperiksa", d: "NIB resmi dan alamat kantor jelas, sehingga Anda tenang menyerahkan naskah.", l: ["NIB 1103220012668", "Pembayaran bertahap"] }
  ],
  mahasiswa: [
    { tag: "Syarat lulus", t: "LoA dalam 3 hari", d: "Butuh LoA untuk syarat kelulusan? Kami bantu percepat prosesnya.", l: ["Target percepatan 3 hari", "Pendampingan format naskah"] },
    { tag: "Ramah kantong", t: "Bayar bertahap", d: "Biaya tidak harus dibayar penuh di awal. Skema dijelaskan admin saat konsultasi.", l: ["Rincian biaya transparan", "Tanpa komitmen saat konsultasi"] },
    { tag: "Bingung mulai dari mana", t: "Konsultasi naskah", d: "Ceritakan topik dan tahap naskah Anda, kami arahkan langkah berikutnya.", l: ["Pilih jurnal yang cocok", "Panduan SOP penerbitan"] }
  ]
};

/* ---------- Util ---------- */
var $ = function (s, r) { return (r || document).querySelector(s) };
var $$ = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)) };
function pad(n) { return n < 10 ? "0" + n : "" + n }
function esc(s) { return String(s).replace(/[&<>"]/g, function (c) { return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;" }[c] }) }
function track(ev, data) { try { if (window.fbq) fbq('track', ev, data || {}); } catch (e) { } }
function waLink(msg) {
  return "https://wa.me/" + CONFIG.waNumber + "?text=" + encodeURIComponent(msg);
}
function waReady() { return !/X/i.test(CONFIG.waNumber); }
function bindWA(root) {
  $$("[data-wa]", root).forEach(function (a) {
    a.href = waLink(a.getAttribute("data-wa") + (a.hasAttribute("data-voucher") ? voucherText() : ""));
    if (a.dataset.bound) return; a.dataset.bound = 1;
    a.setAttribute("target", "_blank"); a.setAttribute("rel", "noopener");
    a.addEventListener("click", function (e) {
      if (!waReady()) { e.preventDefault(); alert("Nomor WhatsApp belum diatur. Edit CONFIG.waNumber di bagian script."); return; }
      track("Contact");
    });
  });
}

/* ---------- Diskon, urgensi, hitung mundur ---------- */
var DK = CONFIG.diskon || {};

function getDailyDeadline() {
  var now = new Date();
  // Target: akhir hari ini (23:59:59) sehingga menghitung sisa waktu hari ini, dan otomatis reset setiap tengah malam
  var target = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
  return target.getTime();
}

function resolveDeadline() {
  if (CONFIG.deadline === "daily" || !CONFIG.deadline) {
    return getDailyDeadline();
  }
  return new Date(CONFIG.deadline).getTime();
}

var isDailyMode = (CONFIG.deadline === "daily" || !CONFIG.deadline);
var DL = resolveDeadline();
var timerAktif = !isNaN(DL) && DL > Date.now();
/* Diskon otomatis mati bila batas waktu sudah lewat */
var diskonAktif = !!DK.aktif && (isDailyMode || timerAktif);

function voucherText() {
  return (diskonAktif && DK.kode) ? " Saya ingin memakai kode voucher " + DK.kode + "." : "";
}

function salin(t, done) {
  function fallback() {
    var a = document.createElement("textarea");
    a.value = t; a.setAttribute("readonly", "");
    a.style.position = "fixed"; a.style.opacity = "0";
    document.body.appendChild(a); a.select();
    try { if (document.execCommand("copy")) done(); } catch (e) { }
    document.body.removeChild(a);
  }
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(t).then(done, fallback);
  } else { fallback(); }
}

(function () {
  var promo = $("#promo"), urg = $("#urgensi");
  if (!timerAktif && !diskonAktif) return;

  urg.hidden = false;
  $("#urgTitle").textContent = CONFIG.urgTitle;
  $("#urgSub").textContent = CONFIG.urgSub;
  if (!timerAktif) $(".cd", urg).hidden = true;

  /* Strip promo di paling atas */
  var baris1 = diskonAktif ? "DISKON " + DK.besar + " UNTUK PENDAFTARAN BATCH INI" : CONFIG.promoText;
  var baris2 = diskonAktif ? CONFIG.promoText + (CONFIG.promoSub ? " \u2022 " + CONFIG.promoSub : "") : CONFIG.promoSub;
  promo.hidden = false;
  $("#promoText").innerHTML = esc(baris1) + (baris2 ? "<small>" + esc(baris2) + "</small>" : "");

  /* Tiket diskon */
  if (diskonAktif) {
    $("#ticket").hidden = false;
    $("#tkBesar").textContent = DK.besar;
    $("#tkSyarat").textContent = DK.syarat || "";
    if (DK.kode) {
      $("#tkKode").textContent = DK.kode;
      $("#tkSalin").addEventListener("click", function () {
        var b = this;
        salin(DK.kode, function () { b.textContent = "Tersalin"; setTimeout(function () { b.textContent = "Salin"; }, 1800); });
      });
    } else {
      $(".code", urg).hidden = true;
    }
    var chips = $(".chips");
    if (chips) {
      var li = document.createElement("li");
      li.innerHTML = '<iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>Diskon ' + esc(DK.besar) + ' batch ini';
      chips.insertBefore(li, chips.firstChild);
    }
  } else {
    $("#ticket").hidden = true;
  }

  /* Bar kuota (opsional) */
  if (CONFIG.slotsTotal && CONFIG.slotsLeft != null) {
    var used = CONFIG.slotsTotal - CONFIG.slotsLeft;
    $("#slot").hidden = false;
    $("#slotTxt").textContent = "Sisa " + CONFIG.slotsLeft + " dari " + CONFIG.slotsTotal + " slot";
    setTimeout(function () { $("#slotBar").style.width = Math.max(4, Math.min(100, used / CONFIG.slotsTotal * 100)) + "%"; }, 300);
  }

  /* Hitung mundur: satu batas waktu yang sama untuk semua pengunjung */
  if (!timerAktif) return;
  var ids = ["cdD", "cdH", "cdM", "cdS", "mD", "mH", "mM", "mS"];
  function tick() {
    if (isDailyMode) {
      DL = getDailyDeadline();
    }
    var r = DL - Date.now();
    if (r <= 0) {
      if (isDailyMode) {
        DL = getDailyDeadline();
        r = DL - Date.now();
      } else {
        promo.hidden = true; urg.hidden = true; diskonAktif = false;
        closeModal(); clearInterval(t); return;
      }
    }
    var s = Math.floor(r / 1000);
    var v = [pad(Math.floor(s / 86400)), pad(Math.floor(s % 86400 / 3600)), pad(Math.floor(s % 3600 / 60)), pad(s % 60)];
    for (var i = 0; i < 4; i++) {
      var a = document.getElementById(ids[i]), b = document.getElementById(ids[i + 4]);
      if (a) a.textContent = v[i];
      if (b) b.textContent = v[i];
    }
  }
  tick();
  var t = setInterval(tick, 1000);
})();

/* ---------- Pop up diskon ---------- */
var lastFocus = null;
function openModal() {
  var m = document.getElementById("modal");
  if (!diskonAktif || !m || m.classList.contains("show")) return;
  lastFocus = document.activeElement;
  m.classList.add("show");
  m.setAttribute("aria-hidden", "false");
  document.body.style.overflow = "hidden";
  setTimeout(function () { var i = document.getElementById("popInput"); if (i) i.focus({ preventScroll: true }); }, 350);
  track("ViewContent", { content_name: "popup_diskon" });
}
function closeModal() {
  var m = document.getElementById("modal");
  if (!m || !m.classList.contains("show")) return;
  m.classList.remove("show");
  m.setAttribute("aria-hidden", "true");
  document.body.style.overflow = "";
  if (lastFocus && lastFocus.focus) lastFocus.focus({ preventScroll: true });
}

(function () {
  var m = document.getElementById("modal");
  if (!m) return;
  if (!diskonAktif || DK.popup === false) { m.parentNode.removeChild(m); return; }

  document.getElementById("mBesar").textContent = DK.besar;
  document.getElementById("mFine").textContent = DK.syarat || "";
  document.getElementById("mSub").textContent = timerAktif
    ? "Isi nomor WhatsApp Anda untuk klaim diskon sebelum waktunya habis."
    : "Isi nomor WhatsApp Anda untuk klaim diskon ini.";
  if (!timerAktif) document.getElementById("miniCd").hidden = true;

  document.getElementById("mClose").addEventListener("click", closeModal);
  document.getElementById("mLater").addEventListener("click", closeModal);
  m.addEventListener("click", function (e) { if (e.target === m) closeModal(); });
  document.addEventListener("keydown", function (e) { if (e.key === "Escape") closeModal(); });

  var fired = false, timer;
  function fire() {
    if (fired) return;
    var ae = document.activeElement;
    if (ae && ae.id === "waInput") { timer = setTimeout(fire, 6000); return; } /* jangan ganggu yang sedang mengetik */
    fired = true; clearTimeout(timer); openModal();
  }
  timer = setTimeout(fire, Math.max(0, Number(DK.popupDelayDetik) || 0) * 1000);
  document.addEventListener("mouseout", function (e) { if (!e.relatedTarget && e.clientY <= 0) fire(); }); /* desktop: kursor keluar lewat atas */
})();

/* ---------- Form nomor WhatsApp (hero dan pop up) ---------- */
function setupLead(fid, iid, mid, defaultMsg, buildText, tutupModal) {
  var form = document.getElementById(fid), input = document.getElementById(iid), msg = document.getElementById(mid);
  if (!form) return;
  function norm(v) {
    var d = v.replace(/\D/g, "");
    if (d.indexOf("62") === 0) d = d.slice(2);
    if (d.indexOf("0") === 0) d = d.slice(1);
    return d;
  }
  input.addEventListener("input", function () { msg.className = "lead-msg"; msg.textContent = defaultMsg; });
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    var n = norm(input.value);
    if (n.length < 9 || n.length > 13 || n.charAt(0) !== "8") {
      msg.className = "lead-msg err";
      msg.textContent = "Nomor belum sesuai. Contoh: 812 3456 7890 (tanpa 0 di depan).";
      input.focus(); return;
    }
    if (!waReady()) { alert("Nomor WhatsApp admin belum diatur. Edit CONFIG.waNumber di bagian script."); return; }
    track("Lead", tutupModal ? { content_name: "popup_diskon" } : {});
    msg.className = "lead-msg"; msg.textContent = "Membuka WhatsApp admin...";
    window.open(waLink(buildText(n)), "_blank", "noopener");
    if (tutupModal) setTimeout(closeModal, 600);
  });
}
setupLead("leadForm", "waInput", "leadMsg", "Isi nomor WhatsApp Anda, lalu lanjut chat dengan admin.", function (n) {
  return "Halo Arka Institute, saya ingin konsultasi publikasi jurnal." + voucherText() + " Nomor WhatsApp saya +62" + n + ".";
}, false);
setupLead("popForm", "popInput", "popMsg", "Anda akan diarahkan ke WhatsApp admin untuk klaim diskon.", function (n) {
  return "Halo Arka Institute, saya ingin klaim diskon " + DK.besar + " untuk publikasi jurnal." + voucherText() + " Nomor WhatsApp saya +62" + n + ".";
}, true);

/* ---------- Testimonial ---------- */
(function () {
  var rail = $("#testiRail"), sec = $("#testimoni");
  var items = TESTIMONI.filter(function (t) { return t && (t.teks || t.gambar); });
  if (!items.length) { sec.hidden = true; return; }
  rail.innerHTML = items.map(function (t) {
    var ini = (t.nama || "?").split(/\s+/).slice(0, 2).map(function (w) { return w.charAt(0); }).join("").toUpperCase();
    var n = t.bintang || 5, stars = "";
    for (var i = 0; i < n; i++) stars += '<iconify-icon icon="lucide:star" class="ico" aria-hidden="true"></iconify-icon>';
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
(function () {
  var rail = $("#pkgRail"), sel = $("#segSel");
  function render() {
    var key = sel.value;
    rail.innerHTML = SEGMEN[key].map(function (p) {
      return '<article class="pkg">' +
        '<span class="pkg-tag"><iconify-icon icon="lucide:graduation-cap" class="ico" aria-hidden="true"></iconify-icon>' + esc(p.tag) + '</span>' +
        '<h3>' + esc(p.t) + '</h3><p>' + esc(p.d) + '</p>' +
        '<ul>' + p.l.map(function (x) { return '<li><iconify-icon icon="lucide:check" class="ico" aria-hidden="true"></iconify-icon>' + esc(x) + '</li>' }).join("") + '</ul>' +
        '<a class="link" href="#" data-wa="Halo Arka Institute, saya ' + esc(key) + ' dan tertarik dengan layanan: ' + esc(p.t) + '.">Konsultasikan <iconify-icon icon="lucide:arrow-up-right" class="ico" aria-hidden="true"></iconify-icon></a>' +
        '</article>';
    }).join("");
    rail.scrollLeft = 0;
    bindWA(rail);
  }
  sel.addEventListener("change", render);
  render();
})();

/* ---------- Katalog jurnal + filter ---------- */
(function () {
  var cat = $("#catalog"), fil = $("#filters");
  var bidang = ["Semua"].concat(JURNAL.map(function (j) { return j.b }).filter(function (v, i, a) { return a.indexOf(v) === i }));
  fil.innerHTML = bidang.map(function (b, i) {
    return '<button type="button" aria-pressed="' + (i === 0) + '" data-f="' + esc(b) + '">' + esc(b) + '</button>';
  }).join("");
  cat.innerHTML = JURNAL.map(function (j) {
    return '<article class="jr" data-b="' + esc(j.b) + '">' +
      '<div class="cover">' +
      '<img src="' + esc(j.i) + '" alt="Sampul jurnal ' + esc(j.n) + '" loading="lazy">' +
      '</div>' +
      '<div class="jr-meta"><b>' + esc(j.n) + '</b><span>' + esc(j.b) + '</span></div>' +
      '<a class="btn-line" href="#" data-wa="Halo Arka Institute, saya tertarik menerbitkan naskah di jurnal ' + esc(j.n) + '. Bisa dibantu cek kecocokannya?"><iconify-icon icon="lucide:message-circle" class="ico" aria-hidden="true"></iconify-icon>Cek kecocokan</a>' +
      '</article>';
  }).join("");
  bindWA(cat);
  fil.addEventListener("click", function (e) {
    var b = e.target.closest("button"); if (!b) return;
    $$("button", fil).forEach(function (x) { x.setAttribute("aria-pressed", x === b) });
    var f = b.getAttribute("data-f");
    $$(".jr", cat).forEach(function (c) { c.hidden = !(f === "Semua" || c.getAttribute("data-b") === f); });
  });
})();

/* ---------- SOP ---------- */
(function () {
  var a = $("#sopLink");
  if (CONFIG.sopUrl) { a.removeAttribute("data-wa"); a.href = CONFIG.sopUrl; a.target = "_blank"; a.rel = "noopener"; a.textContent = "Unduh SOP"; }
})();

/* ---------- Dock bawah: muncul setelah scroll ---------- */
(function () {
  var dock = $("#dock"), hero = $("#hero");
  function check() {
    var past = hero.getBoundingClientRect().bottom < 40;
    dock.classList.toggle("show", past);
  }
  window.addEventListener("scroll", check, { passive: true }); check();
})();

bindWA(document);

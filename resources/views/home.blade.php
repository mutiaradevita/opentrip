<x-home-layout>
<section class="bg-pine text-snow pt-[80px] pb-12">
  <div class="px-4 md:px-6 lg:px-8 py-10 text-center">
    <h1 class="text-2xl md:text-3xl font-bold text-pine mb-4">Cari petualangan seru?</h1>
    <div class="max-w-xl mx-auto">
      <input
        type="text"
        placeholder="Cari trip, gunung, atau lokasi"
        class="w-full px-6 py-3 rounded-full border border-stone text-stone placeholder:text-stone focus:outline-none focus:ring-2 focus:ring-forest"
      >
    </div>
  </div>
</section>

<section class="bg-earth py-8">
  <div class="max-w-screen-xl mx-auto px-4">
    <h2 class="text-xl font-bold text-snow mb-4">Berita Pendakian</h2>
    <div class="swiper news-swiper">
      <div class="swiper-wrapper">
        {{-- ITEM 1 --}}
        <div class="swiper-slide">
          <a href="https://www.tnbs.or.id/berita/semeru-ditutup" target="_blank"
             class="block rounded-lg overflow-hidden shadow-md group">
            <div class="relative h-64 md:h-72 bg-cover bg-center transition-transform group-hover:scale-[1.01]"
                 style="background-image: url('{{ asset('img/semeru.jpg') }}')">
              <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end">
                <h3 class="text-snow text-lg font-semibold group-hover:underline">Gunung Semeru Ditutup Sementara</h3>
                <p class="text-snow text-sm">Mulai 1 Juni 2025, karena aktivitas vulkanik.</p>
              </div>
            </div>
          </a>
        </div>
    </div>
  </div>
</section>



<!-- Trip Cards -->
<section class="bg-snow py-12">
  <div class="max-w-screen-xl mx-auto px-4">
    <h2 class="text-white text-xl font-bold mb-6">TRIP PALING LARIS</h2>
    <div class="flex space-x-4 gap-4 overflow-x-auto pb-2">
           <!-- Kartu 1 -->
<div class="bg-snow rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
  <img src="{{ asset('img/gunung.jpeg') }}" alt="Trip Bromo" class="w-full h-48 object-cover">
  <div class="p-4">
    <h3 class="text-pine text-base font-semibold">OPEN TRIP BROMO</h3>
    <div class="text-sm text-stone mt-1 flex items-center gap-2">
      <svg class="w-4 h-4 text-stone" fill="currentColor" viewBox="0 0 20 20">
        <path d="M6 2a2 2 0 00-2 2v1H3a1 1 0 100 2h1v2H3a1 1 0 100 2h1v2H3a1 1 0 100 2h1v1a2 2 0 002 2h8a2 2 0 002-2v-1h1a1 1 0 100-2h-1v-2h1a1 1 0 100-2h-1V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6z" />
      </svg>
      20 - 22 Juni 2025 · Bromo
    </div>
    <p class="text-earth font-bold mt-2">Rp 650.000</p>
    <p class="text-sm text-moss mt-1">Mountain Mates</p>
  </div>
</div>

<!-- Kartu 2 -->
<div class="bg-snow rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
  <img src="{{ asset('img/gunung.jpeg') }}" alt="Trip Papandayan" class="w-full h-48 object-cover">
  <div class="p-4">
    <h3 class="text-forest text-base font-semibold">OPEN TRIP PAPANDAYAN</h3>
    <div class="text-sm text-stone mt-1 flex items-center gap-2">
      <svg class="w-4 h-4 text-stone" fill="currentColor" viewBox="0 0 20 20">
        <path d="M6 2a2 2 0 00-2 2v1H3a1 1 0 100 2h1v2H3a1 1 0 100 2h1v2H3a1 1 0 100 2h1v1a2 2 0 002 2h8a2 2 0 002-2v-1h1a1 1 0 100-2h-1v-2h1a1 1 0 100-2h-1V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6z" />
      </svg>
      5 - 6 Juli 2025 · Garut
    </div>
    <p class="text-earth font-bold mt-2">Rp 550.000</p>
    <p class="text-sm text-moss mt-1">Mountain Mates</p>
  </div>
</div>

<!-- Kartu 3 -->
<div class="bg-snow rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
  <img src="{{ asset('img/gunung.jpeg') }}" alt="Trip Rinjani" class="w-full h-48 object-cover">
  <div class="p-4">
    <h3 class="text-forest text-base font-semibold">OPEN TRIP RINJANI</h3>
    <div class="text-sm text-stone mt-1 flex items-center gap-2">
      <svg class="w-4 h-4 text-stone" fill="currentColor" viewBox="0 0 20 20">
        <path d="M6 2a2 2 0 00-2 2v1H3a1 1 0 100 2h1v2H3a1 1 0 100 2h1v2H3a1 1 0 100 2h1v1a2 2 0 002 2h8a2 2 0 002-2v-1h1a1 1 0 100-2h-1v-2h1a1 1 0 100-2h-1V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6z" />
      </svg>
      10 - 15 Agustus 2025 · Lombok
    </div>
    <p class="text-earth font-bold mt-2">Rp 1.200.000</p>
    <p class="text-sm text-moss mt-1">Mountain Mates</p>
  </div>
</div>
    </div>
</section>


<!-- Join Section -->
<section class="bg-pine text-snow py-8">
  <div class="max-w-screen-xl mx-auto px-6 md:px-10 flex flex-col md:flex-row items-center justify-between gap-8">
    
    <!-- Teks -->
    <div class="md:w-1/2">
      <h2 class="text-xl md:text-2xl font-bold mb-3">BERGABUNGLAH</h2>
      <p class="text-sm md:text-base mb-4 leading-relaxed">
        Daftarkan tripmu dan jadikan eventmu semakin seru bersama sahabat baru!
      </p>
      <a href="#" class="inline-block bg-snow text-forest px-5 py-2 rounded-full text-sm font-semibold shadow hover:bg-mist transition">
        Daftar Sekarang
      </a>
    </div>

    <!-- Gambar -->
    <div class="md:w-1/2">
      <img src="{{ asset('img/join.png') }}" alt="Ilustrasi Join" class="w-full max-w-[280px] mx-auto md:mx-0" />
    </div>

  </div>
</section>
</x-home-layout>

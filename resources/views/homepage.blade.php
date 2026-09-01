<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sistem Magang PT PLN UP3 Jambi - Ajukan proposal dan surat magang anda secara online.">
    <title>Sistem Magang | PT PLN UP3 Jambi</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { font-family: 'Plus Jakarta Sans', sans-serif; }
        .hero-gradient { background: linear-gradient(180deg, #e8f5e9 0%, #c8e6c9 40%, #a5d6a7 70%, #81c784 100%); }
        .stat-card {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            border: 2px solid #90caf9;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .stat-card:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(66, 165, 245, 0.25); }
        .accordion-item { transition: all 0.3s ease; }
        .accordion-item:hover { background: #f0f7ff; }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.3s ease;
        }
        .accordion-content.open { max-height: 500px; }
        .cta-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .cta-btn::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.2), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .cta-btn:hover::after { opacity: 1; }
        .cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.15); }

        /* Decorative leaf SVGs */
        .leaf-decor {
            position: absolute;
            opacity: 0.15;
            pointer-events: none;
        }

        /* Smooth scroll */
        html { scroll-behavior: smooth; }

        /* Nav shadow on scroll */
        .nav-scrolled { box-shadow: 0 2px 20px rgba(0,0,0,0.1); }

        /* Fade in animation */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Social icon hover */
        .social-link {
            transition: all 0.3s ease;
        }
        .social-link:hover {
            transform: translateY(-3px);
            color: #1565c0;
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">

    {{-- ========== NAVBAR ========== --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-shadow duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                {{-- Logo PLN --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg flex items-center justify-center shadow-md group-hover:shadow-lg transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M13 2L3 14h9l-1 10 10-12h-9l1-10z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-bold text-sky-700 leading-tight tracking-wide">PLN</span>
                        <span class="text-[10px] text-gray-400 leading-tight">UP3 Jambi</span>
                    </div>
                </a>

                {{-- Action --}}
                <a href="{{ route('login') }}"
                   class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white text-sm font-semibold rounded-full shadow-md hover:shadow-lg hover:from-sky-600 hover:to-blue-700 transition-all duration-300 active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    Masuk
                </a>
            </div>
        </div>
    </nav>

    {{-- ========== HERO SECTION ========== --}}
    <section class="bg-gradient-to-b from-[#54B79A] to-[#2F698B] relative pt-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 md:pt-20 pb-0">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">

                {{-- Hero Illustration --}}
                <div class="flex-1 flex justify-center fade-up">
                    <div class="relative w-full max-w-md lg:max-w-lg">
                        <img src="{{ asset('assets/hero_image.png') }}" alt="" class="w-full h-full object-cover">
                    </div>
                </div>

                {{-- Hero Text --}}
                <div class="flex-1 text-center lg:text-left fade-up" style="transition-delay: 0.2s">
                    <p class="text-white text-base md:text-lg mb-2">Selamat Datang di</p>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-4 leading-tight">
                        Sistem <span class="text-blue-400">Magang</span>
                    </h1>
                    <p class="text-white text-sm md:text-base mb-8 max-w-md mx-auto lg:mx-0 leading-relaxed">
                        Silahkan ajukan proposal dan surat magang anda secara online melalui sistem ini.
                    </p>
                    <div class="flex flex-row items-center gap-3 justify-center lg:justify-start">
                        <!-- nanti bikin routingan untuk ke halaman pendaftaran -->
                        <a href="#pendaftaran"
                           class="w-full sm:w-auto px-8 py-3.5 bg-white text-gray-800 font-semibold rounded-full text-sm text-center transtition duration-300 cursor-pointer shadow hover:bg-gray-800 hover:text-white hover:-translate-y-0.5">
                            Ajukan Magang
                        </a>
                        <a href="#"
                           class="w-full sm:w-auto px-8 py-3.5 bg-gray-800 text-white font-semibold rounded-full text-sm text-center transtition duration-300 cursor-pointer shadow hover:bg-gray-900 hover:text-black hover:bg-white hover:-translate-y-0.5">
                            Cek Status
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Image -->
        <div class="w-full max-w-md lg:max-w-lg md:hidden block pt-16">
            <img src="{{asset('assets/footer_hero.png')}}" alt="" class="w-full h-full object-cover">
        </div>
        {{-- Wave separator --}}
        <div class="relative -mb-1 lg:block hidden">
            <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0 40 Q360 100 720 50 Q1080 0 1440 60 L1440 100 L0 100 Z" fill="white"/>
            </svg>
        </div>
    </section>

    {{-- ========== INFORMASI MAGANG ========== --}}
    <section class="py-16 md:pt-24 md:pb-16 bg-white" id="informasi">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Title --}}
            <div class="text-center mb-12 fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Informasi Magang</h2>
                <div class="w-16 h-1 bg-gradient-to-r from-sky-400 to-blue-600 mx-auto rounded-full"></div>
            </div>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-3 gap-4 md:gap-8 max-w-2xl mx-auto mb-12 fade-up" style="transition-delay: 0.15s">
                {{-- Stat 1 --}}
                <div class="border-1 border-blue-400 rounded-2xl p-4 md:p-6 text-center hover:-translate-y-1 hover:shadow-lg transition-all duration-200 will-change-transform transform-gpu">
                    <p class="text-[10px] md:text-xs text-gray-500 mb-2 leading-tight">Jumlah Pemagang saat ini</p>

                    <!-- Data pemagang akan di ambil dari database / backend -->
                    <p class="text-3xl md:text-5xl font-extrabold text-blue-700">-</p>
                    <p class="text-xs md:text-sm text-gray-500 mt-1">Orang</p>
                </div>
                {{-- Stat 2 --}}
                <div class="border-1 border-blue-400 rounded-2xl p-4 md:p-6 text-center hover:-translate-y-1 hover:shadow-lg transition-all duration-200 will-change-transform transform-gpu">
                    <p class="text-[10px] md:text-xs text-gray-500 mb-2 leading-tight">Rata-rata durasi magang saat ini</p>

                    <!-- Data rata-rata durasi magang akan di ambil dari database / backend -->
                    <p class="text-3xl md:text-5xl font-extrabold text-blue-700">-</p>
                    <p class="text-xs md:text-sm text-gray-500 mt-1">Bulan</p>
                </div>
                {{-- Stat 3 --}}
                <div class="border-1 border-blue-400 rounded-2xl p-4 md:p-6 text-center hover:-translate-y-1 hover:shadow-lg transition-all duration-200 will-change-transform transform-gpu">
                    <p class="text-[10px] md:text-xs text-gray-500 mb-2 leading-tight">Posisi yang tersedia</p>

                    <!-- Data posisi yang tersedia akan di ambil dari database / backend -->
                    <p class="text-3xl md:text-5xl font-extrabold text-blue-700">-</p>
                    <p class="text-xs md:text-sm text-gray-500 mt-1">Posisi</p>
                </div>
            </div>

            {{-- Description --}}
            <div class="max-w-3xl mx-auto fade-up" style="transition-delay: 0.3s">
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 md:p-8 border border-gray-100 shadow-sm">
                    <p class="text-sm md:text-base text-gray-600 mb-4 leading-relaxed">
                        Informasi mengenai magang <strong class="text-blue-700">PLN UP3 JAMBI</strong> hanya ada di website ini nantikan untuk program lainnya.
                    </p>
                    <p class="text-sm md:text-base text-gray-600 mb-4 leading-relaxed">
                        Kami percaya bahwa magang adalah proses belajar terbaik sebelum memasuki dunia kerja sesungguhnya. Oleh karena itu, lowongan ini terbuka bagi siswa/mahasiswa dari berbagai latar belakang yang memiliki semangat belajar tinggi.
                    </p>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                        Fokus utama kami adalah membantu anda mengasah <em>soft skills</em>, menguji kemampuan <em>problem solving</em>, dan menemukan kekuatan profesional anda melalui proyek interaktif.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== IMAGE SECTION ========== --}}
    <div class="w-full flex justify-center pb-12 md:pb-16">
        <div class="flex flex-col md:flex-row justify-center items-center w-[300px] sm:w-[400px] md:w-[512px] px-4 sm:px-6 lg:px-8 gap-4 justify-center">
            <img src="{{ asset('assets/image_footer_1.png') }}" alt="" class="h-full w-full object-cover rounded-2xl ">
            <img src="{{ asset('assets/image_footer_2.png') }}" alt="" class="h-full w-full object-cover rounded-2xl ">
        </div>
    </div>

    {{-- ========== CARA PENDAFTARAN ========== --}}
    <section class="py-16 md:py-24 bg-gray-50" id="pendaftaran">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Title --}}
            <div class="text-center mb-10 fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Cara Pendaftaran</h2>
                <div class="w-16 h-1 bg-gradient-to-r from-sky-400 to-blue-600 mx-auto rounded-full"></div>
            </div>

            {{-- Accordion --}}
            <div class="space-y-3 fade-up" style="transition-delay: 0.15s" id="accordion-container">
                {{-- Step A --}}
                <div class="accordion-item bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none group">
                        <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-blue-700 transition-colors">
                            A. Persiapan Berkas Administrasi
                        </span>
                        <svg class="accordion-chevron w-5 h-5 text-gray-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="accordion-content px-5 text-sm text-gray-600 leading-relaxed">
                        <div class="pb-4">
                            Siapkan berkas administrasi yang diperlukan antara lain: Surat pengantar dari kampus/sekolah, CV terbaru, transkrip nilai, dan fotokopi KTP/Kartu Pelajar.
                        </div>
                    </div>
                </div>

                {{-- Step B --}}
                <div class="accordion-item bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none group">
                        <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-blue-700 transition-colors">
                            B. Pengisian Formulir Pengajuan
                        </span>
                        <svg class="accordion-chevron w-5 h-5 text-gray-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="accordion-content px-5 text-sm text-gray-600 leading-relaxed">
                        <div class="pb-4">
                            Isi formulir pengajuan magang secara online melalui halaman pendaftaran. Pastikan semua data yang diisi sudah benar dan lengkap sebelum mengirimkan formulir.
                        </div>
                    </div>
                </div>

                {{-- Step C --}}
                <div class="accordion-item bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none group">
                        <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-blue-700 transition-colors">
                            C. Simpan Nomor Pengajuan
                        </span>
                        <svg class="accordion-chevron w-5 h-5 text-gray-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="accordion-content px-5 text-sm text-gray-600 leading-relaxed">
                        <div class="pb-4">
                            Setelah mengirimkan formulir, anda akan mendapatkan nomor pengajuan. Simpan nomor ini untuk mengecek status pengajuan magang anda.
                        </div>
                    </div>
                </div>

                {{-- Step D --}}
                <div class="accordion-item bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none group">
                        <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-blue-700 transition-colors">
                            D. Seleksi & Pengecekan Status
                        </span>
                        <svg class="accordion-chevron w-5 h-5 text-gray-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="accordion-content px-5 text-sm text-gray-600 leading-relaxed">
                        <div class="pb-4">
                            Tim kami akan menyeleksi berkas anda. Gunakan nomor pengajuan untuk mengecek status penerimaan anda secara berkala melalui website ini.
                        </div>
                    </div>
                </div>

                {{-- Step E --}}
                <div class="accordion-item bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between px-5 py-4 text-left focus:outline-none group">
                        <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-blue-700 transition-colors">
                            E. Token & Registrasi Akun
                        </span>
                        <svg class="accordion-chevron w-5 h-5 text-gray-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="accordion-content px-5 text-sm text-gray-600 leading-relaxed">
                        <div class="pb-4">
                            Setelah diterima, anda akan mendapatkan token registrasi. Gunakan token tersebut untuk membuat akun dan mulai menggunakan sistem presensi dan pencatatan magang.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== FOOTER ========== --}}
    <footer class="footer-gradient border-t border-gray-200">
        {{-- PLN Info --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Col 1: PLN Branding --}}
                <div class="space-y-4">
                    {{-- PLN Logo --}}
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg flex items-center justify-center shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13 2L3 14h9l-1 10 10-12h-9l1-10z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-sm font-bold text-sky-700 leading-tight tracking-wide">PLN</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 leading-relaxed max-w-sm">
                        <strong>PT PLN (Persero) UP3 Jambi</strong> berkomitmen memberikan pelayanan kelistrikan handal untuk Jambi yang lebih terang.
                    </p>

                    {{-- App badges --}}
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 bg-black text-white rounded-lg px-3 py-2">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 20.5v-17A1.5 1.5 0 014.5 2h11A1.5 1.5 0 0117 3.5v17a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 20.5zM21 11l-4-4v3H13v2h4v3l4-4z"/></svg>
                            <div>
                                <p class="text-[8px] leading-none opacity-80">GET IT ON</p>
                                <p class="text-xs font-semibold leading-tight">Google Play</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 bg-black text-white rounded-lg px-3 py-2">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83"/></svg>
                            <div>
                                <p class="text-[8px] leading-none opacity-80">Download on the</p>
                                <p class="text-xs font-semibold leading-tight">App Store</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Col 2: Hubungi Kami --}}
                <div class="space-y-3">
                    <h3 class="font-bold text-gray-800 text-sm">Hubungi Kami</h3>
                    <div class="space-y-2.5">
                        <div class="flex items-start gap-2.5 text-xs text-gray-500">
                            <svg class="w-4 h-4 text-red-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Jl. Jenderal Urip Sumoharjo No.02, Jambi</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-gray-500">
                            <svg class="w-4 h-4 text-green-600 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <span>Call Center: 123</span>
                        </div>
                    </div>
                </div>

                {{-- Col 3: Ikuti Kami --}}
                <div class="space-y-3">
                    <h3 class="font-bold text-gray-800 text-sm">Ikuti Kami</h3>
                    <div class="space-y-2">
                        <a href="#" class="social-link flex items-center gap-2.5 text-xs text-gray-500 hover:text-blue-600">
                            {{-- Instagram --}}
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            <span>plnjambi</span>
                        </a>
                        <a href="#" class="social-link flex items-center gap-2.5 text-xs text-gray-500 hover:text-blue-600">
                            {{-- Facebook --}}
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            <span>plnjambi</span>
                        </a>
                        <a href="#" class="social-link flex items-center gap-2.5 text-xs text-gray-500 hover:text-blue-600">
                            {{-- Twitter/X --}}
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            <span>plnjambi</span>
                        </a>
                        <a href="#" class="social-link flex items-center gap-2.5 text-xs text-gray-500 hover:text-blue-600">
                            {{-- TikTok --}}
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                            <span>pln.up3.jambi</span>
                        </a>
                        <a href="#" class="social-link flex items-center gap-2.5 text-xs text-gray-500 hover:text-blue-600">
                            {{-- YouTube --}}
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            <span>PLN UP3 JAMBI Official</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="border-t border-gray-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <p class="text-center text-xs text-gray-400">
                    &copy; {{ date('Y') }} PT PLN (Persero) UP3 Jambi. Hak Cipta Dilindungi.
                </p>
            </div>
        </div>
    </footer>

    {{-- ========== SCRIPTS ========== --}}
    <script>
        // Accordion toggle
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            const chevron = button.querySelector('.accordion-chevron');
            const isOpen = content.classList.contains('open');

            // Close all others
            document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('open'));
            document.querySelectorAll('.accordion-chevron').forEach(c => c.style.transform = '');

            if (!isOpen) {
                content.classList.add('open');
                chevron.style.transform = 'rotate(180deg)';
            }
        }

        // Navbar shadow on scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navbar.classList.add('nav-scrolled');
            } else {
                navbar.classList.remove('nav-scrolled');
            }
        });

        // Fade-up animation on scroll
        const fadeElements = document.querySelectorAll('.fade-up');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        fadeElements.forEach(el => observer.observe(el));

        // Trigger hero animations immediately
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.querySelectorAll('.hero-gradient .fade-up').forEach(el => {
                    el.classList.add('visible');
                });
            }, 100);
        });
    </script>

    @vite('resources/js/app.js')
</body>
</html>

<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>م. جمال العبسي | Eng. Jamal Al-Absi - Senior Software Engineer</title>
  
  <!-- Google Fonts: Cairo for Arabic & Inter/Plus Jakarta Sans for English -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: {
              navy: '#080d1d',       // عمق كحلي داكن فاخر
              darkBlue: '#0f172a',   // أزرق مسائي مائل للرمادي الداكن
              surface: '#15213b',    // مسطحات البطاقات
              lightBlue: '#2563eb',  // أزرق ملكي
              glowBlue: '#38bdf8',   // وهج سماوي نيون
              orange: '#ea580c',     // برتقالي غامق ملفت
              orangeHover: '#c2410c',// برتقالي تفاعلي داكن
              orangeGlow: '#f97316'  // توهج برتقالي ناري
            }
          },
          animation: {
            'float-slow': 'float 6s ease-in-out infinite',
            'float-reverse': 'floatRev 7s ease-in-out infinite',
            'pulse-glow': 'pulseGlow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            'spin-slow': 'spin 18s linear infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-16px)' },
            },
            floatRev: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(14px)' },
            },
            pulseGlow: {
              '0%, 100%': { opacity: '0.35', transform: 'scale(1)' },
              '50%': { opacity: '0.75', transform: 'scale(1.08)' },
            }
          }
        }
      }
    }
  </script>

  <style>
    /* Dynamic Font Switching based on document language */
    html[lang="ar"] body {
      font-family: 'Cairo', sans-serif;
    }
    html[lang="en"] body {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* Custom Modern Scrollbar */
    ::-webkit-scrollbar {
      width: 9px;
    }
    ::-webkit-scrollbar-track {
      background: #080d1d;
    }
    ::-webkit-scrollbar-thumb {
      background: #ea580c;
      border-radius: 9999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #c2410c;
    }

    .glass-card {
      background: rgba(21, 33, 59, 0.72);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }
    .glass-card-hover {
      transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .glass-card-hover:hover {
      transform: translateY(-6px);
      border-color: rgba(234, 88, 12, 0.5);
      box-shadow: 0 20px 35px -10px rgba(234, 88, 12, 0.2), 0 0 15px rgba(37, 99, 235, 0.25);
    }

    .text-gradient-orange {
      background: linear-gradient(135deg, #fb923c 0%, #ea580c 50%, #f59e0b 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .tech-border-glow {
      box-shadow: 0 0 25px -5px rgba(234, 88, 12, 0.4), inset 0 0 15px rgba(37, 99, 235, 0.15);
    }
  </style>
</head>

<body class="bg-brand-navy text-slate-100 antialiased selection:bg-brand-orange selection:text-white relative overflow-x-hidden min-h-screen">

  <!-- Ambient Glowing Light Orbs in Background -->
  <div class="fixed top-0 left-1/4 w-[480px] h-[480px] bg-brand-orange/15 rounded-full blur-[120px] pointer-events-none -z-10 animate-pulse-glow"></div>
  <div class="fixed bottom-12 right-10 w-[550px] h-[550px] bg-brand-lightBlue/15 rounded-full blur-[130px] pointer-events-none -z-10"></div>

  <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 glass-card border-b border-slate-800/80" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        
        <!-- Modern Tech Logo: Name + Glowing Laptop Icon -->
        <a href="#hero" class="flex items-center gap-3.5 group focus:outline-none">
          <div class="relative w-12 h-12 flex items-center justify-center rounded-2xl bg-gradient-to-tr from-brand-navy via-brand-surface to-slate-800 border-2 border-brand-orange tech-border-glow group-hover:scale-105 transition-transform duration-300">
            <i class="fa-solid fa-laptop-code text-brand-orangeGlow text-xl group-hover:rotate-6 transition-transform"></i>
            <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-orange opacity-80"></span>
              <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-brand-orange"></span>
            </span>
          </div>
          <div class="flex flex-col">
            <span class="text-xl sm:text-2xl font-black tracking-tight text-white flex items-center gap-1.5" id="brandTitle">
              <span>م. جمال</span>
              <span class="text-brand-orange font-black">العبسي</span>
            </span>
            <span class="text-[11px] tracking-widest text-slate-400 font-bold flex items-center gap-1.5">
              <i class="fa-solid fa-code text-[10px] text-brand-lightBlue"></i>
              <span id="brandSubtitle">SOFTWARE ENGINEER</span>
            </span>
          </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-1 lg:gap-2">
          <a href="#hero" class="px-4 py-2 text-sm font-semibold rounded-xl text-slate-300 hover:text-white hover:bg-slate-800/60 transition-colors" data-i18n="navHome">
            الرئيسية
          </a>
          <a href="#skills" class="px-4 py-2 text-sm font-semibold rounded-xl text-slate-300 hover:text-white hover:bg-slate-800/60 transition-colors" data-i18n="navSkills">
            المهارات والخبرات
          </a>
          <a href="#projects" class="px-4 py-2 text-sm font-semibold rounded-xl text-slate-300 hover:text-white hover:bg-slate-800/60 transition-colors" data-i18n="navProjects">
            المشاريع والبرامج
          </a>
          <a href="#contact" class="px-4 py-2 text-sm font-semibold rounded-xl text-slate-300 hover:text-white hover:bg-slate-800/60 transition-colors" data-i18n="navContact">
            تواصل معي
          </a>
        </nav>

        <!-- Right Action Items: Language Toggle Switcher & CTA Button -->
        <div class="hidden sm:flex items-center gap-3">
          
          <!-- Interactive Bilingual Toggle Switcher -->
          <button id="langSwitcher" onclick="toggleLanguage()" class="flex items-center gap-2.5 px-3.5 py-2 rounded-xl border border-slate-700 bg-slate-900/90 text-xs font-bold text-slate-200 hover:border-brand-orange hover:text-white shadow-sm transition-all duration-300 active:scale-95" title="Switch Language / تبديل اللغة">
            <i class="fa-solid fa-globe text-brand-orange text-sm"></i>
            <span id="langDisplayLabel" class="tracking-wide">English</span>
          </button>

          <!-- Direct CTA -->
          <a href="#contact" class="relative group overflow-hidden px-5 py-2.5 rounded-xl bg-gradient-to-r from-brand-orange via-orange-600 to-amber-600 text-white font-bold text-sm shadow-lg shadow-brand-orange/30 hover:shadow-brand-orange/50 transition-all duration-300 hover:scale-105 active:scale-95 flex items-center gap-2">
            <i class="fa-solid fa-paper-plane text-xs"></i>
            <span data-i18n="btnStartProject">ابدأ مشروعك</span>
          </a>
        </div>

        <!-- Mobile Menu Hamburger & Mobile Lang Switch -->
        <div class="flex items-center gap-2 md:hidden">
          <button onclick="toggleLanguage()" class="p-2 rounded-xl bg-slate-800 border border-slate-700 text-xs font-bold text-brand-orange">
            <span id="mobileLangLabel">EN</span>
          </button>
          <button id="mobileMenuBtn" aria-label="Menu" class="p-2.5 rounded-xl bg-slate-800 border border-slate-700 text-slate-200 hover:text-brand-orange focus:outline-none">
            <i class="fa-solid fa-bars-staggered text-xl" id="menuIcon"></i>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobileMenu" class="hidden md:hidden border-t border-slate-800/80 bg-brand-darkBlue/95 backdrop-blur-xl px-4 pt-3 pb-6 space-y-2">
      <a href="#hero" class="mobile-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-200 hover:bg-slate-800 hover:text-brand-orange transition-colors">
        <i class="fa-solid fa-house-chimney mx-2 text-brand-orange"></i> <span data-i18n="navHome">الرئيسية</span>
      </a>
      <a href="#skills" class="mobile-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-200 hover:bg-slate-800 hover:text-brand-orange transition-colors">
        <i class="fa-solid fa-brain mx-2 text-brand-orange"></i> <span data-i18n="navSkills">المهارات والخبرات</span>
      </a>
      <a href="#projects" class="mobile-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-200 hover:bg-slate-800 hover:text-brand-orange transition-colors">
        <i class="fa-solid fa-laptop-code mx-2 text-brand-orange"></i> <span data-i18n="navProjects">المشاريع والبرامج</span>
      </a>
      <a href="#contact" class="mobile-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-200 hover:bg-slate-800 hover:text-brand-orange transition-colors">
        <i class="fa-solid fa-envelope mx-2 text-brand-orange"></i> <span data-i18n="navContact">تواصل معي</span>
      </a>
      <div class="pt-3 border-t border-slate-800">
        <a href="#contact" class="mobile-link block text-center py-3 rounded-xl bg-brand-orange text-white font-bold text-sm shadow-md">
          <span data-i18n="btnStartProject">ابدأ مشروعك</span>
        </a>
      </div>
    </div>
  </header>

  <main class="pt-24 space-y-24 sm:space-y-32">

    <section id="hero" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-8 sm:pt-20 sm:pb-16 overflow-hidden">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
        
        <!-- Hero Introduction text and Call-To-Action buttons -->
        <div class="lg:col-span-7 text-center ltr:lg:text-left rtl:lg:text-right space-y-6 z-10">
          
          <!-- Availability Badge -->
          <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full glass-card border border-brand-orange/40 text-xs sm:text-sm font-semibold text-brand-orange shadow-lg shadow-brand-orange/10">
            <span class="relative flex h-2.5 w-2.5">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
            </span>
            <span data-i18n="heroBadge">متاح لاستلام المشاريع البرمجية وتطوير الأنظمة</span>
          </div>

          <!-- Main Hero Headline -->
          <h1 class="text-4xl sm:text-5xl xl:text-6xl font-black leading-tight sm:leading-tight text-white">
            <span data-i18n="heroGreeting">مرحباً بك، أنا</span> <br>
            <span class="text-gradient-orange inline-block mt-2" data-i18n="heroName">م. جمال العبسي</span>
          </h1>

          <p class="text-lg sm:text-xl text-slate-300 font-medium leading-relaxed max-w-2xl mx-auto ltr:lg:mx-0 rtl:lg:mx-0" data-i18n="heroDescription">
            مهندس برمجيات متخصص في بناء تطبيقات الويب المتقدمة، الأنظمة السحابية المعقدة، والحلول الرقمية الذكية ذات الأداء الفائق والواجهات العصرية.
          </p>

          <!-- Interactive Metrics Counter Mini-Row -->
          <div class="grid grid-cols-3 gap-3 sm:gap-6 py-4 max-w-lg mx-auto ltr:lg:mx-0 rtl:lg:mx-0">
            <div class="p-3.5 rounded-2xl glass-card text-center border-slate-800">
              <div class="text-2xl sm:text-3xl font-black text-brand-orange">+5</div>
              <div class="text-xs text-slate-400 font-medium mt-1" data-i18n="statExp">سنوات خبرة</div>
            </div>
            <div class="p-3.5 rounded-2xl glass-card text-center border-slate-800">
              <div class="text-2xl sm:text-3xl font-black text-brand-glowBlue">+38</div>
              <div class="text-xs text-slate-400 font-medium mt-1" data-i18n="statProjects">مشروع ناجح</div>
            </div>
            <div class="p-3.5 rounded-2xl glass-card text-center border-slate-800">
              <div class="text-2xl sm:text-3xl font-black text-amber-400">100%</div>
              <div class="text-xs text-slate-400 font-medium mt-1" data-i18n="statClients">رضا العملاء</div>
            </div>
          </div>

          <!-- Action Buttons CTA -->
          <div class="flex flex-wrap items-center justify-center ltr:lg:justify-start rtl:lg:justify-start gap-4 pt-2">
            <a href="#projects" class="px-8 py-3.5 rounded-xl bg-gradient-to-r from-brand-orange to-brand-orangeHover hover:from-brand-orangeHover hover:to-orange-700 text-white font-bold text-base shadow-xl shadow-brand-orange/30 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center gap-2">
              <i class="fa-solid fa-diagram-project"></i>
              <span data-i18n="btnBrowseProjects">تصفح المشاريع</span>
            </a>
            
            <a href="#contact" class="px-8 py-3.5 rounded-xl glass-card hover:bg-slate-800 text-slate-200 hover:text-white font-bold text-base border border-slate-700 hover:border-brand-orange transition-all duration-300 flex items-center gap-2">
              <i class="fa-solid fa-headset text-brand-orange"></i>
              <span data-i18n="btnContactDirect">تواصل معي مباشرة</span>
            </a>
          </div>

          <!-- Quick Social Links -->
          <div class="pt-4 flex items-center justify-center ltr:lg:justify-start rtl:lg:justify-start gap-3">
            <span class="text-xs text-slate-400 font-semibold mx-1" data-i18n="socialFollow">تابعني على:</span>
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-slate-800/80 hover:bg-brand-orange hover:text-white text-slate-300 flex items-center justify-center transition-all duration-200" title="GitHub">
              <i class="fa-brands fa-github text-lg"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-slate-800/80 hover:bg-blue-600 hover:text-white text-slate-300 flex items-center justify-center transition-all duration-200" title="LinkedIn">
              <i class="fa-brands fa-linkedin-in text-lg"></i>
            </a>
            <a href="https://wa.me/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-slate-800/80 hover:bg-emerald-600 hover:text-white text-slate-300 flex items-center justify-center transition-all duration-200" title="WhatsApp">
              <i class="fa-brands fa-whatsapp text-lg"></i>
            </a>
            <a href="mailto:contact@jamalalabsi.com" class="w-10 h-10 rounded-xl bg-slate-800/80 hover:bg-brand-orange hover:text-white text-slate-300 flex items-center justify-center transition-all duration-200" title="Email">
              <i class="fa-solid fa-envelope text-lg"></i>
            </a>
          </div>

        </div>

        <!-- Tech Mockup & Floating Badges with Laptop View -->
        <div class="lg:col-span-5 relative flex items-center justify-center">
          
          <div class="absolute inset-0 bg-gradient-to-r from-brand-orange/20 to-blue-600/20 rounded-full blur-3xl -z-10 animate-pulse-glow"></div>

          <!-- Laptop Screen Device Mockup -->
          <div class="w-full max-w-md bg-slate-900 border-2 border-slate-700/80 rounded-2xl p-3 shadow-2xl shadow-blue-950/80 relative transition-transform duration-500 hover:rotate-1">
            
            <!-- Top Window Bar -->
            <div class="flex items-center justify-between px-3 py-2 bg-slate-950 rounded-xl mb-3 border border-slate-800">
              <div class="flex items-center gap-1.5">
                <span class="w-3 h-3 rounded-full bg-rose-500 inline-block"></span>
                <span class="w-3 h-3 rounded-full bg-amber-500 inline-block"></span>
                <span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span>
              </div>
              <span class="text-[11px] text-slate-400 font-mono flex items-center gap-1 dir-ltr">
                <i class="fa-solid fa-terminal text-brand-orange"></i> jamal-alabsi.dev
              </span>
              <span class="w-6"></span>
            </div>

            <!-- Terminal code editor view -->
            <div class="bg-brand-navy rounded-xl p-4 sm:p-5 border border-slate-800 font-mono text-xs sm:text-sm text-slate-300 space-y-3 shadow-inner text-left dir-ltr">
              <div class="flex items-center justify-between text-slate-400 border-b border-slate-800 pb-2">
                <span class="text-brand-orange font-bold flex items-center gap-1.5">
                  <i class="fa-solid fa-cube"></i> EngineerProfile.ts
                </span>
                <span class="text-[10px] bg-slate-800 px-2 py-0.5 rounded text-emerald-400 font-bold">STATUS: READY</span>
              </div>

              <div class="space-y-1 text-xs">
                <p><span class="text-rose-400">const</span> <span class="text-blue-400">engineer</span> = {</p>
                <p class="pl-4"><span class="text-amber-300">name</span>: <span class="text-emerald-300" id="codeName">'Eng. Jamal Al-Absi'</span>,</p>
                <p class="pl-4"><span class="text-amber-300">role</span>: <span class="text-emerald-300">'Senior Full-Stack Engineer'</span>,</p>
                <p class="pl-4"><span class="text-amber-300">coreStack</span>: [<span class="text-brand-orangeGlow">'Tailwind'</span>, <span class="text-brand-orangeGlow">'React'</span>, <span class="text-brand-orangeGlow">'Node.js'</span>],</p>
                <p class="pl-4"><span class="text-amber-300">mission</span>: <span class="text-emerald-300">'Building Scalable Digital Products'</span>,</p>
                <p class="pl-4"><span class="text-amber-300">availableForHire</span>: <span class="text-sky-400">true</span></p>
                <p>};</p>
              </div>

              <div class="mt-3 pt-3 border-t border-slate-800/80 flex items-center justify-between text-[11px] text-slate-400 font-sans">
                <span class="flex items-center gap-1.5 text-brand-orange font-semibold">
                  <i class="fa-solid fa-bolt animate-pulse"></i> High Performance
                </span>
                <span class="text-slate-400">Clean Architecture</span>
              </div>
            </div>

            <!-- Laptop Base stand -->
            <div class="h-3 bg-gradient-to-r from-slate-700 via-slate-600 to-slate-700 rounded-b-xl mt-2 mx-6"></div>
          </div>

          <!-- Floating Badge 1 -->
          <div class="absolute -top-4 -right-4 sm:-right-6 glass-card p-3 rounded-2xl border border-brand-orange/40 shadow-xl flex items-center gap-3 animate-float-slow">
            <div class="w-10 h-10 rounded-xl bg-orange-500/20 text-brand-orange flex items-center justify-center font-bold text-lg">
              <i class="fa-brands fa-react animate-spin-slow"></i>
            </div>
            <div>
              <div class="text-xs font-bold text-white" data-i18n="badge1Title">تطوير واجهات ذكية</div>
              <div class="text-[10px] text-slate-400">React & Modern UI</div>
            </div>
          </div>

          <!-- Floating Badge 2 -->
          <div class="absolute -bottom-6 -left-4 sm:-left-6 glass-card p-3 rounded-2xl border border-blue-500/40 shadow-xl flex items-center gap-3 animate-float-reverse">
            <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-lg">
              <i class="fa-solid fa-server"></i>
            </div>
            <div>
              <div class="text-xs font-bold text-white" data-i18n="badge2Title">أنظمة سحابية متينة</div>
              <div class="text-[10px] text-slate-400">Cloud & Architecture</div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="skills" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 scroll-mt-24">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">

    


        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-orange/10 border border-brand-orange/30 text-brand-orange text-xs font-bold">
          <i class="fa-solid fa-screwdriver-wrench"></i> <span data-i18n="skillsTag">المهارات والقدرات التقنية</span>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white" data-i18n="skillsHeading">
          أحدث التقنيات وأفضل ممارسات البرمجة
        </h2>
        <p class="text-slate-400 text-base leading-relaxed" data-i18n="skillsSubheading">
          أعتمد على بنية برمجية حديثة تمزج بين جمال التصميم، سرعة الاستجابة، وأمان البيانات لتلبية احتياجات الأعمال المعاصرة.
        </p>
      </div>

<!-- Skills Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    @foreach($skills as $skill)
        <div class="glass-card glass-card-hover p-6 sm:p-8 rounded-3xl relative overflow-hidden group">

            <div class="w-14 h-14 rounded-2xl bg-orange-500/10 border border-brand-orange/30 text-brand-orange flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-code"></i>
            </div>

            <h3 class="text-xl font-bold text-white mb-2">
                {{ $skill->title }}
            </h3>

            <p class="text-sm text-slate-400 mb-6 leading-relaxed">
                {{ $skill->description }}
            </p>

            <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-800">
              <span class="px-3 py-1 rounded-lg bg-slate-800/80 text-xs font-medium text-slate-300 border border-slate-700">HTML5 / CSS3</span>
              <span class="px-3 py-1 rounded-lg bg-slate-800/80 text-xs font-medium text-slate-300 border border-slate-700">Tailwind CSS</span>
              <span class="px-3 py-1 rounded-lg bg-brand-orange/20 text-xs font-semibold text-brand-orangeGlow border border-brand-orange/30">React.js / Next.js</span>
              <span class="px-3 py-1 rounded-lg bg-slate-800/80 text-xs font-medium text-slate-300 border border-slate-700">TypeScript / JS</span>
            </div>
        </div>
        @endforeach

      </div>

      <!-- Professional Capabilities Progress Indicators -->
      <div class="mt-12 glass-card p-6 sm:p-8 rounded-3xl border border-slate-800">
        <h4 class="text-lg font-bold text-white mb-6 flex items-center gap-2">
          <i class="fa-solid fa-chart-line text-brand-orange"></i>
          <span data-i18n="indicatorsTitle">مؤشرات المهارة الهندسية ومعدل الجاهزية</span>
        </h4>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="space-y-2">
            <div class="flex justify-between text-sm">
              <span class="font-semibold text-slate-200" data-i18n="ind1">تطوير تطبيقات الويب الكاملة (Full-Stack Web)</span>
              <span class="font-bold text-brand-orange">96%</span>
            </div>
            <div class="h-2.5 w-full bg-slate-800 rounded-full overflow-hidden">
              <div class="h-full bg-gradient-to-r from-amber-500 to-brand-orange rounded-full" style="width: 96%"></div>
            </div>
          </div>

          <div class="space-y-2">
            <div class="flex justify-between text-sm">
              <span class="font-semibold text-slate-200" data-i18n="ind2">تصميم وتخطيط قواعد البيانات (Database Design)</span>
              <span class="font-bold text-brand-lightBlue">92%</span>
            </div>
            <div class="h-2.5 w-full bg-slate-800 rounded-full overflow-hidden">
              <div class="h-full bg-gradient-to-r from-blue-600 to-cyan-400 rounded-full" style="width: 92%"></div>
            </div>
          </div>

          <div class="space-y-2">
            <div class="flex justify-between text-sm">
              <span class="font-semibold text-slate-200" data-i18n="ind3">تصميم واجهات المستخدم الحديثة (Tailwind & UI/UX)</span>
              <span class="font-bold text-brand-orange">95%</span>
            </div>
            <div class="h-2.5 w-full bg-slate-800 rounded-full overflow-hidden">
              <div class="h-full bg-gradient-to-r from-amber-600 to-brand-orange rounded-full" style="width: 95%"></div>
            </div>
          </div>

          <div class="space-y-2">
            <div class="flex justify-between text-sm">
              <span class="font-semibold text-slate-200" data-i18n="ind4">الأمان، التحسين وسرعة الأداء (Performance & Security)</span>
              <span class="font-bold text-emerald-400">90%</span>
            </div>
            <div class="h-2.5 w-full bg-slate-800 rounded-full overflow-hidden">
              <div class="h-full bg-gradient-to-r from-teal-500 to-emerald-400 rounded-full" style="width: 90%"></div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section id="projects" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 scroll-mt-24">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-orange/10 border border-brand-orange/30 text-brand-orange text-xs font-bold">
          <i class="fa-solid fa-folder-open"></i> <span data-i18n="projectsTag">السكشن الثالث: معرض الأعمال والبرامج</span>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white" data-i18n="projectsHeading">
          أبرز المشاريع والتطبيقات البرمجية
        </h2>
        <p class="text-slate-400 text-base leading-relaxed" data-i18n="projectsSubheading">
          نماذج من أعمال واقعية صُممت وطُوّرت بأعلى معايير الجودة لتخدم قطاعات الأعمال المختلفة.
        </p>
      </div>

      <!-- Category Filter Tabs -->
      <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12" id="filterButtonsGroup">
        <button onclick="filterProjects('all')" class="filter-btn active px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm bg-brand-orange text-white shadow-lg shadow-brand-orange/30 transition-all duration-300" data-filter="all">
          <span data-i18n="filterAll">جميع المشاريع</span>
        </button>
        <button onclick="filterProjects('web')" class="filter-btn px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm glass-card text-slate-300 hover:text-white hover:border-brand-orange transition-all duration-300" data-filter="web">
          <span data-i18n="filterWeb">تطبيقات الويب</span>
        </button>
        <button onclick="filterProjects('cloud')" class="filter-btn px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm glass-card text-slate-300 hover:text-white hover:border-brand-orange transition-all duration-300" data-filter="cloud">
          <span data-i18n="filterCloud">أنظمة سحابية وإدارية</span>
        </button>
        <button onclick="filterProjects('commerce')" class="filter-btn px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm glass-card text-slate-300 hover:text-white hover:border-brand-orange transition-all duration-300" data-filter="commerce">
          <span data-i18n="filterCommerce">حلول تقنية ومتاجر</span>
        </button>
      </div>

      <!-- Projects Grid dynamically rendered via JavaScript for language reactivity -->
       @foreach ($projects as $project)
       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">
          <h3> {{ $project->title }} </h3>
          <p> {{ $project->description }} </p>
          @endforeach
          </div>

    </section>

    <section id="contact" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 scroll-mt-24">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-orange/10 border border-brand-orange/30 text-brand-orange text-xs font-bold">
          <i class="fa-solid fa-address-book"></i> <span data-i18n="contactTag">السكشن الرابع: تواصل معي</span>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white" data-i18n="contactHeading">
          دعنا نحول فكرتك إلى مشروع رقمي ناجح
        </h2>
        <p class="text-slate-400 text-base leading-relaxed" data-i18n="contactSubheading">
          سواء كنت تبحث عن استشارة برمجية، بناء نظام متكامل لشركتك، أو التعاقد في مشروع جديد؛ يسعدني دوماً تواصلك.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Contact Info Cards (Phone, Email, Location) -->
        <div class="lg:col-span-5 space-y-5">
          
          <!-- Card: Phone Number -->
          <div class="glass-card glass-card-hover p-6 rounded-3xl flex items-center gap-5 border border-slate-800">
            <div class="w-14 h-14 rounded-2xl bg-brand-orange/15 border border-brand-orange/30 text-brand-orange flex items-center justify-center text-2xl shrink-0">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="flex-1">
              <span class="text-xs font-bold text-slate-400 block mb-0.5" data-i18n="phoneLabel">رقم الجوال / واتساب</span>
              <a href="tel:+967770000000" class="text-lg font-extrabold text-white hover:text-brand-orange transition-colors dir-ltr block ltr:text-left rtl:text-right">
                +967 77X XXX XXX
              </a>
              <span class="text-[11px] text-emerald-400 font-medium" data-i18n="phoneAvail">متاح للاتصال والمراسلة الفورية</span>
            </div>
          </div>

          <!-- Card: Email Address -->
          <div class="glass-card glass-card-hover p-6 rounded-3xl flex items-center gap-5 border border-slate-800">
            <div class="w-14 h-14 rounded-2xl bg-blue-500/15 border border-blue-500/30 text-blue-400 flex items-center justify-center text-2xl shrink-0">
              <i class="fa-solid fa-envelope-open-text"></i>
            </div>
            <div class="flex-1">
              <span class="text-xs font-bold text-slate-400 block mb-0.5" data-i18n="emailLabel">البريد الإلكتروني</span>
              <a href="mailto:contact@jamalalabsi.com" class="text-base sm:text-lg font-bold text-white hover:text-brand-orange transition-colors break-all dir-ltr block ltr:text-left rtl:text-right">
                contact@jamalalabsi.com
              </a>
              <span class="text-[11px] text-slate-400 font-medium" data-i18n="emailAvail">الرد خلال ساعات العمل المعتادة</span>
            </div>
          </div>

          <!-- Card: Location / Address -->
          <div class="glass-card glass-card-hover p-6 rounded-3xl flex items-center gap-5 border border-slate-800">
            <div class="w-14 h-14 rounded-2xl bg-amber-500/15 border border-amber-500/30 text-amber-400 flex items-center justify-center text-2xl shrink-0">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="flex-1">
              <span class="text-xs font-bold text-slate-400 block mb-0.5" data-i18n="locationLabel">الموقع والعنوان</span>
              <h4 class="text-base sm:text-lg font-bold text-white" data-i18n="locationText">
                الحديدة - الجمهورية اليمنية
              </h4>
              <span class="text-[11px] text-slate-400 font-medium" data-i18n="locationRemote">متاح للعمل عن بُعد ومحلياً ودولياً</span>
            </div>
          </div>

          <!-- Direct Work Assurance Banner -->
          <div class="p-6 rounded-3xl bg-gradient-to-r from-brand-orange/20 to-brand-surface border border-brand-orange/30">
            <h5 class="text-white font-bold text-sm flex items-center gap-2 mb-2">
              <i class="fa-solid fa-handshake text-brand-orange"></i>
              <span data-i18n="commitmentTitle">التزام بالدقة والمواعيد</span>
            </h5>
            <p class="text-xs text-slate-300 leading-relaxed" data-i18n="commitmentDesc">
              كل سطر كود يُكتب بعناية فائقة مع توثيق تقني ودعم فني مستمر بعد تسليم المشروع لضمان استقرار العمل وتطوره.
            </p>
          </div>

        </div>

        <!-- Interactive Contact Form -->
        <div class="lg:col-span-7 glass-card p-6 sm:p-10 rounded-3xl border border-slate-800 shadow-2xl relative">
          
          <h3 class="text-2xl font-bold text-white mb-2" data-i18n="formTitle">أرسل رسالتك مباشرة</h3>
          <p class="text-sm text-slate-400 mb-8" data-i18n="formDesc">قم بملء البيانات وسأقوم بمراجعة طلبك والرد عليك في أقرب وقت.</p>

          <!-- Status Message Notification Box -->
          <div id="formNotification" class="hidden mb-6 p-4 rounded-2xl text-sm font-semibold flex items-center gap-3"></div>

          <form id="contactForm" onsubmit="handleFormSubmit(event)" class="space-y-5">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <!-- Name Input -->
              <div>
                <label for="name" class="block text-xs font-bold text-slate-300 mb-2" data-i18n="labelName">الاسم الكامل *</label>
                <div class="relative">
                  <span class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center px-3.5 pointer-events-none text-slate-400">
                    <i class="fa-regular fa-user text-sm"></i>
                  </span>
                  <input type="text" id="name" required class="w-full ltr:pl-10 ltr:pr-4 rtl:pr-10 rtl:pl-4 py-3 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange transition-all">
                </div>
              </div>

              <!-- Phone Input -->
              <div>
                <label for="phone" class="block text-xs font-bold text-slate-300 mb-2" data-i18n="labelPhone">رقم الجوال أو واتساب</label>
                <div class="relative">
                  <span class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center px-3.5 pointer-events-none text-slate-400">
                    <i class="fa-solid fa-phone text-sm"></i>
                  </span>
                  <input type="tel" id="phone" class="w-full ltr:pl-10 ltr:pr-4 rtl:pr-10 rtl:pl-4 py-3 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange transition-all dir-ltr ltr:text-left rtl:text-right">
                </div>
              </div>
            </div>

            <!-- Email Input -->
            <div>
              <label for="email" class="block text-xs font-bold text-slate-300 mb-2" data-i18n="labelEmail">البريد الإلكتروني *</label>
              <div class="relative">
                <span class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center px-3.5 pointer-events-none text-slate-400">
                  <i class="fa-regular fa-envelope text-sm"></i>
                </span>
                <input type="email" id="email" required placeholder="name@example.com" class="w-full ltr:pl-10 ltr:pr-4 rtl:pr-10 rtl:pl-4 py-3 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange transition-all dir-ltr ltr:text-left rtl:text-right">
              </div>
            </div>

            <!-- Subject Select Input -->
            <div>
              <label for="subject" class="block text-xs font-bold text-slate-300 mb-2" data-i18n="labelSubject">نوع المشروع أو موضوع التواصل *</label>
              <select id="subject" required class="w-full px-4 py-3 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange transition-all">
                <option value="" disabled selected data-i18n="optSelect">اختر نوع الخدمة المطلوبة</option>
                <option value="web" data-i18n="optWeb">تطوير موقع ويب أو منصة إلكترونية</option>
                <option value="cloud" data-i18n="optCloud">بناء نظام إداري أو سحابي (ERP / CRM)</option>
                <option value="consult" data-i18n="optConsult">استشارة برمجية / تحسين أداء نظام قائم</option>
                <option value="hire" data-i18n="optHire">فرصة عمل أو شراكة تقنية</option>
                <option value="other" data-i18n="optOther">أخرى</option>
              </select>
            </div>

            <!-- Message Textarea -->
            <div>
              <label for="message" class="block text-xs font-bold text-slate-300 mb-2" data-i18n="labelMessage">تفاصيل الرسالة أو المشروع *</label>
              <textarea id="message" rows="4" required class="w-full p-4 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange transition-all resize-none"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" id="submitBtn" class="w-full py-4 rounded-xl bg-gradient-to-r from-brand-orange via-amber-600 to-orange-700 hover:from-orange-600 hover:to-orange-800 text-white font-extrabold text-base shadow-xl shadow-brand-orange/30 hover:shadow-brand-orange/50 active:scale-[0.99] transition-all flex items-center justify-center gap-2">
              <i class="fa-solid fa-paper-plane"></i>
              <span data-i18n="btnSendMessage">إرسال الرسالة الآن</span>
            </button>

          </form>

        </div>

      </div>

    </section>

  </main>

  <footer class="mt-28 border-t border-slate-800 bg-slate-950/80 backdrop-blur-xl relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center justify-between">
        
        <!-- Logo & Bio in Footer -->
        <div class="md:col-span-6 space-y-3">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand-surface border border-brand-orange text-brand-orange">
              <i class="fa-solid fa-laptop-code"></i>
            </div>
            <span class="text-xl font-black text-white" id="footerBrand">م. جمال <span class="text-brand-orange">العبسي</span></span>
          </div>
          <p class="text-slate-400 text-xs sm:text-sm max-w-md leading-relaxed" data-i18n="footerBio">
            مهندس برمجيات وتطوير حلول رقمية احترافية، تحويل الرؤى والأفكار إلى واقع رقمي متين بأحدث التقنيات البرمجية.
          </p>
        </div>

        <!-- Quick Links in Footer -->
        <div class="md:col-span-6 flex flex-wrap items-center ltr:md:justify-end rtl:md:justify-end gap-6 text-sm font-semibold text-slate-300">
          <a href="#hero" class="hover:text-brand-orange transition-colors" data-i18n="navHome">الرئيسية</a>
          <a href="#skills" class="hover:text-brand-orange transition-colors" data-i18n="navSkills">المهارات</a>
          <a href="#projects" class="hover:text-brand-orange transition-colors" data-i18n="navProjects">المشاريع</a>
          <a href="#contact" class="hover:text-brand-orange transition-colors" data-i18n="navContact">تواصل معي</a>
          <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-10 h-10 rounded-xl bg-slate-800 hover:bg-brand-orange text-white flex items-center justify-center transition-all shadow-md" title="Back to Top">
            <i class="fa-solid fa-arrow-up text-sm"></i>
          </button>
        </div>

      </div>

      <div class="mt-10 pt-6 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
        <div>
          <span data-i18n="copyrightText">جميع الحقوق محفوظة ©</span> <span id="currentYear"></span> <span id="copyrightName">م. جمال العبسي</span>
        </div>
        <div class="flex items-center gap-4">
          <span data-i18n="builtWith">تم التصميم والتطوير باستخدام HTML & Tailwind CSS</span>
        </div>
      </div>
    </div>
  </footer>

  <div id="projectModal" class="fixed inset-0 z-50 hidden bg-slate-950/85 backdrop-blur-md flex items-center justify-center p-4">
    <div class="glass-card bg-slate-900 border border-slate-700 max-w-lg w-full rounded-3xl p-6 sm:p-8 shadow-2xl relative transform transition-all scale-95 opacity-0 duration-300" id="modalBox">
      
      <button onclick="closeProjectModal()" class="absolute top-5 ltr:right-5 rtl:left-5 w-8 h-8 rounded-full bg-slate-800 text-slate-400 hover:text-white hover:bg-rose-500 flex items-center justify-center transition-colors">
        <i class="fa-solid fa-xmark text-sm"></i>
      </button>

      <div class="flex items-center gap-3 text-brand-orange mb-3">
        <i class="fa-solid fa-laptop-code text-2xl"></i>
        <span class="text-xs font-bold uppercase tracking-wider" data-i18n="modalBadge">تفاصيل المشروع البرمجي</span>
      </div>

      <h3 id="modalTitle" class="text-2xl font-black text-white mb-3">عنوان المشروع</h3>
      <p id="modalDesc" class="text-slate-300 text-sm leading-relaxed mb-6">الوصف هنا...</p>

      <div class="mb-6">
        <h4 class="text-xs font-bold text-slate-400 mb-2" data-i18n="modalStackLabel">التقنيات المستخدمة:</h4>
        <div id="modalTags" class="flex flex-wrap gap-2"></div>
      </div>

      <div class="flex items-center gap-3 pt-4 border-t border-slate-800">
        <a href="#contact" onclick="closeProjectModal()" class="flex-1 py-3 text-center rounded-xl bg-brand-orange text-white font-bold text-sm hover:bg-brand-orangeHover transition-colors" data-i18n="modalRequestSimilar">
          اطلب مشروعاً مماثلاً
        </a>
        <button onclick="closeProjectModal()" class="px-5 py-3 rounded-xl bg-slate-800 text-slate-300 hover:text-white text-sm font-semibold transition-colors" data-i18n="modalClose">
          إغلاق
        </button>
      </div>

    </div>
  </div>

  <script>
    // State management: Current Language
    let currentLang = 'ar';
    let currentFilter = 'all';

    // Bilingual Data Store
    const translations = {
      ar: {
        brandName: "<span>م. جمال</span> <span class='text-brand-orange font-black'>العبسي</span>",
        brandSub: "مهندس برمجيات ونظم",
        footerBrand: "م. جمال <span class='text-brand-orange'>العبسي</span>",
        copyrightName: "م. جمال العبسي",
        langBtnLabel: "English",
        mobileLang: "EN",
        codeName: "'م. جمال العبسي'",
        
        // Navigation
        navHome: "الرئيسية",
        navSkills: "المهارات والخبرات",
        navProjects: "المشاريع والبرامج",
        navContact: "تواصل معي",
        btnStartProject: "ابدأ مشروعك",

        // Hero
        heroBadge: "متاح لاستلام المشاريع البرمجية وتطوير الأنظمة",
        heroGreeting: "مرحباً بك، أنا",
        heroName: "م. جمال العبسي",
        heroDescription: "مهندس برمجيات متخصص في بناء تطبيقات الويب المتقدمة، الأنظمة السحابية المعقدة، والحلول الرقمية الذكية ذات الأداء الفائق والواجهات العصرية.",
        statExp: "سنوات خبرة",
        statProjects: "مشروع ناجح",
        statClients: "رضا العملاء",
        btnBrowseProjects: "تصفح المشاريع",
        btnContactDirect: "تواصل معي مباشرة",
        socialFollow: "تابعني على:",
        badge1Title: "تطوير واجهات ذكية",
        badge2Title: "أنظمة سحابية متينة",

        // Skills
        skillsTag: "المهارات والقدرات التقنية",
        skillsHeading: "أحدث التقنيات وأفضل ممارسات البرمجة",
        skillsSubheading: "أعتمد على بنية برمجية حديثة تمزج بين جمال التصميم، سرعة الاستجابة، وأمان البيانات لتلبية احتياجات الأعمال المعاصرة.",
        skill1Title: "تطوير الواجهات الأمامية (Frontend)",
        skill1Desc: "تصميم واجهات مستخدم تفاعلية وجذابة، متوافقة تماماً مع معايير تجربة المستخدم (UI/UX) وسرعة التحميل.",
        skill2Title: "الأنظمة الخلفية وقواعد البيانات (Backend)",
        skill2Desc: "بناء واجهات برمجة التطبيقات (APIs) القوية، إدارة السيرفرات وقواعد البيانات الضخمة بكفاءة وموثوقية عالية.",
        skill3Title: "الحلول السحابية والـ DevOps",
        skill3Desc: "أتمتة النشر المستمر (CI/CD)، حماية التطبيقات، ورفعها على بيئات استضافة مرنة ومستقرة لتحمل الزيارات العالية.",
        indicatorsTitle: "مؤشرات المهارة الهندسية ومعدل الجاهزية",
        ind1: "تطوير تطبيقات الويب الكاملة (Full-Stack Web)",
        ind2: "تصميم وتخطيط قواعد البيانات (Database Design)",
        ind3: "تصميم واجهات المستخدم الحديثة (Tailwind & UI/UX)",
        ind4: "الأمان، التحسين وسرعة الأداء (Performance & Security)",

        // Projects
        projectsTag: "السكشن الثالث: معرض الأعمال والبرامج",
        projectsHeading: "أبرز المشاريع والتطبيقات البرمجية",
        projectsSubheading: "نماذج من أعمال واقعية صُممت وطُوّرت بأعلى معايير الجودة لتخدم قطاعات الأعمال المختلفة.",
        filterAll: "جميع المشاريع",
        filterWeb: "تطبيقات الويب",
        filterCloud: "أنظمة سحابية وإدارية",
        filterCommerce: "حلول تقنية ومتاجر",
        viewDetails: "عرض التفاصيل",
        statusReady: "متاح للإنتاج",

        // Contact
        contactTag: "السكشن الرابع: تواصل معي",
        contactHeading: "دعنا نحول فكرتك إلى مشروع رقمي ناجح",
        contactSubheading: "سواء كنت تبحث عن استشارة برمجية، بناء نظام متكامل لشركتك، أو التعاقد في مشروع جديد؛ يسعدني دوماً تواصلك.",
        phoneLabel: "رقم الجوال / واتساب",
        phoneAvail: "متاح للاتصال والمراسلة الفورية",
        emailLabel: "البريد الإلكتروني",
        emailAvail: "الرد خلال ساعات العمل المعتادة",
        locationLabel: "الموقع والعنوان",
        locationText: "الحديدة - الجمهورية اليمنية",
        locationRemote: "متاح للعمل عن بُعد ومحلياً ودولياً",
        commitmentTitle: "التزام بالدقة والمواعيد",
        commitmentDesc: "كل سطر كود يُكتب بعناية فائقة مع توثيق تقني ودعم فني مستمر بعد تسليم المشروع لضمان استقرار العمل وتطوره.",
        formTitle: "أرسل رسالتك مباشرة",
        formDesc: "قم بملء البيانات وسأقوم بمراجعة طلبك والرد عليك في أقرب وقت.",
        labelName: "الاسم الكامل *",
        namePlaceholder: "مثال: أحمد محمد",
        labelPhone: "رقم الجوال أو واتساب",
        phonePlaceholder: "+967 77X XXX XXX",
        labelEmail: "البريد الإلكتروني *",
        labelSubject: "نوع المشروع أو موضوع التواصل *",
        optSelect: "اختر نوع الخدمة المطلوبة",
        optWeb: "تطوير موقع ويب أو منصة إلكترونية",
        optCloud: "بناء نظام إداري أو سحابي (ERP / CRM)",
        optConsult: "استشارة برمجية / تحسين أداء نظام قائم",
        optHire: "فرصة عمل أو شراكة تقنية",
        optOther: "أخرى",
        labelMessage: "تفاصيل الرسالة أو المشروع *",
        messagePlaceholder: "اكتب نبذة مختصرة عن فكرة مشروعك، متطلباتك، أو أي استفسار ترغب في مناقشته...",
        btnSendMessage: "إرسال الرسالة الآن",
        btnSending: "جاري الإرسال...",

        // Modal & Footer
        modalBadge: "تفاصيل المشروع البرمجي",
        modalStackLabel: "التقنيات المستخدمة:",
        modalRequestSimilar: "اطلب مشروعاً مماثلاً",
        modalClose: "إغلاق",
        footerBio: "مهندس برمجيات وتطوير حلول رقمية احترافية، تحويل الرؤى والأفكار إلى واقع رقمي متين بأحدث التقنيات البرمجية.",
        copyrightText: "جميع الحقوق محفوظة ©",
        builtWith: "تم التصميم والتطوير باستخدام HTML & Tailwind CSS",
        toastSuccessTitle: "شكراً لك!",
        toastSuccessMsg: "تم استلام رسالتك بنجاح وسيتواصل معك م. جمال العبسي في أقرب وقت."
      },
      en: {
        brandName: "<span>Eng. Jamal</span> <span class='text-brand-orange font-black'>Al-Absi</span>",
        brandSub: "SOFTWARE ENGINEER & ARCHITECT",
        footerBrand: "Eng. Jamal <span class='text-brand-orange'>Al-Absi</span>",
        copyrightName: "Eng. Jamal Al-Absi",
        langBtnLabel: "العربية (AR)",
        mobileLang: "AR",
        codeName: "'Eng. Jamal Al-Absi'",

        // Navigation
        navHome: "Home",
        navSkills: "Skills & Stack",
        navProjects: "Projects & Apps",
        navContact: "Contact Me",
        btnStartProject: "Start Project",

        // Hero
        heroBadge: "Available for Software Projects & System Development",
        heroGreeting: "Hello, I am",
        heroName: "Eng. Jamal Al-Absi",
        heroDescription: "Senior Software Engineer specializing in modern scalable web applications, robust cloud backends, and high-performance digital architectures.",
        statExp: "Years of Experience",
        statProjects: "Successful Projects",
        statClients: "Client Satisfaction",
        btnBrowseProjects: "Browse Projects",
        btnContactDirect: "Contact Me Directly",
        socialFollow: "Follow me on:",
        badge1Title: "Intelligent UI Engineering",
        badge2Title: "Resilient Cloud Systems",

        // Skills
        skillsTag: "Technical Competencies & Stack",
        skillsHeading: "Modern Technologies & Engineering Best Practices",
        skillsSubheading: "Utilizing modern architectural paradigms that merge sleek aesthetics, responsive performance, and strict security to serve enterprise needs.",
        skill1Title: "Frontend Engineering (Client-Side)",
        skill1Desc: "Crafting highly interactive, accessible web interfaces strictly compliant with modern UI/UX guidelines and fast rendering.",
        skill2Title: "Backend Architecture & Databases",
        skill2Desc: "Designing robust RESTful & microservice APIs, distributed caches, and database schemas built for reliability.",
        skill3Title: "Cloud Solutions & DevOps",
        skill3Desc: "Continuous integration & deployment (CI/CD), security audits, Docker orchestration, and high-availability servers.",
        indicatorsTitle: "Engineering Proficiency & Readiness Scores",
        ind1: "Full-Stack Web Application Development",
        ind2: "Database Architecture & Optimization",
        ind3: "Modern UI/UX Design & Tailwind CSS",
        ind4: "System Performance, Security & Scaling",

        // Projects
        projectsTag: "Section 3: Software Projects & Apps",
        projectsHeading: "Featured Projects & Production Systems",
        projectsSubheading: "Selected real-world applications designed and developed to deliver high business efficiency.",
        filterAll: "All Projects",
        filterWeb: "Web Apps",
        filterCloud: "Cloud ERP & Portals",
        filterCommerce: "Platforms & E-Commerce",
        viewDetails: "View Details",
        statusReady: "Production Ready",

        // Contact
        contactTag: "Section 4: Contact Me",
        contactHeading: "Let's Turn Your Concept Into A Resilient Product",
        contactSubheading: "Whether you need a software consultation, end-to-end ERP build, or a technical partner, feel free to reach out anytime.",
        phoneLabel: "Phone / WhatsApp",
        phoneAvail: "Available for calls & direct instant messages",
        emailLabel: "Official Email",
        emailAvail: "Replies within standard working hours",
        locationLabel: "Location & Office",
        locationText: "Al-Hudaydah, Yemen",
        locationRemote: "Available for remote work worldwide",
        commitmentTitle: "Precision & On-Time Delivery",
        commitmentDesc: "Every line of code is written with clean standards, continuous documentation, and dependable support after deployment.",
        formTitle: "Send a Direct Message",
        formDesc: "Fill in the details and I will review your requirements and respond promptly.",
        labelName: "Full Name *",
        namePlaceholder: "e.g., John Doe",
        labelPhone: "Phone or WhatsApp",
        phonePlaceholder: "+967 77X XXX XXX",
        labelEmail: "Email Address *",
        labelSubject: "Project Type / Subject *",
        optSelect: "Select required service",
        optWeb: "Custom Web Application / Platform",
        optCloud: "Enterprise Cloud ERP / CRM System",
        optConsult: "Software Architecture & Performance Consultation",
        optHire: "Employment / Technical Partnership",
        optOther: "Other Inquiry",
        labelMessage: "Project Details / Message *",
        messagePlaceholder: "Briefly describe your project scope, targets, or timeline...",
        btnSendMessage: "Send Message Now",
        btnSending: "Sending...",

        // Modal & Footer
        modalBadge: "Software Project Details",
        modalStackLabel: "Technologies Applied:",
        modalRequestSimilar: "Request Similar Solution",
        modalClose: "Close",
        footerBio: "Software Engineer providing bespoke digital products, turning visions into scalable solutions using cutting-edge technologies.",
        copyrightText: "All Rights Reserved ©",
        builtWith: "Designed & Built with HTML5 & Tailwind CSS",
        toastSuccessTitle: "Thank you!",
        toastSuccessMsg: "Your message has been received successfully. Eng. Jamal Al-Absi will get back to you shortly."
      }
    };

    // Bilingual Project Database
    const projectsList = [
      {
        id: 1,
        category: "cloud",
        icon: "fa-solid fa-chart-pie",
        iconColor: "text-brand-orange",
        badgeColor: "bg-brand-orange",
        badge: { ar: "نظام سحابي ERP", en: "Cloud ERP System" },
        title: {
          ar: "منظومة سحابية ذكية لإدارة المنشآت",
          en: "Smart Enterprise Cloud ERP Platform"
        },
        desc: {
          ar: "برنامج متكامل يشتمل على إدارة المبيعات، الفواتير، المخزون، ونظام صلاحيات متقدم للموظفين مع لوحة إحصائيات فورية ورسوم بيانية تفاعلية.",
          en: "Comprehensive management system featuring sales, invoicing, inventory tracking, role-based security, and real-time analytical dashboards."
        },
        modalDesc: {
          ar: "نظام إدارة شامل ومصمم بمرونة متناهية يلبي متطلبات الشركات والمؤسسات مع تقارير محاسبية تفصيلية وتوافق تام مع الفوترة الإلكترونية ومزامنة الفروع السحابية.",
          en: "Enterprise-grade ERP system built for scalability with detailed accounting reports, electronic tax invoicing compatibility, and multi-branch cloud sync."
        },
        tags: ["React.js", "Node.js", "PostgreSQL", "Tailwind CSS", "Docker"]
      },
      {
        id: 2,
        category: "commerce",
        icon: "fa-solid fa-basket-shopping",
        iconColor: "text-brand-glowBlue",
        badgeColor: "bg-blue-600",
        badge: { ar: "متجر إلكتروني متكامل", en: "E-Commerce Suite" },
        title: {
          ar: "منصة تجارة وتسوق متعددة البائعين",
          en: "Multi-Vendor Marketplace Platform"
        },
        desc: {
          ar: "متجر إلكتروني عالي السرعة مع بوابات دفع إلكترونية آمنة، نظام إشعارات الرسائل، وإدارة سلسة للطلبات والشحن عبر واجهة هاتفية ممتازة.",
          en: "High-speed digital store engine featuring multi-gateway checkout, automated SMS alerts, and seamless logistics order tracking for mobile shoppers."
        },
        modalDesc: {
          ar: "حل برمجي تجاري متكامل يتيح للبائعين عرض منتجاتهم مع لوحات تحكم مستقلة ومحرك بحث ذكي وسريع متوافق مع كافة أحجام الشاشات.",
          en: "Scalable commercial solution featuring dedicated vendor dashboards, smart filtering, indexed search, and responsive mobile-first payment flows."
        },
        tags: ["Next.js", "Stripe & Payment Gateways", "MongoDB", "Tailwind CSS", "REST API"]
      },
      {
        id: 3,
        category: "web",
        icon: "fa-solid fa-network-wired",
        iconColor: "text-emerald-400",
        badgeColor: "bg-emerald-600",
        badge: { ar: "تطبيق ويب مباشر", en: "Real-Time Web Platform" },
        title: {
          ar: "منصة تواصل ومحادثة فورية للفرق",
          en: "Real-Time Team Collaboration Suite"
        },
        desc: {
          ar: "تطبيق لإدارة المهام والتواصل اللحظي عبر WebSockets مع مشاركة الملفات، الغرف الصوتية، وتنبيهات فورية مشفرة من طرف لطرف.",
          en: "Task management and instantaneous socket-driven team communication tool with end-to-end encrypted messaging, audio channels, and file sharing."
        },
        modalDesc: {
          ar: "تطبيق ويب خفيف وسريع يعتمد على تقنيات البث المباشر للأحداث وإدارة غرف العمل المشتركة مع نظام إشعارات فوري ومزامنة فورية للبيانات.",
          en: "Ultra-low-latency web collaboration platform powered by WebSockets and Redis channels, enabling synchronous updates across remote teams."
        },
        tags: ["WebSockets", "Node.js", "Express", "Redis Cache", "Tailwind CSS"]
      }
    ];

    function renderProjects() {
      const grid = document.getElementById('projectsGrid');
      grid.innerHTML = '';

      const filtered = projectsList.filter(p => currentFilter === 'all' || p.category === currentFilter);

      filtered.forEach(p => {
        const card = document.createElement('div');
        card.className = "project-card glass-card glass-card-hover rounded-3xl overflow-hidden flex flex-col group";
        
        card.innerHTML = `
          <div class="relative h-52 sm:h-56 bg-slate-800 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/30 to-transparent z-10"></div>
            <div class="w-full h-full bg-gradient-to-br from-slate-900 via-brand-surface to-slate-900 flex items-center justify-center relative p-6 group-hover:scale-105 transition-transform duration-500">
              <div class="text-center">
                <i class="${p.icon} text-5xl ${p.iconColor} mb-2"></i>
                <div class="text-xs font-mono text-slate-400">${p.tags[0]} • Architecture</div>
              </div>
            </div>
            <span class="absolute top-4 ltr:left-4 rtl:right-4 z-20 px-3 py-1 rounded-full text-[11px] font-bold ${p.badgeColor} text-white shadow">
              ${p.badge[currentLang]}
            </span>
          </div>

          <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
            <div>
              <h3 class="text-xl font-bold text-white group-hover:text-brand-orange transition-colors">
                ${p.title[currentLang]}
              </h3>
              <p class="text-sm text-slate-300 mt-2 leading-relaxed">
                ${p.desc[currentLang]}
              </p>
            </div>

            <div class="flex flex-wrap gap-1.5 pt-2">
              ${p.tags.map(t => `<span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-slate-800 text-slate-300">${t}</span>`).join('')}
            </div>

            <div class="pt-3 border-t border-slate-800 flex items-center justify-between">
              <button onclick="openProjectModalById(${p.id})" class="text-sm font-bold text-brand-orange hover:text-amber-400 flex items-center gap-1.5 transition-colors">
                <span>${translations[currentLang].viewDetails}</span>
                <i class="fa-solid fa-arrow-${currentLang === 'ar' ? 'left' : 'right'} text-xs"></i>
              </button>
              <div class="flex items-center gap-1.5 text-slate-400 text-xs">
                <i class="fa-solid fa-circle-check text-emerald-400"></i>
                <span>${translations[currentLang].statusReady}</span>
              </div>
            </div>
          </div>
        `;
        grid.appendChild(card);
      });
    }

    // Filter projects handler
    function filterProjects(category) {
      currentFilter = category;
      const buttons = document.querySelectorAll('.filter-btn');

      buttons.forEach(btn => {
        if (btn.getAttribute('data-filter') === category) {
          btn.className = "filter-btn active px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm bg-brand-orange text-white shadow-lg shadow-brand-orange/30 transition-all duration-300";
        } else {
          btn.className = "filter-btn px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm glass-card text-slate-300 hover:text-white hover:border-brand-orange transition-all duration-300";
        }
      });

      renderProjects();
    }

    // Modal triggering using project ID
    function openProjectModalById(id) {
      const p = projectsList.find(item => item.id === id);
      if (!p) return;

      document.getElementById('modalTitle').textContent = p.title[currentLang];
      document.getElementById('modalDesc').textContent = p.modalDesc[currentLang];

      const tagsContainer = document.getElementById('modalTags');
      tagsContainer.innerHTML = '';
      p.tags.forEach(tag => {
        const span = document.createElement('span');
        span.className = 'px-3 py-1 rounded-lg text-xs font-semibold bg-brand-orange/20 border border-brand-orange/30 text-brand-orangeGlow';
        span.textContent = tag;
        tagsContainer.appendChild(span);
      });

      const modal = document.getElementById('projectModal');
      const modalBox = document.getElementById('modalBox');
      modal.classList.remove('hidden');
      setTimeout(() => {
        modalBox.classList.remove('scale-95', 'opacity-0');
        modalBox.classList.add('scale-100', 'opacity-100');
      }, 10);
    }

    function closeProjectModal() {
      const modal = document.getElementById('projectModal');
      const modalBox = document.getElementById('modalBox');
      modalBox.classList.remove('scale-100', 'opacity-100');
      modalBox.classList.add('scale-95', 'opacity-0');
      setTimeout(() => {
        modal.classList.add('hidden');
      }, 250);
    }

    // Close modal on background click
    document.getElementById('projectModal').addEventListener('click', (e) => {
      if (e.target === document.getElementById('projectModal')) {
        closeProjectModal();
      }
    });

    function applyTranslations() {
      const t = translations[currentLang];
      const html = document.documentElement;

      // Update HTML direction and language
      html.setAttribute('lang', currentLang);
      html.setAttribute('dir', currentLang === 'ar' ? 'rtl' : 'ltr');

      // Update brand elements
      document.getElementById('brandTitle').innerHTML = t.brandName;
      document.getElementById('brandSubtitle').textContent = t.brandSub;
      document.getElementById('footerBrand').innerHTML = t.footerBrand;
      document.getElementById('copyrightName').textContent = t.copyrightName;
      document.getElementById('langDisplayLabel').textContent = t.langBtnLabel;
      document.getElementById('mobileLangLabel').textContent = t.mobileLang;
      document.getElementById('codeName').textContent = t.codeName;

      // Update Form Placeholders
      document.getElementById('name').placeholder = t.namePlaceholder;
      document.getElementById('phone').placeholder = t.phonePlaceholder;
      document.getElementById('message').placeholder = t.messagePlaceholder;

      // Update All elements with data-i18n attributes
      document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (t[key]) {
          el.textContent = t[key];
        }
      });

      // Re-render project cards in the selected language
      renderProjects();
    }

    function toggleLanguage() {
      currentLang = currentLang === 'ar' ? 'en' : 'ar';
      applyTranslations();
    }

    // Mobile Menu Controls
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');

    mobileBtn.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      if (isHidden) {
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.remove('fa-bars-staggered');
        menuIcon.classList.add('fa-xmark');
      } else {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars-staggered');
      }
    });

    document.querySelectorAll('.mobile-link').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars-staggered');
      });
    });

    function handleFormSubmit(event) {
      event.preventDefault();
      const submitBtn = document.getElementById('submitBtn');
      const notification = document.getElementById('formNotification');
      const name = document.getElementById('name').value;
      const t = translations[currentLang];

      submitBtn.disabled = true;
      submitBtn.innerHTML = `<i class="fa-solid fa-circle-notch fa-spin"></i> <span>${t.btnSending}</span>`;

      setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = `<i class="fa-solid fa-paper-plane"></i> <span>${t.btnSendMessage}</span>`;

        notification.className = "mb-6 p-4 rounded-2xl text-sm font-semibold flex items-center gap-3 bg-emerald-950/80 border border-emerald-500/80 text-emerald-200";
        notification.innerHTML = `
          <i class="fa-solid fa-circle-check text-emerald-400 text-xl shrink-0"></i>
          <div>
            <div class="font-bold text-white">${t.toastSuccessTitle} ${name}</div>
            <div>${t.toastSuccessMsg}</div>
          </div>
        `;
        notification.classList.remove('hidden');
        document.getElementById('contactForm').reset();

        setTimeout(() => {
          notification.classList.add('hidden');
        }, 7000);
      }, 1000);
    }

    // Initialize application on load
    window.addEventListener('DOMContentLoaded', () => {
      document.getElementById('currentYear').textContent = new Date().getFullYear();
      applyTranslations();
    });
  </script>
</body>
</html>


        <!-- @foreach ($skills as $skill)
    <div>
        <h2> {{ $skill->title }} </h2>
        <p> {{ $skill->description }} </p>
    </div>
@endforeach -->

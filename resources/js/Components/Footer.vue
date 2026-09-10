<template>
    <footer class="bg-[#03070f] border-t border-[#1e2a3d]" aria-label="Site footer">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Top row -->
            <div class="py-12 grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="relative w-8 h-8 rounded-full overflow-hidden border border-blue-500/50 shadow-sm shadow-blue-600/30 shrink-0 bg-blue-950">
                            <img
                                :src="profileImg"
                                alt="John Russel N. Soreda"
                                class="w-full h-full object-cover object-top"
                            />
                        </div>
                        <span class="text-sm font-bold text-white tracking-wide">John Russel N. Soreda</span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm mb-3">
                        "I combine technology, digital communications, and creative production to build digital experiences and campaigns that move people to action."
                    </p>
                    <p class="text-xs text-slate-500">
                        IT Professional · Social Media Manager &amp; Marketing · Web Developer · Digital Communications Specialist
                    </p>
                </div>

                <!-- Nav links -->
                <nav aria-label="Footer navigation">
                    <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-4">Navigation</h3>
                    <div class="grid grid-cols-2 gap-2">
                        <div v-for="item in navLinks" :key="item.id">
                            <button
                                @click="scrollTo(item.id)"
                                class="text-xs text-slate-400 hover:text-blue-400 transition-colors focus-visible:ring-2 focus-visible:ring-blue-400 rounded-sm text-left"
                            >
                                {{ item.label }}
                            </button>
                        </div>
                    </div>
                </nav>

                <!-- Tech stack / Built with -->
                <div>
                    <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-4">Built With</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            v-for="tech in builtWith"
                            :key="tech"
                            class="px-2 py-0.5 text-xs border border-[#1e2a3d] text-slate-500 rounded-sm"
                        >{{ tech }}</span>
                    </div>
                    <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-2">Direct Contact</h3>
                    <p class="text-xs text-slate-400">Ortigas, San Antonio, Pasig City / Metro Manila</p>
                    <p class="text-xs text-slate-400 mt-1">soredajohnrussel15@gmail.com</p>
                    <p class="text-xs text-slate-400 mt-1">+63 938 865 7225</p>
                    <p class="text-xs mt-1.5">
                        <a href="https://github.com/russelioo" target="_blank" rel="noopener noreferrer" class="text-blue-400 hover:underline">
                            github.com/russelioo
                        </a>
                    </p>

                    <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mt-5 mb-2">Official Channels</h3>
                    <div class="flex flex-col gap-1 text-xs">
                        <a href="https://www.facebook.com/PilarShrineSorsogon" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-1">
                            <span>Facebook: @PilarShrineSorsogon ↗</span>
                        </a>
                        <a href="https://www.facebook.com/larpi2ph" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-1">
                            <span>Facebook: LARPI ↗</span>
                        </a>
                        <a href="https://www.facebook.com/OLPSMinistryoftheAltarServersPilar/" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-1">
                            <span>Facebook: OLPS Youth &amp; Altar Servers ↗</span>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61575266135475" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-1">
                            <span>Facebook: Pilar NCHS Alumni ↗</span>
                        </a>
                        <a href="https://www.facebook.com/justflowers2022ph/" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-1">
                            <span>Facebook: Just_Flowers ↗</span>
                        </a>
                        <a href="https://www.instagram.com/justflowers2022ph/" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-pink-400 transition-colors flex items-center gap-1">
                            <span>Instagram: Just_Flowers ↗</span>
                        </a>
                        <a href="https://www.youtube.com/@PilarShrineSorsogon" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-red-400 transition-colors flex items-center gap-1">
                            <span>YouTube: @PilarShrineSorsogon ↗</span>
                        </a>
                        <a href="https://www.tiktok.com/@PilarShrineSorsogon" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-slate-200 transition-colors flex items-center gap-1">
                            <span>TikTok: @PilarShrineSorsogon ↗</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="py-6 border-t border-[#1e2a3d] flex flex-col sm:flex-row items-center justify-between gap-3">
                <p class="text-xs text-slate-600">
                    © {{ year }} John Russel N. Soreda. All rights reserved.
                </p>
                <p class="text-xs text-slate-600">
                    Bachelor of Science in Information Technology · Bicol University
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { useAsset } from '@/composables/useAsset.js';

const profileImg = useAsset('/images/profile.jpg');
const year = new Date().getFullYear();

const navLinks = [
    { id: 'home',         label: 'Home' },
    { id: 'about',        label: 'About' },
    { id: 'services',     label: 'What I Do' },
    { id: 'software',     label: 'Software & Dev' },
    { id: 'social',       label: 'Social Media' },
    { id: 'campaigns',    label: 'Campaigns' },
    { id: 'case-studies', label: 'Case Studies' },
    { id: 'gallery',      label: 'Creative Gallery' },
    { id: 'tech',         label: 'Tools & Skills' },
    { id: 'experience',   label: 'Experience' },
    { id: 'credentials',  label: 'Credentials' },
    { id: 'why',          label: 'Why Me' },
    { id: 'contact',      label: 'Contact' },
];

const builtWith = ['Laravel 13', 'Vue 3', 'Tailwind CSS v4', 'Vite 8'];

function scrollTo(id) {
    const el = document.getElementById(id);
    if (el) {
        const offset = 72;
        const top = el.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
    }
}
</script>

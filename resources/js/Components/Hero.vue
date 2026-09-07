<template>
    <section
        id="home"
        class="relative min-h-screen flex items-center justify-center overflow-hidden grid-overlay"
        aria-label="Hero section"
    >
        <!-- Background glows -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-blue-900/15 rounded-full blur-3xl" />
            <div class="absolute top-1/4 right-1/4 w-80 h-80 bg-blue-800/08 rounded-full blur-2xl" />
            <div class="absolute top-0 left-1/2 w-px h-48 bg-gradient-to-b from-transparent via-blue-600/25 to-transparent" />
            <div class="absolute bottom-0 left-1/3 w-px h-32 bg-gradient-to-b from-transparent via-blue-600/15 to-transparent" />
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 pt-28 pb-16">
            <div class="max-w-5xl">

                <!-- Availability pill -->
                <div class="flex items-center gap-3 mb-10 animate-fade-in" style="animation-delay:0.1s;animation-fill-mode:both">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75" aria-hidden="true" />
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500" aria-hidden="true" />
                    </span>
                    <span class="text-xs font-bold tracking-[0.3em] uppercase text-blue-400">Available for Opportunities</span>
                </div>

                <!-- Name -->
                <p class="text-sm lg:text-base font-semibold text-slate-400 tracking-[0.25em] uppercase mb-4 animate-fade-up" style="animation-delay:0.2s;animation-fill-mode:both">
                    John Russel N. Soreda
                </p>

                <!-- Main headline -->
                <h1 class="mb-6 animate-fade-up" style="animation-delay:0.3s;animation-fill-mode:both">
                    <span class="block text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black leading-[0.9] tracking-tight text-white">IT Professional</span>
                    <span class="block text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-black leading-[0.95] tracking-tight gradient-text py-0.5">Social Media Manager &amp; Marketing</span>
                    <span class="block text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black leading-[0.9] tracking-tight text-white">Web Developer</span>
                </h1>

                <!-- Sub roles -->
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mb-8 animate-fade-up" style="animation-delay:0.45s;animation-fill-mode:both">
                    <div class="w-8 h-px bg-blue-600 hidden sm:block" aria-hidden="true" />
                    <span v-for="(role, i) in subRoles" :key="role" class="text-xs sm:text-sm font-semibold text-slate-400 tracking-wide">
                        {{ role }}<span v-if="i < subRoles.length - 1" class="ml-4 text-blue-700" aria-hidden="true">·</span>
                    </span>
                </div>

                <!-- Tagline -->
                <p class="text-base lg:text-lg text-slate-400 max-w-2xl leading-relaxed mb-4 animate-fade-up" style="animation-delay:0.55s;animation-fill-mode:both">
                    I combine technology, digital communications, and creative production to build systems, campaigns, and digital experiences.
                </p>

                <!-- Credibility line -->
                <p class="text-xs text-slate-600 tracking-widest uppercase mb-12 animate-fade-up" style="animation-delay:0.6s;animation-fill-mode:both">
                    BS Information Technology · Bicol University
                </p>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row flex-wrap items-start sm:items-center gap-4 mb-16 animate-fade-up" style="animation-delay:0.72s;animation-fill-mode:both">
                    <button @click="scrollTo('campaigns')"
                        class="group inline-flex items-center gap-3 px-7 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs tracking-widest uppercase rounded-sm transition-all duration-300 hover:shadow-lg hover:shadow-blue-600/25 focus-visible:ring-2 focus-visible:ring-blue-400">
                        View My Work
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                    <button @click="scrollTo('contact')"
                        class="group inline-flex items-center gap-3 px-7 py-3.5 border border-blue-600/60 hover:border-blue-500 text-blue-300 hover:text-white font-bold text-xs tracking-widest uppercase rounded-sm transition-all duration-300 focus-visible:ring-2 focus-visible:ring-blue-400">
                        Contact Me
                    </button>
                    <button
                        @click="openResumeModal"
                        class="group inline-flex items-center gap-2 px-7 py-3.5 border border-slate-700 hover:border-slate-500 text-slate-400 hover:text-white font-bold text-xs tracking-widest uppercase rounded-sm transition-all duration-300 focus-visible:ring-2 focus-visible:ring-blue-400 cursor-pointer"
                        aria-label="Download or View Resume"
                    >
                        <svg class="w-3.5 h-3.5 transition-transform group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download CV
                    </button>
                </div>

                <!-- Stats -->
                <div class="flex flex-wrap items-center gap-8 pt-8 border-t border-[#1e2a3d] animate-fade-up" style="animation-delay:0.9s;animation-fill-mode:both">
                    <div v-for="stat in stats" :key="stat.label" class="flex flex-col">
                        <span class="text-2xl font-black text-white">{{ stat.value }}</span>
                        <span class="text-xs text-slate-500 tracking-wide mt-0.5">{{ stat.label }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2" aria-hidden="true">
            <span class="text-xs text-slate-700 tracking-widest uppercase">Scroll</span>
            <div class="w-px h-10 bg-gradient-to-b from-blue-600/50 to-transparent" />
        </div>

        <!-- ─── Resume Selection Modal ─── -->
        <Teleport to="body">
            <transition name="modal">
                <div
                    v-if="resumeModalOpen"
                    class="fixed inset-0 z-[100] flex items-center justify-center p-4"
                    @click.self="closeResumeModal"
                    role="dialog"
                    aria-label="Download Official Resume"
                    aria-modal="true"
                >
                    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" @click="closeResumeModal" aria-hidden="true" />

                    <div class="relative w-full max-w-xl bg-[#0d1627] border border-[#1e2a3d] rounded-sm shadow-2xl p-6 sm:p-8 z-10">
                        <div class="flex items-start justify-between pb-4 border-b border-[#1e2a3d] mb-6">
                            <div>
                                <span class="text-xs font-mono font-bold tracking-widest uppercase text-blue-400">Official Curriculum Vitae</span>
                                <h3 class="text-xl sm:text-2xl font-black text-white mt-1">Download Resume</h3>
                                <p class="text-xs text-slate-400 mt-1">Choose the resume version tailored to your opportunity:</p>
                            </div>
                            <button
                                @click="closeResumeModal"
                                class="p-2 text-slate-400 hover:text-white transition-colors rounded-sm focus-visible:ring-2 focus-visible:ring-blue-400"
                                aria-label="Close modal"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="space-y-3.5 mb-6">
                            <!-- IT / Web Developer Resume -->
                            <div class="p-4 bg-[#0a1020] border border-[#1e2a3d] rounded-sm hover:border-blue-700/60 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-blue-600/20 text-blue-300 border border-blue-500/30 rounded-sm">Tech & Software</span>
                                        <span class="text-xs text-slate-500 font-mono">2 Pages · PDF</span>
                                    </div>
                                    <h4 class="text-sm font-bold text-white mt-1.5">IT Programmer & Web Developer Resume</h4>
                                    <p class="text-xs text-slate-400 mt-0.5">Full-Stack / Front-End, PHP, Laravel, Vue 3, Inertia.js, MySQL, RDESys, IROQuest</p>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <a
                                        href="/files/John-Russel-Soreda-IT-Developer-Resume.pdf"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="px-3 py-1.5 text-xs font-semibold text-slate-300 hover:text-white border border-[#1e2a3d] hover:border-slate-500 rounded-sm transition-colors"
                                    >
                                        Preview ↗
                                    </a>
                                    <a
                                        href="/files/John-Russel-Soreda-IT-Developer-Resume.pdf"
                                        download="John-Russel-Soreda-IT-Developer-Resume.pdf"
                                        class="px-3.5 py-1.5 bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider rounded-sm transition-colors shadow-sm flex items-center gap-1.5"
                                    >
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>

                            <!-- Social Media & Marketing Resume -->
                            <div class="p-4 bg-[#0a1020] border border-[#1e2a3d] rounded-sm hover:border-sky-700/60 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-sky-600/20 text-sky-300 border border-sky-500/30 rounded-sm">Marketing & Media</span>
                                        <span class="text-xs text-slate-500 font-mono">2 Pages · PDF</span>
                                    </div>
                                    <h4 class="text-sm font-bold text-white mt-1.5">Social Media & Marketing Resume</h4>
                                    <p class="text-xs text-slate-400 mt-0.5">Campaigns, Content Strategy, 10K+ & 17K+ Communities, OBS Livestream, E-Commerce</p>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <a
                                        href="/files/John-Russel-Soreda-Social-Media-Marketing-Resume.pdf"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="px-3 py-1.5 text-xs font-semibold text-slate-300 hover:text-white border border-[#1e2a3d] hover:border-slate-500 rounded-sm transition-colors"
                                    >
                                        Preview ↗
                                    </a>
                                    <a
                                        href="/files/John-Russel-Soreda-Social-Media-Marketing-Resume.pdf"
                                        download="John-Russel-Soreda-Social-Media-Marketing-Resume.pdf"
                                        class="px-3.5 py-1.5 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-wider rounded-sm transition-colors shadow-sm flex items-center gap-1.5"
                                    >
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>

                            <!-- Complete Master CV -->
                            <div class="p-4 bg-[#0a1020] border border-[#1e2a3d] rounded-sm hover:border-emerald-700/60 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-emerald-600/20 text-emerald-300 border border-emerald-500/30 rounded-sm">Comprehensive</span>
                                        <span class="text-xs text-slate-500 font-mono">4 Pages · PDF</span>
                                    </div>
                                    <h4 class="text-sm font-bold text-white mt-1.5">Complete Portfolio CV (Combined)</h4>
                                    <p class="text-xs text-slate-400 mt-0.5">Unified technical software engineering + digital marketing & media leadership</p>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <a
                                        href="/files/John-Russel-Soreda-Complete-CV.pdf"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="px-3 py-1.5 text-xs font-semibold text-slate-300 hover:text-white border border-[#1e2a3d] hover:border-slate-500 rounded-sm transition-colors"
                                    >
                                        Preview ↗
                                    </a>
                                    <a
                                        href="/files/John-Russel-Soreda-Complete-CV.pdf"
                                        download="John-Russel-Soreda-Complete-CV.pdf"
                                        class="px-3.5 py-1.5 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold uppercase tracking-wider rounded-sm transition-colors shadow-sm flex items-center gap-1.5"
                                    >
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-[#1e2a3d] flex items-center justify-between text-xs text-slate-500">
                            <span>Pasig City, Metro Manila · 09388657225</span>
                            <button
                                @click="closeResumeModal"
                                class="px-4 py-2 border border-[#1e2a3d] hover:border-slate-500 text-slate-400 hover:text-white font-bold uppercase rounded-sm transition-colors"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </transition>
        </Teleport>
    </section>
</template>

<script setup>
import { ref } from 'vue';

const resumeModalOpen = ref(false);

function openResumeModal() {
    resumeModalOpen.value = true;
    document.body.style.overflow = 'hidden';
}

function closeResumeModal() {
    resumeModalOpen.value = false;
    document.body.style.overflow = '';
}

const subRoles = [
    'Software Developer', 'Digital Communications', 'Multimedia Producer', 'Front-End Programmer',
];

const stats = [
    { value: '10K+',   label: 'Del Pilar Parish Followers' },
    { value: '17K+',   label: 'LARPI Followers' },
    { value: '₱60.8K', label: 'Bitoon nin Paglaom' },
    { value: '₱200K+', label: 'Fire-Victim Campaign' },
];

function scrollTo(id) {
    const el = document.getElementById(id);
    if (el) window.scrollTo({ top: el.getBoundingClientRect().top + window.scrollY - 72, behavior: 'smooth' });
}
</script>

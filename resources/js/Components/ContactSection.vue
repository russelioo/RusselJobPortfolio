<template>
    <section
        id="contact"
        class="py-24 lg:py-32 bg-[#070d1a] relative overflow-hidden"
        aria-label="Contact section"
    >
        <!-- Background accents -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-blue-900/15 blur-3xl rounded-full" />
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">

                <!-- Left: Headline + contact info -->
                <div class="reveal">
                    <p class="text-xs font-bold tracking-[0.25em] uppercase text-blue-400 mb-6">Get In Touch</p>
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-black text-white leading-[1] mb-6">
                        Let's Build Something<br />
                        <span class="gradient-text">That People Notice.</span>
                    </h2>
                    <p class="text-slate-400 text-base leading-relaxed mb-10 max-w-md">
                        Have a project, campaign, digital communications need, or technology opportunity in mind? Let's connect.
                    </p>

                    <!-- Contact links -->
                    <div class="space-y-4">
                        <a
                            v-for="link in contactLinks"
                            :key="link.label"
                            :href="link.href"
                            :target="link.external ? '_blank' : undefined"
                            :rel="link.external ? 'noopener noreferrer' : undefined"
                            class="group flex items-center gap-4 p-4 border border-[#1e2a3d] rounded-sm hover:border-blue-700/60 hover:bg-[#0d1627]/60 transition-all duration-300 focus-visible:ring-2 focus-visible:ring-blue-400"
                            :aria-label="link.label + ': ' + link.display"
                        >
                            <div class="w-10 h-10 rounded-sm bg-blue-900/30 border border-blue-800/30 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-800/40 transition-colors" aria-hidden="true">
                                <component :is="link.icon" class="w-4 h-4 text-blue-400" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="text-xs text-slate-500 tracking-wide mb-0.5">{{ link.label }}</div>
                                <div class="text-sm font-semibold text-slate-300 group-hover:text-white transition-colors truncate">
                                    {{ link.display }}
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-slate-700 group-hover:text-blue-400 transition-colors flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>

                    <!-- Resume / CV Downloads Card -->
                    <div class="mt-8 p-5 border border-[#1e2a3d] rounded-sm bg-[#0d1627]/60">
                        <div class="flex items-center justify-between pb-3 border-b border-[#1e2a3d] mb-4">
                            <div>
                                <span class="text-[10px] font-mono font-bold tracking-widest uppercase text-blue-400">Official Resumes</span>
                                <h3 class="text-sm font-bold text-white mt-0.5">Download Curriculum Vitae</h3>
                            </div>
                            <span class="text-[10px] font-mono text-slate-500 uppercase tracking-wider">PDF Downloads</span>
                        </div>

                        <div class="space-y-3">
                            <div
                                v-for="res in resumeFiles"
                                :key="res.title"
                                class="p-3 bg-[#0a1020] border border-[#1e2a3d] rounded-sm hover:border-slate-600 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-3"
                            >
                                <div class="min-w-0 flex-1">
                                    <div class="flex items-center gap-2">
                                        <span class="px-1.5 py-0.5 text-[9px] font-bold tracking-wider uppercase border rounded-sm" :class="res.tagColor">
                                            {{ res.tag }}
                                        </span>
                                        <span class="text-[10px] text-slate-500 font-mono">{{ res.pages }}</span>
                                    </div>
                                    <div class="text-xs font-bold text-slate-200 mt-1 truncate">{{ res.title }}</div>
                                    <p class="text-[11px] text-slate-500 line-clamp-1 mt-0.5">{{ res.desc }}</p>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <a
                                        :href="res.file"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="px-2.5 py-1 text-[11px] font-medium text-slate-400 hover:text-white border border-[#1e2a3d] hover:border-slate-500 rounded-sm transition-colors"
                                    >
                                        Preview ↗
                                    </a>
                                    <a
                                        :href="res.file"
                                        :download="res.filename"
                                        class="px-3 py-1 bg-blue-600 hover:bg-blue-500 text-white text-[11px] font-bold uppercase tracking-wider rounded-sm transition-colors flex items-center gap-1 shadow-sm"
                                    >
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Direct Email Platforms Hub -->
                <div class="reveal">
                    <div class="p-6 sm:p-8 lg:p-10 bg-[#0d1627]/80 border border-[#1e2a3d] rounded-sm relative overflow-hidden shadow-2xl">
                        <!-- Decorative glow -->
                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-blue-600/10 rounded-full blur-2xl pointer-events-none" aria-hidden="true" />

                        <div class="relative z-10">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="w-10 h-10 rounded-sm bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-400 shrink-0" aria-hidden="true">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-mono font-bold tracking-widest uppercase text-blue-400">Direct Email Contact</p>
                                    <h3 class="text-xl sm:text-2xl font-black text-white">Send Me an Email</h3>
                                </div>
                            </div>

                            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-6">
                                Click your preferred email platform below to open a direct compose window, or copy my email address to your clipboard.
                            </p>

                            <!-- Primary Email Address Box with Copy Button -->
                            <div class="p-4 bg-[#0a1020] border border-[#1e2a3d] rounded-sm mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <div class="min-w-0">
                                    <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-slate-500 block">Primary Email</span>
                                    <span class="text-sm sm:text-base font-mono font-bold text-white truncate select-all">soredajohnrussel15@gmail.com</span>
                                </div>
                                <button
                                    type="button"
                                    @click="copyEmail"
                                    class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider rounded-sm transition-all border shrink-0 flex items-center justify-center gap-2 cursor-pointer focus-visible:ring-2 focus-visible:ring-blue-400"
                                    :class="copied
                                        ? 'bg-emerald-600/20 text-emerald-400 border-emerald-500/40'
                                        : 'bg-blue-600/20 text-blue-400 border-blue-500/30 hover:bg-blue-600 hover:text-white'"
                                    aria-label="Copy email address"
                                >
                                    <svg v-if="!copied" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <svg v-else class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ copied ? 'Copied to Clipboard!' : 'Copy Email' }}</span>
                                </button>
                            </div>

                            <!-- Email Platform Options -->
                            <div class="space-y-3 mb-6" role="list" aria-label="Email platforms">
                                <!-- Gmail Web -->
                                <a
                                    href="https://mail.google.com/mail/?view=cm&fs=1&to=soredajohnrussel15@gmail.com"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group flex items-center justify-between p-3.5 bg-[#0a1020] border border-[#1e2a3d] hover:border-red-500/60 hover:bg-red-950/10 rounded-sm transition-all duration-200 focus-visible:ring-2 focus-visible:ring-red-400"
                                    role="listitem"
                                >
                                    <div class="flex items-center gap-3 min-w-0">
                                        <div class="w-9 h-9 rounded-sm bg-red-500/10 border border-red-500/20 flex items-center justify-center text-red-400 group-hover:bg-red-500/20 transition-colors shrink-0" aria-hidden="true">
                                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="text-xs sm:text-sm font-bold text-white group-hover:text-red-300 transition-colors flex items-center gap-2">
                                                <span>Gmail Web</span>
                                                <span class="px-1.5 py-0.2 text-[9px] font-bold uppercase tracking-wider bg-red-500/20 text-red-300 border border-red-500/30 rounded-sm">Recommended</span>
                                            </div>
                                            <div class="text-[11px] text-slate-400 truncate mt-0.5">Compose in Gmail browser tab</div>
                                        </div>
                                    </div>
                                    <span class="text-xs font-semibold text-slate-400 group-hover:text-white flex items-center gap-1 shrink-0 ml-2">
                                        Open ↗
                                    </span>
                                </a>

                                <!-- Default Email App (mailto:) -->
                                <a
                                    href="mailto:soredajohnrussel15@gmail.com"
                                    class="group flex items-center justify-between p-3.5 bg-[#0a1020] border border-[#1e2a3d] hover:border-blue-500/60 hover:bg-blue-950/10 rounded-sm transition-all duration-200 focus-visible:ring-2 focus-visible:ring-blue-400"
                                    role="listitem"
                                >
                                    <div class="flex items-center gap-3 min-w-0">
                                        <div class="w-9 h-9 rounded-sm bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:bg-blue-500/20 transition-colors shrink-0" aria-hidden="true">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="text-xs sm:text-sm font-bold text-white group-hover:text-blue-300 transition-colors">Default Email App</div>
                                            <div class="text-[11px] text-slate-400 truncate mt-0.5">Launch Outlook, Apple Mail, or Windows Mail client</div>
                                        </div>
                                    </div>
                                    <span class="text-xs font-semibold text-slate-400 group-hover:text-white flex items-center gap-1 shrink-0 ml-2">
                                        Launch ↗
                                    </span>
                                </a>

                                <!-- Outlook Web -->
                                <a
                                    href="https://outlook.live.com/mail/0/deeplink/compose?to=soredajohnrussel15@gmail.com"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group flex items-center justify-between p-3.5 bg-[#0a1020] border border-[#1e2a3d] hover:border-sky-500/60 hover:bg-sky-950/10 rounded-sm transition-all duration-200 focus-visible:ring-2 focus-visible:ring-sky-400"
                                    role="listitem"
                                >
                                    <div class="flex items-center gap-3 min-w-0">
                                        <div class="w-9 h-9 rounded-sm bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400 group-hover:bg-sky-500/20 transition-colors shrink-0" aria-hidden="true">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M7.88 12.04q0 .45-.11.87-.1.41-.33.74-.22.33-.58.52-.35.19-.86.19-.48 0-.83-.19-.34-.19-.57-.52-.22-.33-.33-.74-.11-.42-.11-.87 0-.46.11-.88.12-.42.35-.74.24-.33.59-.51.36-.19.86-.19.49 0 .84.19.36.18.58.51.23.32.34.74.11.42.11.88zm3.62-4.54v9H9.72V15.2q-.38.58-.93.9-.55.32-1.3.32-.82 0-1.46-.35-.64-.34-1.07-.95-.44-.6-.67-1.42-.23-.82-.23-1.74t.23-1.74q.23-.82.67-1.42.44-.61 1.08-.95.65-.35 1.48-.35.74 0 1.28.32.54.31.91.89V7.5h1.78zm11.5 2.25v7.21q0 .54-.38.92-.38.38-.92.38H13.5v-8.51h8.2zm0-1.5h-8.2V3.75h6.9q.54 0 .92.38.38.38.38.92v2.2z"/>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="text-xs sm:text-sm font-bold text-white group-hover:text-sky-300 transition-colors">Outlook Web</div>
                                            <div class="text-[11px] text-slate-400 truncate mt-0.5">Compose in Outlook.com / Microsoft 365 browser</div>
                                        </div>
                                    </div>
                                    <span class="text-xs font-semibold text-slate-400 group-hover:text-white flex items-center gap-1 shrink-0 ml-2">
                                        Open ↗
                                    </span>
                                </a>

                                <!-- Yahoo Mail Web -->
                                <a
                                    href="https://compose.mail.yahoo.com/?to=soredajohnrussel15@gmail.com"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group flex items-center justify-between p-3.5 bg-[#0a1020] border border-[#1e2a3d] hover:border-purple-500/60 hover:bg-purple-950/10 rounded-sm transition-all duration-200 focus-visible:ring-2 focus-visible:ring-purple-400"
                                    role="listitem"
                                >
                                    <div class="flex items-center gap-3 min-w-0">
                                        <div class="w-9 h-9 rounded-sm bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:bg-purple-500/20 transition-colors shrink-0" aria-hidden="true">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="text-xs sm:text-sm font-bold text-white group-hover:text-purple-300 transition-colors">Yahoo Mail Web</div>
                                            <div class="text-[11px] text-slate-400 truncate mt-0.5">Compose in Yahoo Mail in browser</div>
                                        </div>
                                    </div>
                                    <span class="text-xs font-semibold text-slate-400 group-hover:text-white flex items-center gap-1 shrink-0 ml-2">
                                        Open ↗
                                    </span>
                                </a>
                            </div>

                            <!-- Direct delivery notice -->
                            <div class="p-3.5 bg-blue-950/20 border border-blue-800/30 rounded-sm flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-blue-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-xs text-slate-400 leading-relaxed">
                                    All communications are sent directly to <strong class="text-white">soredajohnrussel15@gmail.com</strong>. I actively review inquiries and typically reply within 24 hours.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, h } from 'vue';

// Inline SVG icon components
const LocationIcon = { render: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z' }),
    h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M15 11a3 3 0 11-6 0 3 3 0 016 0z' }),
])};

const MailIcon = { render: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z' }),
])};

const PhoneIcon = { render: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z' }),
])};

const GithubIcon = { render: () => h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { d: 'M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z' }),
])};

const contactLinks = [
    {
        label: 'Location',
        display: 'Ortigas, San Antonio, Pasig City / Metro Manila',
        href: 'https://maps.google.com/?q=Ortigas,+San+Antonio,+Pasig+City',
        external: true,
        icon: LocationIcon,
    },
    {
        label: 'Email',
        display: 'soredajohnrussel15@gmail.com',
        href: 'mailto:soredajohnrussel15@gmail.com',
        external: false,
        icon: MailIcon,
    },
    {
        label: 'Phone',
        display: '+63 938 865 7225',
        href: 'tel:+639388657225',
        external: false,
        icon: PhoneIcon,
    },
    {
        label: 'GitHub',
        display: 'github.com/russelioo',
        href: 'https://github.com/russelioo',
        external: true,
        icon: GithubIcon,
    },
];

const resumeFiles = [
    {
        title: 'IT & Web Developer Resume',
        tag: 'Tech & Software',
        tagColor: 'bg-blue-600/20 text-blue-300 border-blue-500/30',
        pages: '2 Pages · PDF',
        desc: 'Full-stack software development, PHP, Laravel, Vue 3, Inertia.js, MySQL, RDESys, IROQuest',
        file: '/files/John-Russel-Soreda-IT-Developer-Resume.pdf',
        filename: 'John-Russel-Soreda-IT-Developer-Resume.pdf',
    },
    {
        title: 'Social Media & Marketing Resume',
        tag: 'Marketing & Media',
        tagColor: 'bg-sky-600/20 text-sky-300 border-sky-500/30',
        pages: '2 Pages · PDF',
        desc: 'Campaign strategy, 10K+ & 17K+ follower communities, multimedia production, OBS livestream, e-commerce',
        file: '/files/John-Russel-Soreda-Social-Media-Marketing-Resume.pdf',
        filename: 'John-Russel-Soreda-Social-Media-Marketing-Resume.pdf',
    },
    {
        title: 'Complete Master CV (Combined)',
        tag: 'Comprehensive',
        tagColor: 'bg-emerald-600/20 text-emerald-300 border-emerald-500/30',
        pages: '4 Pages · PDF',
        desc: 'Unified 4-page master resume covering both technical engineering and digital communications',
        file: '/files/John-Russel-Soreda-Complete-CV.pdf',
        filename: 'John-Russel-Soreda-Complete-CV.pdf',
    },
];

const copied = ref(false);

async function copyEmail() {
    try {
        await navigator.clipboard.writeText('soredajohnrussel15@gmail.com');
        copied.value = true;
        setTimeout(() => { copied.value = false; }, 2500);
    } catch {
        copied.value = true;
        setTimeout(() => { copied.value = false; }, 2500);
    }
}
</script>

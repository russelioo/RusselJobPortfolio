<template>
    <section id="social" class="py-24 lg:py-32 bg-[#0a1020] relative" aria-label="Social Media section">
        <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-blue-700/40 to-transparent" aria-hidden="true" />
        <div class="absolute bottom-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-blue-700/20 to-transparent" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Heading -->
            <div class="reveal">
                <SectionHeading eyebrow="Social Media & Digital Communications"
                    subtitle="Hands-on experience managing digital channels, creating platform-ready assets, engaging audiences, supporting livestreams, and using analytics to improve digital communication.">
                    Managing Digital Channels<br class="hidden lg:block" />
                    <span class="gradient-text">at Scale.</span>
                </SectionHeading>
            </div>

            <!-- Official Social Media Channels Quick Bar -->
            <div class="reveal mb-8">
                <div class="p-4 sm:p-4.5 bg-[#0d1627]/90 border border-blue-900/30 rounded-sm flex flex-col md:flex-row md:items-center justify-between gap-3">
                    <div class="flex items-center gap-2 text-xs font-mono font-bold tracking-wider uppercase text-slate-300 shrink-0">
                        <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse" aria-hidden="true" />
                        <span>Official Social Media Channels:</span>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <a
                            href="https://www.facebook.com/PilarShrineSorsogon"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="px-3 py-1.5 text-xs font-medium bg-blue-950/40 hover:bg-blue-600/30 text-blue-300 hover:text-white border border-blue-800/40 rounded-sm transition-colors flex items-center gap-1.5 focus-visible:ring-2 focus-visible:ring-blue-400"
                        >
                            <span>Facebook: @PilarShrineSorsogon ↗</span>
                        </a>
                        <a
                            href="https://www.facebook.com/larpi2ph"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="px-3 py-1.5 text-xs font-medium bg-blue-950/40 hover:bg-blue-600/30 text-blue-300 hover:text-white border border-blue-800/40 rounded-sm transition-colors flex items-center gap-1.5 focus-visible:ring-2 focus-visible:ring-blue-400"
                        >
                            <span>Facebook: LARPI ↗</span>
                        </a>
                        <a
                            href="https://www.youtube.com/@PilarShrineSorsogon"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="px-3 py-1.5 text-xs font-medium bg-red-950/40 hover:bg-red-600/30 text-red-300 hover:text-white border border-red-800/40 rounded-sm transition-colors flex items-center gap-1.5 focus-visible:ring-2 focus-visible:ring-red-400"
                        >
                            <span>YouTube: @PilarShrineSorsogon ↗</span>
                        </a>
                        <a
                            href="https://www.tiktok.com/@PilarShrineSorsogon"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="px-3 py-1.5 text-xs font-medium bg-slate-800/60 hover:bg-slate-700/60 text-slate-200 hover:text-white border border-slate-700/50 rounded-sm transition-colors flex items-center gap-1.5 focus-visible:ring-2 focus-visible:ring-slate-400"
                        >
                            <span>TikTok: @PilarShrineSorsogon ↗</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Audience Metrics -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 max-w-4xl mb-16">
                <div v-for="m in audienceMetrics" :key="m.label" class="reveal">
                    <!-- Single URL Card (Direct Facebook link) -->
                    <a
                        v-if="m.url"
                        :href="m.url"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group h-full p-6 bg-[#0d1627]/60 border border-[#1e2a3d] hover:border-blue-600/60 hover:bg-[#0f1a30] rounded-sm text-center transition-all duration-300 flex flex-col justify-between block focus-visible:ring-2 focus-visible:ring-blue-400"
                        :aria-label="'Visit ' + m.label + ' ' + m.sub + ' at ' + m.url"
                    >
                        <div>
                            <div class="text-4xl lg:text-5xl font-black text-white mb-2 group-hover:text-blue-300 transition-colors">{{ m.value }}</div>
                            <div class="text-xs font-bold tracking-widest uppercase text-blue-400 mb-1 flex items-center justify-center gap-1">
                                <span>{{ m.label }}</span>
                            </div>
                            <div class="text-xs text-slate-500">{{ m.sub }}</div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-[#1e2a3d]/50 flex items-center justify-center gap-1 text-[11px] font-semibold text-blue-400 group-hover:text-white transition-colors">
                            <span>Proceed to Facebook Page</span>
                            <span>↗</span>
                        </div>
                    </a>

                    <!-- Multi-link Card (YouTube & TikTok) -->
                    <div
                        v-else
                        class="h-full p-6 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm text-center transition-all duration-300 flex flex-col justify-between"
                    >
                        <div>
                            <div class="text-4xl lg:text-5xl font-black text-white mb-2">{{ m.value }}</div>
                            <div class="text-xs font-bold tracking-widest uppercase text-blue-400 mb-1">{{ m.label }}</div>
                            <div class="text-xs text-slate-500">{{ m.sub }}</div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-[#1e2a3d]/50 flex items-center justify-center gap-2">
                            <a
                                v-for="link in m.links"
                                :key="link.label"
                                :href="link.url"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="px-2.5 py-1 text-[11px] font-semibold rounded-sm border transition-colors flex items-center gap-1 focus-visible:ring-2 focus-visible:ring-blue-400"
                                :class="link.color"
                                :aria-label="'Visit official ' + link.label + ' channel'"
                            >
                                <span>{{ link.icon }}</span>
                                <span>{{ link.label }} ↗</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ─── Google Drive Portfolio Archive Banner ─── -->
            <div class="reveal mb-16">
                <div class="p-6 sm:p-7 bg-[#0d1627] border border-blue-600/40 rounded-sm relative overflow-hidden shadow-xl flex flex-col md:flex-row md:items-center justify-between gap-6 hover:border-blue-500/70 transition-colors">
                    <div class="flex items-start sm:items-center gap-4">
                        <div class="w-12 h-12 rounded-sm bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-400 shrink-0" aria-hidden="true">
                            <!-- Google Drive SVG Icon -->
                            <svg class="w-6 h-6" viewBox="0 0 87.3 78" fill="currentColor">
                                <path d="m6.6 66.85 3.85 6.65c.8 1.4 1.95 2.5 3.3 3.3l13.75-23.8H0c0 1.55.4 3.1 1.2 4.5z" fill="#0066da"/>
                                <path d="m43.65 25-13.75-23.8c-1.35.8-2.5 1.9-3.3 3.3l-25.4 44a9.06 9.06 0 0 0 -1.2 4.5h27.5z" fill="#00ac47"/>
                                <path d="m73.55 76.8c1.35-.8 2.5-1.9 3.3-3.3l1.6-2.75 7.65-13.25c.8-1.4 1.2-2.95 1.2-4.5h-27.502l5.852 11.5z" fill="#ea4335"/>
                                <path d="m43.65 25 13.75-23.8c-1.35-.8-2.9-1.2-4.5-1.2h-18.5c-1.6 0-3.15.45-4.5 1.2z" fill="#00832d"/>
                                <path d="m59.8 53h-32.3l-13.75 23.8c1.35.8 2.9 1.2 4.5 1.2h50.8c1.6 0 3.15-.45 4.5-1.2z" fill="#2684fc"/>
                                <path d="m73.4 26.5-12.7-22c-.8-1.4-1.95-2.5-3.3-3.3l-13.75 23.8 16.15 28h27.45c0-1.55-.4-3.1-1.2-4.5z" fill="#ffba00"/>
                            </svg>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] font-mono font-bold tracking-widest uppercase text-blue-400">Social Media &amp; Creative Drive</span>
                                <span class="px-2 py-0.5 text-[9px] font-bold tracking-wider uppercase bg-blue-500/20 text-blue-300 border border-blue-500/30 rounded-sm">Google Drive</span>
                            </div>
                            <h4 class="text-base sm:text-lg font-bold text-white mt-1">Sample Graphics, Video, Documentation &amp; Other Work</h4>
                            <p class="text-xs text-slate-400 mt-1 leading-relaxed max-w-2xl">
                                For sample graphics, video productions, event documentation, promotional campaigns, and other multimedia work, please see on this Google Drive.
                            </p>
                        </div>
                    </div>
                    <a
                        href="https://drive.google.com/drive/folders/1D2blw7ZEZsNjjHmvTVEIsZIvGGnD96kR?usp=sharing"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group inline-flex items-center justify-center gap-2.5 px-6 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs tracking-widest uppercase rounded-sm transition-all duration-200 shadow-lg shadow-blue-600/25 shrink-0 focus-visible:ring-2 focus-visible:ring-blue-400"
                        aria-label="Open Social Media and Creative Google Drive folder"
                    >
                        <span>Open Google Drive</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- ─── Selected Visual Work (Featured Campaigns from Real Portfolio) ─── -->
            <div class="reveal mb-20">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-8 pb-3 border-b border-[#1e2a3d]">
                    <div>
                        <span class="text-xs font-bold tracking-[0.25em] uppercase text-blue-400 block mb-1">Visual Evidence</span>
                        <h3 class="text-xl sm:text-2xl font-black text-white">Selected Visual Work</h3>
                    </div>
                    <div class="flex items-center gap-3">
                        <a
                            href="https://drive.google.com/drive/folders/1D2blw7ZEZsNjjHmvTVEIsZIvGGnD96kR?usp=sharing"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-1.5 text-xs font-bold tracking-wider uppercase text-slate-300 hover:text-white px-3 py-1.5 border border-[#1e2a3d] hover:border-blue-500 rounded-sm bg-[#0d1627] transition-colors"
                        >
                            <span>Google Drive Samples</span>
                            <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                        <a
                            href="#gallery"
                            class="hidden sm:inline-flex items-center gap-1.5 text-xs font-bold tracking-wider uppercase text-blue-400 hover:text-blue-300 transition-colors"
                        >
                            <span>View All Gallery Assets</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        v-for="item in selectedVisualWork"
                        :key="item.title"
                        class="group bg-[#0d1627] border border-[#1e2a3d] rounded-sm overflow-hidden hover:border-blue-600/70 transition-all duration-300 flex flex-col shadow-lg"
                    >
                        <!-- Image Container -->
                        <div class="relative aspect-[4/3] bg-black overflow-hidden flex items-center justify-center p-2">
                            <img
                                :src="item.image"
                                :alt="item.title"
                                class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute top-3 left-3">
                                <span class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-[#070d1a]/95 text-blue-400 border border-blue-900/40 rounded-sm">
                                    {{ item.tag }}
                                </span>
                            </div>
                            <div class="absolute bottom-3 right-3">
                                <span class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-blue-600 text-white rounded-sm">
                                    {{ item.metric }}
                                </span>
                            </div>
                        </div>

                        <!-- Info -->
                        <div class="p-5 flex-1 flex flex-col justify-between bg-[#0a1020]">
                            <div>
                                <span class="text-[10px] font-semibold text-slate-500 uppercase tracking-wider block mb-1">
                                    {{ item.category }} · {{ item.year }}
                                </span>
                                <h4 class="text-sm font-bold text-white group-hover:text-blue-300 transition-colors mb-2">
                                    {{ item.title }}
                                </h4>
                                <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed">
                                    {{ item.description }}
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-[#1e2a3d]/60 flex items-center justify-between text-xs">
                                <span class="text-slate-500">{{ item.role }}</span>
                                <a
                                    href="#case-studies"
                                    class="text-blue-400 hover:text-blue-300 font-bold tracking-wider uppercase text-[11px]"
                                >
                                    Case Study →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Platform Cards -->
            <div class="reveal mb-6">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-6">Platform Experience</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-20">
                <div v-for="(p, i) in platforms" :key="p.handle" class="reveal" :style="`transition-delay:${i*60}ms`">
                    <SocialPlatformCard v-bind="p" />
                </div>
            </div>

            <!-- Workflow -->
            <div class="reveal">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-8">Content Workflow</h3>
                <div class="relative">
                    <!-- Desktop horizontal workflow -->
                    <div class="hidden lg:flex items-start gap-0">
                        <div v-for="(step, i) in workflow" :key="step.phase" class="flex-1 flex flex-col items-center text-center group">
                            <div class="w-full flex items-center">
                                <div class="flex-1 h-px" :class="i === 0 ? 'invisible' : 'bg-[#1e2a3d]'" />
                                <div class="w-10 h-10 rounded-full border-2 border-[#1e2a3d] bg-[#0d1627] flex items-center justify-center text-xs font-black text-blue-400 group-hover:border-blue-500 transition-colors flex-shrink-0 z-10">
                                    {{ i + 1 }}
                                </div>
                                <div class="flex-1 h-px" :class="i === workflow.length - 1 ? 'invisible' : 'bg-[#1e2a3d]'" />
                            </div>
                            <div class="mt-4 px-2">
                                <div class="text-xs font-bold text-white tracking-wide mb-1">{{ step.phase }}</div>
                                <div class="text-xs text-slate-500 leading-relaxed">{{ step.detail }}</div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile vertical workflow -->
                    <div class="lg:hidden space-y-0">
                        <div v-for="(step, i) in workflow" :key="step.phase" class="relative pl-10 pb-8 last:pb-0">
                            <div class="absolute left-3 top-5 bottom-0 w-px bg-[#1e2a3d]" :class="i === workflow.length-1 ? 'hidden' : ''" aria-hidden="true" />
                            <div class="absolute left-0 top-1 w-7 h-7 rounded-full border-2 border-[#1e2a3d] bg-[#0d1627] flex items-center justify-center text-xs font-black text-blue-400">{{ i+1 }}</div>
                            <div class="pt-0.5">
                                <div class="text-sm font-bold text-white mb-1">{{ step.phase }}</div>
                                <div class="text-xs text-slate-500">{{ step.detail }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Capability Cards -->
            <div class="reveal mt-20">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-6">Content Capabilities</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div v-for="(cap, i) in capabilities" :key="cap.title" class="reveal" :style="`transition-delay:${i*50}ms`">
                    <div class="p-6 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/40 transition-all duration-300 h-full">
                        <div class="text-base font-bold text-white mb-1">{{ cap.title }}</div>
                        <ul class="space-y-1 mt-3">
                            <li v-for="item in cap.items" :key="item" class="flex items-start gap-2 text-xs text-slate-400">
                                <span class="mt-1.5 w-1 h-1 rounded-full bg-blue-600 flex-shrink-0" aria-hidden="true" />
                                {{ item }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import SectionHeading from '@/Components/SectionHeading.vue';
import SocialPlatformCard from '@/Components/SocialPlatformCard.vue';

const audienceMetrics = [
    {
        value: '10K+',
        label: 'Del Pilar Parish Followers',
        sub: 'Facebook Page',
        url: 'https://www.facebook.com/PilarShrineSorsogon',
    },
    {
        value: '17K+',
        label: 'LARPI Followers',
        sub: 'Facebook Page',
        url: 'https://www.facebook.com/larpi2ph',
    },
    {
        value: '100+',
        label: 'Our Lady of the Pillar Shrine',
        sub: 'YouTube & TikTok Audience',
        links: [
            {
                label: 'YouTube',
                url: 'https://www.youtube.com/@PilarShrineSorsogon',
                icon: '▶',
                color: 'bg-red-950/40 border-red-800/40 text-red-300 hover:bg-red-900/60',
            },
            {
                label: 'TikTok',
                url: 'https://www.tiktok.com/@PilarShrineSorsogon',
                icon: '♪',
                color: 'bg-slate-800/60 border-slate-700/50 text-slate-300 hover:bg-slate-700/80',
            },
        ],
    },
];

const selectedVisualWork = [
    {
        title: 'Bitoon sa Paglaom Giant Christmas Tree',
        category: 'Fundraising Campaign',
        tag: 'Giant Tree Project',
        year: '2025',
        metric: '₱61,000 Total Funds',
        image: '/images/portfolio/fundraising/bitoon-campaign-launch.jpg',
        description: 'Fundraising concept transforming the parish Bell Tower into a Tree of Hope to fund church security CCTV, seamless livestreaming, and the Phase 1 Media Center.',
        role: 'Campaign Promotion & Social Media',
    },
    {
        title: 'Fire Victims Emergency Relief & Transparency Report',
        category: 'Community Relief',
        tag: 'Crisis Response',
        year: '2025',
        metric: '₱200K+ Cash / ₱100K+ In-Kind',
        image: '/images/portfolio/fundraising/fire-fundraising-transparency.jpg',
        description: 'Emergency donation appeal and transparent accounting reporting PHP 146,432.20 in progress cash donations and relief distribution to 189 families.',
        role: 'Communications & Fundraising Support',
    },
    {
        title: 'Del Pilar Fiesta 2025 Merchandise Collection',
        category: 'Merchandise Campaign',
        tag: 'Repeat Seasonal Sales',
        year: '2025',
        metric: '₱52,000 Sales (+4% YOY)',
        image: '/images/portfolio/merchandise/merchandise-2025-products.jpg',
        description: 'Multi-product promotional campaign featuring commemorative t-shirts, mugs, umbrellas, fans, pins, tote bags, and religious tokens with verified sales increase.',
        role: 'Social Media Manager & Promo Design',
    },
    {
        title: 'Holy Week Cotton T-Shirts Pre-Order',
        category: 'Seasonal Merchandise',
        tag: 'Media Center Phase 2',
        year: '2026',
        metric: '₱13,000 Reported Funds',
        image: '/images/portfolio/merchandise/holy-week-merch-2026.jpg',
        description: 'Preorder merchandise campaign with pricing clarity and inquiry handling supporting Phase 2 of the parish Media Center.',
        role: 'Campaign Copywriting & Visual Assets',
    },
    {
        title: 'Just Flowers Valentine Latag & Retail Promo',
        category: 'Retail Marketing',
        tag: 'Pop-Up & Social Contest',
        year: '2025',
        metric: '₱30,000 One-Day Promo',
        image: '/images/portfolio/campaigns/just-flowers-valentine.jpg',
        description: 'Valentine flower campaign combining campus latag schedules, share-based giveaways, and Girlfriend\'s Day winner announcements.',
        role: 'Retail Campaign Posting & Creatives',
    },
    {
        title: 'Christmas Caroling & Pahadok kay Nino Event',
        category: 'Event Activation',
        tag: 'Community Caroling',
        year: '2024 / 2025',
        metric: '₱18K (2024) · ₱30K (2025)',
        image: '/images/portfolio/events/christmas-caroling-post.jpg',
        description: 'Annual December 25 community activation concentrating local participation into a single live window with field photo documentation.',
        role: 'Event Promotion & Live Coordination',
    },
];

const platforms = [
    {
        platform: 'Facebook',
        handle: 'Pilar Shrine / Del Pilar Parish',
        url: 'https://www.facebook.com/PilarShrineSorsogon',
        color: 'text-blue-400',
        bgColor: 'bg-blue-900/30',
        responsibilities: ['Content planning', 'Daily posting', 'Community management', 'Event promotion'],
    },
    {
        platform: 'Facebook',
        handle: 'OLPS Ministry of the Altar Servers',
        color: 'text-blue-400',
        bgColor: 'bg-blue-900/30',
        responsibilities: ['Short-form content', 'Engagement', 'Ministry communications'],
    },
    {
        platform: 'Facebook',
        handle: 'LARPI',
        url: 'https://www.facebook.com/larpi2ph',
        color: 'text-blue-400',
        bgColor: 'bg-blue-900/30',
        responsibilities: ['Content creation', 'Social media management', 'News writing & publishing', 'Community engagement', 'Page growth & audience management'],
    },
    {
        platform: 'YouTube',
        handle: 'Our Lady of the Pillar Shrine',
        url: 'https://www.youtube.com/@PilarShrineSorsogon',
        color: 'text-red-400',
        bgColor: 'bg-red-900/20',
        responsibilities: ['Livestream management', 'Video uploads', 'Thumbnail design', 'SEO optimization'],
    },
    {
        platform: 'TikTok',
        handle: 'Our Lady of the Pillar Shrine',
        url: 'https://www.tiktok.com/@PilarShrineSorsogon',
        color: 'text-slate-300',
        bgColor: 'bg-slate-800/40',
        responsibilities: ['Short-form video content', 'Video editing', 'Publishing', 'Audience engagement'],
    },
];

const workflow = [
    { phase: 'Plan',     detail: 'Content calendar & strategy' },
    { phase: 'Create',   detail: 'Graphics, video & copy' },
    { phase: 'Publish',  detail: 'Platform optimization' },
    { phase: 'Engage',   detail: 'Community management' },
    { phase: 'Measure',  detail: 'Insights & analytics' },
];

const capabilities = [
    {
        title: 'Social Media Management',
        items: ['Facebook', 'Instagram', 'TikTok', 'YouTube', 'Content scheduling', 'Community engagement', 'Analytics monitoring'],
    },
    {
        title: 'Content Creation',
        items: ['Promotional graphics', 'Event posters', 'Carousels', 'Infographics', 'Reels', 'Stories', 'Thumbnails'],
    },
    {
        title: 'Video & Photography',
        items: ['Video editing', 'Cinematic videos', 'Event highlights', 'Promotional videos', 'Photography', 'Event documentation'],
    },
    {
        title: 'Livestream & Production',
        items: ['OBS Studio', 'Camera operation', 'Livestream setup', 'Audio-visual support', 'Technical support'],
    },
    {
        title: 'Marketing',
        items: ['Social media campaigns', 'Digital branding', 'Content strategy', 'Marketing planning', 'Audience growth'],
    },
    {
        title: 'Community',
        items: ['Audience inquiries', 'Messages & comments', 'Announcements', 'Event updates', 'Online community engagement'],
    },
];
</script>

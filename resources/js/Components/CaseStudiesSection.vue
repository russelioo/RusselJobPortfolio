<template>
    <section id="case-studies" class="py-24 lg:py-32 bg-[#0a1020] relative" aria-label="Case Studies section">
        <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-blue-700/30 to-transparent" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <SectionHeading eyebrow="Featured Case Studies"
                    subtitle="A selection of campaigns, projects, and digital communications work across fundraising, merchandise, events, and community outreach.">
                    Selected Work.
                </SectionHeading>
            </div>

            <!-- Filter -->
            <div class="flex flex-wrap gap-2 mb-10 reveal" role="tablist" aria-label="Filter case studies">
                <button v-for="f in filters" :key="f.value" @click="activeFilter = f.value"
                    role="tab" :aria-selected="activeFilter === f.value"
                    class="px-4 py-2 text-xs font-bold tracking-widest uppercase rounded-sm transition-all duration-200 focus-visible:ring-2 focus-visible:ring-blue-400"
                    :class="activeFilter === f.value ? 'bg-blue-600 text-white' : 'border border-[#1e2a3d] text-slate-500 hover:text-white hover:border-blue-700/50'">
                    {{ f.label }}
                </button>
            </div>

            <!-- Case study cards grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div v-for="cs in filteredStudies" :key="cs.id" class="transition-all duration-300">
                    <CaseStudyCard v-bind="cs" @open="openModal(cs)" />
                </div>
            </div>
        </div>

        <!-- Modal -->
        <Teleport to="body">
            <transition name="modal">
                <div v-if="active" class="fixed inset-0 z-[100] flex items-end sm:items-center justify-center p-4"
                    @click.self="closeModal" role="dialog" :aria-label="active.title + ' case study'" aria-modal="true">
                    <div class="absolute inset-0 bg-black/75 backdrop-blur-sm" @click="closeModal" aria-hidden="true" />
                    <div class="relative w-full max-w-3xl max-h-[90vh] overflow-y-auto bg-[#0d1627] border border-[#1e2a3d] rounded-sm shadow-2xl">
                        <!-- Modal header -->
                        <div class="sticky top-0 flex items-start justify-between p-6 border-b border-[#1e2a3d] bg-[#0d1627]/95 backdrop-blur-sm">
                            <div>
                                <span class="text-xs font-bold tracking-widest uppercase text-blue-400">{{ active.category }}</span>
                                <h2 class="text-xl font-black text-white mt-1">{{ active.title }}</h2>
                                <p v-if="active.subtitle" class="text-sm text-slate-400 mt-0.5">{{ active.subtitle }}</p>
                            </div>
                            <button @click="closeModal" class="p-2 text-slate-500 hover:text-white transition-colors rounded-sm focus-visible:ring-2 focus-visible:ring-blue-400 ml-4 flex-shrink-0" aria-label="Close">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Visual Evidence Gallery if available -->
                        <div v-if="active.gallery?.length || active.image" class="border-b border-[#1e2a3d] bg-[#070d1a] p-4 sm:p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-mono font-bold tracking-wider text-blue-400 uppercase flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse" aria-hidden="true" />
                                    Portfolio Evidence & Artifacts
                                </span>
                                <span v-if="active.gallery?.length > 1" class="text-xs font-mono text-slate-400">
                                    Asset {{ activeImageIndex + 1 }} of {{ active.gallery.length }}
                                </span>
                            </div>

                            <!-- Selected Image Preview -->
                            <div class="relative rounded-sm overflow-hidden bg-[#050914] border border-[#1e2a3d] flex items-center justify-center min-h-[240px] sm:min-h-[320px] max-h-[460px]">
                                <img
                                    :src="active.gallery?.[activeImageIndex]?.src || active.image"
                                    :alt="active.gallery?.[activeImageIndex]?.title || active.title"
                                    class="max-h-[440px] w-auto max-w-full object-contain p-2 transition-all duration-300"
                                />
                            </div>

                            <!-- Caption & Asset Title -->
                            <div v-if="active.gallery?.[activeImageIndex]" class="mt-3 px-1 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <div>
                                    <div class="text-sm font-bold text-white">{{ active.gallery[activeImageIndex].title }}</div>
                                    <div class="text-xs text-slate-400 mt-0.5 leading-relaxed">{{ active.gallery[activeImageIndex].caption }}</div>
                                </div>
                                <a
                                    v-if="active.liveUrl && !active.isOngoing"
                                    :href="active.liveUrl"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-1.5 px-3.5 py-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold tracking-wider uppercase rounded-sm transition-colors shrink-0 shadow-lg shadow-emerald-950/50"
                                >
                                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse" />
                                    Visit Live Site ↗
                                </a>
                                <a
                                    v-else-if="active.liveUrl && active.isOngoing"
                                    :href="active.liveUrl"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-1.5 px-3.5 py-2 bg-amber-600 hover:bg-amber-500 text-white text-xs font-bold tracking-wider uppercase rounded-sm transition-colors shrink-0 shadow-lg shadow-amber-950/50"
                                >
                                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping" />
                                    Preview Staging Site ↗
                                </a>
                            </div>

                            <!-- Thumbnails for multiple assets -->
                            <div v-if="active.gallery && active.gallery.length > 1" class="flex gap-2.5 mt-4 overflow-x-auto pb-1" role="tablist" aria-label="Asset thumbnails">
                                <button
                                    v-for="(item, idx) in active.gallery"
                                    :key="item.src + idx"
                                    @click="activeImageIndex = idx"
                                    role="tab"
                                    :aria-selected="activeImageIndex === idx"
                                    class="relative shrink-0 w-20 h-16 rounded-sm overflow-hidden border transition-all text-left focus-visible:ring-2 focus-visible:ring-blue-400"
                                    :class="activeImageIndex === idx ? 'border-blue-500 ring-2 ring-blue-500/50' : 'border-[#1e2a3d] opacity-60 hover:opacity-100'"
                                    :title="item.title"
                                >
                                    <img :src="item.src" :alt="item.title" class="w-full h-full object-cover" />
                                </button>
                            </div>
                        </div>

                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <!-- Role & period -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <div v-if="active.role">
                                    <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-1">Role</h3>
                                    <p class="text-sm text-slate-300">{{ active.role }}</p>
                                </div>
                                <div v-if="active.period">
                                    <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-1">Period</h3>
                                    <p class="text-sm text-slate-300">{{ active.period }}</p>
                                </div>
                                <div v-if="active.result">
                                    <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-1">Result</h3>
                                    <p class="text-lg font-black text-blue-300">{{ active.result }}</p>
                                </div>
                                <div v-if="active.liveUrl">
                                    <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-1">{{ active.isOngoing ? 'Staging Application' : 'Live Application' }}</h3>
                                    <a :href="active.liveUrl" target="_blank" rel="noopener noreferrer" class="text-xs font-bold hover:underline flex items-center gap-1 mt-1" :class="active.isOngoing ? 'text-amber-400' : 'text-emerald-400'">
                                        <span>{{ active.liveUrl.replace('https://', '').replace('/', '') }}</span>
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Description -->
                            <div>
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Overview</h3>
                                <p class="text-sm text-slate-300 leading-relaxed">{{ active.description }}</p>
                            </div>

                            <!-- Highlights -->
                            <div v-if="active.highlights?.length">
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Highlights</h3>
                                <ul class="space-y-2">
                                    <li v-for="h in active.highlights" :key="h" class="flex items-start gap-2.5 text-sm text-slate-300">
                                        <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0" aria-hidden="true" />
                                        {{ h }}
                                    </li>
                                </ul>
                            </div>

                            <!-- Sponsor breakdown (Bitoon) -->
                            <div v-if="active.sponsors">
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Sponsor Breakdown</h3>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                    <div v-for="s in active.sponsors" :key="s.tier" class="p-3 bg-[#070d1a]/60 border border-[#1e2a3d] rounded-sm text-center">
                                        <div class="text-base font-black text-blue-300">{{ s.amount }}</div>
                                        <div class="text-xs font-bold text-white mt-0.5">{{ s.count }}</div>
                                        <div class="text-xs text-slate-500 mt-0.5">{{ s.tier }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Campaign flow -->
                            <div v-if="active.campaignFlow">
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Campaign Flow</h3>
                                <div class="space-y-2">
                                    <div v-for="step in active.campaignFlow" :key="step.step" class="flex items-start gap-4 p-3 bg-[#070d1a]/60 border border-[#1e2a3d] rounded-sm">
                                        <span class="text-xs font-black text-blue-400 w-8 flex-shrink-0">{{ step.step }}</span>
                                        <div>
                                            <div class="text-xs font-bold text-white">{{ step.phase }}</div>
                                            <div class="text-xs text-slate-500 mt-0.5">{{ step.detail }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Metrics grid -->
                            <div v-if="active.metrics?.length">
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Performance Data</h3>
                                <div v-if="active.metricsNote" class="p-3 bg-[#070d1a]/60 border border-[#1e2a3d] rounded-sm mb-3">
                                    <p class="text-xs text-slate-500 italic">{{ active.metricsNote }}</p>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div v-for="m in active.metrics" :key="m.label" class="p-3 bg-[#070d1a]/60 border border-[#1e2a3d] rounded-sm">
                                        <div class="text-base font-black text-blue-300">{{ m.value }}</div>
                                        <div class="text-xs text-slate-500 mt-0.5">{{ m.label }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div v-if="active.tags?.length">
                                <div class="flex flex-wrap gap-2">
                                    <span v-for="tag in active.tags" :key="tag"
                                        class="px-2.5 py-1 text-xs font-medium bg-[#162847]/80 border border-blue-900/40 text-blue-300 rounded-sm">{{ tag }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </Teleport>
    </section>
</template>

<script setup>
import { ref, computed } from 'vue';
import { useAsset } from '@/composables/useAsset.js';
import SectionHeading from '@/Components/SectionHeading.vue';
import CaseStudyCard from '@/Components/CaseStudyCard.vue';

const active = ref(null);
const activeImageIndex = ref(0);
const activeFilter = ref('all');

function openModal(cs) {
    active.value = cs;
    activeImageIndex.value = 0;
    document.body.style.overflow = 'hidden';
}
function closeModal() {
    active.value = null;
    activeImageIndex.value = 0;
    document.body.style.overflow = '';
}

const filters = [
    { value: 'all',           label: 'All' },
    { value: 'fundraising',   label: 'Fundraising' },
    { value: 'merchandise',   label: 'Merchandise' },
    { value: 'social-media',  label: 'Social Media' },
    { value: 'livestream',    label: 'Livestream' },
    { value: 'ecommerce',     label: 'E-Commerce' },
    { value: 'tech',          label: 'Technology' },
];

const caseStudies = [
    // ──────────────────────────────────────────────────────────────
    {
        id: 'parish-livestream',
        filterKey: 'livestream',
        filterKeys: ['livestream', 'social-media'],
        title: 'Parish Livestream Program',
        subtitle: 'Social Media · Multimedia · Livestream Production',
        category: 'Livestream Production',
        period: 'Ongoing',
        role: 'Livestream Producer · Camera Operator · Technical Support',
        result: 'Ongoing',
        heroMetric: 'Facebook Live + YouTube',
        image: '/images/portfolio/fundraising/bitoon-equipment-update.jpg',
        gallery: [
            {
                src: '/images/portfolio/fundraising/bitoon-equipment-update.jpg',
                title: 'Livestream Broadcast Gear & Media Center Setup',
                caption: 'Actual multi-camera livestreaming broadcast equipment, audio mixer, and video switcher procured for Del Pilar Parish services.'
            },
            {
                src: '/images/portfolio/slides/bitoon-proof-slide.jpg',
                title: 'Media Center Equipment Transparency Report',
                caption: 'Official parish milestone report verifying livestream hardware installation at the choir loft.'
            }
        ],
        description: 'A production-focused social media workflow supporting Facebook and YouTube livestreams for Masses, parish celebrations, and special liturgical events at Our Lady of the Pillar Shrine.',
        highlights: [
            'Managed end-to-end livestream operations for Masses and special events.',
            'Operated OBS Studio for Facebook Live and YouTube streaming.',
            'Handled camera operation and audio/video quality support.',
            'Provided technical support throughout live events.',
        ],
        metrics: [],
        metricsNote: 'Performance data (viewer averages, peak viewers, watch time, engagement rate, number of livestreams) not provided in the current portfolio evidence.',
        tags: ['OBS Studio', 'Facebook Live', 'YouTube', 'Camera Operations', 'Technical Support'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'feast-day-campaigns',
        filterKey: 'social-media',
        filterKeys: ['social-media', 'merchandise'],
        title: 'Feast Day Digital Campaigns',
        subtitle: 'Campaign Promotion · Social Media · Creative',
        category: 'Campaign Promotion',
        period: 'Annual',
        role: 'Social Media Manager · Graphic Designer',
        result: 'Multi-platform campaign',
        heroMetric: 'End-to-end campaign',
        image: '/images/portfolio/merchandise/merchandise-2025-post.jpg',
        gallery: [
            {
                src: '/images/portfolio/merchandise/merchandise-2025-post.jpg',
                title: 'Del Pilar Feast Day 2025 Campaign Post',
                caption: 'Official promotional campaign post on Facebook driving awareness for annual feast day celebrations.'
            },
            {
                src: '/images/portfolio/merchandise/merchandise-2024-post.jpg',
                title: 'Del Pilar Feast Day 2024 Promotional Post',
                caption: 'Visual identity system and countdown promotional graphic maintained across channels.'
            },
            {
                src: '/images/portfolio/merchandise/merch-booth-2025.jpg',
                title: 'Fiesta Onsite Engagement & Merchandise Booth',
                caption: 'Real-world ground activation combining digital pre-orders with live celebration booths.'
            }
        ],
        description: 'A connected multi-platform digital campaign for feast day celebrations, using one visual identity across all channels while adapting the message and format to each platform.',
        campaignFlow: [
            { step: '01', phase: 'Announce',          detail: 'Event posters and event covers' },
            { step: '02', phase: 'Build Anticipation', detail: 'Countdown graphics and short-form content' },
            { step: '03', phase: 'Promote',           detail: 'Promotional videos and Reels' },
            { step: '04', phase: 'Cover',             detail: 'Livestream assets and event documentation' },
        ],
        highlights: [
            'Maintained visual identity consistency across posters, event covers, countdown graphics, videos, and reels.',
            'Adapted campaign assets for Facebook, Instagram, TikTok, and YouTube formats.',
            'Handled photography, video editing, and caption writing.',
        ],
        tags: ['Campaign Design', 'Event Promotion', 'Graphic Design', 'Reels', 'Video', 'Multi-platform'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'bitoon-nin-paglaom',
        filterKey: 'fundraising',
        filterKeys: ['fundraising', 'social-media', 'livestream'],
        title: 'Bitoon nin Paglaom',
        subtitle: 'A Giant Christmas Tree Fundraising Project',
        category: 'Fundraising & Community Campaign',
        period: 'Christmas Season',
        role: 'Social Media Manager',
        result: '₱60,800',
        heroMetric: '67 sponsors · ₱60,800',
        image: '/images/portfolio/fundraising/bitoon-campaign-launch.jpg',
        gallery: [
            {
                src: '/images/portfolio/fundraising/bitoon-campaign-launch.jpg',
                title: 'Bitoon nin Paglaom Official Campaign Launch',
                caption: 'Official promotional graphic for the Bell Tower Giant Christmas Tree fundraising initiative.'
            },
            {
                src: '/images/portfolio/fundraising/bitoon-equipment-update.jpg',
                title: 'Media Center Equipment Update',
                caption: 'Public report showing cameras, broadcast equipment, and monitors funded through star sponsorships.'
            },
            {
                src: '/images/portfolio/slides/bitoon-proof-slide.jpg',
                title: 'Sponsor Breakdown & Documentation Slide',
                caption: 'Complete verification of 67 sponsors contributing ₱60,800 across 4 distinct star tiers.'
            }
        ],
        description: 'A community-centered digital campaign that transformed the parish Bell Tower into a Tree of Light and Hope. The campaign invited sponsors to fund stars and support CCTV installation, seamless livestreaming capability, and Phase I of the Media Center at the Choir Loft.',
        highlights: [
            'Managed all digital campaign communication, messaging, and storytelling.',
            'Designed visual content: star tiers, sponsor announcements, progress updates.',
            'Published donor information and fundraising updates publicly.',
            'Coordinated donor recognition on Del Pilar Parish Facebook page and Thank You tarpaulin.',
        ],
        sponsors: [
            { tier: 'Biggest Star', count: '2 sponsors', amount: '₱20,000' },
            { tier: 'Big Star',     count: '25 sponsors', amount: '₱25,000' },
            { tier: 'Medium Star',  count: '19 sponsors', amount: '₱9,500' },
            { tier: 'Small Star',   count: '21 sponsors', amount: '₱6,300' },
        ],
        metrics: [
            { value: '67',      label: 'Total sponsors' },
            { value: '₱60,800', label: 'Total contributions' },
            { value: '₱10,000', label: 'Biggest Star tier' },
            { value: '₱300',    label: 'Entry-level tier' },
        ],
        tags: ['Fundraising', 'Community Campaign', 'Graphic Design', 'Facebook', 'Digital Storytelling'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'merchandise-2024',
        filterKey: 'merchandise',
        filterKeys: ['merchandise', 'social-media', 'ecommerce'],
        title: 'Merchandise Campaign 2024',
        subtitle: 'Seasonal Merchandise Campaign',
        category: 'Merchandise',
        period: 'October 2024',
        role: 'Social Media Manager · Digital Communications',
        result: '₱50,000',
        heroMetric: '₱50,000 reported sales',
        image: '/images/portfolio/merchandise/merchandise-2024-products.jpg',
        gallery: [
            {
                src: '/images/portfolio/merchandise/merchandise-2024-products.jpg',
                title: 'Del Pilar Fiesta 2024 Product Catalog',
                caption: 'Official merchandise product lineup: T-shirt, Mug, Umbrella, Fan, Pin, Tote bag, Coin purse.'
            },
            {
                src: '/images/portfolio/merchandise/merchandise-2024-post.jpg',
                title: 'Facebook Preorder Announcement',
                caption: 'Seasonal launch post driving preorders via Google Form and onsite booth reservations.'
            },
            {
                src: '/images/portfolio/slides/merchandise-2024-slide.jpg',
                title: 'Merchandise 2024 Campaign Overview',
                caption: '₱50,000 reported sales revenue documentation and launch strategy.'
            }
        ],
        description: 'A seasonal merchandise campaign pairing product visibility with seasonal demand, using digital communication to support merchandise purchases and preorders.',
        highlights: [
            'Designed and published product presentation content.',
            'Created preorder CTA messaging and Google Form order path.',
            'Managed onsite booth updates and launch copy.',
            'Products included: T-shirt, Mug, Umbrella, Fan, Pin, Tote bag, Coin purse, Bandana, Religious items.',
        ],
        metrics: [{ value: '₱50,000', label: 'Reported total sales' }],
        tags: ['Merchandise', 'Preorder', 'Facebook', 'Product Launch', 'Campaign'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'merchandise-2025',
        filterKey: 'merchandise',
        filterKeys: ['merchandise', 'social-media', 'ecommerce'],
        title: 'Merchandise Campaign 2025',
        subtitle: 'Repeat Seasonal Campaign',
        category: 'Merchandise',
        period: 'October 2025',
        role: 'Social Media Manager · Digital Communications',
        result: '₱52,000',
        heroMetric: '+₱2K YOY growth',
        image: '/images/portfolio/merchandise/merchandise-2025-products.jpg',
        gallery: [
            {
                src: '/images/portfolio/merchandise/merchandise-2025-products.jpg',
                title: 'Del Pilar Fiesta 2025 Product Collection',
                caption: 'Refreshed seasonal merchandise product collection with updated designs.'
            },
            {
                src: '/images/portfolio/merchandise/merch-booth-2025.jpg',
                title: 'Onsite Merchandise Booth Proof of Activation',
                caption: 'Physical merchandise booth operating at Our Lady of the Pillar Shrine with high foot traffic.'
            },
            {
                src: '/images/portfolio/merchandise/merchandise-2025-post.jpg',
                title: 'Facebook Campaign Launch Post',
                caption: 'Preorder CTA and product visibility campaign generating ₱52,000 in sales.'
            },
            {
                src: '/images/portfolio/slides/merchandise-2025-slide.jpg',
                title: 'Merchandise 2025 Performance Slide',
                caption: '+₱2,000 Year-over-Year improvement (+4% growth) demonstrating repeat campaign execution.'
            }
        ],
        description: 'A repeat seasonal merchandise campaign demonstrating year-over-year commercial improvement, executing the same proven campaign structure with updated products.',
        highlights: [
            'Repeated the 2024 campaign structure with product updates.',
            'Year-over-year improvement of ₱2,000 (+4%).',
            'Products same range as 2024 with refreshed visuals.',
        ],
        metrics: [
            { value: '₱52,000', label: '2025 reported sales' },
            { value: '₱50,000', label: '2024 reported sales' },
            { value: '+₱2,000', label: 'Year-over-year increase' },
            { value: '~4%',     label: 'Approximate YOY growth' },
        ],
        tags: ['Merchandise', 'Repeat Campaign', 'YOY Growth', 'Facebook'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'holy-week-merch',
        filterKey: 'merchandise',
        filterKeys: ['merchandise', 'fundraising', 'social-media'],
        title: 'Holy Week Merch 2026',
        subtitle: 'Seasonal Merchandise Fundraising',
        category: 'Merchandise Fundraising',
        period: '2026 (Holy Week)',
        role: 'Social Media Manager · Digital Communications',
        result: '₱13,000',
        heroMetric: '₱13,000 reported',
        image: '/images/portfolio/merchandise/holy-week-merch-2026.jpg',
        gallery: [
            {
                src: '/images/portfolio/merchandise/holy-week-merch-2026.jpg',
                title: 'Holy Week 2026 Pre-Order Campaign',
                caption: 'Official shirt pre-order graphic supporting Phase 2 of the Parish Media Center.'
            },
            {
                src: '/images/portfolio/slides/holy-week-slide.jpg',
                title: 'Holy Week Campaign Overview Slide',
                caption: '₱13,000 reported sales supporting the continuous development of the parish production hub.'
            }
        ],
        description: 'A Holy Week t-shirt campaign promoted via Facebook preorder content, supporting Phase 2 of the parish Media Center project.',
        highlights: [
            'Designed and published product visuals and preorder messaging.',
            'Communicated pricing clearly and directed inquiries.',
            'Fundraising tied to Phase 2 of the parish Media Center.',
        ],
        metrics: [{ value: '₱13,000', label: 'Reported total' }],
        tags: ['Merchandise', 'Holy Week', 'Fundraising', 'Facebook', 'Preorder'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'just-flowers',
        filterKey: 'social-media',
        filterKeys: ['social-media', 'ecommerce', 'merchandise'],
        title: 'Just Flowers — Valentine Promotion',
        subtitle: 'Retail / Social Media Promotion',
        category: 'Retail Campaign',
        period: 'February 2025',
        role: 'Social Media Manager',
        result: '₱30,000',
        heroMetric: '₱30,000 one-day promotion',
        image: '/images/portfolio/campaigns/just-flowers-valentine.jpg',
        gallery: [
            {
                src: '/images/portfolio/campaigns/just-flowers-valentine.jpg',
                title: 'Valentine Promotion Campaign Creative',
                caption: 'Official promotional creative for the one-day Valentine retail push.'
            },
            {
                src: '/images/portfolio/campaigns/just-flowers-winners.jpg',
                title: 'Giveaway Winners Announcement',
                caption: 'Engagement contest and public winner verification post building social credibility.'
            },
            {
                src: '/images/portfolio/campaigns/just-flowers-mechanics.jpg',
                title: 'Promo Mechanics & Booth Schedules',
                caption: 'Selling schedule and venue guidelines for maximum one-day foot-traffic velocity.'
            },
            {
                src: '/images/portfolio/slides/just-flowers-slide.jpg',
                title: 'Just Flowers Campaign Slide',
                caption: 'Documented ₱30,000 one-day promotional revenue and engagement flow.'
            }
        ],
        description: 'A Valentine\'s Day flower promotion using Facebook posts to drive product visibility, communicate selling schedules across school and community locations, and run an engagement-based giveaway.',
        highlights: [
            'Created product creatives and retail campaign posts.',
            'Communicated venue and schedule information across Facebook.',
            'Ran giveaway mechanics and announced winner publicly.',
            'Concentrated one-day purchase awareness.',
        ],
        metrics: [{ value: '₱30,000', label: 'Reported one-day promotion' }],
        tags: ['Retail', 'Valentine', 'Facebook', 'Giveaway', 'Product Promotion'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'christmas-karol',
        filterKey: 'fundraising',
        filterKeys: ['fundraising', 'social-media'],
        title: 'Christmas Karol',
        subtitle: 'Event Marketing · Community Activation',
        category: 'Event Fundraising',
        period: 'Annual (2024 & 2025)',
        role: 'Social Media Manager',
        result: '₱18K (2024) · ₱30K (2025)',
        heroMetric: 'Two-year community activation',
        image: '/images/portfolio/events/christmas-caroling-post.jpg',
        gallery: [
            {
                src: '/images/portfolio/events/christmas-caroling-post.jpg',
                title: 'Christmas Karol Campaign Announcement',
                caption: 'Official Facebook promotional poster for the annual parish caroling event.'
            },
            {
                src: '/images/portfolio/events/christmas-caroling-field.jpg',
                title: 'Field Proof & Carolers Activation',
                caption: 'Live documentation of youth carolers and community response on Christmas Day.'
            },
            {
                src: '/images/portfolio/slides/christmas-carol-slide.jpg',
                title: 'Christmas Carol Campaign Slide',
                caption: 'Clear verification of separate figures: ₱18,000 in 2024 and ₱30,000 in 2025.'
            }
        ],
        description: 'An annual community activation concentrating participation and contributions into a one-day event, supported by pre-event awareness and urgency messaging.',
        highlights: [
            'Created pre-event awareness and anticipation content.',
            'Concentrated participation and contributions into event-day activation.',
            'Managed community engagement and live-day coordination.',
            '2024 and 2025 are reported as separate figures.',
        ],
        metrics: [
            { value: '₱18,000', label: 'Christmas Karol 2024' },
            { value: '₱30,000', label: 'Christmas Karol 2025' },
        ],
        tags: ['Event', 'Fundraising', 'Community Activation', 'Facebook', 'Urgency Messaging'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'fire-victim',
        filterKey: 'fundraising',
        filterKeys: ['fundraising', 'social-media'],
        title: 'Fire-Victim Fundraising',
        subtitle: 'Community Fundraising Campaign',
        category: 'Community Fundraising',
        period: 'Emergency campaign',
        role: 'Digital Communications Support',
        result: '₱200,000+',
        heroMetric: '₱200K+ + ₱100K+ in-kind',
        image: '/images/portfolio/fundraising/fire-fundraising-transparency.jpg',
        gallery: [
            {
                src: '/images/portfolio/fundraising/fire-fundraising-transparency.jpg',
                title: 'Official Interim Financial Progress Report',
                caption: 'Official parish interim progress statement showing ₱146,432.20 raised as of March 23, 2025.'
            },
            {
                src: '/images/portfolio/fundraising/fire-relief-update.jpg',
                title: 'Urgent Relief Mission Communication',
                caption: 'Public Facebook call for emergency donations, relief goods, and community solidarity.'
            },
            {
                src: '/images/portfolio/slides/fire-relief-slide.jpg',
                title: 'Fire Relief Campaign Slide',
                caption: 'Total campaign impact: ₱200,000+ total financial donations mobilized and ₱100,000+ in-kind support.'
            }
        ],
        description: 'Supported the digital communication and fundraising campaign for fire victims, helping mobilize community donations and in-kind contributions through cause communication and transparent public updates.',
        highlights: [
            'Supported digital communication for cause awareness.',
            'Published donation CTAs and transparent campaign updates.',
            'Coordinated community information and urgent-needs communication.',
            'Official interim progress statement documented ₱146,432.20 as of March 23, 2025; total campaign donations exceeded ₱200,000 with ₱100,000+ in-kind support.',
        ],
        metrics: [
            { value: '₱200,000+', label: 'Total Reported Donations' },
            { value: '₱146,432.20', label: 'March 23, 2025 Progress Report' },
            { value: '₱100,000+', label: 'In-kind relief support' },
        ],
        tags: ['Fundraising', 'Emergency Campaign', 'Community', 'Facebook', 'Cause Communication'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'pjrs-online-shop',
        filterKey: 'ecommerce',
        filterKeys: ['ecommerce', 'social-media'],
        title: 'PJRS Online Shop',
        subtitle: 'E-Commerce Support — Shopee · Lazada',
        category: 'E-Commerce',
        period: 'Ongoing',
        role: 'E-Commerce Support',
        result: 'Multi-platform presence',
        heroMetric: 'Shopee + Lazada',
        image: '/images/portfolio/ecommerce/pjrs-shopee-lazada.jpg',
        gallery: [
            {
                src: '/images/portfolio/ecommerce/pjrs-shopee-lazada.jpg',
                title: 'Shopee & Lazada Storefront Assets',
                caption: 'Multi-platform e-commerce storefront setup, product banner design, and marketplace presence.'
            },
            {
                src: '/images/portfolio/slides/pjrs-ecommerce-slide.jpg',
                title: 'E-Commerce Operations Slide',
                caption: 'Product listing optimization, seasonal campaign participation, and customer order management.'
            }
        ],
        description: 'E-commerce support across Shopee and Lazada, focused on product presence, marketplace listings, promotional content, and seasonal campaign participation.',
        highlights: [
            'Maintained marketplace storefront and product listings on Shopee and Lazada.',
            'Created promotional content for product visibility and seasonal demand.',
            'Coordinated preorder and monthly campaign participation.',
            'Handled customer communication and order coordination.',
        ],
        tags: ['Shopee', 'Lazada', 'E-Commerce', 'Product Listing', 'Marketplace'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'bu-iroquest',
        filterKey: 'tech',
        filterKeys: ['tech'],
        title: 'BU-IROQuest',
        subtitle: 'Web Application — Bicol University International Relations Office',
        category: 'Technology Project',
        period: 'Academic Project',
        role: 'Project Manager · Front-End Programmer',
        result: '4.88 Usability Score',
        heroMetric: 'RAD · ISO-aligned evaluation',
        image: '/images/portfolio/software/bu-iroquest.jpg',
        liveUrl: 'https://www.bu-iroquest.com/',
        gallery: [
            {
                src: '/images/portfolio/software/bu-iroquest.png',
                title: 'BU-IROQuest Live Production Web Portal',
                caption: 'Live production portal deployed at https://www.bu-iroquest.com/ for Bicol University International Relations Office: "Your Gateway to Global Opportunities" empowering student mobility and academic partnerships.'
            }
        ],
        description: 'A comprehensive web application deployed live at https://www.bu-iroquest.com/ for the Bicol University International Relations Office to support information management, foreign partner linkages, student mobility document access, and digital workflows — integrating with the Arquivo Document Repository.',
        highlights: [
            'Deployed live production system at https://www.bu-iroquest.com/.',
            'Served as Project Manager: planning, coordination, documentation.',
            'Developed front-end using Vue 3, Inertia.js, and Tailwind CSS.',
            'Integrated with Arquivo Document Repository.',
            'Achieved high ISO-aligned quality scores across four criteria (4.88 Usability).',
        ],
        metrics: [
            { value: '4.76', label: 'Functional Suitability' },
            { value: '4.84', label: 'Security' },
            { value: '4.80', label: 'Reliability' },
            { value: '4.88', label: 'Usability' },
        ],
        tags: ['Laravel', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'MySQL', 'RAD', 'Project Management', 'Live Production'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'bu-rdmd',
        filterKey: 'tech',
        filterKeys: ['tech'],
        title: 'BU RDMD System (RDESys)',
        subtitle: 'Research Development & Management Division — Integrated Databank System',
        category: 'Technology Project',
        period: 'Academic / Institutional Deployment',
        role: 'System Development · Front-End Development',
        result: 'Live Portal Deployed',
        heroMetric: 'RDESys Databank',
        image: '/images/portfolio/software/bu-rdmd.jpg',
        liveUrl: 'https://submission.rdesys.bicol-u.edu.ph/',
        gallery: [
            {
                src: '/images/portfolio/software/bu-rdmd.png',
                title: 'RDESys: Integrated Databank System Live Portal',
                caption: 'Official production portal deployed at https://submission.rdesys.bicol-u.edu.ph/ for Bicol University: "Centralizing Research, Development, & Extension Operations at Bicol University" featuring Promis+ and Inspire.'
            }
        ],
        description: 'A live production research and databank management system deployed at https://submission.rdesys.bicol-u.edu.ph/ for Bicol University to centralize research proposal submissions, administrative tracking, and university-wide RDE operations.',
        highlights: [
            'Deployed live production system at https://submission.rdesys.bicol-u.edu.ph/.',
            'Features Promis+ research proposal tracking and Inspire report management.',
            'Front-end development using Vue 3, Inertia.js, and Tailwind CSS.',
            'Centralizes Research, Development, and Extension operations across Bicol University.',
            'Role-based security with Google Single Sign-On integration.',
        ],
        metrics: [
            { value: 'Promis+', label: 'Proposal Workflow' },
            { value: 'Inspire', label: 'Report Management' },
            { value: 'Laravel', label: 'Framework Stack' },
            { value: 'Live', label: 'Production Status' },
        ],
        tags: ['Laravel', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'PHP', 'MySQL', 'RDESys', 'Live Production'],
    },
    // ──────────────────────────────────────────────────────────────
    {
        id: 'pilar-shrine-portal',
        filterKey: 'tech',
        filterKeys: ['tech', 'livestream'],
        title: 'Pilar Shrine Web Portal',
        subtitle: 'Parish Web Platform & Livestream Indicator Engine',
        category: 'Technology Project · Ongoing',
        period: 'Ongoing Implementation',
        role: 'Full-Stack Developer · Administrator',
        result: 'Staging Deployed',
        heroMetric: 'Livestream Status API',
        image: '/images/portfolio/software/pilar-shrine.jpg',
        liveUrl: 'https://honeydew-elephant-708751.hostingersite.com/',
        isOngoing: true,
        gallery: [
            {
                src: '/images/portfolio/software/pilar-shrine.png',
                title: 'Pilar Shrine Web Portal — Staging Deployment',
                caption: 'Active staging deployment at https://honeydew-elephant-708751.hostingersite.com/ for the Diocesan Shrine and Parish of Our Lady of the Pillar, Sorsogon: liturgical schedules, sacraments guide, and live broadcast indicator.'
            }
        ],
        description: 'An ongoing web platform implementation deployed in staging at https://honeydew-elephant-708751.hostingersite.com/ for the Diocesan Shrine and Parish of Our Lady of the Pillar (Sorsogon), engineered with a background-checked livestream notification engine (/api/livestream-status) and parish ministry portal.',
        highlights: [
            'Deployed staging implementation at https://honeydew-elephant-708751.hostingersite.com/.',
            'Automated /api/livestream-status polling checking broadcast state without third-party tokens.',
            'Built with modern Laravel 13, Vue 3, and Tailwind CSS v4.',
            'Comprehensive liturgical calendar, Mass schedules, and sacrament guidelines.',
            'Real-time pulsing "LIVE NOW" banner linking online Mass viewers directly to broadcasts.',
        ],
        metrics: [
            { value: 'Laravel 13', label: 'Backend Architecture' },
            { value: 'Vue 3', label: 'Reactive Front-End' },
            { value: '60s Poll', label: 'Livestream Engine' },
            { value: 'Staging', label: 'Hostinger Cloud' },
        ],
        tags: ['Laravel 13', 'Vue 3', 'Tailwind CSS v4', 'Vite', 'Livestream API', 'Hostinger Staging', 'Ongoing'],
    },
];

caseStudies.forEach(c => {
    if (c.image) c.image = useAsset(c.image);
    if (Array.isArray(c.gallery)) {
        c.gallery.forEach(g => {
            if (g.src) g.src = useAsset(g.src);
        });
    }
});

const filteredStudies = computed(() => {
    if (activeFilter.value === 'all') return caseStudies;
    return caseStudies.filter(c => {
        if (Array.isArray(c.filterKeys)) {
            return c.filterKeys.includes(activeFilter.value);
        }
        return c.filterKey === activeFilter.value;
    });
});
</script>

<style scoped>
.modal-enter-active, .modal-leave-active { transition: opacity 0.3s ease; }
.modal-enter-from, .modal-leave-to { opacity: 0; }
</style>

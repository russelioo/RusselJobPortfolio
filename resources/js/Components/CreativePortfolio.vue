<template>
    <section id="gallery" class="py-24 lg:py-32 bg-[#070d1a] relative" aria-label="Creative Portfolio Gallery">
        <!-- Background accents -->
        <div class="absolute inset-0 grid-overlay opacity-40 pointer-events-none" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="reveal">
                <SectionHeading
                    eyebrow="Creative & Campaign Portfolio"
                    subtitle="Real visual evidence, promotional assets, campaign graphics, and live event documentation extracted from verified portfolio records."
                >
                    Visual Portfolio.
                </SectionHeading>
            </div>

            <!-- Filter tabs -->
            <div class="flex flex-wrap gap-2 mb-10 reveal" role="tablist" aria-label="Filter gallery by category">
                <button
                    v-for="f in filters"
                    :key="f.value"
                    @click="activeFilter = f.value"
                    role="tab"
                    :aria-selected="activeFilter === f.value"
                    class="px-4 py-2 text-xs font-bold tracking-widest uppercase rounded-sm transition-all duration-200 focus-visible:ring-2 focus-visible:ring-blue-400"
                    :class="activeFilter === f.value ? 'bg-blue-600 text-white shadow-sm shadow-blue-600/30' : 'border border-[#1e2a3d] text-slate-400 hover:text-white hover:border-blue-700/50 bg-[#0a1020]'"
                >
                    {{ f.label }}
                </button>
            </div>

            <!-- Gallery Grid (Editorial layout with real images) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                <div
                    v-for="(item, index) in filteredItems"
                    :key="item.id"
                    class="group flex flex-col bg-[#0d1627] border border-[#1e2a3d] rounded-sm overflow-hidden hover:border-blue-700/60 transition-all duration-300 cursor-pointer shadow-md hover:shadow-xl hover:shadow-black/50"
                    :class="item.featured ? 'sm:col-span-2 lg:col-span-2' : ''"
                    :aria-label="item.title + ' — ' + item.category"
                    tabindex="0"
                    role="button"
                    @click="openLightbox(index)"
                    @keydown.enter="openLightbox(index)"
                >
                    <!-- Image Container -->
                    <div class="relative bg-[#050914] overflow-hidden flex items-center justify-center" :class="item.featured ? 'aspect-[16/10]' : 'aspect-square'">
                        <img
                            :src="item.image"
                            :alt="item.alt || item.title"
                            class="w-full h-full object-contain p-2 transition-transform duration-500 group-hover:scale-105"
                            loading="lazy"
                        />

                        <!-- Category & Year badges -->
                        <div class="absolute top-3 left-3 flex items-center gap-1.5 z-10">
                            <span class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-[#070d1a]/90 text-blue-400 border border-blue-900/40 rounded-sm">
                                {{ item.category }}
                            </span>
                            <span v-if="item.year" class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-[#070d1a]/90 text-slate-400 border border-[#1e2a3d] rounded-sm">
                                {{ item.year }}
                            </span>
                        </div>

                        <!-- Hover overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#070d1a] via-[#070d1a]/75 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-5">
                            <span class="text-[11px] font-bold tracking-widest uppercase text-blue-300 mb-1">{{ item.campaign }}</span>
                            <h4 class="text-sm sm:text-base font-bold text-white leading-tight mb-2">{{ item.title }}</h4>
                            <p class="text-xs text-slate-300 line-clamp-2">{{ item.description }}</p>
                            <div class="mt-3 flex items-center gap-1.5 text-xs font-semibold text-blue-400">
                                <span>Click to inspect</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-4 border-t border-[#1e2a3d] flex-1 flex flex-col justify-between bg-[#0a1020]">
                        <div>
                            <div class="text-[10px] font-semibold tracking-wider text-slate-500 uppercase mb-1">
                                {{ item.campaign }} · {{ item.type }}
                            </div>
                            <h4 class="text-xs sm:text-sm font-bold text-white group-hover:text-blue-300 transition-colors line-clamp-1">
                                {{ item.title }}
                            </h4>
                        </div>
                        <div v-if="item.impact" class="mt-3 pt-2 border-t border-[#1e2a3d]/50 flex items-center justify-between text-[11px]">
                            <span class="text-slate-500">Reported Impact:</span>
                            <span class="font-bold text-blue-400 font-mono">{{ item.impact }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom summary strip -->
            <div class="mt-12 p-6 bg-[#0a1020] border border-[#1e2a3d] rounded-sm flex flex-col md:flex-row items-center justify-between gap-4 reveal">
                <div class="flex items-center gap-3">
                    <div class="w-2.5 h-2.5 rounded-full bg-blue-500 animate-ping" aria-hidden="true" />
                    <p class="text-xs text-slate-300">
                        <strong class="text-white">Sample Graphics, Video, Documentation &amp; Other Work:</strong> For additional high-resolution portfolio samples, video files, and campaign documentation, please see on this Google Drive.
                    </p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <button
                        @click="activeFilter = 'all'"
                        class="text-xs font-bold uppercase tracking-wider text-slate-400 hover:text-white whitespace-nowrap px-3 py-2 border border-[#1e2a3d] hover:border-slate-500 rounded-sm transition-colors"
                    >
                        Show All ({{ portfolioItems.length }})
                    </button>
                    <a
                        href="https://drive.google.com/drive/folders/1D2blw7ZEZsNjjHmvTVEIsZIvGGnD96kR?usp=sharing"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider rounded-sm transition-colors flex items-center gap-1.5 shadow-sm"
                    >
                        <span>Open Google Drive</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- ─── Premium Lightbox with Next/Prev & Keyboard Navigation ─── -->
        <Teleport to="body">
            <transition name="modal">
                <div
                    v-if="currentIndex !== null"
                    class="fixed inset-0 z-[100] flex items-center justify-center p-2 sm:p-6 bg-black/90 backdrop-blur-md"
                    @click.self="closeLightbox"
                    role="dialog"
                    :aria-label="activeItem?.title"
                    aria-modal="true"
                >
                    <!-- Close button -->
                    <button
                        @click="closeLightbox"
                        class="absolute top-4 right-4 z-20 p-2 text-slate-400 hover:text-white bg-black/50 hover:bg-black/80 rounded-full transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                        aria-label="Close Lightbox"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Previous button -->
                    <button
                        @click="prevItem"
                        class="absolute left-2 sm:left-4 z-20 p-3 text-slate-300 hover:text-white bg-black/60 hover:bg-black/90 rounded-full transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                        aria-label="Previous Image (Left arrow key)"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <!-- Next button -->
                    <button
                        @click="nextItem"
                        class="absolute right-2 sm:right-4 z-20 p-3 text-slate-300 hover:text-white bg-black/60 hover:bg-black/90 rounded-full transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                        aria-label="Next Image (Right arrow key)"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Main Lightbox Modal Box -->
                    <div class="relative max-w-4xl w-full max-h-[92vh] flex flex-col bg-[#0d1627] border border-[#1e2a3d] rounded-sm overflow-hidden shadow-2xl">
                        <!-- Image Area -->
                        <div class="relative bg-black flex items-center justify-center p-4 max-h-[68vh] overflow-hidden">
                            <img
                                :src="activeItem?.image"
                                :alt="activeItem?.alt || activeItem?.title"
                                class="max-h-[64vh] max-w-full object-contain mx-auto"
                            />
                        </div>

                        <!-- Details Footer -->
                        <div class="p-5 sm:p-6 bg-[#0a1020] border-t border-[#1e2a3d] flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-blue-600/20 text-blue-300 border border-blue-600/40 rounded-sm">
                                        {{ activeItem?.category }}
                                    </span>
                                    <span class="text-xs text-slate-400">
                                        {{ activeItem?.campaign }} · {{ activeItem?.year }}
                                    </span>
                                </div>
                                <h3 class="text-base sm:text-lg font-bold text-white">{{ activeItem?.title }}</h3>
                                <p class="text-xs text-slate-300 max-w-2xl leading-relaxed">{{ activeItem?.description }}</p>
                            </div>

                            <div v-if="activeItem?.impact" class="text-left sm:text-right shrink-0">
                                <span class="text-[10px] text-slate-500 uppercase tracking-wider block">Reported Figure</span>
                                <span class="text-base font-black text-blue-400 font-mono">{{ activeItem?.impact }}</span>
                            </div>
                        </div>

                        <!-- Progress dots / count -->
                        <div class="px-6 py-2 bg-[#070d1a] border-t border-[#1e2a3d]/60 flex items-center justify-between text-[11px] text-slate-500 font-mono">
                            <span>Asset {{ (currentIndex || 0) + 1 }} of {{ filteredItems.length }}</span>
                            <span>Press ESC to close · Left/Right to navigate</span>
                        </div>
                    </div>
                </div>
            </transition>
        </Teleport>
    </section>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { useAsset } from '@/composables/useAsset.js';
import SectionHeading from '@/Components/SectionHeading.vue';

const activeFilter = ref('all');
const currentIndex = ref(null);

const activeItem = computed(() => {
    if (currentIndex.value === null) return null;
    return filteredItems.value[currentIndex.value] || null;
});

function openLightbox(index) {
    currentIndex.value = index;
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    currentIndex.value = null;
    document.body.style.overflow = '';
}

function nextItem() {
    if (currentIndex.value === null) return;
    currentIndex.value = (currentIndex.value + 1) % filteredItems.value.length;
}

function prevItem() {
    if (currentIndex.value === null) return;
    currentIndex.value = (currentIndex.value - 1 + filteredItems.value.length) % filteredItems.value.length;
}

function handleKeydown(e) {
    if (currentIndex.value === null) return;
    if (e.key === 'Escape') closeLightbox();
    else if (e.key === 'ArrowRight') nextItem();
    else if (e.key === 'ArrowLeft') prevItem();
}

onMounted(() => window.addEventListener('keydown', handleKeydown));
onUnmounted(() => window.removeEventListener('keydown', handleKeydown));

// ─── Filter categories ──────────────────────────────────────────────
const filters = [
    { value: 'all',          label: 'All' },
    { value: 'merchandise',  label: 'Merchandise' },
    { value: 'fundraising',  label: 'Fundraising' },
    { value: 'campaigns',    label: 'Campaigns' },
    { value: 'events',       label: 'Events' },
    { value: 'social-media', label: 'Social Media' },
    { value: 'ecommerce',    label: 'E-Commerce' },
    { value: 'graphic',      label: 'Graphic Design' },
    { value: 'video',        label: 'Video' },
    { value: 'livestream',   label: 'Livestream' },
];

// ─── Real Portfolio Visual Assets (Extracted from Source PDF) ────────
const portfolioItems = [
    // 1. Del Pilar Fiesta 2025 Merchandise Collection (Featured)
    {
        id: 1,
        title: 'Del Pilar Fiesta 2025 Product Visuals & Engagement Proof',
        category: 'merchandise',
        filterTags: ['merchandise', 'graphic', 'campaigns'],
        campaign: 'Merchandise 2025',
        year: '2025',
        type: 'Product Visuals / Engagement Proof',
        image: '/images/portfolio/merchandise/merchandise-2025-products.jpg',
        alt: 'Del Pilar Fiesta 2025 official merchandise lineup and customer engagement proof',
        description: 'Complete Del Pilar Fiesta 2025 product lineup showcase: t-shirts, mugs, umbrellas, fans, pins, tote bags, coin purses, bandanas, and religious items with customer inquiry and engagement proof.',
        impact: '₱52,000 Sales (+₱2K / 4% YOY)',
        featured: true,
    },

    // 2. Onsite Merch Booth Activation (Featured)
    {
        id: 2,
        title: 'Onsite Booth Proof of Activation — Live Selling',
        category: 'merchandise',
        filterTags: ['merchandise', 'events', 'campaigns'],
        campaign: 'Merchandise 2025',
        year: '2025',
        type: 'On-Ground Selling / Facebook Post',
        image: '/images/portfolio/merchandise/merch-booth-2025.jpg',
        alt: 'Onsite merchandise booth and product display at the church patio',
        description: 'Real photographic evidence of campaign follow-through: physical merchandise display, on-ground selling booth at the shrine patio, Facebook announcement, and audience engagement throughout Oct 3-12.',
        impact: 'Live On-Ground Activation',
        featured: true,
    },

    // 3. Fire Victims Transparency Report & Donation CTA (Featured)
    {
        id: 3,
        title: 'Fire Victims Transparency Report & GCash Donation Call',
        category: 'fundraising',
        filterTags: ['fundraising', 'graphic', 'campaigns', 'social-media'],
        campaign: 'Fire-Victim Fundraising',
        year: '2025',
        type: 'Transparency Report & Appeal Poster',
        image: '/images/portfolio/fundraising/fire-fundraising-transparency.jpg',
        alt: 'Fire victims call for donations transparency report showing P146,432.20 in cash donations',
        description: 'Public trust-building graphic and donation CTA reporting PHP 146,432.20 in recorded cash donations as of March 23, 2025. Features transparent GCash details, drop-off locations, and urgent in-kind supplies.',
        impact: '₱200K+ Cash / ₱100K+ In-Kind',
        featured: true,
    },

    // 4. Bitoon sa Paglaom Campaign Launch (Featured)
    {
        id: 4,
        title: 'Bitoon sa Paglaom Giant Christmas Tree Launch Post',
        category: 'fundraising',
        filterTags: ['fundraising', 'campaigns', 'graphic', 'social-media'],
        campaign: 'Bitoon sa Paglaom',
        year: '2025',
        type: 'Fundraising Launch Creative',
        image: '/images/portfolio/fundraising/bitoon-campaign-launch.jpg',
        alt: 'Bitoon sa Paglaom Giant Christmas tree fundraising project launch post',
        description: 'Official campaign launch transforming the iconic Bell Tower into a Giant Christmas Tree of Light and Hope. Digital storytelling mobilizing community donors for CCTV cameras, livestreaming, and Media Center.',
        impact: '₱61,000 Total Funds (67 Sponsors)',
        featured: true,
    },

    // 5. Holy Week Merch 2026 Pre-Order Campaign
    {
        id: 5,
        title: 'Holy Week Cotton T-Shirts Pre-Order Campaign',
        category: 'merchandise',
        filterTags: ['merchandise', 'graphic', 'campaigns', 'social-media'],
        campaign: 'Holy Week Merch 2026',
        year: '2026',
        type: 'Facebook Post / Pre-order Proof',
        image: '/images/portfolio/merchandise/holy-week-merch-2026.jpg',
        alt: 'Holy Week cotton t-shirts pre-order campaign poster and pricing',
        description: 'Seasonal merchandise campaign promoting Holy Week t-shirts (PHP 300) to fund Phase 2 of the parish Media Center. Features color options, size charts, preorder copy, and customer inquiry support.',
        impact: '₱13,000 Reported Funds',
        featured: false,
    },

    // 6. Del Pilar Fiesta 2024 Merchandise Samples
    {
        id: 6,
        title: 'Del Pilar Fiesta 2024 Merchandise Graphic Assets',
        category: 'merchandise',
        filterTags: ['merchandise', 'graphic'],
        campaign: 'Merchandise 2024',
        year: '2024',
        type: 'Product Presentation & Graphics',
        image: '/images/portfolio/merchandise/merchandise-2024-products.jpg',
        alt: 'Fiesta 2024 merchandise graphics featuring tarpaulin, shirts, mugs, and religious items',
        description: 'Original branded creative assets for the 2024 Fiesta merchandise catalog, including fiesta greeting tarpaulins, commemorative shirts, mugs, and religious tokens.',
        impact: '₱50,000 Reported Sales',
        featured: false,
    },

    // 7. Fiesta 2024 Facebook Launch & Order Path
    {
        id: 7,
        title: 'Fiesta 2024 Facebook Post & Pre-Order Google Form CTA',
        category: 'social-media',
        filterTags: ['social-media', 'campaigns', 'merchandise'],
        campaign: 'Merchandise 2024',
        year: '2024',
        type: 'Facebook Launch Copy',
        image: '/images/portfolio/merchandise/merchandise-2024-post.jpg',
        alt: 'Facebook post showing launch copy and Google Form pre-order link',
        description: 'Public launch post showing persuasive copywriting, preorder instructions, Google Form ordering pathway, booth availability notice, and contact numbers.',
        impact: 'Campaign Launch Conversion',
        featured: false,
    },

    // 8. Fiesta 2025 Facebook Pre-Order Details
    {
        id: 8,
        title: 'Fiesta 2025 Facebook Pre-Order Post & Inquiry Direction',
        category: 'social-media',
        filterTags: ['social-media', 'merchandise'],
        campaign: 'Merchandise 2025',
        year: '2025',
        type: 'Facebook Post / Pre-order Details',
        image: '/images/portfolio/merchandise/merchandise-2025-post.jpg',
        alt: 'Facebook post copy for 2025 merchandise pre-orders',
        description: 'Official parish Facebook post detailing merchandise items, fundraising purpose, inquiry routing, and on-ground booth announcements.',
        impact: 'Customer Inquiry Routing',
        featured: false,
    },

    // 9. Fire Victims Relief Mission Communication Sample
    {
        id: 9,
        title: 'Fire Relief Mission Update & Beneficiary Distribution Proof',
        category: 'fundraising',
        filterTags: ['fundraising', 'social-media', 'events'],
        campaign: 'Fire-Victim Fundraising',
        year: '2025',
        type: 'Relief Distribution Documentation',
        image: '/images/portfolio/fundraising/fire-relief-update.jpg',
        alt: 'Photos of relief distribution to 189 families at Bonifacio Covered Court in Pilar',
        description: 'Public update documenting second-wave relief distribution to 189 affected families at Bonifacio Covered Court, Brgy. Banuyo. Builds donor trust with transparent photo updates and gratitude communication.',
        impact: '189 Affected Families Supported',
        featured: false,
    },

    // 10. Bitoon sa Paglaom Sponsor & Equipment Update
    {
        id: 10,
        title: 'Bitoon sa Paglaom Equipment Update & Donor Recognition',
        category: 'fundraising',
        filterTags: ['fundraising', 'livestream', 'graphic'],
        campaign: 'Bitoon sa Paglaom',
        year: '2025',
        type: 'Outcome Proof & Equipment Installation',
        image: '/images/portfolio/fundraising/bitoon-equipment-update.jpg',
        alt: 'Equipment installation photos of CCTV camera and Parol sponsor recognition graphic',
        description: 'Concrete proof of project delivery: actual installation of security cameras and livestreaming upgrades, paired with Parol sponsor recognition cards honoring major donors.',
        impact: 'CCTV & Livestreaming Delivery',
        featured: false,
    },

    // 11. Christmas Caroling & Pahadok kay Nino Creative
    {
        id: 11,
        title: 'Christmas Caroling & Pahadok kay Nino Event Creative',
        category: 'events',
        filterTags: ['events', 'graphic', 'campaigns'],
        campaign: 'Christmas Carol',
        year: '2024',
        type: 'Event Creative / Public Post',
        image: '/images/portfolio/events/christmas-caroling-post.jpg',
        alt: 'Christmas caroling and Pahadok kay Nino event poster',
        description: 'Vibrant event poster and social media announcement detailing date, route, and schedule for the annual December 25 caroling community activation.',
        impact: '₱18,000 (2024) · ₱30,000 (2025)',
        featured: false,
    },

    // 12. Christmas Caroling Field Documentation
    {
        id: 12,
        title: 'Christmas Caroling Community Field Documentation',
        category: 'events',
        filterTags: ['events', 'social-media'],
        campaign: 'Christmas Carol',
        year: '2024',
        type: 'Field Proof / Community Post',
        image: '/images/portfolio/events/christmas-caroling-field.jpg',
        alt: 'Youth and altar servers caroling in Barangays Binanuahan, Banuyo, and Centro',
        description: 'Live field documentation capturing the youth and altar servers visiting community households across Barangays Binanuahan, Banuyo, and Centro.',
        impact: 'Community Participation & Goodwill',
        featured: false,
    },

    // 13. Just Flowers Valentine Selling Schedule & Latag CTA
    {
        id: 13,
        title: 'Just Flowers Valentine Latag Schedule & Selling Locations',
        category: 'campaigns',
        filterTags: ['campaigns', 'graphic', 'social-media'],
        campaign: 'Just Flowers',
        year: '2025',
        type: 'Retail Latag Schedule / CTA',
        image: '/images/portfolio/campaigns/just-flowers-valentine.jpg',
        alt: 'Valentine flower selling schedule across campuses and community locations',
        description: 'Schedule graphics communicating selling dates (Feb 10-14), campus locations, and community pop-up stalls for Valentine week flower sales.',
        impact: '₱30,000 One-Day Retail Promotion',
        featured: false,
    },

    // 14. Just Flowers Girlfriend\'s Day Winners Announcement
    {
        id: 14,
        title: 'Just Flowers Girlfriend\'s Day Winners Announcement',
        category: 'campaigns',
        filterTags: ['campaigns', 'social-media'],
        campaign: 'Just Flowers',
        year: '2025',
        type: 'Engagement Announcement',
        image: '/images/portfolio/campaigns/just-flowers-winners.jpg',
        alt: 'Girlfriends Day winners announcement creative',
        description: 'Audience-engagement graphic congratulating winners of the Valentine flower promotion contest, driving viral shares and community goodwill.',
        impact: 'High Organic Social Reach',
        featured: false,
    },

    // 15. Just Flowers Giveaway Mechanics & Share Promo
    {
        id: 15,
        title: 'Just Flowers Giveaway Mechanics & Share Promotion',
        category: 'campaigns',
        filterTags: ['campaigns', 'social-media'],
        campaign: 'Just Flowers',
        year: '2025',
        type: 'Social Contest Mechanics',
        image: '/images/portfolio/campaigns/just-flowers-mechanics.jpg',
        alt: 'Social media giveaway contest mechanics poster with cash prizes',
        description: 'Share-to-win contest mechanics offering 1st (₱300), 2nd (₱200), and 3rd (₱100) prizes plus consolation bouquets to concentrate pre-Valentine buyer attention.',
        impact: 'Viral Engagement Strategy',
        featured: false,
    },

    // 16. PJRS Online Shop Shopee & Lazada Showcase
    {
        id: 16,
        title: 'PJRS Online Shop E-Commerce Storefront (Shopee + Lazada)',
        category: 'ecommerce',
        filterTags: ['ecommerce', 'campaigns'],
        campaign: 'PJRS Online Shop',
        year: '2024-2026',
        type: 'Marketplace Merchandising',
        image: '/images/portfolio/ecommerce/pjrs-shopee-lazada.jpg',
        alt: 'PJRS Online Shop marketplace presentation for Shopee and Lazada',
        description: 'Product listing optimization, seasonal demand promotion, storefront presentation, and customer communication across leading Southeast Asian marketplaces.',
        impact: 'Multi-Marketplace Retail Presence',
        featured: false,
    },

    // 17. Digital Marketing Strategy & Conversion Path
    {
        id: 17,
        title: 'Marketing Approach: The Conversion Path Framework',
        category: 'campaigns',
        filterTags: ['campaigns', 'graphic'],
        campaign: 'Campaign Strategy',
        year: '2024-2026',
        type: 'Strategy & Framework',
        image: '/images/portfolio/slides/marketing-approach.jpg',
        alt: 'The conversion path from awareness to consideration to action',
        description: 'The proven strategic funnel: Awareness (timely recognizable content) → Consideration (clear purpose and value) → Action (purchase, donation, or attendance).',
        impact: 'Repeatable Campaign Architecture',
        featured: false,
    },
];

portfolioItems.forEach(item => {
    if (item.image) item.image = useAsset(item.image);
});

const filteredItems = computed(() => {
    if (activeFilter.value === 'all') return portfolioItems;
    return portfolioItems.filter(item => {
        return item.category === activeFilter.value || (item.filterTags && item.filterTags.includes(activeFilter.value));
    });
});
</script>

<style scoped>
.modal-enter-active, .modal-leave-active { transition: opacity 0.25s ease; }
.modal-enter-from, .modal-leave-to { opacity: 0; }
</style>

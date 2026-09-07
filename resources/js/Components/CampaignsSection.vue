<template>
    <section id="campaigns" class="py-24 lg:py-32 bg-[#070d1a] relative" aria-label="Campaign Impact section">
        <!-- Background elements -->
        <div class="absolute inset-0 grid-overlay opacity-30 pointer-events-none" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            <!-- Heading -->
            <div class="reveal">
                <SectionHeading
                    eyebrow="Digital Marketing & Campaign Impact"
                    subtitle="Campaigns that translated digital communication into real community action, fundraising, and commercial results."
                >
                    Campaigns That Move People<br class="hidden lg:block" />
                    <span class="gradient-text">to Action.</span>
                </SectionHeading>
            </div>

            <!-- ─── Visual Campaign Timeline (Section 17) ─── -->
            <div class="reveal mb-20">
                <div class="text-xs font-bold tracking-[0.25em] uppercase text-slate-500 mb-6 flex items-center gap-2">
                    <span class="w-6 h-px bg-blue-600" aria-hidden="true" />
                    Campaign Milestones & Impact Timeline
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div
                        v-for="item in timelineItems"
                        :key="item.label"
                        class="p-5 bg-[#0d1627] border border-[#1e2a3d] rounded-sm hover:border-blue-600/70 transition-all flex flex-col justify-between"
                    >
                        <div>
                            <div class="flex items-center justify-between text-xs mb-2">
                                <span class="font-mono font-bold text-blue-400">{{ item.year }}</span>
                                <span class="px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider bg-[#070d1a] text-slate-400 border border-[#1e2a3d] rounded-sm">
                                    {{ item.type }}
                                </span>
                            </div>
                            <h4 class="text-sm font-bold text-white mb-1">{{ item.label }}</h4>
                            <p class="text-xs text-slate-400">{{ item.detail }}</p>
                        </div>

                        <div class="mt-4 pt-3 border-t border-[#1e2a3d]/60">
                            <span class="text-2xl font-black text-white font-mono block">{{ item.figure }}</span>
                            <span class="text-[10px] font-bold text-slate-500 tracking-wider uppercase">{{ item.figureLabel }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ─── Proof of Activation: Onsite Merch Booth (Section 3) ─── -->
            <div class="reveal mb-20">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center p-8 bg-[#0a1020] border border-[#1e2a3d] rounded-sm shadow-xl">
                    <!-- Image -->
                    <div class="lg:col-span-5 relative bg-black rounded-sm overflow-hidden border border-[#1e2a3d]/80 aspect-[4/5] flex items-center justify-center">
                        <img
                            src="/images/portfolio/merchandise/merch-booth-2025.jpg"
                            alt="Onsite merchandise booth and product display proof of activation"
                            class="w-full h-full object-contain p-2"
                            loading="lazy"
                        />
                        <div class="absolute top-3 left-3">
                            <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase bg-blue-600 text-white rounded-sm">
                                Proof of Activation
                            </span>
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="lg:col-span-7 space-y-5">
                        <div class="flex items-center gap-2 text-xs font-mono text-blue-400">
                            <span>DEL PILAR FIESTA 2025</span>
                            <span>·</span>
                            <span>OCTOBER 3–12, 2025</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-black text-white leading-tight">
                            Onsite Booth:<br />
                            <span class="gradient-text">Follow-Through Beyond Launch</span>
                        </h3>

                        <p class="text-sm text-slate-300 leading-relaxed">
                            A great campaign connects digital hype with physical presence. Del Pilar Fiesta merchandise moved from online preorder teasers directly to a live selling booth at the church patio—complete with physical product curation, official hashtag use (<code class="text-blue-300 font-mono">#DelPilarMerch2025</code>), and verified community buyer engagement.
                        </p>

                        <!-- Highlights -->
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 bg-[#070d1a] border border-[#1e2a3d] rounded-sm">
                                <span class="text-xs text-slate-500 uppercase block font-mono">2024 Sales</span>
                                <span class="text-lg font-black text-white font-mono">₱50,000</span>
                            </div>
                            <div class="p-3 bg-[#070d1a] border border-[#1e2a3d] rounded-sm">
                                <span class="text-xs text-slate-500 uppercase block font-mono">2025 Sales</span>
                                <span class="text-lg font-black text-blue-400 font-mono">₱52,000</span>
                            </div>
                            <div class="p-3 bg-[#070d1a] border border-[#1e2a3d] rounded-sm col-span-2 sm:col-span-1">
                                <span class="text-xs text-slate-500 uppercase block font-mono">YOY Growth</span>
                                <span class="text-lg font-black text-emerald-400 font-mono">+₱2K (~4%)</span>
                            </div>
                        </div>

                        <!-- Product Set Tag Pills -->
                        <div class="pt-2">
                            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Featured Products in Campaign:</span>
                            <div class="flex flex-wrap gap-1.5">
                                <span v-for="prod in merchProducts" :key="prod" class="px-2.5 py-1 text-xs bg-[#070d1a] border border-[#1e2a3d] text-slate-300 rounded-sm">
                                    {{ prod }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ─── Emergency Cause Marketing & Transparency Highlight ─── -->
            <div class="reveal mb-20">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center p-8 bg-[#0d1627] border border-[#1e2a3d] rounded-sm shadow-xl">
                    <div class="lg:col-span-7 space-y-5 order-2 lg:order-1">
                        <div class="flex items-center gap-2 text-xs font-mono text-red-400">
                            <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse" />
                            <span>EMERGENCY RELIEF CAMPAIGN</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-black text-white leading-tight">
                            Fire-Victim Fundraising:<br />
                            <span class="gradient-text">Trust Through Transparency</span>
                        </h3>

                        <p class="text-sm text-slate-300 leading-relaxed">
                            When tragedy struck Brgy. Banuyo in Pilar, digital communications served as a rapid mobilization vehicle. Real-time transparency updates reported cash donations stage-by-stage, pairing GCash QR appeals with documented relief distribution at Bonifacio Covered Court to 189 families.
                        </p>

                        <!-- Breakdown stats -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 bg-[#070d1a] border border-[#1e2a3d] rounded-sm">
                                <span class="text-[10px] text-slate-400 uppercase block font-mono">Progress Report (Mar 23)</span>
                                <span class="text-base font-black text-white font-mono">₱146,432.20</span>
                                <span class="text-[10px] text-slate-500 block mt-0.5">Recorded cash donations</span>
                            </div>
                            <div class="p-3 bg-[#070d1a] border border-[#1e2a3d] rounded-sm">
                                <span class="text-[10px] text-slate-400 uppercase block font-mono">Final Total Cash Reported</span>
                                <span class="text-base font-black text-blue-400 font-mono">₱200,000+</span>
                                <span class="text-[10px] text-slate-500 block mt-0.5">Community cash funds</span>
                            </div>
                            <div class="p-3 bg-[#070d1a] border border-[#1e2a3d] rounded-sm">
                                <span class="text-[10px] text-slate-400 uppercase block font-mono">In-Kind Supplies</span>
                                <span class="text-base font-black text-emerald-400 font-mono">₱100,000+</span>
                                <span class="text-[10px] text-slate-500 block mt-0.5">Food, clothes, milk, blankets</span>
                            </div>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="lg:col-span-5 relative bg-black rounded-sm overflow-hidden border border-[#1e2a3d]/80 aspect-[16/11] flex items-center justify-center order-1 lg:order-2">
                        <img
                            src="/images/portfolio/fundraising/fire-fundraising-transparency.jpg"
                            alt="Fire victims transparency report showing P146,432.20"
                            class="w-full h-full object-contain p-2"
                            loading="lazy"
                        />
                        <div class="absolute top-3 right-3">
                            <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase bg-red-900/80 border border-red-700 text-white rounded-sm">
                                Transparency Report
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ─── Attention → Trust → Action Model ─── -->
            <div class="reveal mb-20">
                <div class="text-xs font-bold tracking-[0.25em] uppercase text-slate-500 mb-8 flex items-center gap-2">
                    <span class="w-6 h-px bg-blue-600" aria-hidden="true" />
                    Strategic Conversion Path
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 max-w-5xl">
                    <div
                        v-for="(stage, i) in funnelStages"
                        :key="stage.label"
                        class="relative p-8 border border-[#1e2a3d] rounded-sm lg:rounded-none first:lg:rounded-l-sm last:lg:rounded-r-sm hover:border-blue-700/50 bg-[#0d1627]/40 transition-colors"
                    >
                        <!-- Connector arrow -->
                        <div
                            v-if="i < funnelStages.length - 1"
                            class="hidden lg:flex absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 z-10 w-6 h-6 items-center justify-center bg-[#070d1a] border border-[#1e2a3d] rounded-full text-blue-400"
                            aria-hidden="true"
                        >
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                        <div class="text-3xl font-black gradient-text mb-2">{{ stage.label }}</div>
                        <p class="text-sm text-slate-300 leading-relaxed mb-4">{{ stage.desc }}</p>
                        <ul class="space-y-1.5">
                            <li v-for="item in stage.items" :key="item" class="text-xs text-slate-400 flex items-start gap-2">
                                <span class="mt-1.5 w-1 h-1 rounded-full bg-blue-500 shrink-0" aria-hidden="true" />
                                <span>{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Campaign thinking blocks -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div v-for="(b, i) in thinkingBlocks" :key="b.title" class="reveal" :style="`transition-delay:${i*50}ms`">
                    <div class="p-6 border border-[#1e2a3d] rounded-sm bg-[#0d1627]/40 hover:border-blue-700/40 transition-colors h-full flex flex-col justify-between">
                        <div>
                            <div class="text-xs font-bold tracking-widest uppercase text-blue-400 mb-2">{{ b.title }}</div>
                            <p class="text-xs text-slate-400 leading-relaxed">{{ b.body }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
import SectionHeading from '@/Components/SectionHeading.vue';

// ─── Timeline Items (Section 17) ────────────────────────────────────
const timelineItems = [
    {
        year: '2024',
        label: 'Fiesta Merchandise 2024',
        type: 'Sales',
        detail: 'Seasonal religious merchandise promotion & preorder Google Form pathway.',
        figure: '₱50,000',
        figureLabel: 'Reported Total Sales',
    },
    {
        year: '2025',
        label: 'Fiesta Merchandise 2025',
        type: 'Sales',
        detail: 'Expanded 9-product catalog with on-ground booth selling at shrine patio.',
        figure: '₱52,000',
        figureLabel: 'Reported Total Sales (+4% YOY)',
    },
    {
        year: '2025',
        label: 'Just Flowers Valentine',
        type: 'Promotion',
        detail: 'Campus latag schedule, Girlfriend\'s Day winner announcements & giveaways.',
        figure: '₱30,000',
        figureLabel: 'Reported One-Day Promotion',
    },
    {
        year: '2025',
        label: 'Bitoon sa Paglaom',
        type: 'Fundraising',
        detail: 'Giant Christmas Tree sponsorship for church CCTV, livestreaming & Media Center.',
        figure: '₱61,000',
        figureLabel: 'Reported Funds (67 Sponsors)',
    },
    {
        year: '2025',
        label: 'Fire-Victim Relief Campaign',
        type: 'Fundraising',
        detail: 'Emergency relief appeal with real-time GCash transparency for 189 families.',
        figure: '₱200K+',
        figureLabel: 'Total Cash (+₱100K+ In-Kind)',
    },
    {
        year: '2024 & 2025',
        label: 'Christmas Caroling & Pahadok',
        type: 'Event Figure',
        detail: 'December 25 live-day community caroling activation with photo documentation.',
        figure: '₱18K / ₱30K',
        figureLabel: 'Reported Separately by Year',
    },
    {
        year: '2026',
        label: 'Holy Week Cotton T-Shirts',
        type: 'Reported Funds',
        detail: 'Preorder merchandise fundraising supporting Media Center Phase 2.',
        figure: '₱13,000',
        figureLabel: 'Reported Preorder Total',
    },
    {
        year: '2024–2026',
        label: 'PJRS Online Shop (Shopee & Lazada)',
        type: 'E-Commerce',
        detail: 'Marketplace listings, monthly promo participation & customer communication.',
        figure: 'Multi-Channel',
        figureLabel: 'Marketplace Presence',
    },
];

const merchProducts = [
    'T-Shirt',
    'Mug',
    'Umbrella',
    'Foldable Fan',
    'Commemorative Pin',
    'Tote Bag',
    'Coin Purse',
    'Bandana',
    'Religious Items',
];

const funnelStages = [
    {
        label: 'Awareness',
        desc: 'Reach people with timely, recognizable content that grabs attention instantly.',
        items: ['Event posters & covers', 'Countdown graphics', 'Reels & short-form video', 'Clear launch messaging'],
    },
    {
        label: 'Consideration',
        desc: 'Make the purpose, value, or community urgency easy to understand and trust.',
        items: ['Product pricing clarity', 'Transparent donation reports', 'Progress photos & updates', 'Consistent visual branding'],
    },
    {
        label: 'Action',
        desc: 'Direct the audience clearly toward purchase, pledge, attendance, or donation.',
        items: ['Google Form order links', 'Onsite booth schedules', 'GCash QR pathways', 'Winner announcements'],
    },
];

const thinkingBlocks = [
    { title: 'Campaign Thinking', body: 'Define the cause or product, shape a clear message, build a reason to respond, then keep the audience informed.' },
    { title: 'Content Execution', body: 'Combine social posts, visual assets, event communication, product promotion, and community updates.' },
    { title: 'Awareness', body: 'Reach people with timely recognizable content calibrated to platform behavior.' },
    { title: 'Conversion', body: 'Direct the audience clearly — to a purchase, donation, pledge, or event attendance.' },
];
</script>

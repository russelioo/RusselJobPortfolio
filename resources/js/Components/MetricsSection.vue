<template>
    <section
        id="impact"
        class="py-24 lg:py-32 relative overflow-hidden"
        aria-label="Digital Impact metrics section"
    >
        <!-- Background -->
        <div class="absolute inset-0 grid-overlay opacity-50" aria-hidden="true" />
        <div class="absolute inset-0 bg-gradient-to-b from-[#070d1a] via-[#0d1627]/60 to-[#070d1a]" aria-hidden="true" />
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-900/10 blur-3xl rounded-full" aria-hidden="true" />

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-blue-400 mb-4">Digital Impact</p>
                <h2 class="text-3xl lg:text-5xl font-black text-white mb-4">By the Numbers.</h2>
                <p class="text-slate-400 max-w-lg mx-auto text-sm">
                    Real results from real projects — in digital reach, community fundraising, and communications.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 max-w-4xl mx-auto">
                <div v-for="(metric, i) in metrics" :key="metric.label" class="reveal" :style="`transition-delay: ${i * 100}ms`">
                    <MetricCard v-bind="metric" />
                </div>
            </div>

            <!-- Context note -->
            <div class="mt-12 text-center reveal">
                <p class="text-xs text-slate-600 max-w-xl mx-auto">
                    Follower counts reflect community social media accounts managed.
                    Fundraising figure reflects Bitoon Nin Paglaom campaign contributions.
                </p>
            </div>
        </div>
    </section>
</template>

<script setup>
import MetricCard from '@/Components/MetricCard.vue';

const metrics = [
    {
        prefix: '',
        value: '10,000+',
        suffix: '',
        label: 'Del Pilar Parish Followers',
        sublabel: 'Facebook Page',
    },
    {
        prefix: '',
        value: '17,000+',
        suffix: '',
        label: 'LARPI Followers',
        sublabel: 'Facebook Page',
    },
    {
        prefix: '₱',
        value: '60,800',
        suffix: '',
        label: 'Bitoon Nin Paglaom Fund',
        sublabel: 'Total Contributions',
    },
];
</script>


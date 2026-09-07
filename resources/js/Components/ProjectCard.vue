<template>
    <article
        class="group flex flex-col bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm overflow-hidden transition-all duration-300 hover:border-blue-700/50"
        :aria-label="title + ' project'"
    >
        <!-- Project image -->
        <div class="relative aspect-video bg-[#070d1a] overflow-hidden">
            <template v-if="image">
                <img :src="image" :alt="title" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0d1627] via-transparent to-black/30 pointer-events-none" />
            </template>
            <template v-else>
                <div class="absolute inset-0 grid-overlay opacity-60" aria-hidden="true" />
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6">
                        <div class="text-xs font-mono text-blue-400/80 uppercase tracking-widest mb-1">&lt;/&gt; SYSTEM</div>
                        <div class="text-lg font-black text-white/80 group-hover:text-white transition-colors">{{ title }}</div>
                    </div>
                </div>
            </template>
            <!-- Category badge -->
            <div class="absolute top-4 left-4 z-10">
                <span class="px-2.5 py-1 text-xs font-bold tracking-widest uppercase bg-blue-600/90 text-white rounded-sm backdrop-blur-sm shadow-md">
                    {{ category }}
                </span>
            </div>
        </div>

        <!-- Content -->
        <div class="flex flex-col flex-1 p-6">
            <!-- Meta -->
            <div class="flex items-center gap-2 mb-3">
                <span class="text-xs text-slate-500 tracking-wide">{{ organization }}</span>
                <span class="w-1 h-1 rounded-full bg-slate-700" aria-hidden="true" />
                <span class="text-xs text-slate-500">{{ role }}</span>
            </div>

            <h3 class="text-lg font-bold text-white mb-3 group-hover:text-blue-200 transition-colors">{{ title }}</h3>
            <p class="text-sm text-slate-400 leading-relaxed mb-5 flex-1">{{ description }}</p>

            <!-- Metrics (optional) -->
            <div v-if="metrics && metrics.length" class="grid grid-cols-2 gap-3 mb-5">
                <div
                    v-for="m in metrics"
                    :key="m.label"
                    class="p-3 bg-[#070d1a]/60 border border-[#1e2a3d] rounded-sm"
                >
                    <div class="text-sm font-bold text-blue-300">{{ m.value }}</div>
                    <div class="text-xs text-slate-500 mt-0.5">{{ m.label }}</div>
                </div>
            </div>

            <!-- Tech stack -->
            <div class="flex flex-wrap gap-1.5 mb-6">
                <span
                    v-for="tech in technologies"
                    :key="tech"
                    class="px-2 py-0.5 text-xs font-medium bg-[#162847]/80 border border-blue-900/30 text-blue-300 rounded-sm"
                >
                    {{ tech }}
                </span>
            </div>

            <!-- CTA -->
            <button
                @click="$emit('view-case-study')"
                class="group/btn inline-flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-blue-400 hover:text-white transition-colors"
                :aria-label="'View case study for ' + title"
            >
                View Case Study
                <svg class="w-3.5 h-3.5 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </button>
        </div>
    </article>
</template>

<script setup>
defineProps({
    title:        { type: String, required: true },
    category:     { type: String, required: true },
    organization: { type: String, default: '' },
    role:         { type: String, default: '' },
    description:  { type: String, required: true },
    technologies: { type: Array,  default: () => [] },
    metrics:      { type: Array,  default: () => [] },
    image:        { type: String, default: '' },
});

defineEmits(['view-case-study']);
</script>


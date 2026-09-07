<template>
    <article
        class="group flex flex-col bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm overflow-hidden transition-all duration-300 hover:border-blue-700/50 cursor-pointer"
        :aria-label="title + ' case study'"
        @click="$emit('open')"
        @keydown.enter="$emit('open')"
        tabindex="0"
        role="button"
    >
        <!-- Visual preview -->
        <div class="relative aspect-video bg-[#070d1a] overflow-hidden">
            <template v-if="image">
                <img
                    :src="useAsset(image)"
                    :alt="title"
                    loading="lazy"
                    class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0d1627] via-transparent to-black/30 pointer-events-none" />
            </template>
            <template v-else>
                <div class="absolute inset-0 grid-overlay opacity-60" aria-hidden="true" />
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6">
                        <div class="text-xs font-mono text-blue-400/80 uppercase tracking-widest mb-1">&lt;/&gt; SYSTEM CODE</div>
                        <div class="text-lg font-black text-white/80 group-hover:text-white transition-colors">{{ heroMetric || title }}</div>
                    </div>
                </div>
            </template>

            <!-- Category badge -->
            <div class="absolute top-3.5 left-3.5 z-10">
                <span class="px-2.5 py-1 text-[11px] font-bold tracking-widest uppercase bg-blue-600/90 text-white rounded-sm backdrop-blur-sm shadow-md">{{ category }}</span>
            </div>

            <!-- Live link badge if available -->
            <div v-if="liveUrl && !isOngoing" class="absolute top-3.5 right-3.5 z-10 px-2 py-0.5 bg-emerald-950/80 border border-emerald-500/40 rounded-sm backdrop-blur-sm text-[10px] font-bold text-emerald-300 flex items-center gap-1.5 shadow-md">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                <span>Live System</span>
            </div>
            <div v-else-if="liveUrl && isOngoing" class="absolute top-3.5 right-3.5 z-10 px-2 py-0.5 bg-amber-950/80 border border-amber-500/40 rounded-sm backdrop-blur-sm text-[10px] font-bold text-amber-300 flex items-center gap-1.5 shadow-md">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping" />
                <span>Ongoing · Staging</span>
            </div>

            <!-- Gallery count indicator if multiple and no liveUrl -->
            <div v-else-if="gallery && gallery.length > 1" class="absolute top-3.5 right-3.5 z-10 px-2 py-0.5 bg-black/75 border border-white/10 rounded-sm backdrop-blur-sm text-[10px] font-bold text-slate-200 flex items-center gap-1.5 shadow-md">
                <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>{{ gallery.length }} Proof Assets</span>
            </div>

            <!-- Result metric badge -->
            <div v-if="result && result !== 'Ongoing' && result !== 'Multi-platform campaign' && result !== 'Multi-platform presence' && result !== 'Two-year community activation' && result !== 'Laravel + Vue 3 stack' && result !== 'Full-stack development' && result !== 'End-to-end campaign' && result !== 'RAD · ISO-aligned evaluation'"
                class="absolute bottom-3 right-3 z-10 px-2.5 py-1 bg-[#0d1627]/90 border border-blue-600/50 rounded-sm backdrop-blur-sm shadow-md">
                <span class="text-xs font-black text-blue-300">{{ result }}</span>
            </div>
        </div>

        <!-- Body -->
        <div class="flex flex-col flex-1 p-5">
            <div class="text-xs text-slate-500 mb-2">{{ period }}{{ role ? ' · ' + role.split(' · ')[0] : '' }}</div>
            <h3 class="text-base font-bold text-white mb-2 group-hover:text-blue-200 transition-colors">{{ title }}</h3>
            <p class="text-xs text-slate-400 leading-relaxed flex-1 mb-4 line-clamp-3">{{ description }}</p>
            <div class="flex flex-wrap gap-1.5 mb-4">
                <span v-for="tag in (tags || []).slice(0, 4)" :key="tag"
                    class="px-2 py-0.5 text-xs font-medium bg-[#162847]/80 border border-blue-900/30 text-blue-300 rounded-sm">{{ tag }}</span>
            </div>
            <div class="flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-blue-400 group-hover:text-blue-300 transition-colors">
                View Case Study
                <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </div>
        </div>
    </article>
</template>

<script setup>
import { useAsset } from '@/composables/useAsset.js';

defineProps({
    id:          { type: String, required: true },
    title:       { type: String, required: true },
    subtitle:    { type: String, default: '' },
    category:    { type: String, required: true },
    period:      { type: String, default: '' },
    role:        { type: String, default: '' },
    result:      { type: String, default: '' },
    heroMetric:  { type: String, default: '' },
    description: { type: String, required: true },
    tags:        { type: Array,  default: () => [] },
    image:       { type: String, default: '' },
    gallery:     { type: Array,  default: () => [] },
    liveUrl:     { type: String, default: '' },
    isOngoing:   { type: Boolean, default: false },
});
defineEmits(['open']);
</script>

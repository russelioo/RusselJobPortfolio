<template>
    <article class="group p-6 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/50 transition-all duration-300 h-full flex flex-col justify-between" :aria-label="platform + ' — ' + handle">
        <div>
            <!-- Platform badge & Visit Link -->
            <div class="flex items-start justify-between gap-3 mb-5">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-10 h-10 rounded-sm flex items-center justify-center text-lg font-black flex-shrink-0" :class="bgColor" aria-hidden="true">
                        <span v-if="platform === 'Facebook'">f</span>
                        <span v-else-if="platform === 'YouTube'">▶</span>
                        <span v-else-if="platform === 'TikTok'">♪</span>
                        <span v-else>●</span>
                    </div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold" :class="color">{{ platform }}</div>
                        <div class="text-sm font-semibold text-white truncate">{{ handle }}</div>
                    </div>
                </div>
                <a
                    v-if="url"
                    :href="url"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="shrink-0 px-2.5 py-1 text-[11px] font-semibold text-blue-400 hover:text-white bg-blue-950/40 hover:bg-blue-600/40 border border-blue-800/40 rounded-sm transition-colors flex items-center gap-1 focus-visible:ring-2 focus-visible:ring-blue-400"
                    :aria-label="'Visit official ' + platform + ' page for ' + handle"
                >
                    <span>Visit ↗</span>
                </a>
            </div>
            <!-- Responsibilities -->
            <ul class="space-y-1.5" aria-label="Responsibilities">
                <li v-for="r in responsibilities" :key="r" class="flex items-start gap-2 text-xs text-slate-400">
                    <span class="mt-1.5 w-1 h-1 rounded-full bg-blue-600 flex-shrink-0" aria-hidden="true" />
                    {{ r }}
                </li>
            </ul>
        </div>

        <!-- Optional footer link when url is present -->
        <div v-if="url" class="mt-4 pt-3 border-t border-[#1e2a3d]/60 flex items-center justify-between">
            <span class="text-[11px] text-slate-500 font-mono">Official {{ platform }}</span>
            <a
                :href="url"
                target="_blank"
                rel="noopener noreferrer"
                class="text-xs font-semibold text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1"
            >
                Proceed to site ↗
            </a>
        </div>
    </article>
</template>

<script setup>
defineProps({
    platform:        { type: String, required: true },
    handle:          { type: String, required: true },
    color:           { type: String, default: 'text-blue-400' },
    bgColor:         { type: String, default: 'bg-blue-900/30' },
    url:             { type: String, default: null },
    responsibilities:{ type: Array,  default: () => [] },
});
</script>

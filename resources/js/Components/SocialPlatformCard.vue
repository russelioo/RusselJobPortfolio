<template>
    <article class="group p-6 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/50 transition-all duration-300 h-full flex flex-col justify-between" :aria-label="platform + ' — ' + handle">
        <div>
            <!-- Platform badge & Visit Link -->
            <div class="flex items-start justify-between gap-3 mb-5">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-10 h-10 rounded-sm flex items-center justify-center text-lg font-black flex-shrink-0" :class="bgColor" aria-hidden="true">
                        <span v-if="platform === 'Facebook'" class="text-blue-400">f</span>
                        <span v-else-if="platform === 'YouTube'" class="text-red-400">▶</span>
                        <span v-else-if="platform === 'TikTok'" class="text-slate-200">♪</span>
                        <span v-else-if="platform === 'Instagram'" class="text-pink-400 flex items-center justify-center">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </span>
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
                    class="shrink-0 px-2.5 py-1 text-[11px] font-semibold rounded-sm transition-colors flex items-center gap-1 focus-visible:ring-2"
                    :class="platform === 'Instagram' ? 'text-pink-400 hover:text-white bg-pink-950/40 hover:bg-pink-600/40 border border-pink-800/40 focus-visible:ring-pink-400' : (platform === 'YouTube' ? 'text-red-400 hover:text-white bg-red-950/40 hover:bg-red-600/40 border border-red-800/40 focus-visible:ring-red-400' : 'text-blue-400 hover:text-white bg-blue-950/40 hover:bg-blue-600/40 border border-blue-800/40 focus-visible:ring-blue-400')"
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
                class="text-xs font-semibold transition-colors flex items-center gap-1"
                :class="platform === 'Instagram' ? 'text-pink-400 hover:text-pink-300' : (platform === 'YouTube' ? 'text-red-400 hover:text-red-300' : 'text-blue-400 hover:text-blue-300')"
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

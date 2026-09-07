<template>
    <article class="relative pl-8 pb-10 last:pb-0" :aria-label="position + ' at ' + organization">
        <!-- Timeline line -->
        <div class="absolute left-0 top-0 bottom-0 w-px bg-[#1e2a3d]" aria-hidden="true">
            <div class="absolute top-1.5 left-1/2 -translate-x-1/2 w-2.5 h-2.5 rounded-full border-2 border-blue-500 bg-[#070d1a]" />
        </div>

        <!-- Content -->
        <div class="group p-6 bg-[#0d1627]/50 border border-[#1e2a3d] rounded-sm hover:border-blue-800/50 transition-all duration-300">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2 mb-4">
                <div>
                    <h3 class="text-base font-bold text-white">{{ position }}</h3>
                    <p class="text-sm text-blue-400 font-medium mt-0.5">{{ organization }}</p>
                </div>
                <time class="text-xs font-semibold text-slate-500 tracking-wide shrink-0 pt-0.5" :datetime="period">
                    {{ period }}
                </time>
            </div>

            <ul v-if="responsibilities" class="space-y-1.5" aria-label="Responsibilities">
                <li
                    v-for="r in responsibilities"
                    :key="r"
                    class="flex items-start gap-2.5 text-sm text-slate-400"
                >
                    <span class="mt-1.5 w-1 h-1 rounded-full bg-blue-600 flex-shrink-0" aria-hidden="true" />
                    {{ r }}
                </li>
            </ul>

            <!-- Tags -->
            <div v-if="tags" class="flex flex-wrap gap-1.5 mt-4">
                <span
                    v-for="tag in tags"
                    :key="tag"
                    class="px-2 py-0.5 text-xs font-medium border border-[#1e2a3d] text-slate-500 rounded-sm"
                >
                    {{ tag }}
                </span>
            </div>
        </div>
    </article>
</template>

<script setup>
defineProps({
    position:         { type: String, required: true },
    organization:     { type: String, required: true },
    period:           { type: String, required: true },
    responsibilities: { type: Array,  default: () => [] },
    tags:             { type: Array,  default: () => [] },
});
</script>


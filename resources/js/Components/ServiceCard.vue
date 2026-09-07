<template>
    <article
        class="group p-7 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm transition-all duration-300 hover:border-blue-700/50 hover:bg-[#111f38]/60 cursor-default"
        :aria-label="title + ' capabilities'"
    >
        <!-- Icon + number -->
        <div class="flex items-start justify-between mb-6">
            <div
                class="w-12 h-12 rounded-sm flex items-center justify-center transition-colors duration-300"
                :class="iconBg"
                aria-hidden="true"
            >
                <component :is="icon" class="w-6 h-6" :class="iconColor" />
            </div>
            <span class="text-5xl font-black text-[#1e2a3d] group-hover:text-[#162847] transition-colors select-none" aria-hidden="true">
                {{ String(index + 1).padStart(2, '0') }}
            </span>
        </div>

        <!-- Title -->
        <h3 class="text-base font-bold text-white tracking-wide mb-3">{{ title }}</h3>

        <!-- Description -->
        <p class="text-sm text-slate-400 leading-relaxed mb-6">{{ description }}</p>

        <!-- Tags -->
        <ul class="flex flex-wrap gap-2" aria-label="Skills in this category">
            <li
                v-for="tag in tags"
                :key="tag"
                class="px-2.5 py-1 text-xs font-medium bg-[#162847]/80 border border-blue-900/40 text-blue-300 rounded-sm"
            >
                {{ tag }}
            </li>
        </ul>
    </article>
</template>

<script setup>
defineProps({
    title:       { type: String,  required: true },
    description: { type: String,  required: true },
    tags:        { type: Array,   required: true },
    icon:        { type: Object,  required: true },
    iconBg:      { type: String,  default: 'bg-blue-900/30' },
    iconColor:   { type: String,  default: 'text-blue-400' },
    index:       { type: Number,  default: 0 },
});
</script>


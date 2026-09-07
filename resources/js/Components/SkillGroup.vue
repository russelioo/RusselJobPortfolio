<template>
    <div>
        <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-5">{{ title }}</h3>
        <ul class="flex flex-wrap gap-2.5" :aria-label="title + ' technologies'">
            <li
                v-for="skill in skills"
                :key="skill"
                class="px-3 py-1.5 text-xs font-semibold border border-[#1e2a3d] text-slate-300 bg-[#0d1627]/80 rounded-sm hover:border-blue-700/60 hover:text-blue-300 transition-all duration-200 cursor-default"
            >
                {{ skill }}
            </li>
        </ul>
    </div>
</template>

<script setup>
defineProps({
    title:  { type: String, required: true },
    skills: { type: Array,  required: true },
});
</script>


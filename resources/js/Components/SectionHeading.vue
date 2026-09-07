<template>
    <div class="mb-16">
        <p v-if="eyebrow" class="text-xs font-bold tracking-[0.25em] uppercase text-blue-400 mb-4">
            {{ eyebrow }}
        </p>
        <h2 class="text-3xl lg:text-4xl xl:text-5xl font-black text-white leading-tight mb-5">
            <slot />
        </h2>
        <div class="flex items-center gap-4">
            <div class="w-12 h-px bg-blue-600" aria-hidden="true" />
            <p v-if="subtitle" class="text-slate-400 text-sm lg:text-base max-w-xl">
                {{ subtitle }}
            </p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    eyebrow: { type: String, default: '' },
    subtitle: { type: String, default: '' },
});
</script>


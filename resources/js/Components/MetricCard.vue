<template>
    <div
        ref="cardRef"
        class="flex flex-col items-center justify-center p-8 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm text-center hover:border-blue-700/50 transition-all duration-300"
        :aria-label="label + ': ' + value"
    >
        <div class="text-4xl lg:text-5xl font-black text-white mb-2 tabular-nums" aria-live="polite">
            {{ prefix }}{{ displayValue }}{{ suffix }}
        </div>
        <div class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500">{{ label }}</div>
        <div v-if="sublabel" class="text-xs text-slate-600 mt-1">{{ sublabel }}</div>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
    value:    { type: String, required: true },
    label:    { type: String, required: true },
    sublabel: { type: String, default: '' },
    prefix:   { type: String, default: '' },
    suffix:   { type: String, default: '' },
});

const cardRef = ref(null);
const displayValue = ref('0');

function animateValue() {
    // Only animate pure numeric values
    const numericMatch = props.value.match(/^([\d,]+)/);
    if (!numericMatch) {
        displayValue.value = props.value;
        return;
    }

    const end = parseInt(numericMatch[1].replace(/,/g, ''), 10);
    const duration = 1800;
    const start = performance.now();

    function step(now) {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
        const current = Math.round(eased * end);
        displayValue.value = current.toLocaleString() + (props.value.includes('+') ? '+' : '');
        if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
}

let observer;
onMounted(() => {
    displayValue.value = '0';
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReduced) {
        displayValue.value = props.value;
        return;
    }

    observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting) {
                animateValue();
                observer.disconnect();
            }
        },
        { threshold: 0.4 }
    );
    if (cardRef.value) observer.observe(cardRef.value);
});

onUnmounted(() => { observer?.disconnect(); });
</script>


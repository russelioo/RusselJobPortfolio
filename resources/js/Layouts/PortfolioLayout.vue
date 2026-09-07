<template>
    <div class="min-h-screen bg-[#070d1a] text-white">
        <Navbar />
        <main>
            <slot />
        </main>
        <Footer />
        <!-- Scroll to top -->
        <button
            v-show="showScrollTop"
            @click="scrollToTop"
            aria-label="Scroll to top"
            class="fixed bottom-8 right-8 z-50 w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 border border-blue-500/40 text-white shadow-lg transition-all duration-300 hover:bg-blue-500 hover:scale-110 focus-visible:ring-2 focus-visible:ring-blue-400"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';

const showScrollTop = ref(false);

function handleScroll() {
    showScrollTop.value = window.scrollY > 400;
}

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

onMounted(() => window.addEventListener('scroll', handleScroll, { passive: true }));
onUnmounted(() => window.removeEventListener('scroll', handleScroll));
</script>


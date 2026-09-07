<template>
    <section
        id="services"
        class="py-24 lg:py-32 bg-[#070d1a] relative"
        aria-label="What I Do section"
    >
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <SectionHeading
                    eyebrow="What I Do"
                    subtitle="A multidisciplinary profile built across four major domains."
                >
                    Technology Meets
                    <span class="gradient-text">Management.</span>
                </SectionHeading>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <div v-for="(service, i) in services" :key="service.title" class="reveal" :style="`transition-delay: ${i * 80}ms`">
                    <ServiceCard v-bind="service" :index="i" />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { h } from 'vue';
import SectionHeading from '@/Components/SectionHeading.vue';
import ServiceCard from '@/Components/ServiceCard.vue';

// SVG icon components inline (no external icon lib needed)
const CodeIcon = {
    render: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24', 'aria-hidden': 'true' }, [
        h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4' }),
    ]),
};
const ChartIcon = {
    render: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24', 'aria-hidden': 'true' }, [
        h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z' }),
    ]),
};
const MegaphoneIcon = {
    render: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24', 'aria-hidden': 'true' }, [
        h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z' }),
    ]),
};
const PaletteIcon = {
    render: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24', 'aria-hidden': 'true' }, [
        h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01' }),
    ]),
};

const services = [
    {
        title: 'Web Development',
        description: 'Full-stack web applications using modern Laravel, Vue 3, and Inertia.js. Clean, performant, and maintainable front-end experiences.',
        icon: CodeIcon,
        iconBg: 'bg-blue-900/40',
        iconColor: 'text-blue-400',
        tags: ['Laravel', 'PHP', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'MySQL', 'Vite', 'Git'],
    },
    {
        title: 'Project Management & IT',
        description: 'From requirements gathering to documentation and delivery — structured project coordination with technical awareness.',
        icon: ChartIcon,
        iconBg: 'bg-indigo-900/40',
        iconColor: 'text-indigo-400',
        tags: ['Project Management', 'Requirements Analysis', 'System Planning', 'Documentation', 'Technical Support', 'IT Systems'],
    },
    {
        title: 'Digital Communications',
        description: 'Strategic social media management, content planning, community engagement, and digital campaign execution across multiple platforms.',
        icon: MegaphoneIcon,
        iconBg: 'bg-sky-900/40',
        iconColor: 'text-sky-400',
        tags: ['Social Media Management', 'Content Strategy', 'Facebook', 'Instagram', 'TikTok', 'YouTube', 'Digital Campaigns'],
    },
    {
        title: 'Creative & Multimedia',
        description: 'Visual communication through graphic design, video editing, and livestream production for events, campaigns, and brand content.',
        icon: PaletteIcon,
        iconBg: 'bg-violet-900/40',
        iconColor: 'text-violet-400',
        tags: ['Graphic Design', 'Video Editing', 'Livestream Production', 'Promotional Materials', 'Event Content'],
    },
];
</script>


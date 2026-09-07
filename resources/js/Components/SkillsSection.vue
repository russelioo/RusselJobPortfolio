<template>
    <section
        id="skills"
        class="py-24 lg:py-32 bg-[#0a1020] relative"
        aria-label="Skills and Technologies section"
    >
        <!-- Top border accent -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-700/40 to-transparent" aria-hidden="true" />
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-700/20 to-transparent" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <SectionHeading
                    eyebrow="Skills & Technologies"
                    subtitle="Tools and technologies I work with professionally."
                >
                    My Tech Stack.
                </SectionHeading>
            </div>

            <!-- Skill groups grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-16">
                <div v-for="(group, i) in skillGroups" :key="group.title" class="reveal" :style="`transition-delay: ${i * 60}ms`">
                    <SkillGroup :title="group.title" :skills="group.skills" />
                </div>
            </div>

            <!-- Note about skill levels -->
            <div class="reveal">
                <div class="inline-flex items-center gap-3 px-5 py-3 border border-[#1e2a3d] rounded-sm bg-[#0d1627]/40">
                    <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-xs text-slate-500">
                        Skills are listed as professionally practiced. Percentage meters are omitted intentionally — they oversimplify real proficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import SectionHeading from '@/Components/SectionHeading.vue';
import SkillGroup from '@/Components/SkillGroup.vue';

const skillGroups = [
    {
        title: 'Frontend',
        skills: ['Vue 3', 'Inertia.js', 'Tailwind CSS', 'HTML5', 'CSS3', 'JavaScript', 'Vite'],
    },
    {
        title: 'Backend',
        skills: ['Laravel', 'PHP', 'RESTful APIs'],
    },
    {
        title: 'Database',
        skills: ['MySQL', 'MariaDB'],
    },
    {
        title: 'Dev Tools',
        skills: ['Git', 'GitHub', 'VS Code', 'Figma', 'Canva'],
    },
    {
        title: 'Digital & Social',
        skills: ['Facebook', 'Instagram', 'TikTok', 'YouTube', 'Social Media Analytics', 'Content Strategy'],
    },
    {
        title: 'Creative',
        skills: ['Graphic Design', 'Video Editing', 'Livestreaming', 'Canva', 'Promotional Materials'],
    },
];
</script>


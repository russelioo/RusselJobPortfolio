<template>
    <section id="about" class="py-24 lg:py-32 relative" aria-label="About section">
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-96 h-96 bg-blue-900/08 rounded-full blur-3xl" />
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                <!-- Visual -->
                <div class="reveal order-2 lg:order-1">
                    <div class="relative max-w-sm mx-auto">
                        <!-- Profile photo -->
                        <div class="w-full aspect-[4/5] bg-[#0d1627] border border-[#1e2a3d] rounded-sm overflow-hidden relative group shadow-2xl shadow-black/80" aria-label="Profile photo of John Russel N. Soreda">
                            <img
                                src="/images/profile.jpg"
                                alt="John Russel N. Soreda — BS Information Technology, Bicol University"
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="eager"
                            />
                            <!-- Subtle dark gradient at bottom for smooth contrast with card -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#070d1a]/50 via-transparent to-transparent pointer-events-none" aria-hidden="true" />
                            <div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-blue-500 pointer-events-none z-10" aria-hidden="true" />
                            <div class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-blue-500 pointer-events-none z-10" aria-hidden="true" />
                        </div>
                        <!-- Floating badge -->
                        <div class="absolute -bottom-5 -right-5 bg-[#0d1627] border border-[#1e2a3d] rounded-sm px-5 py-4 shadow-xl hidden lg:block">
                            <p class="text-xs text-slate-500 tracking-widest uppercase mb-1">Education</p>
                            <p class="text-sm font-bold text-white">BS Information Technology</p>
                            <p class="text-xs text-blue-400 mt-0.5">Bicol University</p>
                        </div>
                    </div>
                </div>

                <!-- Text -->
                <div class="reveal order-1 lg:order-2">
                    <SectionHeading eyebrow="About" subtitle="Technology · Communication · Execution">
                        More Than a Programmer.
                    </SectionHeading>

                    <div class="space-y-5 text-slate-400 text-base leading-relaxed mb-10">
                        <p>
                            I am <strong class="text-white">John Russel N. Soreda</strong> — a multidisciplinary IT and digital communications professional who works across social media management, content production, digital marketing, campaign promotion, multimedia, livestreaming, project coordination, web development, and technical support.
                        </p>
                        <p>
                            With a <strong class="text-white">Bachelor of Science in Information Technology</strong> from <strong class="text-white">Bicol University</strong>, I bridge the gap between building technology and communicating through it — contributing both to what the audience <em>sees</em> and to the workflow and technology <em>behind</em> the content.
                        </p>
                        <p>
                            My strongest positioning is the ability to <strong class="text-white">execute</strong>: to go from campaign concept to published content, from project requirement to working system, and from livestream setup to live audience.
                        </p>
                    </div>

                    <!-- Three pillars -->
                    <div class="grid grid-cols-3 gap-3 mb-8">
                        <div v-for="p in pillars" :key="p.label" class="p-4 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm text-center hover:border-blue-800/60 transition-colors">
                            <div class="text-lg mb-1" aria-hidden="true">{{ p.icon }}</div>
                            <div class="text-xs font-bold text-white tracking-wide">{{ p.label }}</div>
                            <div class="text-xs text-slate-500 mt-1">{{ p.sub }}</div>
                        </div>
                    </div>

                    <!-- Capability chips -->
                    <div class="flex flex-wrap gap-2">
                        <span v-for="cap in capabilities" :key="cap"
                            class="px-3 py-1 text-xs font-medium border border-[#1e2a3d] text-slate-400 bg-[#0d1627]/60 rounded-sm hover:border-blue-800/60 hover:text-blue-300 transition-colors">
                            {{ cap }}
                        </span>
                    </div>

                    <!-- Mobile education badge -->
                    <div class="mt-8 lg:hidden p-4 bg-[#0d1627] border border-[#1e2a3d] rounded-sm">
                        <p class="text-xs text-slate-500 uppercase tracking-widest mb-1">Education</p>
                        <p class="text-sm font-bold text-white">BS Information Technology</p>
                        <p class="text-xs text-blue-400 mt-0.5">Bicol University</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import SectionHeading from '@/Components/SectionHeading.vue';

const pillars = [
    { icon: '⚙️', label: 'Technical',      sub: 'Build & Support' },
    { icon: '📣', label: 'Communication',  sub: 'Reach & Engage' },
    { icon: '🎯', label: 'Execution',      sub: 'Deliver & Measure' },
];

const capabilities = [
    'Social Media Management', 'Digital Communications', 'Campaign Promotion',
    'Content Creation', 'Graphic Design', 'Video Editing', 'Livestream Production',
    'Web Development', 'Project Management', 'IT Support', 'Community Management',
    'E-Commerce', 'Multimedia Production',
];
</script>

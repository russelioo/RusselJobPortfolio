<template>
    <section id="why" class="py-24 lg:py-32 bg-[#070d1a] relative overflow-hidden" aria-label="Why Work With Me section">
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-blue-900/10 blur-3xl rounded-full" />
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="reveal text-center max-w-3xl mx-auto mb-16">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-blue-400 mb-6">Why Work With Me</p>
                <h2 class="text-3xl lg:text-5xl font-black text-white leading-tight mb-6">
                    I Bring the Full<br />
                    <span class="gradient-text">Creative–Technical Stack.</span>
                </h2>
                <p class="text-slate-400 text-base leading-relaxed">
                    I bring together social media execution, multimedia production, livestream operations, community engagement, digital marketing, and IT knowledge — contributing both to what the audience sees and the workflow and technology behind the content.
                </p>
            </div>

            <!-- Three columns -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-16">
                <div v-for="(col, i) in columns" :key="col.title" class="reveal" :style="`transition-delay:${i*80}ms`">
                    <div class="p-7 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/50 transition-all duration-300 h-full text-center">
                        <div class="text-3xl mb-4" aria-hidden="true">{{ col.emoji }}</div>
                        <h3 class="text-base font-black text-white tracking-wide mb-5">{{ col.title }}</h3>
                        <ul class="space-y-2">
                            <li v-for="item in col.items" :key="item" class="text-sm text-slate-400">{{ item }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- What / Behind statement -->
            <div class="reveal">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 max-w-3xl mx-auto">
                    <div class="p-6 border border-blue-700/30 rounded-sm bg-blue-900/10 text-center">
                        <div class="text-xs font-bold tracking-widest uppercase text-blue-400 mb-3">What the Audience Sees</div>
                        <p class="text-sm text-slate-300">Compelling graphics, videos, campaigns, stories, and livestreams that reach and engage communities.</p>
                    </div>
                    <div class="p-6 border border-[#1e2a3d] rounded-sm bg-[#0d1627]/40 text-center">
                        <div class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">The Workflow Behind the Content</div>
                        <p class="text-sm text-slate-400">Systems, tools, documentation, technical support, and project coordination that keep everything running.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const columns = [
    {
        emoji: '🎨',
        title: 'Creative',
        items: ['Graphics', 'Video', 'Copy', 'Photography', 'Branding', 'Poster Design', 'Reels'],
    },
    {
        emoji: '📣',
        title: 'Communication',
        items: ['Social Media', 'Community', 'Campaigns', 'Content Strategy', 'Audience Growth', 'Analytics'],
    },
    {
        emoji: '⚙️',
        title: 'Technical',
        items: ['OBS Studio', 'Camera Ops', 'Livestream', 'Web Development', 'IT Support', 'Project Coordination'],
    },
];
</script>

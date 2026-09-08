<template>
    <section
        id="projects"
        class="py-24 lg:py-32 bg-[#070d1a] relative"
        aria-label="Featured Projects section"
    >
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <SectionHeading
                    eyebrow="Featured Projects"
                    subtitle="A selection of projects spanning web development, project management, and digital communications."
                >
                    Selected Work.
                </SectionHeading>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div v-for="(project, i) in projects" :key="project.title" class="reveal" :style="`transition-delay: ${i * 80}ms`">
                    <ProjectCard v-bind="project" @view-case-study="openModal(project)" />
                </div>
            </div>
        </div>

        <!-- Case Study Modal -->
        <Teleport to="body">
            <transition name="modal">
                <div
                    v-if="activeProject"
                    class="fixed inset-0 z-[100] flex items-end sm:items-center justify-center p-4"
                    @click.self="closeModal"
                    role="dialog"
                    :aria-label="activeProject.title + ' case study'"
                    aria-modal="true"
                >
                    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="closeModal" aria-hidden="true" />

                    <div class="relative w-full max-w-2xl max-h-[90vh] overflow-y-auto bg-[#0d1627] border border-[#1e2a3d] rounded-sm shadow-2xl">
                        <!-- Header -->
                        <div class="sticky top-0 flex items-start justify-between p-6 border-b border-[#1e2a3d] bg-[#0d1627]">
                            <div>
                                <span class="text-xs font-bold tracking-widest uppercase text-blue-400">{{ activeProject.category }}</span>
                                <h2 class="text-xl font-black text-white mt-1">{{ activeProject.title }}</h2>
                            </div>
                            <button
                                @click="closeModal"
                                class="p-2 text-slate-500 hover:text-white transition-colors rounded-sm focus-visible:ring-2 focus-visible:ring-blue-400"
                                aria-label="Close case study"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Body -->
                        <div class="p-6 space-y-6">
                            <div>
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Overview</h3>
                                <p class="text-sm text-slate-300 leading-relaxed">{{ activeProject.fullDescription || activeProject.description }}</p>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Role</h3>
                                    <p class="text-sm text-slate-300">{{ activeProject.role }}</p>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Organization</h3>
                                    <p class="text-sm text-slate-300">{{ activeProject.organization || 'Project details available upon request.' }}</p>
                                </div>
                            </div>

                            <div v-if="activeProject.methodology">
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Methodology</h3>
                                <p class="text-sm text-slate-300">{{ activeProject.methodology }}</p>
                            </div>

                            <div v-if="activeProject.metrics && activeProject.metrics.length">
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Evaluation Results</h3>
                                <div class="grid grid-cols-2 gap-3">
                                    <div
                                        v-for="m in activeProject.metrics"
                                        :key="m.label"
                                        class="p-3 bg-[#070d1a]/60 border border-[#1e2a3d] rounded-sm"
                                    >
                                        <div class="text-base font-black text-blue-300">{{ m.value }}</div>
                                        <div class="text-xs text-slate-500 mt-0.5">{{ m.label }}</div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Technologies</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        v-for="tech in activeProject.technologies"
                                        :key="tech"
                                        class="px-2.5 py-1 text-xs font-medium bg-[#162847]/80 border border-blue-900/40 text-blue-300 rounded-sm"
                                    >{{ tech }}</span>
                                </div>
                            </div>

                            <div v-if="activeProject.highlights">
                                <h3 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Highlights</h3>
                                <ul class="space-y-2">
                                    <li v-for="h in activeProject.highlights" :key="h" class="flex items-start gap-2 text-sm text-slate-300">
                                        <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0" aria-hidden="true" />
                                        {{ h }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </Teleport>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import SectionHeading from '@/Components/SectionHeading.vue';
import ProjectCard from '@/Components/ProjectCard.vue';

const activeProject = ref(null);

function openModal(project) { activeProject.value = project; document.body.style.overflow = 'hidden'; }
function closeModal() { activeProject.value = null; document.body.style.overflow = ''; }

const projects = [
    {
        title: 'BU-IROQuest',
        category: 'Web Application',
        organization: 'Bicol University — International Relations Office',
        role: 'Project Manager · Full-Stack Developer',
        description: 'A web application developed for the Bicol University International Relations Office to support international relations information, document access, and digital workflows — with integration to the Arquivo Document Repository.',
        fullDescription: 'BU-IROQuest is a comprehensive web application developed for the Bicol University International Relations Office (IRO). The system supports international relations information management, document access, and digital workflows. It integrates with the Arquivo Document Repository to streamline document management processes for the IRO.',
        technologies: ['Laravel', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'MySQL'],
        methodology: 'Rapid Application Development (RAD)',
        metrics: [
            { value: '4.76 / 5', label: 'Functional Suitability' },
            { value: '4.84 / 5', label: 'Security' },
            { value: '4.80 / 5', label: 'Reliability' },
            { value: '4.88 / 5', label: 'Usability' },
        ],
        highlights: [
            'Served as Project Manager and Full-Stack Developer — led planning, coordination, and architecture.',
            'Full-stack development using Laravel, Vue 3, Inertia.js, and Tailwind CSS.',
            'Integrated with Arquivo Document Repository for document management.',
            'Achieved high ISO-aligned quality evaluation scores across all criteria.',
        ],
    },
    {
        title: 'BU RDMD System',
        category: 'Web Application',
        organization: 'Bicol University',
        role: 'Full-Stack Developer',
        description: 'A Laravel-based research development and management system designed to support research-related workflows and information management within the university.',
        fullDescription: 'A comprehensive research development and management system built for Bicol University. The system is designed to support research-related workflows, tracking, and information management processes — providing a structured digital environment for research administration.',
        technologies: ['Laravel', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'PHP', 'MySQL'],
        highlights: [
            'Built with the Laravel + Vue 3 + Inertia.js stack.',
            'Full-stack development and IT system support role.',
            'Project details available upon request.',
        ],
    },
    {
        title: 'Bitoon Nin Paglaom',
        category: 'Digital Campaign',
        organization: 'Our Lady of the Pillar Shrine',
        role: 'Digital Communications · Campaign Support',
        description: 'A digital fundraising and communications campaign associated with Our Lady of the Pillar Shrine. The campaign raised ₱60,800 in total project fund/contributions through digital outreach, promotional graphics, donor engagement, and project documentation.',
        fullDescription: 'Bitoon Nin Paglaom is a digital fundraising and community campaign associated with Our Lady of the Pillar Shrine. The campaign was executed through digital communications, promotional graphic design, donor engagement strategies, and campaign documentation. Total contributions reached ₱60,800, reflecting the effectiveness of the digital outreach strategy.',
        technologies: ['Social Media', 'Graphic Design', 'Digital Campaigns', 'Content Creation', 'Community Engagement'],
        metrics: [
            { value: '₱60,800', label: 'Total Project Fund' },
        ],
        highlights: [
            'Digital communications and outreach support for a community fundraising campaign.',
            'Designed promotional materials and campaign graphics.',
            'Coordinated donor engagement through social media.',
            'Managed campaign documentation and reporting.',
        ],
    },
    {
        title: 'Digital Communications — OLP Shrine',
        category: 'Social Media',
        organization: 'Our Lady of the Pillar Shrine · LARPI',
        role: 'Social Media Manager · Digital Communications',
        description: 'Comprehensive digital communications portfolio covering social media management, content creation, graphic design, event promotion, and community engagement across multiple parish and organizational platforms.',
        fullDescription: 'An ongoing digital communications portfolio covering the social media presence of Our Lady of the Pillar Shrine and associated organizations. Responsibilities include content strategy, social media management, graphic design for events and campaigns, livestream production, and community engagement.',
        technologies: ['Facebook', 'Instagram', 'TikTok', 'YouTube', 'Canva', 'Video Editing', 'Livestreaming'],
        metrics: [
            { value: '10K+', label: 'Del Pilar Parish Followers' },
            { value: '17K+', label: 'LARPI Followers' },
        ],
        highlights: [
            'Manages social media for Del Pilar Parish (10K+ followers) and LARPI (17K+ followers).',
            'Content creation, graphic design, event promotion, and livestreaming.',
            'Community engagement and digital campaign coordination.',
            'Established as Social Media Manager since 2024.',
        ],
    },
];
</script>

<style scoped>
.modal-enter-active, .modal-leave-active { transition: opacity 0.3s ease; }
.modal-enter-from, .modal-leave-to { opacity: 0; }
</style>


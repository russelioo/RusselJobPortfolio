<template>
    <section id="tech" class="py-24 lg:py-32 bg-[#0a1020] relative" aria-label="Technology Projects section">
        <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-blue-700/30 to-transparent" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <SectionHeading eyebrow="Technology Projects"
                    subtitle="Web application development work using Laravel, Vue 3, Inertia.js, and Tailwind CSS.">
                    Built with Code.
                </SectionHeading>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-20">
                <!-- BU-IROQuest -->
                <div class="reveal">
                    <div class="p-7 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/50 transition-all h-full flex flex-col">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <span class="text-xs font-bold tracking-widest uppercase text-blue-400">Web Application</span>
                                <h3 class="text-xl font-black text-white mt-1">BU-IROQuest</h3>
                                <p class="text-sm text-slate-400 mt-0.5">Bicol University — International Relations Office</p>
                            </div>
                            <span class="px-2.5 py-1 text-[10px] font-bold tracking-wider uppercase bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 rounded-sm flex items-center gap-1.5 shrink-0">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                                Live System
                            </span>
                        </div>

                        <!-- Live Interface Preview -->
                        <div class="relative aspect-[16/8] rounded-sm overflow-hidden mb-5 border border-[#1e2a3d] bg-black group">
                            <img
                                :src="iroquestImg"
                                alt="BU-IROQuest Live Portal"
                                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0d1627] via-transparent to-black/30 pointer-events-none" />
                            <a
                                href="https://www.bu-iroquest.com/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="absolute bottom-3 right-3 px-2.5 py-1 bg-emerald-950/90 hover:bg-emerald-900 text-emerald-300 border border-emerald-500/50 rounded-sm text-[10px] font-bold uppercase tracking-wider flex items-center gap-1.5 backdrop-blur-sm transition-colors shadow-lg"
                                aria-label="Visit BU-IROQuest live website"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                                Visit Live Website ↗
                            </a>
                        </div>

                        <p class="text-sm text-slate-400 leading-relaxed mb-6">
                            A comprehensive web application deployed live at <a href="https://www.bu-iroquest.com/" target="_blank" rel="noopener noreferrer" class="text-blue-400 hover:underline font-semibold">bu-iroquest.com</a> for the Bicol University International Relations Office to support information management, foreign partner linkages, and student mobility document access — integrated with the Arquivo Document Repository.
                        </p>
                        <!-- Eval scores -->
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div v-for="m in iroMetrics" :key="m.label" class="p-3 bg-[#070d1a]/60 border border-[#1e2a3d] rounded-sm">
                                <div class="text-base font-black text-blue-300">{{ m.value }}</div>
                                <div class="text-xs text-slate-500 mt-0.5">{{ m.label }}</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span v-for="t in iroStack" :key="t" class="px-2 py-0.5 text-xs font-medium bg-[#162847]/80 border border-blue-900/30 text-blue-300 rounded-sm">{{ t }}</span>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-4 text-xs text-slate-500 mt-auto pt-4 border-t border-[#1e2a3d]/60">
                            <div>
                                <div><strong class="text-slate-400">Role:</strong> Project Manager · Front-End Programmer</div>
                                <div class="mt-0.5"><strong class="text-slate-400">Method:</strong> Rapid Application Development (RAD)</div>
                            </div>
                            <a
                                href="https://www.bu-iroquest.com/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1 text-xs font-bold uppercase tracking-wider text-emerald-400 hover:text-emerald-300"
                            >
                                bu-iroquest.com ↗
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BU RDMD -->
                <div class="reveal">
                    <div class="p-7 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/50 transition-all h-full flex flex-col">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <span class="text-xs font-bold tracking-widest uppercase text-blue-400">Web Application</span>
                                <h3 class="text-xl font-black text-white mt-1">BU RDMD System (RDESys)</h3>
                                <p class="text-sm text-slate-400 mt-0.5">Bicol University — Research Development & Management Division</p>
                            </div>
                            <span class="px-2.5 py-1 text-[10px] font-bold tracking-wider uppercase bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 rounded-sm flex items-center gap-1.5 shrink-0">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                                Live System
                            </span>
                        </div>

                        <!-- Live Interface Preview -->
                        <div class="relative aspect-[16/8] rounded-sm overflow-hidden mb-5 border border-[#1e2a3d] bg-black group">
                            <img
                                :src="rdmdImg"
                                alt="RDESys BU RDMD Live Portal"
                                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0d1627] via-transparent to-black/30 pointer-events-none" />
                            <a
                                href="https://submission.rdesys.bicol-u.edu.ph/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="absolute bottom-3 right-3 px-2.5 py-1 bg-emerald-950/90 hover:bg-emerald-900 text-emerald-300 border border-emerald-500/50 rounded-sm text-[10px] font-bold uppercase tracking-wider flex items-center gap-1.5 backdrop-blur-sm transition-colors shadow-lg"
                                aria-label="Visit BU RDMD RDESys live website"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                                Visit Live Website ↗
                            </a>
                        </div>

                        <p class="text-sm text-slate-400 leading-relaxed mb-6">
                            A live production research and databank management system deployed at <a href="https://submission.rdesys.bicol-u.edu.ph/" target="_blank" rel="noopener noreferrer" class="text-blue-400 hover:underline font-semibold">submission.rdesys.bicol-u.edu.ph</a> for Bicol University to centralize research proposals (Promis+), report management (Inspire), and university-wide RDE operations.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span v-for="t in rdmdStack" :key="t" class="px-2 py-0.5 text-xs font-medium bg-[#162847]/80 border border-blue-900/30 text-blue-300 rounded-sm">{{ t }}</span>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-4 text-xs text-slate-500 mt-auto pt-4 border-t border-[#1e2a3d]/60">
                            <div>
                                <strong class="text-slate-400">Role:</strong> System Development · Front-End Development
                            </div>
                            <a
                                href="https://submission.rdesys.bicol-u.edu.ph/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1 text-xs font-bold uppercase tracking-wider text-emerald-400 hover:text-emerald-300"
                            >
                                rdesys.bicol-u.edu.ph ↗
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pilar Shrine Portal (Ongoing Implementation) -->
                <div class="reveal">
                    <div class="p-7 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-amber-600/50 transition-all h-full flex flex-col">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <span class="text-xs font-bold tracking-widest uppercase text-amber-400">Web Portal · Ongoing</span>
                                <h3 class="text-xl font-black text-white mt-1">Pilar Shrine Portal</h3>
                                <p class="text-sm text-slate-400 mt-0.5">Diocesan Shrine & Parish of Our Lady of the Pillar</p>
                            </div>
                            <span class="px-2.5 py-1 text-[10px] font-bold tracking-wider uppercase bg-amber-500/10 border border-amber-500/30 text-amber-400 rounded-sm flex items-center gap-1.5 shrink-0">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping" />
                                Ongoing Staging
                            </span>
                        </div>

                        <!-- Interface Preview -->
                        <div class="relative aspect-[16/8] rounded-sm overflow-hidden mb-5 border border-[#1e2a3d] bg-black group">
                            <img
                                :src="pilarImg"
                                alt="Pilar Shrine Portal Staging"
                                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0d1627] via-transparent to-black/30 pointer-events-none" />
                            <a
                                href="https://honeydew-elephant-708751.hostingersite.com/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="absolute bottom-3 right-3 px-2.5 py-1 bg-amber-950/90 hover:bg-amber-900 text-amber-300 border border-amber-500/50 rounded-sm text-[10px] font-bold uppercase tracking-wider flex items-center gap-1.5 backdrop-blur-sm transition-colors shadow-lg"
                                aria-label="Preview Pilar Shrine staging website"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping" />
                                Staging Site ↗
                            </a>
                        </div>

                        <p class="text-sm text-slate-400 leading-relaxed mb-6">
                            An ongoing web portal implementation deployed in staging at <a href="https://honeydew-elephant-708751.hostingersite.com/" target="_blank" rel="noopener noreferrer" class="text-amber-400 hover:underline font-semibold">honeydew-elephant-708751.hostingersite.com</a> for the Diocesan Shrine & Parish of Our Lady of the Pillar (Sorsogon), featuring automated broadcast checking (/api/livestream-status), mass schedules, and liturgical guides.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span v-for="t in pilarStack" :key="t" class="px-2 py-0.5 text-xs font-medium bg-[#162847]/80 border border-blue-900/30 text-blue-300 rounded-sm">{{ t }}</span>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-4 text-xs text-slate-500 mt-auto pt-4 border-t border-[#1e2a3d]/60">
                            <div>
                                <strong class="text-slate-400">Role:</strong> Full-Stack Developer · Administrator
                            </div>
                            <a
                                href="https://honeydew-elephant-708751.hostingersite.com/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1 text-xs font-bold uppercase tracking-wider text-amber-400 hover:text-amber-300"
                            >
                                Staging Site ↗
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools & Software -->
            <div class="reveal mb-6">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-8">Tools & Software</h3>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 mb-16">
                <div v-for="(group, i) in toolGroups" :key="group.category" class="reveal" :style="`transition-delay:${i*50}ms`">
                    <div class="p-4 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/40 transition-colors h-full">
                        <div class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">{{ group.category }}</div>
                        <ul class="space-y-1.5">
                            <li v-for="tool in group.tools" :key="tool" class="text-xs text-slate-400">{{ tool }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Core skills -->
            <div class="reveal">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-5">Core Skills</h3>
                <div class="flex flex-wrap gap-2">
                    <span v-for="skill in coreSkills" :key="skill"
                        class="px-3 py-1.5 text-xs font-semibold border border-[#1e2a3d] text-slate-300 bg-[#0d1627]/80 rounded-sm hover:border-blue-700/60 hover:text-blue-300 transition-all duration-200">
                        {{ skill }}
                    </span>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { useAsset } from '@/composables/useAsset.js';
import SectionHeading from '@/Components/SectionHeading.vue';

const iroquestImg = useAsset('/images/portfolio/software/bu-iroquest.jpg');
const rdmdImg = useAsset('/images/portfolio/software/bu-rdmd.jpg');
const pilarImg = useAsset('/images/portfolio/software/pilar-shrine.jpg');

const iroMetrics = [
    { value: '4.76 / 5', label: 'Functional Suitability' },
    { value: '4.84 / 5', label: 'Security' },
    { value: '4.80 / 5', label: 'Reliability' },
    { value: '4.88 / 5', label: 'Usability' },
];
const iroStack   = ['Laravel', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'MySQL'];
const rdmdStack  = ['Laravel', 'Inertia.js', 'Vue 3', 'Tailwind CSS', 'PHP', 'MySQL'];
const pilarStack = ['Laravel 13', 'Vue 3', 'Tailwind CSS v4', 'Vite', 'Livestream API'];

const toolGroups = [
    { category: 'Design',       tools: ['Canva', 'Adobe Photoshop', 'Adobe Illustrator'] },
    { category: 'Video',        tools: ['Adobe Premiere Pro', 'CapCut', 'DaVinci Resolve'] },
    { category: 'Social',       tools: ['Meta Business Suite', 'TikTok Studio', 'YouTube Studio'] },
    { category: 'Production',   tools: ['OBS Studio', 'Camera ops', 'Livestream setup'] },
    { category: 'Productivity', tools: ['Microsoft Office', 'Google Workspace', 'Google Meet', 'Zoom'] },
    { category: 'Technical',    tools: ['Hardware support', 'Software support', 'Network support'] },
];

const coreSkills = [
    'Social Media Strategy', 'Digital Marketing', 'Brand Management',
    'Graphic Design', 'Video Editing', 'Photography', 'Videography',
    'Content Writing', 'Copywriting', 'Community Management',
    'Livestream Production', 'Analytics', 'Reporting',
    'Time Management', 'Project Coordination',
];
</script>

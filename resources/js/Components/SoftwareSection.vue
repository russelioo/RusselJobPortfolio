<template>
    <section id="software" class="py-24 lg:py-32 bg-[#070d1a] relative overflow-hidden" aria-label="Software & Development portfolio">
        <!-- Background Grid & Glows -->
        <div class="absolute inset-0 grid-overlay opacity-50 pointer-events-none" aria-hidden="true" />
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[700px] h-[500px] bg-blue-900/10 rounded-full blur-3xl pointer-events-none" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            <!-- ─── Section Header ─── -->
            <div class="reveal">
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-12">
                    <div>
                        <p class="text-xs font-bold tracking-[0.25em] uppercase text-blue-400 mb-3 flex items-center gap-2">
                            <span class="inline-block w-2 h-2 rounded-full bg-blue-500 animate-pulse" aria-hidden="true" />
                            Software & Development
                        </p>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight">
                            I Build <span class="gradient-text">Digital Systems.</span>
                        </h2>
                        <p class="text-slate-400 text-sm lg:text-base max-w-2xl mt-4 leading-relaxed">
                            From full web applications to front-end interfaces, I work across the stack to turn requirements into functional digital products.
                        </p>
                    </div>

                    <!-- GitHub CTA Button & Stats Pill -->
                    <div class="flex flex-wrap items-center gap-3 shrink-0">
                        <a
                            href="https://github.com/russelioo"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2.5 px-5 py-3 bg-[#0d1627] hover:bg-[#111f38] border border-blue-600/60 hover:border-blue-400 text-blue-300 hover:text-white text-xs font-bold tracking-widest uppercase rounded-sm transition-all duration-300 shadow-sm hover:shadow-blue-600/20 focus-visible:ring-2 focus-visible:ring-blue-400"
                            aria-label="View GitHub Profile (opens in a new tab)"
                        >
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z" />
                            </svg>
                            View GitHub
                        </a>
                    </div>
                </div>

                <!-- GitHub Stats Bar -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 p-4 bg-[#0d1627]/80 border border-[#1e2a3d] rounded-sm mb-16">
                    <div class="text-center sm:text-left sm:px-4 py-2 border-r border-[#1e2a3d]/60 last:border-none">
                        <div class="text-2xl font-black text-white">11</div>
                        <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider mt-0.5">Public Repositories</div>
                    </div>
                    <div class="text-center sm:text-left sm:px-4 py-2 sm:border-r border-[#1e2a3d]/60 last:border-none">
                        <div class="text-2xl font-black text-blue-400">2</div>
                        <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider mt-0.5">Flagship Systems</div>
                    </div>
                    <div class="text-center sm:text-left sm:px-4 py-2 border-r border-[#1e2a3d]/60 last:border-none">
                        <div class="text-2xl font-black text-white">Laravel + Vue</div>
                        <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider mt-0.5">Primary Architecture</div>
                    </div>
                    <div class="text-center sm:text-left sm:px-4 py-2">
                        <div class="text-2xl font-black text-sky-400">RAD</div>
                        <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider mt-0.5">Delivery Methodology</div>
                    </div>
                </div>
            </div>

            <!-- ─── Programming Capabilities (4 Cards) ─── -->
            <div class="reveal mb-16">
                <div class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-6 flex items-center gap-2">
                    <span class="w-6 h-px bg-blue-600" aria-hidden="true" />
                    Core Technical Capabilities
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div
                        v-for="(cap, i) in capabilities"
                        :key="cap.title"
                        class="p-6 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/50 hover:bg-[#0f1b33]/60 transition-all duration-300 flex flex-col h-full group"
                    >
                        <div class="w-10 h-10 rounded-sm bg-blue-900/30 border border-blue-800/30 flex items-center justify-center text-blue-400 mb-4 group-hover:bg-blue-800/40 transition-colors" aria-hidden="true">
                            <span class="text-xs font-mono font-bold">0{{ i + 1 }}</span>
                        </div>
                        <h3 class="text-sm font-bold text-white tracking-wide mb-3 uppercase">{{ cap.title }}</h3>
                        <ul class="space-y-1.5 mt-auto" :aria-label="cap.title + ' skills'">
                            <li v-for="item in cap.items" :key="item" class="flex items-center gap-2 text-xs text-slate-400">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500/70 shrink-0" aria-hidden="true" />
                                <span>{{ item }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ─── Verified Technology Stack Badges ─── -->
            <div class="reveal mb-16">
                <div class="p-6 bg-[#0a1020] border border-[#1e2a3d] rounded-sm">
                    <div class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-4">
                        Verified Technology Stack
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span
                            v-for="tech in techStack"
                            :key="tech.name"
                            class="px-3 py-1.5 text-xs font-semibold border border-[#1e2a3d] text-slate-300 bg-[#0d1627] rounded-sm hover:border-blue-600/70 hover:text-blue-300 transition-colors"
                        >
                            {{ tech.name }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- ─── Featured Projects Header ─── -->
            <div class="reveal mb-8">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 flex items-center gap-2">
                    <span class="w-6 h-px bg-blue-600" aria-hidden="true" />
                    Software Projects
                </h3>
            </div>

            <!-- ─── Projects Grid (2 columns on desktop) ─── -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-20">
                <div
                    v-for="(project, i) in developmentProjects"
                    :key="project.title"
                    class="reveal"
                    :style="`transition-delay: ${i * 60}ms`"
                >
                    <article
                        class="group flex flex-col bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm overflow-hidden hover:border-blue-700/50 transition-all duration-300 h-full"
                        :aria-label="project.title + ' project card'"
                    >
                        <!-- Card Header / Terminal Banner -->
                        <div class="px-6 pt-5 pb-3 border-b border-[#1e2a3d]/70 flex items-center justify-between bg-[#0a1020]/70 text-xs">
                            <div class="flex items-center gap-2 font-mono text-[11px] text-slate-400">
                                <span class="text-blue-400">$</span>
                                <span>{{ project.terminalTag }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span v-if="project.liveUrl && !project.isOngoing" class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 rounded-sm flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                                    Live
                                </span>
                                <span v-else-if="project.isOngoing" class="px-2 py-0.5 text-[10px] font-bold tracking-wider uppercase bg-amber-500/10 border border-amber-500/30 text-amber-400 rounded-sm flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping" />
                                    Ongoing
                                </span>
                                <span class="px-2.5 py-0.5 text-[10px] font-bold tracking-widest uppercase bg-blue-600/20 border border-blue-500/30 text-blue-300 rounded-sm">
                                    {{ project.category }}
                                </span>
                            </div>
                        </div>

                        <!-- Card Image Preview (if available, e.g. BU-IROQuest) -->
                        <div v-if="project.image" class="relative aspect-[21/9] sm:aspect-[16/8] bg-[#050914] overflow-hidden border-b border-[#1e2a3d]/70">
                            <img
                                :src="project.image"
                                :alt="project.title + ' Live Interface'"
                                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0d1627] via-transparent to-black/20 pointer-events-none" />
                            <a
                                v-if="project.liveUrl && !project.isOngoing"
                                :href="project.liveUrl"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="absolute bottom-3 right-3 z-10 px-2.5 py-1 bg-emerald-950/90 hover:bg-emerald-900 text-emerald-300 border border-emerald-500/50 rounded-sm text-[10px] font-bold tracking-wider uppercase flex items-center gap-1.5 backdrop-blur-sm transition-colors shadow-lg"
                                @click.stop
                                :aria-label="'Visit Live Website for ' + project.title"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                                Visit Live Website ↗
                            </a>
                            <a
                                v-else-if="project.liveUrl && project.isOngoing"
                                :href="project.liveUrl"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="absolute bottom-3 right-3 z-10 px-2.5 py-1 bg-amber-950/90 hover:bg-amber-900 text-amber-300 border border-amber-500/50 rounded-sm text-[10px] font-bold tracking-wider uppercase flex items-center gap-1.5 backdrop-blur-sm transition-colors shadow-lg"
                                @click.stop
                                :aria-label="'Preview Staging Site for ' + project.title"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping" />
                                Preview Staging Site ↗
                            </a>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 flex flex-col flex-1">
                            <!-- Title & Sub -->
                            <div class="mb-3">
                                <h4 class="text-xl font-black text-white group-hover:text-blue-300 transition-colors">
                                    {{ project.title }}
                                </h4>
                                <p v-if="project.subtitle" class="text-xs font-medium text-slate-400 mt-1">
                                    {{ project.subtitle }}
                                </p>
                            </div>

                            <!-- Description -->
                            <p class="text-sm text-slate-400 leading-relaxed mb-5 flex-1">
                                {{ project.description }}
                            </p>

                            <!-- Evaluation scores (if present, e.g., BU-IROQuest) -->
                            <div v-if="project.metrics?.length" class="grid grid-cols-2 sm:grid-cols-4 gap-2 mb-5">
                                <div
                                    v-for="m in project.metrics"
                                    :key="m.label"
                                    class="p-2.5 bg-[#070d1a] border border-[#1e2a3d] rounded-sm text-center"
                                >
                                    <div class="text-sm font-black text-blue-300">{{ m.value }}</div>
                                    <div class="text-[10px] text-slate-500 uppercase tracking-wider mt-0.5">{{ m.label }}</div>
                                </div>
                            </div>

                            <!-- Role Badge -->
                            <div class="flex items-center gap-2 text-xs text-slate-400 mb-4 font-mono">
                                <span class="text-slate-500">ROLE:</span>
                                <span class="text-slate-300 font-semibold">{{ project.role }}</span>
                            </div>

                            <!-- Tech badges -->
                            <div class="flex flex-wrap gap-1.5 mb-6">
                                <span
                                    v-for="tech in project.technologies"
                                    :key="tech"
                                    class="px-2 py-0.5 text-[11px] font-mono bg-[#162847]/70 border border-blue-900/40 text-blue-300 rounded-sm"
                                >
                                    {{ tech }}
                                </span>
                            </div>

                            <!-- Action Buttons: VIEW CASE STUDY, LIVE SITE & VIEW CODE -->
                            <div class="pt-4 border-t border-[#1e2a3d]/70 flex flex-wrap items-center justify-between gap-3 mt-auto">
                                <button
                                    @click="openModal(project)"
                                    class="inline-flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-blue-400 hover:text-white transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 rounded-sm"
                                    :aria-label="'View Case Study for ' + project.title"
                                >
                                    View Case Study
                                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </button>

                                <div class="flex items-center gap-2 sm:gap-3">
                                    <a
                                        v-if="project.liveUrl && !project.isOngoing"
                                        :href="project.liveUrl"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-emerald-600/20 hover:bg-emerald-600/30 border border-emerald-500/40 hover:border-emerald-400 text-emerald-300 hover:text-emerald-200 text-xs font-bold tracking-wider uppercase rounded-sm transition-all shadow-sm"
                                        :aria-label="'Visit Live Website for ' + project.title"
                                    >
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" />
                                        Live Site ↗
                                    </a>
                                    <a
                                        v-else-if="project.liveUrl && project.isOngoing"
                                        :href="project.liveUrl"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-500/40 hover:border-amber-400 text-amber-300 hover:text-amber-200 text-xs font-bold tracking-wider uppercase rounded-sm transition-all shadow-sm"
                                        :aria-label="'Preview Staging Site for ' + project.title"
                                    >
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping" />
                                        Staging Site ↗
                                    </a>

                                    <a
                                        v-if="project.github"
                                        :href="project.github"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-1.5 text-xs font-mono text-slate-400 hover:text-white transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 rounded-sm"
                                        :aria-label="'View Source Code for ' + project.title + ' on GitHub'"
                                    >
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z" />
                                        </svg>
                                        View Code
                                    </a>
                                    <span v-else-if="!project.liveUrl" class="text-xs font-mono text-slate-500 italic">
                                        Private / Institutional
                                    </span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- ─── Dual Statement Banner (Build vs Create Balance) ─── -->
            <div class="reveal mt-8">
                <div class="p-8 lg:p-12 border border-[#1e2a3d] bg-gradient-to-r from-[#0d1627] via-[#0a1020] to-[#0d1627] rounded-sm text-center relative overflow-hidden">
                    <div class="relative z-10 max-w-3xl mx-auto">
                        <span class="text-xs font-bold tracking-[0.3em] uppercase text-blue-400 mb-4 block">The Dual Strength</span>
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-tight tracking-tight mb-4">
                            I BUILD SYSTEMS.<br />
                            <span class="gradient-text">I CREATE DIGITAL EXPERIENCES.</span>
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed max-w-xl mx-auto">
                            Technology gives structure and power; communication gives purpose and reach. By combining both, I deliver projects that are technically sound and socially impactful.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- ─── Case Study Modal ─── -->
        <Teleport to="body">
            <transition name="modal">
                <div
                    v-if="selectedProject"
                    class="fixed inset-0 z-[100] flex items-end sm:items-center justify-center p-4"
                    @click.self="closeModal"
                    role="dialog"
                    :aria-label="selectedProject.title + ' Case Study'"
                    aria-modal="true"
                >
                    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" @click="closeModal" aria-hidden="true" />

                    <div class="relative w-full max-w-3xl max-h-[90vh] overflow-y-auto bg-[#0d1627] border border-[#1e2a3d] rounded-sm shadow-2xl">
                        <!-- Sticky Modal Header -->
                        <div class="sticky top-0 flex items-start justify-between p-6 border-b border-[#1e2a3d] bg-[#0d1627]/98 backdrop-blur-md z-10">
                            <div>
                                <span class="text-xs font-mono font-bold tracking-widest uppercase text-blue-400">{{ selectedProject.category }}</span>
                                <h3 class="text-xl sm:text-2xl font-black text-white mt-1">{{ selectedProject.title }}</h3>
                                <p v-if="selectedProject.subtitle" class="text-xs text-slate-400 mt-0.5">{{ selectedProject.subtitle }}</p>
                            </div>
                            <button
                                @click="closeModal"
                                class="p-2 text-slate-400 hover:text-white transition-colors rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 ml-4 shrink-0"
                                aria-label="Close modal"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Visual Production Preview if available -->
                        <div v-if="selectedProject.image" class="border-b border-[#1e2a3d] bg-[#070d1a] p-4 sm:p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span v-if="!selectedProject.isOngoing" class="text-xs font-mono font-bold tracking-wider text-emerald-400 uppercase flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse" />
                                    Live Production System
                                </span>
                                <span v-else class="text-xs font-mono font-bold tracking-wider text-amber-400 uppercase flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping" />
                                    Ongoing Implementation · Staging
                                </span>
                                <a
                                    v-if="selectedProject.liveUrl"
                                    :href="selectedProject.liveUrl"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-xs font-mono flex items-center gap-1 font-semibold"
                                    :class="selectedProject.isOngoing ? 'text-amber-400 hover:text-amber-300' : 'text-emerald-400 hover:text-emerald-300'"
                                >
                                    <span>{{ selectedProject.liveUrl.replace('https://', '').replace('/', '') }}</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>

                            <div class="relative rounded-sm overflow-hidden bg-black border border-[#1e2a3d] shadow-2xl">
                                <img
                                    :src="selectedProject.image"
                                    :alt="selectedProject.title + ' Live Interface'"
                                    class="w-full h-auto max-h-[440px] object-cover object-top"
                                />
                            </div>
                            <p v-if="selectedProject.imageCaption" class="text-xs text-slate-400 mt-2.5 leading-relaxed">
                                {{ selectedProject.imageCaption }}
                            </p>
                        </div>

                        <!-- Modal Content -->
                        <div class="p-6 space-y-6">
                            <!-- Metadata grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4 bg-[#0a1020] border border-[#1e2a3d] rounded-sm text-xs">
                                <div>
                                    <span class="text-slate-500 uppercase font-mono block">Role</span>
                                    <span class="text-white font-semibold">{{ selectedProject.role }}</span>
                                </div>
                                <div>
                                    <span class="text-slate-500 uppercase font-mono block">Category</span>
                                    <span class="text-white font-semibold">{{ selectedProject.category }}</span>
                                </div>
                                <div v-if="selectedProject.liveUrl">
                                    <span class="text-slate-500 uppercase font-mono block">{{ selectedProject.isOngoing ? 'Staging Web Application (Ongoing)' : 'Live Web Application' }}</span>
                                    <a :href="selectedProject.liveUrl" target="_blank" rel="noopener noreferrer" class="hover:underline break-all font-semibold flex items-center gap-1 mt-0.5" :class="selectedProject.isOngoing ? 'text-amber-400' : 'text-emerald-400'">
                                        <span>{{ selectedProject.liveUrl }}</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                </div>
                                <div v-if="selectedProject.methodology">
                                    <span class="text-slate-500 uppercase font-mono block">Methodology</span>
                                    <span class="text-blue-300 font-semibold">{{ selectedProject.methodology }}</span>
                                </div>
                                <div v-if="selectedProject.github">
                                    <span class="text-slate-500 uppercase font-mono block">Repository</span>
                                    <a :href="selectedProject.github" target="_blank" rel="noopener noreferrer" class="text-blue-400 hover:underline break-all">
                                        {{ selectedProject.github }}
                                    </a>
                                </div>
                            </div>

                            <!-- Overview -->
                            <div>
                                <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Overview</h4>
                                <p class="text-sm text-slate-300 leading-relaxed">{{ selectedProject.overview }}</p>
                            </div>

                            <!-- Objective -->
                            <div v-if="selectedProject.objective">
                                <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Objective</h4>
                                <p class="text-sm text-slate-300 leading-relaxed">{{ selectedProject.objective }}</p>
                            </div>

                            <!-- My Contribution -->
                            <div v-if="selectedProject.contribution">
                                <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">My Contribution</h4>
                                <p class="text-sm text-slate-300 leading-relaxed">{{ selectedProject.contribution }}</p>
                            </div>

                            <!-- Key Features -->
                            <div v-if="selectedProject.features?.length">
                                <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Key Features</h4>
                                <ul class="space-y-2">
                                    <li v-for="feat in selectedProject.features" :key="feat" class="flex items-start gap-2.5 text-sm text-slate-300">
                                        <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 shrink-0" aria-hidden="true" />
                                        <span>{{ feat }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Technical Implementation -->
                            <div v-if="selectedProject.technicalImplementation">
                                <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Technical Implementation</h4>
                                <ul class="space-y-2">
                                    <li v-for="item in selectedProject.technicalImplementation" :key="item" class="flex items-start gap-2.5 text-sm text-slate-300">
                                        <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-400 shrink-0" aria-hidden="true" />
                                        <span>{{ item }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Evaluation Results / Outcome -->
                            <div v-if="selectedProject.metrics?.length">
                                <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Verified Evaluation Results</h4>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                    <div
                                        v-for="m in selectedProject.metrics"
                                        :key="m.label"
                                        class="p-3 bg-[#070d1a] border border-[#1e2a3d] rounded-sm text-center"
                                    >
                                        <div class="text-base font-black text-blue-300">{{ m.value }}</div>
                                        <div class="text-[10px] text-slate-500 uppercase tracking-wider mt-1">{{ m.label }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Technologies used -->
                            <div>
                                <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-3">Technologies</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        v-for="t in selectedProject.technologies"
                                        :key="t"
                                        class="px-2.5 py-1 text-xs font-mono bg-[#162847]/80 border border-blue-900/40 text-blue-300 rounded-sm"
                                    >
                                        {{ t }}
                                    </span>
                                </div>
                            </div>

                            <!-- Modal footer links -->
                            <div class="pt-6 border-t border-[#1e2a3d] flex flex-wrap items-center justify-between gap-3">
                                <div class="flex flex-wrap items-center gap-3">
                                    <a
                                        v-if="selectedProject.liveUrl && !selectedProject.isOngoing"
                                        :href="selectedProject.liveUrl"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold tracking-widest uppercase rounded-sm transition-all shadow-lg shadow-emerald-950/40"
                                    >
                                        <span class="w-2 h-2 rounded-full bg-white animate-pulse" />
                                        Visit Live Website
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                    <a
                                        v-else-if="selectedProject.liveUrl && selectedProject.isOngoing"
                                        :href="selectedProject.liveUrl"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-amber-600 hover:bg-amber-500 text-white text-xs font-bold tracking-widest uppercase rounded-sm transition-all shadow-lg shadow-amber-950/40"
                                    >
                                        <span class="w-2 h-2 rounded-full bg-white animate-ping" />
                                        Preview Staging Site ↗
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>

                                    <a
                                        v-if="selectedProject.github"
                                        :href="selectedProject.github"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold tracking-widest uppercase rounded-sm transition-colors"
                                    >
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z" />
                                        </svg>
                                        View on GitHub
                                    </a>
                                    <span v-else-if="!selectedProject.liveUrl" class="text-xs text-slate-500 italic">
                                        Project repository details available upon request.
                                    </span>
                                </div>

                                <button
                                    @click="closeModal"
                                    class="px-4 py-2 border border-[#1e2a3d] hover:border-slate-500 text-slate-400 hover:text-white text-xs font-bold uppercase rounded-sm transition-colors"
                                >
                                    Close
                                </button>
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

const selectedProject = ref(null);

function openModal(project) {
    selectedProject.value = project;
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    selectedProject.value = null;
    document.body.style.overflow = '';
}

// ─── 4 Capability Cards ─────────────────────────────────────────────
const capabilities = [
    {
        title: 'Web Applications',
        items: ['Laravel', 'PHP', 'Vue', 'Inertia.js', 'Tailwind CSS'],
    },
    {
        title: 'Front-End',
        items: ['Vue 3', 'JavaScript', 'HTML5 & CSS3', 'Responsive UI', 'Component-based development'],
    },
    {
        title: 'Back-End & Database',
        items: ['Laravel', 'PHP', 'MySQL', 'MariaDB', 'REST/API integration'],
    },
    {
        title: 'Project Delivery',
        items: ['Requirements analysis', 'System planning', 'Project coordination', 'Documentation & Testing', 'UI implementation'],
    },
];

// ─── Technology Stack Badges ────────────────────────────────────────
const techStack = [
    { name: 'Laravel' },
    { name: 'PHP' },
    { name: 'Vue 3' },
    { name: 'Inertia.js' },
    { name: 'Tailwind CSS' },
    { name: 'JavaScript' },
    { name: 'MySQL' },
    { name: 'MariaDB' },
    { name: 'HTML' },
    { name: 'CSS' },
    { name: 'Git' },
    { name: 'GitHub' },
];


// ─── Structured Projects Data ───────────────────────────────────────
const developmentProjects = [
    // 1. BU-IROQuest
    {
        title: 'BU-IROQuest',
        subtitle: 'Bicol University International Relations Office Web Application',
        category: 'WEB APPLICATION',
        terminalTag: 'bu-iroquest --prod',
        filterTags: ['web', 'fullstack', 'laravel', 'vue'],
        role: 'Project Manager · Front-End Programmer',
        technologies: ['Laravel', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'MySQL'],
        methodology: 'Rapid Application Development (RAD)',
        image: '/images/portfolio/software/bu-iroquest.jpg',
        imageCaption: 'Official live production web application at https://www.bu-iroquest.com/ — "Your Gateway to Global Opportunities"',
        liveUrl: 'https://www.bu-iroquest.com/',
        description: 'A comprehensive live production web application developed for the Bicol University International Relations Office (BU-IRO) to support international relations information, partner linkages, student mobility document access, and digital workflows, integrated with the Arquivo Document Repository.',
        overview: 'BU-IROQuest is a deployed production web application (https://www.bu-iroquest.com/) created to modernize and digitalize the operational workflows of the Bicol University International Relations Office (BU-IRO). The system centralizes international partnerships, foreign university linkages, student/faculty mobility data, and integrates directly with the Arquivo Document Repository.',
        objective: 'Streamline institutional information management and document accessibility for international relations transactions across the university.',
        contribution: 'Led the development as Project Manager and lead Front-End Programmer. Guided the Rapid Application Development (RAD) lifecycle, system planning, stakeholder requirements alignment, and implemented the responsive UI using Vue 3 and Tailwind CSS.',
        features: [
            'Live production deployment at https://www.bu-iroquest.com/',
            'International relations partner and linkage repository',
            'Integrated document access with Arquivo Document Repository',
            'Role-based stakeholder access control and workflow verification',
            'Real-time information retrieval for academic mobility',
        ],
        technicalImplementation: [
            'Laravel backend handling business logic and secure document access',
            'Inertia.js bridge delivering smooth single-page application interactivity',
            'Vue 3 reactive UI component tree with Tailwind CSS styling',
            'Relational MySQL schema structured for rapid document indexing',
            'Production deployment on cloud infrastructure with custom domain bu-iroquest.com',
        ],
        metrics: [
            { value: '4.76', label: 'Functional Suitability' },
            { value: '4.84', label: 'Security' },
            { value: '4.80', label: 'Reliability' },
            { value: '4.88', label: 'Usability' },
        ],
        github: null, // Private institutional repository
    },

    // 2. BU RDMD System (RDESys)
    {
        title: 'BU RDMD System (RDESys)',
        subtitle: 'Research Development & Management Division — Integrated Databank System',
        category: 'SYSTEM DEVELOPMENT',
        terminalTag: 'rdesys --live',
        filterTags: ['web', 'fullstack', 'laravel', 'vue'],
        role: 'System Development · Front-End Development',
        technologies: ['Laravel', 'Inertia.js', 'Vue 3', 'Tailwind CSS', 'PHP', 'MySQL'],
        image: '/images/portfolio/software/bu-rdmd.jpg',
        imageCaption: 'Official live production portal at https://submission.rdesys.bicol-u.edu.ph/ — "Centralizing Research, Development, & Extension Operations at Bicol University"',
        liveUrl: 'https://submission.rdesys.bicol-u.edu.ph/',
        description: 'A live production research and databank management system (RDESys) deployed at submission.rdesys.bicol-u.edu.ph for Bicol University to centralize research proposal submissions, administrative tracking, and university-wide RDE operations.',
        overview: 'RDESys (Integrated Databank System) is deployed live at https://submission.rdesys.bicol-u.edu.ph/ to centralize and automate research, development, and extension operations across Bicol University. The platform features Promis+ for proposal submission & review tracking, and Inspire for report management and administrative requests.',
        objective: 'Centralize Research, Development, & Extension (RDE) workflows, submission tracking, and institutional research records into a secure, single-pane portal at Bicol University.',
        contribution: 'Contributed to system development and responsive front-end interface programming using the Laravel + Inertia.js + Vue 3 stack, ensuring smooth proposal workflow tracking and secure authentication.',
        features: [
            'Live production deployment at https://submission.rdesys.bicol-u.edu.ph/',
            'Promis+: Research proposal submission, review tracking, and progress monitors',
            'Inspire: Comprehensive report management and administrative requests',
            'Role-based university authentication and Google Single Sign-On integration',
            'Centralized RDE databank and multi-departmental workflow coordination',
        ],
        technicalImplementation: [
            'Laravel framework architecture with PHP backend and MySQL databank',
            'Inertia.js bridge providing reactive single-page app transitions',
            'Vue 3 component hierarchy with custom forms and workflow progress steps',
            'Tailwind CSS design system providing clean administrative layouts and dashboards',
            'Deployed on Bicol University domain infrastructure (submission.rdesys.bicol-u.edu.ph)',
        ],
        github: null,
    },

    // 3. Pilar Shrine Web Platform & Livestream API (Ongoing Implementation)
    {
        title: 'Pilar Shrine Sorsogon Web Portal',
        subtitle: 'Parish Web Platform & Livestream Engine — Ongoing Implementation',
        category: 'FULL STACK · ONGOING',
        terminalTag: 'pilar-shrine-staging --v13',
        filterTags: ['web', 'fullstack', 'laravel', 'vue'],
        role: 'Full-Stack Developer · Administrator',
        technologies: ['Laravel 13', 'Vue 3', 'Tailwind CSS v4', 'Vite', 'Blade', 'Axios'],
        image: '/images/portfolio/software/pilar-shrine.jpg',
        imageCaption: 'Ongoing implementation — Staging deployment at https://honeydew-elephant-708751.hostingersite.com/ for the Diocesan Shrine and Parish of Our Lady of the Pillar, Sorsogon',
        liveUrl: 'https://honeydew-elephant-708751.hostingersite.com/',
        isOngoing: true,
        description: 'An ongoing web platform implementation deployed in staging at honeydew-elephant-708751.hostingersite.com for the Diocesan Shrine and Parish of Our Lady of the Pillar (Sorsogon), engineered with an automated livestream status polling API (/api/livestream-status), mass schedules, sacraments guide, and zero-token dashboard control.',
        overview: 'Official parish web platform currently in active implementation, deployed on Hostinger staging (https://honeydew-elephant-708751.hostingersite.com/) and built with modern Laravel 13, Vue 3, and Tailwind CSS v4. Engineered to bridge social media broadcasts with web audiences through a background-checked livestream notification engine.',
        objective: 'Deliver an automated live-broadcast alert system and comprehensive parish portal for online Mass viewers and parishioners that eliminates manual website updates while maintaining liturgical announcements.',
        contribution: 'Architected and actively implementing the full repository: created the /api/livestream-status polling endpoint, automated 60-second broadcast checking, developed the admin dashboard live toggle, and designed the responsive front-end portal.',
        features: [
            'Active staging deployment at https://honeydew-elephant-708751.hostingersite.com/',
            'Automated /api/livestream-status polling (checks broadcast state once per minute)',
            'Dynamic pulsing red "LIVE NOW" notification banner linking directly to live video',
            'Admin dashboard toggle allowing instant live status changes without third-party API tokens',
            'Parish liturgical calendar, Mass schedules, sacrament guidelines, and announcements',
        ],
        technicalImplementation: [
            'Laravel 13 core running on PHP 8.3 with optimized route execution',
            'Vue 3.5 reactive components bundled via Vite 8 and @tailwindcss/vite v4',
            'Database migration schema for instant broadcast state management',
            'Staging deployment on Hostinger cloud infrastructure (honeydew-elephant-708751.hostingersite.com)',
        ],
        metrics: [
            { value: 'Laravel 13', label: 'Backend Architecture' },
            { value: 'Vue 3', label: 'Reactive Front-End' },
            { value: '60s Poll', label: 'Livestream Status API' },
            { value: 'Staging', label: 'Hostinger Cloud' },
        ],
        github: 'https://github.com/russelioo/PilarShrineWebsite',
    },

    // 4. Enterprise Desktop Management (EDP)
    {
        title: 'Business Management System (EDP)',
        subtitle: 'Enterprise Desktop Software & Multi-Entity Database System',
        category: 'SYSTEM DEVELOPMENT',
        terminalTag: 'edp-manager.exe',
        filterTags: ['other'],
        role: 'Software Developer',
        technologies: ['C#', '.NET Framework', 'Windows Forms', 'SQL Database', 'ADO.NET'],
        description: 'Desktop enterprise database system featuring Customer, Supplier, and Employee dashboard interfaces, dynamic data forms, and database management operations.',
        overview: 'An event-driven desktop software solution built in C# .NET for business record keeping, customer relation management, and multi-tier entity manipulation.',
        objective: 'Develop a high-performance desktop database management tool with dedicated role-based form controls and transactional integrity.',
        contribution: 'Architected the form user interfaces (DashboardForm, CustomerDashboard, EditForms) and built the central DBManager database controller class.',
        features: [
            'Secure authentication gate (LoginForm)',
            'Dedicated dashboards for Customers, Suppliers, and Employees',
            'Modular edit dialogs for real-time CRUD operations',
            'Centralized DBManager architecture for database queries and updates',
        ],
        technicalImplementation: [
            'C# programming language targeting Microsoft .NET Windows Forms',
            'Custom Enums, resource localization, and event-driven form architectures',
            'SQL database connectivity executed via ADO.NET query execution',
        ],
        github: 'https://github.com/russelioo/EDP-Activity-8-and-9-',
    },

    // 5. Laravel Web Application Lab & Midterm Project
    {
        title: 'Laravel Routing & Middleware Engine',
        subtitle: 'HTTP Pipeline Architecture & Custom Middleware Gates',
        category: 'WEB APPLICATION',
        terminalTag: 'laravel-pipeline --artisan',
        filterTags: ['web', 'laravel', 'other'],
        role: 'Back-End Developer',
        technologies: ['Laravel', 'PHP', 'Blade', 'Tailwind CSS', 'Vite', 'Middleware'],
        description: 'Multi-route Laravel web application implementing dynamic request validation, custom audit middleware (LogRequests), age authorization (CheckAge), and controller pipelines.',
        overview: 'A structured Laravel repository demonstrating proper HTTP request lifecycle management, custom middleware interception, age-gated restricted access, and controller architecture.',
        objective: 'Build an auditable web request pipeline enforcing validation rules and access constraints before dispatching views.',
        contribution: 'Authored custom middleware classes (LogRequests, CheckAge), defined parameter validation handlers, and implemented controller structures.',
        features: [
            'Custom LogRequests middleware auditing incoming HTTP traffic',
            'CheckAge authorization gate safeguarding restricted endpoints',
            'Dynamic route parameters and alphanumeric username validation rules',
            'Separation of concerns across dedicated controllers',
        ],
        technicalImplementation: [
            'Laravel framework using PHP 8 and Blade view rendering',
            'Middleware pipeline configured inside Laravel web kernel',
            'Vite asset bundling with Tailwind CSS',
        ],
        github: 'https://github.com/russelioo/SOREDAJR_MIDTERM-PROJECT',
    },

    // 6. Music Website Design
    {
        title: 'Music Website Design',
        subtitle: 'Responsive Web UI & Flat File Architecture',
        category: 'FRONT END',
        terminalTag: 'music-web --ui',
        filterTags: ['frontend', 'other'],
        role: 'Front-End Co-Developer',
        technologies: ['HTML5', 'CSS3', 'JavaScript', 'Responsive UI'],
        description: 'Responsive music website user interface implementing flat folder layout architecture and interactive media presentation for Web Systems and Technologies.',
        overview: 'An academic Web Systems and Technologies project demonstrating flat-folder web architecture, semantic markup standards, and responsive audio-visual UI styling.',
        objective: 'Deliver an intuitive, responsive music media web interface adhering to clean web standards.',
        contribution: 'Co-developed the UI wireframes, semantic HTML5 structure, and responsive stylesheet rules.',
        features: [
            'Responsive media showcase and music player layout',
            'Flat file structure optimized for static deployment',
            'Semantic markup with responsive media query breakpoints',
        ],
        technicalImplementation: [
            'Native HTML5, CSS3, and clientside JavaScript',
            'Mobile-first responsive styling without external bloat',
        ],
        github: 'https://github.com/russelioo/Music-Website-Design',
    },
];

</script>

<style scoped>
.modal-enter-active,
.modal-leave-active {
    transition: opacity 0.25s ease;
}
.modal-enter-from,
.modal-leave-to {
    opacity: 0;
}
</style>


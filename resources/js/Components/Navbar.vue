<template>
    <header
        class="fixed top-0 inset-x-0 z-50 transition-all duration-300"
        :class="scrolled ? 'bg-[#070d1a]/95 backdrop-blur-md border-b border-[#1e2a3d]/80 shadow-lg' : 'bg-[#070d1a]/85 backdrop-blur-sm border-b border-[#1e2a3d]/40'"
    >
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Main navigation">
            <div class="flex items-center justify-between h-16 lg:h-18">

                <!-- ─── Left: Brand / Logo ─── -->
                <div class="flex items-center shrink-0">
                    <a
                        href="#home"
                        @click.prevent="scrollTo('home')"
                        class="flex items-center gap-3 group focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 rounded-sm py-1"
                        aria-label="John Russel N. Soreda — Home"
                    >
                        <div class="relative w-8 h-8 rounded-full overflow-hidden border border-blue-500/50 group-hover:border-blue-400 transition-all shadow-sm shadow-blue-600/30 shrink-0 bg-blue-950">
                            <img
                                src="/images/profile.jpg"
                                alt="John Russel N. Soreda"
                                class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-300"
                            />
                        </div>
                        <span class="text-sm font-semibold tracking-wider text-slate-200 group-hover:text-white transition-colors">
                            SOREDA
                        </span>
                    </a>
                </div>

                <!-- ─── Center: Desktop Navigation (>= 1024px) ─── -->
                <ul class="hidden lg:flex items-center gap-1 xl:gap-2" role="list">
                    <!-- Home -->
                    <li>
                        <button
                            @click="scrollTo('home')"
                            class="relative px-3 py-2 text-xs font-semibold tracking-wider uppercase whitespace-nowrap transition-colors duration-200 rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                            :class="activeSection === 'home' ? 'text-blue-400' : 'text-slate-300 hover:text-white'"
                        >
                            Home
                            <span
                                class="absolute bottom-0 left-3 right-3 h-0.5 bg-blue-500 rounded-full transition-transform duration-200 origin-left"
                                :class="activeSection === 'home' ? 'scale-x-100 opacity-100' : 'scale-x-0 opacity-0'"
                                aria-hidden="true"
                            />
                        </button>
                    </li>

                    <!-- About -->
                    <li>
                        <button
                            @click="scrollTo('about')"
                            class="relative px-3 py-2 text-xs font-semibold tracking-wider uppercase whitespace-nowrap transition-colors duration-200 rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                            :class="activeSection === 'about' ? 'text-blue-400' : 'text-slate-300 hover:text-white'"
                        >
                            About
                            <span
                                class="absolute bottom-0 left-3 right-3 h-0.5 bg-blue-500 rounded-full transition-transform duration-200 origin-left"
                                :class="activeSection === 'about' ? 'scale-x-100 opacity-100' : 'scale-x-0 opacity-0'"
                                aria-hidden="true"
                            />
                        </button>
                    </li>

                    <!-- What I Do -->
                    <li>
                        <button
                            @click="scrollTo('services')"
                            class="relative px-3 py-2 text-xs font-semibold tracking-wider uppercase whitespace-nowrap transition-colors duration-200 rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                            :class="activeSection === 'services' ? 'text-blue-400' : 'text-slate-300 hover:text-white'"
                        >
                            What I Do
                            <span
                                class="absolute bottom-0 left-3 right-3 h-0.5 bg-blue-500 rounded-full transition-transform duration-200 origin-left"
                                :class="activeSection === 'services' ? 'scale-x-100 opacity-100' : 'scale-x-0 opacity-0'"
                                aria-hidden="true"
                            />
                        </button>
                    </li>

                    <!-- WORK Dropdown -->
                    <li ref="workDropdownRef" class="relative">
                        <button
                            @click="toggleWorkDropdown"
                            class="relative inline-flex items-center gap-1.5 px-3 py-2 text-xs font-semibold tracking-wider uppercase whitespace-nowrap transition-colors duration-200 rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                            :class="isWorkActive || workOpen ? 'text-blue-400' : 'text-slate-300 hover:text-white'"
                            :aria-expanded="workOpen"
                            aria-haspopup="true"
                            aria-label="Work menu"
                        >
                            Work
                            <svg
                                class="w-3.5 h-3.5 transition-transform duration-200"
                                :class="workOpen ? 'rotate-180 text-blue-400' : 'text-slate-400'"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            <span
                                class="absolute bottom-0 left-3 right-3 h-0.5 bg-blue-500 rounded-full transition-transform duration-200 origin-left"
                                :class="isWorkActive ? 'scale-x-100 opacity-100' : 'scale-x-0 opacity-0'"
                                aria-hidden="true"
                            />
                        </button>

                        <!-- Dropdown Panel (Desktop) -->
                        <transition
                            enter-active-class="transition duration-200 ease-out"
                            enter-from-class="transform -translate-y-2 opacity-0"
                            enter-to-class="transform translate-y-0 opacity-100"
                            leave-active-class="transition duration-150 ease-in"
                            leave-from-class="transform translate-y-0 opacity-100"
                            leave-to-class="transform -translate-y-2 opacity-0"
                        >
                            <div
                                v-show="workOpen"
                                class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[820px] max-w-[92vw] p-6 bg-[#0a1020] border border-[#1e2a3d] rounded-sm shadow-2xl shadow-black/80 backdrop-blur-xl z-50"
                                role="menu"
                                aria-orientation="vertical"
                            >
                                <!-- Top Row: 5 Core Categories Navigation -->
                                <div class="grid grid-cols-5 gap-2 pb-4 mb-5 border-b border-[#1e2a3d]">
                                    <button
                                        @click="navigateWork('software')"
                                        class="flex items-center gap-2 p-2 rounded-sm hover:bg-blue-900/20 text-left transition-colors group/link"
                                    >
                                        <span class="w-2 h-2 rounded-full bg-blue-500 shrink-0" aria-hidden="true" />
                                        <span class="text-xs font-bold uppercase tracking-wider text-slate-200 group-hover/link:text-blue-300">Software</span>
                                    </button>
                                    <button
                                        @click="navigateWork('social')"
                                        class="flex items-center gap-2 p-2 rounded-sm hover:bg-sky-900/20 text-left transition-colors group/link"
                                    >
                                        <span class="w-2 h-2 rounded-full bg-sky-500 shrink-0" aria-hidden="true" />
                                        <span class="text-xs font-bold uppercase tracking-wider text-slate-200 group-hover/link:text-sky-300">Social Media</span>
                                    </button>
                                    <button
                                        @click="navigateWork('campaigns')"
                                        class="flex items-center gap-2 p-2 rounded-sm hover:bg-indigo-900/20 text-left transition-colors group/link"
                                    >
                                        <span class="w-2 h-2 rounded-full bg-indigo-500 shrink-0" aria-hidden="true" />
                                        <span class="text-xs font-bold uppercase tracking-wider text-slate-200 group-hover/link:text-indigo-300">Marketing</span>
                                    </button>
                                    <button
                                        @click="navigateWork('gallery')"
                                        class="flex items-center gap-2 p-2 rounded-sm hover:bg-violet-900/20 text-left transition-colors group/link"
                                    >
                                        <span class="w-2 h-2 rounded-full bg-violet-500 shrink-0" aria-hidden="true" />
                                        <span class="text-xs font-bold uppercase tracking-wider text-slate-200 group-hover/link:text-violet-300">Creative</span>
                                    </button>
                                    <button
                                        @click="navigateWork('case-studies')"
                                        class="flex items-center gap-2 p-2 rounded-sm hover:bg-emerald-900/20 text-left transition-colors group/link"
                                    >
                                        <span class="w-2 h-2 rounded-full bg-emerald-500 shrink-0" aria-hidden="true" />
                                        <span class="text-xs font-bold uppercase tracking-wider text-slate-200 group-hover/link:text-emerald-300">Case Studies</span>
                                    </button>
                                </div>

                                <!-- Columns: Sub-item quick navigation -->
                                <div class="grid grid-cols-4 gap-6">

                                    <!-- Column 1: Software & Technology -->
                                    <div>
                                        <div class="flex items-center gap-2 mb-3 pb-1 border-b border-[#1e2a3d]">
                                            <span class="text-[11px] font-bold tracking-widest uppercase text-blue-400">Software</span>
                                        </div>
                                        <ul class="space-y-1.5" role="none">
                                            <li>
                                                <button
                                                    @click="navigateWork('software')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors flex items-center justify-between group/sub"
                                                    role="menuitem"
                                                >
                                                    <span class="flex items-center gap-1.5">
                                                         <span>BU-IROQuest</span>
                                                         <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" title="Live Web Application" />
                                                    </span>
                                                    <span class="text-[10px] font-bold text-emerald-400">LIVE</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('software')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors flex items-center justify-between group/sub"
                                                    role="menuitem"
                                                >
                                                    <span class="flex items-center gap-1.5">
                                                        <span>BU RDMD (RDESys)</span>
                                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" title="Live Web Application" />
                                                    </span>
                                                    <span class="text-[10px] font-bold text-emerald-400">LIVE</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('software')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors flex items-center justify-between group/sub"
                                                    role="menuitem"
                                                >
                                                    <span class="flex items-center gap-1.5">
                                                        <span>Pilar Shrine Portal</span>
                                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping" title="Ongoing Implementation · Staging" />
                                                    </span>
                                                    <span class="text-[10px] font-bold text-amber-400">DEV</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('software')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors flex items-center justify-between"
                                                    role="menuitem"
                                                >
                                                    <span>Business Mgmt (EDP)</span>
                                                    <span class="text-[10px] font-mono text-indigo-400">C#</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 2: Social Media -->
                                    <div>
                                        <div class="flex items-center gap-2 mb-3 pb-1 border-b border-[#1e2a3d]">
                                            <span class="text-[11px] font-bold tracking-widest uppercase text-sky-400">Social Media</span>
                                        </div>
                                        <ul class="space-y-1.5" role="none">
                                            <li>
                                                <button
                                                    @click="navigateWork('social')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Parish Livestream
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('social')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Feast Day Campaigns
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('social')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Platform Strategy
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('social')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Content Workflow
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 3: Digital Marketing -->
                                    <div>
                                        <div class="flex items-center gap-2 mb-3 pb-1 border-b border-[#1e2a3d]">
                                            <span class="text-[11px] font-bold tracking-widest uppercase text-indigo-400">Marketing</span>
                                        </div>
                                        <ul class="space-y-1" role="none">
                                            <li>
                                                <button
                                                    @click="navigateWork('campaigns')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Merchandise 2024 / 2025
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('campaigns')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Holy Week Merch 2026
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('campaigns')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Just Flowers Promotion
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('campaigns')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Bitoon nin Paglaom
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('campaigns')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Fire-Victim Fundraising
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('case-studies')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    PJRS Online Shop
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 4: Creative -->
                                    <div>
                                        <div class="flex items-center gap-2 mb-3 pb-1 border-b border-[#1e2a3d]">
                                            <span class="text-[11px] font-bold tracking-widest uppercase text-violet-400">Creative</span>
                                        </div>
                                        <ul class="space-y-1.5" role="none">
                                            <li>
                                                <button
                                                    @click="navigateWork('gallery')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Graphic Design
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('gallery')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Video Production
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('gallery')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Photography
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    @click="navigateWork('gallery')"
                                                    class="w-full text-left text-xs text-slate-300 hover:text-white hover:bg-blue-900/20 px-2 py-1.5 rounded-sm transition-colors"
                                                    role="menuitem"
                                                >
                                                    Livestream Assets
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <!-- Dropdown Footer Link -->
                                <div class="mt-5 pt-4 border-t border-[#1e2a3d] flex items-center justify-between">
                                    <span class="text-[11px] text-slate-500">
                                        Software · Social Media · Digital Marketing · Creative · Case Studies
                                    </span>
                                    <button
                                        @click="navigateWork('case-studies')"
                                        class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-400 hover:text-blue-300 transition-colors"
                                    >
                                        View all case studies
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </transition>
                    </li>

                    <!-- Experience -->
                    <li>
                        <button
                            @click="scrollTo('experience')"
                            class="relative px-3 py-2 text-xs font-semibold tracking-wider uppercase whitespace-nowrap transition-colors duration-200 rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                            :class="activeSection === 'experience' ? 'text-blue-400' : 'text-slate-300 hover:text-white'"
                        >
                            Experience
                            <span
                                class="absolute bottom-0 left-3 right-3 h-0.5 bg-blue-500 rounded-full transition-transform duration-200 origin-left"
                                :class="activeSection === 'experience' ? 'scale-x-100 opacity-100' : 'scale-x-0 opacity-0'"
                                aria-hidden="true"
                            />
                        </button>
                    </li>

                    <!-- Credentials -->
                    <li>
                        <button
                            @click="scrollTo('credentials')"
                            class="relative px-3 py-2 text-xs font-semibold tracking-wider uppercase whitespace-nowrap transition-colors duration-200 rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                            :class="activeSection === 'credentials' ? 'text-blue-400' : 'text-slate-300 hover:text-white'"
                        >
                            Credentials
                            <span
                                class="absolute bottom-0 left-3 right-3 h-0.5 bg-blue-500 rounded-full transition-transform duration-200 origin-left"
                                :class="activeSection === 'credentials' ? 'scale-x-100 opacity-100' : 'scale-x-0 opacity-0'"
                                aria-hidden="true"
                            />
                        </button>
                    </li>
                </ul>

                <!-- ─── Right: CTA Button (Desktop) ─── -->
                <div class="hidden lg:flex items-center shrink-0">
                    <button
                        @click="scrollTo('contact')"
                        class="px-5 py-2.5 text-xs font-bold tracking-widest uppercase border border-blue-600 text-blue-400 rounded-sm hover:bg-blue-600 hover:text-white transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 whitespace-nowrap shadow-sm hover:shadow-blue-600/25"
                    >
                        Contact Me
                    </button>
                </div>

                <!-- ─── Mobile Hamburger (< 1024px) ─── -->
                <button
                    @click="toggleMobileMenu"
                    class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 rounded-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400"
                    :aria-expanded="mobileOpen"
                    aria-controls="mobile-navigation"
                    aria-label="Toggle navigation menu"
                >
                    <span
                        class="block w-6 h-0.5 bg-white transition-transform duration-300 ease-in-out"
                        :class="mobileOpen ? 'rotate-45 translate-y-2' : ''"
                    />
                    <span
                        class="block w-6 h-0.5 bg-white transition-opacity duration-300 ease-in-out"
                        :class="mobileOpen ? 'opacity-0' : 'opacity-100'"
                    />
                    <span
                        class="block w-6 h-0.5 bg-white transition-transform duration-300 ease-in-out"
                        :class="mobileOpen ? '-rotate-45 -translate-y-2' : ''"
                    />
                </button>

            </div>

            <!-- ─── Mobile Menu (< 1024px) ─── -->
            <transition
                enter-active-class="transition duration-200 ease-out"
                enter-from-class="transform -translate-y-3 opacity-0"
                enter-to-class="transform translate-y-0 opacity-100"
                leave-active-class="transition duration-150 ease-in"
                leave-from-class="transform translate-y-0 opacity-100"
                leave-to-class="transform -translate-y-3 opacity-0"
            >
                <div
                    v-show="mobileOpen"
                    id="mobile-navigation"
                    class="lg:hidden max-h-[calc(100vh-4.5rem)] overflow-y-auto border-t border-[#1e2a3d] py-4 space-y-1 bg-[#070d1a]"
                >
                    <!-- Home -->
                    <button
                        @click="handleMobileNav('home')"
                        class="w-full text-left px-4 py-3 text-xs font-semibold tracking-wider uppercase transition-colors rounded-sm"
                        :class="activeSection === 'home' ? 'text-blue-400 bg-blue-900/10' : 'text-slate-300 hover:text-white'"
                    >
                        Home
                    </button>

                    <!-- About -->
                    <button
                        @click="handleMobileNav('about')"
                        class="w-full text-left px-4 py-3 text-xs font-semibold tracking-wider uppercase transition-colors rounded-sm"
                        :class="activeSection === 'about' ? 'text-blue-400 bg-blue-900/10' : 'text-slate-300 hover:text-white'"
                    >
                        About
                    </button>

                    <!-- What I Do -->
                    <button
                        @click="handleMobileNav('services')"
                        class="w-full text-left px-4 py-3 text-xs font-semibold tracking-wider uppercase transition-colors rounded-sm"
                        :class="activeSection === 'services' ? 'text-blue-400 bg-blue-900/10' : 'text-slate-300 hover:text-white'"
                    >
                        What I Do
                    </button>

                    <!-- Work (Accordion) -->
                    <div class="border-y border-[#1e2a3d]/50 my-1 py-1">
                        <button
                            @click="mobileWorkOpen = !mobileWorkOpen"
                            class="w-full flex items-center justify-between px-4 py-3 text-xs font-semibold tracking-wider uppercase transition-colors rounded-sm"
                            :class="isWorkActive || mobileWorkOpen ? 'text-blue-400' : 'text-slate-300 hover:text-white'"
                            :aria-expanded="mobileWorkOpen"
                        >
                            <span>Work</span>
                            <svg
                                class="w-4 h-4 transition-transform duration-200"
                                :class="mobileWorkOpen ? 'rotate-180 text-blue-400' : 'text-slate-400'"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Work Accordion Content -->
                        <div v-show="mobileWorkOpen" class="px-4 pb-3 space-y-4">
                            <!-- Software -->
                            <div class="pl-3 border-l-2 border-blue-500/40 space-y-1">
                                <button @click="handleMobileNav('software')" class="text-left text-[11px] font-bold tracking-widest uppercase text-blue-400 hover:underline">
                                    Software
                                </button>
                                <div class="flex flex-col space-y-1">
                                    <button @click="handleMobileNav('software')" class="text-left text-xs text-slate-300 hover:text-white py-1">BU-IROQuest</button>
                                    <button @click="handleMobileNav('software')" class="text-left text-xs text-slate-300 hover:text-white py-1">BU RDMD System</button>
                                    <button @click="handleMobileNav('software')" class="text-left text-xs text-slate-300 hover:text-white py-1 flex items-center justify-between">
                                        <span>Pilar Shrine Portal</span>
                                        <span class="text-[10px] font-bold text-amber-400">DEV</span>
                                    </button>
                                    <button @click="handleMobileNav('software')" class="text-left text-xs text-slate-300 hover:text-white py-1">Business Mgmt (EDP)</button>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div class="pl-3 border-l-2 border-sky-500/40 space-y-1">
                                <button @click="handleMobileNav('social')" class="text-left text-[11px] font-bold tracking-widest uppercase text-sky-400 hover:underline">
                                    Social Media
                                </button>
                                <div class="flex flex-col space-y-1">
                                    <button @click="handleMobileNav('social')" class="text-left text-xs text-slate-300 hover:text-white py-1">Parish Livestream Program</button>
                                    <button @click="handleMobileNav('case-studies')" class="text-left text-xs text-slate-300 hover:text-white py-1">Feast Day Campaigns</button>
                                </div>
                            </div>

                            <!-- Digital Marketing -->
                            <div class="pl-3 border-l-2 border-indigo-500/40 space-y-1">
                                <button @click="handleMobileNav('campaigns')" class="text-left text-[11px] font-bold tracking-widest uppercase text-indigo-400 hover:underline">
                                    Digital Marketing
                                </button>
                                <div class="flex flex-col space-y-1">
                                    <button @click="handleMobileNav('campaigns')" class="text-left text-xs text-slate-300 hover:text-white py-1">Merchandise 2024 / 2025</button>
                                    <button @click="handleMobileNav('campaigns')" class="text-left text-xs text-slate-300 hover:text-white py-1">Holy Week Merch 2026</button>
                                    <button @click="handleMobileNav('campaigns')" class="text-left text-xs text-slate-300 hover:text-white py-1">Just Flowers</button>
                                    <button @click="handleMobileNav('campaigns')" class="text-left text-xs text-slate-300 hover:text-white py-1">Christmas Karol</button>
                                    <button @click="handleMobileNav('campaigns')" class="text-left text-xs text-slate-300 hover:text-white py-1">Fire-Victim Fundraising</button>
                                    <button @click="handleMobileNav('case-studies')" class="text-left text-xs text-slate-300 hover:text-white py-1">PJRS Online Shop</button>
                                </div>
                            </div>

                            <!-- Creative -->
                            <div class="pl-3 border-l-2 border-violet-500/40 space-y-1">
                                <button @click="handleMobileNav('gallery')" class="text-left text-[11px] font-bold tracking-widest uppercase text-violet-400 hover:underline">
                                    Creative
                                </button>
                                <div class="flex flex-col space-y-1">
                                    <button @click="handleMobileNav('gallery')" class="text-left text-xs text-slate-300 hover:text-white py-1">Graphic Design</button>
                                    <button @click="handleMobileNav('gallery')" class="text-left text-xs text-slate-300 hover:text-white py-1">Video Production</button>
                                    <button @click="handleMobileNav('gallery')" class="text-left text-xs text-slate-300 hover:text-white py-1">Photography</button>
                                    <button @click="handleMobileNav('gallery')" class="text-left text-xs text-slate-300 hover:text-white py-1">Livestream Assets</button>
                                </div>
                            </div>

                            <!-- Case Studies Direct -->
                            <div class="pl-3 border-l-2 border-emerald-500/40 space-y-1">
                                <button @click="handleMobileNav('case-studies')" class="text-left text-[11px] font-bold tracking-widest uppercase text-emerald-400 hover:underline">
                                    Case Studies
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Experience -->
                    <button
                        @click="handleMobileNav('experience')"
                        class="w-full text-left px-4 py-3 text-xs font-semibold tracking-wider uppercase transition-colors rounded-sm"
                        :class="activeSection === 'experience' ? 'text-blue-400 bg-blue-900/10' : 'text-slate-300 hover:text-white'"
                    >
                        Experience
                    </button>

                    <!-- Credentials -->
                    <button
                        @click="handleMobileNav('credentials')"
                        class="w-full text-left px-4 py-3 text-xs font-semibold tracking-wider uppercase transition-colors rounded-sm"
                        :class="activeSection === 'credentials' ? 'text-blue-400 bg-blue-900/10' : 'text-slate-300 hover:text-white'"
                    >
                        Credentials
                    </button>

                    <!-- Contact CTA -->
                    <div class="pt-3 px-4 pb-2">
                        <button
                            @click="handleMobileNav('contact')"
                            class="w-full py-3 text-xs font-bold tracking-widest uppercase border border-blue-600 bg-blue-600/10 hover:bg-blue-600 text-blue-300 hover:text-white transition-colors rounded-sm text-center"
                        >
                            Contact Me
                        </button>
                    </div>
                </div>
            </transition>
        </nav>
    </header>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';

const scrolled = ref(false);
const mobileOpen = ref(false);
const workOpen = ref(false);
const mobileWorkOpen = ref(false);
const activeSection = ref('home');
const workDropdownRef = ref(null);

// Sections belonging to the "Work" umbrella
const workSectionIds = ['software', 'social', 'campaigns', 'case-studies', 'gallery', 'tech'];

const isWorkActive = computed(() => {
    return workSectionIds.includes(activeSection.value);
});

function toggleWorkDropdown() {
    workOpen.value = !workOpen.value;
}

function toggleMobileMenu() {
    mobileOpen.value = !mobileOpen.value;
}

function navigateWork(sectionId) {
    workOpen.value = false;
    scrollTo(sectionId);
}

function handleMobileNav(sectionId) {
    mobileOpen.value = false;
    scrollTo(sectionId);
}

function scrollTo(id) {
    const el = document.getElementById(id);
    if (el) {
        const offset = 72;
        const top = el.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
    }
}

function handleScroll() {
    scrolled.value = window.scrollY > 20;

    const allSections = [
        'home',
        'about',
        'services',
        'software',
        'social',
        'campaigns',
        'case-studies',
        'gallery',
        'tech',
        'experience',
        'credentials',
        'why',
        'contact',
    ];

    const elements = allSections.map(id => document.getElementById(id)).filter(Boolean);
    let current = 'home';
    for (const el of elements) {
        const rect = el.getBoundingClientRect();
        if (rect.top <= 120) {
            current = el.id;
        }
    }
    activeSection.value = current;
}

function handleClickOutside(event) {
    if (workDropdownRef.value && !workDropdownRef.value.contains(event.target)) {
        workOpen.value = false;
    }
}

function handleKeyDown(event) {
    if (event.key === 'Escape') {
        workOpen.value = false;
        mobileOpen.value = false;
    }
}

onMounted(() => {
    window.addEventListener('scroll', handleScroll, { passive: true });
    document.addEventListener('click', handleClickOutside);
    document.addEventListener('keydown', handleKeyDown);
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
    document.removeEventListener('click', handleClickOutside);
    document.removeEventListener('keydown', handleKeyDown);
});
</script>

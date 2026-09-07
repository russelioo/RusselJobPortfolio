<template>
    <section id="credentials" class="py-24 lg:py-32 bg-[#0a1020] relative" aria-label="Education, Training, and Certifications">
        <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-blue-700/30 to-transparent" aria-hidden="true" />

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <SectionHeading eyebrow="Education & Credentials"
                    subtitle="Formal education, professional training, and certifications.">
                    Qualifications.
                </SectionHeading>
            </div>

            <!-- Education -->
            <div class="reveal mb-12">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-5">Education</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-4xl">
                    <div class="flex items-start gap-4 p-6 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-800/50 transition-colors">
                        <div class="w-12 h-12 rounded-sm bg-blue-900/40 border border-blue-800/30 flex items-center justify-center flex-shrink-0" aria-hidden="true">
                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-[11px] font-mono font-bold text-blue-400 uppercase tracking-wider">2022 – 2026</span>
                            <h4 class="text-base font-bold text-white mt-0.5 mb-1">Bachelor of Science in Information Technology</h4>
                            <p class="text-sm text-slate-300 font-medium">Bicol University</p>
                            <p class="text-xs text-slate-500 mt-1">Legazpi City, Albay</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-800/50 transition-colors">
                        <div class="w-12 h-12 rounded-sm bg-blue-900/40 border border-blue-800/30 flex items-center justify-center flex-shrink-0" aria-hidden="true">
                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-[11px] font-mono font-bold text-emerald-400 uppercase tracking-wider">With High Honors · 2020 – 2022</span>
                            <h4 class="text-base font-bold text-white mt-0.5 mb-1">Senior High School — STEM Strand</h4>
                            <p class="text-sm text-slate-300 font-medium">Pilar National Comprehensive High School</p>
                            <p class="text-xs text-slate-500 mt-1">Pilar, Sorsogon</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certifications -->
            <div class="reveal mb-12">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-5">Certifications</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div v-for="(cert, i) in certifications" :key="cert.title" class="reveal" :style="`transition-delay:${i*50}ms`">
                        <div class="p-5 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/40 transition-colors h-full flex flex-col justify-between">
                            <div class="flex items-start gap-3 mb-3">
                                <div class="w-8 h-8 rounded-sm bg-emerald-900/30 border border-emerald-800/30 flex items-center justify-center flex-shrink-0 mt-0.5" aria-hidden="true">
                                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-emerald-400 tracking-wide mb-0.5">{{ cert.issuer }}</div>
                                    <div class="text-sm font-semibold text-white leading-snug">{{ cert.title }}</div>
                                </div>
                            </div>
                            <div v-if="cert.date" class="text-[11px] font-mono text-slate-500 pt-2 border-t border-[#1e2a3d]/50">
                                {{ cert.date }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Training & Seminars -->
            <div class="reveal mb-12">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-5">Professional Seminars & Training</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div v-for="(t, i) in training" :key="t.title" class="reveal" :style="`transition-delay:${i*50}ms`">
                        <div class="p-5 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/40 transition-colors h-full">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-sm bg-blue-900/40 border border-blue-800/30 flex items-center justify-center flex-shrink-0 mt-0.5" aria-hidden="true">
                                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-blue-400 tracking-wide mb-1">{{ t.provider }}</div>
                                    <div class="text-sm font-semibold text-white leading-tight">{{ t.title }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leadership & Technical Background -->
            <div class="reveal">
                <h3 class="text-xs font-bold tracking-[0.2em] uppercase text-slate-500 mb-5">Additional Leadership & Community Service</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div v-for="lead in leadership" :key="lead.title" class="p-5 bg-[#0d1627]/60 border border-[#1e2a3d] rounded-sm hover:border-blue-700/40 transition-colors">
                        <span class="text-[11px] font-mono text-blue-400 font-bold block mb-1">{{ lead.period }}</span>
                        <div class="text-sm font-bold text-white mb-0.5">{{ lead.title }}</div>
                        <div class="text-xs text-slate-400 mb-2">{{ lead.organization }}</div>
                        <p class="text-xs text-slate-500 leading-relaxed">{{ lead.desc }}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
import SectionHeading from '@/Components/SectionHeading.vue';

const certifications = [
    { issuer: 'Meta',   title: 'Meta Social Media Management Certificate', date: 'July 10, 2026' },
    { issuer: 'Google', title: 'The Bits and Bytes of Computer Networking', date: 'July 10, 2026' },
    { issuer: 'TESDA',  title: 'Optimizing Digital Marketing Campaign',       date: 'Verified' },
];

const training = [
    { provider: 'IBARETA!', title: 'Telling the Story of the Church Through the Lens' },
    { provider: 'IBARETA!', title: 'Strategies for a Meaningful Parish Presence Online' },
    { provider: 'IBARETA!', title: 'Video Production and Video Editing Seminar' },
];

const leadership = [
    {
        title: 'Vice President',
        organization: 'Ministry of Altar Servers — Our Lady of the Pillar Shrine',
        period: 'Aug 2024 – Dec 2025',
        desc: 'Coordinated events, technical operations, communications, volunteer assignments, and documentation.',
    },
    {
        title: 'Secretary',
        organization: 'Ministry of Altar Servers — Our Lady of the Pillar Shrine',
        period: 'Mar 2018 – Aug 2024',
        desc: 'Maintained organizational records, reports, databases, registrations, and event documentation.',
    },
    {
        title: 'President',
        organization: '4-H Club of the Philippines — Pilar NCHS Chapter',
        period: '2021 – 2022',
        desc: 'Led webinars and programs involving promotion, registration, technical setup, and documentation.',
    },
];
</script>

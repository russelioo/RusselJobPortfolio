<template>
    <section id="experience" class="py-24 lg:py-32 bg-[#070d1a] relative" aria-label="Experience section">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <SectionHeading eyebrow="Experience"
                    subtitle="Professional roles spanning digital communications, social media management, technology development, and IT support.">
                    Professional Timeline.
                </SectionHeading>
            </div>

            <div class="max-w-3xl space-y-0">
                <div v-for="(item, i) in experiences" :key="item.position + item.organization" class="reveal" :style="`transition-delay:${i*60}ms`">
                    <ExperienceItem v-bind="item" />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import SectionHeading from '@/Components/SectionHeading.vue';
import ExperienceItem from '@/Components/ExperienceItem.vue';

const experiences = [
    {
        position: 'Information Technology Intern',
        organization: 'Office of the VP for Research, Development, and Extension — Bicol University',
        period: 'Feb 2026 – May 2026',
        responsibilities: [
            'Updated, tested, and maintained web application features and content workflows for the RDESys Proposal Management Information System.',
            'Supported dashboards, monitoring tools, administrative workflows, and reporting visibility for university stakeholders.',
            'Investigated issues, validated fixes, coordinated with stakeholders, and documented changes to support reliable system deployment.',
            'Provided technical support for meetings, presentations, and events using Google Meet, Zoom, and audiovisual tools.',
        ],
        tags: ['Laravel', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'RDESys', 'System Maintenance', 'IT Support'],
    },
    {
        position: 'Project Manager / Software Development Lead',
        organization: 'IROQuest Capstone Project — Bicol University',
        period: 'Jan 2025 – Jan 2026',
        responsibilities: [
            'Led end-to-end planning and implementation of IROQuest, a web-based Inbound and Outbound Mobility Service Management System.',
            'Coordinated requirements gathering, system design, development tasks, testing, documentation, timelines, stakeholder reviews, and final deliverables.',
            'Applied Agile practices to manage task assignments, progress tracking, issue resolution, and team coordination.',
            'Implemented and supported SEO-oriented website improvements including keyword optimization, metadata updates, internal linking, and content optimization.',
            'Prepared technical and project documentation and presented system progress and updates to stakeholders.',
        ],
        tags: ['Project Management', 'Agile', 'RAD', 'Requirements Analysis', 'Vue 3', 'Documentation'],
    },
    {
        position: 'Digital Communications Head and Founder',
        organization: 'Social Communications and Mass Media Pilar — Our Lady of the Pillar Shrine',
        period: 'Mar 2024 – Present',
        responsibilities: [
            'Founded and lead the digital communications group responsible for website content, online systems, multimedia operations, and digital communications.',
            'Manage content across Facebook, TikTok, Instagram, and YouTube, including editorial calendars, announcements, event coverage, promotional campaigns, and community communications.',
            'Develop brand-consistent graphics, posters, carousels, infographics, Reels, Stories, thumbnails, promotional videos, and event documentation using Canva and Adobe tools.',
            'Led digital promotion for major parish events, feast-day campaigns, community initiatives, and fundraising programs using coordinated multi-format content.',
            'Managed a Facebook presence associated with Del Pilar Parish reaching 10K+ followers; monitored audience response, comments, messages, and engagement.',
            'Led the “Bitoon nin Paglaom” fundraising campaign, raising approximately ₱60,000 through campaign planning, promotional content, and stakeholder communications.',
            'Supported livestream operations through OBS Studio, camera operation, audio-visual coordination, technical troubleshooting, and live-event production.',
            'Updated website content and supported SEO through keyword-aligned copy, metadata updates, structured information, and content optimization.',
        ],
        tags: ['Digital Communications', 'Content Strategy', 'Social Media', 'OBS Studio', 'Meta Business Suite', 'Leadership'],
    },
    {
        position: 'Social Media / Marketing Lead',
        organization: 'Larpi — Pilar, Sorsogon',
        period: '2024 – Present',
        responsibilities: [
            'Create and manage social media content, promotional campaigns, and digital marketing materials for a local food and beverage business.',
            'Support brand positioning and audience engagement through promotional graphics, short-form content, announcements, and campaign-based posting.',
            'Contribute to an online community of 17K+ followers through consistent content, promotions, and audience interaction.',
        ],
        tags: ['Social Media Marketing', 'Brand Positioning', 'Content Creation', 'Community Growth (17K+)'],
    },
    {
        position: 'Owner & E-Commerce Manager',
        organization: 'PJRS Online Shop (Lazada, Shopee, and Physical Store)',
        period: '2022 – Present',
        responsibilities: [
            'Manage online and physical retail operations, including product listings, inventory, customer support, order processing, and digital content.',
            'Maintain marketplace data, monitor performance, and improve product information and digital visibility through structured content updates.',
            'Create product descriptions and digital marketing content while monitoring marketplace analytics, sales performance, and customer feedback.',
        ],
        tags: ['E-Commerce', 'Shopee', 'Lazada', 'Store Management', 'Product Marketing'],
    },
    {
        position: 'Co-Owner & Operations Manager',
        organization: 'Just Flowers Flower Shop — Pilar, Sorsogon',
        period: '2022 – Present',
        responsibilities: [
            'Manage online and physical operations while developing social media content, promotional campaigns, and customer communications to support brand awareness and sales.',
            'Coordinate customer inquiries, orders, suppliers, delivery, inventory, pricing, and service quality across digital and physical channels.',
        ],
        tags: ['Retail Operations', 'Promotional Campaigns', 'Customer Relations', 'Order Management'],
    },
    {
        position: 'Vice President',
        organization: 'Ministry of Altar Servers — Our Lady of the Pillar Shrine',
        period: 'Aug 2024 – Dec 2025',
        responsibilities: [
            'Led ministry programs, meetings, parish activities, and large-scale events, coordinating registration, communications, volunteers, promotional materials, logistics, technical operations, and post-event evaluation.',
            'Led a fire-victims fundraising campaign that raised over ₱200,000 through communications, promotional outreach, donation coordination, and stakeholder follow-up.',
            'Managed the 2024 ministry merchandise fundraising program, including product planning, promotional content, inventory, sales monitoring, and financial tracking.',
        ],
        tags: ['Leadership', 'Event Operations', 'Fundraising (₱200K+)', 'Merchandise Management'],
    },
];
</script>

<template>
    <PortfolioLayout>
        <!-- 1. Hero -->
        <Hero />

        <!-- 2. About -->
        <AboutSection />

        <!-- 3. What I Do -->
        <WhatIDo />

        <!-- 4. Software & Development (New Major Pillar) -->
        <SoftwareSection />

        <!-- 5. Social Media Experience -->
        <SocialMediaSection />

        <!-- 6. Digital Marketing / Campaign Impact -->
        <CampaignsSection />

        <!-- 7. Featured Case Studies -->
        <CaseStudiesSection />

        <!-- 8. Creative Portfolio Gallery -->
        <CreativePortfolio />

        <!-- 9. Technology Tools & Core Skills -->
        <TechSection />

        <!-- 10. Experience Timeline -->
        <ExperienceSection />

        <!-- 11. Education, Training & Certifications -->
        <CredentialsSection />

        <!-- 12. Why Work With Me -->
        <WhyWorkWithMe />

        <!-- 13. Contact -->
        <ContactSection />
    </PortfolioLayout>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue';
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue';
import Hero from '@/Components/Hero.vue';
import AboutSection from '@/Components/AboutSection.vue';
import WhatIDo from '@/Components/WhatIDo.vue';
import SoftwareSection from '@/Components/SoftwareSection.vue';
import SocialMediaSection from '@/Components/SocialMediaSection.vue';
import CampaignsSection from '@/Components/CampaignsSection.vue';
import CaseStudiesSection from '@/Components/CaseStudiesSection.vue';
import CreativePortfolio from '@/Components/CreativePortfolio.vue';
import TechSection from '@/Components/TechSection.vue';
import ExperienceSection from '@/Components/ExperienceSection.vue';
import CredentialsSection from '@/Components/CredentialsSection.vue';
import WhyWorkWithMe from '@/Components/WhyWorkWithMe.vue';
import ContactSection from '@/Components/ContactSection.vue';

// ─── Scroll reveal (Intersection Observer + Mutation Observer) ─────────────
let revealObserver;
let mutationObserver;

onMounted(() => {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReduced) {
        document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));
        return;
    }

    revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.08,
            rootMargin: '0px 0px -30px 0px',
        }
    );

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    // Watch for dynamically added .reveal elements
    mutationObserver = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            mutation.addedNodes.forEach((node) => {
                if (node.nodeType === Node.ELEMENT_NODE) {
                    if (node.classList?.contains('reveal') && !node.classList.contains('visible')) {
                        revealObserver.observe(node);
                    }
                    node.querySelectorAll?.('.reveal:not(.visible)').forEach((el) => {
                        revealObserver.observe(el);
                    });
                }
            });
        });
    });

    mutationObserver.observe(document.body, { childList: true, subtree: true });
});

onUnmounted(() => {
    revealObserver?.disconnect();
    mutationObserver?.disconnect();
});
</script>

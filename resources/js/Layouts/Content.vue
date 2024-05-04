
<template>
    <div class="page">
        <Header />
        <div class="page-wrapper">
            <template class="d-none d-md-block">
                <slot name="section" />
            </template>
            <div class="page-body">
                <div class="container-xl">
                    <slot />
                    <template class="d-block d-md-none">
                        <FooterMobile />
                    </template>
                </div>
            </div>
        </div>
        <Footer />
    </div>

</template>

<script setup>
import FooterMobile from '@/Layouts/FooterMobile.vue';
import Footer from '@/Layouts/Footer.vue';
import Header from '@/Layouts/Header.vue';
</script>

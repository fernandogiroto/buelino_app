
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
                        <Footer />
                    </template>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>
import Footer from '@/Layouts/Footer.vue';
import Header from '@/Layouts/Header.vue';
</script>

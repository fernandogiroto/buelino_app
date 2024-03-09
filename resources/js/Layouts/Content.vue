
<template>
    <div class="page">
        <Header />
    
        <div class="page-wrapper">
            <slot name="section" />
            <div class="page-body">
                <div class="container-xl">
                    <slot />
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>
    import Header from '@/Layouts/Header.vue';
</script>
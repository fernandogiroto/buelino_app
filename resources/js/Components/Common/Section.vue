<template>
    <div class="page-header d-print-none mt-2 mt-md-4">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">{{ subtitle }}</div>
                    <h2 class="page-title">{{ title }}</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <slot name="buttons" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({title: null,subtitle:null})
</script>





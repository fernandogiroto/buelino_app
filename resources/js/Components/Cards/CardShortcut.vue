<template>
    <Link :href="route(url)" class="card card-sm card-link card-link-pop">
        <div class="card-body">
        <div class="row align-items-center">
            <div class="col-auto">
                <slot></slot>
            </div>
            <div class="col">
            <div class="font-weight-medium">
                {{ title }}
            </div>
            <div class="text-secondary">
                {{subtitle}}
            </div>
            </div>
        </div>
        </div>
    </Link>
</template>

<script setup>
    const props =  defineProps({
        url: {default: 'dashboard'},
        title: {default: 'title'},
        subtitle: {default: 'Subtitle'},
    });
    import { Link } from '@inertiajs/vue3';
</script>
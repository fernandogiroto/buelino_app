<template>
    <div class="row g-3 align-items-center">
        <AnimatedPlaceholder></AnimatedPlaceholder>
        <a href="#" class="col-auto">
            <span class="avatar" :style="`background-image: url('https://i.pravatar.cc/150?img=1')`">
                <span class="badge"></span>
            </span>
        </a>
        <div class="col text-truncate">
            <a href="#" class="text-reset d-block text-truncate">teste</a>
            <div class="text-secondary text-truncate mt-n1">teste</div>
        </div>
    </div>
</template>

<script setup>
import AnimatedPlaceholder from "../Common/Placeholder.vue";
</script>
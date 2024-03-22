<template>
    <div class="card-icon card card-link card-link-pop">
        <slot name="icon" /> 
        <span class="text-white">{{title}}</span>
    </div>
</template>

<script setup>

const props =  defineProps({
    title: {
        type: String,
        default: ''
    },
    background: {
        type: String,
        default: '#c5c5c5'
    },
});
</script>

<style>
.card-icon {
    gap: 7px;
    flex-direction: column;
    border: 2px solid;
    outline: white;
    background-color: v-bind('background');
    align-items: center;
    justify-content: center;
    padding: 25px;
    border-radius: 10px;
    display: flex;
    outline-style: solid;
    font-weight: 800;
    font-size: 17px;
}

</style>
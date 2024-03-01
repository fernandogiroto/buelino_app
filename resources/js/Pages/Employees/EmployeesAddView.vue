<template>
    <Head title="Adicionar Funcionário"/>
    <Content>
        <template #section>
            <Section title="Adicionar Funcionário" subtitle="Lar Estância">
            </Section>
        </template>
        <FormEmployee />
    </Content>
</template>


<script setup>
import Section from '@/Components/Common/Section.vue';
import FormEmployee from '@/Components/Forms/FormEmployee.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
</script>

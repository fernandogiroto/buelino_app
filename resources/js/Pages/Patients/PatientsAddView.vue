<template>
    <Head title="Adicionar Paciente"/>
    <Content>
        <template #section>
            <Section title="Adicionar Paciente" subtitle="Lar Estância">
            </Section>
        </template>
        <FormPatient />
    </Content>
</template>


<script setup>
import Section from '@/Components/Common/Section.vue';
import FormPatient from '@/Components/Forms/FormPatient.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
</script>

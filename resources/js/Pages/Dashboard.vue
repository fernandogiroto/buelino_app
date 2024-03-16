<template>
    <Head title="Dashboard"/>
    <Content>
         <!-- SECTION INTRO -->
        <template #section>
            <Section title="Dashboard" subtitle="Lar Estância">
                <template #buttons>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block">
                        <IconPlus />
                        Registrar Atividade
                    </a>
                </template>
            </Section>
        </template>
        <div class="row row-cards">
             <!-- BANNER -->
            <div class="col-lg-6 d-none d-lg-block">
                <CardBanner>
                    <template #title>
                        Olá {{ user.name }}
                    </template>
                    <template #content>
                        Faça aqui a gestão de atividades e pessoas do e tenha os documentos e registos sempre actualizados.
                    </template>
                    <template #action>
                        <a href="#" target="_blank" rel="noopener" class="btn btn-primary mt-2">Registros de Atividades</a>
                    </template>
                </CardBanner>
            </div>
            <div class="col-3">
                <Calendar />

            </div>
            <!-- EMPLOYEES LIST -->
            <div class="col-3">
                <CardEmployeesList></CardEmployeesList>
            </div>
            <!-- SHORTCUT CARDS -->
            <div class="col-sm-6 col-lg-3">
                <CardShortcut url="dashboard" title="Relatório Diário" subtitle="Passagem de turno">
                    <div class="col-auto">
                            <span class="bg-primary text-white avatar">
                                <IconReport />
                            </span>
                        </div>
                </CardShortcut>
            </div>
            <div class="col-sm-6 col-lg-3">
                <CardShortcut url="dashboard" title="Registro de Visitas" subtitle="Gestão de Entradas">
                    <div class="col-auto">
                            <span class="bg-cyan text-white avatar">
                                <IconUsers />
                            </span>
                        </div>
                </CardShortcut>
            </div>
            <div class="col-sm-6 col-lg-3">
                <CardShortcut url="dashboard" title="Cardápio Mensal" subtitle="Lista de Refeições">
                    <div class="col-auto">
                        <span class="bg-yellow  text-white avatar">
                            <IconToolsKitchen2 />
                        </span>
                    </div>
                </CardShortcut>
            </div>
            <div class="col-sm-6 col-lg-3">
                <CardShortcut url="dashboard" title="Gestão de Estoque" subtitle="Lista por paciente">
                    <div class="col-auto">
                        <span class="bg-facebook text-white avatar">
                            <IconWashDryDip />
                        </span>
                    </div>
                </CardShortcut>
            </div>
            <!-- LAST ACTIVITIES -->
            <div class="col-6">
                <CardActivitiesList></CardActivitiesList>
            </div>
            <!-- TASK LIST -->
            <div class="col-6">
                <CardTaskList></CardTaskList>
            </div>
        </div>
    </Content>
</template>

<script setup>
import CardActivitiesList from '@/Components/Cards/CardActivitiesList.vue';
import CardBanner from '@/Components/Cards/CardBanner.vue';
import CardEmployeesList from '@/Components/Cards/CardEmployeesList.vue';
import CardShortcut from '@/Components/Cards/CardShortcut.vue';
import CardTaskList from '@/Components/Cards/CardTaskList.vue';
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';


import { Head, usePage } from '@inertiajs/vue3';
import { IconPlus, IconReport, IconToolsKitchen2, IconUsers, IconWashDryDip } from '@tabler/icons-vue';
import { Calendar } from 'v-calendar';
import 'v-calendar/style.css';

import { computed } from 'vue';
const page = usePage();
const user = computed(() => page.props.auth.user);
</script>

<style lang="scss">
</style>

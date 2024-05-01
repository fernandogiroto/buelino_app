<template>
    <Head title="Dashboard"/>
    <Content>
         <!-- SECTION INTRO -->
        <template #section>
            <Section title="Dashboard" subtitle="Lar Estância">
            </Section>
        </template>
        <div class="row row-cards">
             <!-- BANNER -->
            <div class="col-md-5 d-none d-md-block mb-2">
                <CardBanner>
                    <template #title>
                        Olá {{ user.name }}
                    </template>
                    <template #content>
                        Faça aqui a gestão de atividades e pessoas do e tenha os documentos e registos sempre actualizados.
                    </template>
                    <template #action>
                        <a href="#" target="_blank" rel="noopener" class="btn btn-primary mt-2">Relatório Diário</a>
                    </template>
                </CardBanner>
            </div>
             <!-- HOUSE INFORMATIONS -->
            <div class="col-3 mb-2 d-none d-md-block">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Sales</div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                      <div>Conversion rate</div>
                      <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          7% 
                        </span>
                      </div>
                    </div>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                        <span class="visually-hidden">75% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Sales</div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                      <div>Conversion rate</div>
                      <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          7%
                        </span>
                      </div>
                    </div>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                        <span class="visually-hidden">75% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-3 mb-2 d-none d-md-block">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Sales</div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                      <div>Conversion rate</div>
                      <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          7%
                        </span>
                      </div>
                    </div>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                        <span class="visually-hidden">75% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Sales</div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                      <div>Conversion rate</div>
                      <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          7% 
                        </span>
                      </div>
                    </div>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                        <span class="visually-hidden">75% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- ICONS ACTIONS -->
            <div class="col-1 mb-2 d-none d-md-block">
                <div class="d-flex flex-column justify-content-between h-100 ">
                    <Link href="/" class="bg-danger text-white avatar w-100 cursor-pointer p-4 card-link-pop">
                        <IconAlertTriangle />
                    </Link>
                    <Link href="/" class="bg-cyan text-white avatar w-100 cursor-pointer p-4 card-link-pop">
                        <IconUsers />
                    </Link>
                    <Link href="/" class="bg-rss text-white avatar w-100 cursor-pointer p-4 card-link-pop">
                        <IconHeartRateMonitor />
                    </Link>

                    <Link href="/" class="bg-lime text-white avatar w-100 cursor-pointer p-4 card-link-pop">
                        <IconPig />
                    </Link>
                </div>            
            </div>
            <!-- SHORTCUT CARDS -->
            <div class="col-sm-6 col-lg-3 mb-2">
                <CardShortcut url="dashboard" title="Relatório Diário" subtitle="Registros de Turnos">
                    <div class="col-auto">
                            <span class="bg-primary text-white avatar">
                                <IconReport />
                            </span>
                        </div>
                </CardShortcut>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2 d-block d-md-none">
                <CardShortcut url="dashboard" title="Relatório Financeiro" subtitle="Gestão Financeira">
                    <div class="col-auto">
                        <span class="bg-lime text-white avatar">
                            <IconPig />
                        </span>
                    </div>
                </CardShortcut>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2">
                <CardShortcut url="dashboard" title="Registro de Visitas" subtitle="Gestão de Entradas">
                    <div class="col-auto">
                            <span class="bg-cyan text-white avatar">
                                <IconUsers />
                            </span>
                        </div>
                </CardShortcut>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2">
                <CardShortcut url="dashboard" title="Cardápio Mensal" subtitle="Lista de Refeições">
                    <div class="col-auto">
                        <span class="bg-yellow  text-white avatar">
                            <IconToolsKitchen2 />
                        </span>
                    </div>
                </CardShortcut>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2">
                <CardShortcut url="dashboard" title="Gestão de Estoque" subtitle="Estoque do Lar">
                    <div class="col-auto">
                        <span class="bg-facebook text-white avatar">
                            <IconWashDryDip />
                        </span>
                    </div>
                </CardShortcut>
            </div>
            <!-- LAST ACTIVITIES -->
            <div class="col-12 col-md-6 mt-3 mb-md-0">
                <CardActivitiesList></CardActivitiesList>
            </div>
            <!-- INVENTORY LIST -->
            <div class="col-12 col-lg-3 d-none d-md-block">
                <CardInventory height="18rem"></CardInventory>
            </div>
            <!-- EMPLOYEES LIST -->
            <div class="col-12 col-md-3 mb-2 mb-md-0 d-none d-md-block">
                <CardEmployeesList height="18rem"></CardEmployeesList>
            </div>
        </div>
    </Content>
</template>

<script setup>
import CardActivitiesList from '@/Components/Cards/CardActivitiesList.vue';
import CardBanner from '@/Components/Cards/CardBanner.vue';
import CardEmployeesList from '@/Components/Cards/CardEmployeesList.vue';
import CardInventory from '@/Components/Cards/CardInventory.vue';
import CardShortcut from '@/Components/Cards/CardShortcut.vue';

import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { IconAlertTriangle, IconHeartRateMonitor, IconPig, IconReport, IconToolsKitchen2, IconUsers, IconWashDryDip } from '@tabler/icons-vue';


import { computed } from 'vue';
const page = usePage();
const user = computed(() => page.props.auth.user);
</script>

<style lang="scss">
</style>

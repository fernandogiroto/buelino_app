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
                        <span class="text-justify">Faça aqui a gestão de atividades e tenha os documentos e registos sempre actualizados.</span>
                    </template>
                    <template #action>
                        <a href="#" target="_blank" rel="noopener" class="btn btn-primary mt-2">Relatório Diário</a>
                    </template>
                </CardBanner>
            </div>
             <!-- HOUSE INFORMATIONS -->
            <div class="col-3 mb-2 d-none d-md-block">
              <div class="d-flex flex-column justify-content-between h-100">
                <CardInformation 
                  :icon="'money_gain'"
                  :title="'Recebimentos do mês'"
                  :subtitle="'R$ 200,00'"
                  :title_2="'Recebimentos em atraso'"
                  :subtitle_2="'R$ 150,00'"/>
                <CardInformation 
                  :icon="'money_loss'"
                  :title="'Pagamentos do mês'"
                  :subtitle="'R$ 200,00'"
                  :title_2="'Pagamentos em atraso'"
                  :subtitle_2="'R$ 150,00'"/>
              </div>
            </div>
            <div class="col-3 mb-2 d-none d-md-block">
              <div class="d-flex flex-column justify-content-between h-100">
                <CardInformation 
                  :icon="'patient'"                   
                  :title="'Pacientes Ativos'"
                  :subtitle="'15 Pacientes'"
                  :title_2="'Pacientes em baixa'"
                  :subtitle_2="'05 Pacientes'"/>
                <CardInformation 
                  :icon="'employee'"                   
                  :title="'Funcionários Ativos'"
                  :subtitle="'10 Enfermeiros'"
                  :title_2="'Funcionários Ausentes'"
                  :subtitle_2="'02 Enfermeiros'"/>
              </div>
            </div>
            <!-- ICONS ACTIONS -->
            <div class="col-1 mb-2 d-none d-md-block">
                <div class="d-flex flex-column justify-content-between h-100 gap-1">
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
            <div class="col-sm-6 col-lg-3 mb-2 d-lg-none">
                <CardShortcut url="dashboard" title="Registrar Ocorrência" subtitle="Alertas e Emergência">
                    <div class="col-auto">
                        <span class="bg-danger text-white avatar">
                          <IconAlertTriangle />
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
import CardInformation from '@/Components/Cards/CardInformation.vue';
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

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
            <!-- EMPLOYEES LIST -->
            <div class="col-3"></div>
            <div class="col-3">
                <CardEmployeesList></CardEmployeesList>
            </div>
            <!-- SHORTCUT CARDS -->
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                        <span class="bg-primary text-white avatar">
                            <IconReport />
                        </span>
                        </div>
                        <div class="col">
                        <div class="font-weight-medium">
                            Relatório Diário
                        </div>
                        <div class="text-secondary">
                            Passagem de turno
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                        <span class="bg-cyan text-white avatar">
                            <IconUsers />
                        </span>
                        </div>
                        <div class="col">
                        <div class="font-weight-medium">
                            Registro de Visitas
                        </div>
                        <div class="text-secondary">
                            Gestão de Entradas
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                        <span class="bg-yellow  text-white avatar">
                            <IconToolsKitchen2 />
                        </span>
                        </div>
                        <div class="col">
                        <div class="font-weight-medium">
                            Cardápio Mensal
                        </div>
                        <div class="text-secondary">
                        Lista de Refeições
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                        <span class="bg-facebook text-white avatar">
                            <IconWashDryDip />
                        </span>
                        </div>
                        <div class="col">
                        <div class="font-weight-medium">
                            Gestão de Estoque
                        </div>
                        <div class="text-secondary">
                            Lista por paciente
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- LAST ACTIVITIES -->
            <div class="col-6">
                <div class="card" style="height: 18rem">
                    <div class="card-header justify-content-between">
                        <h3 class="card-title">Últimas Atividades</h3>
                        <a href="#" class="btn btn-ghost-primary">Ver Mais</a>
                    </div>
                    <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                    <div class="divide-y">
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar">JL</span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                            </div>
                            <div class="text-secondary">yesterday</div>
                            </div>
                            <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                            <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Dunn Slane</strong> posted <strong>"Well, what do you want?"</strong>.
                            </div>
                            <div class="text-secondary">today</div>
                            </div>
                            <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Emmy Levet</strong> created a new project <strong>Morning alarm clock</strong>.
                            </div>
                            <div class="text-secondary">4 days ago</div>
                            </div>
                            <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Maryjo Lebarree</strong> liked your photo.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar">EP</span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Egan Poetz</strong> registered new client as <strong>Trilia</strong>.
                            </div>
                            <div class="text-secondary">yesterday</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen Pineapple Apple Pen</strong>.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/003f.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Christabel Charlwood</strong> created a new project for <strong>Wikibox</strong>.
                            </div>
                            <div class="text-secondary">4 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar">HS</span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Haskel Shelper</strong> change status of <strong>Tabler Icons</strong> from <strong>open</strong> to <strong>closed</strong>.
                            </div>
                            <div class="text-secondary">today</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
                            </div>
                            <div class="text-secondary">yesterday</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Leesa Beaty</strong> posted new video.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/007m.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Perren Keemar</strong> and 3 others followed you.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar">SA</span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Sunny Airey</strong> upload 3 new photos to category <strong>Inspirations</strong>.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/009m.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/010m.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Thatcher Keel</strong> created a profile.
                            </div>
                            <div class="text-secondary">3 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/005f.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI Birthday</strong>.
                            </div>
                            <div class="text-secondary">4 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/006f.jpg)"></span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of 2020</strong>.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="row">
                            <div class="col-auto">
                            <span class="avatar">AA</span>
                            </div>
                            <div class="col">
                            <div class="text-truncate">
                                <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda Blake</strong>.
                            </div>
                            <div class="text-secondary">2 days ago</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-6">
                <CardActivitiesList></CardActivitiesList>
            </div>   -->
            <!-- TASK LIST -->
            <div class="col-6">
                <CardTaskList></CardTaskList>
            </div>

        </div>
    </Content>
</template>

<script setup>
import CardBanner from '@/Components/Cards/CardBanner.vue';
import CardEmployeesList from '@/Components/Cards/CardEmployeesList.vue';
import CardTaskList from '@/Components/Cards/CardTaskList.vue';
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';

import { Head, usePage } from '@inertiajs/vue3';
import { IconPlus, IconReport, IconToolsKitchen2, IconUsers, IconWashDryDip } from '@tabler/icons-vue';

import { computed } from 'vue';
const page = usePage();
const user = computed(() => page.props.auth.user);
</script>

<style lang="scss">
</style>

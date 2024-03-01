<template>
    <Head title="Dashboard"/>
    <Content>
        <template #section>
            <Section title="Dashboard" subtitle="Lar Estância">
                <template #buttons>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                        <IconPlus />
                        Registrar Atividade
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Registrar Atividade">
                        <IconPlus />
                    </a>
                </template>
            </Section>
        </template>
        <div class="row row-cards">
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
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Funcionários Ativos</h3>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-6" v-for="employee in employees" :key="employee">
                                <div class="row g-3 align-items-center">
                                    <a href="#" class="col-auto">
                                        <span class="avatar" :style="`background-image: url('https://i.pravatar.cc/150?img=${employee.id}')`">
                                            <span class="badge" :class="employee.status"></span>
                                        </span>
                                    </a>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-reset d-block text-truncate">{{ employee.name }}</a>
                                        <div class="text-secondary text-truncate mt-n1">{{ employee.role }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LAST ACTIVITIES -->
            <div class="col-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Últimas Atividades</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th>Atividade</th>
                          <th>Utente</th>
                          <th>Enfermeiro</th>
                          <th>Horário</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="text-secondary">Medicação</span></td>
                          <td>João Gomes</td>
                          <td>Fernando Giroto</td>
                          <td>29/02 - 14:40</td>
                        </tr>
                        <tr>
                          <td><span class="text-secondary">Banho</span></td>
                          <td>Maria Fernandes</td>
                          <td>Ana Tavares</td>
                          <td>29/02 - 11:30</td>
                        </tr>
                        <tr>
                          <td><span class="text-secondary">Passeio</span></td>
                          <td>Paulo Reis</td>
                          <td>Fernando Giroto</td>
                          <td>29/02 - 10:00</td>
                        </tr>
                        <tr>
                          <td><span class="text-secondary">Medicação</span></td>
                          <td>Ricardo Pereira</td>
                          <td>Beatriz Gonçalves</td>
                          <td>29/02 - 14:20</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">Mostrando <span>1</span> a <span>8</span> de <span>16</span> pacientes</p>
                    <ul class="pagination m-0 ms-auto">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <!-- <IconChevronLeft  size="15"/> Anterior -->
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                            <!-- <IconChevronRight  size="15"/> Próximo -->
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>  
            <!-- TASK LIST -->
            <div class="col-6">
                <div class="card">
                    <div class="card-status-top bg-primary"></div>
                  <div class="card-header justify-content-between">
                    <h3 class="card-title">Tarefas</h3> <a href="#" class="btn btn-outline-primary active">
                          Adicionar Tarefa
                        </a>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                      <tbody>
                        <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Extend the data model.</a>
                        </td>
                        <td class="text-nowrap text-secondary">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                          August 05, 2021
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                            2/7
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                            3</a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(@/Assets/Img/perfil.png)"></span>
                        </td>
                      </tr>
                    </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </Content>
</template>

<script setup>
import CardBanner from '@/Components/Cards/CardBanner.vue';
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';

import { Head, usePage } from '@inertiajs/vue3';
import { IconPlus } from '@tabler/icons-vue';
import { computed } from 'vue';
const page = usePage();
const user = computed(() => page.props.auth.user);
const employees  = [
    { id:'1',name: 'João Ferreira', status: 'bg-green' , role:'Enfermeiro' },
    { id:'9',name: 'Maria Silva', status: 'bg-warning' ,role:'Psicóloga'},
    { id:'3 ',name: 'Pedro Santos', status: 'bg-green' ,role:'Gestor'},
    { id:'4',name: 'Gustavo Barbosa', status: 'bg-warning' , role:'Enfermeiro' },
    { id:'5',name: 'Beatriz Fernandes', status: 'bg-danger' ,role:'Enfermeira'},
    { id:'6 ',name: 'Pedro Santos', status: 'bg-green' ,role:'Gestor'},
    { id:'7',name: 'José Ricardo', status: 'bg-green' , role:'Enfermeiro' },
    { id:'8',name: 'Inês Lima', status: 'bg-danger' ,role:'Enfermeira'},
];
</script>

<style lang="scss">
</style>

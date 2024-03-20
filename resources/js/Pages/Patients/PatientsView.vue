<template>
    <Head title="Pacientes"/>
    <Content>
      <template #section>
        <Section title="Lista de Pacientes" subtitle="Lar Estância">
        </Section>
      </template>
      <!-- PATIENTS DESKTOP -->
      <template class="d-none d-md-block">
        <div class="row row-deck row-cards">
          <div class="col-12">
              <div class="card">
                <div class="card-header justify-content-between">
                  <h3 class="card-title">Pacientes</h3>
                  <div class="col-2 d-none d-xxl-block">
                      <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                          <form action="./" method="get" autocomplete="off" novalidate="">
                              <div class="input-icon">
                                  <span class="input-icon-addon">
                                      <IconSearch size="18" />
                                  </span>
                                  <input type="text" class="form-control" placeholder="Pesquisar Paciente" aria-label="Pesquisar Paciente">
                              </div>
                          </form>
                      </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                      <tr>
                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                        <th class="w-1">Id.
                          <IconChevronUp size="15" />
                        </th>
                        <th></th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Idade</th>
                        <th>Responsável</th>
                        <th>Entrada</th>
                        <th>Saída</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="patient in patients.data" :key="patient">
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-secondary">{{ patient.id }}</span></td>
                        <td><img class="avatar avatar-sm"  :style="{ 'background-image': 'url(https://i.pravatar.cc/150?img=' + patient.id + ')' }"></td>
                        <td><Link :href="`/patient/${patient.id}`" class="text-dark">{{ patient.name }} {{ patient.surname }}</Link></td>
                        <td>{{ patient.phone }}</td>
                        <td>{{ patient.email }}</td>
                        <td>{{ calculateAge(patient.birthday) }} anos</td>
                        <td>{{ patient.responsible }}</td>
                        <td>{{ patient.entry_date }}</td>
                        <td>{{ patient.leaving_date ?? '-' }}</td>
                        <td class="text-end">
                            <IconTrash />
                            <IconEdit />
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                  <p class="m-0 text-secondary">Mostrando <span>1</span> a <span>8</span> de <span>16</span> pacientes</p>
                  <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <IconChevronLeft  size="15"/> Anterior
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">
                          <IconChevronRight  size="15"/> Próximo
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>  
      </template>
      <!-- PATIENTS MOBILE -->
      <template class="d-block d-md-none">
        <div class="mb-3">
          <Section title="Lista de Pacientes" subtitle="Lar Estância" />
        </div>
        <form action="./" method="get" autocomplete="off" novalidate="" class="my-3 d-block d-md-none">
            <div class="input-icon">
                <span class="input-icon-addon">
                    <IconSearch size="18" />
                </span>
                <input type="text" class="form-control py-3" placeholder="Pesquisar Paciente" aria-label="Pesquisar Paciente">
            </div>
        </form>
        <div v-for="patient in patients.data" :key="patient">
          <Link class="card card-sm mb-2" :href="`/patient/${patient.id}`">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                    <div class="col-auto">
                    <img class="avatar" :style="{ 'background-image': 'url(https://i.pravatar.cc/150?img=' + patient.id + ')' }">
                    </div>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                      <span><strong>{{ patient.name }} {{ patient.surname }}</strong></span>
                  </div>
                  <div class="text-secondary">
                      <div class="text-secondary">{{ calculateAge(patient.birthday) }} anos</div>
                  </div>
                </div>
              </div>
            </div>
          </Link>
        </div>
      </template>
    </Content>
</template>

<script setup>
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head, Link } from '@inertiajs/vue3';
import { IconChevronLeft, IconChevronRight, IconChevronUp, IconEdit, IconSearch, IconTrash } from '@tabler/icons-vue';

const props = defineProps({patients: null})


</script>
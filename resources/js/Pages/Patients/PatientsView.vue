<template>
    <Head title="Pacientes"/>
    <Content>
      <template #section>
        <Section title="Lista de Pacientes" subtitle="Lar Estância">
        </Section>
      </template>
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
                        <td><img class="avatar avatar-sm" src="@/Assets/Img/perfil.png"></td>
                        <td>{{ patient.name }} {{ patient.surname }}</td>
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
    </Content>
</template>

<script setup>
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
import { IconChevronLeft, IconChevronRight, IconChevronUp, IconEdit, IconSearch, IconTrash } from '@tabler/icons-vue';

const props = defineProps({patients: null})

function calculateAge(birthday) {
        const today = new Date();
        const birthDate = new Date(birthday);
        let age = today.getFullYear() - birthDate.getFullYear();
        const month = today.getMonth() - birthDate.getMonth();
        if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }
</script>
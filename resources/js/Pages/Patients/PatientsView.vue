<template>
    <Head title="Pacientes"/>
    <Content>
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Funcionários</h3>
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
                          <td>{{ patient.name }}</td>
                          <td>{{ patient.phone }}</td>
                          <td>info@fernandogiroto.com</td>
                          <td>33 anos</td>
                          <td>{{ patient.responsible }}</td>
                          <td>{{ patient.entry_date }}</td>
                          <td>{{ patient.leaving_date }}</td>
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
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
import { IconChevronLeft, IconChevronRight, IconChevronUp, IconEdit, IconTrash } from '@tabler/icons-vue';

const props = defineProps({patients: null})
</script>
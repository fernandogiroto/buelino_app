<template>
    <Head title="Funcionários"/>
    <Content>
      <template #section>
        <Section title="Lista de Funcionários" subtitle="Lar Estância">
        </Section>
      </template>
      <div class="row row-deck row-cards">
          <div class="col-12">
              <div class="card">
                <div class="card-header justify-content-between">
                  <h3 class="card-title">Funcionários</h3>
                  <div class="col-2 d-none d-xxl-block">
                      <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                          <form action="./" method="get" autocomplete="off" novalidate="">
                              <div class="input-icon">
                                  <span class="input-icon-addon">
                                      <IconSearch size="18" />
                                  </span>
                                  <input type="text" class="form-control" placeholder="Pesquisar Funcionário" aria-label="Pesquisar Funcionário">
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
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cargo</th>
                        <th>Entrada</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="employee in employees.data" :key="employee">
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-secondary">{{ employee.id }}</span></td>
                        <td><img class="avatar avatar-sm" src="@/Assets/Img/perfil.png"></td>
                        <td>{{ employee.user.name }}</td>
                        <td>{{ employee.user.email }}</td>
                        <td>{{ employee.user.phone }}</td>
                        <td>{{ employee.role }}</td>
                        <td>{{ formatDate(employee.user.created_at) }}</td>
                        <td class="text-end">
                            <div class="btn-list flex-nowrap justify-content-end">
                              <a href="#" class="btn">
                                Editar
                              </a>
                              <div class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                  Ações
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">
                                    Deslogar
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    Excluir
                                  </a>
                                </div>
                              </div>
                            </div>
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
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
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
import { IconChevronLeft, IconChevronRight, IconChevronUp, IconSearch } from '@tabler/icons-vue';

const props = defineProps({employees: null})
function formatDate(dateTime) {
  const formattedDate = new Date(dateTime).toLocaleDateString();
  return formattedDate;
}
</script>
<template>
    <Head title="Funcionários"/>
    <Content>
      <template #section>
        <Section title="Lista de Funcionários" subtitle="Lar Estância">
        </Section>
      </template>
      <!-- PATIENTS DESKTOP -->
      <template class="d-none d-md-block">
        <div class="row row-deck row-cards">
          <div class="col-md-6 col-lg-3" v-for="employee in employees.data" :key="employee">
              <div class="card">
                <div class="card-body p-4 text-center">
                  <span class="avatar avatar-xl mb-3 rounded" :style="{ 'background-image': `url('/images/users/${employee.id}.jpeg')` }"></span>
                  <h3 class="m-0 mb-1"><a href="#">{{ employee.user.name }}</a></h3>
                  <div class="mt-1">
                    <span :class="[ 'badge',
                        employee.role === 'Diretor' ? 'bg-blue' : '',
                        employee.role === 'Gestor' ? 'bg-azure' : '',
                        employee.role === 'Psicóloga' ? 'bg-purple' : '',
                        employee.role === 'Enfermeiro' ? 'bg-teal' : '',
                    ]">
                        {{ employee.role }}
                    </span>
                  </div>
                </div>
                <div class="d-flex">
                  <a class="card-btn" :href="`/patient/${employee.user.id}`">
                      <IconSquareRoundedPlus size="18"/><span class="ms-1">Ver Mais</span>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </template>
      <!-- PATIENTS MOBILE -->
      <template class="d-block d-md-none">
        <div class="mb-3">
          <Section title="Lista de Funcionários 22" subtitle="Lar Estância" />
        </div>
        <div v-for="employee in employees.data" :key="employee">
          <Link class="card card-sm mb-2" :href="`/patient/${employee.id}`">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                    <div class="col-auto">
                      <img class="avatar" :src="`/images/users/${employee.id}.jpeg`" />
                    </div>
                </div>
                <div class="col">
                  <div class="font-weight-medium mb-1">
                      <span><strong>{{employee.user.name }}</strong></span>
                  </div>
                  <div class="text-secondary">
                    <span :class="[ 'badge',
                      employee.role === 'Diretor' ? 'bg-blue' : '',
                      employee.role === 'Gestor' ? 'bg-azure' : '',
                      employee.role === 'Psicóloga' ? 'bg-purple' : '',
                      employee.role === 'Enfermeiro' ? 'bg-teal' : '',
                  ]">
                      {{ employee.role }}
                  </span>
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
import { IconSquareRoundedPlus } from '@tabler/icons-vue';

const props = defineProps({employees: null})
</script>
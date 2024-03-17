<template>
    <Head title="Funcionários"/>
    <Content>
      <template #section>
        <Section title="Lista de Funcionários" subtitle="Lar Estância">
        </Section>
      </template>
      <div class="row row-deck row-cards">
        <div class="col-md-6 col-lg-3" v-for="employee in employees.data" :key="employee">
                <div class="card">
                  <div class="card-body p-4 text-center">
                    <span class="avatar avatar-xl mb-3 rounded" :style="{ 'background-image': 'url(https://i.pravatar.cc/150?img=' + employee.id + ')' }"></span>
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
                    <a href="#" class="card-btn">
                      <IconSquareRoundedPlus size="18"/><span class="ms-1">Ver Mais</span>
                    </a>
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
import { IconSquareRoundedPlus } from '@tabler/icons-vue';

const props = defineProps({employees: null})
</script>
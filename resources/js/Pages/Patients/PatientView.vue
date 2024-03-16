<template>
    <Head title="Paciente"/>
    <Content>
      <template #section>
        <Section :title="'Paciente ' + patient.name + ' ' + patient.surname" subtitle="Lar Estância">
        </Section>
      </template>
      <div class="row g-3">

        <!-- ACTIVITIES -->
          <div class="col">
            <div class="col-4 mb-2">
              <VueDatePicker v-model="date" range  :enable-time-picker="false" />
            </div>
            <div class="card timeline-event-card mb-2" v-for="activity in activities" :key="activity">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" v-if="activity.service.name === 'Giving Medicine'"><IconPill size="18"/></span>
                    <span class="avatar" v-if="activity.service.name === 'Physiotherapy'"><IconPhysotherapist size="18"/></span>
                    <span class="avatar" v-if="activity.service.name === 'Leisure'"> <IconSunHigh size="18" /></span>
                    <span class="avatar" v-if="activity.service.name === 'Lunch'"> <IconApple size="18" /></span>
                  </div>
                  <div class="col">
                    <div class="text-secondary float-end">{{formatDate(activity.created_at,'/',includeYear=false)}} - {{formatTime(activity.created_at)}} horas</div>
                      <h4 class="mb-0" v-if="activity.service.name === 'Giving Medicine'"><strong>{{activity.employee.user.name}}</strong> deu remédio ao paciente <strong>{{ activity.patient.name }} {{ activity.patient.surname }}</strong></h4>
                      <h4 class="mb-0" v-if="activity.service.name === 'Physiotherapy'"><strong>{{activity.employee.user.name}}</strong> realizou um sessão de fisioterapia com o paciente <strong>{{ activity.patient.name }} {{ activity.patient.surname }}</strong></h4>
                      <h4 class="mb-0" v-if="activity.service.name === 'Leisure'"><strong>{{activity.employee.user.name}}</strong> criou jogos com o paciente <strong>{{ activity.patient.name }} {{ activity.patient.surname }}</strong></h4>
                      <h4 class="mb-0" v-if="activity.service.name === 'Lunch'"><strong>{{activity.employee.user.name}}</strong> deu almoço ao paciente <strong>{{ activity.patient.name }} {{ activity.patient.surname }}</strong><strong></strong></h4>
                      <p class="text-secondary mb-1">Ação registrada com sucesso.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- INFORMATIONS -->
          <div class="col-lg-4">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="img-responsive img-responsive-4x3 card-img-top patient-card-avatar"></div>
                  <div class="card-body">
                    <div class="card-title">Informações</div>
                    <div class="mb-2">
                      <IconUser size="18" class="text-secondary" />
                      Nome Completo: <strong>{{patient.name}} {{ patient.surname }}</strong>
                    </div>
                    <div class="mb-2">
                      <IconCake size="18" class="text-secondary" />
                      Idade: <strong>{{patient.birthday}}</strong>
                    </div>
                    <div class="mb-2">
                      <IconClockCheck size="18" class="text-secondary" />
                      Data de Entrada: <strong>{{patient.entry_date}}</strong>
                    </div>
                    <div class="mb-2">
                      <IconClockX size="18" class="text-secondary" />
                      Data de Saída: <strong>{{patient.leaving_date}}</strong>
                    </div>
                    <div class="mb-2">
                      <IconUserCheck size="18" class="text-secondary" />
                      Responsável: <strong>{{ patient.responsible }}</strong>
                    </div>
                    <div class="mb-2">
                      <IconPhone size="18" class="text-secondary" />
                      Telefone <strong>{{ patient.phone }}</strong>
                    </div>
                    <div class="mb-2">
                      <IconMail size="18" class="text-secondary" />
                      Email <strong>{{ patient.email }}</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Observações</h2>
                    <div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid beatae eaque eius
                        esse fugit, hic id illo itaque modi molestias nemo perferendis quae rerum soluta. Blanditiis
                        laborum minima molestiae molestias nemo nesciunt nisi pariatur quae sapiente ut. Aut consectetur
                        doloremque, error impedit, ipsum labore laboriosam minima non omnis perspiciatis possimus
                        praesentium provident quo recusandae suscipit tempore totam. {{ patient.description }}
                      </p>
                    </div>
                  </div>
                </div>
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
import { IconApple, IconCake, IconClockCheck, IconClockX, IconMail, IconPhone, IconPhysotherapist, IconPill, IconSunHigh, IconUser, IconUserCheck } from '@tabler/icons-vue';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import { onMounted, ref } from 'vue';
const props = defineProps({patient: null,activities:null})

const date = ref();
onMounted(() => {
  const startDate = new Date();
  const endDate = new Date(new Date().setDate(startDate.getDate() + 7));
  date.value = [startDate, endDate];
})

</script>

<style lang="scss">
.patient-card-avatar{
  background-image: url('@/Assets/Img/perfil.png');
}

</style>
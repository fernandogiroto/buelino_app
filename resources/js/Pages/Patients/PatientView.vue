<template>
    <Head title="Paciente"/>
    <Content>
      <template #section>
        <Section :title="'Paciente ' + patient.name + ' ' + patient.surname" subtitle="Lar Estância">
        </Section>
      </template>
      <div class="row g-3">
        <!-- INFORMATIONS -->
        <div class="col-12 col-lg-3">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card pb-3 " style="height: 29rem">
                <div class="img-responsive img-responsive-16x9 card-img-top" :style="{ 'background-image': 'url(https://i.pravatar.cc/150?img=' + patient.id + ')' }"></div>
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
            <div class="col-12 d-none d-lg-block">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Observações</h2>
                  <div>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid beatae eaque eius
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
        <!-- INVENTORY LIST MOBILE -->
        <div class="col-12 d-block d-lg-none">
          <CardInventory height="15rem"></CardInventory>
        </div>
        <!-- ACTIVITIES -->
        <div class="col-12 col-lg-6">
          <!-- DEKSTOP ACTIVITIES LIST -->
          <template class="d-none d-md-block">
            <div class="card" style="height: 29rem">
              <div class="card-header justify-content-between">
                  <h3 class="card-title">Atividades</h3>
                  <span><IconSettings size="20" /></span>
              </div>
              <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                  <div class="divide-y" v-for="(activity,index) in activities" :key="activity">
                      <div>
                          <div class="row">
                              <div class="col-auto">
                                  <span class="avatar" v-if="activity.service.name === 'Bathing'"><img src="@/Assets/Img/buelino_activities_bath.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Giving Medicine'"><img src="@/Assets/Img/buelino_activities_medice.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Physiotherapy'"><img src="@/Assets/Img/buelino_activities_physiotherapy.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Leisure'"><img src="@/Assets/Img/buelino_activities_Leisure.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Lunch'"><img  src="@/Assets/Img/buelino_activities_lunch.png" width="20px"></span>
                              </div>
                              <div class="col">
                                      <span v-if="activity.service.name === 'Bathing'"><strong>{{activity.employee.user.name}}</strong> deu banho ao paciente.</span>
                                      <span v-if="activity.service.name === 'Giving Medicine'"><strong>{{activity.employee.user.name}}</strong> deu remédio ao paciente.</span>
                                      <span v-if="activity.service.name === 'Physiotherapy'"><strong>{{activity.employee.user.name}}</strong> realizou um sessão de fisioterapia com o paciente.</span>
                                      <span v-if="activity.service.name === 'Leisure'"><strong>{{activity.employee.user.name}}</strong> criou jogos com o paciente.</span>
                                      <span v-if="activity.service.name === 'Lunch'"><strong>{{activity.employee.user.name}}</strong> deu almoço ao paciente.</span>
                                  <div class="text-secondary">{{formatDate(activity.created_at,'/',includeYear=false)}} - {{formatTime(activity.created_at)}}</div>
                              </div>
                          </div>
                      </div>
                      <div v-if="index !== activities.length - 1"></div>
                  </div>
              </div>
            </div>
          </template>
          <!-- MOBILE ACTIVITIES LIST -->
          <template class="d-block d-md-none">
              <div class="mb-3">
                  <Section title="Últimas Atividades" subtitle="Lista de Atividades" />
              </div>
              <div class="card card-sm mb-2" v-for="(activity,index) in activities" :key="activity">
                  <div class="card-body">
                      <div class="row align-items-center">
                          <div class="col-auto">
                              <div class="col-auto">
                                  <span class="avatar" v-if="activity.service.name === 'Bathing'"><img src="@/Assets/Img/buelino_activities_bath.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Giving Medicine'"><img src="@/Assets/Img/buelino_activities_medice.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Physiotherapy'"><img src="@/Assets/Img/buelino_activities_physiotherapy.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Leisure'"><img src="@/Assets/Img/buelino_activities_Leisure.png" width="20px"></span>
                                  <span class="avatar" v-if="activity.service.name === 'Lunch'"><img  src="@/Assets/Img/buelino_activities_lunch.png" width="20px"></span>
                              </div>
                          </div>
                          <div class="col">
                              <div class="font-weight-medium">
                                  <span v-if="activity.service.name === 'Bathing'"><strong>{{activity.employee.user.name}}</strong> deu banho ao paciente.</span>
                                  <span v-if="activity.service.name === 'Giving Medicine'"><strong>{{activity.employee.user.name}}</strong> deu remédio ao paciente.</span>
                                  <span v-if="activity.service.name === 'Physiotherapy'"><strong>{{activity.employee.user.name}}</strong> realizou um sessão de fisioterapia com o paciente.</span>
                                  <span v-if="activity.service.name === 'Leisure'"><strong>{{activity.employee.user.name}}</strong> criou jogos com o paciente.</span>
                                  <span v-if="activity.service.name === 'Lunch'"><strong>{{activity.employee.user.name}}</strong> deu almoço ao paciente.</span>
                              </div>
                              <div class="text-secondary">
                                  <div class="text-secondary">{{formatDate(activity.created_at,'/',includeYear=false)}} - {{formatTime(activity.created_at)}}</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </template>
        </div>
        <!-- INVENTORY LIST DESKTOP -->
        <div class="col-3 d-none d-lg-block">
          <CardInventory height="29rem"></CardInventory>
        </div>
      </div>
    </Content>
</template>

<script setup>
import CardInventory from '@/Components/Cards/CardInventory.vue';
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
import { IconCake, IconClockCheck, IconClockX, IconMail, IconPhone, IconSettings, IconUser, IconUserCheck } from '@tabler/icons-vue';
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
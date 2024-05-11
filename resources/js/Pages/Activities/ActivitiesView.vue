<template>
    <Head title="Atividades"/>
    <OffcanvasActivities></OffcanvasActivities>
    <Content>
      <template #section>
        <Section title="Lista de Atividades" subtitle="Lar Estância"></Section>
      </template>
      <!-- ACTIVITIES DESKTOP -->
      <template class="d-none d-md-block">
        <div class="row">
          <!-- FILTERS -->
          <div class="col-md-3">
            <div class="card sticky-top">     
              <form action="./" method="get" autocomplete="off" novalidate="" class="card-body">
                <form action="./" method="get" autocomplete="off" novalidate="" class="mb-3 mt-2">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                    </span>
                    <input type="text" value="" class="form-control" placeholder="Pesquisar Atividade" aria-label="Pesquisar Atividade">
                  </div>
                </form>
                <div class="mb-4">
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" name="form-type[]" value="1" checked="">
                    <span class="form-check-label">Realizados Hoje</span>
                  </label>
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" name="form-type[]" value="2" checked="">
                    <span class="form-check-label">Atividades Urgentes</span>
                  </label>
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" name="form-type[]" value="3">
                    <span class="form-check-label">Atividades da Direção</span>
                  </label>
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" name="form-type[]" value="4">
                    <span class="form-check-label">Controle / Inspeção</span>
                  </label>
                </div>

                <div class="form-label">Profissional</div>
                <div class="mb-4">
                  <label class="form-check">
                    <input type="radio" class="form-check-input" name="form-salary" value="1" checked>
                    <span class="form-check-label">Enfermeiro(a)</span>
                  </label>
                  <label class="form-check">
                    <input type="radio" class="form-check-input" name="form-salary" value="2">
                    <span class="form-check-label">Psicólogo(a)</span>
                  </label>
                  <label class="form-check">
                    <input type="radio" class="form-check-input" name="form-salary" value="3">
                    <span class="form-check-label">Auxiliar</span>
                  </label>
                  <label class="form-check">
                    <input type="radio" class="form-check-input" name="form-salary" value="3">
                    <span class="form-check-label">Gestor(a)</span>
                  </label>
                </div>
                <div class="mb-3">
                  <select class="form-select">
                    <option>Remédio</option>
                    <option>Banho</option>
                    <option>Lazer</option>
                    <option>Injeção</option>
                    <option>Refeição</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                  <thead>
                    <tr>
                      <th>Tipo</th>
                      <th>Profissional</th>
                      <th>Paciente</th>
                      <th>Data</th>
                      <th>Horário</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="activity in activities" :key="activity">
                      <td>
                        <img src="@/Assets/Img/buelino_activities_lunch.png" width="20px"  v-if="activity.service.name === 'Lunch'">
                        <img src="@/Assets/Img/buelino_activities_medice.png" width="20px"  v-if="activity.service.name === 'Giving Medicine'">
                        <img src="@/Assets/Img/buelino_activities_physiotherapy.png" width="20px"  v-if="activity.service.name === 'Physiotherapy'">
                        <img src="@/Assets/Img/buelino_activities_Leisure.png" width="20px"  v-if="activity.service.name === 'Leisure'">
                        {{activity.service.name}}
                      </td>
                      <td><a href="#" class="text-reset" tabindex="-1">{{ activity.employee.user.name }}</a></td>
                      <td>
                        <a href="#" class="d-flex align-items-center text-reset" tabindex="-1">
                          <img class="avatar avatar-sm me-2" :src="`/images/patients/${activity.patient.id}.jpeg`" />
                          <span>{{ activity.patient.name }} {{ activity.patient.surname }}</span>
                        </a>
                      </td>
                      <td>{{formatDate(activity.created_at)}}</td>
                      <td>{{formatTime(activity.created_at)}}</td>
                      <td class="text-end">
                        <IconEdit />
                        <IconTrash />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-secondary">Mostrando <span>1</span> a <span>8</span> de <span>16</span> Atividades</p>
                <ul class="pagination m-0 ms-auto">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                      Anterior
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      Próximo 
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>  
        </div>
      </template>
      <!-- ACTIVITIES MOBILE -->
      <template class="d-block d-md-none"> 
        <div class="mb-3">
          <Section title="Atividades" subtitle="Lista de Atividades">
            <template #buttons>
              <span class="pt-1"><strong>{{dateActitivy}} </strong> </span><IconCalendarCog />
              <a class="text-dark" data-bs-toggle="offcanvas" href="#offcanvasActivityFilter" role="button" aria-controls="offcanvasActivityFilter">
                  <IconSettings size="25" />
                </a>
              </template>
          </Section> 
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
                            <span v-if="activity.service.name === 'Bathing'"><strong>{{activity.employee.user.name}}</strong> deu banho ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            <span v-if="activity.service.name === 'Giving Medicine'"><strong>{{activity.employee.user.name}}</strong> deu remédio ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            <span v-if="activity.service.name === 'Physiotherapy'"><strong>{{activity.employee.user.name}}</strong> realizou um sessão de fisioterapia com o paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            <span v-if="activity.service.name === 'Leisure'"><strong>{{activity.employee.user.name}}</strong> criou jogos com o paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            <span v-if="activity.service.name === 'Lunch'"><strong>{{activity.employee.user.name}}</strong> deu almoço ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                        </div>
                        <div class="text-secondary">
                            <div class="text-secondary">{{formatDate(activity.created_at,'/',includeYear=false)}} - {{formatTime(activity.created_at)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </template>
    </Content>
</template>

<script setup>
import Section from '@/Components/Common/Section.vue';
import OffcanvasActivities from '@/Components/Offcanvas/OffcanvasActivities.vue';
import Content from '@/Layouts/Content.vue';
import { Head, Link } from '@inertiajs/vue3';
import { IconCalendarCog, IconEdit, IconSettings, IconTrash } from '@tabler/icons-vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';
const props = defineProps({activities: null})
let dateActitivy = ref('');

const activities = ref(null)
const getActivities = () => {
    axios.get('/activities/list')
    .then( res => activities.value  = res.data)
    .catch(error => console.log(error))
}

function activityHourDate() {
  const now = new Date();
  const day = now.getDate();
  const mouth = now.getMonth() + 1;
  const year = now.getFullYear();
  const decimalMouth = mouth < 10 ? `0${mouth}` : mouth;
  dateActitivy.value =`${day}/${decimalMouth}/${year}`;
}

onMounted(()=> {
  getActivities();
  activityHourDate();
})
</script>
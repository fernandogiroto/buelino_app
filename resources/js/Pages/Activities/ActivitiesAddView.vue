<template>
    <Head title="Atividades"/>
    <Content>
      <template #section>
        <Section title="Adicionar Atividade" subtitle="Lar Estância"></Section>
      </template>
      <!-- ACTIVITIES DESKTOP -->
      <template class="d-none d-md-block">
      </template>
      <!-- ACTIVITIES MOBILE -->
      <template class="d-block d-md-none">
        <template v-if="!showActivities">
          <div class="card flex-row gap-2 p-2 mb-3 bg-transparent border-0 shadow-none">
            <div class="card-activity-background"> 
              <img src="@/Assets/Img/buelino_activities_bath.png" width="30px"> 
            </div>
            <div class="d-flex flex-column justify-content-center">
              <span class="lh-1">Atividade</span>
              <span class="strong">Dar Banho</span>
            </div>
          </div>
          <div class="input-icon">
            <span class="input-icon-addon">
                <IconSearch size="18" />
            </span>
            <vue3-simple-typeahead
                id="typeahead_id"
                placeholder="Pesquisar Paciente"
                :items="patientNames"
                :minInputLength="1"
                @onInput="onInputEventHandler"
                @selectItem="selectItemEventHandler"
                class="py-2"
            />
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <VueDatePicker v-model="form.birthday" :enable-time-picker="false"></VueDatePicker>
            </div>
            <div class="col-6">
              <div class="input-icon mb-3">
                <span class="input-icon-addon">
                  <IconClock size="20"></IconClock>
                </span>
                <input type="text" value="" class="form-control" placeholder="21:00">
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-primary w-100 py-2 mt-2">Adicionar Atividade</a>
        </template>
        <template v-if="showActivities">
          <div class="mb-3">  
            <Section title="Adicionar Atividade" subtitle="Lar Estância"></Section> 
          </div>
          <div class="row g-3">
            <div class="col-6">
              <CardIcon title="Dar Remédio" background="#84A59D">
                <template #icon>
                  <img src="@/Assets/Img/buelino_activities_medice.png" width="45px">
                </template>
              </CardIcon>
            </div>
            <div class="col-6">
              <CardIcon title="Dar Comida" background="#F8D800">
                <template #icon>
                  <img src="@/Assets/Img/buelino_activities_lunch.png" width="45px">
                </template>
              </CardIcon>
            </div>
            <div class="col-6">
              <CardIcon title="Dar Banho" background="#F5CAC3" @click="choseActivity('bath')">
                <template #icon>
                  <img src="@/Assets/Img/buelino_activities_bath.png" width="45px">
                </template>
              </CardIcon>
            </div>
            <div class="col-6">
              <CardIcon title="Lazer" background="#A2D2FF">
                <template #icon>
                  <img src="@/Assets/Img/buelino_activities_Leisure.png" width="45px">
                </template>
              </CardIcon>
            </div>
            <div class="col-6">
              <CardIcon title="Fisioterapia" background="#2A9D8F">
                <template #icon>
                  <img src="@/Assets/Img/buelino_activities_physiotherapy.png" width="45px">
                </template>
              </CardIcon>
            </div>
            <div class="col-6">
              <CardIcon title="Limpeza" background="#264653">
                <template #icon>
                  <img src="@/Assets/Img/buelino_avatar_broom.png" width="45px">
                </template>
              </CardIcon>
            </div>
            <div class="col-6">
              <CardIcon title="Checkup" background="#adadad">
                <template #icon>
                  <img src="@/Assets/Img/buelino_avatar_check.png" width="45px">
                </template>
              </CardIcon>
            </div>
            <div class="col-6">
              <CardIcon title="Dar Vacina" background="#df7d65">
                <template #icon>
                  <img src="@/Assets/Img/buelino_activities_syringe.png" width="45px">
                </template>
              </CardIcon>
            </div>
          </div>
        </template>

      </template>
    </Content>
</template>


<script setup>
import CardIcon from '@/Components/Cards/CardIcon.vue';
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { IconClock, IconSearch } from '@tabler/icons-vue';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import { computed, defineProps, ref } from 'vue';
import Vue3SimpleTypeahead from 'vue3-simple-typeahead';
import 'vue3-simple-typeahead/dist/vue3-simple-typeahead.css';

const props = defineProps({patients: null});
const patientNames = computed(() => {
  return props.patients.data.map(patient => `${patient.name} ${patient.surname}`);
});
let showActivities = ref(true)
const form = useForm({
  birthday: '2024-03-27',
});

function choseActivity(activity) {
  showActivities.value = false;
}

</script>

<style>
.card-activity-background {
    background: #F5CAC2;
    border-radius: 5px;
    padding: 5px;
    border: 1px solid;
}
</style>


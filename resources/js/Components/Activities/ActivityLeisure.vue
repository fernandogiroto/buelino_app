<template>
    <div class="d-flex flex-row gap-2 p-2 mb-3 bg-transparent border-0 shadow-none">
      <div class="card-activity-background"> 
        <img src="@/Assets/Img/buelino_activities_Leisure.png" width="30px"> 
      </div>
      <div class="d-flex flex-column justify-content-center">
        <span class="lh-1 text-secondary">Atividade</span>
        <span class="strong">Lazer</span>
      </div>
      <div class="d-flex flex-grow-1 justify-content-end align-items-center">
        <Link href="/activities/add" class="text-dark">
          <span class="text-decoration-underline-none"><IconArrowNarrowLeft size="18" /> voltar</span>
        </Link>
      </div>
    </div>
    <div class="input-icon">
      <span class="input-icon-addon">
          <IconSearch size="18" v-if="!patientAvatar" />
          <img :src="patientAvatar" width="25px" class="rounded-circle" v-else> 
      </span>
      <vue3-simple-typeahead
          id="typeahead_id"
          placeholder="Pesquisar Paciente"
          :items="patientNames"
          :minInputLength="0"
          @selectItem="selectPatient"
          @onInput="onInputPatient"
          class="py-2"
      >
        <template #list-item-text="slot" class="d-flex align-items-center">
          <img :src="getPatientAvatar(slot.item)" width="30px" class="pe-2 rounded-circle" />
          <span v-html="slot.item" class="pt-5"></span>
        </template>
      </vue3-simple-typeahead>
    </div>
    <div class="row mt-3">
      <div class="col-6">
        <VueDatePicker v-model="form.birthday" :enable-time-picker="false"></VueDatePicker>
      </div>
      <div class="col-6">
        <div class="input-icon mb-3">
          <span class="input-icon-addon" style="z-index: 0;">
            <IconClock size="18" ></IconClock>
          </span>
          <input type="text" :value="form.hour" class="form-control" placeholder="00:00">
        </div>
      </div>
    </div>
    <div class="input-icon mb-3" style="z-index: 0;">
      <span class="input-icon-addon">
          <IconSunHigh size="18"/>
      </span>
      <vue3-simple-typeahead
          id="typeahead_id"
          placeholder="Pesquisar Atividade"
          :items="leisureActivities"
          :minInputLength="0"
          class="py-2"
      >
       <span v-html="slot.item"></span>
      </vue3-simple-typeahead>
    </div>
    <textarea rows="3" class="form-control" placeholder="Observação"></textarea>
    <a href="#" class="btn btn-primary w-100 py-2 mt-3">Adicionar Atividade</a>
  </template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import { IconArrowNarrowLeft, IconClock, IconSearch, IconSunHigh } from '@tabler/icons-vue';
import VueDatePicker from '@vuepic/vue-datepicker';
import { computed, defineProps, onMounted, ref } from 'vue';
import Vue3SimpleTypeahead from 'vue3-simple-typeahead';
import 'vue3-simple-typeahead/dist/vue3-simple-typeahead.css';


onMounted(()=>{
  activityHourDate();
})

const props = defineProps({patients: null});
let patientAvatar = ref(false)

const patientNames = computed(() => {
  return props.patients.map(patient => `${patient.name}`);
});

const getPatientAvatar = (name) => {
  const patient = props.patients.find(patient => patient.name === name);
  return patient ? patient.avatar : '';
};

function selectPatient(patient) {
  patientAvatar.value = getPatientAvatar(patient)
}

function onInputPatient(patient) {
    patientAvatar.value = false;
}

const leisureActivities = ['Jogar Jogos','Passear no Jardim', 'Assistir Filme']

function activityHourDate() {
  // Hour
  const now = new Date();
  const hour = now.getHours();
  const minutes = now.getMinutes();

  // Date
  const day = now.getDate();
  const mouth = now.getMonth() + 1;
  const year = now.getFullYear();
  form.hour = `${hour}:${minutes}`;

  const decimalMouth = mouth < 10 ? `0${mouth}` : mouth;
  form.birthday =`${decimalMouth}/${day}/${year}`;
}

const form = useForm({
  birthday: '2024-03-27',
  hour:'00:00'
});
</script>

<style scoped>
.card-activity-background {
    background: #A2D2FF;
    border-radius: 5px;
    padding: 5px;
    border: 1px solid;
}
</style>
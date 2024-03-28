<template>
    <div class="card flex-row gap-2 p-2 mb-3 bg-transparent border-0 shadow-none">
      <div class="card-activity-background"> 
        <img src="@/Assets/Img/buelino_activities_Leisure.png" width="30px"> 
      </div>
      <div class="d-flex flex-column justify-content-center">
        <span class="lh-1 text-secondary">Atividade</span>
        <span class="strong">Lazer</span>
      </div>
    </div>
    <!-- {{ patients }}   -->
    <div class="input-icon">
      <span class="input-icon-addon">
          <IconSearch size="18" />
      </span>

      <vue3-simple-typeahead
          id="typeahead_id"
          placeholder="Pesquisar Paciente"
          :items="patientNames"
          :minInputLength="0"
          class="py-2"
      >
      <template #list-item-text="slot"><img :src="getPatientAvatar(slot.item)" width="25px" /><span v-html="slot.item"></span></template>
      </vue3-simple-typeahead>
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
    <textarea rows="3" class="form-control" placeholder="Observação"></textarea>
    <a href="#" class="btn btn-primary w-100 py-2 mt-3">Adicionar Atividade</a>
  </template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { IconClock, IconSearch } from '@tabler/icons-vue';
import VueDatePicker from '@vuepic/vue-datepicker';
import { computed, defineProps } from 'vue';
import Vue3SimpleTypeahead from 'vue3-simple-typeahead';
import 'vue3-simple-typeahead/dist/vue3-simple-typeahead.css';


const props = defineProps({patients: null});
const patientNames = computed(() => {
  return props.patients.map(patient => `${patient.name}`);
});

const getPatientAvatar = (name) => {
  const patient = props.patients.find(patient => patient.name === name);
  return patient ? patient.avatar : '';
};

  const form = useForm({
    birthday: '2024-03-27',
  });
</script>

<style>
.card-activity-background {
    background: #A2D2FF;
    border-radius: 5px;
    padding: 5px;
    border: 1px solid;
}
</style>
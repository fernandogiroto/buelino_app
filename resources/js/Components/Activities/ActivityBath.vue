<template>
    <div class="card flex-row gap-2 p-2 mb-3 bg-transparent border-0 shadow-none">
      <div class="card-activity-background"> 
        <img src="@/Assets/Img/buelino_activities_bath.png" width="30px"> 
      </div>
      <div class="d-flex flex-column justify-content-center">
        <span class="lh-1 text-secondary">Atividade</span>
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
          :items="patients"
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
    <textarea rows="3" class="form-control" placeholder="Observação"></textarea>
    <a href="#" class="btn btn-primary w-100 py-2 mt-3">Adicionar Atividade</a>
  </template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { IconClock, IconSearch } from '@tabler/icons-vue';
import VueDatePicker from '@vuepic/vue-datepicker';
import Vue3SimpleTypeahead from 'vue3-simple-typeahead';
import 'vue3-simple-typeahead/dist/vue3-simple-typeahead.css';

const props = defineProps({patients: null});
  const form = useForm({
    birthday: '2024-03-27',
  });
</script>

<style>
.card-activity-background {
    background: #F5CAC2;
    border-radius: 5px;
    padding: 5px;
    border: 1px solid;
}
</style>
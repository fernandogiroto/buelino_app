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
          <ActivityBath :patients="patientNames" v-if="activityChose === 'bath'"></ActivityBath>
          <ActivityLeisure :patients="patientNames" v-if="activityChose === 'leisure'"></ActivityLeisure>
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
              <CardIcon title="Lazer" background="#A2D2FF" @click="choseActivity('leisure')">
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
import ActivityBath from '@/Components/Activities/ActivityBath.vue';
import ActivityLeisure from '@/Components/Activities/ActivityLeisure.vue';
import CardIcon from '@/Components/Cards/CardIcon.vue';
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
import '@vuepic/vue-datepicker/dist/main.css';
import { computed, defineProps, ref } from 'vue';
import 'vue3-simple-typeahead/dist/vue3-simple-typeahead.css';

const props = defineProps({patients: null});
const patientNames2 = computed(() => {
  return props.patients.data.map(patient => `${patient.name} ${patient.surname}`);
});

const patientNames = computed(() => {
  return props.patients.data.map(patient => {
    return {
      name: `${patient.name} ${patient.surname}`,
      id: patient.id,
      avatar: `https://i.pravatar.cc/150?img=${patient.id}`
    };
  });
});
let showActivities = ref(true)
let activityChose = ref(true)

function choseActivity(activity) {
  showActivities.value = false;
  activityChose.value = activity;
}

</script>




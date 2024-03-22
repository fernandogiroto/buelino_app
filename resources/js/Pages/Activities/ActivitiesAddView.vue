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
            <CardIcon title="Dar Comida" background="#F6BD60">
              <template #icon>
                <img src="@/Assets/Img/buelino_activities_lunch.png" width="45px">
              </template>
            </CardIcon>
          </div>
          <div class="col-6">
            <CardIcon title="Dar Banho" background="#F5CAC3">
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
    </Content>
</template>


<script setup>
import CardIcon from '@/Components/Cards/CardIcon.vue';
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
</script>


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
      </template>
    </Content>
</template>

<script setup>
import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
  <div class="card h-100">
    <div class="card-status-top bg-primary"></div>
      <slot name="action" v-if="action">
        <div class="card-header justify-content-between">
          <h3 class="card-title">{{title}}</h3> 
          <a href="#" class="btn btn-outline-primary active">Adicionar Tarefa</a>
        </div>
      </slot> 
      <div class="table-responsive">
        <table class="table card-table table-vcenter">
          <tbody v-for="task in tasks" :key="task">
            <tr>
            <td class="w-1 pe-0">
              <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" :checked="task.complete">
            </td>
            <td class="w-100">
              <a href="#" class="text-reset">{{task.name}}</a>
            </td>
            <td class="text-nowrap text-secondary">
                <IconCalendarMonth size="20" /> {{ task.date }}
            </td>
            <td class="text-nowrap">
              <IconPencil size="20"/> <IconTrash  size="20"/>
            </td>
          </tr>
        </tbody>
        </table>
      </div>
  </div>
</template>

<script setup>
  import { IconCalendarMonth, IconPencil, IconTrash } from '@tabler/icons-vue';
  const props =  defineProps({
        title: {
          type: String,
          default: 'Tarefas'
        },
        action :{
          type: Boolean,
          default: true
        }
    });
  const tasks  = [
    { name: 'Gestionar as roupas de cama', date: '04/Mar/2024' , complete: true },
    { name: 'Gestionar as roupas de cama', date: '20/Fev/2024' , complete: false },
    { name: 'Gestionar as roupas de cama', date: '02/Fev/2024' , complete: true },
    { name: 'Gestionar as roupas de cama', date: '15/Jan/2024' , complete: true },
    { name: 'Gestionar as roupas de cama', date: '10/Jan/2024' , complete: false }
  ];
  
  
</script>
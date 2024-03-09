<template>
    <div class="card h-100">
        <div class="card-header">
        <h3 class="card-title">{{ title }}</h3>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-12" v-for="employee in employees" :key="employee.id">
                    <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                            <span class="avatar" :style="`background-image: url('https://i.pravatar.cc/150?img=${employee.id}')`">
                                <span class="badge" :class="employee.user.status"></span>
                            </span>
                        </a>
                        <div class="col text-truncate">
                            <a href="#" class="text-reset d-block text-truncate">{{ employee.user.name }}</a>
                            <div class="text-secondary text-truncate mt-n1">{{ employee.role }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue';
const props =  defineProps({
    title: {
        type: String,
        default: 'Funcionários Ativos'
    }
});

const employees = ref(null)
const getEmployees = () => {
    axios.get('/active_employees/3')
    .then( res => employees.value  = res.data)
    .catch(error => console.log(error))
}

onMounted(()=> {
    getEmployees();
})
</script>
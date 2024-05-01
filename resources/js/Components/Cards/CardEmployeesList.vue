<template>
    <div class="card" :style="{ height: height }">
        <div class="card-header">
            <h3 class="card-title">{{ title }}</h3>
        </div>
        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
            <div class="row g-3">
                <div class="col-12" v-for="employee in employees" :key="employee.id" v-if="listCharge">
                    <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                            <span class="avatar" :style="`background-image: url('https://i.pravatar.cc/150?img=${employee.id}')`">
                                <span class="badge bg-green" :class="employee.user.status"></span>
                            </span>
                        </a>
                        <div class="col text-truncate">
                            <a href="#" class="text-reset d-block text-truncate">{{ employee.user.name }}</a>
                            <div class="text-secondary text-truncate mt-n1">{{ employee.role }}</div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2" v-for="n in 5" v-else>
                    <AnimatedPlaceholder height="40px" width="50px"/>
                    <div class="d-flex flex-column w-100 gap-2">
                        <AnimatedPlaceholder height="5px" width="100%" />
                        <AnimatedPlaceholder height="5px" width="50%" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import AnimatedPlaceholder from "@/Components/Common/Placeholder.vue";
import axios from 'axios';
import { onMounted, ref } from 'vue';
const props =  defineProps({
    title: {
        type: String,
        default: 'Funcionários'
    },
    height: null
});

const listCharge = ref(false);
const employees = ref(null);

const getEmployees = () => {
    axios.get('/active_employees/5')
    .then((res) => { 
        employees.value = res.data;
        listCharge.value = true;
    })
    .catch(error => console.error(error));
}

onMounted(()=> {
    getEmployees();
})




</script>
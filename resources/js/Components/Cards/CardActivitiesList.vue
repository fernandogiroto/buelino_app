<template>
    <!-- DEKSTOP ACTIVITIES LIST -->
    <template class="d-none d-md-block">
        <div class="card" style="height: 18rem">
        <div class="card-header justify-content-between">
            <h3 class="card-title">Últimas Atividades</h3>
            <Link :href="'/activities'" class="btn btn-ghost-primary">Ver Mais</Link>
        </div>
        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
            <div class="divide-y" v-for="(activity,index) in activities" :key="activity" v-if="listCharge">
                <div>
                    <div class="row">
                        <div class="col-auto">
                            <span class="avatar" v-if="activity.service.name === 'Bathing'"><img src="@/Assets/Img/buelino_activities_bath.png" width="20px"></span>
                            <span class="avatar" v-if="activity.service.name === 'Giving Medicine'"><img src="@/Assets/Img/buelino_activities_medice.png" width="20px"></span>
                            <span class="avatar" v-if="activity.service.name === 'Physiotherapy'"><img src="@/Assets/Img/buelino_activities_physiotherapy.png" width="20px"></span>
                            <span class="avatar" v-if="activity.service.name === 'Leisure'"><img src="@/Assets/Img/buelino_activities_Leisure.png" width="20px"></span>
                            <span class="avatar" v-if="activity.service.name === 'Lunch'"><img  src="@/Assets/Img/buelino_activities_lunch.png" width="20px"></span>
                        </div>
                        <div class="col">
                            <div class="text-truncate">  
                                
                                <span v-if="activity.service.name === 'Bathing'"><strong>{{activity.employee.user.name}}</strong> deu banho ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                                <span v-if="activity.service.name === 'Giving Medicine'"><strong>{{activity.employee.user.name}}</strong> deu remédio ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                                <span v-if="activity.service.name === 'Physiotherapy'"><strong>{{activity.employee.user.name}}</strong> realizou um sessão de fisioterapia com o paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                                <span v-if="activity.service.name === 'Leisure'"><strong>{{activity.employee.user.name}}</strong> criou jogos com o paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                                <span v-if="activity.service.name === 'Lunch'"><strong>{{activity.employee.user.name}}</strong> deu almoço ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            </div>
                            <div class="text-secondary">{{formatDate(activity.created_at,'/',includeYear=false)}} - {{formatTime(activity.created_at)}}</div>
                        </div>
                    </div>
                </div>
                <div v-if="index !== activities.length - 1"></div>
            </div>
            <div class="d-flex gap-3 mb-3" v-for="n in 5" v-else>
                <AnimatedPlaceholder height="40px" width="50px"/>
                <div class="d-flex flex-column w-100 gap-2">
                    <AnimatedPlaceholder height="5px" width="85%" />
                    <AnimatedPlaceholder height="5px" width="30%" />
                </div>
            </div>
        </div>
        </div>
    </template>
    <!-- MOBILE ACTIVITIES LIST -->
    <template class="d-block d-md-none">
        <div class="mb-3">
            <Section title="Últimas Atividades" subtitle="Lista de Atividades" />
        </div>
        <div class="card card-sm mb-2" v-for="(activity,index) in activities" :key="activity">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="col-auto">
                            <span class="avatar" v-if="activity.service.name === 'Giving Medicine'"><img src="@/Assets/Img/buelino_activities_medice.png" width="20px"></span>
                            <span class="avatar" v-if="activity.service.name === 'Physiotherapy'"><img src="@/Assets/Img/buelino_activities_physiotherapy.png" width="20px"></span>
                            <span class="avatar" v-if="activity.service.name === 'Leisure'"><img src="@/Assets/Img/buelino_activities_Leisure.png" width="20px"></span>
                            <span class="avatar" v-if="activity.service.name === 'Lunch'"><img  src="@/Assets/Img/buelino_activities_lunch.png" width="20px"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">
                            <span v-if="activity.service.name === 'Giving Medicine'"><strong>{{activity.employee.user.name}}</strong> deu remédio ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            <span v-if="activity.service.name === 'Physiotherapy'"><strong>{{activity.employee.user.name}}</strong> realizou um sessão de fisioterapia com o paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            <span v-if="activity.service.name === 'Leisure'"><strong>{{activity.employee.user.name}}</strong> criou jogos com o paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                            <span v-if="activity.service.name === 'Lunch'"><strong>{{activity.employee.user.name}}</strong> deu almoço ao paciente <strong><Link :href="`/patient/${activity.patient.id}`">{{ activity.patient.name }} {{ activity.patient.surname }}</Link></strong></span>
                        </div>
                        <div class="text-secondary">
                            <div class="text-secondary">{{formatDate(activity.created_at,'/',includeYear=false)}} - {{formatTime(activity.created_at)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</template>

<script setup>
const props = defineProps({activities: null})
import AnimatedPlaceholder from "@/Components/Common/Placeholder.vue";
import Section from '@/Components/Common/Section.vue';
import { Link } from '@inertiajs/vue3';
import axios from 'axios';
import { onMounted, ref } from 'vue';

const activities = ref(null)
const listCharge = ref(false);
const getActivities = () => {
    axios.get('/activities/list')
    .then( (res) => {
        activities.value  = res.data
        listCharge.value = true;
    })
    .catch(error => console.log(error))
}

onMounted(()=> {
  getActivities();
})
</script>
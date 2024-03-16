<template>
    <div class="card" style="height: 18rem">
        <div class="card-header justify-content-between">
            <h3 class="card-title">Últimas Atividades</h3>
            <Link :href="'/activities'" class="btn btn-ghost-primary">Ver Mais</Link>
        </div>
        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
            <div class="divide-y" v-for="(activity,index) in activities" :key="activity">
                <div>
                    <div class="row">
                        <div class="col-auto">
                            <span class="avatar" v-if="activity.service.name === 'Giving Medicine'"><IconPill size="18"/></span>
                            <span class="avatar" v-if="activity.service.name === 'Physiotherapy'"><IconPhysotherapist size="18"/></span>
                            <span class="avatar" v-if="activity.service.name === 'Leisure'"> <IconSunHigh size="18" /></span>
                            <span class="avatar" v-if="activity.service.name === 'Lunch'"> <IconApple size="18" /></span>
                        </div>
                        <div class="col">
                            <div class="text-truncate">
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
        </div>
    </div>
</template>

<script setup>
const props = defineProps({activities: null})
import { Link } from '@inertiajs/vue3';
import { IconApple, IconPhysotherapist, IconPill, IconSunHigh } from '@tabler/icons-vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';

const activities = ref(null)
const getActivities = () => {
    axios.get('/activities/list')
    .then( res => activities.value  = res.data)
    .catch(error => console.log(error))
}

onMounted(()=> {
  getActivities();
})
</script>
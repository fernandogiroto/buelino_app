<template>
    <div class="card h-100">
        <div class="card-header">
        <h3 class="card-title">{{ title }}</h3>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="col-6" v-for="employee in employees" :key="employee">
                    <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                            <span class="avatar" :style="`background-image: url('https://i.pravatar.cc/150?img=${employee.id}')`">
                                <span class="badge" :class="employee.status"></span>
                            </span>
                        </a>
                        <div class="col text-truncate">
                            <a href="#" class="text-reset d-block text-truncate">{{ employee.name }}</a>
                            <div class="text-secondary text-truncate mt-n1">{{ employee.role }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const props =  defineProps({
        title: {
            type: String,
            default: 'Funcionários Ativos'
        }
    });
    const employees  = [
    { id:'1',name: 'João Ferreira', status: 'bg-green' , role:'Enfermeiro' },
    { id:'9',name: 'Maria Silva', status: 'bg-warning' ,role:'Psicóloga'},
    { id:'3 ',name: 'Pedro Santos', status: 'bg-green' ,role:'Gestor'},
    { id:'4',name: 'Gustavo Barbosa', status: 'bg-warning' , role:'Enfermeiro' },
    { id:'5',name: 'Beatriz Fernandes', status: 'bg-danger' ,role:'Enfermeira'},
    { id:'6 ',name: 'Pedro Santos', status: 'bg-green' ,role:'Gestor'},
    { id:'7',name: 'José Ricardo', status: 'bg-green' , role:'Enfermeiro' },
    { id:'8',name: 'Inês Lima', status: 'bg-danger' ,role:'Enfermeira'},
];
</script>
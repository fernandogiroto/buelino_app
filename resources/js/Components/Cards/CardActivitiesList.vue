<template>
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Últimas Atividades</h3>
    </div>
    <div class="table-responsive">
    <table class="table card-table table-vcenter text-nowrap datatable">
        <thead>
        <tr>
            <th>Atividade</th>
            <th>Utente</th>
            <th>Enfermeiro</th>
            <th>Horário</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="activitie in activities" :key="activities">
            <td><span class="text-secondary">{{activitie.name}}</span></td>
            <td>{{activitie.patient}}</td>
            <td>{{activitie.employee}}</td>
            <td>{{activitie.date}}</td>
        </tr>
        </tbody>
    </table>
    </div>
</div>
</template>


<script setup>
    const activities  = [
        { name: 'Medicação', patient: 'João Gomes' , employee:'Fernando Giroto', date:'29/02 - 14:40' },
        { name: 'Banho', patient: 'Maria Fernandes' , employee:'Ana Tavares', date:'29/02 - 11:30' },
        { name: 'Passeio', patient: 'Paulo Reis' , employee:'Fernando Giroto', date:'29/02 - 10:00' },
        { name: 'Medicação', patient: 'Ricardo Pereira' , employee:'Beatriz Gonçalves', date:'29/02 - 14:20' },
        { name: 'Banho', patient: 'Maria Fernandes' , employee:'Ana Tavares', date:'29/02 - 11:30' },

    ];

    </script>
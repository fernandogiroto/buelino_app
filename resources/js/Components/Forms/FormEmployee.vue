<template>
    <form @submit.prevent="submit">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="patient-name" placeholder="Nome" v-model="form.name">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Email" v-model="form.email">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div class="card">
                  <div class="empty">
                    <div class="empty-img">
                        <img src="@/Assets/Img/avatar_old.png" height="128" alt="Buelino - Avatar Patient">
                    </div>
                    <p class="empty-title" v-if="form.name">{{ form.name }}</p>
                    <p class="empty-title" v-else>Nome do Funcionário</p>
                    <p class="empty-subtitle text-secondary" v-if="form.email"><IconMailOpened size="20"/> {{form.email}}</p>
                    <div class="empty-action">
                      <button type="submit" class="btn btn-primary">
                        Crir Funcionário
                      </button>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" v-model="form.name" required>
        </div>
        <div>
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" v-model="form.phone" required>
         </div>
        <div>
            <label for="birthday">Data de Nascimento:</label>
            <input type="date" id="birthday" v-model="form.birthday" required>
        </div>
        <div>
            <label for="responsable">Responsável:</label>
            <input type="text" id="responsible" v-model="form.responsible" required>
        </div>
        <div>
            <label for="entry_date">Data de Entrada:</label>
            <input type="date" id="entry_date" v-model="form.entry_date" required>
        </div>
        <div>
            <label for="leaving_date">Data de Saída:</label>
            <input type="date" id="leaving_date" v-model="form.leaving_date">
        </div>
        <button type="submit">Criar Paciente</button> -->
    </form>
</template>


<script setup>
import { useForm } from '@inertiajs/vue3';

import { IconMailOpened } from '@tabler/icons-vue';



const form = useForm({
  name: null,
  email: null,
  role:'employee',
  avatar:'img/avatar.png',
  password:'12345678'
});


const submit = () => {
    form.post(route("employees.create"), {
        onSuccess: (response) =>{
            console.log('criado')
        },onError:(response)=>{
            
        }
        
    });
};

</script>
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
                    <div class="col-4">
                        <div class="mb-3">
                            <select class="form-select" v-model="form.role">
                                <option value="Enfermeiro(a)">Enfermeiro(a)</option>
                                <option value="Psicólogo(a)">Psicólogo(a)</option>
                                <option value="Médico">Médico</option>
                                <option value="Gestor">Gestor</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="phone" placeholder="Telefone" v-model="form.phone">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <select class="form-select" v-model="form.gender">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" v-model="form.password">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label">Data de Nascimento</label>
                            <div class="input-icon mb-2">
                              <input class="form-control " placeholder="Select a date" id="datepicker-icon" value="2020-06-20">
                              <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                              </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label">Data de Entrada</label>
                            <div class="input-icon mb-2">
                              <input class="form-control " placeholder="Select a date" id="datepicker-icon" value="2020-06-20">
                              <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                              </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <div class="form-label">Perfíl</div>
                            <input type="file" class="form-control">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <div class="form-label">Observações</div>
                            <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="" v-model="form.description"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div class="card">
                  <div class="empty">
                    <div class="empty-img">
                        <img src="@/Assets/Img/buelino_avatar_nurse.png" height="128" v-if="form.role === 'Enfermeiro(a)' && form.gender === 'Masculino'">
                        <img src="@/Assets/Img/buelino_avatar_nurse_w.png" height="128" v-if="form.role === 'Enfermeiro(a)' && form.gender === 'Feminino'">
                        <img src="@/Assets/Img/buelino_avatar_pyschologist.png" height="128" v-if="form.role === 'Psicólogo(a)' && form.gender === 'Masculino'">
                        <img src="@/Assets/Img/buelino_avatar_pyschologist_w.png" height="128" v-if="form.role === 'Psicólogo(a)' && form.gender === 'Feminino'">
                        <img src="@/Assets/Img/buelino_avatar_doctor.png" height="128" v-if="form.role === 'Médico' && form.gender === 'Masculino'">
                        <img src="@/Assets/Img/buelino_avatar_doctor_w.png" height="128" v-if="form.role === 'Médico' && form.gender === 'Feminino'">
                        <img src="@/Assets/Img/buelino_avatar_manager.png" height="128" v-if="form.role === 'Gestor' && form.gender === 'Masculino'">
                        <img src="@/Assets/Img/buelino_avatar_manager_w.png" height="128" v-if="form.role === 'Gestor' && form.gender === 'Feminino'">
                    </div>
                    <p class="empty-title" v-if="form.name">{{ form.name }}</p>
                    <p class="empty-title" v-else>Nome do Funcionário</p>
                    <p class="empty-subtitle text-secondary">Cargo: {{ form.role }}</p>
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
  name: '',
  email: '',
  role:'Enfermeiro(a)',
  avatar:'img/avatar.png',
  password:'',
  gender:'Masculino'
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
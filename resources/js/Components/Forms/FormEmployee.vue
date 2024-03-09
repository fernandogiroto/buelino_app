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
                            <VueDatePicker></VueDatePicker>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label">Data de Entrada</label>
                            <VueDatePicker></VueDatePicker>
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
    </form>
</template>


<script setup>
import { useForm } from '@inertiajs/vue3';
import { IconMailOpened } from '@tabler/icons-vue';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

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
            form.reset();
            toast("Funcionário Criado", {
                "type": "success",
                "transition": "flip",
                "dangerouslyHTMLString": true
                });
        },onError:(response)=>{
            toast("Funcionário não criado", {
                "type": "error",
                "transition": "flip",
                "dangerouslyHTMLString": true
            })
        }
        
    });
};


</script>
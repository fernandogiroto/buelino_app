<template>
    <form @submit.prevent="submit">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="patient-name" placeholder="Nome" v-model="form.name">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="patient-surname" placeholder="Sobrenome" v-model="form.surname">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <select class="form-select" v-model="form.gender">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="patient-responsible" placeholder="Responsável" v-model="form.responsible">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="patient-email" placeholder="Email" v-model="form.email">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="patient-phone" placeholder="Telefone" v-model="form.phone">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Data de Nascimento</label>
                            <VueDatePicker 
                                :day-names="['D', 'S', 'T', 'Q', 'Q', 'S', 'S']" 
                                :enable-time-picker="false"
                                locale="pt"
                                v-model="form.birthday"
                                >
                                <template #action-buttons>
                                </template>
                            </VueDatePicker>
                        </div>
                    </div>  
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Data de Entrada</label>
                            <VueDatePicker>
                            </VueDatePicker>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <div class="form-label">Perfíl</div>
                            <input type="file" class="form-control">
                          </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <div class="form-label">Observações</div>
                            <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="" v-model="form.description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                  <div class="empty">
                    <div class="empty-img">
                        <img src="@/Assets/Img/avatar_old.png" height="128" alt="Buelino - Avatar Patient" v-if="form.gender === 'Masculino'">
                        <img src="@/Assets/Img/avatar_old_woman.png" height="128" alt="Buelino - Avatar Patient" v-else>
                    </div>
                    <p class="empty-title" v-if="form.name">{{ form.name }} {{ form.surname }}</p>
                    <p class="empty-title" v-else>Nome do Paciente</p>
                    <p class="empty-subtitle text-secondary" v-if="form.phone"><IconPhone size="20" /> {{form.phone}}</p>
                    <p class="empty-subtitle text-secondary" v-if="form.email"><IconMailOpened size="20"/> {{form.email}}</p>
                    <p class="empty-subtitle text-secondary" v-if="form.responsible"><IconUserHeart size="20"/> {{form.responsible}}</p>

                    
                    <p class="empty-subtitle text-secondary">
                      {{ form.description ?? 'Adicione as observações ou breve descrição do paciente.'}}
                    </p>
                    <div class="empty-action">
                        <button type="submit" class="btn btn-primary">
                            Crir Paciente
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
import { IconMailOpened, IconPhone, IconUserHeart } from '@tabler/icons-vue';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const form = useForm({
  name: null,
  surname:'',
  phone: null,
  email: null,
  birthday: '1979-01-21',
  responsible: '',
  entry_date: '2022-05-01',
  leaving_date: '',
  gender: 'Masculino',
  description:null,
  avatar:'avatar.png'
});

const submit = () => {
    form.post(route("patients.create"), {
        onSuccess: (response) =>{
            form.reset();
            toast("Paciente Criado", {
                "type": "success",
                "transition": "flip",
                "dangerouslyHTMLString": true
                });
        },onError:(response)=>{
            toast("Paciente não criado", {
                "type": "error",
                "transition": "flip",
                "dangerouslyHTMLString": true
            })
        }
        
    });
};

</script>
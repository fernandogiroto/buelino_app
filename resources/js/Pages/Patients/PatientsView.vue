  <template>
    <Head title="Pacientes"/>
    <Content>
      <template #section>
        <Section title="Lista de Pacientes" subtitle="Lar Estância">
        </Section>
      </template>
      <!-- PATIENTS DESKTOP -->
      <template class="d-none d-md-block">
        <div class="row row-deck row-cards">
          <div class="col-12">
              <div class="card">
                <div class="card-header justify-content-between">
                  <h3 class="card-title">Pacientes</h3>
                  <div class="col-2 d-none d-xxl-block">
                      <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <IconSearch size="18" />
                            </span>
                            <vue3-simple-typeahead
                                id="typeahead_id"
                                placeholder="Pesquisar Paciente"
                                :items="patientNames"
                                :minInputLength="1"
                                @onInput="onInputEventHandler"
                                @selectItem="selectItemEventHandler"
                            />
                        </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                      <tr>
                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                        <th class="w-1">Id.
                          <IconChevronUp size="15" />
                        </th>
                        <th></th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Idade</th>
                        <th>Responsável</th>
                        <th>Entrada</th>
                        <th>Saída</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <template v-if="patientsFilter.length > 0">
                      <tr v-for="patient in patientsFilter" :key="patient">
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-secondary">{{ patient.id }}</span></td>
                        <td><img class="avatar avatar-sm"  :style="{ 'background-image': 'url(https://i.pravatar.cc/150?img=' + patient.id + ')' }"></td>
                        <td><Link :href="`/patient/${patient.id}`" class="text-dark">{{ patient.name }} {{ patient.surname }}</Link></td>
                        <td>{{ patient.phone }}</td>
                        <td>{{ patient.email }}</td>
                        <td>{{ calculateAge(patient.birthday) }} anos</td>
                        <td>{{ patient.responsible }}</td>
                        <td>{{ patient.entry_date }}</td>
                        <td>{{ patient.leaving_date ?? '-' }}</td>
                        <td class="text-end">
                            <IconTrash />
                            <IconEdit />
                        </td>
                      </tr>
                    </template>
                    <template v-else>
                      <tr>
                        <td colspan="11">Nenhum paciente encontrado.</td>
                      </tr>
                    </template>
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>  
      </template>
      <!-- PATIENTS MOBILE -->
      <template class="d-block d-md-none">
        <div class="mb-3">
          <Section title="Lista de Pacientes" subtitle="Lar Estância" />
        </div>
        <div class="input-icon mb-3">
            <span class="input-icon-addon">
              <IconSearch size="18" />
            </span>
            <vue3-simple-typeahead
                id="typeahead_id"
                placeholder="Pesquisar Paciente"
                :items="patientNames"
                :minInputLength="1"
                @onInput="onInputEventHandler"
                @selectItem="selectItemEventHandler"
            />
        </div>
        <template v-if="patientsFilter.length > 0">
          <div v-for="patient in patientsFilter" :key="patient">
            <Link class="card card-sm mb-2" :href="`/patient/${patient.id}`">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                      <div class="col-auto">
                      <img class="avatar" :style="{ 'background-image': 'url(https://i.pravatar.cc/150?img=' + patient.id + ')' }">
                      </div>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                        <span><strong>{{ patient.name }} {{ patient.surname }}</strong></span>
                    </div>
                    <div class="text-secondary">
                        <div class="text-secondary">{{ calculateAge(patient.birthday) }} anos</div>
                    </div>
                  </div>
                </div>
              </div>
            </Link>
          </div>
        </template>
        <template v-else>
          <div class="card card-sm mb-2">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                      <div class="col-auto">
                      </div>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                        <span><strong>Nenhum Paciente encontrado</strong></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </template>
      </template>
    </Content>
  </template>

  <script setup>
  import Section from '@/Components/Common/Section.vue';
import Content from '@/Layouts/Content.vue';
import { Head, Link } from '@inertiajs/vue3';
import { IconChevronUp, IconEdit, IconSearch, IconTrash } from '@tabler/icons-vue';
import { computed, defineProps, ref } from 'vue';
import Vue3SimpleTypeahead from 'vue3-simple-typeahead';
import 'vue3-simple-typeahead/dist/vue3-simple-typeahead.css';

  const props = defineProps({patients: null});
  let patientsFilter = ref(props.patients.data);
  const patientNames = computed(() => {
    return props.patients.data.map(patient => `${patient.name} ${patient.surname}`);
  });


  function onInputEventHandler(value) {
  const searchTerm = value.input.toLowerCase();
  if (!searchTerm) {
    patientsFilter.value = props.patients.data;
  } else {
    patientsFilter.value = props.patients.data.filter(patient =>
      `${patient.name.toLowerCase()} ${patient.surname.toLowerCase()}`.includes(searchTerm)
    );
  }
}

function selectItemEventHandler(value) {
  const searchTerm = value.toLowerCase();
  if (!searchTerm) {
    patientsFilter.value = props.patients.data;
  } else {
    patientsFilter.value = props.patients.data.filter(patient =>
      `${patient.name.toLowerCase()} ${patient.surname.toLowerCase()}`.includes(searchTerm)
    );
  }
}


  </script>

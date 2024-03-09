    <template>
        <Head title="Medicamento"/>
        <OffcanvasMedications></OffcanvasMedications>
        <Content>
            <template #section>
                <Section title="Lista de Medicamentos" subtitle="Lar Estância">
                    <template #buttons>
                        <a class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="offcanvas" href="#offcanvasMedications" role="button" aria-controls="offcanvasMedications">
                            <IconPlus /> Adicionar Medicamento
                            </a>
                    </template>
                </Section>
            </template>
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h3 class="card-title">Medicamentos</h3>
                            <div class="col-2 d-none d-xxl-block">
                                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                                    <form action="./" method="get" autocomplete="off" novalidate="">
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <IconSearch size="18" />
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pesquisar Medicamento" aria-label="Pesquisar Medicamento">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th class="w-1">Id.
                                    <IconChevronUp size="15" />
                                    </th>
                                    <th>Nome</th>
                                    <th>Componentes</th>
                                    <th>Utilidade</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="medication in medications.data" :key="medication">
                                    <td><span class="text-secondary">{{ medication.id }}</span></td>
                                    <td>{{ medication.name}}</td>
                                    <td><IconZoomIn size="18"/> {{ truncateString(medication.active_ingredients) }}</td>
                                    <td><IconZoomIn size="18"/> {{ truncateString(medication.purpose) }}</td>
                                    <td class="text-end">
                                        <IconEdit />
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                        <p class="m-0 text-secondary">Mostrando <span>1</span> a <span>8</span> de <span>16</span> pacientes</p>
                        <ul class="pagination m-0 ms-auto">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <IconChevronLeft  size="15"/> Anterior
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">
                                <IconChevronRight  size="15"/> Próximo
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </Content>
    </template>

<script setup>
import Section from '@/Components/Common/Section.vue';
import OffcanvasMedications from '@/Components/Offcanvas/OffcanvasMedications.vue';
import Content from '@/Layouts/Content.vue';
import { Head } from '@inertiajs/vue3';
import { IconChevronLeft, IconChevronRight, IconChevronUp, IconEdit, IconSearch, IconZoomIn } from '@tabler/icons-vue';

    const props = defineProps({medications: null})

    function truncateString(str) {
        if (str && str.length > 10) {
            return str.slice(0, 40) + '...';
        } else {
            return str; 
        }
    }
    </script>
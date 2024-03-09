<template>
    <div class="offcanvas offcanvas-end bg-white" tabindex="-1" id="offcanvasTask" aria-labelledby="offcanvasEndLabel" aria-modal="true" role="dialog">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasEndLabel">Tarefas</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
            </div>

            <div class="mt-3">
                <table class="table card-table table-vcenter">
                    <tbody v-for="task in tasks" :key="task">
                        <tr>
                            <td class="ps-0 pe-3">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" :checked="task.status">
                            </td>
                            <td class="w-100 ps-0">
                                <a href="#" class="text-reset">{{task.name}}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue';

const tasks = ref(null)
const getTasks = () => {
    axios.get('/tasks')
    .then( res => tasks.value  = res.data)
    .catch(error => console.log(error))
}

onMounted(()=> {
  getTasks();
})

</script>
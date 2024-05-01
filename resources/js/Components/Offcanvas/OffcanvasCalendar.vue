<template>
    <div class="offcanvas offcanvas-end bg-white" tabindex="-1" id="offcanvasCalendar" aria-labelledby="offcanvasEndLabel" aria-modal="true" role="dialog">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasEndLabel">Agenda</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
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
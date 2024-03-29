<template>
    <div class="offcanvas offcanvas-end bg-white" tabindex="-1" id="offcanvasActivityFilter" aria-labelledby="offcanvasEndLabel" aria-modal="true" role="dialog">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasEndLabel">Filtros</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
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
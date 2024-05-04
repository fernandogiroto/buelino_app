<template>
    <form @submit.prevent="submit" :class="{ 'error': isError }">  
        <!-- <p>id: {{ form.id }}</p>
        <p>pass: {{ form.id }}</p>
        <p>login: {{ form.password }}</p>
        <p>login: {{ isError }}</p> -->
        <div class="row row text-center"> 
            <div class="col-12">
                <div class="d-flex justify-content-between gap-2">
                    <div class="input-number shadow-lg" @click="loginInput(1)">1</div>
                    <div class="input-number shadow-lg" @click="loginInput(2)">2</div>
                    <div class="input-number shadow-lg" @click="loginInput(3)">3</div>
                </div>
                <div class="d-flex justify-content-between gap-2">
                    <div class="input-number shadow-lg" @click="loginInput(4)">4</div>
                    <div class="input-number shadow-lg" @click="loginInput(5)">5</div>
                    <div class="input-number shadow-lg" @click="loginInput(6)">6</div>
                </div>
                <div class="d-flex justify-content-between gap-2">
                    <div class="input-number shadow-lg" @click="loginInput(7)">7</div>
                    <div class="input-number shadow-lg" @click="loginInput(8)">8</div>
                    <div class="input-number shadow-lg" @click="loginInput(9)">9</div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="input-number shadow-lg" @click="loginInput(0)">0</div>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const click = new Audio('./sounds/click3.mp3');
const error = new Audio('./sounds/error.mp3');
const welcome = new Audio('./sounds/welcome.mp3');


let isError = ref(false); 

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
    id:'',
    login:'',
    email: '',
    password: '',
});

const submit = () => {
  form.post(route('mobile'), {
    onSuccess: (data) => {
        form.reset();
        welcome.play();
    },
    onError: (errors) => {
            error.play();
            form.reset();
            isError.value = true;
            setTimeout(() => {
                isError.value = false;
            }, 1000);
        }
  });
};

function loginInput(number) {
    click.pause();
    click.currentTime = 0;
    click.play();
    if (form.id.length < 3) {
        form.id += number.toString();
    } else if (form.password.length < 8) {
        form.password += number.toString();
    }
    if (form.id.length + form.password.length === 11) {
        form.id = form.id.replace(/^0+/, '');
        submit();
    }
};
</script>

<style lang="scss">
.input-number {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    margin-bottom: 10px;
    background-color: var(--tblr-primary);
    border: 2px solid black;
    color: #FFFFFF;
    font-weight: 700;
    font-size: 20px;
    border-radius: 50%;
    width: 75px;
    height: 70px;
    transition: background-color 0.3s, transform 0.3s;
    &:active {
        transform: translateY(-3px);
        background-color: var(--tblr-primary-dark);
        color: #353535; 
    }
}

.error {    
    animation: shake 0.3s;
}

@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
}


</style>
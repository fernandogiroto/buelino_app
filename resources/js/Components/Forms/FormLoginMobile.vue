<template>
    <form @submit.prevent="submit">  
        <div class="row row text-center"> 
            <div class="col-4">
                <div class="input-number shadow-lg" @click="loginInput(1)">1</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(2)">2</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(3)">3</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(4)">4</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(5)">5</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(6)">6</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(7)">7</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(8)">8</div>
            </div>
            <div class="col-4">
                <div class="input-number" @click="loginInput(9)">9</div>
            </div>
            <div class="col-4 offset-4">
                <div class="input-number" @click="loginInput(0)">0</div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
const click = new Audio('./sounds/click.mp3');
const welcome = new Audio('./sounds/welcome.mp3');
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
    onFinish: () => {
        form.reset('password');
        welcome.play();
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
    .input-number{
        display: flex;
        justify-content: center;
        align-items: center;
        padding:10px;
        margin-bottom: 10px;
        background-color: var(--tblr-primary);
        border: 3px dotted black;
        
        color: #FFFFFF;
        font-weight: 700;
        font-size: 18px;
        border-radius: 50%;
        width: 100%;
        height: 70px;
    }

</style>
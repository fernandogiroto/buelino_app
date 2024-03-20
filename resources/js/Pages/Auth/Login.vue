<template>
  <Head title="Login" />
  <div class="page page-center page-login-background">
    <div class="container container-tight py-4">
      <div class="card card-md m-3">
        <div class="card-body">
          <a href="." class="navbar-brand navbar-brand-autodark mb-4 w-100 justify-content-center">
            <img src="@/Assets/Img/logo_transparent.png" width="110" height="32" alt="Buelino" class="navbar-brand-image">
          </a>
          
          <form @submit.prevent="submit" autocomplete="off">
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input id="email" type="email" class="form-control" v-model="form.email" placeholder="info@email.com" autocomplete="off">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Senha
                <span class="form-label-description">
                  <Link v-if="canResetPassword" :href="route('password.request')">Esquece a senha?</Link>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" v-model="form.password" required autocomplete="current-password">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-label">Relembrar dispositivo</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Fazer Login</button>
            </div>
        </form>
        </div>
      </div>
      <div class="text-center text-white fw-bold position-relative mt-3">
        Ainda não tem conta? 
        <Link :href="route('register')" class="text-white text-decoration-underline" tabindex="-1">Registrar</Link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';



defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  email: '',
  password: '',
  remember: false
});

const submit = () => {
  form.post(route('login'), {
    onFinish: () => form.reset('password'),
  });
};
</script>

<style lang="scss"> 

.page-login-background{
  height: 100%;
  background-image: url('@/Assets/Img/buelino_background_login.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  &::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    filter: blur(8px); 
    }
}
.text-login-account{
  color: #FFFFFF;
  font-weight: 500;
  position: relative;
}
</style>
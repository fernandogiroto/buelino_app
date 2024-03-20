<template>
    <OffcanvasTasks></OffcanvasTasks>
    <div :class="{'sticky-top': page.url !='/activities'}">
       <!-- TOPBAR -->
      <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <Link :href="route('dashboard')">
            <img src="@/Assets/Img/logo.png" width="110" height="32" alt="Buelino" class="navbar-brand-image ms-3 ms-md-0">
          </Link>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-md-flex me-3">
              <div class="btn-list">
                <a class="btn p-2" data-bs-toggle="offcanvas" href="#offcanvasTask" role="button" aria-controls="offcanvasTask">
                  <IconListCheck size="16" /> <span class="ms-1 d-none d-md-block">Notas</span>
                  </a>
              </div>
            </div>
            <div class="d-none d-md-flex">
              <Notifications></Notifications>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <img class="avatar avatar-sm" src="@/Assets/Img/perfil.png">
                <div class="d-none d-xl-block ps-2">
                  <div>{{user.name}}</div>
                  <div class="mt-1 small text-secondary">{{user.role}}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Status</a>
                <Link :href="route('profile.index')" class="dropdown-item">Perfíl</Link>
                <a href="#" class="dropdown-item">Ajuda</a>
                <div class="dropdown-divider"></div>
                <a href="./settings.html" class="dropdown-item">Configurações</a>
                <Link :href="route('logout')" method="post" class="dropdown-item" as="button">Deslogar</Link>
              </div>
            </div>
          </div>
        </div>
      </header>
       <!-- NAVBAR -->
      <header class="navbar-expand-md ">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <div class="row flex-fill align-items-center">
                <div class="col">
                  <ul class="navbar-nav">
                    <!-- HOME -->
                    <li class="nav-item d-none d-md-block">
                      <Link :href="route('dashboard')" class="nav-link" :class="{ 'active': $page.url === '/dashboard' }">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><IconHome /></span>
                        <span class="nav-link-title">Início</span>
                      </Link>
                    </li>       
                    <!-- PATIENTS -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-patients" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <IconUsers />
                          </span>
                          <span class="nav-link-title">
                            Pacientes
                          </span>
                        </a>
                        <div class="dropdown-menu">
                          <Link :href="route('patients.index')" class="dropdown-item">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><IconUserHeart /></span>
                            <span class="nav-link-title">Ver Pacientes</span>
                          </Link>
                          <Link :href="route('patients.add')" class="dropdown-item">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><IconUsersPlus /></span>
                            <span class="nav-link-title">Adicionar Paciente</span>
                          </Link>
                        </div>
                    </li>
                    <!-- EMPLOYEES -->
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle"   href="#navbar-employees" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <IconFirstAidKit />
                          </span>
                          <span class="nav-link-title">
                            Funcionários
                          </span>
                        </a>
                        <div class="dropdown-menu">
                          <Link :href="route('employees.index')" class="dropdown-item">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><IconHeartRateMonitor /></span>
                            <span class="nav-link-title">Ver Funcionários</span>
                          </Link>
                          <Link :href="route('employees.add')" class="dropdown-item">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><IconNurse /></span>
                            <span class="nav-link-title">Adicionar Funcionário</span>
                          </Link>
                        </div>
                    </li>
                    
                    <!-- ACTIVITIES -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-activities" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <IconFileDescription />
                          </span>
                          <span class="nav-link-title">
                            Atividades
                          </span>
                        </a>
                        <div class="dropdown-menu">
                          <Link :href="route('activities.index')" class="dropdown-item">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><IconFileSearch/></span>
                            <span class="nav-link-title">Ver Atividades</span>
                          </Link>
                          <Link :href="route('patients.index')" class="dropdown-item">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><IconFileCheck /></span>
                            <span class="nav-link-title">Registrar Atividade</span>
                          </Link>
                          <Link :href="route('patients.index')" class="dropdown-item">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><IconFilePlus /></span>
                            <span class="nav-link-title">Criar Atividade</span>
                          </Link>
                        </div>
                    </li>
                    <!-- REPORTS -->
                    <li class="nav-item" :class="{ 'active': $page.url === '/report' }">
                      <Link :href="route('dashboard')" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><IconReportAnalytics /></span>
                        <span class="nav-link-title">Relatórios</span>
                      </Link>
                    </li>
                    <li class="nav-item">
                      <Link :href="route('medications.index')" class="nav-link" :class="{ 'active': $page.url === '/medications' }">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><IconPill /></span>
                        <span class="nav-link-title">Medicamentos</span>
                      </Link>
                    </li>
                  </ul>
                </div>
                <div class="col-2 d-none d-xxl-block">
                  <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="./" method="get" autocomplete="off" novalidate="">
                      <div class="input-icon">
                        <span class="input-icon-addon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Pesquisar..." aria-label="Search in website">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
  </template>
  
<script setup>
  import Notifications from '@/Components/Common/Notications.vue';
import OffcanvasTasks from '@/Components/Offcanvas/OffcanvasTasks.vue';
import { Link, usePage } from '@inertiajs/vue3';
import {
  IconFileCheck,
  IconFileDescription,
  IconFilePlus,
  IconFileSearch,
  IconFirstAidKit,
  IconHeartRateMonitor,
  IconHome,
  IconListCheck,
  IconNurse,
  IconPill,
  IconReportAnalytics,
  IconUserHeart,
  IconUsers,
  IconUsersPlus
} from '@tabler/icons-vue';
import { computed } from 'vue';
  const page = usePage();
  const user = computed(() => page.props.auth.user);
  </script>
  
  <style>
  a.nav-link.active::after{
    content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: -0.60rem;
      border: 0 var(--tblr-border-style) var(--tblr-navbar-active-border-color);
      border-bottom-width: 2px;
  }
  </style>
<template>
  <div class="sticky-top">
     <!-- TOPBAR -->
    <header class="navbar navbar-expand-md sticky-top d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <Link :href="route('dashboard')">
            <img src="@/Assets/Img/logo.png" width="110" height="32" alt="Buelino" class="navbar-brand-image">
          </Link>
         
        <div class="navbar-nav flex-row order-md-last">
          <div class="d-none d-md-flex">
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last updates</h3>
                  </div>
                  <div class="list-group list-group-flush list-group-hoverable">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 1</a>
                          <div class="d-block text-secondary text-truncate mt-n1">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 2</a>
                          <div class="d-block text-secondary text-truncate mt-n1">
                            justify-content:between ⇒ justify-content:space-between (#29734)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions show">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 3</a>
                          <div class="d-block text-secondary text-truncate mt-n1">
                            Update change-version.js (#29736)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 4</a>
                          <div class="d-block text-secondary text-truncate mt-n1">
                            Regenerate package-lock.json (#29730)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <img class="avatar avatar-sm" src="@/Assets/Img/perfil.png">
              <div class="d-none d-xl-block ps-2">
                <div>{{user.name}}</div>
                <div class="mt-1 small text-secondary">Diretor</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="#" class="dropdown-item">Status</a>
              <a href="./profile.html" class="dropdown-item">Profile</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="./settings.html" class="dropdown-item">Settings</a>
              <Link :href="route('logout')" method="post" class="dropdown-item" as="button">Deslogar</Link>
            </div>
          </div>
        </div>
      </div>
    </header>
     <!-- NAVBAR -->
    <header class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
          <div class="container-xl">
            <div class="row flex-fill align-items-center">
              <div class="col">
                <ul class="navbar-nav">
                  <!-- HOME -->
                  <li class="nav-item" :class="{ 'active': $page.url === '/dashboard' }">
                    <Link :href="route('dashboard')" class="nav-link">
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
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-employees" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                          <IconFirstAidKit />
                        </span>
                        <span class="nav-link-title">
                          Funcionários
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <Link :href="route('patients.index')" class="dropdown-item">
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
                        <Link :href="route('patients.index')" class="dropdown-item">
                          <span class="nav-link-icon d-md-none d-lg-inline-block"><IconFileSearch/></span>
                          <span class="nav-link-title">Ver Atividades</span>
                        </Link>
                        <Link :href="route('patients.index')" class="dropdown-item">
                          <span class="nav-link-icon d-md-none d-lg-inline-block"><IconFilePlus /></span>
                          <span class="nav-link-title">Adicionar Atividade</span>
                        </Link>
                      </div>
                  </li>
                  <!-- REPORTS -->
                  <li class="nav-item" :class="{ 'active': $page.url === '/dashboard' }">
                    <Link :href="route('dashboard')" class="nav-link">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><IconReportAnalytics /></span>
                      <span class="nav-link-title">Relatórios</span>
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
import { Link, usePage } from '@inertiajs/vue3';
import {
IconFileDescription,
IconFilePlus,
IconFileSearch,
IconFirstAidKit,
IconHeartRateMonitor,
IconHome,
IconNurse,
IconReportAnalytics,
IconUserHeart,
IconUsers,
IconUsersPlus
} from '@tabler/icons-vue';
import { computed } from 'vue';

const page = usePage();
const user = computed(() => page.props.auth.user);
</script>
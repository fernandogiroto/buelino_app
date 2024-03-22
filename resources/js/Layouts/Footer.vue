<template>
  <div class="nav-footer container">
    <div class="nav-footer__menu">
      <ul class="nav-footer__list">
        <li :class="$page.url === '/employees' ? 'nav-footer__item--active' : 'nav-footer__item'">
          <Link :href="route('employees.index')" class="nav-footer__link">
                <IconHeartRateMonitor size="27" :color="$page.url === '/employees' ? 'white' : ''" />
            </Link>
        </li>
        <li :class="$page.url === '/patients' ? 'nav-footer__item--active' : 'nav-footer__item'">
          <Link :href="route('patients.index')" class="nav-footer__link">
                <IconUserHeart size="27" :color="$page.url === '/patients' ? 'white' : ''" />
            </Link>
        </li>
        <li :class="$page.url === '/dashboard' ? 'nav-footer__item--active' : 'nav-footer__item'">
            <Link :href="route('dashboard')" class="nav-footer__link">
                <IconHome size="27" :color="$page.url === '/dashboard' ? 'white' : ''" />
            </Link>
        </li>
        <li :class="$page.url === '/activities/add' ? 'nav-footer__item--active' : 'nav-footer__item'">
          <Link :href="route('activities.add')" class="nav-footer__link">
                <IconCheckbox size="27" :color="$page.url === '/activities/add' ? 'white' : ''" />
            </Link>
        </li>
        <li :class="$page.url === '/activities' ? 'nav-footer__item--active' : 'nav-footer__item'">
            <Link :href="route('activities.index')" class="nav-footer__link">
                <IconFileSearch size="27" :color="$page.url === '/activities' ? 'white' : ''" />
            </Link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import {
  IconCheckbox,
  IconFileSearch,
  IconHeartRateMonitor,
  IconHome,
  IconUserHeart
} from '@tabler/icons-vue';
const page = usePage();
</script>

<style lang="scss"> 
:root {

  --hue: 174;
  --sat: 63%;
  --first-color: hsl(var(--hue), var(--sat), 40%);
  --first-color-alt: hsl(var(--hue), var(--sat), 36%);
  --title-color: hsl(var(--hue), 12%, 15%);
  --text-color: hsl(var(--hue), 8%, 35%);
  --body-color: hsl(var(--hue), 100%, 99%);
  --container-color: #FFF;
}

.nav-footer {
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
  &::before{
    content: '';
    margin-top: 70px;
  }
  /*Active link*/
  .active-link {
    position: relative;
    color: var(--first-color);
    transition: .3s;
    }
  .nav-footer__menu {
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: var(--container-color);
    box-shadow: 0 -1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
    width: 100%;
    height: 4rem;
    padding: 0 2.5rem;
    display: grid;
    align-content: center;
    border-radius: 1.25rem 1.25rem 0 0;
    transition: .4s;
    z-index: 99999;

    .nav-footer__list {
        display: flex;
        justify-content: space-around;
        list-style-type: none;
        padding-left: 0rem;
        align-items: center;

        .nav-footer__item {
            margin-bottom: -15px;
            &--active {
                outline: white;
                background-color: #216AC4;
                border: 1px solid white;
                padding: 10px;
                border-radius: 100%;
                margin-bottom: 15px;
                position: relative;
                bottom: -20px;
                animation: slideUp 0.5s ease forwards; 
            }
        }
        .nav-footer__link {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 4px;
            color: var(--title-color);
        }
    }
  }
}

@keyframes slideUp {
  from {
    bottom: -20px; 
    opacity: 0; 
  }
  to {
    bottom: 0; 
    opacity: 1; 
  }
}

/* Change background header */
.scroll-header {
  box-shadow: 0 1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
}

@media screen and (max-width: 320px) {
  .nav-footer__name {
    display: none;
  }
}
@media screen and (min-width: 576px) {
  .nav-footer__list {
    justify-content: center;
    column-gap: 3rem;
  }
}

</style>


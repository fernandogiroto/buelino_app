<template>
    <div class="card" :style="{ height: height }">
        <div class="card-header justify-content-between">
            <h3 class="card-title">Estoque</h3>
            <span><IconSettings size="20" /></span>
        </div>
        <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
            <div class="list-group-header sticky-top">
                <div class="row">
                    <div class="col-6">
                        <span class="text-capitalize">Item</span>
                    </div>
                    <div class="col-6">
                        <span class="text-capitalize">Quantidade</span>
                    </div>
                </div>
            </div>
            <div class="list-group-item pt-2 pb-2">
                <div class="row">
                    <div class="col-6"><img src="@/Assets/Img/buelino_inventory_toilet_paper.png" width="15px"> Papel Higienico</div>
                    <div class="col align-self-center">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 89.00%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item pt-2 pb-2">
                <div class="row">
                    <div class="col-6"><img src="@/Assets/Img/buelino_inventory_detergent.png" width="15px"> Detergente</div>
                    <div class="col align-self-center">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item pt-2 pb-2">
                <div class="row">
                    <div class="col-6"><img src="@/Assets/Img/buelino_inventory_milk.png" width="15px"> Leite</div>
                    <div class="col align-self-center">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item pt-2 pb-2">
                <div class="row">
                    <div class="col-6"><img src="@/Assets/Img/buelino_inventory_cookie.png" width="15px"> Bolachas</div>
                    <div class="col align-self-center">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item pt-2 pb-2">
                <div class="row">
                    <div class="col-6"><img src="@/Assets/Img/buelino_inventory_jelly.png" width="20px"> Gelatina</div>
                    <div class="col align-self-center">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-yellow" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item pt-2 pb-2">
                <div class="row">
                    <div class="col-6"><img src="@/Assets/Img/buelino_inventory_diaper.png" width="15px"> Fraldas</div>
                    <div class="col align-self-center">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" style="width: 35.96%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

import { IconSettings } from '@tabler/icons-vue';
const props = defineProps({height: null})

</script>

<style lang="scss">
</style>
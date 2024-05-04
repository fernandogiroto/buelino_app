<template>
    <div class="card" :class="['card', { 'mb-2': margin_bottom }]">
        <div class="card-body pb-1">
            <div class="d-flex align-items-start justify-content-between">
                <div>
                    <div class="subheader">{{title}}</div>
                    <div class="h2 text-lime mb-2">{{subtitle}}</div> 
                    <div class="subheader">{{title_2}}</div>
                    <div class="h2 text-danger">{{subtitle_2}}</div> 
                </div>
                <img src="@/Assets/Img/cash_gain.png" v-if="icon==='money_gain'" width="50px">    
                <img src="@/Assets/Img/cash_loss.png" v-if="icon==='money_loss'" width="50px">    
                <img src="@/Assets/Img/avatar_old.png" v-if="icon==='patient'" width="50px">    
                <img src="@/Assets/Img/nurse_icon.png" v-if="icon==='employee'"width="50px">    
            </div>
        </div>
    </div>
</template>

<script setup>
  const props =  defineProps({
        margin_bottom: {
          type: Boolean,
          default: false
        },
        icon: {
          type: String,
          default: 'money_gain'
        },
        title: {
          type: String,
          default: 'Recebimentos do mês'
        },
        subtitle: {
          type: String,
          default: 'R$ 200,00'
        },
        title_2: {
          type: String,
          default: 'Recebimentos em atraso'
        },
        subtitle_2: {
          type: String,
          default: 'R$ 150,00'
        },
    });
</script>
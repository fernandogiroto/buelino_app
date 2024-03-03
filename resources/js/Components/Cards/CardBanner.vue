<template>
    <div class="card h-100">
        <img src="@/Assets/Img/banner_full_dashboard.png" class="w-100 h-100 img-fluid">
        <div class="card-img-overlay justify-content-start">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="card-body">
                        <h3 class="card-title">
                            <slot name="title" />
                        </h3>
                        <p class="text-muted">
                            <slot name="content" />
                        </p>
                        <slot name="action" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
</script>
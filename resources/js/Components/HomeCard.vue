<script  >
    export default{
        props:['icon','title', 'count']
    }
</script>

<template>
    <v-card class="bg-primary elevation-10 rounded-lg">
        <v-card-text class="pl-5 pr-7">
            <img src="/images/info-shap.svg" alt="shape" class="shape" >

            <v-icon class="my-2" size="45" :icon="icon"></v-icon>

            <h5 class="text-h4 font-weight-semibold mb-2 text-white" >
                {{ count }}
            </h5>
            <p class="text-subtitle-1  font-weight-medium">
                {{ title }}
            </p>
        </v-card-text>
    </v-card>
</template>

<style scoped>

</style>

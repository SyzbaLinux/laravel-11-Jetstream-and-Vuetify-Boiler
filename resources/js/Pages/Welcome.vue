<template>
    <v-row>
        <v-col
            v-for="n in 24"
            :key="n"
            cols="4"
        >
            <v-card class="glass" height="200"></v-card>
        </v-col>
    </v-row>
</template>

<script>
import Default from "@/Layouts/Default.vue";

export default {
    layout:Default
}
</script>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

defineProps({
    title: String,
});

const drawer = ref(null)
const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <Head :title="title"/>
    <v-app id="inspire">
        <v-navigation-drawer v-model="drawer">
            <!--  -->
        </v-navigation-drawer>

        <v-app-bar elevation="0">
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-app-bar-title>Application</v-app-bar-title>
            <v-btn
                color="primary"
            >
                <v-icon icon="mdi-account-circle"/>
                {{ $page.props.auth.user.name }}
                <v-menu activator="parent">
                    <v-list>
                        <v-list-item>
                            <v-list-item-title>
                                {{ $page.props.auth.user.name }}
                            </v-list-item-title>
                            <v-list-item-subtitle>
                                {{ $page.props.auth.user.email }}
                            </v-list-item-subtitle>
                        </v-list-item>
                        <v-divider class="my-2" />

                        <v-list-item :href="route('profile.show')">
                            <v-list-item-title>
                                <v-icon>mdi-account-circle</v-icon>  Profile
                            </v-list-item-title>
                        </v-list-item>

                        <v-list-item class="cursor-pointer" @click="logout">
                            <v-list-item-title>
                                <v-icon>mdi-login</v-icon> Logout
                            </v-list-item-title>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </v-btn>
        </v-app-bar>

        <v-main>
             <v-container>
                 <slot/>
             </v-container>
        </v-main>
    </v-app>
</template>

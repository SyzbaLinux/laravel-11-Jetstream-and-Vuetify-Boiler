<script setup>
import { useForm } from '@inertiajs/vue3';
import Default from "@/Layouts/Default.vue";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

     <Default>
         <form @submit.prevent="submit">
            <v-card class="glass mx-auto" max-width="600">

                <v-card-text>
                    <h1>Login</h1>
                </v-card-text>
                <v-card-text>
                        <v-text-field
                            id="email"
                            v-model="form.email"
                            type="email"
                            label="Enter Email"
                            required
                            autofocus
                            autocomplete="username"
                            :error-message="form.errors.email"
                        />

                        <v-text-field
                            id="password"
                            v-model="form.password"
                            type="password"
                            label="Enter Password"
                            required
                            autocomplete="current-password"
                            :error-messages="form.errors.password"
                        />

                        <div class=" d-flex align-center justify-between">
                           <div><v-checkbox label="Remember me" v-model:checked="form.remember" name="remember" /></div>
                            <v-spacer/>
                            <InertiaLink   :href="route('password.request')" >
                                <v-btn variant="text mb-3">
                                    Forgot your password?
                                </v-btn>
                            </InertiaLink>
                        </div>

                    <v-btn block size="large" type="submit" :loading="form.processing">
                        Log in
                    </v-btn>

                </v-card-text>

            </v-card>
         </form>
     </Default>
</template>

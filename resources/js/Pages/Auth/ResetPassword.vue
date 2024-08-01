<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import Default from "@/Layouts/Default.vue";

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Reset Password" />

    <Default>
        <form @submit.prevent="submit">
            <v-card class="glass mx-auto" max-width="500">
                <v-card-text class="text-center mt-3">
                    <h1>Password Reset</h1>
                    <hr class="my-2">
                    <p>
                      Add a new strong password
                    </p>
                </v-card-text>

                <v-card-text class="mt-5">

                    <v-text-field
                        id="email"
                        v-model="form.email"
                        type="email"
                        label="Enter Email"
                        required
                        autofocus
                        autocomplete="username"
                        :error-messages="form.errors.email"
                    />

                    <v-text-field
                        id="password"
                        v-model="form.password"
                        type="password"
                        label="Enter New Password"
                        required
                        autocomplete="new-password"
                        :error-messages="form.errors.password"
                    />

                    <v-text-field
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        type="password"
                        label="Confirm Password"
                        required
                        autocomplete="new-password"
                        :error-messages="form.errors.password_confirmation"
                    />
                </v-card-text>

                <v-card-actions>
                    <v-btn block variant="flat" size="large" type="submit" :loading="form.processing">
                        Continue
                    </v-btn>
                </v-card-actions>
            </v-card>
        </form>
    </Default>
</template>

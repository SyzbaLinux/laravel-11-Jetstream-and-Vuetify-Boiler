<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import Default from "@/Layouts/Default.vue";

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head title="Forgot Password" />

    <Default>
        <form @submit.prevent="submit">
            <v-card class="glass mx-auto" max-width="500">
                <v-card-text class="text-center mt-3">
                    <h1>Forgot Password?</h1>
                    <hr class="my-2">
                    <p>
                        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                    </p>
                </v-card-text>

                <v-card-text class="mt-5">
                    <v-text-field
                        id="email"
                        v-model="form.email"
                        type="email"
                        label="Enter your Email"
                        required
                        autofocus
                        autocomplete="username"
                        :error-messages="form.errors.email"
                    />
                </v-card-text>

                <v-card-actions>
                    <v-btn block variant="flat" size="large" type="submit" :loading="form.processing">
                        Email Password Reset Link
                    </v-btn>
                </v-card-actions>
                <br>
            </v-card>
        </form>
    </Default>
</template>

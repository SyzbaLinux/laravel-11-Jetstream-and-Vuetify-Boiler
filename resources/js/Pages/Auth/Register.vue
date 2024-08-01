<script setup>
import { useForm } from '@inertiajs/vue3';
import Default from "@/Layouts/Default.vue";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />

    <Default>


        <form @submit.prevent="submit">
            <v-card class="glass mx-auto" max-width="500">
                <v-card-text class="text-center mt-3">
                    <h1>Register</h1>
                </v-card-text>

                <v-card-text>
                    <v-text-field
                        id="name"
                        v-model="form.name"
                        type="text"
                        label="Enter Your Fullname"
                        required
                        autofocus
                        autocomplete="name"
                        :error-messages="form.errors.name"
                    />
                    <v-text-field
                        id="email"
                        v-model="form.email"
                        type="email"
                        label="Email"
                        required
                        autocomplete="username"
                        :error-messages="form.errors.email"
                    />
                    <v-text-field
                        id="password"
                        v-model="form.password"
                        type="password"
                        label="Password"
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
                    <v-checkbox id="terms" v-model:checked="form.terms" name="terms" required>
                        <template v-slot:label>
                            <div class="ms-2">
                                I agree to the <a target="_blank"  href="#">Terms of Service</a> and <a  href="#" target="_blank" >Privacy Policy</a>
                            </div>
                        </template>
                    </v-checkbox>

                </v-card-text>
                <v-card-actions>
                    <v-btn variant="flat" size="large" type="submit" :loading="form.processing">
                        Register
                    </v-btn>
                    <v-spacer/>

                    <InertiaLink :href="route('login')">
                        <v-btn variant="text" >
                            Already registered?
                        </v-btn>
                    </InertiaLink>
                </v-card-actions>
            </v-card>
        </form>
    </Default>
</template>

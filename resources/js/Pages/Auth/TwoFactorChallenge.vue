<script setup>
import { nextTick, ref } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Default from "@/Layouts/Default.vue";

const recovery = ref(false);

const form = useForm({
    code: '',
    recovery_code: '',
});

const recoveryCodeInput = ref(null);
const codeInput = ref(null);

const toggleRecovery = async () => {
    recovery.value ^= true;

    await nextTick();

    if (recovery.value) {
        recoveryCodeInput.value.focus();
        form.code = '';
    } else {
        codeInput.value.focus();
        form.recovery_code = '';
    }
};

const submit = () => {
    form.post(route('two-factor.login'));
};
</script>

<template>
    <Head title="Two-factor Confirmation" />

    <Default>
        <form @submit.prevent="submit">
            <v-card class="glass mx-auto" max-width="500">
            <v-card-text class="text-center mt-3">
                <h1>
                    Enter OTP
                </h1>
                <hr class="my-2">
                <div class="mb-4 text-sm text-gray-600">
                    <template v-if="! recovery">
                        Please confirm access to your account by entering the authentication code provided by your authenticator application.
                    </template>

                    <template v-else>
                        Please confirm access to your account by entering one of your emergency recovery codes.
                    </template>
                </div>
            </v-card-text>

            <v-card-text  v-if="! recovery">
                <v-text-field
                    id="code"
                    ref="codeInput"
                    v-model="form.code"
                    type="text"
                    inputmode="numeric"
                    label="Code"
                    autofocus
                    autocomplete="one-time-code"
                    :error-messages="form.errors.code"
                />
            </v-card-text>
            <v-card-text   v-else>
                <v-text-field
                    id="recovery_code"
                    ref="recoveryCodeInput"
                    v-model="form.recovery_code"
                    type="text"
                    label="Recovery Code"
                    autocomplete="one-time-code"
                    :error-messages="form.errors.recovery_code"
                />
            </v-card-text>

            <v-card-text class="mt-n3">
                <div >
                    <v-btn size="large" block   :loading="form.processing">
                        Log in
                    </v-btn>


                    <v-btn variant="text" block type="button" class="my-3" @click.prevent="toggleRecovery">
                        <template v-if="! recovery">
                            Use a recovery code
                        </template>

                        <template v-else>
                            Use an authentication code
                        </template>
                    </v-btn>
                </div>
            </v-card-text>
        </v-card>
        </form>
    </Default>
</template>

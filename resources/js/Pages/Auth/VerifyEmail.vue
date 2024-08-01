<script setup>
import { computed } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Default from "@/Layouts/Default.vue";

const props = defineProps({
    status: String,
});

const form = useForm({});

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <Head title="Email Verification" />

    <Default>
        <form @submit.prevent="submit">
            <v-card class="glass mx-auto" max-width="500">
                <v-card-text class="text-center mt-3">
                    <h1>Verify your Account</h1>
                    <hr class="my-2">
                    <div>
                        Before continuing, please verify your email by clicking the link we just sent. Didn't get the email? We can send another!
                    </div>

                    <div v-if="verificationLinkSent" class="text-green">
                        A new verification link has been sent to the email address you provided in your profile settings.
                    </div>
                </v-card-text>

                <v-card-actions class="my-5">
                    <v-btn type="submit" class="mr-3" variant="flat" :loading="form.processing">
                       <v-icon>mdi-email-sync</v-icon> Resend Verification Email
                    </v-btn>
                    <v-spacer/>

                    <div class="d-flex">
                        <InertiaLink
                            :href="route('profile.show')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                           <v-btn variant="tonal" class="mx-1">
                              <v-icon>mdi-account-edit</v-icon> Edit Profile
                           </v-btn>
                        </InertiaLink>

                        <InertiaLink
                            :href="route('logout')"
                            method="post"
                            as="button"
                        >
                            <v-btn variant="tonal" class="mx-1">
                               Log Out &nbsp;<v-icon>mdi-logout</v-icon>
                            </v-btn>
                        </InertiaLink>
                    </div>
                </v-card-actions>
            </v-card>
        </form>
    </Default>
</template>

<template>
    <!-- ============================== Start Newsletter ================================== -->
        <div class="parallax-omni-subscribers py-10">
            <v-row class="d-flex align-center">
                <v-col cols="12" sm="6">
                    <h1 class="heading-title-center text-center text-white  text-h4">
                        Sign now for newsletters
                    </h1>
                    <p class="text-white  text-center">Unsubscribe at anytime</p>
                </v-col>
                <v-col cols="12" sm="6">
                    <v-form @submit.prevent="SubscribeUser" class="mx-3">
                        <v-text-field
                            class="mx-2"
                            variant="solo-filled"
                            label="Enter your name"
                            v-model="form.fullname"
                        />

                        <v-text-field
                            class="mx-2"
                            variant="solo-filled"
                            label="Enter your email"
                            v-model="form.email"
                            :error-messages="$page.props.errors.email"
                        />

                        <v-btn
                            variant="flat"
                            block
                            size="large"
                            color="primary"
                            class="no-uppercase mt-3"
                            type="submit"
                            :loading="form.processing"
                        >
                            Subscribe
                        </v-btn>

                    </v-form>
                </v-col>
            </v-row>
        </div>
    <!-- ================================= End Newsletter =============================== -->
</template>

<script>
export default {
    name: "JoinMailList",
    data(){
        return{

            form:this.$inertia.form({
                fullname:'',
                email:''
            }),

            overlay:true
        }
    },

    methods:{
        SubscribeUser(){
            this.form.post(route('subscribe'),{
                preserveScroll:true,
                onSuccess:()=>{
                    this.form.reset()
                }
            })
        }
    }


}
</script>

<style  >
.parallax-omni-subscribers{
    background-image: url("/images/logo-decorated.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.newsletter.inverse-theme h2, .newsletter.inverse-theme p {
    color: #ffffff;
}
</style>


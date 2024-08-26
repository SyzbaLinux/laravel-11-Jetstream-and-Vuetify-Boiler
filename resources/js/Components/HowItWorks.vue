<template>
    <div class=" my-10  text-center">
        <v-container >
            <div class=" up wow fadeInLeft animated" >
                <h4>HOW TO GET STARTED</h4>
                <h1 class="heading-title-center">
                    How It Works In 4
                    Simple Steps
                </h1>
            </div>

            <div>
                <!--================= Step Section Start Here =================-->
                <div class="back-step__area step__area p-relative pt-120 pb-30">
                    <div class="step__shape">
                        <img v-if="$vuetify.display.smAndUp" class="step__shape-2" src="/images/dot.png" alt="Boy grabbing some books">
                    </div>
                    <v-container class="step__width">
                        <v-row>
                            <v-col cols="12" xl="7" lg="7" md="12" >
                                <div class="step__image-area">
                                    <img style="transform: scaleX(-1); width: 100%"   src="/images/7450172.png" alt="boy-image">
                                </div>
                            </v-col>
                            <v-col v-if="$vuetify.display.smAndUp" cols="12" xl="5" lg="5" md="12">
                                <div class="step__content">
                                    <div class="step__content1">
                                        <div  class="step__content1--icon">
                                            <div class="step__content1--icon-1">
                                                <span>01</span>
                                            </div>
                                        </div>
                                        <div class="step__content1--content">
                                            <h4>Sign Up</h4>
                                            <p>Visit the registration section of our website and <br> fill in all the required details to create your account.</p>
                                        </div>
                                    </div>
                                    <div class="step__content2">
                                        <div class="step__content2--icon">
                                            <div class="step__content2--icon-2">
                                                <span>02</span>
                                            </div>
                                        </div>
                                        <div class="step__content2--content">
                                            <h4>Select Your Course</h4>
                                            <p>Browse our courses, add your preferred course to the cart, and <br> proceed to checkout.</p>
                                        </div>
                                    </div>
                                    <div class="step__content3">
                                        <div class="step__content3--icon">
                                            <div class="step__content3--icon-3">
                                                <span>03</span>
                                            </div>
                                        </div>
                                        <div class="step__content3--content">
                                            <h4>Complete Payment</h4>
                                            <p>Navigate to the payment section, choose your preferred payment method, <br> and complete your transaction securely.</p>
                                        </div>
                                    </div>
                                    <div class="step__content4">
                                        <div class="step__content4--icon">
                                            <div class="step__content4--icon-4">
                                                <span>04</span>
                                            </div>
                                        </div>
                                        <div class="step__content4--content">
                                            <h4>Start Learning</h4>
                                            <p>Access your student portal, find your enrolled courses, <br> and begin your learning journey.</p>
                                        </div>
                                    </div>
                                </div>
                            </v-col>

                            <v-col v-else>
                                  <v-card class="glass-shadow my-13">
                                      <v-card-title>
                                          <v-avatar color="primary">
                                              01
                                          </v-avatar>
                                      </v-card-title>
                                      <v-card-text>
                                          <h4>Sign Up</h4>
                                          <p>Visit the registration section of our website and <br> fill in all the required details to create your account.</p>
                                      </v-card-text>
                                  </v-card>

                                <v-card class="glass-shadow my-13">
                                    <v-card-title>
                                        <v-avatar color="primary">
                                            02
                                        </v-avatar>
                                    </v-card-title>
                                    <v-card-text>
                                        <h4>Select Your Course</h4>
                                        <p>Browse our courses, add your preferred course to the cart, and <br> proceed to checkout.</p>
                                    </v-card-text>
                                </v-card>

                                <v-card class="glass-shadow my-13">
                                    <v-card-title>
                                        <v-avatar color="primary">
                                            03
                                        </v-avatar>
                                    </v-card-title>
                                    <v-card-text>
                                        <h4>Complete Payment</h4>
                                        <p>Navigate to the payment section, choose your preferred payment method, <br> and complete your transaction securely.</p>
                                    </v-card-text>
                                </v-card>

                                <v-card class="glass-shadow my-13">
                                    <v-card-title>
                                        <v-avatar color="primary">
                                            04
                                        </v-avatar>
                                    </v-card-title>
                                    <v-card-text>
                                        <h4>Start Learning</h4>
                                        <p>Access your student portal, find your enrolled courses, <br> and begin your learning journey.</p>
                                    </v-card-text>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-container>
                </div>
                <!--================= Step Section End Here =================-->
            </div>
        </v-container>
    </div>
</template>

<style scoped>


/*****************************************************
    13. Step Section CSS Here
****************************/
.back-step__area {
    position: relative;
}
.back-step__area .step__title-content {
    padding-bottom: 30px;
}
.back-step__area .step__pre-title {
    font-size: 16px;
    font-weight: 600;
    color: #2a6df5;
}
.back-step__area .step__title {
    font-size: 40px;
    font-weight: 800;
    color: #020334;
    margin: 0 0 30px;
}
.back-step__area .step__content {
    padding-top: 14px;
}
.back-step__area .step__content1 {
    display: flex;
    margin-left: -22%;
    margin-bottom: 70px;
}
.back-step__area .step__content1--icon {
    margin-right: 35px;
}
.back-step__area .step__content1--icon-1 {
    position: relative;
    background-image: -moz-linear-gradient(120deg, #2b70fa 0%, #84bcfa 100%);
    background-image: -webkit-linear-gradient(120deg, #2b70fa 0%, #84bcfa 100%);
    background-image: linear-gradient(120deg, #2b70fa 0%, #84bcfa 100%);
    box-shadow: 0px 6px 10px 0px rgba(16, 73, 189, 0.3);
    border-radius: 50%;
    width: 66px;
    height: 66px;
    line-height: 25px;
}
.back-step__area .step__content1--icon-1 span {
    font-size: 20px;
    color: #ffffff;
    position: absolute;
    height: 17px;
    left: 23px;
    top: 20px;
}
.back-step__area .step__content1--content {
    margin-left: 25px;
}
.back-step__area .step__content1--content h4 {
    font-size: 20px;
    font-weight: 800;
    line-height: 25px;
    margin: 0 0 15px;
    color: #020334;
}
.back-step__area .step__content1--content p {
    font-size: 15px;
    font-weight: 500;
    line-height: 22px;
    color: #4b4c57;
}
.back-step__area .step__content2 {
    display: flex;
    margin-bottom: 70px;
}
.back-step__area .step__content2--icon {
    margin-right: 30px;
}
.back-step__area .step__content2--icon-2 {
    position: relative;
    background-image: -moz-linear-gradient(120deg, #f8452d 0%, #f7b8af 100%);
    background-image: -webkit-linear-gradient(120deg, #f8452d 0%, #f7b8af 100%);
    background-image: linear-gradient(120deg, #f8452d 0%, #f7b8af 100%);
    box-shadow: 0px 6px 10px 0px rgba(16, 73, 189, 0.3);
    border-radius: 50%;
    width: 66px;
    height: 66px;
    line-height: 25px;
}
.back-step__area .step__content2--icon-2 span {
    font-size: 20px;
    color: #ffffff;
    position: absolute;
    height: 17px;
    left: 23px;
    top: 20px;
}
.back-step__area .step__content2--content h4 {
    font-size: 20px;
    font-weight: 800;
    line-height: 25px;
    margin: 0 0 15px;
    color: #020334;
}
.back-step__area .step__content2--content p {
    font-size: 15px;
    font-weight: 500;
    line-height: 22px;
    color: #4b4c57;
}
.back-step__area .step__content3 {
    display: flex;
    margin-bottom: 70px;
}
.back-step__area .step__content3--icon {
    margin-right: 30px;
}
.back-step__area .step__content3--icon-3 {
    position: relative;
    background-image: -moz-linear-gradient(120deg, #31c369 0%, #a0eac2 100%);
    background-image: -webkit-linear-gradient(120deg, #31c369 0%, #a0eac2 100%);
    background-image: linear-gradient(120deg, #31c369 0%, #a0eac2 100%);
    box-shadow: 0px 6px 10px 0px rgba(16, 73, 189, 0.3);
    border-radius: 50%;
    width: 66px;
    height: 66px;
    line-height: 25px;
}
.back-step__area .step__content3--icon-3 span {
    font-size: 20px;
    color: #ffffff;
    position: absolute;
    height: 17px;
    left: 23px;
    top: 20px;
}
.back-step__area .step__content3--content h4 {
    font-size: 20px;
    font-weight: 800;
    line-height: 25px;
    margin: 0 0 15px;
    color: #020334;
}
.back-step__area .step__content3--content p {
    font-size: 15px;
    font-weight: 500;
    line-height: 22px;
    color: #4b4c57;
}
.back-step__area .step__content4 {
    display: flex;
    margin-left: -25%;
    margin-bottom: 70px;
}
.back-step__area .step__content4--icon {
    margin-right: 35px;
}
.back-step__area .step__content4--icon-4 {
    position: relative;
    background-image: -moz-linear-gradient(120deg, #9b2cfa 0%, #d8aaff 100%);
    background-image: -webkit-linear-gradient(120deg, #9b2cfa 0%, #d8aaff 100%);
    background-image: linear-gradient(120deg, #9b2cfa 0%, #d8aaff 100%);
    box-shadow: 0px 6px 10px 0px rgba(16, 73, 189, 0.3);
    border-radius: 50%;
    width: 66px;
    height: 66px;
    line-height: 25px;
}
.back-step__area .step__content4--icon-4 span {
    font-size: 20px;
    color: #ffffff;
    position: absolute;
    height: 17px;
    left: 23px;
    top: 20px;
}
.back-step__area .step__content4--content {
    margin-left: 25px;
}
.back-step__area .step__content4--content h4 {
    font-size: 20px;
    font-weight: 800;
    line-height: 25px;
    margin: 0 0 15px;
    color: #020334;
}
.back-step__area .step__content4--content p {
    font-size: 15px;
    font-weight: 500;
    line-height: 22px;
    color: #4b4c57;
}
.back-step__area .step__shape img {
    position: absolute;
    -index: -1;
}
.back-step__area .step__shape .step__shape-2 {
    top: 5%;
    left: 51%;
}
</style>
<script setup lang="ts">
</script>

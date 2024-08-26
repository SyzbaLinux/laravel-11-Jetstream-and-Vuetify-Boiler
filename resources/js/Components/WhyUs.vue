<script setup>

</script>

<template>
    <v-container class="my-10 pt-10 choose-us-section d-flex align-items-center">
        <div class="container">
            <v-row class="d-flex align-center">
                <v-col cols="12" lg="6" md="6">
                    <div class="section-title up wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                        <h4 class="text-center">WHY CHOOSE US</h4>
                        <h1 class="heading-title-center">Our Core Features</h1>
                    </div>
                    <v-row>
                        <v-col cols="12" md="6" lg="6">
                            <div class="single-choose-us-box wow fadeInLeft animated glass-shadow-lg" style="visibility: visible; animation-name: fadeInLeft;">
                                <div class="choose-us-icon">
                                    <img src="/images/icons/choose-us-icon.png" alt="icon">
                                    <div class="choose-us-title">
                                        <h1>01</h1>
                                    </div>

                                </div>
                                <div class="choose-us-content">
                                    <h4>Virtual Classroom</h4>
                                    <p>Students can access course
                                        materials, participate in debate &amp; discussions.</p>
                                </div>
                            </div>
                        </v-col>
                        <v-col  cols="12" md="6" lg="6" >
                            <div class="single-choose-us-box upper wow fadeInDown animated glass-shadow-lg" style="visibility: visible; animation-name: fadeInDown;">
                                <div class="choose-us-icon">
                                    <img src="/images/icons/choose-us-icon1.png" alt="icon">
                                    <div class="choose-us-title">
                                        <h1>02</h1>
                                    </div>
                                </div>
                                <div class="choose-us-content">
                                    <h4>Remote Education</h4>
                                    <p>Students can access course
                                        materials, participate in debate &amp; discussions.</p>
                                </div>
                            </div>
                            <br>
                        </v-col>
                        <v-col  cols="12" md="6" lg="6">
                            <div class="single-choose-us-box up wow fadeInUp animated glass-shadow-lg" style="visibility: visible;animation-name: fadeInUp;">
                                <div class="choose-us-icon">
                                    <img src="/images/icons/choose-us-icon2.png" alt="icon">
                                    <div class="choose-us-title">
                                        <h1>03</h1>
                                    </div>
                                </div>
                                <div class="choose-us-content">
                                    <h4>Digital Learning</h4>
                                    <p>Students can access course
                                        materials, participatein deb
                                        ate &amp; discussions.</p>
                                </div>
                            </div>
                        </v-col>
                        <v-col  cols="12" md="6" lg="6">
                            <div class="single-choose-us-box wow fadeInRight animated glass-shadow-lg" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="choose-us-icon">
                                    <img src="/images/icons/choose-us-icon3.png" alt="icon">
                                    <div class="choose-us-title">
                                        <h1>04</h1>
                                    </div>
                                </div>
                                <div class="choose-us-content">
                                    <h4>Educator Support</h4>
                                    <p>Students can access course
                                        materials, participate in debate &amp; discussions.</p>
                                </div>
                            </div>
                        </v-col>
                    </v-row>
                </v-col>
                <v-col  cols="12" md="6" lg="6">
                    <div class="choose-us-thumb wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                        <v-img cover src="/images/student-hero.png" alt="thumb"/>
                    </div>
                </v-col>
            </v-row>
        </div>
    </v-container>
</template>

<style scoped>


.choose-us-section{
    background: url(/images/school-icons.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}

.choose-us-section .section-title.up {
    margin-bottom: 57px;
}

.single-choose-us-box {
    position: relative;
    z-index: 1;
    border-radius: 5px;
    background-color: #ffffff;
    border: 1px solid rgba(85,85,85,0.1);
    padding: 44px 0 15px 30px;
    margin-bottom: 30px;
    transition: .5s;
}

.single-choose-us-box.upper {
    margin-top: 52px;
}

.single-choose-us-box.up {
    margin-top: -52px;
}

.single-choose-us-box:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: #0165ad;
    border-radius: 5px;
    transition: .5s;
    z-index: -1;
    transform: scale(0);
}

.single-choose-us-box:hover:before{
    transform: scale(1);
}


.choose-us-icon {
    position: relative;
    z-index: 0;
    margin-left: 20px;
}

.choose-us-icon:before {
    position: absolute;
    content: "";
    left: -20px;
    top: 0;
    opacity: 0.129;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    background-color: #0165ad;
    transition: .5s;
}

.choose-us-icon img{
    transition: .5s;
}

.choose-us-title {
    position: absolute;
    top: -23px;
    right: 25px;
}

.choose-us-title h1 {
    -webkit-text-stroke-width: 2px;
    color: transparent;
    -webkit-text-stroke-color: #f1f1f1;
    font-size: 60px;
    font-weight: 500;
    transition: .5s;
}

.choose-us-content h4 {
    font-size: 20px;
    color: #232323;
    font-weight: 500;
    transition: .5s;
    padding: 20px 0 12px;
}

.choose-us-content p {
    font-size: 16px;
    line-height: 28px;
    color: #555555;
    font-weight: 400;
    width: 84%;
    transition: .5s;
}

.single-choose-us-box:hover .choose-us-icon img{
    filter: brightness(0) invert(1);
}

.single-choose-us-box:hover .choose-us-icon:before{
    filter: brightness(0) invert(1);
}

.single-choose-us-box:hover .choose-us-title h1{
    color: #fffffe;
    -webkit-text-stroke-width: 2px;
    color: transparent;
    -webkit-text-stroke-color: #f1f1f1;
}

.single-choose-us-box:hover .choose-us-content h4{
    color: #fffffe;
}

.single-choose-us-box:hover .choose-us-content p{
    color: #fffffe;
}
</style>

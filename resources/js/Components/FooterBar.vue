<template>
    <!-- ============================ Footer Start ================================== -->
    <footer class="theme-footer">
        <div>
            <v-container fluid >
                <v-row>
                    <v-col cols="12" sm="6" md="4" >
                        <div class="footer-widget text-center-sm pa-3">
                            <div class="widget-title font-weight-light">
                                <img class="mt-n4" src="/images/logo-white.png" alt="logo" width="100" height="50">
                            </div>


                            <p class="text-white pr-10 text-justify">
                                Omni Learning is an online platform that connects content creators and content consumers. Can be used by schools as e-learning
                            </p>
                            <v-divider class="my-3"/>
                            <ul class="footer-bottom-social d-flex align-center  ">
                                <li>
                                    <a href="https://www.facebook.com/OmniLearning" target="_blank" class="menu-a mx-2 mt-1">
                                        <v-icon
                                            class="ph ph-facebook-logo"
                                            color="white"
                                            size="30"
                                        />
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/omnilearninginc" target="_blank" class="menu-a mx-2">
                                        <v-icon

                                            class="ph ph-instagram-logo"
                                            color="white"
                                            size="30"
                                        />
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.youtube.com/@omnilearninginc2729" target="_blank" class="menu-a mx-2">
                                        <v-icon
                                            class="ph ph-youtube-logo"
                                            color="white"
                                            size="35"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </v-col>
                    <v-col cols="12" sm="6" md="4" >
                        <div class="footer-widget text-center-sm pa-2">
                            <h3 class="widget-title font-weight-light">Quick Links</h3>
                            <ul class="ml-8">
                                <li class="footer-link"><a href="/about-omnilearning">About Us</a></li>
                                <li class="footer-link"><a href="/faqs">FAQs </a></li>
                                <li class="footer-link"><a href="/help-centre">Help & Support</a></li>
                                <li class="footer-link"><a href="/blog">Blog</a></li>
                                <li class="footer-link"><a href="/our-team">Our Team Members</a></li>
                            </ul>
                        </div>
                    </v-col>
                    <v-col cols="12" sm="6" md="4" >
                        <div class="footer-widget text-center-sm pa-2">
                            <h3 class="widget-title font-weight-light">Need some help?</h3>
                            <ul class="ml-8">
                                Address
                                <li class="ml-8 footer-link">
                                    3 Anchor House 4th Floor
                                    <br>
                                    Harare Zimbabwe
                                </li>
                                <br>

                               Phone Numbers
                                <li  class="ml-8 footer-link">
                                    <a href="tel:+263771049950">+263 771 049 950</a>
                                </li>
                                <li  class="ml-8 footer-link">
                                    <a href="tel:+61432332722">+61 432 332 722</a>
                                </li>

                                <br>
                                Email
                                <li  class="ml-8 footer-link">
                                    <a href="mailto:marketing@omni-learning.com">marketing@omni-learning.com</a>
                                </li>
                                <li  class="ml-8 footer-link">
                                    <a href="mailto:emmasiziba@gmail.com">emmasiziba@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </div>

        <div class="footer-bottom ">
            <v-container fluid class="px-5">
                <v-row >
                    <v-col cols="12" md="6" lg="4"  >
                        <p class="mb-0" style=" font-size: 16px">
                            &copy; 2023  Designed by OmniDevOps
                        </p>
                    </v-col>


                    <v-col cols="12" md="6" lg="8" >
                        <div class="copyright-social  ">
                            <ul>
                                <li class="footer-link mr-3">
                                    <InertiaLink href="/terms-and-conditions" >Terms &amp; Conditions</InertiaLink>
                                </li>
                                <li class="footer-link mx-3">
                                    <InertiaLink href="/privacy-policy" > Privacy Policy</InertiaLink>
                                </li>
                                <li class="footer-link mx-3">
                                    <InertiaLink href="/refund-policy" > Refund Policy</InertiaLink>
                                </li>
                                <li class="footer-link mx-3">
                                    <InertiaLink href="/student-agreement" > Student Agreement</InertiaLink>
                                </li>
                            </ul>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </div>
    </footer>


    <!-- ============================ Footer End ================================== -->
</template>

<script>

export default {
    name: "FooterBar"
}
</script>

<style scoped>
.copyright-social ul li{
    font-size: 16px !important;
}

.footer-bottom{
    background: #000;
}
.theme-footer{
    background: #0165ad;
    color:white !important;
}

.widget-title {
    color:white !important;
}

.footer-widget a{
    color:white !important;
}

.footer-bottom-social a{
    text-decoration: none !important;
    color:white !important;
}

.footer-bottom-social li {
    list-style: none !important;
}

.social-button{
    padding-left: 20px !important;
    font-size: 30px;
}

.copyright-social ul li {
    display: inline-block;
    margin-right: 10px;
}
.copyright-social a {
    text-decoration: none;
    color: white !important;
}
.footer-widget a {
    text-decoration: none;
    color: white !important;
}

.footer-widget li {
    text-decoration: none;
    color: white !important;
    padding-bottom: 5px !important;
}

.widget-title {
    /*border-bottom: 1px solid #eee;*/
    padding-bottom: 10px;
    margin-bottom: 20px;
    position: relative;
    font-size: 24px;
}

.widget-title:before {
    content: "";
    position: absolute;
    background: #fff3e0;
    bottom: -1px;
    left: 0;
    width: 50px;
    height: 2px
}

.footer-link   {
    color: #fff !important;
}

.footer-link a  {
    position: relative;
    text-decoration: none;
    color: #fff !important;
}

.footer-link a::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    border-radius: 3px;
    background-color: #d1d1d1;
    bottom: 0;
    left: 0;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .3s ease-in-out;
}

.footer-link a:hover::before {
    transform-origin: left;
    transform: scaleX(1);
}
</style>

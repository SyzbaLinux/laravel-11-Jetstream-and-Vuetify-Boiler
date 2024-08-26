<template>
    <div class="home_1_hero-header_content-right">
        <div class="home_1_hero-header_images-layout">
            <!-- Left Image List -->
            <div class="home_1_hero-header_image-list-left">
                <div class="home_1_hero-header_image-list">
                    <div class="home_1_hero-header_image-wrapper glass">
                        <img src="/assets/office-video-internet-conference.jpg" loading="lazy" width="512" alt=""
                             srcset="/assets/office-video-internet-conference.jpg 500w, /assets//assets/office-video-internet-conference.jpg 800w, /assets/office-video-internet-conference.jpg 1024w"
                             sizes="(max-width: 479px) 43vw, (max-width: 991px) 44vw, 22vw" class="home_1_hero-header_image">
                    </div>
                    <div class="home_1_hero-header_image-wrapper">
                        <img src="/assets/kids-wearing-virtual-reality-goggles.jpg" loading="lazy" width="512"
                             sizes="(max-width: 479px) 43vw, (max-width: 991px) 44vw, 22vw"
                             alt="" srcset="/assets/kids-wearing-virtual-reality-goggles.jpg 500w, /assets/kids-wearing-virtual-reality-goggles.jpg 800w, /assets/kids-wearing-virtual-reality-goggles.jpg 1024w"
                             class="home_1_hero-header_image">
                    </div>
                    <div class="home_1_hero-header_image-wrapper">
                        <img src="/assets/student-learn.jpg" loading="lazy" width="512"
                             alt="" srcset="/assets/student-learn.jpg 500w, /assets/student-learn.jpg 800w, /assets/student-learn.jpg 1024w"
                             sizes="(max-width: 479px) 43vw, (max-width: 991px) 44vw, 22vw" class="home_1_hero-header_image">
                    </div>

                    <div class="home_1_hero-header_image-wrapper glass">
                        <img src="/assets/remote-learning.jpg" loading="lazy" width="512" alt=""
                             srcset="/assets/remote-learning.jpg 500w, /assets/remote-learning.jpg 800w, /assets/remote-learning.jpg 1024w"
                             sizes="(max-width: 479px) 43vw, (max-width: 991px) 44vw, 22vw" class="home_1_hero-header_image">
                    </div>
                </div>
            </div>

            <!-- Right Image List -->
            <div class="home_1_hero-header_image-list-right">
                <div class="home_1_hero-header_image-list">
                    <div class="home_1_hero-header_image-wrapper">
                        <img src="/assets/girl-holding-laptop-studying-university.jpg" loading="lazy" width="512"
                             alt="" srcset="/assets/girl-holding-laptop-studying-university.jpg 500w, /assets/girl-holding-laptop-studying-university.jpg 800w, /assets/girl-holding-laptop-studying-university.jpg 1024w"
                             sizes="(max-width: 479px) 43vw, (max-width: 991px) 44vw, 22vw" class="home_1_hero-header_image">
                    </div>
                    <div class="home_1_hero-header_image-wrapper">
                        <img src="/assets/teenage-girl-with-headphones-online-school.jpg" loading="lazy" width="512"
                             alt="" srcset="/assets/teenage-girl-with-headphones-online-school.jpg 500w, /assets/teenage-girl-with-headphones-online-school.jpg 800w, /assets/teenage-girl-with-headphones-online-school.jpg 1024w"
                             sizes="(max-width: 479px) 43vw, (max-width: 991px) 44vw, 22vw" class="home_1_hero-header_image">
                    </div>
                    <div class="home_1_hero-header_image-wrapper">
                        <img src="/assets/man-learning.jpg" loading="lazy"
                             sizes="(max-width: 479px) 43vw, (max-width: 991px) 44vw, 22vw"
                             alt="" srcset="/assets/man-learning.jpg 500w, /assets/man-learning.jpg 800w, /assets/man-learning.jpg 1024w"
                             class="home_1_hero-header_image">
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<style>

.home_1_hero-header_image-list,.home_1_hero-header_image-list-left {
    grid-column-gap: 1rem;
    grid-row-gap: 1rem;
    grid-template-rows: auto;
    grid-template-columns: 1fr;
    grid-auto-columns: 1fr;
    width: 100%;
    height: 100%;
    display: grid
}

.home_1_hero-header_image-list-left {
    column-count: 2;
    align-self: center;
    grid-column-gap: 1.5rem;
    column-gap: 1.5rem;
    margin-top: -120%
}

.home_1_hero-header_image-wrapper {
    width: 100%;
    padding-top: 120%;
    position: relative
}

.home_1_hero-header_content-right {
    grid-column-gap: 1rem;
    align-items: center;
    height: 100vh;
    padding-right: 5vw;
    overflow: hidden
}

.home_1_hero-header_image {
    object-fit: cover;
    border-radius: 15px;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.home_1_hero-header_images-layout {

    grid-column-gap: 1rem;
    grid-row-gap: 0;
    grid-template-rows: auto auto;
    grid-template-columns: 1fr 1fr;
    grid-auto-columns: 1fr;
    width: 112%;
    display: grid
}

.home_1_hero-header_image-list-right {
    grid-column-gap: 1rem;
    grid-row-gap: 1rem;
    grid-template-rows: auto;
    grid-template-columns: 1fr;
    grid-auto-columns: 1fr;
    width: 100%;
    height: 100%;
    display: grid
}

@media screen and (max-width: 991px) {

    .home_1_hero-header_content-right {
        height: 40rem;
        padding-left: 5vw
    }
}

@media screen and (max-width: 767px) {

    .home_1_hero-header_content-right {
        height: 30rem
    }
}


.home_1_hero-header_image-list-left,.home_1_hero-header_image-list-right {
    will-change: transform;
    animation: smoothTransform 50s infinite
}

@keyframes smoothTransform {
    0% {
        transform: translateZ(0) scaleX(1) rotateX(0deg) rotateY(0deg) rotate(0deg) skew(0deg,0deg)
    }

    to {
        transform: translate3d(0,-50%,0) scaleX(1) rotateX(0deg) rotateY(0deg) rotate(0deg) skew(0deg,0deg)
    }
}



</style>
<script setup lang="ts">
</script>

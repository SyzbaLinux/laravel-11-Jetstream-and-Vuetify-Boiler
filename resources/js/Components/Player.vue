<template>
   <v-card class="glass">
       <v-card-text>
           <AudioPlayer
               :option="{
                        src: src,
                        title: title,
                        coverImage: '/images/favicon.png',
                        coverRotate:true,
                        progressBarColor:'#0165ad',
                        indicatorColor:'#41a748'
                   }"
           />
       </v-card-text>
   </v-card>
</template>

<script>
    import AudioPlayer from 'vue3-audio-player'
    import 'vue3-audio-player/dist/style.css'

    export default {
        props:['src','title'],
        components:{
            AudioPlayer
        }
    }
</script>

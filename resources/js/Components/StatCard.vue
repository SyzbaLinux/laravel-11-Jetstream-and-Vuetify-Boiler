<template>
    <InertiaLink :href="url" class="InertiaLink">
       <v-card variant="flat"  class="  glass cursor-hand rounded-lg mb-5">
            <div class="d-flex align-center">
                <div style="width: 80%" class="pa-3 mt-n5">
                    <h1 class="  mt-2">{{ num }}</h1>
                     {{ title }}
                </div>

                <v-card :color="color" class="mt-n1  pa-3 mr-"  elevation="12">
                     <v-icon >{{ icon }}</v-icon>
                </v-card>
            </div>

           <div>
               <v-btn block variant="text" :color="color"  >
                   View
               </v-btn>
           </div>
       </v-card>
    </InertiaLink>
</template>

<script>
export default {
    name: "StatCard",
    props:{
        color:{  type:String, default:'green' },
        icon:{   type:String, default:'mdi-scale-balance' },
        title:{  type:String, default:'' },
        num:{    type:Number, default:0  },
        url:{    type:String,default:'#' },
    }
}
</script>
<style scoped>
</style>


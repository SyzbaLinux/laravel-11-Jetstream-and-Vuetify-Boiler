<template>
    <v-card class="glass overflow-visible" min-height="550">
        <a :href="route('singleNews',blog.slug)">
            <v-img
                :href="route('singleNews',blog.slug)"
                class="hover-up rounded-lg"
                height="250"
                :src="blog.preview_image"
                cover
            />
        </a>


        <div class="pa-3" >
            <InertiaLink class="InertiaLink text-primary"  :href="route('singleNews',blog.slug)">
                <h3>{{ blog.title }}</h3>
            </InertiaLink>
        </div>

        <v-card-text>
            <div>
                {{ truncateText(blog.meta_description,200) }}
            </div>
        </v-card-text>

        <v-divider/>

        <v-card-actions>
            <v-tooltip text="Share Article">
                <template v-slot:activator="{ props }">
                    <v-btn variant="text" size="small" color="primary" icon="mdi-share" v-bind="props"/>
                </template>
            </v-tooltip>


                <v-btn  :href="route('singleNews',blog.slug)" color="success" class="no-uppercase">
                    Read More
                </v-btn>


            <v-btn color="success" class="no-uppercase">
               <v-icon>mdi-account</v-icon> {{ getName(blog.user.name) }}
            </v-btn>
            <v-spacer/>

            <v-btn color="primary" class="no-uppercase">
               <v-icon>mdi-calendar</v-icon> {{ blogDate(blog.creeated_at) }}
            </v-btn>
        </v-card-actions>
    </v-card>

</template>

<script>
import moment from "moment";

export default {
    name: "NewsCard",
    props:{
        blog:{}
    },

    methods:{

        blogDate(date){
            return moment(date).format('MM/YY');
        },

        getName(fullName){
           const nameParts = fullName.split(' ');
           return nameParts[0][0] + ' ' + nameParts[1]
        },

        truncateText(text, maxLength) {
            if (text.length <= maxLength) {
                return text;
            }

            return text.substring(0, maxLength) + '...';
        }

}
}
</script>

<style scoped>

</style>

<template>
    <v-container class="glass my-5" >
        <v-row  >
            <v-col cols="12" sm="3">
                <InertiaLink
                    :href="route('course.single',course.slug)"
                >
                    <v-img
                        class="cursor-hand rounded-lg hover-up"
                        height="190"
                        cover
                        :src="'/storage/'+course.preview_image"
                    />
                </InertiaLink>
            </v-col>
            <v-col cols="12" sm="6"  >
                <InertiaLink   class="cursor-hand InertiaLink text-h6"  :href="route('course.single',course.slug)">
                    {{ course.title }}
                </InertiaLink>
                <p class="_14px mt-n1 mb-1"><b>By</b> {{ course.owner.name }} </p>
                <div class="d-flex mt-n1">
                    <v-chip variant="text" label class="mr-2"  color="primary">
                        <v-icon class="ph-duotone ph-book-open-text mr-1"></v-icon>{{ course.chapters_count }} Chapters
                    </v-chip>

                    <v-chip variant="text" label class="mr-2"  color="primary">
                        <v-icon  class="ph-duotone ph-graduation-cap mr-1" >uil-diary</v-icon> {{ course.lessons_count }} Lessons
                    </v-chip>
                </div>

                <v-rating
                    class="mt-2"
                    color="warning"
                    empty-icon="ph-star"
                    full-icon="ph-fill ph-star"
                    length="5"
                    size="30"
                    :model-value="course.rating"
                    disabled
                ></v-rating>

                <div>
                    <span class="_16px"> {{ course.enrollments_count }} Enrolls</span> <br>
                    <span class="_16px">Last Updated: {{ fomartMonth(course.updated_at) }}</span>
                </div>
            </v-col>

            <v-col cols="12" sm="3" class="pa-0 text-center" >

                <v-btn class="mb-5" size="large" variant="text" color="error" icon="ph-heart"/>

                <h3 v-if="course.is_priced">$ {{ course.price }}</h3>
                <div v-else  class="px-1">
                    <v-btn block variant="flat" color="green">FREE</v-btn>
                </div>


                    <div class="d-flex mt-3 justify-center">
                            <InertiaLink
                                :href="route('cartAddRemove',course.id)"
                                method="post"
                                class="mx-1 "
                            >
                                <v-btn color="primary" variant="flat">
                                    <v-icon icon="ph-shopping-cart-simple"></v-icon>
                                </v-btn>
                            </InertiaLink>

                        <InertiaLink
                            :href="route('course.single',course.slug)"
                            class="mx-1 "
                        >
                            <v-btn color="primary" variant="flat">
                                View Course
                            </v-btn>
                        </InertiaLink>
                    </div>

            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import moment from "moment";

export default {
    props:{
        course:{}
    },
    name: "LandscapeCard",

    methods:{

        truncate(text,length, clamp){
            clamp = clamp || '...';
            var node = document.createElement('div');
            node.innerHTML = text;
            var content = node.textContent;
            return content.length > length ? content.slice(0, length) + clamp : content;
        },

        fomartMonth(date){
            return moment(date).format('MMM/YYYY')
        }
    }
}
</script>

<style scoped>

</style>

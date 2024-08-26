<template>
    <v-card variant="outlined"  class="rounded-lg pb-2 glass-shadow">
        <v-card-text>
            <v-row >
                <v-col cols="4" class="text-center">
                        <InertiaLink :href="route('student.singleCourse',course.slug)" >
                            <v-img
                                height="60"
                                cover
                                class="rounded-lg cursor-hand"
                                :src="`/storage/`+course.preview_image"
                            />
                        </InertiaLink>
                </v-col>

                <v-col cols="8">
                    <InertiaLink
                        as="h4"
                        :href="route('student.singleCourse',course.slug)"
                        class="mt-1 cursor-hand"
                    >
                        {{ course.title }}
                    </InertiaLink>
                    <span class="text-grey _14px">
                        {{ getName(course.owner.name) }}
                    </span>
                </v-col>


                <v-col cols="12">
                    <v-divider class="mb-2"></v-divider>
                    <v-row>
                        <v-col cols="6">
                            <notebook-icon size="18" class="text-grey mb-n1"/>
                            <span class="text-grey _14px">&nbsp;{{ course.chapters_count }} Chapters</span>
                        </v-col>

                        <v-col cols="6">
                            <clock-icon size="18" class="text-grey mb-n1"/>
                            <span class="text-grey _14px">Self-Paced</span>
                        </v-col>

                        <v-col cols="6" class="my-n5">
                            <grid-dots-icon size="18" class="text-grey mb-n1"/>
                            <span class="text-grey _14px">&nbsp;{{ course.lessons_count}} Lessons</span>
                        </v-col>

                                   <v-col cols="6" class="my-n5">
                                     <v-chip
                                       color="accent"
                                       v-if="course.is_priced === 0"
                                       small
                                       label
                                       outlined
                                     >
                                       <span class="_13px">Free</span>
                                     </v-chip>

                                     <v-chip
                                       v-else
                                       small
                                       color="primary"
                                       label
                                     >
                                       <span class="_13px medium">${{ course.price }}</span>
                                     </v-chip>
                                   </v-col>
                    </v-row>
                </v-col>


            </v-row>
        </v-card-text>


        <v-card-actions class="mt-3" >
            <InertiaLink
                class="InertiaLink"
                :href="route('student.singleCourse',course.slug)"
                v-if="is_enrolled"
            >
                <v-btn variant="flat" block color="primary">
                    Continue <v-icon>ph-caret-right</v-icon>
                </v-btn>
            </InertiaLink>

            <InertiaLink
                class="InertiaLink"
                v-else
                :href="route('student.singleCourse',course.slug)"
            >
                <v-btn variant="flat" block color="primary">
                    View More <v-icon>ph-caret-right</v-icon>
                </v-btn>
            </InertiaLink>
        </v-card-actions>
    </v-card>
</template>
<script>
export default {
    name: "MyCourses",
    props: {
        course: {
            type: Object
        },
        is_enrolled:{
            default:0
        }
    },

    methods:{
        getName(fullName){
            const nameParts = fullName.split(' ');
            return nameParts[0][0] + ' ' + nameParts[1]
        },
    }
}
</script>

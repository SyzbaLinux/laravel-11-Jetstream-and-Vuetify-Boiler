<script  >
export default {
    props:['course'],

    computed: {
        truncatedDetails() {
            if(this.course.short_details){
                return this.course.short_details.length > 90
                    ? this.course.short_details.substring(0, 90) + '...'
                    : this.course.short_details;
            }else{

                return '.'
            }
        }
    }
}
</script>

<template>
    <div class="glass pa-3 d-flex" v-if="$vuetify.display.smAndUp" style="min-height: 250px">
        <div class="course-image">
          <InertiaLink :href="route('course.single',course.slug)">
              <img
                  :src="course.preview_image"
                  :alt="course.title"
                  width="100"
                  height="100"
                  class="glass"
              />
          </InertiaLink>
        </div>

        <div class="ml-3">
          <div class="d-flex align-center  ">
              <v-rating
                  :length="5"
                  :size="32"
                  :model-value="0"
                  active-color="warning"
                  color="black"
                  readonly
              />
              <v-spacer/>
              <div>
                  (0 <small>Reviews</small>)
              </div>
          </div>

            <InertiaLink class="InertiaLink" :href="route('course.single',course.slug)">
                <h2 class="text-h6 my-4 text-primary">{{ course.title }}</h2>
            </InertiaLink>

            <v-divider/>

            <div class="d-flex align-center justify-space-between _14px my-3">
                <div>
                    <v-icon size="20"  >mdi-book-open-blank-variant</v-icon> {{ course.chapters_count }} Chapters
                </div>

                <div>
                    <v-icon size="20" >mdi-school-outline</v-icon>  {{ course.lessons_count }} Lessons
                </div>

                <div>
                    <v-icon size="20" >mdi-account-group-outline</v-icon>   {{ course.enrolled_students_count }} Enrolled
                </div>
            </div>



            <p class="_14px my-5">
                {{ truncatedDetails  }}
            </p>

            <v-divider/>

            <div class="d-flex align-center justify-space-between mt-2">
                <div>
                    <v-avatar size="30">
                        <v-img
                            :alt="course.title"
                            src="/images/favicon.png"
                        ></v-img>
                    </v-avatar>
                    <span class="ml-1  _15px"><b>By</b> {{ course.owner.name }}</span>
                </div>
                <div>
                    <span v-if="is_priced">${{ course.price }}</span>
                    <v-chip label color="success" variant="flat"  v-else >
                        Free
                    </v-chip>
                </div>
            </div>
        </div>
    </div>

    <div v-else>
        <v-card class="glass">
            <InertiaLink :href="route('course.single',course.slug)">
                <v-img
                    :src="course.preview_image"
                    :alt="course.title"
                    class="glass"
                    height="250"
                    cover
                />
            </InertiaLink>

            <v-card-title>
                <InertiaLink class="InertiaLink" :href="route('course.single',course.slug)">
                    <h2 class="text-h6 my-2 text-primary">{{ course.title }}</h2>
                </InertiaLink>
            </v-card-title>

            <v-card-text>
                <div class="d-flex align-center  ">
                    <v-rating
                        :length="5"
                        :size="32"
                        :model-value="0"
                        active-color="warning"
                        color="black"
                    />
                    <v-spacer/>
                    <div>
                        (0 <small>Reviews</small>)
                    </div>
                </div>
            </v-card-text>

            <v-card-text>
                <v-divider/>

                <div class="d-flex align-center justify-space-between _14px my-2">
                    <div>
                        <v-icon size="20"  >mdi-book-open-blank-variant</v-icon> {{ course.chapters_count }} Chapters
                    </div>

                    <div>
                        <v-icon size="20" >mdi-school-outline</v-icon>  {{ course.lessons_count }} Lessons
                    </div>

                    <div>
                        <v-icon size="20" >mdi-account-group-outline</v-icon>   {{ course.enrolled_students_count }} Enrolled
                    </div>
                </div>



                <p class="_14px my-3">
                    {{ truncatedDetails  }}
                </p>

                <v-divider/>
            </v-card-text>

            <v-card-actions class="  align-center justify-space-between mt-2">
                <div>
                    <v-avatar size="30">
                        <v-img
                            :alt="course.title"
                            src="/images/favicon.png"
                        ></v-img>
                    </v-avatar>
                    <span class="ml-1  _15px"><b>By</b> {{ course.owner.name }}</span>
                </div>
                <div>
                    <span v-if="is_priced">${{ course.price }}</span>
                    <v-chip label color="success" variant="flat"  v-else >
                        Free
                    </v-chip>
                </div>
            </v-card-actions>

        </v-card>
    </div>
</template>

<style  >

</style>

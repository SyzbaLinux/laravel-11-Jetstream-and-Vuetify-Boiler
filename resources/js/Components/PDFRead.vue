<template>
    <vue-pdf-app style="height:80vh;"
                 :pdf="'/storage/'+pdfpath"
                 page-scale="page-actual"
                 :config="config"
    />
</template>
<script>
import VuePdfApp from "vue3-pdf-app";
import "vue3-pdf-app/dist/icons/main.css";

export default {
    components: {
        VuePdfApp
    },

    props:['pdfpath'],
    data() {
        return {
            page:null,
            actual:null,
            // disable "Previous page" button
            config: {
                toolbar: {
                    toolbarViewerRight: {
                        openFile: false,
                        viewBookmark: false,
                        print: false,
                        download: false
                    },
                    toolbarViewerLeft: {
                        previous: false,
                        next: false,
                        openFile: false,
                        viewBookmark: false,
                        print: false,
                        download: false
                    },
                }
            },
        };
    }
};
</script>

<template>
    <div class="flex justify-content-between flex-column ">
        <HeroBanner @scroll-down="scroll('learn-more')"></HeroBanner>
        <ReviewProducts @scroll-down="scroll('find-yours')" id="learn-more"></ReviewProducts>
        <FeatureGreen></FeatureGreen>
        <FeatureXImages></FeatureXImages>
        <FindModel id="find-yours"></FindModel>
    </div>
</template>
<script >
import HeroBanner from "./HeroBanner.vue";
import ReviewProducts from "./ReviewProducts/ReviewProducts";
import FeatureGreen from "./Feature/FeatureGreen";
import FeatureXImages from "./Feature/FeatureXImages";
import FindModel from "./Feature/FindModel";
import {Link} from "@inertiajs/inertia-vue3";
export default {
    name: "NavBar",
    components: {
        Link,
        ReviewProducts,
        HeroBanner,
        FeatureGreen,
        FeatureXImages,
        FindModel
    },
    methods:{
        scroll(id) {
           document.getElementById(id).scrollIntoView({behavior: 'smooth'});
        },
    },
}
</script>

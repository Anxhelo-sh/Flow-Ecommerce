<template>
    <div class="home">
        <HeroBanner @scroll-down="scroll('learn-more')"></HeroBanner>
        <div class="feature">
            <ReviewProducts @scroll-down="scroll('find-yours')" id="learn-more"></ReviewProducts>
            <FeatureGreen></FeatureGreen>
            <FeatureXImages></FeatureXImages>
            <FindModel id="find-yours"></FindModel>
        </div>

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
<style setup>
.feature{
    width: 100%;
    height: auto;
    background-color: white;
    position:relative;
    border-radius: 40px 40px 0 0;

}
@media screen and (max-width: 768px) {
    .home{
        margin-top:80px;
    }
}
</style>

<template>
    <div class="flex justify-content-between flex-column ">
        <HeroBanner></HeroBanner>
        <ReviewProducts></ReviewProducts>
        <FeatureGreen></FeatureGreen>
    </div>

    <Slider></Slider>
</template>
<script >
import Banner from "./Banner.vue";
import Slider from "./Slider.vue";
import HeroBanner from "./HeroBanner.vue";
import ReviewProducts from "./ReviewProducts/ReviewProducts";
import FeatureGreen from "./Feature/FeatureGreen";
import {Link} from "@inertiajs/inertia-vue3";
export default {
    name: "NavBar",
    components: {
        Link,
        Banner,
        ReviewProducts,
        Slider,
        HeroBanner,
        FeatureGreen,
    }
}
</script>

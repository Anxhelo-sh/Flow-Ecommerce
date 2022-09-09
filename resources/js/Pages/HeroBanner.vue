<template>
    <div class="page-wrapper">
        <section class="hero_wrap ">
            <div class="hero__video">
                <h1 >Built for the
                    everyday.</h1>
                <video id="video" playsinline="" loop="" autoplay="" no-controls="" muted="">
                    <source loading="lazy"
                            src="https://cdn.shopify.com/s/files/1/0505/4709/7785/files/hero-video-fdb01b9054d346f8a1050b30fb13e1db_3599ded5-717e-4cdb-bcb7-b093d2cb2547.mp4?v=1624898130"
                            type="video/mp4">
                </video>
                <a class="button" @click="scroll">Learn More</a>
<!--                <div class="video-control">-->
<!--                    <div class="playpause">-->
<!--                        <img-->
<!--                            src="//cdn.shopify.com/s/files/1/0505/4709/7785/t/36/assets/play-button.png?v=61032675451761629971657887431"-->
<!--                            class="play">-->
<!--                        <img-->
<!--                            src="//cdn.shopify.com/s/files/1/0505/4709/7785/t/36/assets/pause-button.png?v=93910660800972636201657887484"-->
<!--                            class="pause">-->
<!--                    </div>-->
<!--                    <a href="javascript:;" class="show-t">View Video transcript</a>-->
<!--                    <div class="hide-con">-->
<!--                        <p>Zugu’s iPad cases are built for the everyday. Whether you’re at the office, having your-->
<!--                            morning coffee at your kitchen table, or scrolling through recipes in the kitchen, our cases-->
<!--                            are here to support you and your iPad. Every Zugu case features up to 10 secure viewing-->
<!--                            angles, drop protection, and magnetic mounting capability (that allows you to mount the case-->
<!--                            on any metal surface…even your fridge!). Our cases are sleek, functional, protective, and-->
<!--                            designed to take your iPad experience to the next level.</p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>

        </section>


    </div>
</template>

<script>
import logoURL from '/images/background-img.jpg' ;
import {Link} from '@inertiajs/inertia-vue3';
import VideoBackground from 'vue-responsive-video-background-player'

export default {
    name: "HeroBanner",
    components: {
        Link,
        VideoBackground,
    },
    data() {
        return {
            logoURL,
        }
    },
    methods:{
        scroll() {
            this.$emit('scroll-down');
        }
    },
}
</script>

<style scoped>

.hero_wrap {
    width: 100%;
    overflow: hidden;
    height: calc(80vh - 112px);
    text-align: center;
    position: fixed !important;
    top: 100px;

}
h1 {
    position: absolute;
    right: auto;
    bottom: auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    color:#fff;
    z-index: 1;
    font-size: 72px;
    line-height: 90px;
}
#video {
    width: 100% ;
    height: auto;
}
.button:hover {
    background: var(--dark);
    color: var(--light);
    text-decoration: none;
    border: 1px solid var(--dark);

}

.button {
    position: absolute;
    width: auto;
    top: 65%;
    z-index: 3;
    left: 50%;
    background: #fff;
    border: none;
    transform: translate(-50%, -50%);
}

.video-control a {
    color: #fff;
    font-size: 16px;
    margin-left: 15px;
}

@media screen and (max-width: 1024px){

    h1 {
        letter-spacing: -1px;
        font-size: 50px;
        line-height: 50px;
    }

    .hero_wrap {
        height: calc(90vh - 112px);
    }


}

@media screen and (max-width: 767px){
     .hero__video  {
        position: absolute;
        inset: 0px;
        display: block;
    }
#video{
    width: auto;
    height: 100%;
    position: absolute;
}
    video{
        max-width:fit-content;

    }
    .hero_wrap {
        height: calc(80vh - 112px);

    }

}
@media only screen and (max-width: 480px){
    body .hero_wrap .hero__video .button {
        top: 70%;
    }
}


</style>

<template>
    <div id="shopify-section-template--15837695246521__16457438817558258e" class="shopify-section devImageGridWithText"><section class="feature_wrap">
        <div class="background">
            <div class="feature_row">
                <div class="imageBox">
                    <div class="imgesGrid">
                        <div class="feature_img">
                            <img loading="lazy" src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/pine-2_large.jpg?v=1661208959" class="img-fluid" alt="Zugu iPad Case with Magnetic Adjustable Stand">
                        </div>
                    </div>
                    <div class="imgesGrid">
                        <div class="feature_img">
                            <img loading="lazy" src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/pine-3_large.jpg?v=1661208989" class="img-fluid" alt="Zugu iPad Case for Lap Top">
                        </div>
                    </div>
                    <div class="imgesGrid">
                        <div class="feature_img">
                            <img loading="lazy" src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/pine-1_large.jpg?v=1661209016" class="img-fluid" alt="Hands-Free Zugu iPad Case Stand">
                        </div>
                    </div>
                </div>
                <div class="rightContent">
                    <div class="feature_text">
                        <h2>New color drop — Pine.</h2>
                        <p>Inspired by nature, meet the newest addition to our full color spectrum of full protection cases.</p>

                        <Link class="button-green" href="/products">Shop Now</Link>

                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "FeatureGreen",
    components: {
        Link,

    }
}
</script>

<style scoped>
.feature_wrap {
    background: #fff;
    position: relative;
}
.background {
    background: #77958b;
    color: #ffffff;
    padding: 110px 0 40px 0;
}
.feature_row {
    max-width: 1440px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    align-items: center;
    margin-bottom: 80px;
}
.feature_wrap .feature_row:nth-child(2n+1) {
    flex-direction: unset;
}
 .imageBox {
    width: calc(100% - 590px);
    display: flex;
}
.imgesGrid {
    padding-right: 8px;
    padding-left: 8px;
}
.imgesGrid:first-child {
    padding-left: 0;
}
.feature_img img {
    width: 100%;
    height: auto;
}
.rightContent {
    width: 100%;
    max-width: 440px;
}
.button-green{
    border: 1px solid white;
    border-radius: 20px;
    background: transparent;
    padding: 7px 24px 5px 24px;
    cursor:pointer;
    text-decoration:none;
    text-align: center;
    height: 40px;
    font-size: large;
    color:white;
}
.feature_text {
    margin-left: 40px!important;
    max-width: 384px;
    width: 100%;
    margin: 0 auto;
}
.feature_text h2 {
    font-size: 52px;
    line-height: 60px;
    letter-spacing: -1.8px;
    margin-bottom: 23px;
}
.feature_text p {
    font-size: 20px;
    line-height: 30px;
    margin-top: 0;
    margin-bottom: 1rem;
}
@media screen and (max-width: 1440px){
 .feature_row {
        max-width: 1262px;
    }
}
@media screen and (max-width: 1024px){
    .feature_row {
        justify-content: center;
        padding-left: 32px;
        padding-right: 32px;
    }
    .background {
        padding-top: 60px;
    }
    .feature_text {
        max-width: 432px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
        margin-left: auto!important;
        padding-right: 0;
    }
    .rightContent {
        padding-bottom: 42px;
        width: 100%;}

     .feature_wrap .feature_row:nth-child(2n+1) {
        flex-direction: column-reverse;
    }
    .feature_text h2 {
        font-size: 36px;
        line-height: 40px;
        letter-spacing: -1.8px;
        margin-bottom: 23px;
    }
    .imageBox {
        width: 100%;
        display: flex;
    }
    .imgesGrid {
        width: 33.33%;
        padding-right: 8px;
    }
    .feature_img {
        margin-bottom: 24px;
        height: 320px;
        overflow: hidden;
        border-radius: 0;
    }
    .feature_img img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .imgesGrid:first-child {
        padding-left: 0;
    }
}


</style>

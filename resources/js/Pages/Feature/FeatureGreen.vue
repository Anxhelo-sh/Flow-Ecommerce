<template>
    <div class="w-full background">
        <section class="container">
            <div class="container">
                <div class="feature_row">

                    <div class="imageBox">


                        <div class="imgesGrid">
                            <div class="feature_img">
                                <img loading="lazy"
                                     src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/pine-2_large.jpg?v=1661208959"
                                     class="img-fluid" alt="Zugu iPad Case with Magnetic Adjustable Stand">
                            </div>
                        </div>


                        <div class="imgesGrid">
                            <div class="feature_img">
                                <img loading="lazy"
                                     src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/pine-3_large.jpg?v=1661208989"
                                     class="img-fluid" alt="Zugu iPad Case for Lap Top">
                            </div>
                        </div>


                        <div class="imgesGrid">
                            <div class="feature_img">
                                <img loading="lazy"
                                     src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/pine-1_large.jpg?v=1661209016"
                                     class="img-fluid" alt="Hands-Free Zugu iPad Case Stand">
                            </div>
                        </div>


                    </div>


                    <div class="rightContent">
                        <div class="feature_text">
                            <h1 class=" text-lg  mb-5 text-transparent sm:text-5xl bg-clip-text bg-white">New color drop — Pine.</h1>
                            <p class="mb-5">Inspired by nature, meet the newest addition to our full color spectrum of full protection
                                cases.</p>

                            <Link
                                href="/shop-now"
                                class="button-green mt-5 "
                            >
                                Shop Now
                            </Link>

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
.feature_row{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    gap:50px;
    height: auto;

}
.imageBox{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    gap:15px;
    margin-left: 110px;
    margin-top: 80px;
    margin-bottom: 80px;
}
.rightContent{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    gap: 50px;
    margin-left: 25px;
    margin-top: 10%;
    color:white;
}
.background{
    background-color: #77958b;
    height: 570px;
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
.button-green:hover{
    background: white;
    color:#77958b ;
}
</style>

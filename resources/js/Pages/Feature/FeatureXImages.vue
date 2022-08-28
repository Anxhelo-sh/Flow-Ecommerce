<template>
    <div class="feature">
        <section class="feature-row container">

            <div class="feature_row pt-5">
                <div class="col-span-6-feature">
                    <div class="feature_text">
                        <h2 class=" text-lg  mb-5 text-transparent sm:text-5xl bg-clip-text bg-black">Free iPad repairs (yes, really).</h2>
                        <p class="mb-3">Zugu Case covers all AppleCare+ repair costs. Less <br>  stress, more streaming</p>

                        <a class="button button--dark" href="https://www.zugucase.com/pages/free-ipad-repairs">Learn More</a>

                    </div>
                </div>
                <div class="col-span-6-feature">
                    <div class="feature_img">
                        <img loading="lazy" src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/product-image-1_b1d7ab9c-29d4-4471-a0e1-3e4a98032f6f_1000x.jpg?v=1661209217" class="img-fluid" alt="Adjustable Magnetic Zugu iPad Case">
                    </div>
                </div>
            </div>

            <div class="feature_row ">
                <div class="col-span-6-feature">
                    <div class="feature_img">
                        <img loading="lazy" src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/product-image-2_70f1f43e-24f4-4e15-9f08-507458289c14_1000x.jpg?v=1661209244" class="img-fluid" alt="Hands-Free Adjustable iPad Stand">
                    </div>
                </div>
                <div class="col-span-6-feature">
                    <div class="feature_text">
                        <h2 class=" text-lg  mb-5 text-transparent sm:text-5xl bg-clip-text bg-black">Strike a pose.</h2>
                        <p class="mb-3">With nearly endless degrees of articulation, you can always find the right angle.</p>

                        <Link class="button button--dark" href="/products">Shop All</Link>

                    </div>
                </div>

            </div>

            <div class="feature_row">

                <div class="col-span-6-feature">
                    <div class="feature_text">
                        <h2 class=" text-lg  mb-5 text-transparent sm:text-5xl bg-clip-text bg-black">It's positively magnetic.</h2>
                        <p class="mb-3">Thanks to its magnetic abilities, hands-free work and play is always an option.</p>

                        <Link class="button button--dark" href="/products">Shop All</Link>

                    </div>
                </div>
                <div class="col-span-6-feature">
                    <div class="feature_img">
                        <img loading="lazy" src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/product-image-3_d42fbb09-35a2-4ef3-a492-d563e0fa6104_1000x.jpg?v=1661209270" class="img-fluid" alt="Magnetic Refrigerator Zugu iPad Case">
                    </div>
                </div>
            </div>


        </section>
    </div>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "FeatureXImages",
    components:{
        Link,
    }
}
</script>

<style scoped>

.feature_row{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 80px;
    width:100%
}
.feature_img{
    width: 100%;
    height: auto;
}
.feature_text{
    max-width: 384px;
    width: 100%;
    margin: 0 auto;

}


img{
    vertical-align: middle;
    border-style: none;
}
@media screen and (max-width: 1024px){
    .feature_row {
        flex-wrap: wrap;
        margin-bottom: 40px;
        padding-left: 32px;
        padding-right: 32px;
        flex-direction: column;
    }
    .feature_row:nth-child(odd) {
        flex-direction: column-reverse;
    }
    .col-span-6-feature{
        flex: 0 0 100%;
        padding: 0;
        width: 100%!important;
    }
    .feature_text {
        text-align: center;
    }
    h2 {
        font-size: 36px;
        line-height: 38px;
        letter-spacing: -.72px;
        margin-bottom: 16px;
    }
    .feature_text p {
        font-size: 16px;
        line-height: 22px;
    }
    .feature_img {
        margin-bottom: 24px;
        height: 320px;
        overflow: hidden;
    }
    .feature_img img {
        border-radius: 20px;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
}
    @media screen and (max-width: 1440px) and (min-width: 1024px){
        .feature_row {
            padding-left: 32px;
            padding-right: 32px;
        }
        .col-span-6-feature{
            width: 50%;
        }

    }
@media (min-width: 1440px){
    .col-span-6-feature {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;}

    .col-span-6-feature{
        width: 50%;
    }

}

</style>

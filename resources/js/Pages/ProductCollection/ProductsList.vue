<template>
    <div class="collection-row">
        <div class="" v-for="product in filteredProducts" id="coll12">
            <div class="">
                <div class="single-collection">
                    <div class="collecton-img">
                        <a class="linka"
                           href=""
                           data-href="/collections/all/products/2020-2019-ipad-10-2-7th-8th-gen-muse-case">
                            <img loading="lazy"
                                 src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/iPad_Case_10.2_NEWMOULD2022_1080x854_BLACK_4_large.png?v=1641323027"
                                 alt="iPad 10.2 Case (7th/8th/9th Gen) 2019/2020/2021 - Black"
                                 class="img-fluid"></a>

                        <span><img style="display:none;" id="secomapp-fg-image-5964309495993"
                                   src="//cdn.shopify.com/s/files/1/0505/4709/7785/t/36/assets/icon-freegift.png?v=108311353277274706321657886370"
                                   alt="Free Gift Icon" class="sca-fg-img-collect"></span>
                        <span class="sca-fg-cat-list prod-show-list" style="display:none;"
                              id="secomapp-fg-data-5964309495993"></span>
                    </div>
                    <div class="collection-info">
                        <form action="/cart/add" method="post" enctype="multipart/form-data"
                              id="AddToCartForm5964309495993">
                            <h3><a
                                href="/collections/all/products/2020-2019-ipad-10-2-7th-8th-gen-muse-case">{{
                                    product.name
                                }}</a>
                            </h3>

                            <div class="product-color swatch-wrap swatch">
                                <input type="hidden" class="admvl" value="41499285717177">

                                <input class="ehnp" type="hidden" name="properties[Time]" value="1661341480019">


                                <div data-value="Black" class="variant-dd swatch-element color black soldouta">
                                    <div class="img-variant" data-price="$39.99" style="display:none">

                                        <img loading="lazy"
                                             src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/iPad_Case_10.2_NEWMOULD2022_1080x854_BLACK_4_1024x1024.png?v=1641323027">
                                    </div>

                                    <input id="swatch-0-black2020-2019-ipad-10-2-7th-8th-gen-muse-case"
                                           type="radio" name="id" value="37125663391929" checked="">
                                </div>

                                <div data-value="Black" class="variant-dd swatch-element color black soldouta">
                                    <div class="img-variant" data-price="$49.99" style="display:none">

                                        <img loading="lazy"
                                             src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/iPad_Case_10.2_NEWMOULD2022_1080x854_RED_1_1024x1024.png?v=1654895586">
                                    </div>

                                    <input id="swatch-0-red2020-2019-ipad-10-2-7th-8th-gen-muse-case"
                                           type="radio" name="id" value="37125663490233">
                                </div>


                                <div data-value="Black" class="variant-dd swatch-element color black soldouta">
                                    <div class="img-variant" data-price="$49.99" style="display:none">

                                        <img loading="lazy"
                                             src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/iPad_Case_10.2_NEWMOULD2022_1080x854_BROWN_1_1024x1024.png?v=1654895581">
                                    </div>

                                    <input
                                        id="swatch-0-executive-brown2020-2019-ipad-10-2-7th-8th-gen-muse-case"
                                        type="radio" name="id" value="37125663523001">
                                </div>


                                <div data-value="Black" class="variant-dd swatch-element color black soldouta">
                                    <div class="img-variant" data-price="$49.99" style="display:none">

                                        <img loading="lazy"
                                             src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/iPad_Case_10.2_NEWMOULD2022_1080x854_BLUE_1_1024x1024.png?v=1654895586">
                                    </div>

                                    <input id="swatch-0-slate2020-2019-ipad-10-2-7th-8th-gen-muse-case"
                                           type="radio" name="id" value="41708866764985">

                                </div>


                                <div data-value="Black" class="variant-dd swatch-element color black soldouta">
                                    <div class="img-variant" data-price="$49.99" style="display:none">

                                        <img loading="lazy"
                                             src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/iPad_Case_10.2_NEWMOULD2022_1080x854_PURPLE_1_1024x1024.png?v=1654895586">
                                    </div>

                                    <input id="swatch-0-berry2020-2019-ipad-10-2-7th-8th-gen-muse-case"
                                           type="radio" name="id" value="41837327089849">

                                </div>


                                <div data-value="Black" class="variant-dd swatch-element color black soldouta">
                                    <div class="img-variant" data-price="$59.99" style="display:none">
                                        <img loading="lazy"
                                             src="//cdn.shopify.com/s/files/1/0505/4709/7785/products/iPad_7th_8th_9th_Gen_2019_2020_2021_10.2_Pine_Green_Main_1024x1024.jpg?v=1651765806">
                                    </div>

                                    <input id="swatch-0-pine2020-2019-ipad-10-2-7th-8th-gen-muse-case" type="radio"
                                           name="id" value="42252228493497">
                                </div>
                            </div>
                            <h4><span class="pra">${{ product.price }}</span></h4>
                            <Link @click="addProductToCart(product)" as="button" type="button" preserve-scroll class="button add_to_cart_button">ADD TO CART</Link >
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "ProductList",
    components: {
        Link,
    },
    props:{
        filteredProducts:Array ,
    },
    methods:{
        addProductToCart(product){
            this.$store.dispatch('addToCart',product)
        }
    },
}
</script>

<style scoped>
.collection-row {
    display: flex;
    width: 100%;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    align-content: center;
    gap:15px;
}

.single-collection {
    background: #EAEBEF;
    border-radius: 45px;
    padding: 32px 77px 45px;
    width: 430px;
    margin-bottom: 42px;
}

.collecton-img {
    margin-bottom: 13.46px;
}

.collection-info {
    text-align: center;
}

.collection-info h3 {
    -webkit-font-smoothing: antialiased;
    min-height: 110px;
    font-size: 28px;
    line-height: 35px;
    letter-spacing: normal;
}

.collection-info .swatch-wrap.swatch {
    display: flex;
    justify-content: center;
    margin: 30px auto;
}

.collection-info h4 {
    font-size: 22px;
    line-height: 20px;
    margin-bottom: 25px;
}

.collection-info .btn {
    border: 1px solid #000000;
    box-sizing: border-box;
    border-radius: 64px;
    font-size: 16px;
    line-height: 20px;
    text-transform: uppercase;
    padding: 0.375rem 1.4rem;
}
@media screen and (max-width: 1331px) {
    .single-collection{
       width: 360px;
    }


}
@media screen and (max-width: 940px){

    .collection-row{
        align-items: center;
        justify-content: center;
    }


}
@media screen and (max-width: 440px){

    .single-collection{
        flex-direction: column;

        width: 90vw;
        padding: 10px 36px 34px;

    }


}
</style>

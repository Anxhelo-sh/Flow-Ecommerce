<template>
    <div class="shop-menu-wrap active">
        <div class="shop-menu">
            <button type="button" @click=" toogleShopMenu" class="window__closer">
               x
            </button>
            <div class="shop_menu_list">
                <div  v-for="(value,key) in $page.props.products_by_categories" class="shop-list">
                    <h4  class="desk"><a href="https://zugu-case.myshopify.com/collections/all/ipad-cases">{{ key}}</a>
                    </h4>
                    <ul class="collection__products" v-for="product in value">

                        <li>
                            <a class="product" href="/products/ipad-mini-case-6th-gen-2021">
                                {{ product.name }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="find-your-model-menu">
                <h2 class="title">Know your model.<br>Find your match.</h2>
                <p class="white-p">Every Zugu case is precisely designed for a specific iPad model.</p>

                <form class="aada search-bara" action="/search" method="get" role="search" style="position: relative;">
                    <div class="form-group">
                        <input type="search" name="q" placeholder="Enter your model number" autocomplete="off">
                        <button type="submit" class=" ">
                            <svg class="svg--fill-white" width="30px" height="18px" viewBox="0 0 30 18" version="1.1">
                                <title>Arrow Right</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Zugu_Homepage_1440" transform="translate(-884.000000, -4991.000000)"
                                       fill="#000000">
                                        <g id="M3" transform="translate(90.000000, 4482.000000)">
                                            <g id="Arrow-Right"
                                               transform="translate(809.000000, 518.000000) rotate(-180.000000) translate(-809.000000, -518.000000) translate(794.000000, 509.000000)">
                                                <rect id="Rectangle" x="9.09494702e-13" y="8" width="30"
                                                      height="2"></rect>
                                                <rect id="Rectangle"
                                                      transform="translate(5.000000, 5.000000) rotate(-45.000000) translate(-5.000000, -5.000000) "
                                                      x="9.09494702e-13" y="4" width="10" height="2"></rect>
                                                <rect id="Rectangle"
                                                      transform="translate(5.000000, 13.000000) rotate(-315.000000) translate(-5.000000, -13.000000) "
                                                      x="0" y="12" width="10" height="2"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <ul class="search-results" style="position: absolute; left: 0px; top: 52px; display: none;"></ul>
                </form>


                <a class="devFindYourModel" href="https://www.zugucase.com/#findYourModel">Need help finding your model?
                    Click here</a>


                <div class="bthma">
                    <Link
                        href="/products"
                        class="button bg--white"
                        @click="$emit('close-shop-menu')"
                    >
                        Shop All
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "ShopMenu",
    components:{
      Link,
    },
    methods:{
        toogleShopMenu(){
            this.$emit('close-shop-menu')
        },
    },
}
</script>

<style scoped>
.shop-menu-wrap{
    display: block;
    opacity: 1;
    visibility: visible;
    position: absolute;
    top: 100px;
    right: 60px;
    z-index:100;
}
.shop-menu{
    max-width: 1470px;
    width: 95%;
    height: auto;
    display: flex;
    flex-wrap: nowrap;
    margin-left: auto;
    margin-right: auto;
    padding: 0;
    border: 1px solid rgb(68,68,68);
    position: relative;
    overflow: hidden;
    overflow-y: auto;
    border-radius: 20px;
    background: #fff;
    flex-direction: row-reverse;
}
.window__closer{
    position: absolute;
    background: transparent;
    border: none;
    top: 12px;
    right: 8px;
    display: flex;
    align-items: center;
}
.shop_menu_list{
    display: flex;
    justify-content: space-between;
    padding: 24px;
    width: calc(100% - 350px);
}
.shop-list{
    width: 70vw;
    height: auto;
}

h4{
    width: 100%;
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    padding: 0;
    font-size: 20px;
    line-height: 22px;
    text-align: left;
    letter-spacing: -.28px;
    border-bottom: none;
}
collection__products{
    list-style: none;
    padding-left: 0;
}
.product{
    width: 100%;
    font-size: 15px;
    line-height: 26px;
    letter-spacing: -.16px;
    color: #444;
}

.find-your-model-menu{
    width: 350px;
    background: #444;
    padding: 24px 16px;
    position: relative
}
.title{
    margin: 0 0 16px;
    font-size: 28px;
    color: #fff;
    line-height: 36px;
    text-align: left;
}
.white-p{
    color: #fff;
    max-width: 262px;
    display: block;
    font-size: 16px;
    line-height: 20px;
    text-align: left;
}
.devFindYourModel{
    color: #fff!important;
    font-size: 12px;
    text-decoration: underline!important;
    letter-spacing: .5px;
}
input{
    width: 100%;
    background: transparent;
    color: #fff;
    border: none;
    border-bottom: 1px solid white;
    border-radius: 0;
    padding: 12px 0;
}
.product__new{
    min-width: 36px;
    display: inline-block;
    margin-right: 8px;
    text-transform: uppercase;
    font-weight: 600;
    color: #000;
}
.bthma{
    z-index: 1;
    padding-top: 50px;
}
</style>

<template>
    <div class="rel">

        <NavBar @click-shop="showShopMenu=!showShopMenu" @click-cart="showCartMenu=!showCartMenu"></NavBar>
        <ShopMenu @close-shop-menu="showShopMenu=false" v-if="showShopMenu"></ShopMenu>
        <ShopingCart  @close-cart-menu="showCartMenu=false" v-if="showCartMenu"></ShopingCart>
        <div :class="{'app': $page.url.startsWith('/admin')}">
            <SideBar v-show="$page.url.startsWith('/admin')"></SideBar>
            <slot/>
        </div>
        <Footer></Footer>

    </div>

</template>
<script>
import NavBar from "./NavBar.vue"
import ShopMenu from "./ShopMenu";
import Footer from "../Pages/Footer.vue";
import SideBar from "./SideBar";
import ShopingCart from "../Pages/Cart/ShopingCart";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Layout",
    components: {
        Link,
        NavBar,
        ShopMenu,
        Footer,
        SideBar,
        ShopingCart,
    },
    data() {
        return {
            showShopMenu: false,
            showCartMenu: false,
        };
    },
    methods: {},
}
</script>


<style>
:root {
    --primary: #4a74de;
    --primary-alt: #2a75b2;
    --grey: #64748b;
    --dark: #1e293b;
    --dark-alt: #334155;
    --light: #f1f5f9;
    --sidebar-width: 300px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Fira sans', sans-serif;
}
.rel {
    position: relative;
    background: white;

}

.button {
    border: 1px solid black;
    border-radius: 20px;
    background: white;
    padding: 7px 24px 5px 24px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    height: 40px;
    font-size: large;
    color: var(--dark);
    margin-top: 20px;
}

.button:hover {
    background: var(--dark);
    color: var(--light);
    text-decoration: none;
    border: 1px solid var(--dark);

}

.app {
    display: flex;
    margin-top: 80px;
}

main {
    flex: 1 1 0;
    padding: 2rem;
}
</style>

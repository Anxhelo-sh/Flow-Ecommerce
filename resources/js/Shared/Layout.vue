<template>
    <div class="rel">

        <NavBar @click-shop="showShopMenu=!showShopMenu" @click-cart="showCartMenu=!showCartMenu"></NavBar>
        <ShopMenu @close-shop-menu="showShopMenu=false" v-if="showShopMenu"></ShopMenu>
        <ShopingCart  @close-cart-menu="showCartMenu=false" v-if="showCartMenu"></ShopingCart>
        <div :class="{'app': $page.url.startsWith('/admin')}">
            <SideBar v-show="$page.url.startsWith('/admin')"></SideBar>
            <slot/>
            <RightFeature  v-show="$page.url.startsWith('/admin')"></RightFeature>
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
import RightFeature from "../Pages/Admin/RightFeature";
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
        RightFeature
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
    --color-primary: #7380ec;
    --color-danger: #ff7782;
    --color-success: #41f1b6;
    --color-warning: #ffbb55;
    --color-white: #fff;
    --color-info-dark: #7d8da1;
    --color-info-light: #dce1eb;
    --color-dark: #363949;
    --color-light: rgba(132, 139, 200, 0.18);
    --color-primary-variant: #111e88;
    --color-dark-variant: #677483;
    --color-background: #f6f6f9;

    --card-border-radius: 2rem;
    --border-radius-1: 0.4rem;
    --border-radius-2: 0.8rem;
    --border-radius-3: 1.2rem;

    --card-padding: 1.8rem;
    --padding-1: 1.2rem;

    --box-shadow: 0 2rem 3rem var(--color-light);
}

* {
    font-family: Matter TRIAL,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;
    font-size: 22px;
    font-weight: 400;
    line-height: 24px;
    scroll-behavior: smooth;
    margin: 0;
    padding: 0;
    color: #000;
    box-sizing: border-box;
    outline: 0;
    appearance: none;
    border: 0;
    text-decoration: none;
    list-style: none;
}

.app {
    display: grid;
    width: 96%;
    margin: 0 auto;
    gap: 1.8rem;
    grid-template-columns: 14rem auto 23rem;
    padding-top: 80px;
}

/* DARK THEME VARIABLES */
.dark-theme-variables {
    --color-background: #181a1e;
    --color-white: #202528;
    --color-dark: #edeffd;
    --color-dark-variant: #a3bdcc;
    --color-light: rgba(0, 0, 0, 0.4);
    --box-shadow: 0 2rem 3rem var(--color-light);
}

html {
    font-size: 14px;
}
body {
    width: 100vw;
    height: 100vh;
    user-select: none;
    overflow-x: hidden;
}
.rel {
    position: relative;
    background: white;
    width: 100%;

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

/* SMALL TABLETS AND MOBILE */
@media screen and (max-width: 768px) {
    .app {
        width: 100%;
        grid-template-columns: 1fr;
    }
    aside {
        position: fixed;
        left: -100%;
        background: var(--color-white);
        width: 18rem;
        z-index: 3;
        box-shadow: 1rem 3rem 4rem var(--color-light);
        height: 100vh;
        padding-right: var(--card-padding);
        display: none;
        animation: showMenu 400ms ease forwards;
    }
    @keyframes showMenu {
        to {
            left: 0;
        }
    }
    aside .logo {
        margin-left: 1rem;
    }
    aside .logo h2 {
        display: inline;
    }
    aside .sidebar h3 {
        display: inline;
    }
    aside .sidebar a {
        width: 100%;
        height: 3.4rem;
    }
    aside .sidebar a:last-child {
        position: absolute;
        bottom: 5rem;
    }
    aside .close {
        display: inline-block;
        cursor: pointer;
    }
    main {
        margin-top: 8rem;
        padding: 0 1rem;
    }
    main .recent-orders {
        position: relative;
        margin: 3rem 0 0 0;
        width: 100%;
    }
    main .recent-orders table {
        width: 100%;
        margin: 0;
    }
    .right {
        width: 94%;
        margin: 0 auto 4rem;
    }
    .right .top {
        position: fixed;
        top: 0;
        left: 0;
        align-items: center;
        padding: 0 0.8rem;
        height: 4.6rem;
        background: var(--color-white);
        width: 100%;
        margin: 0;
        z-index: 2;
        box-shadow: 0 1rem 1rem var(--color-light);
    }
    .right .top .theme-toggler {
        width: 4.4rem;
        position: absolute;
        left: 66%;
    }
    .right .top .profile .info {
        display: none;
    }
    .right .top button {
        display: inline-block;
        background: transparent;
        cursor: pointer;
        color: var(--color-dark);
        position: absolute;
        left: 1rem;
    }
    .right .top button span {
        font-size: 2rem;
    }
}
</style>

<template>
    <header class="nav-bar">
        <div
            class="flex items-center justify-between h-17 mx-auto max-w-screen-4xl sm:px-5 "
        >
            <div class="logo">
                <a class="header__nav-button">
                    <img src="../assets/menu-svg.svg" alt="mobile-menu">
                </a>
                <Link class="block text-teal-300 hover:no-underline" href="/">
                    <div class="flex justify-between gap-4 align-items-center">
                        <h1 class="title text-base mt-3 text-transparent sm:text-5xl bg-clip-text bg-black">FLOW</h1>
                    </div>
                </Link>
            </div>


            <div class="text flex items-center justify-end flex-1">
                <nav
                    class="  flex justify-between"
                >
                    <div class="nav-container lg:space-x-4 lg:flex">
                        <Link
                            class="button"
                            @click="toogleShopMenu"
                            preserve-scroll
                        >Shop
                        </Link>

                        <Link
                            href="/about"
                            class="button"
                            preserve-scroll
                        >
                            About
                        </Link>
                        <Link
                            v-if="$page.props.user_role == 'Admin'"
                            href="/admin"
                            class="button"
                            preserve-scroll
                        >
                            Admin
                        </Link>
                        <Link
                            v-if="$page.props.user_role != 'Admin'"

                            class="button flex justify-between flex-row"
                            @click="toogleCartMenu"
                            preserve-scroll

                        >
                            <div>Cart</div>
                            <div> ({{ $store.state.productsInCart.length }})</div>

                        </Link>
                    </div>
                    <div class="auth-container lg:space-x-4 lg:flex sm:flex">
                        <Link
                            v-if="$page.props.user_role == 'Guest'"

                            href="/login"

                            class="button"
                            preserve-scroll

                        >
                            Login
                        </Link>
                        <Link
                            v-if="$page.props.user_role == 'Guest'"

                            href="/register"

                            class="button register"
                            preserve-scroll

                        >
                            Register
                        </Link>
                        <a class="shoping_cart">
                            <img src="../assets/cart-svgrepo-com.svg" alt="mobile-cart">
                        </a>
                        <Link
                            v-show="$page.props.user_role != 'Guest'"
                            method="post"
                            as="button"
                            href="/logout"
                            class="button"
                            preserve-scroll

                        >
                            Logout
                        </Link>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'

export default {
    name: "NavBar",
    components: {
        Link,
    },
    data() {
        return {};
    },
    methods: {
        toogleShopMenu() {
            this.$emit('click-shop')

        },
        toogleCartMenu() {
            this.$emit('click-cart')
        }
    },
}
</script>

<style scoped>
.button:hover{
    text-underline: none;
}
.logo{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-content: center;
    align-items:center;
}
.auth-container{
    display: flex;
    justify-content: space-around;
    align-content: center;
    align-items: center;
}
.nav-container{
    margin-right:100px;
}
.header__nav-button{
    width:40px;

    display: none;
}
.shoping_cart{
    display: none;
    width:40px;
}
.nav-bar {
    top: 0;
    position: fixed;
    background-color: white;
    color: var(--light);
    z-index: 60;
    width: 100%;
    height: 80px;
}
@media screen and (max-width: 1024px) {
    .nav-container{
        display: none;
    }
    .auth-container{
        gap:10px
    }
    .header__nav-button{
        display: block;
        margin-right: 20px;
        margin-top: 15px;

    }
    .shoping_cart{
        display: block;
        margin:15px 0 0 15px;

    }

}
@media screen and (max-width: 768px) {

    .title{
        font-size:34px;
    }
    .nav-bar{
        padding: 10px;
        align-items:baseline;
    }
    .register{
        display: none;
    }


}

</style>

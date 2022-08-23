<template>
    <header class="nav-bar">
        <div
            class="flex items-center justify-between h-17 mx-auto max-w-screen-2xl sm:px-6 lg:px-8 "
        >
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <Link class="block text-teal-300 hover:no-underline" href="/">
                    <div class="flex justify-between gap-4 align-items-center">
                        <h1 class="title text-base mt-3 text-transparent sm:text-5xl bg-clip-text bg-black">FLOW</h1>
                    </div>
                </Link>
            </div>

            <div class=" text flex items-center justify-end flex-1">
                <nav
                    class="hidden lg:space-x-4 lg:flex"
                >

                    <Link
                        href="/products"
                        class="button"
                    >Shop
                    </Link>

                    <Link
                        href="/about"
                        class="button"
                    >
                        About
                    </Link>
                    <Link
                        href="/admin"
                        class="button"
                    >
                        Admin
                    </Link>
                    <Link
                        href="/cart"
                        class="button"
                    >
                        Cart (0)
                    </Link>
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
    }
}
</script>

<style scoped>

.nav-bar {
    top:0 ;
    position: fixed;
    background-color: white;
    color: var(--light);
    z-index: 60;
    width: 100%;
    height:80px;
}


</style>

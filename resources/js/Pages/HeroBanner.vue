<template>
    <div class="image-container">
        <div class="left-content">
            <h1 class="title text-sm font-bold text-transparent sm:text-5xl bg-clip-text bg-white">
                Built for the everyday.
            </h1>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <Link
                    href="/learn-more"
                    class="button"
                >Learn More
                </Link>
            </div>
        </div>

        <div class="image-background">
        </div>
        <div class="background-clr"></div>

    </div>
</template>

<script>
import logoURL from '/images/background-img.jpg' ;
import {Link} from '@inertiajs/inertia-vue3'
export default {
    name: "HeroBanner",
    components: {
        Link,
    },
    data() {
        return {
            logoURL,
        }
    },
}
</script>

<style scoped>

.image-container {
    width: 100%;
    height: 100vh;
    position: relative;

}

.image-background {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url("https://images.hdqwalls.com/wallpapers/dark-night-beautiful-sky-nl.jpg");
    left: -1px;
}

.background-clr {
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, hsla(262, 98%, 41%, .5) 0%, hsla(262, 98%, 41%, 0) 70%), linear-gradient(135deg, hsla(304, 98%, 50%, .5) 10%, hsla(304, 98%, 50%, 0) 80%), linear-gradient(225deg, hsla(274, 97%, 41%, .5) 10%, hsla(274, 97%, 41%, 0) 80%), linear-gradient(315deg, hsla(261, 92%, 41%, .5) 100%, hsla(261, 92%, 41%, 0) 70%);
    opacity: 0.7;
}

.widget {
    position: absolute;
    z-index: 50;
    top: 25%;
    right: 280px;
}

.left-content {
    position: absolute;
    display:flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 50;
    top: 50%;
    left: 35%;

}
</style>

<script setup>
import NavBar from "./NavBar.vue"
import Footer from "../Pages/Footer.vue";
import SideBar from "./SideBar";

</script>

<template>
    <div >

        <NavBar></NavBar>
        <div :class="{'app': $page.url.startsWith('/admin')}">
            <SideBar v-show="$page.url.startsWith('/admin')" ></SideBar>
            <slot/>
        </div>
        <Footer></Footer>

    </div>

</template>


<style >
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
body {
    background: var(--light);
}
.button{
    border: 1px solid black;
    border-radius: 20px;
    background: white;
    padding: 7px 24px 5px 24px;
    cursor:pointer;
    text-decoration:none;
    text-align: center;
    height: 40px;
    font-size: large;
    color:var(--dark);
    margin-top: 20px;
}
.button:hover{
    background: var(--dark);
    color:var(--light);
    text-decoration:none;
    border: 1px solid var(--dark);

}
.app {
    display: flex;
}
main {
    flex: 1 1 0;
    padding: 2rem;
}
</style>

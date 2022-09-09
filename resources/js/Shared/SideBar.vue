<template>
        <aside>
            <div class="top">
                <div class="logo">

                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons"> close </span>
                </div>
            </div>

            <div class="sidebar">
                <Link href="/admin" class="active">
                    <span class="material-icons"> dashboard </span>
                    <h3>Dashboard</h3>
                </Link>
                <a href="#">
                    <span class="material-icons"> person_outline </span>
                    <h3>Customers</h3>
                </a>
                <a href="#">
                    <span class="material-icons"> receipt_long </span>
                    <h3>Orders</h3>
                </a>
                <a href="#">
                    <span class="material-icons"> insights </span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-icons"> mail_outline </span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="#">
                    <span class="material-icons"> inventory </span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-icons"> report_gmailerrorred </span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons"> settings </span>
                    <h3>Settings</h3>
                </a>
                <Link href="/admin/add-category" >
                    <span class="material-icons"> add </span>
                    <h3>Add Category</h3>
                </Link>
                <Link href="/admin/add-product">
                    <span class="material-icons"> add </span>
                    <h3>Add Product</h3>
                </Link>
                <Link href="/logout" method="post" as="button" exact>
                    <span class="material-icons"> logout </span>
                    <h3>Logout</h3>
                </Link>
            </div>
        </aside>

</template>

<script>

import {Link} from '@inertiajs/inertia-vue3' ;


export default {
    components: {
        Link,
    },
    data() {
        return {
            omsDropdown: false,
            is_expanded: true,
            applications: [],
        }
    },
    mounted() {
        // Document operation functions
        const sideMenu = document.querySelector("aside");
        const menuBtn = document.querySelector("#menu-btn");
        const closeBtn = document.querySelector("#close-btn");

// Show Sidebar
        menuBtn.addEventListener("click", () => {
            sideMenu.style.display = "block";
        });

// Hide Sidebar
        closeBtn.addEventListener("click", () => {
            sideMenu.style.display = "none";
        });
    },
    methods: {}
}
</script>
<style  scoped>
.container {

}
a {
    color: var(--color-dark);
}
img {
    display: block;
    width: 100%;
}
h1 {
    font-weight: 800;
    font-size: 1.8rem;
}
h2 {
    font-size: 1.4rem;
}
h3 {
    font-size: 0.87rem;
}
h4 {
    font-size: 0.8rem;
}
h5 {
    font-size: 0.77rem;
}
small {
    font-size: 0.75rem;
}
.profile-photo {
    width: 2.8rem;
    height: 2.8rem;
    border-radius: 50%;
    overflow: hidden;
}
.text-muted {
    color: var(--color-info-dark);
}
p {
    color: var(--color-dark-variant);
}
b {
    color: var(--color-dark);
}
.primary {
    color: var(--color-primary);
}
.danger {
    color: var(--color-danger);
}
.success {
    color: var(--color-success);
}
.warning {
    color: var(--color-warning);
}

/* START ASIDE */
aside {
    height: 90vh;
    border: 2px solid black;
    border-radius: 25px;
    box-shadow: 0 1rem 1rem var(--color-light);
    margin-bottom: 25px;
}
aside .top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 1.4rem;
}
aside .logo {
    display: flex;
    gap: 0.8rem;
}
aside .logo img {
    width: 2rem;
    height: 2rem;
}
aside .close {
    display: none;
}

/* START SIDEBAR */
aside .sidebar {
    display: flex;
    flex-direction: column;
    height: 86vh;
    position: relative;
    top: 3rem;
}
aside h3 {
    font-weight: 500;
}
aside .sidebar a {
    display: flex;
    color: var(--color-info-dark);
    margin-left: 2rem;
    gap: 1rem;
    align-items: center;
    position: relative;
    height: 3.7rem;
    transition: all 300ms ease;
}
aside .sidebar a span {
    font-size: 1.6rem;
    transition: all 300ms ease;
}
aside .sidebar a:last-child {
    position: absolute;
    bottom: 2rem;
    width: 100%;
}
aside .sidebar a.active {
    background: var(--color-light);
    color: var(--color-primary);
    margin-left: 0;
}
aside .sidebar a.active:before {
    content: "";
    width: 6px;
    height: 100%;
    background: var(--color-primary);
}
aside .sidebar a.active span {
    color: var(--color-primary);
    margin-left: calc(1rem - 6px);
}
aside .sidebar a:hover {
    color: var(--color-primary);
}
aside .sidebar a:hover span {
    margin-left: 1rem;
}
aside .sidebar .message-count {
    background: var(--color-danger);
    color: var(--color-white);
    padding: 2px 10px;
    font-size: 11px;
    border-radius: var(--border-radius-1);
}
/* END SIDEBAR */
/* END ASIDE */


</style>

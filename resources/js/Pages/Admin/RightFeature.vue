<template>
    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons"> menu </span>
            </button>
            <div class="theme-toggler">
                <span class="material-icons active"> light_mode </span>
                <span class="material-icons"> dark_mode </span>
            </div>
        </div>

        <div class="recent-updates">
            <h2>Recent Updates</h2>
            <!-- Add updates div here | JS insertion -->
        </div>

        <div class="sales-analytics">
            <h2>Sales Analytics</h2>
            <div id="analytics">
                <!-- Add items div here | JS insertion -->
            </div>
            <div class="item add-product">
                <div>
                    <span class="material-icons"> add </span>
                    <h3>Add Product</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RightFeature",
    mounted() {
        const themeToggler = document.querySelector(".theme-toggler");

        // Change Theme
        themeToggler.addEventListener("click", () => {
            document.body.classList.toggle("dark-theme-variables");

            themeToggler.querySelector("span:nth-child(1)").classList.toggle("active");
            themeToggler.querySelector("span:nth-child(2)").classList.toggle("active");
        });
    }
}
</script>

<style scoped>

/* START RIGHT SECTION */
.right {
    margin-top: 2rem;
}
.right .top {
    display: flex;
    justify-content: end;
    gap: 2rem;
}
.right .top button {
    display: none;
}
.right .theme-toggler {
    background: var(--color-light);
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 1.6rem;
    width: 4.2rem;
    cursor: pointer;
    border-radius: var(--border-radius-1);
}
.right .theme-toggler span {
    font-size: 1.2rem;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.right .theme-toggler span.active {
    background: var(--color-primary);
    color: white;
    border-radius: var(--border-radius-1);
}
.right .top .profile {
    display: flex;
    gap: 2rem;
    text-align: right;
}

/* START RECENT UPDATES */
.right .recent-updates {
    margin-top: 1rem;
}
.right .recent-updates h2 {
    margin-bottom: 0.8rem;
}
.right .recent-updates .updates {
    background: var(--color-white);
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}
.right .recent-updates .updates:hover {
    cursor: pointer;
    box-shadow: none;
}
.right .recent-updates .updates .update {
    display: grid;
    grid-template-columns: 2.6rem auto;
    gap: 1rem;
    margin-bottom: 1rem;
}
/* END RECENT UPDATES */

/* START SALES ANALYTICS */
.right .sales-analytics {
    margin-top: 2rem;
}
.right .sales-analytics h2 {
    margin-bottom: 0.8rem;
}
.right .sales-analytics .item {
    background: var(--color-white);
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 0.7rem;
    padding: 1.4rem var(--card-padding);
    border-radius: var(--border-radius-3);
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}
.right .sales-analytics .item:hover {
    cursor: pointer;
    box-shadow: none;
}
.right .sales-analytics .item .right {
    display: flex;
    justify-content: space-between;
    align-items: start;
    margin: 0;
    width: 100%;
}
.right .sales-analytics .item .icon {
    padding: 0.6rem;
    color: var(--color-white);
    border-radius: 50%;
    background: var(--color-primary);
    display: flex;
}
.right .sales-analytics .item.offline .icon {
    background: var(--color-danger);
}
.right .sales-analytics .item.customers .icon {
    background: var(--color-success);
}
.right .sales-analytics .add-product {
    background: transparent;
    border: 2px dashed var(--color-primary);
    color: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
}
.right .sales-analytics .add-product:hover {
    background: var(--color-primary);
    color: white;
}
.right .sales-analytics .add-product div {
    display: flex;
    align-items: center;
    gap: 0.6rem;
}
.right .sales-analytics .add-product h3 {
    font-weight: 600;
}
/* END SALES ANALYTICS */
/* END RIGHT SECTION */

</style>

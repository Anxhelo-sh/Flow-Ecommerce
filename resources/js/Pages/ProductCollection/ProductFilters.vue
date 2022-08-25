<template>
    <div class="collection_side-bar">
        <h6>Shop</h6>
        <ul>
            <li><a href="/collections/all/new">New</a></li>
            <li><a id="reml" href="/collections/all/ipad-cases">iPad Cases</a>

                <ul class="toggle-c">
                    <li><a href="/collections/ipad" class="">iPad</a></li>
                    <li><a href="/collections/ipad-air" class="">iPad Air</a></li>
                    <li><a href="/collections/ipad-mini" class="">iPad Mini</a></li>
                    <li><a href="/collections/ipad-pro-11" class="">iPad Pro 11</a></li>
                    <li><a href="/collections/ipad-pro-12-9" class="">iPad Pro 12.9</a></li>
                </ul>
            </li>
            <li><a href="/collections/all/screen-protectors">Screen Protectors</a></li>
            <li><a href="/collections/all/accessories">Accessories</a></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "ProductFilters"
}
</script>

<style scoped>
.collection_side-bar {
    width: 393px;
    padding: 0 80px;}

.collection_side-bar h6 {
    font-size: 22px;
    line-height: 20px;
    margin-bottom: 36px;
}
.collection_side-bar ul li {
    padding: 29px 0;
    border-bottom: 1px solid rgba(0,0,0,.2);
    font-size: 18px;
    position: relative;
    line-height: 20px;
}
.collection_side-bar ul li a {
    position: relative;
    padding-left: 33px;
}
.collection_side-bar ul li .toggle-c {
    padding-left: 32px;
    padding-top: 32px;
}
.collection_side-bar ul li a:before {
    content: "";
    width: 10px;
    z-index: 1;
    height: 10px;
    border-radius: 50%;
    background: #000;
    opacity: 0;
    visibility: hidden;
    left: 5px;
    top: 6px;
    position: absolute;
    display: block;
}
</style>

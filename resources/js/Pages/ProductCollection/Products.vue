<template>
    <div class="collection-banner">
        <img loading="lazy"
             src="//cdn.shopify.com/s/files/1/0505/4709/7785/t/36/assets/collection-banner.jpeg?v=34761193694722218491657886370">
    </div>
    <h1 class="vaas tagchan">All iPad Cases</h1>
    <div class="collection-container">
        <div class="collection_wrap">
            <ProductFilters></ProductFilters>
            <ProductsList></ProductsList>
        </div>
    </div>

</template>

<script>
import ProductFilters from "./ProductFilters";
import ProductsList from "./ProductsList";

export default {
    name: "Products",
    data() {
        return {
            products: [],
        }
    },
    components: {
        ProductFilters,
        ProductsList
    }
}

</script>

<style scoped>
.collection-banner {
    margin-top: 110px;
    padding: 0;
    margin-bottom: 60px;
}

h1.vaas {
    text-align: center;
    margin-bottom: 60px;
    font-size: 2.5rem;
}
.collection-container {
    padding: 0 32px;
}
.collection_wrap {
    display: flex;
    justify-content: space-between;
}
</style>

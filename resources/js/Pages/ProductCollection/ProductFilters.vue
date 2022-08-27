<template>
    <div class="collection_side-bar">
        <h6>Shop</h6>

        <ul>
            <li class=" border-bottom-li">
                <div @click="handleToggle(0)" class="flex-li">
                    <div :class="{active:activeCheckbox==0}" class="circle-checkbox"/>
                    <div>All</div>
                </div>
            </li>
            <li v-for="category in $page.props.categories" class=" border-bottom-li">
                <div @click="handleToggle(category.id)" class="flex-li">
                    <div :class="{active:activeCheckbox==category.id}" class="circle-checkbox"/>
                    <div>{{ category.category_name }}</div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "ProductFilters",
    data() {
        return {
            activeCheckbox: 0,
        }
    },
    methods: {
        handleToggle: function (category) {
            this.$emit('changeFilters', category)
            this.activeCheckbox = category;
        },
    }
}
</script>

<style scoped>
.flex-li {
    display: flex;
    justify-content: flex-start;
    flex-direction: row;
    align-items: center;
}

.circle-checkbox {
    width: 20px;
    height: 20px;
    margin-right: 15px;
    border: 1px solid black;
    border-radius: 50%;
}

.active {
    background-color: black;
}

.circle-checkbox-inner {
    width: 17px;
    height: 17px;
    border: 1px solid black;
    border-radius: 50%;
}

.collection_side-bar {
    width: 393px;
    padding: 0 80px;
}

.collection_side-bar h6 {
    font-size: 22px;
    line-height: 20px;
    margin-bottom: 36px;
}

.collection_side-bar ul li {
    padding: 29px 0;
    font-size: 18px;
    position: relative;
    line-height: 20px;
}

.border-bottom-li {
    border-bottom: 1px solid rgba(0, 0, 0, .2);

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

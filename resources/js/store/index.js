import { createStore } from 'vuex'

export default createStore({
    state: {
        productsInCart:[],
        totalPrice:0,
    },
    mutations: {
        UPDATE_CART(state,payload){
    this.state.productsInCart = payload
}
    },
    actions: {
        addToCart(context,payload){
            const products = context.state.productsInCart
            products.push(payload)
            context.commit('UPDATE_CART',products)
            console.log(products);
        }
    },
    getters: {
        productsIntoCart : function (state){
            return `${state.productsInCart}`;
        }
    }
})

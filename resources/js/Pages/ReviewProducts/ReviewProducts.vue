<template>
    <div class="product-container  bg-white">
        <div class="container flex justify-center flex-column align-items-center">
            <div class="intro">
                <h1 class=" text-header ">One case for <br>every
                    situation</h1>
                <h2 class="title mt-3 mb-4 text-sm  text-transparent sm:text-2xl bg-clip-text bg-black">Enjoy the
                    confidence of 360° protection.</h2>
                <Link
                    @click="this.$emit('scroll-down')"
                    class="button "
                >
                    Find Yours
                </Link>
            </div>
            <div class="feature_wrap">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="feature">
                            <div class="feature__icon">
                                <svg width="48px" height="49px" viewBox="0 0 48 49" version="1.1"><title>
                                    Cart_Icon</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Zugu_Homepage_375" transform="translate(-163.000000, -1021.000000)"
                                           stroke="#000000" stroke-width="2">
                                            <g id="M1" transform="translate(16.000000, 711.000000)">
                                                <g id="Proof" transform="translate(34.000000, 309.000000)">
                                                    <g id="01" transform="translate(40.000000, 0.000000)">
                                                        <g id="Cart_Icon" transform="translate(74.000000, 0.000000)">
                                                            <circle id="Oval" cx="18.5" cy="45.5" r="3.5"></circle>
                                                            <circle id="Oval-Copy" cx="32.5" cy="45.5" r="3.5"></circle>
                                                            <line x1="33.0625" y1="23.0631068" x2="37.9375"
                                                                  y2="35.9368932" id="Line" stroke-linecap="round"
                                                                  stroke-linejoin="round"></line>
                                                            <line x1="33" y1="23" x2="46" y2="28" id="Line"
                                                                  stroke-linecap="round" stroke-linejoin="round"></line>
                                                            <line x1="38.06" y1="35.9390244" x2="41" y2="31" id="Line-2"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="41" y1="31" x2="46" y2="28" id="Line-2"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="41.0043337" y1="31.0506662" x2="45.8823825"
                                                                  y2="35.9316185" id="Line-3"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="8" y1="14" x2="42" y2="14" id="Line-4"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="11" y1="28" x2="29" y2="28" id="Line-4"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="13" y1="36" x2="32" y2="36" id="Line-4"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="0.0625" y1="4.93633952" x2="5" y2="5" id="Line-4"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="5.06557377" y1="5.06275304" x2="13" y2="36"
                                                                  id="Line-8" stroke-linecap="round"></line>
                                                            <line x1="41.0555556" y1="19.9411765" x2="41.9444444"
                                                                  y2="14.0588235" id="Line-5"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="15" y1="13.9354839" x2="15" y2="2.06451613"
                                                                  id="Line-6" stroke-linecap="round"></line>
                                                            <line x1="25" y1="13.9354839" x2="25" y2="2.06451613"
                                                                  id="Line-6-Copy" stroke-linecap="round"></line>
                                                            <line x1="35.9359331" y1="13.9328358" x2="36" y2="5"
                                                                  id="Line-6-Copy" stroke-linecap="round"></line>
                                                            <line x1="15" y1="2" x2="24.9337349" y2="2" id="Line-7"
                                                                  stroke-linecap="round"></line>
                                                            <line x1="25" y1="5" x2="35.9329268" y2="4.93633952"
                                                                  id="Line-7" stroke-linecap="round"></line>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h4>1 million cases sold</h4>
                                <p class="dynamic-paragraph">Unlocking your iPad’s full potential, since 2010.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="feature">
                            <div class="feature__icon">
                                <svg width="37px" height="57px" viewBox="0 0 37 57" version="1.1"><title>
                                    Star_Icon</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Zugu_Homepage_375" transform="translate(-169.000000, -1169.000000)">
                                            <g id="M1" transform="translate(16.000000, 711.000000)">
                                                <g id="Proof" transform="translate(34.000000, 309.000000)">
                                                    <g id="02" transform="translate(40.000000, 151.000000)">
                                                        <g id="Star_Icon" transform="translate(79.000000, 0.000000)">
                                                            <rect id="Rectangle" fill="#000000" x="0" y="19" width="2"
                                                                  height="19"></rect>
                                                            <rect id="Rectangle-Copy-3" fill="#000000" x="35" y="19"
                                                                  width="2" height="19"></rect>
                                                            <rect id="Rectangle-Copy-3" fill="#000000" x="18" y="36"
                                                                  width="2" height="19"></rect>
                                                            <rect id="Rectangle" fill="#000000" x="28" y="41" width="2"
                                                                  height="9"></rect>
                                                            <rect id="Rectangle" fill="#000000" x="8" y="41" width="2"
                                                                  height="9"></rect>
                                                            <path
                                                                d="M18.5,25.8797757 L7.47341231,31.6767959 L9.57930317,19.3985101 L0.658606339,10.7029798 L12.9867062,8.91160203 L18.5,-2.25955146 L24.0132938,8.91160203 L36.3413937,10.7029798 L27.4206968,19.3985101 L29.5265877,31.6767959 L18.5,25.8797757 Z"
                                                                id="Star" stroke="#000000" stroke-width="2"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h4>50k 5-star reviews</h4>
                                <p class="dynamic-paragraph">Quality speaks for itself, and our reviews do too.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="feature">
                            <div class="feature__icon">
                                <svg width="67px" height="40px" viewBox="0 0 67 40" version="1.1"><title>
                                    Family_Icon</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Zugu_Homepage_375" transform="translate(-154.000000, -1332.000000)"
                                           stroke="#000000" stroke-width="2">
                                            <g id="M1" transform="translate(16.000000, 711.000000)">
                                                <g id="Proof" transform="translate(34.000000, 309.000000)">
                                                    <g id="03" transform="translate(0.000000, 313.000000)">
                                                        <g id="Family_Icon" transform="translate(105.000000, 0.000000)">
                                                            <path
                                                                d="M32.5,27 C38.2989899,27 43,31.9248678 43,38 L43,38 L22,38 C22,31.9248678 26.7010101,27 32.5,27 Z"
                                                                id="Combined-Shape" stroke-linejoin="round"></path>
                                                            <ellipse id="Oval" cx="32.5" cy="17" rx="5.5"
                                                                     ry="6"></ellipse>
                                                            <ellipse id="Oval" cx="49.5" cy="7" rx="6.5"
                                                                     ry="7"></ellipse>
                                                            <ellipse id="Ovall" cx="15.5" cy="7" rx="6.5"
                                                                     ry="7"></ellipse>
                                                            <path
                                                                d="M44.1035614,20.1379814 C45.2088776,18.1486486 48.512502,17.4359881 54.0144348,18 C59.5163676,18.5640119 63.011556,24.0640119 64.5,34.5 M48.5,34.5 L64.5,34.5"
                                                                id="Combined-Shape" stroke-linecap="round"></path>
                                                            <path
                                                                d="M0.103561401,20.1379814 C1.20887756,18.1486486 4.51250203,17.4359881 10.0144348,18 C15.5163676,18.5640119 19.011556,24.0640119 20.5,34.5 M4.5,34.5 L20.5,34.5"
                                                                id="Combined-Shape" stroke-linecap="round"
                                                                transform="translate(10.551781, 26.406561) scale(-1, 1) translate(-10.551781, -26.406561) "></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h4>Family-owned &amp; operated</h4>
                                <p class="dynamic-paragraph">Great quality and insight comes from working with the
                                    people we know best.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <swiper
                :modules="modules"
                :slides-per-view="4"
                :space-between="50"
                class="flex justify-content-between flex-row w-full feature-image-container case-section"
                navigation
                @swiper="onSwiper"
                @slideChange="onSlideChange"
            >
                <swiper-slide class="swiper-slide">
                    <img loading="lazy"
                         src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/Zugu_Render_Logo_1_large.png?v=1661205106"
                         class="feature-image" alt="Zugu Render Logo Angle 8 Black Zugu iPad Case">
                </swiper-slide>
                <swiper-slide class="swiper-slide">
                    <img loading="lazy"
                         src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/Zugu_Render_Logo_Angle_8_Red_large.png?v=1661205119"
                         class="feature-image" alt="Zugu Render Logo Angle 8 Red Zugu iPad Case">

                </swiper-slide>
                <swiper-slide class="swiper-slide">
                    <img loading="lazy"
                         src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/Zugu_Render_Logo_Angle_8_Brown_large.png?v=1661205208"
                         class="feature-image" alt="Zugu Render Logo Angle 8 Executive Brown Zugu iPad Case">
                </swiper-slide>
                <swiper-slide class="swiper-slide">

                    <img loading="lazy"
                         src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/Pine-Green_1_large.png?v=1661205233"
                         class="feature-image" alt="Zugu Render Logo Angle 8 Pine Zugu iPad Case">
                </swiper-slide>
                <swiper-slide class="swiper-slide">
                    <img loading="lazy"
                         src="//cdn.shopify.com/s/files/1/0505/4709/7785/files/ZUGU_Render_Logo_Angle_8_blue_5_large.png?v=1661205253"
                         class="feature-image" alt="Zugu Render Logo Angle 8 Slate Zugu iPad Case">
                </swiper-slide>


            </swiper>
            <Link
                href="/products"
                class="button mt-5  "
            >
                Shop All
            </Link>

        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'
import {Navigation, Pagination, Scrollbar, A11y} from 'swiper';

// Import Swiper Vue.js Pages
import {Swiper, SwiperSlide} from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

export default {
    name: "ReviewProducts",
    components: {
        Link,
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log('slide change');
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [Navigation, Pagination, Scrollbar, A11y],

        };
    },
}
</script>

<style scoped>
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.intro {
    margin-bottom: 70px;
    text-align: center;
}

.text-header {
    max-width: 660px;
    margin: 0 auto 32px;
    font-size: 90px;
    line-height: 85px;
    letter-spacing: -1.8px;
}
.feature {
    text-align: center;
}
.feature h4 {
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 22px;
}
.feature .feature__icon {
    min-height: 57px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    margin-bottom: 20px;
    opacity: .5;
}
.feature h4 {
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 22px;
}

@media (min-width: 768px) {
    .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media screen and (max-width: 1024px) {
    .text-header {
        font-size: 50px;
        line-height: 52px;
        letter-spacing: -1px;
        margin-top: 0;
    }

    .dynamic-paragraph {
        display: none;
    }
}
@media only screen and (max-width: 1024px){
    .case-section {
        margin-top: 70px;
    }
}


.product-container {
    padding-bottom: 80px;
}

.feature-image-container {
    margin-top: 120px;
}

.feature-image {
    width: 210px;
    height: 150px;
}

</style>

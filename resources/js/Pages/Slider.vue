<template>
  <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-lg font-bold">
        Special Offers
      </h2>

      <p class="text-2xl font-medium text-indigo-600">
        Best Prices for Gadgets
      </p>
    </div>
  <div class=" container mt-8 mb-8 swiper">
        <div class="swiper-wrapper">
          <swiper
              :modules="modules"
              :slides-per-view="3"
              :space-between="50"
              navigation
              :pagination="{ clickable: true }"
              @swiper="onSwiper"
              @slideChange="onSlideChange"
          >
            <swiper-slide class="swiper-slide">
              <div
                  href="/product"
                  class="block"
              >
                <div>
                  <p class="text-xs text-indigo-500">
                    Banana
                  </p>

                  <h5 class="font-bold">
                    Smart Watch
                  </h5>
                </div>

                <div class="aspect-w-1 aspect-h-1">
                  <img
                      loading="lazy"
                      alt="Smart Watch"
                      class="object-cover"
                      src="https://images.unsplash.com/photo-1546868871-7041f2a55e12"
                  />
                </div>

                <p class="mt-1 text-sm font-medium text-gray-700">
                  $49.99
                </p>
              </div>
            </swiper-slide>
            <swiper-slide class="swiper-slide">
              <a
                  href="/product"
                  class="block"
              >
                <div>
                  <p class="text-xs text-indigo-500">
                    Banana
                  </p>

                  <h5 class="font-bold">
                    Smart Watch
                  </h5>
                </div>

                <div class="aspect-w-1 aspect-h-1">
                  <img
                      loading="lazy"
                      alt="Smart Watch"
                      class="object-cover"
                      src="https://images.unsplash.com/photo-1546868871-7041f2a55e12"
                  />
                </div>

                <p class="mt-1 text-sm font-medium text-gray-700">
                  $49.99
                </p>
              </a>
            </swiper-slide>
            <swiper-slide class="swiper-slide">
              <a
                  href="/product"
                  class="block"
              >
                <div>
                  <p class="text-xs text-indigo-500">
                    Banana
                  </p>

                  <h5 class="font-bold">
                    Smart Watch
                  </h5>
                </div>

                <div class="aspect-w-1 aspect-h-1">
                  <img
                      loading="lazy"
                      alt="Smart Watch"
                      class="object-cover"
                      src="https://images.unsplash.com/photo-1546868871-7041f2a55e12"
                  />
                </div>

                <p class="mt-1 text-sm font-medium text-gray-700">
                  $49.99
                </p>
              </a>
            </swiper-slide>
            <swiper-slide class="swiper-slide">
              <a
                  href="/product"
                  class="block"
              >
                <div>
                  <p class="text-xs text-indigo-500">
                    Banana
                  </p>

                  <h5 class="font-bold">
                    Smart Watch
                  </h5>
                </div>

                <div class="aspect-w-1 aspect-h-1">
                  <img
                      loading="lazy"
                      alt="Smart Watch"
                      class="object-cover"
                      src="https://images.unsplash.com/photo-1546868871-7041f2a55e12"
                  />
                </div>

                <p class="mt-1 text-sm font-medium text-gray-700">
                  $49.99
                </p>
              </a>
            </swiper-slide>
            <swiper-slide class="swiper-slide">
              <a
                  href="/product"
                  class="block"
              >
                <div>
                  <p class="text-xs text-indigo-500">
                    Banana
                  </p>

                  <h5 class="font-bold">
                    Smart Watch
                  </h5>
                </div>

                <div class="aspect-w-1 aspect-h-1">
                  <img
                      loading="lazy"
                      alt="Smart Watch"
                      class="object-cover"
                      src="https://images.unsplash.com/photo-1546868871-7041f2a55e12"
                  />
                </div>

                <p class="mt-1 text-sm font-medium text-gray-700">
                  $49.99
                </p>
              </a>
            </swiper-slide>


          </swiper>
        </div>

      </div>
    </div>
</template>

<script>
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper';

// Import Swiper Vue.js Pages
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

export default {
  components: {
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
};
</script>

<style scoped>
.swiper-pagination {
  bottom: 0;
  position: relative;
}
</style>

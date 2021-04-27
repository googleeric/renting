<template>
<div>
  <div>
    <preloader/>
    <div class="d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
      <v-carousel show-arrows-on-hover="true" :touchless="false" cycle height="400" class="carousel-h mt-12" continuous
      hide-delimiters>
          <router-link to="/products"><v-carousel-item touch
            v-for="(carouselimg,i) in carouselimgs"
            :key="i"
            :src="carouselimg.src"
          ></v-carousel-item></router-link>
        </v-carousel>
    </div>
    <div class="d-md-none d-lg-none d-xl-none">
      <v-carousel :touchless="false" cycle height="400" class="carousel-h mt-12" continuous
    hide-delimiters>
        <router-link to="/products"><v-carousel-item touch
          v-for="(carouselmbimgs,i) in carouselmbimgs"
          :key="i"
          :src="carouselmbimgs.src"
        ></v-carousel-item></router-link>
      </v-carousel>
    </div>


    <v-container class="px-md-16 px-sm-2 px-xs-2">
      <h4 class="mb-n2">Product Category</h4>
      <v-row>
        <v-col cols="6" md="4" class="text-center pa-0">
          <a href="#/search/playstation"><div class="d-inline-flex product-cat cat1-back mt-4 pb-1 rounded-lg">
            <img src="/img/ps4.png">
            <h4 class="white--text mb-text-cat">Playstation</h4>
          </div></a>
        </v-col>
        <v-col cols="6" md="4" class="text-center pa-0">
          <a href="#/search/games"><div class="d-inline-flex product-cat cat2-back mt-4 pb-1 rounded-lg">
            <img src="/img/controller.png">
            <h4 class="white--text mb-text-cat">Games</h4>
          </div></a>
        </v-col>
        <v-col cols="6" md="4" class="text-center pa-0 cat-column">
          <a href="#/search/foosball"><div class="d-inline-flex product-cat cat3-back mt-4 pb-1 rounded-lg">
            <img src="/img/foosball.png">
            <h4 class="white--text mb-text-cat">Foosball</h4>
          </div></a>
        </v-col>
        <v-col cols="6" md="4" class="text-center pa-0 cat-column cat-column-desk">
          <a href="#/search/sports"><div class="d-inline-flex product-cat cat4-back mt-4 pb-1 rounded-lg">
            <img src="/img/sports.png">
            <h4 class="white--text mb-text-cat">Sports</h4>
          </div></a>
        </v-col>
       <v-col cols="6" md="4" class="text-center pa-0 cat-column cat-column-desk">
          <a href="#/search/cameras"><div class="d-inline-flex product-cat cat5-back mt-4 pb-1 rounded-lg">
            <img src="/img/camera.png">
            <h4 class="white--text mb-text-cat">Cameras</h4>
          </div></a>
        </v-col>
        <v-col cols="6" md="4" class="text-center pa-0 cat-column cat-column-desk">
         <a href="#/search/table tennis"><div class="d-inline-flex product-cat cat6-back mt-4 pb-1 rounded-lg">
            <img src="/img/tt.png">
            <h4 class="white--text mb-text-cat">Table Tennis</h4>
          </div></a>
        </v-col>
      </v-row>
      <h4 class="mb-n2">Top Products</h4>
      <v-row>
        <v-col cols="6" md="3" width="95%" :items="products"
        v-for="(products,i) in products"
          :key="i"
          >
          <div class="card-body pt-2 pb-2 px-4 rounded-lg">
            <v-chip
              class="mr-2 mt-2 mb-2"
              color="green"
              text-color="white"
              small
            >
              {{products.discount}}% Off
            </v-chip>
             <v-btn icon class="float-right">
              <v-icon>mdi-heart-outline</v-icon>
            </v-btn>
            <router-link :to="`/product/${products.website_slug_name}/${products.id}`">
              <v-img :src="products.pro_img" :alt="`${products.product_name}`"></v-img>
              <h4>{{products.product_name}}</h4>
              <p class="sale-price mb-0">₹{{products.sale_price}} <span class="per-day">/ Per Day</span><span class="ml-3 main-cost">₹{{products.cost_price}}</span></p>
              </router-link>
              <div class="mb-n1">
                <v-icon class="stars-design">mdi-star</v-icon>
                <v-icon class="stars-design">mdi-star</v-icon>
                <v-icon class="stars-design">mdi-star</v-icon>
                <v-icon class="stars-design">mdi-star</v-icon>
                <v-icon class="stars-design">mdi-star</v-icon>
                <a :href="`https://wa.me/918898661031?text=I'm%20interested%20in%20Renting%20Item%20${products.product_name}`"><v-icon class="float-right mt-n4 add-btn-sale">mdi-whatsapp</v-icon></a>
              </div>
          </div>
        </v-col>
      </v-row>
      <v-row>
        <v-col col="12" md="12">
         <div class="seo-banner1 rounded-lg pa-8">
          <h2 class="mt-2 white--text">Getting Bore At Home!!!</h2>
          <h4 class="mt-2 white--text">Rent a PS4 to Experience The Gaming At Home. </h4>
          <h4 class="mt-2 white--text">Sports Equipment on Rent.</h4>
          <a href="https://wa.me/918898661031?text=I'm%20interested%20in%20Renting%20Items%20"><v-btn class="mt-2 red accent-3 white--text rounded-lg">Call Or Whatsapp</v-btn></a>
        </div> 
        </v-col> 
      </v-row>
    </v-container>
  </div>
</div>
</template>

<script>

import Preloader from './PreLoader.vue';

  export default {
    components:{
      Preloader
    },
    data: () => ({
        activeBtn: 0,
        dense: false,
        drawer: false,
        products:[],
        carouselimgs: [
          {
            src: 'img/banners/1st.png',
          },
          {
            src: 'img/banners/2nd.png',
          },
        ],
        carouselmbimgs: [
          {
            src: 'img/banners/mb-1.png',
          },
          {
            src: 'img/banners/mb-2.png',
          },
        ],
      }),
      created () {
          this.initialize()
      },
      methods: {
        
        initialize () {
          // this.products = [
          // ]
          axios.interceptors.request.use((config) => {
              // Do something before request is sent
              return config;
            }, function (error) {
              // Do something with request error
              return Promise.reject(error);
            });
          // Add a response interceptor
          axios.interceptors.response.use((response) => {
              // Any status code that lie within the range of 2xx cause this function to trigger
              // Do something with response data
              return response;
            }, (error) => {
              // Any status codes that falls outside the range of 2xx cause this function to trigger
              // Do something with response error
              return Promise.reject(error);
            });
            axios.get('/api/products',{})
            .then(res => this.products = res.data.products)
            .catch(err => console.log(err.response))
        },
      },
  }
</script>

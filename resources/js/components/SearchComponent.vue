<template>
  <v-container class="px-md-16 px-sm-2 px-xs-2 mt-12">
      
    <h4 v-if="products.length > 0" class="mb-n2">Here is the Result</h4>
      <v-row v-if="products.length > 0">
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
      <v-row v-else>
          <h4 class="ml-4">Ups.. There are no result found for your query</h4>
      </v-row>
      <v-row>
        <v-col col="12" md="12">
         <div class="seo-banner1 rounded-lg pa-8">
          <h2 class="mt-2 white--text">Getting Bore At Home!!!</h2>
          <h4 class="mt-2 white--text">Rent a PS4 to Experience The Gaming At Home. </h4>
          <h4 class="mt-2 white--text">Sports Equipment on Rent.</h4>
          <v-btn class="mt-2 red accent-3 white--text rounded-lg">Call Or Whatsapp</v-btn>
        </div> 
        </v-col> 
      </v-row>
  </v-container>
</template>

<script>
export default {
     data: () => ({
        products:[],
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
            axios.get('/api/search/'+this.$route.params.value)
            .then(res => this.products = res.data.products)
            .catch(err => console.log(err.response))
        },
      },
}
</script>
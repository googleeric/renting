<template :items="product"
        v-for="(product,i) in product"
          :key="i">

    <v-container fluid class="mt-5" >
        <v-row justify="center" class="text-center d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
            <v-col cols="8" md="8" class="carousel-rel">
                <carousel class="mt-4" :items="2" :margin="0" :nav="false" :loop="false" :autoplayTimeout="5000" :dots="false" >
                    <img class="img-fluid" :src="product.img1">
                    <img class="img-fluid" :src="product.img2">
                    <img class="img-fluid" :src="product.img3">
                    <img class="img-fluid" :src="product.img4">
                    <template slot="prev"><div class="prev prev-carousel"></div></template>
                    <template slot="next"><div class="next next-carousel"></div></template>
                </carousel>
            </v-col>
        </v-row>
         <v-row justify="center" class="text-center d-md-none d-lg-none d-xl-none">
            <v-col cols="8" md="8" class="text-center carousel-rel">
                <carousel class="mt-4" :items="1" :margin="0" :nav="false" :loop="false" :autoplayTimeout="5000" :dots="false" >
                    <img class="img-fluid" :src="product.img1">
                    <img class="img-fluid" :src="product.img2">
                    <img class="img-fluid" :src="product.img3">
                    <img class="img-fluid" :src="product.img4">
                    <template slot="prev"><div class="prev prev-carousel-b"></div></template>
                    <template slot="next"><div class="next next-carousel-b"></div></template>
                </carousel>
            </v-col>
        </v-row>
        <v-row>
            <v-col class="white product-title" cols="12" md="12">
                <v-container class="d-flex justify-space-between mt-n3">
                    <div class="p-title-price">
                        <h4 class="mb-1">{{product.product_full_name}}</h4>
                        <p class="sale-price mb-0">₹{{product.sale_price}} <span class="per-day">/ Per Day</span><span class="ml-3 main-cost">₹{{product.cost_price}}</span></p>
                    </div>
                    <div class="p-wishlist-share mt-n2"><a href="#"><i class="mdi mdi-heart-outline"></i></a></div>
                </v-container>
                <div class="product-ratings mt-n5 mb-n4">
                    <v-container  class="d-flex align-items-center justify-space-between">
                        <div class="ratings"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                        <div class="total-result-of-ratings"><span>4.96</span><span>Very Good</span></div>
                    </v-container>
                </div>
            </v-col>
            <v-col class="white product-include mt-3" cols="12" md="12">
                 <v-container class="d-flex mt-n3 mb-n4">
                     <a :href="`https://wa.me/918898661031?text=I'm%20interested%20in%20Renting%20Item%20${product.product_full_name}`"><v-btn color="success" dark><i class="mdi mdi-whatsapp"></i>Book Now</v-btn></a> &nbsp;&nbsp;
                     <a href="tel:8898661031"><v-btn color="info" dark><i class="mdi mdi-phone"></i>Call Now</v-btn></a>
                </v-container> 
            </v-col>
            <template v-if="product.inc_item_1 != null">
            <v-col class="white product-include mt-3" cols="12" md="12">
                 <v-container class="d-flex justify-space-between mt-n3 mb-n4">
                    <h4>Included Rental Items</h4>
                </v-container> 
            </v-col>
            <v-container>
                <v-row>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.inc_pic_1" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.inc_item_1}}</v-btn>
                        </div>
                    </v-col>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.inc_pic_2" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.inc_item_2}}</v-btn>
                        </div>
                    </v-col>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.inc_pic_3" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.inc_item_3}}</v-btn>
                        </div>
                    </v-col>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.inc_pic_4" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.inc_item_4}}</v-btn>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
            </template>
            <template v-if="product.extra_item_1 != null">
             <v-col class="white product-include mt-1" cols="12" md="12">
                 <v-container class="d-flex justify-space-between mt-n3 mb-n4">
                    <h4>Extra Rental Items With Additional Cost</h4>
                </v-container> 
            </v-col>
            <v-container>
                <v-row>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.extra_pic_1" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.extra_item_1}}</v-btn>
                        </div>
                    </v-col>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.extra_pic_2" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.extra_item_2}}</v-btn>
                        </div>
                    </v-col>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.extra_pic_3" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.extra_item_3}}</v-btn>
                        </div>
                    </v-col>
                    <v-col cols="6" md="3" class="text-center">
                        <div class="white include-item">
                            <img :src="product.extra_pic_4" alt="PS4 Slim" class="img-fluid mt-2">
                            <v-btn block color="primary" dark>{{product.extra_item_4}}</v-btn>
                        </div>
                    </v-col>
                </v-row>                
            </v-container>
            </template>
            <v-container>
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
             <v-col class="white product-include mt-1" cols="12" md="12">
                 <v-container class="mt-n3 mb-n9">
                    <h4>Specifications</h4>
                    <p>{{product.product_description}}</p>
                </v-container> 
            </v-col>
             <v-col class="white product-include mt-3" cols="12" md="12">
                 <v-container class="mt-n3 mb-n9">
                    <h4>Rating & Reviews</h4>
                    <div class="rating-review-content">
                        <ul>
                            <li class="single-user-review d-flex">
                            <div class="user-thumbnail"><img src="img/7.jpg" alt=""></div>
                            <div class="rating-comment">
                                <div class="rating"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                <p class="comment mb-0">Very good product. It's just amazing!</p><span class="name-date">Designing World 12 Dec 2020</span>
                            </div>
                            </li>
                            <li class="single-user-review d-flex">
                            <div class="user-thumbnail"><img src="img/8.jpg" alt=""></div>
                            <div class="rating-comment">
                                <div class="rating"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                <p class="comment mb-0">WOW excellent product. Love it.</p><span class="name-date">Designing World 8 Dec 2020</span>
                            </div>
                            </li>
                            <li class="single-user-review d-flex">
                            <div class="user-thumbnail"><img src="img/9.jpg" alt=""></div>
                            <div class="rating-comment">
                                <div class="rating"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                <p class="comment mb-0">What a nice product it is. I am looking it's.</p><span class="name-date">Designing World 28 Nov 2020</span>
                            </div>
                            </li>
                        </ul>
                    </div>
                </v-container> 
            </v-col>
            <!-- <v-col class="white product-include mt-1" cols="12" md="12">
                 <v-container class="mt-n3 mb-n9">
                    <h3 class="mb-1">Submit A Review</h3>
                    <form action="">
                        <textarea name="" id=""></textarea>
                    </form>
                </v-container> 
            </v-col> -->
        </v-row>
    </v-container>
</template>

<script>
import carousel from 'vue-owl-carousel';
export default {
    components: { carousel },
    data: () => ({
        product:[],
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
            axios.get('/api/products/'+this.$route.params.websiteslug+'/'+this.$route.params.id)
            .then(res => this.product = res.data.product)
            .catch(err => console.log(err.response))
        },
      },
    // mounted(){
    //     this.$store.dispatch('getProductById',this.$route.params.id);
    // }
}
</script>
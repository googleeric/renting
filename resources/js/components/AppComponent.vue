<template>
<div class="body-back">
    <v-app-bar
      color="deep-purple accent-4"
      dense
      dark
      fixed
    >
      <v-app-bar-nav-icon
        @click="drawer =!drawer"
      ></v-app-bar-nav-icon>

      <router-link to="/">
        <img class="logo" src="/img/logo-desk.png"/>
      </router-link>
      <v-spacer></v-spacer>
      
      <v-text-field
        v-model="searchquery"
        label="Search"
        single-line
        hide-details
        class="d-none d-sm-none d-md-flex d-lg-flex d-xl-flex search-desk"
      ></v-text-field>
      <v-btn @click="search" class="search-btn-top d-none d-sm-none d-md-flex d-lg-flex d-xl-flex"><v-icon>mdi-magnify</v-icon></v-btn>
       <v-spacer></v-spacer>
        

      <v-btn icon>
        <v-icon>mdi-heart</v-icon>
      </v-btn>
      <template v-if="validuser == null">
       <v-btn icon @click="login = true">
        <v-icon>mdi-account-circle</v-icon>
      </v-btn>
      </template>
      <template v-else>
       <v-btn icon to="/myprofile">
        <v-icon>mdi-account-circle</v-icon>
      </v-btn>
      </template>
    </v-app-bar>

      <v-navigation-drawer
        v-model="drawer"
        app
        temporary
        dark
        class="nav-bar"
      >
      
      <!-- Sidebar Section Start -->
      <template v-if="validuser != null">
        <v-list
          dense
          nav
          class="py-0"
        >
          <v-list-item two-line :class="miniVariant && 'px-0'">
            <v-list-item-avatar>
              <img src="https://randomuser.me/api/portraits/men/81.jpg">
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>{{ user.name }}</v-list-item-title>
              <v-list-item-subtitle>{{ user.email }}</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>

          <v-list-item
            link
            to="/products"
          >
            <v-list-item-icon>
              <v-icon>mdi-format-list-bulleted</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>Products</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-item
            link
            to="/myprofile"
          >
            <v-list-item-icon>
              <v-icon>mdi-account-circle</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>My Profile</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-item
            link
            to="#"
          >
            <v-list-item-icon>
              <v-icon>mdi-heart</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>My Wishlist</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          
          <v-list-item
            link
            to="#"
          >
            <v-list-item-icon>
              <v-icon>mdi-star</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>My Order</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-item
            link
            @click="logout"
          >
            <v-list-item-icon>
              <v-icon>mdi-logout</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>Logout</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </template>

      <template v-else>
        <v-list
          dense
          nav
          class="py-0"
        >
          <v-list-item two-line :class="miniVariant && 'px-0'">
            <v-list-item-avatar>
              <img src="img/usernoimg.png">
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Username</v-list-item-title>
              <v-list-item-subtitle>Entertainment on Rent</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>

          <v-list-item
          link
          to="/products"
          >
            <v-list-item-icon>
              <v-icon>mdi-format-list-bulleted</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>Products</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          
          <v-list-item
          link
          >
            <v-list-item-icon>
              <v-icon>mdi-alert-circle-outline</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>About Us</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-item
          link
          >
            <v-list-item-icon>
              <v-icon>mdi-contacts</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>Contact Us</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-item
          link
          >
            <v-list-item-icon>
              <v-icon>mdi-blogger</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>Blogs</v-list-item-title>
            </v-list-item-content>
          </v-list-item>  
        </v-list>
      </template>
      </v-navigation-drawer>

      <!-- Sidebar Section End -->

    <!-- Search Bar Section Start -->
      <v-dialog
        v-model="dialog"
        max-width="100%"
      >
        <v-card 
        color="white">
          <v-col cols="12" sm="12" md="12">
            <v-text-field v-model="searchquery2" label="Search....." required></v-text-field>
          </v-col>
          <v-card-actions>
            <v-btn class="mt-n8"
              color="error"
              text
              @click="dialog = false"
            >
              Close
            </v-btn>
            <v-btn class="mt-n8"
              color="primary"
              text
              @click="search2"
            >
              Search
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
<!-- Search Bar Section End -->
  <!-- Login Section Start -->
      <v-dialog content-class="login-dialog"
        v-model="login"
        width="500"
      >
        <v-card 
        color="white">
          <div class="text-center login-div">
            <img class="mt-3 mb-n1" width="150" src="img/logo-login.png">
            <h2 class="mb-2 grey--text lighten-1">Login</h2>
            <v-progress-linear
              :active="loading"
              :indeterminate="loading"
              absolute
              top
              color="deep-purple accent-4"
            ></v-progress-linear>
            <v-container>
            <v-row>
              <v-col class="mt-n7" cols="12" sm="12" md="12">
                <v-text-field
                  v-model="emailornumber"
                  :rules="emailornumberRules"
                  label="Email Or Number"
                  required
                  solo
                  :append-icon="show1 ? 'mdi-account' : 'mdi-account'"
                  class="px-6 username-login"
                ></v-text-field>
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n6">
                <v-text-field class="px-6 username-login"
                  v-model="password"
                  :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                  :rules="[rules.required, rules.min]"
                  :type="show1 ? 'text' : 'password'"
                  label="Password"
                  solo
                  @click:append="show1 = !show1"
                ></v-text-field>
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n6">
               <v-btn class="login-btn" width=86% height="43px" @click="signin">Login</v-btn>

               <h5 class="mt-3 grey--text darken-1 mb-2">Or Login Usign</h5>
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n4">
                <v-btn
                  icon
                  class="google-btn mr-3"
                >
                  <v-icon class="google-i mr-2">mdi-google</v-icon>
                  Google
                </v-btn>     
                <v-btn
                  icon
                  class="google-btn ml-3"
                >
                  <v-icon class="facebook-i">mdi-facebook</v-icon>
                  <span class="ml-1">Facebook</span>
                </v-btn>   
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n8">
                <h5 class="grey--text darken-1 mt-4">Not a Membar? <div class="d-inline-flex login-t1 grey--text darken-1 mt-2 text-decoration-underline" @click="[signup = true, login = false]">Sign Up</div></h5>
              </v-col>
            </v-row>
            </v-container>
          </div>
        </v-card>
      </v-dialog>
 <!-- Login Section End -->

 <!-- Signup Section Start -->
<v-dialog content-class="login-dialog"
        v-model="signup"
        width="500"
      >
        <v-card 
        color="white">
          <div class="text-center login-div">
            <img class="mt-3 mb-n1" width="150" src="img/logo-login.png">
            <h2 class="mb-2 grey--text lighten-1">Sign Up</h2>
            <v-progress-linear
              :active="loading"
              :indeterminate="loading"
              absolute
              top
              color="deep-purple accent-4"
            ></v-progress-linear>
            <v-container>
            <v-row>
              <v-col class="mt-n7" cols="12" sm="12" md="12">
                <v-text-field
                  v-model="emailornumber"
                  :rules="emailornumberRules"
                  label="Enter Email Id"
                  required
                  solo
                  :append-icon="show1 ? 'mdi-account' : 'mdi-account'"
                  class="px-6 username-login"
                ></v-text-field>
              </v-col>
              <v-col class="mt-n7" cols="12" sm="12" md="12">
                <v-text-field
                  v-model="emailornumber"
                  :rules="emailornumberRules"
                  label="Enter Mobile Number"
                  required
                  solo
                  :append-icon="show1 ? 'mdi-account' : 'mdi-account'"
                  class="px-6 username-login"
                ></v-text-field>
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n6">
                <v-text-field class="px-6 username-login"
                  v-model="password"
                  :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                  :rules="[rules.required, rules.min]"
                  :type="show1 ? 'text' : 'password'"
                  label="Enter Password"
                  solo
                  @click:append="show1 = !show1"
                ></v-text-field>
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n6">
               <v-btn class="login-btn" width=86% height="43px" @click="signup">Sign Up</v-btn>

               <h5 class="mt-3 grey--text darken-1 mb-2">Or Sign Up Usign</h5>
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n4">
                <v-btn
                  icon
                  class="google-btn mr-3"
                >
                  <v-icon class="google-i mr-2">mdi-google</v-icon>
                  Google
                </v-btn>     
                <v-btn
                  icon
                  class="google-btn ml-3"
                >
                  <v-icon class="facebook-i">mdi-facebook</v-icon>
                  <span class="ml-1">Facebook</span>
                </v-btn>   
              </v-col>
              <v-col cols="12" sm="12" md="12" class="mt-n8">
                <h5 class="grey--text darken-1 mt-4">Already Have an Account? <div class="d-inline-flex login-t1 grey--text darken-1 mt-2 text-decoration-underline" @click="[signup = false, login = true]">Login</div></h5>
              </v-col>
            </v-row>
            </v-container>
          </div>
        </v-card>
      </v-dialog>
 <!-- Signup Section End -->
    <router-view></router-view>

    <!-- Footer Section Start -->
    <div class="mb-10">
      <v-container class="px-md-16 px-sm-2 px-xs-2">
        <v-row class="d-none d-sm-flex">
          <v-col cols="12" md="3">
            <div class="footer-image mt-n5">
              <img src="/img/footer-logo.png"/>
            </div>
          </v-col>
           <v-col cols="6" md="3">
              <h4 class="gray--text ml-4 mb-3 mt-n4">Information</h4>
                <v-list-item class="mt-n4"
                  v-for="footer_items in footer_items"
                  :key="footer_items.title"
                  :to="footer_items.action"
                  dense
                >
                    <v-list-item-title>{{ footer_items.title }}</v-list-item-title>
                </v-list-item>
          </v-col>
           <v-col cols="6" md="3">
              <h4 class="gray--text ml-4 mb-3 mt-n4">Helpful Links</h4>
                <v-list-item class="mt-n4"
                  v-for="footer_items2 in footer_items2"
                  :key="footer_items2.title"
                  :to="footer_items2.action"
                  dense
                >
                    <v-list-item-title>{{ footer_items2.title }}</v-list-item-title>
                </v-list-item>
          </v-col>
           <v-col cols="12" md="3">
              <h4 class="gray--text mb-3 mt-n4">Subscribe More Info</h4>
              <form class="mt-n4">
                <v-text-field
                  v-model="email"
                  :error-messages="emailErrors"
                  label="E-mail"
                  required
                  @input="$v.email.$touch()"
                  @blur="$v.email.$touch()"
                ></v-text-field>
                 <v-btn color="error mt-n2" height="30" @click="submit">Subscribe</v-btn>
              </form>
          </v-col>
        </v-row>
        <v-alert
          border="top"
          colored-border
          color="deep-purple accent-4"
          class="pb-n3"
        >
        <v-row>
          <v-col cols="12" class="d-inline-flex justify-center mb-n4 d-md-none d-lg-none d-xl-none">
            <h6 class="gray--text">About Us</h6>
            <h6 class="ml-3 gray--text">Contact Us</h6>
            <h6 class="ml-3 gray--text">Blogs</h6>
            <h6 class="ml-3 gray--text">SiteMap</h6>
          </v-col>
          <v-col cols="12" class="d-inline-flex justify-center mb-n4 d-md-none d-lg-none d-xl-none">
            <h6 class="ml-3 gray--text">Privacy Policy</h6>
            <h6 class="ml-3 gray--text">Refund Cancellation</h6>
            <h6 class="ml-3 gray--text">Terms & Conditions</h6>
          </v-col>
          <v-col class="mb-footer" cols="12" md="4">
            <h5 class="gray--text mb-3 mt-2">© {{ new Date().getFullYear() }} Copyright rentatainment.com</h5>
          </v-col>
          <v-col cols="12" md="4">
     
          </v-col>
          <v-col class="text-center" cols="12" md="4">
              <v-btn
              v-for="icons in icons"
              :key="icons"
              class="mx-2 black--text"
              icon
            >
              <v-icon size="32px">{{ icons }}</v-icon>
            </v-btn>     
          </v-col>
        </v-row>
        </v-alert>
      </v-container>
    </div>
    <v-snackbar
      v-model="loggedin"
    >
      {{ loggedintext }}

      <template v-slot:action="{ attrs }">
        <v-btn
          color="pink"
          text
          v-bind="attrs"
          @click="loggedin = false"
        >
          Close
        </v-btn>
      </template>
    </v-snackbar>
    <!-- Footer Section End -->

    <v-bottom-navigation
    :value="activeBtn"
    class="overflow-hidden mx-auto botton-navigate"
    color="pink darken-1"
    fixed
  >
  
    <router-link to="/"><v-btn class="bottom-btn">
      <span>Home</span>
      <v-icon>mdi-home</v-icon>
    </v-btn></router-link>

    <a href="https://wa.me/918898661031?text=I'm%20interested%20in%20Renting%20Items"><v-btn class="bottom-btn">
      <span>Support</span>
      <v-icon>mdi-whatsapp</v-icon>
    </v-btn></a>

    <a href="tel:8898661031"><v-btn class="bottom-btn">
      <span>Call</span>
      <v-icon>mdi-cellphone</v-icon>
    </v-btn></a>

    <a><v-btn @click="dialog = true" class="bottom-btn">
       <span>Search</span>
        <v-icon>mdi-magnify</v-icon>
    </v-btn></a>
    
    <router-link to="/products"><v-btn class="bottom-btn">
      <span>Products</span>
      <v-icon>mdi-format-list-bulleted</v-icon>
    </v-btn></router-link>
  </v-bottom-navigation>
</div>
</template>

<script>
    export default {
       data: () => ({
        searchquery: '',
        searchquery2: '',
        activeBtn: 0,
        dialog: false,
        valid: true,
        login: false,
        signup: false,
        dense: false,
        drawer: false,
        loggedin:false,
        loading: false,
        loggedintext: '',
        user:[],
        validuser:localStorage.getItem('token'),
         footer_items: [
           { title: 'Contact Us', action:'/contact-us' },
          { title: 'About Us', },
          { title: 'Blogs', },
        ],
        footer_items2: [
           { title: 'Privacy Policy', action:'#' },
          { title: 'Refund Cancellation', },
          { title: 'Terms & Conditions', },
        ],
        icons: [
        'mdi-facebook',
        'mdi-twitter',
        'mdi-linkedin',
        'mdi-instagram',
        ],
        show1: false,
        show2: true,
        show3: false,
        show4: false,
        password: '',
        rules: {
          required: value => !!value || 'Required.',
          min: v => v.length >= 6 || 'Min 6 characters',
          emailMatch: () => ('The email and password you entered don\'t match'),
        },
        emailornumber: '',
        emailornumberRules: [
          v => !!v || 'Email Or Number is required',
        ],
      }),
      methods:{
        signin:function(){
          // Add a request interceptor
          axios.interceptors.request.use((config) => {
              // Do something before request is sent
              this.loading = true;
              this.validuser = 'token';
              return config;
            }, function (error) {
              // Do something with request error
              this.loading = false;
              return Promise.reject(error);
            });
          // Add a response interceptor
          axios.interceptors.response.use((response) => {
              // Any status code that lie within the range of 2xx cause this function to trigger
              // Do something with response data
              this.loading = false;
              return response;
            }, (error) => {
              // Any status codes that falls outside the range of 2xx cause this function to trigger
              // Do something with response error
              this.loading = false;
              return Promise.reject(error);
            });
            axios.post('/api/login',{
              'email' : this.emailornumber,
              'password': this.password
            })
            .then( res => {
              localStorage.setItem('token',res.data.token)
              // localStorage.setItem('loggenIn', true)
                this.user = res.data.user;
                this.login = false;
                this.signup = false;
                this.loggedintext = "You Are Logged In Successfully";
                this.loggedin = true;
            })
            .catch( err => {
              this.loggedintext = err.response.data.status
              this.loggedin = true
            })
        },
        search: function(){
          this.$router.push('/search/'+this.searchquery);
          this.$router.go();
        },
        search2: function(){
          this.$router.push('/search/'+this.searchquery2);
          this.$router.go();
        },
        logout: function(){
          localStorage.removeItem('token');
          localStorage.removeItem('name');
          localStorage.removeItem('email');
          this.loggedintext = "You Are Logged Out Successfully";
          this.loggedin = true;
          this.$router.go();
        }
      },
      watch: {
      loading (val) {
        if (!val) return
        setTimeout(() => (this.loading = false), 3000)
      },
    },
  }
</script>
import Vue from 'vue';
import VueRouter from 'vue-router';
import HomeComponent from './components/HomeComponent.vue';
import ProductComponent from './components/ProductComponent.vue';
import SingleProduct from './components/SingleProduct.vue';
import MyProfile from './components/MyProfile.vue';
import ContactUs from './components/ContactUs.vue';
import Search from './components/SearchComponent.vue';


Vue.use(VueRouter)

const routes =[
    {
        path: '/',
        component: HomeComponent,
        name: 'home'
    },
    {
        path: '/products',
        component: ProductComponent,
        name: 'products'
    },
    {
        path: '/product/:websiteslug/:id',
        component: SingleProduct,
        name: 'product'
    },
    {
        path: '/myprofile',
        component: MyProfile,
        name: 'myprofile',
        beforeEnter: (to, from, next) => {
            if(localStorage.getItem('token')){
                next();
            }
            else{
                next('/');
            }
        }
    },
    {
        path: '/search/:value',
        component: Search,
        name: 'search'
    },
    {
        path: '/contact-us',
        component: ContactUs,
        name: 'contactus'
    }
    
]

export default new VueRouter({routes, scrollBehavior (to, from, savedPosition) {
    return { x: 0, y: 0 }
  }})
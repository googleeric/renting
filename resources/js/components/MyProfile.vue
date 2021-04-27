
<template>
    <v-container class="px-md-16 px-sm-2 px-xs-2 mt-8">
        <v-row>
            <v-col cols="12">
                <div class="profile-top pa-4 d-flex align-center justify-center">
                    <div class="user-profile mr-3"><img src="img/profiles/9.jpg" alt=""></div>
                    <div class="user-info">
                        <p class="mb-0 white--text">@designing-world</p>
                        <h4 class="mb-0 white--text">Suha Jannat</h4>
                    </div>
                </div>
            </v-col>
            <v-col cols="12">
                <div class="product-mid pa-4 mt-n6">
                    <v-containter class="container-px d-flex justify-space-between">
                        <div class="container-mid d-inline-flex">
                            <v-icon color="white">mdi-account</v-icon><h5 class="ml-2 mt-1">Username</h5>
                        </div>
                       <div>
                           <p class="mt-1">@degingworld</p>
                       </div>
                    </v-containter>
                    <v-containter class="container-px d-flex justify-space-between">
                        <div class="container-mid d-inline-flex text-left">
                            <v-icon color="white">mdi-account-check</v-icon><h5 class="ml-2 mt-1">Name</h5>
                        </div>
                       <div>
                           <p class="mt-1">Chhota Don</p>
                       </div>
                    </v-containter>
                    <v-containter class="container-px d-flex justify-space-between">
                        <div class="container-mid d-inline-flex">
                            <v-icon color="white">mdi-phone</v-icon><h5 class="ml-2 mt-1">Phone</h5>
                        </div>
                       <div>
                           <p class="mt-1">5956523656</p>
                       </div>
                    </v-containter>
                    <v-containter class="container-px d-flex justify-space-between">
                        <div class="container-mid d-inline-flex">
                            <v-icon color="white">mdi-email-outline</v-icon><h5 class="ml-2 mt-1">Email</h5>
                        </div>
                       <div>
                           <p class="mt-1">chhotadon@gmail.com</p>
                       </div>
                    </v-containter>
                    <v-containter class="container-px d-flex justify-space-between">
                        <div class="container-mid d-inline-flex">
                            <v-icon color="white">mdi-map-marker-outline</v-icon><h5 class="ml-2 mt-1">Location</h5>
                        </div>
                       <div>
                           <p class="mt-1">Las Vegas</p>
                       </div>
                    </v-containter>
                    <v-containter class="container-px d-flex justify-space-between">
                        <div class="container-mid d-inline-flex">
                            <v-icon color="white">mdi-star-outline</v-icon><h5 class="ml-2 mt-1">My Orders</h5>
                        </div>
                       <div>
                           <v-btn class="mt-1" height="29" color="error">View</v-btn>
                       </div>
                    </v-containter>
                </div>
            </v-col>
            <v-col cols=12>
                <v-btn color="info" light width="100%" class="mt-n3 mb-n3" @click="editprofile = true">Edit Profile</v-btn>
            </v-col>
        </v-row>
        <!-- Profile Edit Section Start -->
      <v-dialog
        v-model="editprofile"
        width="600"
        content-class="edit-profile"
      >
     
          <div class="text-center">
            <v-container>
            <v-row>
                <v-col cols="12">
                    <div class="profile-top pa-4 d-flex align-center justify-center">
                        <div class="user-profile mr-3"><img src="img/profiles/9.jpg" alt=""></div>
                        <div class="user-info">
                            <p class="mb-0 white--text">@designing-world</p>
                            <h4 class="mb-0 white--text">Suha Jannat</h4>
                            <div class="change-user-thumb">
                                <input class="form-control-file" type="file">
                                <v-btn><v-icon>mdi-pencil</v-icon></v-btn>
                            </div>
                        </div>
                    </div>
                </v-col>
                <v-col cols="12">
                    <div class="product-mid pa-4 mt-n6">
                        <v-text-field
                        v-model="username"
                        :rules="username"
                        label="Username"
                        prepend-icon="mdi-account"
                        class="px-5"
                        ></v-text-field>
                    </div>
                    <div class="product-mid pa-4 mt-n10">
                        <v-text-field
                        v-model="name"
                        :rules="name"
                        label="Name"
                        prepend-icon="mdi-account-check"
                        class="px-5"
                        ></v-text-field>
                    </div>
                    <div class="product-mid pa-4 mt-n10">
                        <v-text-field
                        v-model="phone"
                        :rules="phone"
                        label="Phone"
                        prepend-icon="mdi-phone"
                        class="px-5"
                        ></v-text-field>
                    </div><div class="product-mid pa-4 mt-n10">
                        <v-text-field
                        v-model="email"
                        :rules="email"
                        label="Email"
                        prepend-icon="mdi-email-outline"
                        class="px-5"
                        ></v-text-field>
                    </div>
                    <div class="product-mid pa-4 mt-n10">
                        <v-text-field
                        v-model="location"
                        :rules="location"
                        label="Location"
                        prepend-icon="mdi-map-marker-outline"
                        class="px-5"
                        ></v-text-field>
                    </div>
                    <v-btn color="error" light width="80%" class="mt-n7" @click="editprofile = true">Save Changes</v-btn>
                </v-col>
            </v-row>
            </v-container>
          </div>
      </v-dialog>
 <!-- Profile Edit Section End -->

    </v-container>
</template>

<script>
export default {
    data: () => ({
        editprofile: false,
        username: 'designerworld',
        name: 'Chhota Don',
        phone: '9568965452',
        email: 'chhotadon@gmail.com',
        location: 'Las Vegas',
        show1: false,
    })
}
</script>
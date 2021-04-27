<template>
  <v-container class="px-md-16 px-sm-2 px-xs-2 mt-11">
      <v-row>
          <v-col cols="12">
              <h3>Contact Us</h3>
              <p class="gray--text lighten-1">Write to us. We will reply to you as soon as possible. But yes, it can take up to 24 hours.</p>
          </v-col>
          <v-col cols="12" md="4" class="mt-n4">
          <v-text-field
            label="Your Name"
            solo
          ></v-text-field>
        </v-col>
        <v-col cols="12" md="4" class="contact-inputs">
          <v-text-field
            label="Your Email Id"
            solo
          ></v-text-field>
        </v-col>
        <v-col cols="12" md="4" class="contact-inputs">
          <v-text-field
            label="Phone Number (Optional)"
            solo
          ></v-text-field>
        </v-col>
        <v-col cols="12" class="mt-n9">
          <v-text-field
            label="Subject"
            solo
          ></v-text-field>
        </v-col>
        <v-col cols="12" class="mt-n9">
            <v-textarea
              solo
              label="Write To Us"
            >
            </v-textarea>
        </v-col>
        <v-col cols="12" class="mt-n9">
          <v-btn width="100%" color="success">Send Now</v-btn>
        </v-col>
      </v-row>
  </v-container>
</template>

<script>
export default {

}
</script>
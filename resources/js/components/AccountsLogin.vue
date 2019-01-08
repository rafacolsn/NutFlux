

<template>
  <div class="container">
    <h1>Login</h1>
    <form method="post" action="/login/">
      <label for="email">Email:</label>
      <input type="email" v-model="email" name="email" placeholder="Your email address">
      
      <br>
      <br>

      <label for="password">Password:</label>
      <input type="password" v-model="password" name="password" placeholder="Type your password">

      <input type="hidden" name="_token" :value="csrf">
      <br>
      <br>

      <button @click="login">Login</button>
    </form>
  </div>
</template>


<script>
export default {
  props: ["csrf"],
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    login: function(event) {
      axios
        .post("/login/")
        
        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>

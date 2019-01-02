

<template>
  <div class="container">
    <h1>Create an account</h1>
    <form method="post" action="/accounts/">
      <label for="email">Email:</label>
      <input type="email" v-model="email" name="email" placeholder="Your email address">
      
      <br>
      <br>

      <label for="password">Password:</label>
      <input type="password" v-model="password" name="password" placeholder="Type your password">

      <br>
      <br>
      <input type="hidden" name="_token" :value="csrf">
      <br>

      <button @click="create">Submit</button>
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
    create: function(event) {
      console.log("coucou");
      axios
        .post("/account")
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

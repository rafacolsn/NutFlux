<template>
  <div class="container">
    <h1>Create an actor</h1>

    <form method="POST" action="/actors">
      <label for="firstname">First name:</label>
      <input type="text" v-model="firstname" name="firstname" placeholder="Cate">
      
      <label for="lastname">Last name:</label>
      <input type="text" v-model="lastname" name="lastname" placeholder="Blanchett">

      <br>
      <br>
      <input type="hidden" name="_token" :value="csrf">
      <label for="picture">Picture:</label>
      
      <input type="text" name="picture" v-model="picture">
      <br>

      <button @click="create">Submit</button>
      <!-- execute fonction create on the click -->
    </form>
  </div>
</template>


<script>
export default {
  props: ["csrf"],
  data() {
    return {
      firstname: "",
      lastname: "",
      picture: ""
    };
  },
  methods: {
    create: function(event) {
      console.log("coucou");
      axios
        .post("/actors")
        .then(function(response) {
          console.log("alleluia");
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
          console.log("EndEndEnd");
        });
    }
  }
};
</script>

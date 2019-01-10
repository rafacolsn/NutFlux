<template>
  <div class="container">
    <h1>Create a user</h1>

    <form method="post" action="/users">
      <p>
        <label for="firstname">Firstname :</label>
        <input type="text" name="firstname" v-model="firstname">
      </p>
      <p>
        <label for="lastname">Lastname :</label>
        <input type="text" name="lastname" v-model="lastname">
      </p>

      <div>
        <img src="../../../images/dog.jpg" alt="dog">
        <input type="radio" id="dog" name="avatar" checked value="../../../images/dog.jpg">
      </div>

      <div>
        <img src="../../../images/cat.jpg" alt="cat">
        <input type="radio" id="cat" name="avatar" value="../../../images/cat.jpg">
      </div>

      <div>
        <img src="../../../images/duck.jpg" alt="duck">
        <input type="radio" id="duck" name="avatar" value="../../../images/duck.jpg">
      </div>

      <input type="hidden" name="_token" :value="csrf">
      
      <button v-on:click="create">Create</button>
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
      avatar: ""
    };
  },
  methods: {
    create: function(event) {
      axios
        .post("/users")
        .then(function(response) {
          // handle success
          console.log(response);
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    }
  }
};
</script>

<style>
img {
  max-width: 10%;
}
</style>
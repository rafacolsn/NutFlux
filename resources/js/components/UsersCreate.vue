<template>
  <div class="container users-create">
    <h1></h1>

    <h2>Create a user</h2>

    <form method="post" action="/users">
      <p>
        <input type="text" name="firstname" v-model="firstname" placeholder="Firstname" required>
      </p>
      <p>
        <input type="text" name="lastname" v-model="lastname" placeholder="Lastname" required>
      </p>

      <div class="img-avatar">
        <label for="dog">
        <img src="../../../images/dog.jpg" alt="dog"></label>
        <input type="radio" id="dog" name="avatar" checked value="../../../images/dog.jpg">
      </div>

      <div class="img-avatar">
        <label for="cat"><img src="../../../images/cat.jpg" alt="cat"></label>
        <input type="radio" id="cat" name="avatar" value="../../../images/cat.jpg">
      </div>

      <div class="img-avatar">
        <label for="duck"><img src="../../../images/duck.jpg" alt="duck"></label>
        <input type="radio" id="duck" name="avatar" value="../../../images/duck.jpg">
      </div>



      <input type="hidden" name="_token" :value="csrf">
    <div class="container-button">  
      <button class="btn" v-on:click="create"><span>Add user</span></button>
    </div>

    
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

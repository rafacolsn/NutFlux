<template>
  <div class="container">
    <img :src="user.avatar" :alt="user.firstname + ' ' + user.lastname">

    <h1>Edit user</h1>
    <br>

    <form method="post" :action="'/users/' + user.id">
      <p>
        <label for="userFirstname">Firstname</label>
        <input type="text" name="userFirstname" :value="user.firstname">
      </p>
      <br>
      <p>
        <label for="userLastname">Lastname</label>
        <input type="text" name="userLastname" :value="user.lastname">
      </p>
      <br>
      <div>
        <img src="../../../images/dog.jpg" alt="dog">
        <input type="radio" id="dog" name="userAvatar" value="../../../images/dog.jpg">
      </div>
      <br>
      <div>
        <img src="../../../images/cat.jpg" alt="cat">
        <input type="radio" id="cat" name="userAvatar" value="../../../images/cat.jpg">
      </div>
      <br>
      <div>
        <img src="../../../images/duck.jpg" alt="duck">
        <input type="radio" id="duck" name="userAvatar" value="../../../images/duck.jpg">
      </div>
      <br>
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="_token" :value="csrf">
      
      <button v-on:click="send">Edit</button>
      <br>
      <br>
      <br>
      <button v-on:click="destroy">Delete user</button>
      <br>
      <br>
      <button>
        <a href="/users">Cancel</a>
      </button>
    </form>
  </div>
</template>
// // attribuyte checked set if (user.avatar == input.value){
//   console.log(user.avatar)
// }
<script>
export default {
  props: ["user", "csrf", "users"],
  data() {
    return {
      userId: user.id,
      userFirstname: user.firstname,
      userLastname: user.lastname,
      userAvatar: user.avatar
    };
  },
  methods: {
    send: function(event) {
      axios
        .patch("/users/" + user.id)
        .then(function(response) {
          // handle success
          console.log(response);
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    },
    destroy: function(event) {
      axios
        .delete("/users/" + user.id)
        .then(function(response) {
          // handle success
          console.log(response);
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    },
  mounted: function() {
    this.id = this.$el.getAttribute('data-id');
  }
  }
};
</script>


<style>
.container {
  color: #fff;
}

a {
  color: #000;
}

li {
  list-style-type: none;
}

img {
  max-width: 10%;
}
</style>
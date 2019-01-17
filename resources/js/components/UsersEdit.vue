<template>
  <div class="container users-edit">
    <div class="float">
      <h2>Edit user</h2>
    </div>

    <div class="float">
      <img id="avatar-user" :src="user.avatar" :alt="user.firstname + ' ' + user.lastname">
    </div>

    <form class="clear" method="post" :action="'/users/' + user.id">
      <p>
        <input type="text" name="userFirstname" :value="user.firstname">
      </p>
      <p>
        <input type="text" name="userLastname" :value="user.lastname">
      </p>

      <div class="img-avatar">
        <img src="../../../images/dog.jpg" alt="dog">
        <input type="radio" id="dog" name="userAvatar" value="../../../images/dog.jpg">
      </div>

      <div class="img-avatar">
        <img src="../../../images/cat.jpg" alt="cat">
        <input type="radio" id="cat" name="userAvatar" value="../../../images/cat.jpg">
      </div>

      <div class="img-avatar">
        <img src="../../../images/duck.jpg" alt="duck">
        <input type="radio" id="duck" name="userAvatar" value="../../../images/duck.jpg">
      </div>

      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="_token" :value="csrf">
      
      <div class="container-button">
        <button class="btn" v-on:click="send">Edit</button>
        <button class="btn" v-on:click="destroy">Delete user</button>
        <button class="btn">
            <a href="/users">Cancel</a>
        </button>
      </div>
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
      this.id = this.$el.getAttribute("data-id");
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
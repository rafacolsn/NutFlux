<template>
  <div class="container users-edit">
    <img id="avatar-user" :src="user.avatar" :alt="user.firstname + ' ' + user.lastname">
    <h2>Edit user</h2>

    <form class="clear" method="post" :action="'/users/' + user.id">
      <p>
        <input type="text" name="userFirstname" v-model="userFirstname">
      </p>
      <p>
        <input type="text" name="userLastname" v-model="userLastname">
      </p>

      <div class="img-avatar">
        <label for="first">
        <img :src="'https://api.adorable.io/avatars/' + userFirstname +'.png'" alt="adorable">
        </label>
        <input type="radio" id="first" name="userAvatar" v-model="userAvatar" :value="'https://api.adorable.io/avatars/' + userFirstname +'.png'">
      </div>

      <div class="img-avatar">
        <label for="last">
        <img :src="'https://api.adorable.io/avatars/' + userLastname +'.png'" alt="adorable">
        </label>
        <input type="radio" id="last" name="userAvatar" v-model="userAvatar" :value="'https://api.adorable.io/avatars/' + userLastname +'.png'">
      </div>

      <div class="img-avatar">
        <label for="firstlast">
        <img :src="'https://api.adorable.io/avatars/' + userFirstname + userLastname + '.png'" alt="adorable">
        </label>
        <input type="radio" id="firstlast" name="userAvatar" v-model="userAvatar" :value="'https://api.adorable.io/avatars/' + userFirstname + userLastname +'.png'">
      </div>

      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="_token" :value="csrf">

      <div class="container-button">
        <button class="btn" v-on:click="send">Save</button>
        
        <a class="btn" href="/users">Cancel</a>
        
        <button class="delete-btn" v-on:click="destroy">Delete this user</button>
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
      userId: this.user.id,
      userFirstname: this.user.firstname,
      userLastname: this.user.lastname,
      userAvatar: this.user.avatar
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
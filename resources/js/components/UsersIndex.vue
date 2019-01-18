<template>
  <div class="content users-index">
    <h1>Your profiles</h1>
    <ol class="flex space" v-if="users">
      <li v-for="user in users">
        <div class="user-wrapper">
          <form method="GET" :action="'/login/' + user.id">
            <button class="user-btn" v-on:click="login">
              <p>{{ user.firstname }} {{ user.lastname }}</p>
              <input type="hidden" name="id" :value="user.id">
              <img :src="user.avatar" :alt="user.firstname + ' ' + user.lastname">
            </button>
          </form>
          
          <a class="edit-btn" :href="'/users/' + user.id + '/edit'">Edit user information</a>

          <form method="post" :action="'/users/' + user.id">
            <input type="hidden" name="id" :value="user.id">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" :value="csrf">
            
            <button class="delete-btn" v-on:click="destroy">Delete this user</button>
          </form>

        </div>
      </li>
      <li v-if="users.length == 0">
        <p>You haven't created any user yet. That's a shame.</p>
      </li>
    </ol>
    <div class="new-user" v-if="users.length < 3">
      <p>Make you happy ! Add a new user to your account.</p>
      <a class="add-user" href="/users/create">Yeah !</a>
      
    </div>
  </div>
</template>

<script>
export default {
  props: ["users", "csrf"],
  methods: {
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
    login: function(event) {
      axios
        .get("/login/" + user.id)
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
.container {
  color: #fff;
}

a {
  color: #fff;
}

li {
  list-style-type: none;
}

img {
  max-width: 10%;
}
</style>
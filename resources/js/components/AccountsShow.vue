
<template>
  <div class="container">
    <h1>Your account : {{account.email}}</h1>
    <ul v-if="users">
      <li v-for="user in users">
        <a :href="'/users/' + user.id + '/edit'">
          {{user.firstname}}
          {{user.lastname}}
          <br>
          <br>
          <img :src="user.avatar" :alt="user.firstname + ' ' + user.lastname">
        </a>
        <br>
        <form method="post" :action="'/users/' + user.id">
          <input type="hidden" name="id" :value="user.id">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" :value="csrf">
          
          <button v-on:click="destroy">Delete user</button>
        </form>
      </li>
    </ul>
    <br>
    <form method="post" :action="'/accounts/' + account.id">
      <input type="hidden" name="id" :value="account.id">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" :value="csrf">
      
      <button v-on:click="destroyAccount">Delete my account</button>
    </form>

    <a :href="'/accounts/' + account.id + '/edit'">Edit account</a>
  </div>
</template>

<script>
export default {
  props: ["account", "csrf", "users"],
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
    destroyAccount: function(event) {
      axios
        .delete("/accounts/" + account.id)
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

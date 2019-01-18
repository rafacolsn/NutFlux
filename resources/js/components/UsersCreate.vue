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
        <label for="first">
        <img :src="'https://api.adorable.io/avatars/' + firstname +'.png'" alt="adorable"></label>
        <input type="radio" id="first" name="avatar" :value="'https://api.adorable.io/avatars/' + firstname +'.png'" v-model="avatar">
      </div>

      <div class="img-avatar">
        <label for="last">
        <img :src="'https://api.adorable.io/avatars/' + lastname +'.png'" alt="adorable">
        </label>
        <input type="radio" id="last" name="avatar" v-model="avatar" :value="'https://api.adorable.io/avatars/' + lastname +'.png'">
      </div>

      <div class="img-avatar">
        <label for="firstlast">
        <img :src="'https://api.adorable.io/avatars/' + firstname + lastname +'.png'" alt="adorable">
        </label>
        <input type="radio" id="firstlast" name="avatar" :value="'https://api.adorable.io/avatars/' + firstname + lastname +'.png'" v-model="avatar">
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

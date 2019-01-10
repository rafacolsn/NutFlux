<template>
  <div class="container">
    <h1>Edit this user</h1>
    <form method="post" :action="'/users/' + user.id">
      <p>
        <label for="userFirstname">Firstname</label>
        <input type="text" name="userFirstname" :value="user.firstname">
      </p>
      <p>
        <label for="userLastname">Lastname</label>
        <input type="text" name="userLastname" :value="user.lastname">
      </p>
      <!-- <p>
        <label for="userAvatar">Avatar</label>
        <input type="text" name="userAvatar" :value="user.avatar">
      </p> -->
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
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="_token" :value="csrf">
      
      <button v-on:click="send">Edit</button>
      <button v-on:click="destroy">Delete</button>
    </form>
  </div>
</template>

<script>
    export default {
        props: ['user', 'csrf'],
        data () {
            return {
                userId: user.id,
                userFirstname: user.firstname,
                userLastname: user.lastname,
                userAvatar: user.avatar
            }
        },
        methods: {
            send: function ( event ) {
                axios.patch( '/users/' + user.id )
                    .then( function ( response ) {
                        // handle success
                        console.log(response);
                    }   )
                    .catch( function ( error ) {
                        // handle error
                        console.log( error );
                    } );
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
        }
    }
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
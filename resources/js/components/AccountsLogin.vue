<template>
    <div class="container">
        <div class="content-wrapper-center">
            <p class="site-title">Nutflux</p>
            <div class="wrapper">
                <h1>Login</h1>
                <form class="guest-form" method="post" action="/login">
                    <p class="input-wrapper">
                        <label class="input-label" for="email">Email:</label>
                        <input class="input-field" type="email" v-model="email" name="email" placeholder="Your email address">
                    </p>

                    <p class="input-wrapper">
                        <label class="input-label" for="password">Password:</label>
                        <input class="input-field" type="password" v-model="password" name="password" placeholder="Type your password">
                    </p>

                    <input type="hidden" name="_token" :value="csrf">

                    <div class="container-button">
                        <button class="btn" @click="login">Login</button>
                    </div>

                    <p class="register-link">
                        <a href="/accounts/create">Don't have an account yet ? Click here to register</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</template>


<script>
export default {
  props: ["csrf"],
  data() {
    return {
      email: "",
      password: ""
    };
  },
  methods: {
    login: function(event) {
      axios
        .post("/login/")

        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>

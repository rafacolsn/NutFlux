<template>
  <div class="container">
    <div class="content-wrapper">
      <p class="site-title">Nutflux</p>
      <div class="wrapper">
        <h1 id="signup">Sign Up</h1>
        <form class="guest-form" method="post" action="/register/">
          <p class="input-wrapper">
            <label class="input-label" for="email">Email:</label>
            <input
              class="input-field"
              type="email"
              v-model="email"
              name="email"
              placeholder="Your email address"
            >
          </p>

          <p class="input-wrapper">
            <label class="input-label" for="password">Password:</label>
            <input
              class="input-field"
              type="password"
              v-model="password"
              name="password"
              placeholder="Type your password"
            >
          </p>

          <p class="input-wrapper">
            <label class="input-label" for="firstname">Firstname :</label>
            <input
              class="input-field"
              type="text"
              name="firstname"
              v-model="firstname"
              placeholder="Firstname"
            >
          </p>

          <p class="input-wrapper">
            <label class="input-label" for="lastname">Lastname :</label>
            <input
              class="input-field"
              type="text"
              name="lastname"
              v-model="lastname"
              placeholder="Lastname"
            >
          </p>

          <div class="image-picker-wrapper">
            <p class="input-label">Pick an avatar :</p>
            <!-- <div class="image-picker">
                        <label for="dog">
                            <img :class="[ avatar == '../../../images/dog.jpg' ? 'selected-image' : '' ]" class="image-picker-content" src="../../../images/dog.jpg" alt="dog">
                        </label>
                        <input type="radio" id="dog" name="avatar" checked value="../../../images/dog.jpg" v-model="avatar">
                    </div>

                    <div class="image-picker">
                        <label for="cat">
                            <img :class="[ avatar == '../../../images/cat.jpg' ? 'selected-image' : '' ]" class="image-picker-content" src="../../../images/cat.jpg" alt="cat">
                        </label>
                        <input type="radio" id="cat" name="avatar" value="../../../images/cat.jpg" v-model="avatar">
                    </div>

                    <div class="image-picker">
                        <label for="duck">
                            <img :class="[ avatar == '../../../images/duck.jpg' ? 'selected-image' : '' ]" class="image-picker-content" src="../../../images/duck.jpg" alt="duck">
                        </label>
                        <input type="radio" id="duck" name="avatar" value="../../../images/duck.jpg" v-model="avatar">
            </div>-->
            <div class="image-picker">
              <label for="first">
                <img class="image-picker-content" :src="'https://api.adorable.io/avatars/' + firstname +'.png'" alt="adorable">
              </label>
              <input
                type="radio"
                id="first"
                name="avatar"
                :value="'https://api.adorable.io/avatars/' + firstname +'.png'"
                v-model="avatar"
              >
            </div>

            <div class="image-picker">
              <label for="last">
                <img class="image-picker-content" :src="'https://api.adorable.io/avatars/' + lastname +'.png'" alt="adorable">
              </label>
              <input
                type="radio"
                id="last"
                name="avatar"
                v-model="avatar"
                :value="'https://api.adorable.io/avatars/' + lastname +'.png'"
              >
            </div>

            <div class="image-picker">
              <label for="firstlast">
                <img class="image-picker-content"
                  :src="'https://api.adorable.io/avatars/' + firstname + lastname +'.png'"
                  alt="adorable"
                >
              </label>
              <input
                type="radio"
                id="firstlast"
                name="avatar"
                :value="'https://api.adorable.io/avatars/' + firstname + lastname +'.png'"
                v-model="avatar"
              >
            </div>
          </div>

          <input type="hidden" name="_token" :value="csrf">

          <div class="container-button">
            <button class="btn" @click="create">Register</button>
          </div>

          <p class="register-link">
            <a href="/login">Already have an account ? What the f*@% are you doing here ? Log you in !</a>
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
      password: "",
      firstname: "",
      lastname: "",
      avatar: "../../../images/dog.jpg"
    };
  },
  methods: {
    create: function(event) {
      axios
        .post("/register")

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

<template>
  <div class="container">
    <input v-model="message" placeholder="modifiez-moi">

    <p>Le message est : {{ message }}</p>

    <h1>Create an actor</h1>

    <form method="POST" action="/actors">
      <label for="first-name">First name:</label>
      
      <input type="hidden" value="csrf" name="_token">
      
      <input
        type="text"
        class="form-control"
        id="first-name"
        required
        v-model="newItem.firstname"
        placeholder="Cate"
      >
      
      <label for="last-name">Last name:</label>
      
      <input
        type="text"
        class="form-control"
        id="last-name"
        required
        v-model="newItem.lastname"
        placeholder="Blanchett"
      >

      <br>
      <br>

      <input type="file" name="pic" accept="image/*" v-on:change="newItem.picture">
    </form>

    <br>

    <button @click="create">Submit</button>
  </div>
</template>


<script>


export default {
  props: ["csrf"],
  data() {
    return {
      message: "",
      item: [],
      newItem: { firstname: "", lastname: "", picture: "" }
    };
  },
  methods: {
    create: function(event) {
      console.log("coucou");

      axios
        .post("/actors/")
        .then(function(response) {
          console.log("yeyyyyyyyyyyyyyyyyyyy");

          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
          console.log("cocaaa");
        });
    }
  }
};
</script>

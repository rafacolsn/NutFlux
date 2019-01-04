<template>
  <div class="container">
    <h1>Your account</h1>

   <p>Your email address:  {{ account.email }} </p>
  </div>
  
</template>

<script>
export default {
  props: ["account"],
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

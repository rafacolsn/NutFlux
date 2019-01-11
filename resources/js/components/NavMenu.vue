

<template>
  <nav class="nav-menu">
    <div class="nutflux">
      <a href="/choices">NutFlux</a>
    </div>
    <div>
      <a href="/users">{{user.firstname}}</a>
    </div>
    <div class="dropdown" @mouseover="hover = true" @mouseleave="hover = false">
      <a href="#">Shows</a>
      
      <span v-if="!hover">
        <i class="fas fa-caret-down"></i>
      </span>
      
      <span v-if="hover">
        <i class="fas fa-caret-up"></i>
      </span>

      <ul class="dropdown-child">
        <li>
          <a href="/medias">All</a>
        </li>
        <li>
          <a href="/choices/favourites">Favourites</a>
        </li>
        <li>
          <a href="/choices/later">To Watch Later</a>
        </li>
        <li>
          <a href="/choices/watched">Seen</a>
        </li>
      </ul>
    </div>
    <search-field></search-field>
    <form method="post" action="/logout">
      <input type="hidden" name="_token" :value="csrf">
      <button type="submit">Logout</button>
    </form>
  </nav>
</template>

<script>
export default {
  props: ["user", "csrf"],
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      hover: ""
    };
  }
};
</script>


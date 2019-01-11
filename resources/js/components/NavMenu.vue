

<template>
  <nav>
    <div>
      <a href="/choices">NutFlux</a>
    </div>
    <div>
      <a href="/users">{{user.firstname}}</a>
    </div>
    <div>
      <a href="#">Shows</a>
      <i class="fas fa-caret-up"></i>
      <ul>
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
    <form method="post" action="/logout">
      <input type="hidden" name="_token" :value="csrf">
      <button type="submit" >Logout</button>
    </form>
    <search-field></search-field>
  </nav>
</template>

<script>
export default {
  props: ["user", "csrf"],
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
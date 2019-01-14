<template>
  <div class="content">
    <h1>
      <span v-if="type === 'favourites'">Favourites</span>
      <span v-if="type === 'watched'">Watched</span>
      <span v-if="type === 'later'">To Watch Later</span>
    </h1>
    <ol>
      <li v-for="media in choice">
        <img :src="media.poster" :alt="media.title" class="poster">
        <a class="media-title" :href="'/medias/' + media.id">
          <p>{{ media.title }}</p>
        </a>
      </li>
    </ol>
  </div>
</template>

<script>
export default {
  props: ["choice", "type"],
  methods: {
    destroy: function(event) {
      axios
        .delete("/choices/" + item.id_choice)
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

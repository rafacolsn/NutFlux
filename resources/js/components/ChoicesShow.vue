<template>
  <div class="content">
    <h1>
      <span v-if="type === 'favourites'">Favourites</span>
      <span v-if="type === 'watched'">Watched</span>
      <span v-if="type === 'later'">To Watch Later</span>
    </h1>
    <ol class="media-list">
      <li class="media-list-item" v-for="media in choice">
        <a class="media-title" :href="'/medias/' + media.id">
          <img :src="media.poster" :alt="media.title" class="poster">
          <p>{{ media.title }}</p>
        </a>
      </li>
    </ol>
  </div>
</template>

<script>
export default {
  props: ["choice", "type"],
};
</script>

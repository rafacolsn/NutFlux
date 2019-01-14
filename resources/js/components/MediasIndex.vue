<template>
  <div class="content">
    <h1>All Shows</h1>
    <ol v-if="medias" class="media-list">
     
        <li v-for="media in medias">
          <a :href="'/medias/' + media.id" >
            <img :src="media.poster" :alt="media.title">

            <p>{{ media.title }} ({{ media.year }})</p>
          </a>
        </li>
     
    </ol>
  </div>
</template>

<script>
export default {
  props: ["medias", "csrf"],
};
</script>


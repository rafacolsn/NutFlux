<template>
  <div class="content">
    <h2 id="favourites" class="list-title">Favourites</h2>
    <ul class="media-list">
      <li class="media-list-item" v-for="item in choiceslist" v-if="item.type === 'favourites' ">
        
        <a :href="'/medias/' + item.id_media">
            <img :src="item.poster" :alt="item.title" />
            <p>{{ item.title }}</p>
        </a>
        
      </li>
    </ul>
    <h2 id="seen" class="list-title">Watched</h2>
    <ul class="media-list" >
      <li class="media-list-item" v-for="item in choiceslist" v-if="item.type === 'watched' ">
        
        <a :href="'/medias/' + item.id_media">
            <img :src="item.poster" :alt="item.title" />
            <p>{{ item.title }}</p>
        </a>
        
      </li>
    </ul>
    <h2 id="later" class="list-title">To Watch Later</h2>
    <ul class="media-list">
      <li class="media-list-item" v-for="item in choiceslist" v-if="item.type === 'later' ">
        
        <a :href="'/medias/' + item.id_media">
            <img :src="item.poster" :alt="item.title"/>
            <p>{{ item.title }}</p>
        </a>
        
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["choiceslist", "csrf"],
    };
</script>

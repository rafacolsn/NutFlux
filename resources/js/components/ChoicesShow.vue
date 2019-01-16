<template>
  <div class="content">
    <h1>
      <span v-if="type === 'favourites'">Favourites</span>
      <span v-if="type === 'watched'">Watched</span>
      <span v-if="type === 'later'">To Watch Later</span>
    </h1>
    <ul class="media-list">
      <li class="media-list-item" v-for="item in choices" v-if="type === item.type">
        <a :href="'/medias/' + item.media_id">
            <div class="poster">
                <img :src="item.poster" :alt="item.title"/>

                <div class="choices-form-wrapper">
                    <!-- Favourites -->
                    <form class="choices-form" v-if="isInChoices( item.media_id, 'favourites' )"
                        :action="'/choices/' + item.id"
                        method="post" >
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="choices favourites-delete"><span class="fas fa-heart"></span></button>
                    </form>
                    <form class="choices-form" v-if="!isInChoices( item.media_id, 'favourites' )"
                        action="/choices"
                        method="post" >
                        <input type="hidden" name="mediaId" :value="item.media_id">
                        <input type="hidden" name="type" value="favourites">
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="choices favourites"><span class="far fa-heart"></span></button>
                    </form>
                    <!-- To see later -->
                    <form class="choices-form" v-if="isInChoices( item.media_id, 'later' )"
                        :action="'/choices/' + item.id"
                        method="post" >
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="choices later-delete"><span class="fas fa-clock"></span></button>
                    </form>
                    <form class="choices-form" v-if="!isInChoices( item.media_id, 'later' )"
                        action="/choices"
                        method="post" >
                        <input type="hidden" name="mediaId" :value="item.media_id">
                        <input type="hidden" name="type" value="later">
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="choices later"><span class="far fa-clock"></span></button>
                    </form>
                    <!-- Watched -->
                    <form class="choices-form" v-if="isInChoices( item.media_id, 'watched' )"
                        :action="'/choices/' + item.id"
                        method="post" >
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="choices watched-delete"><span class="fas fa-check"></span></button>
                    </form>
                    <form class="choices-form" v-if="!isInChoices( item.media_id, 'watched' )"
                        action="/choices"
                        method="post" >
                        <input type="hidden" name="mediaId" :value="item.media_id">
                        <input type="hidden" name="type" value="watched">
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="choices watched"><span class="far fa-eye"></span></button>
                    </form>
                </div>
            </div>
        </a>
        <a :href="'/medias/' + item.media_id" >
            <p>{{ item.title }} ({{ item.year }})</p>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["choices", "type"],
  methods: {
      isInChoices: function ( mediaId, type ) {
          // Check if the media of ID mediaId is in the users choices
          // AND if the media is of the given type in the users choices
          // Return id of user choice matching criterias or false
          let choiceId = false;
          this.choices.forEach( function ( choice ) {
              //console.log( choice );
              if ( choice.media_id == mediaId && choice.type == type ) {
                  choiceId = choice.id;
                  //console.log( 'match !' );
              }
          } );
          return choiceId;
      }
  }
};
</script>

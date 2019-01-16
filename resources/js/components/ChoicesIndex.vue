<template>
  <div class="content">
    <div v-for="list in lists" >
        <h2 :id="list.slug" class="list-title"><span :class="list.icon"></span> {{ list.title }}</h2>
        <ul class="media-list flex">
          <li class="media-list-item" v-for="item in choiceslist" v-if="item.type === list.slug">

            <a :href="'/medias/' + item.id_media">
                <div class="poster">
                    <img :src="item.poster" :alt="item.title"/>

                    <div class="choices-form-wrapper">

                        <!-- Favourites -->
                        <form class="choices-form" v-if="isInChoices( item.id_media, 'favourites' )"
                            :action="'/choices/' + item.id_choice"
                            method="post" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices favourites-delete"><span class="fas fa-heart"></span></button>
                        </form>
                        <form class="choices-form" v-if="!isInChoices( item.id_media, 'favourites' )"
                            action="/choices"
                            method="post" >
                            <input type="hidden" name="mediaId" :value="item.id_media">
                            <input type="hidden" name="type" value="favourites">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices favourites"><span class="far fa-heart"></span></button>
                        </form>
                        <!-- To see later -->
                        <form class="choices-form" v-if="isInChoices( item.id_media, 'later' )"
                            :action="'/choices/' + item.id_choice"
                            method="post" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices later-delete"><span class="fas fa-clock"></span></button>
                        </form>
                        <form class="choices-form" v-if="!isInChoices( item.id_media, 'later' )"
                            action="/choices"
                            method="post" >
                            <input type="hidden" name="mediaId" :value="item.id_media">
                            <input type="hidden" name="type" value="later">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices later"><span class="far fa-clock"></span></button>
                        </form>
                        <!-- Watched -->
                        <form class="choices-form" v-if="isInChoices( item.id_media, 'watched' )"
                            :action="'/choices/' + item.id_choice"
                            method="post" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices watched-delete"><span class="fas fa-check"></span></button>
                        </form>
                        <form class="choices-form" v-if="!isInChoices( item.id_media, 'watched' )"
                            action="/choices"
                            method="post" >
                            <input type="hidden" name="mediaId" :value="item.id_media">
                            <input type="hidden" name="type" value="watched">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices watched"><span class="far fa-eye"></span></button>
                        </form>
                    </div>
                </div>
                <p>{{ item.title }} ({{ item.year }})</p>
            </a>
          </li>
        </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: ["choiceslist", "csrf", "user"],
  data () {
      return {
          lists: [
              { title: 'Favourites', slug: "favourites", icon: 'fas fa-heart' },
              { title: 'To Watch Later', slug: "later", icon: 'fas fa-clock' },
              { title: 'Watched', slug: "watched", icon: 'fas fa-eye' }
          ]
      }
  },
  methods: {
      isInChoices: function ( mediaId, type ) {
          // Check if the media of ID mediaId is in the users choices
          // AND if the media is of the given type in the users choices
          // Return id of user choice matching criterias or false
          let choiceId = false;
          this.choiceslist.forEach( function ( choice ) {
              //console.log( choice );
              if ( choice.id_media == mediaId && choice.type == type ) {
                  choiceId = choice.id_choice;
                  //console.log( 'match !' );
              }
          } );
          return choiceId;
      }
  }
};
</script>

<template>
  <div class="container">
    <h1>List</h1>
    <h2>Favourites</h2>
    <ul>
      <li v-for="item in choiceslist" v-if="item.type === 'favourites' ">
        <a :href="'/medias/' + item.id_media">
            {{ item.title }}<br />
            <img :src="item.poster" :alt="item.title" />
        </a>
        <form method="post" :action="'/choices/' + item.id_choice">
          <input type="hidden" name="id" :value="item.id_choice">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" :value="csrf">

          <button v-on:click="destroy">Delete</button>
        </form>
      </li>
    </ul>
    <h2>Watched</h2>
    <ul>
      <li v-for="item in choiceslist" v-if="item.type === 'watched' ">
        <a :href="'/medias/' + item.id_media">
            {{ item.title }}<br />
            <img :src="item.poster" :alt="item.title" />
        </a>
        <form method="post" :action="'/choices/' + item.id_choice">
          <input type="hidden" name="id" :value="item.id_choice">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" :value="csrf">

          <button v-on:click="destroy">Delete</button>
        </form>
      </li>
    </ul>
    <h2>To Watch Later</h2>
    <ul>
      <li v-for="item in choiceslist" v-if="item.type === 'later' ">
        <a :href="'/medias/' + item.id_media">
            {{ item.title }}<br />
            <img :src="item.poster" :alt="item.title" />
        </a>
        <form method="post" :action="'/choices/' + item.id_choice">
          <input type="hidden" name="id" :value="item.id_choice">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" :value="csrf">

          <button v-on:click="destroy">Delete</button>
        </form>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["choiceslist", "csrf"],
  methods: {
      destroy: function( event ) {
          axios.delete('/choices/' + item.id_choice).then( function ( response ) {
                        // handle success
                        console.log(response);
                    }   )
                    .catch( function ( error ) {
                        // handle error
                        console.log( error );
                    } );
            }
        }
    }
</script>

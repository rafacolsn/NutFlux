<template>
    <div class="content medias-edit">
        <h1>Create a media</h1>
        <form method="post" action="/medias">
            <div class="edit">
                <label for="mediaTitle">Title</label>
                <input type="text" name="mediaTitle" v-model="mediaTitle" />
            </div>
            <div class="edit">
                <label for="mediaSummary">Summary</label>
                <textarea name="mediaSummary" v-model="mediaSummary"></textarea>
            </div>
            <div class="edit">
                <label for="mediaYear">Year</label>
                <input type="number" step="1" name="mediaYear" v-model="mediaYear" />
            </div>
            <div class="edit">
                <label for="mediaTrailer">Trailer</label>
                <input type="text" name="mediaTrailer" v-model="mediaTrailer" />
            </div>
            <div class="edit">
                <label for="mediaIsSerie">Is it part of a TV Show ?</label>
                <input type="checkbox" name="mediaIsSerie" v-model="mediaIsSerie" />
            </div>
            <div class="edit show-poster">
                <label for="mediaPoster">Poster</label>
                <input type="text" name="mediaPoster" v-model="mediaPoster" />
            </div>
            <div class="edit">
                <label for="mediaDirector">Director</label>
                <input type="text" name="mediaDirector" v-model="mediaDirector" />
            </div>
            <div class="edit">
                <label for="mediaProducer">Producer</label>
                <input type="text" name="mediaProducer" v-model="mediaProducer" />
            </div>

            <input type="hidden" name="_token" :value="csrf">

            <button v-on:click="send">Create</button>
            
        </form>
    </div>
</template>

<script>
    export default {
        props: ['csrf'],
        data () {
            return {
                mediaTitle: '',
                mediaSummary: '',
                mediaYear: 0,
                mediaTrailer: '',
                mediaIsSerie: 0,
                mediaPoster: '',
                mediaDirector: '',
                mediaProducer: '',
            }
        },
        methods: {
            getYoutubeId: function ( string ) {
                var video_id = string.split( 'v=' )[ 1 ];
                var ampersandPosition = video_id.indexOf( '&' );
                if ( ampersandPosition != -1 ) {
                    video_id = video_id.substring( 0, ampersandPosition );
                }
                return video_id;
            },
            send: function ( event ) {
                this.$data.mediaTrailer = this.getYoutubeId( this.$data.mediaTrailer );

                axios.post( '/medias' )
                    .then( function ( response ) {
                        // handle success
                        console.log(response);
                    } )
                    .catch( function ( error ) {
                        // handle error
                        console.log( error );
                    } );
            }
        }
    }
</script>

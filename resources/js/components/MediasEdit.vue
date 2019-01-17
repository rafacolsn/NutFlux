<template>
    <div class="content medias-edit">
        <h1>Edit this media</h1>
        <form :action="'/medias/' + media.id" method="post">
            <div class="edit">
                <label for="mediaTitle">Title</label>
                <input type="text" name="mediaTitle" :value="media.title" />
            </div>
            <div class="edit summary">
                <label for="mediaSummary">Summary</label>
                <textarea name="mediaSummary">{{ media.summary }}</textarea>
            </div>
            <div class="edit year">
                <label for="mediaYear">Year</label>
                <input type="number" step="1" name="mediaYear" :value="media.year" />
            </div>
            <div class="edit">
                <label for="mediaTrailer">Trailer</label>
                <input type="text" name="mediaTrailer" :value="media.trailer" />
            </div>
            <div class="edit">
                <label for="mediaIsSerie">Is it part of a TV Show ?</label>
                <input type="checkbox" name="mediaIsSerie" :value="media.is_serie" />
            </div>
            <div class="edit show-poster">
                <label for="mediaPoster">Poster</label>
                <input type="text" name="mediaPoster" :value="media.poster" />
            </div>
            <div class="edit">
                <label for="mediaDirector">Director</label>
                <input type="text" name="mediaDirector" :value="media.director" />
            </div>
            <div class="edit">
                <label for="mediaProducer">Producer</label>
                <input type="text" name="mediaProducer" :value="media.producer" />
            </div>

            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" :value="csrf">

            <button type="submit" v-on:click="send">Save</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['media', 'csrf'],
        data () {
            return {
                mediaId: media.id,
                mediaSummary: media.summary,
                mediaYear: media.year,
                mediaTrailer: media.trailer,
                mediaIsSerie: media.is_serie,
                mediaPoster: media.poster,
                mediaDirector: media.director,
                mediaProducer: media.producer,
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

                axios.patch( '/medias/' + media.id )
                    .then( function ( response ) {
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

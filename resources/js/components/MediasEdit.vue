<template>
    <div class="container">
        <h1>Edit this media</h1>
        <form method="post" :action="'/medias/' + media.id">
            <p>
                <label for="mediaTitle">Title</label>
                <input type="text" name="mediaTitle" :value="media.title" />
            </p>
            <p>
                <label for="mediaSummary">Summary</label>
                <textarea name="mediaSummary">{{ media.summary }}</textarea>
            </p>
            <p>
                <label for="mediaYear">Year</label>
                <input type="number" step="1" name="mediaYear" :value="media.Year" />
            </p>
            <p>
                <label for="mediaTrailer">Trailer</label>
                <input type="text" name="mediaTrailer" :value="media.trailer" />
            </p>
            <p>
                <label for="mediaIsSerie">Is it part of a TV Show ?</label>
                <input type="checkbox" name="mediaIsSerie" :value="media.is_serie" />
            </p>
            <p>
                <label for="mediaPoster">Poster</label>
                <input type="text" name="mediaPoster" :value="media.poster" />
            </p>
            <p>
                <label for="mediaDirector">Director</label>
                <input type="text" name="mediaDirector" :value="media.director" />
            </p>
            <p>
                <label for="mediaProducer">Producer</label>
                <input type="text" name="mediaProducer" :value="media.producer" />
            </p>

            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" :value="csrf">

            <button v-on:click="send">Edit</button>
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

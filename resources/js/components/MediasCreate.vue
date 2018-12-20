<template>
    <div class="container">
        <h1>Create a media</h1>
        <form method="post" action="medias">
            <p>
                <label for="mediaTitle">Title</label>
                <input type="text" name="mediaTitle" v-bind="mediaTitle" />
            </p>
            <p>
                <label for="mediaSummary">Summary</label>
                <textarea name="mediaSummary" v-bind="mediaSummary"></textarea>
            </p>
            <p>
                <label for="mediaYear">Year</label>
                <input type="number" step="1" name="mediaYear" v-bind="mediaYear" />
            </p>
            <p>
                <label for="mediaTrailer">Trailer</label>
                <input type="text" name="mediaTrailer" v-bind="mediaTrailer" />
            </p>
            <p>
                <label for="mediaIsSerie">Is it part of a TV Show ?</label>
                <input type="checkbox" name="mediaIsSerie" v-bind="mediaIsSerie" />
            </p>
            <p>
                <label for="mediaPoster">Poster</label>
                <input type="text" name="mediaPoster" v-bind="mediaPoster" />
            </p>
            <p>
                <label for="mediaDirector">Director</label>
                <input type="text" name="mediaDirector" v-bind="mediaDirector" />
            </p>
            <p>
                <label for="mediaProducer">Producer</label>
                <input type="text" name="mediaProducer" v-bind="mediaProducer" />
            </p>

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
            send: function ( event ) {
                axios.post( '/medias' )
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
